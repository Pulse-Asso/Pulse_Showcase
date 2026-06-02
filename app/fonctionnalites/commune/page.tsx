import type { Metadata } from 'next'
import FonctionnalitesLayout from '@/components/FonctionnalitesLayout'

export const metadata: Metadata = {
  title: 'Communes & Mairies – Canal public pour collectivités locales',
  description:
    "GenPulse centralise la communication de votre commune : événements, bons plans, billetterie, signalement citoyen et analytics. Un canal public pour mairies et collectivités.",
  keywords: [
    'application mairie',
    'communication commune',
    'canal public collectivité',
    'gestion événements citoyens',
    'plateforme municipale',
    'signalement citoyen',
    'billetterie commune',
    'GenPulse commune',
    'vie locale numérique',
  ],
  alternates: { canonical: 'https://genpulse.fr/fonctionnalites/commune' },
  openGraph: {
    title: 'GenPulse pour les communes – Canal public collectivités',
    description:
      "Centralisez la vie citoyenne : associations, événements, bons plans et signalement. Analytics intégré pour mesurer l'impact.",
    images: [{ url: '/img/im10.jpg', width: 1200, height: 630, alt: 'GenPulse communes et mairies' }],
  },
}

const communeSchema = {
  '@context': 'https://schema.org',
  '@type': 'WebPage',
  name: 'GenPulse pour les communes et mairies',
  url: 'https://genpulse.fr/fonctionnalites/commune',
  breadcrumb: {
    '@type': 'BreadcrumbList',
    itemListElement: [
      { '@type': 'ListItem', position: 1, name: 'Accueil', item: 'https://genpulse.fr' },
      { '@type': 'ListItem', position: 2, name: 'Fonctionnalités', item: 'https://genpulse.fr' },
      { '@type': 'ListItem', position: 3, name: 'Communes & Mairies', item: 'https://genpulse.fr/fonctionnalites/commune' },
    ],
  },
}

const communeVideoSchema = {
  '@context': 'https://schema.org',
  '@type': 'VideoObject',
  name: 'Découvrez GenPulse en action – Teaser',
  description: 'Découvrez comment GenPulse transforme la communication de votre commune : événements, bons plans, billetterie, signalement citoyen et analytics en temps réel.',
  thumbnailUrl: 'https://www.genpulse.fr/img/im10.jpg',
  uploadDate: '2026-03-01',
  contentUrl: 'https://www.genpulse.fr/video/teaser-pulse.mp4',
  publisher: {
    '@type': 'Organization',
    name: 'GenPulse',
    url: 'https://www.genpulse.fr',
  },
}

