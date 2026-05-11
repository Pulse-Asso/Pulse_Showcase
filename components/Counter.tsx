'use client'

import { useEffect, useRef, useState } from 'react'

interface CounterProps {
  target: number
  suffix?: string
  duration?: number
}

export default function Counter({ target, suffix = '', duration = 1500 }: CounterProps) {
  const [count, setCount] = useState(0)
  const animated = useRef(false)
  const ref = useRef<HTMLSpanElement>(null)

  useEffect(() => {
    const el = ref.current
    if (!el) return

    const observer = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting && !animated.current) {
            animated.current = true
            const increment = target / (duration / 16)
            let current = 0

            const update = () => {
              current += increment
              if (current < target) {
                setCount(Math.floor(current))
                requestAnimationFrame(update)
              } else {
                setCount(target)
              }
            }

            setTimeout(update, 500)
          }
        })
      },
      { threshold: 0.3 }
    )

    observer.observe(el)
    return () => observer.disconnect()
  }, [target, duration])

  return (
    <span ref={ref} className="counter" data-target={target}>
      {count}
      {suffix}
    </span>
  )
}
