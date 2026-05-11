import type { Metadata } from 'next'
import Image from 'next/image'
import Counter from '@/components/Counter'

export const metadata: Metadata = {
  title: 'Partenariats – Boostez votre visibilité avec GenPulse',
  description:
    "Rejoignez le réseau GenPulse : bons plans, soutien associatif, événements temporaires. Accédez à +70 associations et 2 000 étudiants actifs dans 4 régions. Inscription gratuite.",
  keywords: [
    'partenariat GenPulse',
    'visibilité étudiants',
    'bons plans étudiants',
    'soutien associatif',
    'sponsoring association',
    'événement temporaire',
    'partenariat BDE',
  ],
  alternates: { canonical: 'https://genpulse.pro/partenariats' },
  openGraph: {
    title: 'Partenariats GenPulse – Boostez votre visibilité',
    description:
      "Rejoignez +70 associations et touchez 2 000 étudiants actifs. Bons plans, soutien associatif, événements temporaires.",
    images: [{ url: '/img/partenariat1.jpg', width: 1200, height: 630, alt: 'Partenariats GenPulse' }],
  },
}

const partenariatsSchema = {
  '@context': 'https://schema.org',
  '@type': 'WebPage',
  name: 'Partenariats GenPulse',
  url: 'https://genpulse.pro/partenariats',
  breadcrumb: {
    '@type': 'BreadcrumbList',
    itemListElement: [
      { '@type': 'ListItem', position: 1, name: 'Accueil', item: 'https://genpulse.pro' },
      { '@type': 'ListItem', position: 2, name: 'Partenariats', item: 'https://genpulse.pro/partenariats' },
    ],
  },
}

const stats = [
  { target: 70, suffix: '+', label: 'Associations actives' },
  { target: 4, suffix: '', label: 'Régions couvertes' },
  { target: 2000, suffix: '+', label: 'Étudiants actifs' },
  { target: 0, suffix: '€', label: 'De frais' },
]

const partnerships = [
  {
    title: 'Bons Plans & Réductions',
    desc: 'Proposez des offres exclusives aux étudiants et habitants des communes. Restaurateurs, commerçants, services... Tous peuvent promouvoir leurs produits dans notre section dédiée "Bons Plans".',
    img: '/img/promo.png',
    icon: 'fa-tags',
    benefits: ['Visibilité ciblée sur votre audience', 'Promotion gratuite de vos offres', 'Accès direct aux étudiants et habitants'],
    imgFirst: false,
  },
  {
    title: 'Soutien Associatif',
    desc: 'Vous êtes une entreprise et vous voulez soutenir des associations et projets associatifs. Nous vous accompagnons pour trouver la bonne association selon la catégorie, le projet, la localisation et les événements que vous voulez sponsoriser.',
    img: '/img/rse.jpg',
    icon: 'fa-hands-helping',
    benefits: ['Matching personnalisé avec les associations', 'Impact social et RSE valorisé', 'Accompagnement personnalisé'],
    imgFirst: true,
  },
  {
    title: 'Événements Temporaires',
    desc: 'Organisez des événements temporaires comme des expositions, conférences, ateliers... Mettez en avant votre événement sur l\'application pour toucher un maximum de participants.',
    img: '/img/festival.jpg',
    icon: 'fa-star',
    benefits: ['Redirection vers votre plateforme', 'Inscription et gestion des participants', 'Communication ciblée'],
    imgFirst: false,
  },
]

