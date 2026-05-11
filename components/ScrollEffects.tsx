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

    // iOS fix: force-load feature-card images that may not render on Safari
    const isIOS =
      /iPad|iPhone|iPod/.test(navigator.userAgent) ||
      (navigator.platform === 'MacIntel' && navigator.maxTouchPoints > 1)

    if (isIOS) {
      const featureImages = document.querySelectorAll<HTMLImageElement>(
        '.solution-feature-card .feature-image img'
      )
      featureImages.forEach((img) => {
        img.removeAttribute('loading')
        const src = img.src
        img.src = ''
        img.src = src
        img.style.display = 'block'
        img.style.visibility = 'visible'
        img.style.opacity = '1'
        new window.Image().src = src
      })

      const iosObserver = new IntersectionObserver(
        (entries) => {
          entries.forEach((entry) => {
            const img = entry.target as HTMLImageElement
            if (entry.isIntersecting && !img.complete) {
              img.src = img.src
            }
          })
        },
        { threshold: 0.01 }
      )
      featureImages.forEach((img) => iosObserver.observe(img))
    }

    window.addEventListener('scroll', handleScroll, { passive: true })
    return () => {
      window.removeEventListener('scroll', handleScroll)
      revealObserver.disconnect()
      if (document.body.contains(progressBar)) document.body.removeChild(progressBar)
    }
  }, [])

  return null
}
