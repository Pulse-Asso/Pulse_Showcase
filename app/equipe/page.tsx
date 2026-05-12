import type { Metadata } from 'next'
import Image from 'next/image'

export const metadata: Metadata = {
  title: "L'équipe GenPulse – Fondateurs",
  description:
    "Découvrez Vianney Otton, Nathalie Saada et Damien Drozd, les trois fondateurs de GenPulse. Une équipe complémentaire avec des profils ingénieur, commercial et développeur mobile.",
  keywords: [
    'équipe GenPulse',
    'Vianney Otton',
    'Nathalie Saada',
    'Damien Drozd',
    'fondateurs startup',
    'communication digitale',
  ],
  alternates: { canonical: 'https://genpulse.pro/equipe' },
  openGraph: {
    title: "L'équipe GenPulse – Fondateurs",
    description: "Trois profils complémentaires, une vision commune : révolutionner la communication événementielle.",
    images: [{ url: '/img/office1.png', width: 1200, height: 630, alt: "L'équipe GenPulse" }],
  },
}

const teamSchema = {
  '@context': 'https://schema.org',
  '@type': 'AboutPage',
  name: "L'équipe GenPulse",
  url: 'https://genpulse.pro/equipe',
  breadcrumb: {
    '@type': 'BreadcrumbList',
    itemListElement: [
      { '@type': 'ListItem', position: 1, name: 'Accueil', item: 'https://genpulse.pro' },
      { '@type': 'ListItem', position: 2, name: "L'équipe", item: 'https://genpulse.pro/equipe' },
    ],
  },
  mentions: [
    { '@type': 'Person', name: 'Vianney Otton', jobTitle: 'Co-fondateur', alumniOf: 'EM Lyon & EPF' },
    { '@type': 'Person', name: 'Nathalie Saada', jobTitle: 'Présidente', alumniOf: 'EPF' },
    { '@type': 'Person', name: 'Damien Drozd', jobTitle: 'Co-fondateur', alumniOf: 'Ynov' },
  ],
}

const team = [
  {
    img: '/img/vi.png',
    name: 'Vianney Otton',
    role: 'Co-fondateur',
    school: 'EM Lyon & EPF',
    desc: 'Possède une double formation Ingénieur-Commerce et plusieurs expérience en création d\'entreprises dans la tech',
  },
  {
    img: '/img/na.png',
    name: 'Nathalie Saada',
    role: 'Présidente',
    school: 'EPF',
    desc: 'Ingénieure de formation et engagée activement dans plus de 6 associations',
  },
  {
    img: '/img/da.png',
    name: 'Damien Drozd',
    role: 'Co-fondateur',
    school: 'Ynov',
    desc: 'Développeur avec plus de 3 ans d\'expérience en développement d\'applications mobiles',
  },
]

export default function EquipePage() {
  return (
    <>
      <script type="application/ld+json" dangerouslySetInnerHTML={{ __html: JSON.stringify(teamSchema) }} />

      {/* Hero */}
      <section
        className="hero-section"
        id="hero"
        style={{
          backgroundImage: "url('/img/office1.png')",
          backgroundSize: 'cover',
          backgroundPosition: 'center',
          backgroundRepeat: 'no-repeat',
          position: 'relative',
        }}
      >
        <div
          className="hero-overlay"
          style={{ background: 'rgba(0,0,0,0.4)', position: 'absolute', top: 0, left: 0, right: 0, bottom: 0, zIndex: 1 }}
        ></div>
        <div className="hero-content" style={{ position: 'relative', zIndex: 2 }}>
          <div className="hero-text">
            <h1 className="hero-title" style={{ color: 'white' }}>
              Notre <span className="highlight">équipe</span>
            </h1>
            <p className="hero-subtitle" style={{ color: 'white' }}>
              Les passionnés derrière Genpulse, dédiés à révolutionner l&apos;expérience associative
            </p>
          </div>
        </div>
      </section>

      {/* Team */}
      <section className="team-section" id="team">
        <div className="container-xxl py-5">
          <div className="container py-5 px-lg-5">
            <div className="text-center pb-5">
              <h2 className="section-title">Rencontrez notre équipe</h2>
              <p className="section-subtitle">Trois profils complémentaires, une vision commune</p>
            </div>

            <div className="row justify-content-center" style={{ marginTop: '3rem', gap: '2rem' }}>
              {team.map((member) => (
                <div key={member.name} className="col-lg-3 col-md-4 col-sm-6">
                  <div className="team-card">
                    <div className="team-image">
                      <Image src={member.img} alt={member.name} width={120} height={120} className="img-fluid" />
                      <div className="team-overlay">
                        <div className="team-social">
                          <a href="#" className="social-link"><i className="fab fa-linkedin"></i></a>
                          <a href="#" className="social-link"><i className="fab fa-twitter"></i></a>
                        </div>
                      </div>
                    </div>
                    <div className="team-content">
                      <h4 className="team-name">{member.name}</h4>
                      <p className="team-role">{member.role}</p>
                      <p className="team-school">{member.school}</p>
                      <p className="team-description">{member.desc}</p>
                    </div>
                  </div>
                </div>
              ))}
            </div>
          </div>
        </div>
      </section>
    </>
  )
}
