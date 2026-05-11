'use client'

import { useEffect, useState } from 'react'

export default function Spinner() {
  const [visible, setVisible] = useState(true)

  useEffect(() => {
    const timer = setTimeout(() => setVisible(false), 600)
    return () => clearTimeout(timer)
  }, [])

  if (!visible) return null

  return (
    <div
      id="spinner"
      className="show position-fixed w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center"
      style={{ zIndex: 99999, background: 'white' }}
    >
      <div className="loading"></div>
    </div>
  )
}
