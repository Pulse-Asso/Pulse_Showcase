import type { Metadata } from 'next'
import ContactForm from '@/components/ContactForm'

export const metadata: Metadata = {
  title: 'Contact – Demandez une démonstration ou posez vos questions',
  description:
    "Contactez l'équipe GenPulse pour une démonstration, un partenariat ou toute question. Nous vous répondons rapidement.",
  keywords: ['contact GenPulse', 'démonstration GenPulse', 'partenariat GenPulse', 'support GenPulse'],
  alternates: { canonical: 'https://genpulse.fr/contact' },
  openGraph: {
    title: 'Contactez GenPulse',
    description: "Demandez une démonstration ou posez vos questions à l'équipe GenPulse.",
    images: [{ url: '/img/cover.jpg', width: 1200, height: 630, alt: 'Contact GenPulse' }],
  },
}

const contactSchema = {
  '@context': 'https://schema.org',
  '@type': 'ContactPage',
  name: 'Contact GenPulse',
  url: 'https://genpulse.fr/contact',
  breadcrumb: {
    '@type': 'BreadcrumbList',
    itemListElement: [
      { '@type': 'ListItem', position: 1, name: 'Accueil', item: 'https://genpulse.fr' },
      { '@type': 'ListItem', position: 2, name: 'Contact', item: 'https://genpulse.fr/contact' },
    ],
  },
}

const infoCards = [
  {
    icon: 'fas fa-envelope',
    title: 'Email',
    value: 'genpulse.pro@gmail.com',
    href: 'mailto:genpulse.pro@gmail.com',
  },
  {
    icon: 'fas fa-clock',
    title: 'Délai de réponse',
    value: 'Sous 24–48h',
    href: null,
  },
  {
    icon: 'fas fa-map-marker-alt',
    title: 'Localisation',
    value: 'France',
    href: null,
  },
]

export default function ContactPage() {
  return (
    <>
      <script type="application/ld+json" dangerouslySetInnerHTML={{ __html: JSON.stringify(contactSchema) }} />

      {/* Hero */}
      <section className="hero-section" style={{ minHeight: '40vh', display: 'flex', alignItems: 'center' }}>
        <div className="hero-content">
          <div className="hero-text">
            <h1 className="hero-title">
              Parlons de votre <span className="highlight">projet</span>
            </h1>
            <p className="hero-subtitle">
              Une démonstration, un partenariat, une question ? Notre équipe vous répond rapidement.
            </p>
          </div>
        </div>
      </section>

      {/* Info cards */}
      <section style={{ background: 'white', padding: '3rem 0' }}>
        <div className="container">
          <div className="contact-info-grid">
            {infoCards.map((card) => (
              <div
                key={card.title}
                style={{
                  background: '#fef7ed',
                  borderRadius: '16px',
                  padding: '1.75rem',
                  textAlign: 'center',
                  border: '1px solid rgba(255,107,53,0.1)',
                }}
              >
                <div style={{ width: '50px', height: '50px', background: 'linear-gradient(135deg,#ff6b35,#f7931e)', borderRadius: '50%', display: 'flex', alignItems: 'center', justifyContent: 'center', margin: '0 auto 1rem', color: 'white', fontSize: '1.25rem' }}>
                  <i className={card.icon}></i>
                </div>
                <p style={{ fontWeight: 600, color: '#1e293b', marginBottom: '0.25rem', fontSize: '0.875rem', textTransform: 'uppercase', letterSpacing: '0.05em' }}>{card.title}</p>
                {card.href ? (
                  <a href={card.href} style={{ color: '#ff6b35', fontWeight: 500 }}>{card.value}</a>
                ) : (
                  <p style={{ color: '#64748b', margin: 0 }}>{card.value}</p>
                )}
              </div>
            ))}
          </div>
        </div>
      </section>

      {/* Form */}
      <section className="section" style={{ background: '#f8fafc', padding: '5rem 0' }}>
        <div className="container">
          <div style={{ maxWidth: '760px', margin: '0 auto' }}>
            <div style={{ textAlign: 'center', marginBottom: '3rem' }}>
              <p style={{ color: '#ff6b35', fontWeight: 600, textTransform: 'uppercase', letterSpacing: '0.1em', fontSize: '0.875rem', marginBottom: '0.75rem' }}>
                Formulaire de contact
              </p>
              <h2 style={{ fontSize: 'clamp(1.75rem,3vw,2.5rem)', fontWeight: 700, color: '#1e293b' }}>
                Envoyez-nous un message
              </h2>
            </div>

            <div className="contact-form-wrapper">
              <ContactForm />
            </div>
          </div>
        </div>
      </section>
    </>
  )
}
