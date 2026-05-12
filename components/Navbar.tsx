'use client'

import Link from 'next/link'
import Image from 'next/image'
import { useState } from 'react'
import { usePathname } from 'next/navigation'

export default function Navbar() {
  const [menuOpen, setMenuOpen] = useState(false)
  const [dropdownOpen, setDropdownOpen] = useState(false)
  const pathname = usePathname()

  const isActive = (href: string) => pathname === href
  const isFonctionnalites = pathname.startsWith('/fonctionnalites')

  return (
    <nav className="navbar">
      <div className="container">
        <div className="d-flex justify-content-between align-items-center">
          <Link href="/" className="navbar-brand">
            <Image src="/img/genpulse.png" alt="GenPulse" height={160} width={200} style={{ maxHeight: '55px', width: 'auto', height: 'auto' }} priority />
          </Link>

          <ul className={`navbar-nav${menuOpen ? ' show' : ''}`}>
            <li>
              <Link href="/#hero" className={`nav-link${isActive('/') ? ' active' : ''}`} onClick={() => setMenuOpen(false)}>
                À propos
              </Link>
            </li>

            <li className={`nav-item dropdown${dropdownOpen ? ' show' : ''}`}>
              <a
                href="#"
                className={`nav-link dropdown-toggle${isFonctionnalites ? ' active' : ''}`}
                onClick={(e) => { e.preventDefault(); setDropdownOpen(!dropdownOpen) }}
              >
                Fonctionnalités
              </a>
              <ul className="dropdown-menu">
                <li>
                  <Link href="/fonctionnalites/enseignement" className={`dropdown-item${pathname === '/fonctionnalites/enseignement' ? ' active' : ''}`}
                    onClick={() => { setMenuOpen(false); setDropdownOpen(false) }}>
                    Enseignement supérieur
                  </Link>
                </li>
                <li>
                  <Link href="/fonctionnalites/commune" className={`dropdown-item${pathname === '/fonctionnalites/commune' ? ' active' : ''}`}
                    onClick={() => { setMenuOpen(false); setDropdownOpen(false) }}>
                    Commune
                  </Link>
                </li>
                <li>
                  <Link href="/fonctionnalites/association" className={`dropdown-item${pathname === '/fonctionnalites/association' ? ' active' : ''}`}
                    onClick={() => { setMenuOpen(false); setDropdownOpen(false) }}>
                    Association
                  </Link>
                </li>
              </ul>
            </li>

            <li>
              <Link href="/equipe" className={`nav-link${isActive('/equipe') ? ' active' : ''}`} onClick={() => setMenuOpen(false)}>
                L&apos;équipe
              </Link>
            </li>

            <li>
              <Link href="/partenariats" className={`nav-link${isActive('/partenariats') ? ' active' : ''}`} onClick={() => setMenuOpen(false)}>
                Partenariats
              </Link>
            </li>

            <li style={{ visibility: 'hidden' }}>
              <a href="#" className="btn btn-primary">Obtenir un devis</a>
            </li>
          </ul>

          <button className="navbar-toggler" onClick={() => setMenuOpen(!menuOpen)}>
            <i className="fas fa-bars"></i>
          </button>
        </div>
      </div>
    </nav>
  )
}
