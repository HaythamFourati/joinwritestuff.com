import React, { useEffect, useState, useRef } from "react"
import gsap from "gsap"
import { ScrollTrigger } from "gsap/ScrollTrigger"

gsap.registerPlugin(ScrollTrigger)

// Check for reduced motion preference
const prefersReducedMotion = typeof window !== 'undefined' 
  ? window.matchMedia('(prefers-reduced-motion: reduce)').matches 
  : false

// Check if mobile (under 1024px)
const isMobile = typeof window !== 'undefined' 
  ? window.innerWidth < 1024 
  : false

/**
 * React Enhancer - Adds interactivity to PHP-rendered content
 * This component enhances the static HTML with:
 * - GSAP animations (desktop only, respects reduced motion)
 * - Navbar scroll effects
 * - Reviews carousel
 * - Mobile menu toggle
 * - Form handling
 */
function Enhancer() {
  const [currentReview, setCurrentReview] = useState(0)
  const [mobileMenuOpen, setMobileMenuOpen] = useState(false)
  const [navbarScrolled, setNavbarScrolled] = useState(false)

  // Testimonials for Komedy & Kindness Mail Club
  const memberReviews = [
    { name: "Sarah M.", text: "Opening my mailbox has become the highlight of my month. Pure joy in paper form!" },
    { name: "Michael K.", text: "In a digital world, this analog surprise brings so much warmth. Highly recommend!" },
    { name: "Emily R.", text: "The jokes make me laugh, the letters make me cry (happy tears). It's perfect." },
    { name: "David T.", text: "Finally, something in my mailbox that isn't a bill. This club is a gift to myself." },
  ]

  // Reviews carousel auto-rotation
  useEffect(() => {
    const reviewInterval = setInterval(() => {
      setCurrentReview((prev) => (prev + 1) % memberReviews.length)
    }, 4000)
    return () => clearInterval(reviewInterval)
  }, [memberReviews.length])

  // Update reviews carousel in DOM
  useEffect(() => {
    const carouselRoot = document.getElementById('reviews-carousel-root')
    if (!carouselRoot) return

    const reviewContainer = carouselRoot.querySelector('.relative.h-16')
    if (!reviewContainer) return

    // Update the review text
    reviewContainer.innerHTML = `
      <p class="text-sm text-foreground leading-relaxed line-clamp-2">
        "${memberReviews[currentReview].text}"
      </p>
      <p class="text-xs text-muted-foreground mt-1 font-medium">— ${memberReviews[currentReview].name}</p>
    `
  }, [currentReview, memberReviews])

  // Hero video poster → iframe on click (hero only — standalone)
  useEffect(() => {
    const wrapper = document.getElementById('hero-video-wrapper')
    if (!wrapper) return

    const handleClick = (e) => {
      const poster = document.getElementById('hero-video-poster')
      if (!poster) return
      
      // Prevent if already has iframe
      if (wrapper.querySelector('iframe')) return
      
      e.preventDefault()
      e.stopPropagation()

      const iframe = document.createElement('iframe')
      iframe.src = 'https://www.youtube.com/embed/HiV3nH6TyQM?autoplay=1&loop=1&playlist=HiV3nH6TyQM&controls=1&rel=0&modestbranding=1&playsinline=1'
      iframe.title = 'Leslie — Hug In The Mail subscriber'
      iframe.className = 'absolute inset-0 w-full h-full block'
      iframe.frameBorder = '0'
      iframe.allow = 'accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture'
      iframe.allowFullscreen = true
      
      // Create close button overlay
      const closeBtn = document.createElement('button')
      closeBtn.className = 'absolute top-2 right-2 z-10 w-8 h-8 rounded-full bg-black/70 backdrop-blur-sm flex items-center justify-center text-white hover:bg-black/90 transition-all duration-200'
      closeBtn.setAttribute('aria-label', 'Close video')
      closeBtn.innerHTML = '<svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M18 6L6 18M6 6l12 12"/></svg>'
      closeBtn.onclick = (e) => {
        e.preventDefault()
        e.stopPropagation()
        // Restore hero poster
        iframe.remove()
        closeBtn.remove()
        const restoredPoster = document.createElement('div')
        restoredPoster.id = 'hero-video-poster'
        restoredPoster.className = 'absolute inset-0 cursor-pointer group'
        restoredPoster.style.touchAction = 'manipulation'
        restoredPoster.innerHTML = `
          <img src="https://i.ytimg.com/vi/HiV3nH6TyQM/hqdefault.jpg" alt="Leslie's subscriber story" class="w-full h-full object-cover block">
          <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent"></div>
          <div class="absolute top-3 left-3 right-3">
            <p class="text-white text-[11px] font-semibold leading-snug drop-shadow-sm italic">"I could really use a hug — and one came in the mail."</p>
          </div>
          <div class="absolute bottom-3 right-3 w-12 h-12 rounded-full bg-primary flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform duration-200">
            <svg class="w-5 h-5 text-white ml-0.5" viewBox="0 0 24 24" fill="currentColor"><polygon points="5,3 19,12 5,21"/></svg>
          </div>
          <div class="absolute bottom-3 left-3 bg-white/95 text-foreground text-[10px] font-bold tracking-wide px-2.5 py-1 rounded-full shadow">— LESLIE, SUBSCRIBER</div>
        `
        wrapper.appendChild(restoredPoster)
      }
      
      poster.remove()
      wrapper.appendChild(iframe)
      wrapper.appendChild(closeBtn)
    }

    // Use event delegation on wrapper for better mobile support
    wrapper.addEventListener('click', handleClick)
    wrapper.addEventListener('touchend', handleClick)
    return () => {
      wrapper.removeEventListener('click', handleClick)
      wrapper.removeEventListener('touchend', handleClick)
    }
  }, [])

  // Testimonials carousel — video + auto-advance + UX rules
  useEffect(() => {
    const carousel = document.getElementById('testimonials-carousel')
    if (!carousel) return

    const slides = carousel.querySelectorAll('.testimonial-slide')
    const dots = carousel.querySelectorAll('.testimonial-dot')
    const counter = document.getElementById('testimonials-counter')
    const prevBtn = document.getElementById('testimonials-prev')
    const nextBtn = document.getElementById('testimonials-next')
    const total = slides.length
    if (!total) return

    // Per-slide video metadata
    const slideVideos = [
      { 
        videoId: 'HiV3nH6TyQM', 
        title: 'Leslie — Hug In The Mail subscriber', 
        label: '— LESLIE, SUBSCRIBER',
        quote: '"I could really use a hug — and one came in the mail."'
      },
      { 
        videoId: 'UaJ2BirDlEk', 
        title: 'Subscriber testimonial — Hug In The Mail', 
        label: '— A SUBSCRIBER',
        quote: '"Something in the mail that actually made me smile."'
      },
      { 
        videoId: 'vmaqV76Ujx0', 
        title: 'Subscriber testimonial — Hug In The Mail', 
        label: '— A SUBSCRIBER',
        quote: '"It feels like getting a hug from a stranger who somehow knows you."'
      },
    ]

    // Track auto-advance timer
    let autoTimer = null
    let isHovered = false

    // Returns true if the slide at [index] has a live iframe (video playing)
    const slideHasActiveVideo = (index) => {
      const wrapper = document.getElementById(`testimonial-video-wrapper-${index}`)
      return wrapper ? !!wrapper.querySelector('iframe') : false
    }

    // Destroy the iframe in a slide and restore the poster thumbnail
    const killVideo = (index) => {
      const wrapper = document.getElementById(`testimonial-video-wrapper-${index}`)
      if (!wrapper) return
      const iframe = wrapper.querySelector('iframe')
      if (!iframe) return

      // Remove the iframe (stops playback)
      iframe.remove()
      
      // Remove close button if it exists
      const closeBtn = wrapper.querySelector('button[aria-label="Close video"]')
      closeBtn?.remove()

      // Re-inject the poster thumbnail
      const { videoId, title, label, quote } = slideVideos[index]

      const poster = document.createElement('div')
      poster.id = `testimonial-video-poster-${index}`
      poster.className = 'absolute inset-0 cursor-pointer group'
      poster.style.touchAction = 'manipulation' // Better mobile touch
      poster.innerHTML = `
        <img
          src="https://i.ytimg.com/vi/${videoId}/hqdefault.jpg"
          alt="${title}"
          class="w-full h-full object-cover block"
          width="480" height="360"
        >
        <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent"></div>
        <div class="absolute top-3 left-3 right-3">
          <p class="text-white text-[11px] font-semibold leading-snug drop-shadow-sm italic">${quote}</p>
        </div>
        <div class="absolute bottom-3 right-3 w-12 h-12 rounded-full bg-primary flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform duration-200">
          <svg class="w-5 h-5 text-white ml-0.5" viewBox="0 0 24 24" fill="currentColor"><polygon points="5,3 19,12 5,21"/></svg>
        </div>
        ${label ? `<div class="absolute bottom-3 left-3 bg-white/95 text-foreground text-[10px] font-bold tracking-wide px-2.5 py-1 rounded-full shadow">${label}</div>` : ''}
      `
      wrapper.appendChild(poster)
    }

    // Inject iframe into a slide's wrapper
    const playVideo = (index) => {
      const wrapper = document.getElementById(`testimonial-video-wrapper-${index}`)
      if (!wrapper || wrapper.querySelector('iframe')) return

      const poster = document.getElementById(`testimonial-video-poster-${index}`)
      const { videoId, title } = slideVideos[index]

      const iframe = document.createElement('iframe')
      iframe.src = `https://www.youtube.com/embed/${videoId}?autoplay=1&loop=1&playlist=${videoId}&controls=1&rel=0&modestbranding=1&playsinline=1`
      iframe.title = title
      iframe.className = 'absolute inset-0 w-full h-full block'
      iframe.frameBorder = '0'
      iframe.allow = 'accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture'
      iframe.allowFullscreen = true

      // Create close button overlay
      const closeBtn = document.createElement('button')
      closeBtn.className = 'absolute top-2 right-2 z-10 w-8 h-8 rounded-full bg-black/70 backdrop-blur-sm flex items-center justify-center text-white hover:bg-black/90 transition-all duration-200'
      closeBtn.setAttribute('aria-label', 'Close video')
      closeBtn.innerHTML = '<svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M18 6L6 18M6 6l12 12"/></svg>'
      closeBtn.onclick = (e) => {
        e.preventDefault()
        e.stopPropagation()
        killVideo(index)
        startAuto()
      }

      poster?.remove()
      wrapper.appendChild(iframe)
      wrapper.appendChild(closeBtn)

      // Stop auto-advance while video plays
      stopAuto()
    }

    // Update dots + counter UI
    const updateUI = (index) => {
      dots.forEach((dot, i) => {
        const active = i === index
        dot.classList.toggle('bg-primary', active)
        dot.classList.toggle('scale-125', active)
        dot.classList.toggle('bg-foreground/20', !active)
        dot.setAttribute('aria-selected', active ? 'true' : 'false')
      })
      if (counter) counter.textContent = `${index + 1} / ${total}`
    }

    // Core slide transition
    const goTo = (index, fromAuto = false) => {
      const current = parseInt(carousel.dataset.active, 10) || 0
      if (index === current && !fromAuto) return

      // If a video is playing in the current slide, kill it before leaving
      if (slideHasActiveVideo(current)) {
        killVideo(current)
      }

      slides[current].classList.add('hidden')
      slides[index].classList.remove('hidden')
      updateUI(index)
      carousel.dataset.active = index
    }

    // Auto-advance logic
    const startAuto = () => {
      stopAuto()
      autoTimer = setInterval(() => {
        if (isHovered) return
        const current = parseInt(carousel.dataset.active, 10) || 0
        // Don't advance if a video is actively playing in the current slide
        if (slideHasActiveVideo(current)) return
        goTo((current + 1) % total, true)
      }, 5000)
    }

    const stopAuto = () => {
      if (autoTimer) {
        clearInterval(autoTimer)
        autoTimer = null
      }
    }

    // Use event delegation on each wrapper for mobile-friendly video play
    slideVideos.forEach((_, i) => {
      const wrapper = document.getElementById(`testimonial-video-wrapper-${i}`)
      if (!wrapper) return
      
      const handleVideoClick = (e) => {
        // Only trigger if clicking the poster (not the iframe)
        const poster = document.getElementById(`testimonial-video-poster-${i}`)
        if (!poster || wrapper.querySelector('iframe')) return
        
        e.preventDefault()
        e.stopPropagation()
        playVideo(i)
      }
      
      wrapper.addEventListener('click', handleVideoClick)
      wrapper.addEventListener('touchend', handleVideoClick)
      
      // Store cleanup function
      wrapper._cleanupVideo = () => {
        wrapper.removeEventListener('click', handleVideoClick)
        wrapper.removeEventListener('touchend', handleVideoClick)
      }
    })

    // Prev / Next / Dot handlers — always stop playing video first
    const handlePrev = () => {
      const current = parseInt(carousel.dataset.active, 10) || 0
      goTo((current - 1 + total) % total)
      startAuto()
    }

    const handleNext = () => {
      const current = parseInt(carousel.dataset.active, 10) || 0
      goTo((current + 1) % total)
      startAuto()
    }

    const dotHandlers = Array.from(dots).map((dot) => {
      const handler = () => {
        goTo(parseInt(dot.dataset.dot, 10))
        startAuto()
      }
      dot.addEventListener('click', handler)
      return { dot, handler }
    })

    // Pause auto-advance on hover
    const handleMouseEnter = () => { isHovered = true }
    const handleMouseLeave = () => { isHovered = false }

    prevBtn?.addEventListener('click', handlePrev)
    nextBtn?.addEventListener('click', handleNext)
    carousel.addEventListener('mouseenter', handleMouseEnter)
    carousel.addEventListener('mouseleave', handleMouseLeave)

    // Kick off auto-advance
    startAuto()

    return () => {
      stopAuto()
      prevBtn?.removeEventListener('click', handlePrev)
      nextBtn?.removeEventListener('click', handleNext)
      carousel.removeEventListener('mouseenter', handleMouseEnter)
      carousel.removeEventListener('mouseleave', handleMouseLeave)
      dotHandlers.forEach(({ dot, handler }) => dot.removeEventListener('click', handler))
      
      // Clean up video wrapper listeners
      slideVideos.forEach((_, i) => {
        const wrapper = document.getElementById(`testimonial-video-wrapper-${i}`)
        wrapper?._cleanupVideo?.()
      })
    }
  }, [])

  // Navbar scroll effect - shrink on scroll
  useEffect(() => {
    let wasScrolled = null
    let rafId = null

    const navRoot = document.querySelector('#navbar-root')
    const navBg = document.querySelector('#navbar-bg')
    const logo = document.querySelector('#navbar-logo')

    if (!navRoot && !navBg) return

    const applyScrollState = (scrolled) => {
      if (scrolled === wasScrolled) return
      wasScrolled = scrolled

      if (navBg) {
        navBg.style.opacity = scrolled ? '1' : '0'
      }
      if (navRoot) {
        navRoot.style.paddingTop = scrolled ? '0.25rem' : '0.75rem'
        navRoot.style.paddingBottom = scrolled ? '0.25rem' : '0.75rem'
      }
      if (logo) {
        logo.style.height = scrolled ? '3.5rem' : ''
      }
    }

    const handleScroll = () => {
      if (rafId) return
      rafId = requestAnimationFrame(() => {
        rafId = null
        applyScrollState(window.scrollY > 80)
      })
    }

    window.addEventListener('scroll', handleScroll, { passive: true })
    applyScrollState(window.scrollY > 80)
    return () => {
      window.removeEventListener('scroll', handleScroll)
      if (rafId) cancelAnimationFrame(rafId)
    }
  }, [])

  // Mobile menu toggle
  useEffect(() => {
    const toggleBtn = document.getElementById('mobile-menu-toggle')
    const menuPanel = document.getElementById('mobile-menu-panel')
    const iconOpen = document.getElementById('mobile-menu-icon-open')
    const iconClose = document.getElementById('mobile-menu-icon-close')
    const servicesToggle = document.getElementById('mobile-services-toggle')
    const servicesMenu = document.getElementById('mobile-services-menu')
    
    if (!toggleBtn || !menuPanel) return

    const handleToggle = () => {
      const isOpen = !menuPanel.classList.contains('hidden')
      
      if (isOpen) {
        // Close menu
        menuPanel.classList.add('hidden')
        iconOpen?.classList.remove('hidden')
        iconClose?.classList.add('hidden')
      } else {
        // Open menu
        menuPanel.classList.remove('hidden')
        iconOpen?.classList.add('hidden')
        iconClose?.classList.remove('hidden')
      }
      
      setMobileMenuOpen(!isOpen)
    }

    const handleServicesToggle = () => {
      if (!servicesMenu) return
      const isOpen = !servicesMenu.classList.contains('hidden')
      
      if (isOpen) {
        servicesMenu.classList.add('hidden')
        servicesToggle?.querySelector('svg')?.classList.remove('rotate-180')
      } else {
        servicesMenu.classList.remove('hidden')
        servicesToggle?.querySelector('svg')?.classList.add('rotate-180')
      }
    }

    // Close menu when clicking a link
    const handleLinkClick = () => {
      menuPanel.classList.add('hidden')
      iconOpen?.classList.remove('hidden')
      iconClose?.classList.add('hidden')
      setMobileMenuOpen(false)
    }

    const menuLinks = menuPanel.querySelectorAll('a')
    menuLinks.forEach(link => link.addEventListener('click', handleLinkClick))

    toggleBtn.addEventListener('click', handleToggle)
    servicesToggle?.addEventListener('click', handleServicesToggle)
    
    return () => {
      toggleBtn.removeEventListener('click', handleToggle)
      servicesToggle?.removeEventListener('click', handleServicesToggle)
      menuLinks.forEach(link => link.removeEventListener('click', handleLinkClick))
    }
  }, [])


  // GSAP Animations - Desktop only, respects reduced motion
  useEffect(() => {
    // Skip all animations if user prefers reduced motion
    if (prefersReducedMotion) {
      gsap.set([
        "#site-header", ".hero-content > *",
        ".whats-inside-card", ".timeline-step", ".value-card",
        "#contact > div > *"
      ].join(', '), { opacity: 1, y: 0, x: 0 })
      
      return
    }

    const ctx = gsap.context(() => {
      // === ON-LOAD ANIMATIONS (both mobile and desktop) ===
      
      // Header fade in
      gsap.fromTo("#site-header",
        { y: -20, opacity: 0 },
        { y: 0, opacity: 1, duration: 0.5, ease: "power2.out" }
      )

      // Hero content fade in
      if (isMobile) {
        gsap.fromTo(".hero-content > *", 
          { y: 15, opacity: 0 },
          { y: 0, opacity: 1, duration: 0.4, stagger: 0.06, ease: "power2.out", delay: 0.2 }
        )

        // Simple illustration fade on mobile
        gsap.fromTo(".hero-illustration",
          { opacity: 0, y: 20 },
          { opacity: 1, y: 0, duration: 0.5, ease: "power2.out", delay: 0.1 }
        )

        // Make all scroll-animated content visible on mobile
        gsap.set([
          ".whats-inside-card", ".timeline-step", ".value-card",
          "#contact > div > *"
        ].join(', '), { opacity: 1, y: 0 })
        
        return
      }

      // === DESKTOP: Subtle fade-up animations ===

      // Hero content staggered fade
      gsap.fromTo(".hero-content > *", 
        { y: 20, opacity: 0 },
        { y: 0, opacity: 1, duration: 0.6, stagger: 0.12, ease: "power2.out", delay: 0.2 }
      )

      // === HERO ILLUSTRATION: Orchestrated entrance sequence ===
      const illoTl = gsap.timeline({ delay: 0.3 })

      // 1. Background circle scales in
      illoTl.fromTo(".hero-bg-circle",
        { scale: 0, opacity: 0 },
        { scale: 1, opacity: 1, duration: 0.6, ease: "power2.out" }
      )

      // 2. Envelope appears without coordinate shift
      illoTl.fromTo(".hero-envelope",
        { scale: 0.96, opacity: 0, transformOrigin: "center center" },
        { scale: 1, opacity: 1, duration: 0.5, ease: "power2.out" },
        "-=0.3"
      )

      // 3. Letter slides out of envelope
      illoTl.fromTo(".hero-letter",
        { y: 50, opacity: 0 },
        { y: 0, opacity: 1, duration: 0.7, ease: "power2.out" },
        "-=0.15"
      )

      // 4. Seal pops in
      illoTl.fromTo(".hero-seal",
        { scale: 0, opacity: 0 },
        { scale: 1, opacity: 1, duration: 0.4, ease: "back.out(2)" },
        "-=0.2"
      )

      // 5. Decorative elements fade in together
      illoTl.fromTo([".hero-stamp", ".hero-postcard", ".hero-sparkle", ".hero-heart", ".hero-dots"],
        { opacity: 0 },
        { opacity: 1, duration: 0.5, stagger: 0.06, ease: "power2.out" },
        "-=0.15"
      )

      // === IDLE FLOAT: Subtle looping motion after entrance ===
      illoTl.call(() => {
        // Letter gently bobs
        gsap.to(".hero-letter", {
          y: -8,
          duration: 2.6,
          ease: "sine.inOut",
          repeat: -1,
          yoyo: true
        })
        // Seal breathes subtly
        gsap.to(".hero-seal", {
          scale: 1.03,
          duration: 2.8,
          ease: "sine.inOut",
          repeat: -1,
          yoyo: true,
          transformOrigin: "center center"
        })
        // Stamp drifts via tiny rotation only
        gsap.to(".hero-stamp", {
          rotation: 1.5,
          duration: 3,
          ease: "sine.inOut",
          repeat: -1,
          yoyo: true,
          transformOrigin: "center center"
        })
        // Postcard drifts opposite via tiny rotation only
        gsap.to(".hero-postcard", {
          rotation: -1.2,
          duration: 3.5,
          ease: "sine.inOut",
          repeat: -1,
          yoyo: true,
          transformOrigin: "center center"
        })
        // Sparkle pulses
        gsap.to(".hero-sparkle", {
          scale: 1.15, duration: 2, ease: "sine.inOut", repeat: -1, yoyo: true, transformOrigin: "center center"
        })
        // Heart opacity pulse
        gsap.to(".hero-heart", {
          opacity: 0.55,
          duration: 1.8,
          ease: "sine.inOut",
          repeat: -1,
          yoyo: true
        })
      })

      // === SCROLL-TRIGGERED REVEALS ===

      // What's Inside cards
      ScrollTrigger.batch('.whats-inside-card', {
        onEnter: (elements) => {
          gsap.fromTo(elements,
            { y: 30, opacity: 0 },
            { y: 0, opacity: 1, duration: 0.5, stagger: 0.08, ease: "power2.out" }
          )
        },
        start: 'top 85%',
        once: true
      })

      // Timeline steps
      ScrollTrigger.batch('.timeline-step', {
        onEnter: (elements) => {
          gsap.fromTo(elements,
            { y: 25, opacity: 0 },
            { y: 0, opacity: 1, duration: 0.5, stagger: 0.1, ease: "power2.out" }
          )
        },
        start: 'top 85%',
        once: true
      })

      // Value cards
      ScrollTrigger.batch('.value-card', {
        onEnter: (elements) => {
          gsap.fromTo(elements,
            { y: 30, opacity: 0 },
            { y: 0, opacity: 1, duration: 0.5, stagger: 0.08, ease: "power2.out" }
          )
        },
        start: 'top 85%',
        once: true
      })

      // === DECO POLAROIDS: scroll-triggered entrance + idle float ===
      document.querySelectorAll('.deco-polaroid').forEach((el) => {
        const baseRotation = parseFloat(el.dataset.rotation) || 0

        // Start hidden, slightly off to the side
        gsap.set(el, { opacity: 0, y: 30, rotation: baseRotation - 4 })

        ScrollTrigger.create({
          trigger: el.closest('section') || el,
          start: 'top 80%',
          once: true,
          onEnter: () => {
            gsap.to(el, {
              opacity: 1,
              y: 0,
              rotation: baseRotation,
              duration: 0.8,
              ease: 'power2.out',
              onComplete: () => {
                // Gentle idle float after entrance
                gsap.to(el, {
                  y: -10,
                  rotation: baseRotation + 1.5,
                  duration: 3 + Math.random() * 1.5,
                  ease: 'sine.inOut',
                  repeat: -1,
                  yoyo: true,
                })
              }
            })
          }
        })
      })

      // Section headers
      const sections = ['#whats-inside', '#how-it-works', '#founding-membership', '#who-we-are', '#contact']
      sections.forEach(selector => {
        const section = document.querySelector(selector)
        if (section) {
          ScrollTrigger.create({
            trigger: selector,
            start: 'top 80%',
            once: true,
            onEnter: () => {
              gsap.fromTo(`${selector} .text-center`,
                { y: 20, opacity: 0 },
                { y: 0, opacity: 1, duration: 0.5, ease: "power2.out" }
              )
            }
          })
        }
      })
    })

    return () => ctx.revert()
  }, [])

  // Form handling
  useEffect(() => {
    const form = document.getElementById('contact-form')
    if (!form) return

    const handleSubmit = (e) => {
      e.preventDefault()
      const formData = new FormData(form)
      const data = Object.fromEntries(formData.entries())
      console.log('Form submitted:', data)
      // Add your form submission logic here
      alert('Thank you for your message! We will contact you soon.')
      form.reset()
    }

    form.addEventListener('submit', handleSubmit)
    return () => form.removeEventListener('submit', handleSubmit)
  }, [])

  return null // This component only enhances existing DOM, doesn't render anything
}

export default Enhancer
