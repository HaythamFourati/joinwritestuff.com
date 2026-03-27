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
          navbar.style.maxWidth = '56rem'
          navbar.style.padding = '0.5rem 1.5rem'
          navbar.style.borderRadius = '0.75rem'
          navbar.style.boxShadow = '0 4px 20px rgba(0, 0, 0, 0.06)'
          navbar.classList.add('bg-white/95')
          navbar.classList.remove('bg-white/90')
        } else {
          navbar.style.maxWidth = '64rem'
          navbar.style.padding = '0.75rem 1.5rem'
          navbar.style.borderRadius = '0.75rem'
          navbar.style.boxShadow = '0 1px 3px rgba(0, 0, 0, 0.04)'
          navbar.classList.remove('bg-white/95')
          navbar.classList.add('bg-white/90')
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
