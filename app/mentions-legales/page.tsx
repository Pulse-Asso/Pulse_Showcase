import type { Metadata } from 'next'

export const metadata: Metadata = {
  title: 'Mentions légales',
  description: 'Mentions légales de GenPulse – informations légales, éditeur, hébergeur et conditions d\'utilisation.',
  alternates: { canonical: 'https://genpulse.fr/mentions-legales' },
  robots: { index: true, follow: false },
}

export default function MentionsLegalesPage() {
  return (
    <section style={{ padding: '80px 20px', maxWidth: '900px', margin: '0 auto' }}>
      <h1 style={{ marginBottom: '24px' }}>Mentions légales</h1>
      <p style={{ marginBottom: '24px', color: '#666' }}>
        Consultez ci-dessous les mentions légales de GenPulse. Vous pouvez également{' '}
        <a href="/mentions-legales.pdf" download style={{ color: '#ff6b35' }}>
          télécharger le document PDF
        </a>.
      </p>
      <div style={{ width: '100%', height: '80vh', border: '1px solid #e0e0e0', borderRadius: '8px', overflow: 'hidden' }}>
        <iframe
          src="/mentions-legales.pdf"
          width="100%"
          height="100%"
          title="Mentions légales GenPulse"
          style={{ border: 'none' }}
        />
      </div>
    </section>
  )
}
