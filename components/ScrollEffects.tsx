'use client'

import { useEffect } from 'react'

export default function ScrollEffects() {
  useEffect(() => {
    // Scroll progress bar
    const progressBar = document.createElement('div')
    progressBar.setAttribute('data-scroll-progress', 'true')
    progressBar.style.cssText =
      'position:fixed;top:0;left:0;width:0%;height:3px;background:linear-gradient(90deg,#ff6b35,#f7931e);z-index:10001;transition:width 0.3s ease;will-change:width;'
    document.body.appendChild(progressBar)

    let ticking = false
    const handleScroll = () => {
      if (!ticking) {
        window.requestAnimationFrame(() => {
          const scrollY = window.scrollY

          // Navbar shadow
          const navbar = document.querySelector('.navbar') as HTMLElement | null
          if (navbar) {
            navbar.style.background = scrollY > 50 ? 'rgba(255,255,255,0.98)' : 'rgba(255,255,255,0.95)'
            navbar.style.boxShadow = scrollY > 50 ? '0 4px 20px rgba(0,0,0,0.1)' : 'none'
          }

          // Progress bar
          const scrolled =
            (scrollY / (document.documentElement.scrollHeight - window.innerHeight)) * 100
          progressBar.style.width = Math.min(scrolled, 100) + '%'

          ticking = false
        })
        ticking = true
      }
    }

    // Scroll-reveal cards
    const revealObserver = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            ;(entry.target as HTMLElement).style.opacity = '1'
            ;(entry.target as HTMLElement).style.transform = 'translateY(0)'
          }
        })
      },
      { threshold: 0.1, rootMargin: '0px 0px -50px 0px' }
    )

    document.querySelectorAll<HTMLElement>('.card, .feature-card, .stat-item').forEach((el) => {
      el.style.opacity = '0'
      el.style.transform = 'translateY(30px)'
      el.style.transition = 'opacity 0.6s ease-out, transform 0.6s ease-out'
      revealObserver.observe(el)
    })

    window.addEventListener('scroll', handleScroll, { passive: true })
    return () => {
      window.removeEventListener('scroll', handleScroll)
      revealObserver.disconnect()
      if (document.body.contains(progressBar)) document.body.removeChild(progressBar)
    }
  }, [])

  return null
}
