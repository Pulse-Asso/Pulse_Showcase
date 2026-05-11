import type { Metadata } from 'next'
import Image from 'next/image'
import Link from 'next/link'
import Counter from '@/components/Counter'

export const metadata: Metadata = {
  title: "GenPulse : l'application d'événements pour associations, communes et enseignement",
  description:
    "GenPulse centralise la communication digitale des associations, communes et établissements d'enseignement. Gestion d'événements, canal privé/public, notifications push et billetterie intégrée.",
  keywords: [
    'application événements',
    'communication associations',
    'gestion événements étudiants',
    'plateforme commune',
    'canal privé université',
    'canal public mairie',
    'billetterie étudiante',
    'GenPulse',
  ],
  alternates: { canonical: 'https://genpulse.pro/' },
  openGraph: {
    title: "GenPulse : l'application d'événements",
    description:
      "Centralisez toute la vie associative, étudiante et citoyenne en un seul endroit. Canal privé, canal public, billetterie et analytics.",
    images: [{ url: '/img/cover.jpg', width: 1200, height: 630, alt: "GenPulse – accueil" }],
  },
}

const softwareSchema = {
  '@context': 'https://schema.org',
  '@type': 'SoftwareApplication',
  name: 'GenPulse',
  description: "GenPulse : l'application d'événements pour associations, communes et enseignement",
  url: 'https://genpulse.pro',
  applicationCategory: 'BusinessApplication',
  operatingSystem: 'Web, iOS, Android',
  offers: { '@type': 'Offer', price: '0', priceCurrency: 'EUR' },
  author: { '@type': 'Organization', name: 'GenPulse', url: 'https://genpulse.pro' },
  aggregateRating: { '@type': 'AggregateRating', ratingValue: '4.8', ratingCount: '150' },
}

const partners = ['bde.jpg', 'uva.png', 'bds.jpg', 'epf.png', 'bde_ice.jpg', 'je.jpg']

