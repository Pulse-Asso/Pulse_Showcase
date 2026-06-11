import type { Metadata } from 'next'
import Image from 'next/image'
import FonctionnalitesLayout from '@/components/FonctionnalitesLayout'

export const metadata: Metadata = {
  title: 'Associations – Gérez vos événements et votre communication gratuitement',
  description:
    "GenPulse centralise la vie de votre association : événements, bons plans, billetterie, notifications push et analytics. Gratuit pour toutes les associations et BDE.",
  keywords: [
    'application association',
    'communication association',
    'gestion événements association',
    'BDE plateforme gratuite',
    'billetterie associative',
    'notifications push association',
    'GenPulse association',
    'vie associative numérique',
  ],
  alternates: { canonical: 'https://genpulse.fr/fonctionnalites/association' },
  openGraph: {
    title: 'GenPulse pour les associations – Gratuit et complet',
    description:
      "Centralisez la vie de votre association : événements, bons plans, billetterie et communication. 100% gratuit pour les associations.",
    images: [{ url: '/img/assohero.jpg', width: 1200, height: 630, alt: 'GenPulse associations' }],
  },
}

const associationSchema = {
  '@context': 'https://schema.org',
  '@type': 'WebPage',
  name: 'GenPulse pour les associations',
  url: 'https://genpulse.fr/fonctionnalites/association',
  breadcrumb: {
    '@type': 'BreadcrumbList',
    itemListElement: [
      { '@type': 'ListItem', position: 1, name: 'Accueil', item: 'https://genpulse.fr' },
      { '@type': 'ListItem', position: 2, name: 'Fonctionnalités', item: 'https://genpulse.fr' },
      { '@type': 'ListItem', position: 3, name: 'Associations', item: 'https://genpulse.fr/fonctionnalites/association' },
    ],
  },
}

const associationVideoSchema = {
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

const PhonesMockup = () => (
  <div className="phones-container">
    <div className="phone-mockup phone-left">
      <div className="phone-screen">
        <Image src="/img/actu.png" alt="Interface association - actualités" className="phone-main-image" width={200} height={350} loading="lazy" />
      </div>
    </div>
    <div className="phone-mockup phone-right">
      <div className="phone-screen">
        <Image src="/img/coverapp.png" alt="Interface association - cover" className="phone-main-image" width={200} height={350} loading="lazy" />
      </div>
    </div>
    <div className="orange-shape shape-1"></div>
    <div className="orange-shape shape-2"></div>
  </div>
)

export default function AssociationPage() {
  return (
    <>
      <script type="application/ld+json" dangerouslySetInnerHTML={{ __html: JSON.stringify(associationSchema) }} />
      <script type="application/ld+json" dangerouslySetInnerHTML={{ __html: JSON.stringify(associationVideoSchema) }} />
      <FonctionnalitesLayout
      heroClass="association-page"
      heroBg="/img/assohero.jpg"
      heroTitle={<>Révolutionnez votre <span className="highlight">association</span> avec Genpulse</>}
      heroSubtitle="Toute la vie associative, vos événements et votre communication réunis en un seul endroit"
      adminTitle={<>Utilisez <span className="highlight-orange">gratuitement</span> genpulse pour gérer votre communication de A à Z</>}
      adminSubtitle="Pour les associations et associations étudiantes"
      adminFeatures={[
        { title: 'Augmenter votre visibilité', desc: "Soyez sûr de cibler 100% de votre public cible sans avoir besoin qu'ils s'abonnent" },
        { title: 'Centraliser vos efforts', desc: "Ne vous éparpillez plus sur des multiples canaux de communication" },
        { title: 'Une gestion de A à Z', desc: "N'utilisez plus qu'un outil pour gérer au même endroit : billetterie, événements, communication, participation" },
      ]}
      adminImage="/img/admin_p.png"
      adminImageAlt="Interface d'administration Genpulse"
      adminSlot={<PhonesMockup />}
      commTitle={<>Utilisez votre <span className="highlight-orange">outil de gestion</span> pour communiquer à tous les membres du réseau</>}
      commSubtitle="Fonctionnalités réservées aux administrateurs de l'application et aux membres"
      commFeatures={[
        { title: "Création d'événements", desc: "Créer des événements et partagez les au sein de votre association ou aux autres organisations" },
        { title: 'Création de bannières', desc: "Une information importante temporaire ? Partagez la sur la bannière pour un maximum de visibilité" },
        { title: 'Création de bons plans', desc: "Partagez vos partenariats et réductions associatives à vos membres" },
        { title: 'Création de posts', desc: "Partagez photos et vidéos dans le fil d'actualité" },
      ]}
      features={[
        { icon: 'far fa-user', title: 'Informations ciblées', desc: "Communiquez efficacement, que ce soit à vos membres ou à toute autre personne du réseau grâce à notre système de ciblage intelligent." },
        { icon: 'far fa-calendar-check', title: 'Calendrier', desc: "Un calendrier pour visualiser l'ensemble des évènements sur le mois et s'inscrire à ceux qui les intéressent." },
        { icon: 'far fa-id-card', title: 'Authentification SSO', desc: "Connexion sécurisée via votre système d'authentification, ne nécessitant pas de créer de nouveau compte." },
        { icon: 'far fa-bell', title: 'Notifications', desc: "Système de notifications push pour vous informer en temps réel des nouvelles informations et relances automatiques." },
        { icon: 'far fa-credit-card', title: 'Billetterie & scan', desc: "Gérez la vente de billets pour vos événements et scannez les entrées pour un contrôle efficace des participants (billetterie optionnelle)." },
        { icon: 'far fa-heart', title: 'Signalement VSS', desc: "Nous redirigeons vers votre plateforme de signalement des violences sexuelles et sexistes pour assurer la sécurité de tous les membres." },
        { icon: 'far fa-star', title: 'Bons plans', desc: "Partagez et découvrez les offres, réductions et opportunités spéciales pour les membres de votre association." },
      ]}
      pilotTitle="Pilotez votre communication"
      pilotSubtitle="Mesurez l'impact de Genpulse sur votre organisation avec des données concrètes"
      metrics={[
        { icon: 'fa-users', label: "% d'engagement des membres" },
        { icon: 'fa-calendar-check', label: '% de participation aux événements' },
        { icon: 'fa-calendar-alt', label: "Nombre d'événements créés" },
        { icon: 'fa-heart', label: 'Satisfaction des membres' },
        { icon: 'fa-eye', label: '% de visibilité associative' },
        { icon: 'fa-clock', label: "Délai d'obtention de l'information" },
        { icon: 'fa-broadcast-tower', label: '% de membres atteints' },
      ]}
      pilotDashboardDesc="pour optimiser la vie de votre association"
      demoSubtitle="Découvrez comment Genpulse peut transformer votre association en quelques minutes"
      ctaTitle="Prêt à révolutionner votre association ?"
      ctaDesc="Rejoignez les associations qui ont déjà transformé leur communication avec Genpulse"
      visualImages={['/img/p1.png', '/img/p2.png', '/img/c1.png', '/img/p4.png', '/img/p5.png', '/img/c2.png', '/img/p7.png']}
    />
    </>
  )
}
