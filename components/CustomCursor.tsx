'use client'

import { useEffect } from 'react'

export default function CustomCursor() {
  useEffect(() => {
    const isMobile =
      window.matchMedia('(max-width: 768px)').matches ||
      'ontouchstart' in window ||
      navigator.maxTouchPoints > 0

    if (isMobile) return

    const cursor = document.querySelector('.custom-cursor') as HTMLElement | null
    if (!cursor) return

    const onMove = (e: MouseEvent) => {
      cursor.style.left = e.clientX + 'px'
      cursor.style.top = e.clientY + 'px'
    }

    const addHover = (e: Event) => (e.currentTarget as HTMLElement).addEventListener('mouseleave', removeHover)
    const removeHover = () => cursor.classList.remove('hover')

    document.addEventListener('mousemove', onMove)

    const interactive = document.querySelectorAll('a, button, .nav-link, .dropdown-item, .btn')
    interactive.forEach((el) => {
      el.addEventListener('mouseenter', () => cursor.classList.add('hover'))
      el.addEventListener('mouseleave', () => cursor.classList.remove('hover'))
    })

    return () => {
      document.removeEventListener('mousemove', onMove)
    }
  }, [])

  return <div className="custom-cursor"></div>
}
