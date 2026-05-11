import Link from 'next/link'

export default function NotFound() {
  return (
    <section className="section" style={{ minHeight: '60vh', display: 'flex', alignItems: 'center', justifyContent: 'center', textAlign: 'center' }}>
      <div>
        <h1 style={{ fontSize: '6rem', fontWeight: 700, color: '#ff6b35', lineHeight: 1 }}>404</h1>
        <h2 style={{ fontSize: '1.5rem', fontWeight: 600, color: '#1e293b', margin: '1rem 0' }}>Page introuvable</h2>
        <p style={{ color: '#64748b', marginBottom: '2rem' }}>Cette page n&apos;existe pas ou a été déplacée.</p>
        <Link href="/" className="btn btn-primary btn-lg">
          Retour à l&apos;accueil
        </Link>
      </div>
    </section>
  )
}