export default function CommunePage() {
  return (
    <>
      <script type="application/ld+json" dangerouslySetInnerHTML={{ __html: JSON.stringify(communeSchema) }} />
      <script type="application/ld+json" dangerouslySetInnerHTML={{ __html: JSON.stringify(communeVideoSchema) }} />
      <FonctionnalitesLayout
      heroClass="commune-page"
      heroBg="/img/im10.jpg"
      heroTitle={<>Dynamisez votre commune <span className="highlight">sans effort</span> avec Genpulse</>}
      heroSubtitle="Une plateforme clé en main pour dynamiser la vie citoyenne, améliorer la communication locale et créer une communauté engagée"
      adminTitle={<>Fédérez tous <span className="highlight-orange">les acteurs</span> de la vie locale</>}
      adminSubtitle="Validez les acteurs de confiance pour leur permettre de publier leurs événements dans l'application."
      adminFeatures={[
        { title: 'Gain de temps', desc: "Devenez modérateur plutôt que relais de l'information. Et l'équipe GenPulse vous aide à sourcer les événements autour de vous." },
        { title: 'Mobiliser facilement', desc: "Sondages, appels à projets, événements… boostez la participation en un clic." },
        { title: 'Gagner en visibilité', desc: "Renforcer au maximum votre visibilité en bénéficiant d'un espace dédié." },
        { title: 'Le plus de GenGenpulse', desc: "L'application qui vous permet de communiquer directement auprès des étudiants et de leurs écoles." },
      ]}
      adminImage="/img/admin_p.png"
      adminImageAlt="Interface d'administration Genpulse"
      commTitle={<>Utilisez votre <span className="highlight-orange">outil de gestion</span> pour communiquer à tous les membres du réseau</>}
      commSubtitle="Fonctionnalités réservées aux administrateurs de l'application et aux associations"
      commFeatures={[
        { title: "Création d'événements", desc: 'Créer des événements et partagez les au sein de votre commune ou aux autres collectivités' },
        { title: 'Création de bannières', desc: "Une information importante temporaire ? Partagez la sur la bannière pour un maximum de visibilité" },
        { title: 'Création de bons plans', desc: 'Partagez vos partenariats et réductions locales à vos citoyens' },
        { title: 'Création de posts', desc: "Partagez photos et vidéos dans le fil d'actualité" },
      ]}
      features={[
        { icon: 'far fa-user', title: 'Informations ciblées', desc: "Communiquez efficacement à vos citoyens avec un système de ciblage intelligent par quartier, âge et centres d'intérêt." },
        { icon: 'far fa-calendar-check', title: 'Calendrier', desc: "Un calendrier pour visualiser l'ensemble des évènements sur le mois et s'inscrire à ceux qui les intéressent." },
        { icon: 'far fa-chart-bar', title: 'Communication municipale', desc: "Diffusez les informations importantes de la mairie via la bannière." },
        { icon: 'far fa-bell', title: 'Notifications', desc: "Système de notifications push pour vous informer en temps réel des nouvelles informations et relances automatiques." },
        { icon: 'far fa-credit-card', title: 'Billetterie & scan', desc: "Gérez la vente de billets pour vos événements et scannez les entrées pour un contrôle efficace des participants (billetterie optionnelle)." },
        { icon: 'far fa-star', title: 'Bons plans & appels à projets', desc: "Partagez et découvrez les offres, réductions et opportunités spéciales pour les citoyens de votre commune." },
        { icon: 'fas fa-flag', title: 'Signalement citoyen', desc: "Permettez à vos citoyens de signaler rapidement les problèmes rencontrés dans la commune (arbre sur la chaussée, panne d'éclairage, etc.)." },
        { icon: 'fas fa-globe', title: 'Site internet', desc: "Accédez à toutes les fonctionnalités directement depuis votre navigateur web, disponible sur tous vos appareils." },
      ]}
      pilotTitle="Pilotez votre commune"
      pilotSubtitle="Mesurez l'impact de Genpulse sur votre collectivité avec des données concrètes"
      metrics={[
        { icon: 'fa-users', label: "% d'engagement citoyen" },
        { icon: 'fa-calendar-check', label: '% de participation aux événements' },
        { icon: 'fa-calendar-alt', label: "Nombre d'événements créés" },
        { icon: 'fa-heart', label: 'Satisfaction des citoyens' },
        { icon: 'fa-eye', label: '% de visibilité locale' },
        { icon: 'fa-clock', label: "Délai d'obtention de l'information" },
        { icon: 'fa-broadcast-tower', label: '% de citoyens atteints' },
      ]}
      pilotDashboardDesc="pour optimiser la vie de votre commune"
      demoSubtitle="Découvrez comment Genpulse peut transformer votre commune en quelques minutes"
      ctaTitle="Prêt à dynamiser votre commune ?"
      ctaDesc="Rejoignez les collectivités qui ont déjà transformé leur communication avec Genpulse"
      visualImages={['/img/p1.png', '/img/p2.png', '/img/p3.png', '/img/p4.png', '/img/p5.png', '/img/p6.png', '/img/p7.png']}
    />
    </>
  )
}
