import type { Metadata, Viewport } from 'next'
import './globals.css'
import Navbar from '@/components/Navbar'
import Footer from '@/components/Footer'
import Spinner from '@/components/Spinner'
import BackToTop from '@/components/BackToTop'
import CustomCursor from '@/components/CustomCursor'
import ScrollEffects from '@/components/ScrollEffects'

const BASE_URL = 'https://genpulse.pro'

export const viewport: Viewport = {
  themeColor: '#ff6b35',
  width: 'device-width',
  initialScale: 1,
  maximumScale: 5,
}

export const metadata: Metadata = {
  metadataBase: new URL(BASE_URL),
  title: {
    default: "GenPulse : l'application d'événements",
    template: '%s | GenPulse',
  },
  description:
    "GenPulse : l'application d'événements pour moderniser vos échanges. Gestion d'événements, communication digitale et outils collaboratifs pour associations, communes et enseignement.",
  keywords: [
    'communication digitale',
    'gestion événements',
    'plateforme association',
    'outil communication commune',
    'solution enseignement supérieur',
    'événementiel digital',
    'GenPulse',
    'Genpulse',
    'application étudiante',
    'communication universitaire',
  ],
  authors: [{ name: 'GenPulse', url: BASE_URL }],
  creator: 'GenPulse',
  publisher: 'GenPulse',
  robots: { index: true, follow: true, googleBot: { index: true, follow: true } },
  alternates: { canonical: BASE_URL },
  openGraph: {
    title: "GenPulse : l'application d'événements",
    description:
      "GenPulse : l'application d'événements pour associations, communes et enseignement. Gestion d'événements et outils collaboratifs.",
    url: BASE_URL,
    siteName: 'GenPulse',
    locale: 'fr_FR',
    type: 'website',
    images: [{ url: '/img/cover.jpg', width: 1200, height: 630, alt: "GenPulse – l'application d'événements" }],
  },
  twitter: {
    card: 'summary_large_image',
    title: "GenPulse : l'application d'événements",
    description: "GenPulse : l'application d'événements pour associations, communes et enseignement",
    images: ['/img/cover.jpg'],
  },
  icons: {
    icon: [
      { url: '/img/favicon-16.png', sizes: '16x16', type: 'image/png' },
      { url: '/img/favicon-32.png', sizes: '32x32', type: 'image/png' },
      { url: '/img/favicon-48.png', sizes: '48x48', type: 'image/png' },
    ],
    apple: [{ url: '/img/logo_p.png', sizes: '180x180' }],
    shortcut: '/favicon.ico',
  },
}

const organizationSchema = {
  '@context': 'https://schema.org',
  '@type': 'Organization',
  name: 'GenPulse',
  url: BASE_URL,
  logo: `${BASE_URL}/img/genpulse.png`,
  contactPoint: {
    '@type': 'ContactPoint',
    email: 'genpulse.pro@gmail.com',
    contactType: 'customer support',
    availableLanguage: 'French',
  },
  sameAs: [],
}

export default function RootLayout({ children }: { children: React.ReactNode }) {
  return (
    <html lang="fr">
      <head>
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossOrigin="anonymous" />
        <link
          href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
          rel="stylesheet"
        />
        <link
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
          rel="stylesheet"
        />
        <link rel="stylesheet" href="/css/style.css" />
        <link rel="manifest" href="/manifest.json" />
        <script
          type="application/ld+json"
          dangerouslySetInnerHTML={{ __html: JSON.stringify(organizationSchema) }}
        />
      </head>
      <body>
        <CustomCursor />
        <Spinner />
        <Navbar />
        <main>{children}</main>
        <Footer />
        <BackToTop />
        <ScrollEffects />
      </body>
    </html>
  )
}
