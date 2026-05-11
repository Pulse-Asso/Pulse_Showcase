import Image from 'next/image'

export interface AdminFeature { title: string; desc: string }
export interface CommFeature { title: string; desc: string }
export interface Feature { icon: string; title: string; desc: string }
export interface Metric { icon: string; label: string }

interface Props {
  heroClass: string
  heroBg: string
  heroTitle: React.ReactNode
  heroSubtitle: string
  adminTitle: React.ReactNode
  adminSubtitle: string
  adminFeatures: AdminFeature[]
  adminNote?: string
  adminImage: string
  adminImageAlt: string
  commTitle: React.ReactNode
  commSubtitle: string
  commFeatures: CommFeature[]
  features: Feature[]
  pilotTitle: string
  pilotSubtitle: string
  metrics: Metric[]
  pilotDashboardDesc: string
  demoSubtitle: string
  ctaTitle: string
  ctaDesc: string
  visualImages: string[]
  /** For association page: use phones instead of laptop */
  adminSlot?: React.ReactNode
}

export default function FonctionnalitesLayout({
  heroClass, heroBg, heroTitle, heroSubtitle,
  adminTitle, adminSubtitle, adminFeatures, adminNote, adminImage, adminImageAlt,
  commTitle, commSubtitle, commFeatures,
  features,
  pilotTitle, pilotSubtitle, metrics, pilotDashboardDesc,
  demoSubtitle,
  ctaTitle, ctaDesc,
  visualImages,
  adminSlot,
}: Props) {
  return (
    <>
      {/* Hero */}
      <section
        className={`hero-section ${heroClass}`}
        style={{ backgroundImage: `url('${heroBg}')`, backgroundSize: 'cover', backgroundPosition: 'center', position: 'relative' }}
      >
        <div className="hero-overlay" style={{ position: 'absolute', top: 0, left: 0, right: 0, bottom: 0, background: 'rgba(0,0,0,0)' }}></div>
        <div className="hero-content" style={{ position: 'relative', zIndex: 2 }}>
          <div className="hero-text">
            <h1 className="hero-title">{heroTitle}</h1>
            <p className="hero-subtitle">{heroSubtitle}</p>
            <div className="hero-buttons">
              <a href="#features" className="btn btn-primary btn-lg">
                <i className="fas fa-rocket"></i> En savoir plus
              </a>
              <a href="/contact" className="btn btn-secondary btn-lg">
                <i className="fas fa-envelope"></i> Demander une démo
              </a>
            </div>
          </div>
        </div>
      </section>

      {/* Admin Management */}
      <section className="admin-management-section">
        <div className="admin-management-container">
          <div className="admin-management-content">
            <div className="admin-text-content">
              <h2>{adminTitle}</h2>
              <p className="admin-subtitle">{adminSubtitle}</p>
              <div className="admin-features-list">
                {adminFeatures.map((f) => (
                  <div key={f.title} className="admin-feature-item">
                    <div className="admin-feature-icon"><i className="fas fa-check"></i></div>
                    <div className="admin-feature-content">
                      <h4>{f.title}</h4>
                      <p>{f.desc}</p>
                    </div>
                  </div>
                ))}
              </div>
              {adminNote && <p className="admin-note">{adminNote}</p>}
            </div>

            {adminSlot ?? (
              <div className="admin-laptop-container">
                <div className="admin-laptop">
                  <Image src={adminImage} alt={adminImageAlt} className="laptop-screen" width={600} height={400} loading="lazy" />
                  <div className="floating-elements">
                    <Image src="/img/logo_admin.png" alt="Logo Admin" className="floating-logo logo-1" width={60} height={60} loading="lazy" />
                  </div>
                </div>
                <div className="background-accent"></div>
              </div>
            )}
          </div>
        </div>
      </section>

      {/* Communication Tool */}
      <section className="communication-tool-section">
        <div className="communication-tool-container">
          <div className="communication-tool-content">
            <div className="communication-laptop-container">
              <div className="communication-laptop">
                <Image src="/img/gestion_add.png" alt="Interface de communication Genpulse" className="laptop-screen" width={600} height={400} loading="lazy" />
                <div className="floating-elements">
                  <Image src="/img/logo_admin.png" alt="Logo Admin" className="floating-logo" width={60} height={60} loading="lazy" />
                </div>
              </div>
              <div className="background-accent"></div>
            </div>
            <div className="communication-text-content">
              <h2>{commTitle}</h2>
              <p className="communication-subtitle">{commSubtitle}</p>
              <div className="communication-features-list">
                {commFeatures.map((f) => (
                  <div key={f.title} className="communication-feature-item">
                    <div className="communication-feature-icon"><i className="fas fa-check"></i></div>
                    <div className="communication-feature-content">
                      <h4>{f.title}</h4>
                      <p>{f.desc}</p>
                    </div>
                  </div>
                ))}
              </div>
            </div>
          </div>
        </div>
      </section>

      {/* Features Grid */}
      <section className="features-modern-section" id="features">
        <div className="features-modern-header">
          <h2>Des fonctionnalités adaptées</h2>
        </div>
        <div className="features-modern-grid">
          {features.map((f) => (
            <div key={f.title} className="feature-modern-card">
              <div className="feature-header">
                <div className="feature-icon"><i className={f.icon}></i></div>
                <h3>{f.title}</h3>
              </div>
              <p>{f.desc}</p>
            </div>
          ))}
        </div>
      </section>

      {/* Pilotez */}
      <section className="section campus-pilot-section">
        <div className="container">
          <div className="campus-pilot-header">
            <h2>{pilotTitle}</h2>
            <p>{pilotSubtitle}</p>
          </div>
          <div className="campus-pilot-content">
            <div className="campus-pilot-text">
              <h3>Les métrics que vous pourrez suivre en temps réel :</h3>
              <div className="data-cloud">
                {metrics.map((m) => (
                  <div key={m.label} className="data-item">
                    <i className={`fas ${m.icon}`}></i>
                    <span>{m.label}</span>
                  </div>
                ))}
              </div>
              <div className="dashboard-info">
                <p><strong>Un dashboard intuitif</strong> vous permet de visualiser toutes ces métriques et de prendre des décisions éclairées{' '}{pilotDashboardDesc}.</p>
              </div>
            </div>
            <div className="campus-pilot-visual">
              <div className="dashboard-container">
                <Image src="/img/dashboard.png" alt="Dashboard analytics" className="dashboard-image" width={600} height={400} loading="lazy" />
                <div className="floating-elements">
                  <div className="floating-chart"><i className="fas fa-chart-bar"></i></div>
                  <div className="floating-graph"><i className="fas fa-chart-line"></i></div>
                  <div className="floating-pie"><i className="fas fa-chart-pie"></i></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      {/* Demo */}
      <section className="section modern-demo-section" id="demo">
        <div className="container">
          <div className="modern-demo-header">
            <div className="demo-badge">
              <i className="fas fa-play-circle"></i>
              <span>Démonstration</span>
            </div>
            <h2>Voir Genpulse en action</h2>
            <p className="demo-subtitle">{demoSubtitle}</p>
          </div>
          <div className="modern-demo-content">
            <div className="video-container">
              <div className="video-wrapper">
                <video className="pulse-video" controls>
                  <source src="/video/teaser-pulse.mp4" type="video/mp4" />
                  Votre navigateur ne supporte pas la lecture de vidéos.
                </video>
              </div>
            </div>
            <div className="demo-features">
              {[
                { icon: 'fa-rocket', title: 'Démarrage rapide', desc: 'Configuration en quelques minutes' },
                { icon: 'fa-eye', title: 'Interface intuitive', desc: 'Navigation simple et claire' },
                { icon: 'fa-users', title: 'Collaboration', desc: 'Communication fluide entre tous' },
              ].map((d) => (
                <div key={d.title} className="demo-feature-item">
                  <div className="feature-icon"><i className={`fas ${d.icon}`}></i></div>
                  <div className="feature-content">
                    <h4>{d.title}</h4>
                    <p>{d.desc}</p>
                  </div>
                </div>
              ))}
            </div>
          </div>
        </div>
      </section>

      {/* Visuels */}
      <section className="genpulse-visuals-section">
        <div className="container">
          <div className="genpulse-visuals-header">
            <h2 className="genpulse-title">Les visuels de Genpulse</h2>
            <p className="genpulse-subtitle">Découvrez l&apos;interface moderne et intuitive de notre plateforme</p>
          </div>
          <div className="genpulse-visuals-scroll">
            <div className="genpulse-visuals-track">
              {[...visualImages, ...visualImages].map((img, i) => (
                <div key={i} className="visual-item">
                  <Image src={img} alt={`Interface Genpulse ${(i % visualImages.length) + 1}`} className="visual-image" width={300} height={500} loading="lazy" />
                </div>
              ))}
            </div>
          </div>
        </div>
      </section>

      {/* CTA */}
      <section className="section cta-section">
        <div className="container">
          <div className="cta-content">
            <h2>{ctaTitle}</h2>
            <p>{ctaDesc}</p>
            <a href="/contact" className="btn btn-primary btn-lg">
              <i className="fas fa-envelope"></i> Commencer maintenant
            </a>
          </div>
        </div>
      </section>
    </>
  )
}