export default function HomePage() {
  return (
    <>
      <script
        type="application/ld+json"
        dangerouslySetInnerHTML={{ __html: JSON.stringify(softwareSchema) }}
      />

      {/* Hero */}
      <section className="hero-section" id="hero">
        <div className="hero-content">
          <div className="hero-text">
            <h1 className="hero-title">
              Booster la vie locale avec <span className="highlight">GENPULSE</span>
            </h1>
            <p className="hero-subtitle">
              Un outil unique qui rassemble la vie associative, étudiante et citoyenne en un seul endroit
            </p>
            <div className="hero-buttons">
              <a href="#profile-features" className="btn btn-primary btn-lg">
                <i className="fas fa-rocket"></i> En savoir plus
              </a>
              <a
                href="/contact"
                className="btn btn-secondary btn-lg"
              >
                <i className="fas fa-envelope"></i> Demander une démo
              </a>
            </div>
          </div>
        </div>
      </section>

      {/* Raison d'être */}
      <section className="app-showcase-section" id="app-showcase">
        <div className="app-showcase-container">
          <div className="app-phone-side">
            <div
              className="phone-container"
              style={{
                backgroundColor: '#FFE3B2',
                padding: '20px',
                borderRadius: '20px',
                position: 'relative',
                width: '380px',
                height: '420px',
              }}
            >
              <Image
                src="/img/home_e.png"
                alt="Interface de l'application Genpulse"
                className="phone-image"
                width={300}
                height={400}
                style={{ width: '300px', height: 'auto', position: 'relative', zIndex: 2 }}
                loading="lazy"
              />

              <div
                className="floating-likes"
                style={{ position: 'absolute', top: 0, left: 0, right: 0, bottom: 0, pointerEvents: 'none', zIndex: 30 }}
              >
                {[
                  { top: '10px', left: '5px', w: 60, delay: '0s' },
                  { top: '80px', right: '15px', w: 50, delay: '0.5s' },
                  { bottom: '100px', left: '5px', w: 70, delay: '1s' },
                  { bottom: '20px', right: '20px', w: 56, delay: '1.5s' },
                ].map((pos, i) => (
                  <Image
                    key={i}
                    src="/img/like.png"
                    alt="Like"
                    width={pos.w}
                    height={pos.w}
                    style={{ position: 'absolute', animation: `float 3s ease-in-out infinite ${pos.delay}`, ...pos } as React.CSSProperties}
                  />
                ))}
              </div>

              <div
                className="floating-notifications"
                style={{ position: 'absolute', top: 0, left: 0, right: 0, bottom: 0, pointerEvents: 'none', zIndex: 30 }}
              >
                {[
                  { top: '50px', left: '-60px', w: 64, delay: '0.3s' },
                  { top: '150px', right: '-60px', w: 54, delay: '0.8s' },
                  { bottom: '50px', left: '-40px', w: 66, delay: '1.2s' },
                  { bottom: '80px', right: '-40px', w: 58, delay: '1.7s' },
                ].map((pos, i) => (
                  <Image
                    key={i}
                    src="/img/notif.png"
                    alt="Notification"
                    width={pos.w}
                    height={pos.w}
                    style={{ position: 'absolute', animation: `float 3s ease-in-out infinite ${pos.delay}`, ...pos } as React.CSSProperties}
                  />
                ))}
              </div>
            </div>
          </div>

          <div className="app-content">
            <h2>
              La <strong>raison d&apos;être de GENPULSE</strong>
            </h2>
            <p>Pallier les problèmes de communication rencontrés actuellement grâce à notre solution :</p>
            <ul className="benefits-list">
              <li>
                Rassembler la communication massive éparpillée sur les réseaux sociaux, mails et autres
                canaux en un seul point d&apos;accès clair
              </li>
              <li>
                Réduire la surcharge informationnelle en rendant l&apos;information accessible et visible rapidement
              </li>
              <li>Cibler les informations en choisissant à qui vous voulez les partager</li>
            </ul>
          </div>
        </div>
      </section>

      {/* Notre solution */}
      <section className="section solution-section" id="about">
        <div className="container">
          <div className="section-title">
            <p className="section-subtitle">Notre solution</p>
            <h2>1er canal de communication où tous les acteurs sont interconnectés</h2>
            <p>Nous rejoindre c&apos;est intégrer un réseau</p>
          </div>

          {/* Canal Privé */}
          <div className="solution-feature-card canal-prive">
            <div className="feature-content">
              <h3>Un canal privé</h3>
              <p>
                Un espace dédié aux universités, pour centraliser la vie du campus (associations
                étudiantes, Crous, administration)
              </p>
              <br />
              <ul className="feature-benefits">
                <li><i className="fas fa-check"></i> Accès sécurisé</li>
                <li><i className="fas fa-check"></i> Communication interne</li>
                <li><i className="fas fa-check"></i> Gestion centralisée</li>
              </ul>
            </div>
            <div className="feature-image">
              <Image src="/img/prive.png" alt="Canal privé universitaire" width={500} height={350} priority />
              <div className="feature-overlay"><i className="fas fa-lock"></i></div>
              <div className="floating-bubbles">
                <div className="bubble bubble-events"><i className="fas fa-calendar-alt"></i><span>événements</span></div>
                <div className="bubble bubble-communication"><i className="fas fa-comments"></i><span>Communication</span></div>
                <div className="bubble bubble-secure"><i className="fas fa-shield-alt"></i><span>Sécurisé</span></div>
              </div>
            </div>
          </div>

          {/* Canal Public */}
          <div className="solution-feature-card canal-public">
            <div className="feature-image">
              <Image src="/img/public.png" alt="Canal public communautaire" width={500} height={350} priority />
              <div className="feature-overlay"><i className="fas fa-unlock"></i></div>
              <div className="floating-bubbles">
                <div className="bubble bubble-events"><i className="fas fa-calendar-alt"></i><span>événements</span></div>
                <div className="bubble bubble-communication"><i className="fas fa-comments"></i><span>Communication</span></div>
                <div className="bubble bubble-public"><i className="fas fa-users"></i><span>Public</span></div>
              </div>
            </div>
            <div className="feature-content">
              <h3>Un canal public</h3>
              <p>
                Un espace commun pour les mairies, associations et partenaires locaux, afin de donner
                de la visibilité aux événements et renforcer le lien social
              </p>
              <br />
              <ul className="feature-benefits">
                <li><i className="fas fa-check"></i> Visibilité maximale</li>
                <li><i className="fas fa-check"></i> Collaboration locale</li>
                <li><i className="fas fa-check"></i> Engagement citoyen</li>
              </ul>
            </div>
          </div>
        </div>
      </section>

      {/* Fonctionnalités par profil */}
      <section className="section section-alt" id="profile-features">
        <div className="container">
          <div className="section-title">
            <p className="section-subtitle">Fonctionnalités personnalisées</p>
            <h2>Découvrez les fonctionnalités selon votre profil</h2>
            <p>Choisissez votre profil pour découvrir les fonctionnalités adaptées à vos besoins</p>
          </div>

          <div className="profile-features-grid">
            {[
              {
                href: '/fonctionnalites/enseignement',
                img: '/img/ecole.jpg',
                alt: "Solution pour l'enseignement supérieur",
                title: 'Enseignement supérieur',
                desc: 'Fonctionnalités dédiées aux universités, écoles et établissements d\'enseignement supérieur',
              },
              {
                href: '/fonctionnalites/commune',
                img: '/img/commune.jpg',
                alt: 'Plateforme pour communes et mairies',
                title: 'Communes & Mairies',
                desc: 'Solutions adaptées aux mairies et collectivités locales pour dynamiser la vie citoyenne',
              },
              {
                href: '/fonctionnalites/association',
                img: '/img/asso.jpg',
                alt: 'Outils pour associations',
                title: 'Associations',
                desc: 'Outils spécialement conçus pour les associations et organisations à but non lucratif',
              },
            ].map((card) => (
              <Link key={card.href} href={card.href} className="profile-feature-card">
                <div className="profile-feature-image">
                  <Image src={card.img} alt={card.alt} width={400} height={250} loading="lazy" />
                </div>
                <h3>{card.title}</h3>
                <p>{card.desc}</p>
                <div className="btn btn-primary profile-btn">
                  <i className="fas fa-arrow-right"></i>
                </div>
              </Link>
            ))}
          </div>
        </div>
      </section>

      {/* Stats */}
      <section className="section modern-stats-section" style={{ background: 'white', padding: '4rem 0' }}>
        <div className="container">
          <div className="section-title" style={{ textAlign: 'center', marginBottom: '3rem' }}>
            <h2 style={{ fontSize: 'clamp(2rem, 4vw, 3rem)', fontWeight: 700, color: '#1e293b', marginBottom: '1rem' }}>
              Adopté par des milliers d&apos;utilisateurs dans 4 régions
            </h2>
            <p style={{ fontSize: '1.25rem', color: '#64748b', maxWidth: '600px', margin: '0 auto' }}>
              Rejoignez une communauté dynamique qui ne cesse de grandir
            </p>
          </div>

          <div className="modern-stats-grid" style={{ display: 'grid', gridTemplateColumns: 'repeat(4, 1fr)', gap: '2rem', marginTop: '2rem' }}>
            {[
              { target: 90, suffix: '%', label: 'De visibilité' },
              { target: 2000, suffix: '+', label: 'Étudiants actifs' },
              { target: 200, suffix: '+', label: 'Événements créés' },
              { target: 100, suffix: '%', label: 'Satisfaction utilisateurs' },
            ].map((stat) => (
              <div key={stat.label} className="stat-item" style={{ textAlign: 'center' }}>
                <div style={{ position: 'relative', display: 'inline-block' }}>
                  <div style={{ width: '60px', height: '3px', background: 'linear-gradient(135deg, #ff6b35, #f7931e)', margin: '0 auto 1rem', borderRadius: '2px' }}></div>
                  <div style={{ display: 'flex', alignItems: 'baseline', justifyContent: 'center', marginBottom: '0.5rem' }}>
                    <Counter target={stat.target} />
                    <span style={{ fontSize: '1.25rem', fontWeight: 600, color: '#ff6b35', marginLeft: '0.25rem' }}>{stat.suffix}</span>
                  </div>
                  <p style={{ fontSize: '0.875rem', color: '#64748b', margin: 0, fontWeight: 500, textTransform: 'uppercase', letterSpacing: '0.05em' }}>
                    {stat.label}
                  </p>
                </div>
              </div>
            ))}
          </div>
        </div>
      </section>

      {/* Partenaires */}
      <section className="section" id="partenariats">
        <div className="container">
          <div className="section-title">
            <p className="section-subtitle">Partenariats</p>
            <h2>Nous font confiance</h2>
          </div>
          <div className="partners-slider">
            <div className="partners-track">
              {[1, 2].map((dup) => (
                <div key={dup} className="partners-container">
                  {partners.map((img) => (
                    <Image key={img} src={`/img/${img}`} alt={img.split('.')[0].toUpperCase()} className="partner-logo" width={80} height={80} loading="lazy" />
                  ))}
                </div>
              ))}
            </div>
          </div>
        </div>
      </section>

      {/* Contact */}
      <section className="section" id="contact">
        <div className="container">
          <div className="section-title">
            <p className="section-subtitle">Contact</p>
            <h2>Une question ou une démonstration ?</h2>
            <p>Notre équipe est là pour vous accompagner dans votre transition vers Genpulse.</p>
          </div>
          <div className="text-center">
            <a href="/contact" className="btn btn-primary btn-lg">
              <i className="fas fa-envelope me-2"></i> Nous contacter
            </a>
          </div>
        </div>
      </section>
    </>
  )
}
