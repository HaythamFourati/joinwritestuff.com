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

  // Navbar scroll effect - shrink on scroll
  useEffect(() => {
    const handleScroll = () => {
      const scrolled = window.scrollY > 80
      setNavbarScrolled(scrolled)

      const header = document.querySelector('#site-header')
      const navbar = document.querySelector('#navbar-root > div:first-child')
      const phoneLink = document.querySelector('#navbar-root a[href^="tel:"]')

      if (header) {
        header.style.paddingTop = scrolled ? '0.5rem' : '1rem'
      }

      if (navbar) {
        if (scrolled) {
          // Compact state - wider to fit all nav items
          navbar.style.maxWidth = '900px'
          navbar.style.padding = '0.5rem 1.5rem'
          navbar.style.borderRadius = '1rem'
          navbar.style.boxShadow = '0 4px 20px rgba(0, 0, 0, 0.08)'
          navbar.classList.add('bg-white/95')
          navbar.classList.remove('bg-white/80')
        } else {
          // Full state
          navbar.style.maxWidth = '72rem'
          navbar.style.padding = '0.75rem 1.5rem'
          navbar.style.borderRadius = '1rem'
          navbar.style.boxShadow = '0 1px 3px rgba(0, 0, 0, 0.05)'
          navbar.classList.remove('bg-white/95')
          navbar.classList.add('bg-white/80')
        }
      }

      // Fade phone link on compact
      if (phoneLink) {
        phoneLink.style.opacity = scrolled ? '0' : '1'
        phoneLink.style.width = scrolled ? '0' : 'auto'
        phoneLink.style.overflow = 'hidden'
        phoneLink.style.pointerEvents = scrolled ? 'none' : 'auto'
      }
    }

    window.addEventListener('scroll', handleScroll)
    handleScroll() // Initial check
    return () => window.removeEventListener('scroll', handleScroll)
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
      // Just make everything visible immediately
      gsap.set([
        "#site-header", ".hero-content > *", ".hero-badge", ".floating-envelope",
        ".whats-inside-card", ".timeline-step", ".value-card",
        ".cta-pulse-button", "#contact > div > *"
      ].join(', '), { opacity: 1, y: 0, x: 0, scale: 1 })
      
      // Hide image slices
      gsap.set(".hero-image-slices > div", { scaleY: 0 })
      
      return
    }

    const ctx = gsap.context(() => {
      // === ON-LOAD ANIMATIONS (both mobile and desktop) ===
      
      // Header slide in - simple, always runs
      gsap.fromTo("#site-header",
        { y: -50, opacity: 0 },
        { y: 0, opacity: 1, duration: 0.6, ease: "power2.out" }
      )

      // Hero content simple fade in (mobile-friendly)
      if (isMobile) {
        // Mobile: Simple fade in, no text splitting
        gsap.fromTo(".hero-content > *", 
          { y: 20, opacity: 0 },
          { y: 0, opacity: 1, duration: 0.5, stagger: 0.08, ease: "power2.out", delay: 0.2 }
        )
        
        // Simple image reveal on mobile
        gsap.set(".hero-image-slices > div", { scaleY: 0 })
        
        // Hero badge simple fade
        gsap.fromTo(".hero-badge",
          { opacity: 0 },
          { opacity: 1, duration: 0.4, delay: 0.5 }
        )

        // Service page - simple fade on mobile
        const serviceHeroContent = document.querySelector('.service-hero-content')
        if (serviceHeroContent) {
          gsap.fromTo('.service-hero-content > *',
            { y: 20, opacity: 0 },
            { y: 0, opacity: 1, duration: 0.5, stagger: 0.08, ease: "power2.out", delay: 0.2 }
          )
          gsap.set('.service-hero-image .hero-image-slices > div', { scaleY: 0 })
        }

        // Blog page - simple fade on mobile
        const blogHeroContent = document.querySelector('.blog-hero-content')
        if (blogHeroContent) {
          gsap.fromTo('.blog-hero-content > *',
            { y: 20, opacity: 0 },
            { y: 0, opacity: 1, duration: 0.5, stagger: 0.08, ease: "power2.out", delay: 0.2 }
          )
        }

        // Single post - simple fade on mobile
        const singlePostHeader = document.querySelector('.single-post-header')
        if (singlePostHeader) {
          gsap.fromTo('.single-post-header > *',
            { y: 20, opacity: 0 },
            { y: 0, opacity: 1, duration: 0.5, stagger: 0.06, ease: "power2.out", delay: 0.2 }
          )
        }

        // Make all scroll-animated content visible on mobile (no scroll animations)
        gsap.set([
          ".whats-inside-card", ".timeline-step", ".value-card",
          "#contact > div > *"
        ].join(', '), { opacity: 1, y: 0, scale: 1 })
        
        return // Exit early for mobile - no scroll animations
      }

      // === DESKTOP ONLY: Full animations ===

      // Split text reveal animation for hero heading
      const textElements = document.querySelectorAll('.hero-text-reveal')
      textElements.forEach((el) => {
        const text = el.innerHTML
        let chars = ''
        let inTag = false
        let currentTag = ''
        
        for (let i = 0; i < text.length; i++) {
          const char = text[i]
          if (char === '<') {
            inTag = true
            currentTag = char
          } else if (char === '>') {
            inTag = false
            currentTag += char
            chars += currentTag
            currentTag = ''
          } else if (inTag) {
            currentTag += char
          } else if (char === ' ') {
            chars += ' '
          } else {
            chars += `<span class="char" style="display:inline-block;opacity:0;transform:translateY(50px)">${char}</span>`
          }
        }
        el.innerHTML = chars
      })

      // Animate characters
      gsap.to(".hero-heading .char", {
        opacity: 1,
        y: 0,
        duration: 0.6,
        stagger: 0.02,
        ease: "power3.out",
        delay: 0.2
      })

      // Hero content fade in
      gsap.fromTo(".hero-content > *:not(.hero-heading)", 
        { y: 30, opacity: 0 },
        { y: 0, opacity: 1, duration: 0.8, stagger: 0.12, ease: "power3.out", delay: 0.8 }
      )

      // Hero image slice reveal
      gsap.fromTo(".hero-image-slices > div",
        { scaleY: 1 },
        { scaleY: 0, transformOrigin: "top", duration: 0.7, stagger: 0.15, ease: "power3.inOut", delay: 0.5 }
      )

      // Hero badge pop in
      gsap.fromTo(".hero-badge",
        { scale: 0.8, opacity: 0, y: 20 },
        { scale: 1, opacity: 1, y: 0, duration: 0.6, ease: "back.out(1.7)", delay: 1.2 }
      )

      // Floating envelope gentle animation
      gsap.to(".floating-envelope", {
        y: -15,
        duration: 2.5,
        ease: "power1.inOut",
        repeat: -1,
        yoyo: true
      })

      // CTA button gentle pulse
      gsap.to(".cta-pulse-button", {
        scale: 1.02,
        duration: 1.5,
        ease: "power1.inOut",
        repeat: -1,
        yoyo: true
      })

      // === DESKTOP SCROLL ANIMATIONS WITH BATCH ===

      // Batch "What's Inside" cards
      ScrollTrigger.batch('.whats-inside-card', {
        onEnter: (elements) => {
          gsap.fromTo(elements,
            { y: 50, opacity: 0, scale: 0.95 },
            { y: 0, opacity: 1, scale: 1, duration: 0.7, stagger: 0.12, ease: "power2.out" }
          )
        },
        start: 'top 85%',
        once: true
      })

      // Timeline steps (alternating animation)
      ScrollTrigger.batch('.timeline-step', {
        onEnter: (elements) => {
          gsap.fromTo(elements,
            { y: 40, opacity: 0 },
            { y: 0, opacity: 1, duration: 0.6, stagger: 0.2, ease: "power2.out" }
          )
        },
        start: 'top 80%',
        once: true
      })

      // Value cards
      ScrollTrigger.batch('.value-card', {
        onEnter: (elements) => {
          gsap.fromTo(elements,
            { y: 50, opacity: 0, scale: 0.95 },
            { y: 0, opacity: 1, scale: 1, duration: 0.7, stagger: 0.15, ease: "power2.out" }
          )
        },
        start: 'top 85%',
        once: true
      })

      // What's Inside section header
      const whatsInsideSection = document.querySelector('#whats-inside')
      if (whatsInsideSection) {
        ScrollTrigger.create({
          trigger: '#whats-inside',
          start: 'top 80%',
          once: true,
          onEnter: () => {
            gsap.fromTo('#whats-inside .text-center',
              { y: 30, opacity: 0 },
              { y: 0, opacity: 1, duration: 0.6, ease: "power2.out" }
            )
          }
        })
      }

      // How It Works section header
      const howItWorksSection = document.querySelector('#how-it-works')
      if (howItWorksSection) {
        ScrollTrigger.create({
          trigger: '#how-it-works',
          start: 'top 80%',
          once: true,
          onEnter: () => {
            gsap.fromTo('#how-it-works .text-center',
              { y: 30, opacity: 0 },
              { y: 0, opacity: 1, duration: 0.6, ease: "power2.out" }
            )
          }
        })
      }

      // Founding Membership section
      const foundingSection = document.querySelector('#founding-membership')
      if (foundingSection) {
        ScrollTrigger.create({
          trigger: '#founding-membership',
          start: 'top 75%',
          once: true,
          onEnter: () => {
            gsap.fromTo('#founding-membership .max-w-lg',
              { y: 40, opacity: 0, scale: 0.95 },
              { y: 0, opacity: 1, scale: 1, duration: 0.7, ease: "back.out(1.2)" }
            )
          }
        })
      }

      // Who We Are section header
      const whoWeAreSection = document.querySelector('#who-we-are')
      if (whoWeAreSection) {
        ScrollTrigger.create({
          trigger: '#who-we-are',
          start: 'top 80%',
          once: true,
          onEnter: () => {
            gsap.fromTo('#who-we-are .text-center',
              { y: 30, opacity: 0 },
              { y: 0, opacity: 1, duration: 0.6, ease: "power2.out" }
            )
          }
        })
      }

      // Contact section
      const contactSection = document.querySelector('#contact')
      if (contactSection) {
        ScrollTrigger.create({
          trigger: '#contact',
          start: 'top 80%',
          once: true,
          onEnter: () => {
            gsap.fromTo('#contact .contact-info',
              { x: -30, opacity: 0 },
              { x: 0, opacity: 1, duration: 0.6, ease: "power2.out" }
            )
            gsap.fromTo('#contact #contact-form-root',
              { x: 30, opacity: 0 },
              { x: 0, opacity: 1, duration: 0.6, ease: "power2.out", delay: 0.2 }
            )
          }
        })
      }
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