export default function PartenariatsPage() {
  return (
    <>
      <script type="application/ld+json" dangerouslySetInnerHTML={{ __html: JSON.stringify(partenariatsSchema) }} />

      {/* Hero */}
      <section className="hero-section partenariats-page">
        <div className="hero-content">
          <div className="hero-text">
            <h1 className="hero-title">
              Rejoignez notre <span className="highlight">réseau de partenaires</span>
            </h1>
            <p className="hero-subtitle">
              Boostez votre visibilité auprès de <strong>+70 associations</strong> et de milliers
              d&apos;étudiants dans <strong>4 régions</strong>
            </p>
            <div className="hero-buttons" style={{ display: 'flex', gap: '1rem', flexWrap: 'wrap' }}>
              <a href="#types-partenariats" className="btn btn-primary btn-lg">
                <i className="fas fa-handshake"></i> Découvrir les partenariats
              </a>
              <a href="#contact" className="btn btn-secondary btn-lg">
                <i className="fas fa-envelope"></i> Nous contacter
              </a>
            </div>
          </div>
        </div>
      </section>

      {/* Stats */}
      <section className="section modern-stats-section" style={{ background: 'white', padding: '4rem 0' }}>
        <div className="container">
          <div className="section-title" style={{ textAlign: 'center', marginBottom: '3rem' }}>
            <h2 style={{ fontSize: 'clamp(2rem,4vw,3rem)', fontWeight: 700, color: '#1e293b', marginBottom: '1rem' }}>
              Un réseau en pleine expansion
            </h2>
            <p style={{ fontSize: '1.25rem', color: '#64748b', maxWidth: '600px', margin: '0 auto' }}>
              Rejoignez une communauté dynamique qui ne cesse de grandir
            </p>
          </div>

          <div className="modern-stats-grid" style={{ display: 'grid', gridTemplateColumns: 'repeat(4,1fr)', gap: '2rem', marginTop: '2rem' }}>
            {stats.map((s) => (
              <div key={s.label} className="stat-item" style={{ textAlign: 'center' }}>
                <div style={{ position: 'relative', display: 'inline-block' }}>
                  <div style={{ width: '60px', height: '3px', background: 'linear-gradient(135deg,#ff6b35,#f7931e)', margin: '0 auto 1rem', borderRadius: '2px' }}></div>
                  <div style={{ display: 'flex', alignItems: 'baseline', justifyContent: 'center', marginBottom: '0.5rem' }}>
                    <Counter target={s.target} />
                    {s.suffix && <span style={{ fontSize: '1.25rem', fontWeight: 600, color: '#ff6b35', marginLeft: '0.25rem' }}>{s.suffix}</span>}
                  </div>
                  <p style={{ fontSize: '0.875rem', color: '#64748b', margin: 0, fontWeight: 500, textTransform: 'uppercase', letterSpacing: '0.05em' }}>
                    {s.label}
                  </p>
                </div>
              </div>
            ))}
          </div>
        </div>
      </section>

      {/* Types de partenariats */}
      <section className="section" id="types-partenariats" style={{ background: '#fef7ed', padding: '6rem 0' }}>
        <div className="container">
          <div className="section-title" style={{ textAlign: 'center', marginBottom: '4rem' }}>
            <p style={{ color: '#ff6b35', fontWeight: 600, textTransform: 'uppercase', letterSpacing: '0.1em', marginBottom: '1rem', fontSize: '0.875rem' }}>
              Nos partenariats
            </p>
            <h2 style={{ fontSize: 'clamp(2rem,4vw,3rem)', fontWeight: 700, color: '#1e293b', marginBottom: '1rem' }}>
              Découvrez nos différents types de partenariats
            </h2>
            <p style={{ fontSize: '1.25rem', color: '#64748b', maxWidth: '600px', margin: '0 auto' }}>
              Des opportunités variées pour promouvoir votre marque et soutenir la communauté
            </p>
          </div>

          <div className="grid" style={{ display: 'grid', gap: '3rem' }}>
            {partnerships.map((p) => (
              <div key={p.title} className="card" style={{ background: 'white', borderRadius: '20px', padding: '3rem', boxShadow: '0 4px 6px rgba(0,0,0,0.1)', border: '1px solid rgba(0,0,0,0.05)' }}>
                <div style={{ display: 'grid', gridTemplateColumns: '1fr 1fr', gap: '3rem', alignItems: 'center', minHeight: '320px' }}>
                  <div style={p.imgFirst ? { order: 2 } : {}}>
                    <h3 style={{ fontSize: '2rem', fontWeight: 700, marginBottom: '1rem', color: '#1e293b' }}>{p.title}</h3>
                    <p style={{ fontSize: '1.125rem', color: '#64748b', marginBottom: '2rem', lineHeight: 1.6 }}>{p.desc}</p>
                    <ul style={{ listStyle: 'none', padding: 0 }}>
                      {p.benefits.map((b) => (
                        <li key={b} style={{ display: 'flex', alignItems: 'center', gap: '0.75rem', marginBottom: '1rem', fontSize: '1rem', color: '#1e293b' }}>
                          <i className="fas fa-check" style={{ color: '#10b981', fontSize: '1.125rem' }}></i>
                          {b}
                        </li>
                      ))}
                    </ul>
                  </div>
                  <div style={{ order: p.imgFirst ? 1 : undefined, position: 'relative', display: 'flex', alignItems: 'center', justifyContent: 'center', height: '100%' }}>
                    <Image src={p.img} alt={p.title} width={500} height={280} style={{ width: '100%', height: '280px', objectFit: 'cover', borderRadius: '15px', boxShadow: '0 10px 25px rgba(0,0,0,0.1)' }} loading="lazy" />
                    <div style={{ position: 'absolute', top: '30px', right: '20px', width: '50px', height: '50px', background: 'linear-gradient(135deg,#ff6b35,#f7931e)', borderRadius: '50%', display: 'flex', alignItems: 'center', justifyContent: 'center', fontSize: '1.25rem', color: 'white', boxShadow: '0 4px 12px rgba(0,0,0,0.2)' }}>
                      <i className={`fas ${p.icon}`}></i>
                    </div>
                  </div>
                </div>
              </div>
            ))}
          </div>
        </div>
      </section>

      {/* Contact */}
      <section className="section" id="contact">
        <div className="container">
          <div className="section-title">
            <p className="section-subtitle">Contact</p>
            <h2>Pour toute demande contactez-nous</h2>
            <p>Notre équipe est là pour mettre en avant votre communication</p>
          </div>
          <div className="text-center">
            <a href="mailto:genpulse.pro@gmail.com?subject=Demande de contact" className="btn btn-primary btn-lg">
              <i className="fas fa-envelope me-2"></i> Envoyer un email
            </a>
          </div>
        </div>
      </section>
    </>
  )
}
