import type { Metadata } from 'next'

export const metadata: Metadata = {
  title: 'Teaser GenPulse – Découvrez l\'application en action',
  description: 'Regardez le teaser officiel de GenPulse : la plateforme qui centralise événements, communication et billetterie pour associations, communes et campus.',
  alternates: { canonical: 'https://genpulse.fr/video/teaser' },
  openGraph: {
    title: 'Teaser GenPulse – Découvrez l\'application en action',
    description: 'Regardez le teaser officiel de GenPulse.',
    type: 'video.other',
    videos: [{ url: 'https://genpulse.fr/video/teaser-pulse.mp4', type: 'video/mp4' }],
    images: [{ url: '/img/cover.jpg', width: 1200, height: 630, alt: 'GenPulse teaser' }],
  },
}

const videoSchema = {
  '@context': 'https://schema.org',
  '@type': 'VideoObject',
  name: 'Teaser GenPulse – Découvrez l\'application en action',
  description: 'Découvrez GenPulse en action : la plateforme qui centralise événements, communication et billetterie pour associations, communes et campus.',
  thumbnailUrl: 'https://genpulse.fr/img/cover.jpg',
  uploadDate: '2026-03-01T00:00:00+01:00',
  contentUrl: 'https://genpulse.fr/video/teaser-pulse.mp4',
  embedUrl: 'https://genpulse.fr/video/teaser',
  publisher: {
    '@type': 'Organization',
    name: 'GenPulse',
    url: 'https://genpulse.fr',
  },
}

export default function TeaserPage() {
  return (
    <>
      <script type="application/ld+json" dangerouslySetInnerHTML={{ __html: JSON.stringify(videoSchema) }} />
      <main style={{ minHeight: '100vh', background: '#0a0a0a', display: 'flex', flexDirection: 'column', alignItems: 'center', justifyContent: 'center', padding: '80px 20px 40px' }}>
        <div style={{ maxWidth: '900px', width: '100%', textAlign: 'center' }}>
          <h1 style={{ color: '#fff', fontSize: 'clamp(1.5rem, 4vw, 2.5rem)', fontWeight: 700, marginBottom: '12px' }}>
            Découvrez GenPulse en action
          </h1>
          <p style={{ color: '#aaa', fontSize: '1.1rem', marginBottom: '32px' }}>
            La plateforme qui centralise événements, communication et billetterie pour associations, communes et campus.
          </p>
          <div style={{ position: 'relative', width: '100%', borderRadius: '12px', overflow: 'hidden', boxShadow: '0 24px 64px rgba(0,0,0,0.6)' }}>
            <video
              controls
              autoPlay={false}
              poster="/img/cover.jpg"
              style={{ width: '100%', display: 'block', maxHeight: '70vh' }}
            >
              <source src="/video/teaser-pulse.mp4" type="video/mp4" />
              Votre navigateur ne supporte pas la lecture de vidéos.
            </video>
          </div>
          <div style={{ marginTop: '32px', display: 'flex', gap: '16px', justifyContent: 'center', flexWrap: 'wrap' }}>
            <a href="/contact" style={{ background: '#ff6b35', color: '#fff', padding: '12px 28px', borderRadius: '8px', fontWeight: 600, textDecoration: 'none' }}>
              Demander une démo
            </a>
            <a href="/" style={{ background: 'transparent', color: '#fff', padding: '12px 28px', borderRadius: '8px', fontWeight: 600, textDecoration: 'none', border: '1px solid #444' }}>
              En savoir plus
            </a>
          </div>
        </div>
      </main>
    </>
  )
}
