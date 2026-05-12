import type { Metadata } from 'next'
import FonctionnalitesLayout from '@/components/FonctionnalitesLayout'

export const metadata: Metadata = {
  title: 'Enseignement Supérieur – Canal privé pour universités et grandes écoles',
  description:
    "GenPulse centralise la vie de votre campus : événements, bons plans, billetterie, SSO et analytics. Un canal privé sécurisé pour universités, grandes écoles et CROUS.",
  keywords: [
    'application université',
    'communication campus',
    'canal privé école',
    'gestion événements étudiants',
    'BDE plateforme',
    'CROUS communication',
    'billetterie étudiante',
    'SSO université',
    'GenPulse enseignement',
  ],
  alternates: { canonical: 'https://genpulse.fr/fonctionnalites/enseignement' },
  openGraph: {
    title: 'GenPulse pour l\'enseignement supérieur – Canal privé campus',
    description:
      "Centralisez la vie de votre campus : associations, événements, bons plans, billetterie et signalement VSS. SSO intégré.",
    images: [{ url: '/img/im9.jpg', width: 1200, height: 630, alt: 'GenPulse enseignement supérieur' }],
  },
}

const enseignementSchema = {
  '@context': 'https://schema.org',
  '@type': 'WebPage',
  name: 'GenPulse pour l\'enseignement supérieur',
  url: 'https://genpulse.fr/fonctionnalites/enseignement',
  breadcrumb: {
    '@type': 'BreadcrumbList',
    itemListElement: [
      { '@type': 'ListItem', position: 1, name: 'Accueil', item: 'https://genpulse.fr' },
      { '@type': 'ListItem', position: 2, name: 'Fonctionnalités', item: 'https://genpulse.fr' },
      { '@type': 'ListItem', position: 3, name: 'Enseignement supérieur', item: 'https://genpulse.fr/fonctionnalites/enseignement' },
    ],
  },
}

export default function EnseignementPage() {
  return (
    <>
      <script type="application/ld+json" dangerouslySetInnerHTML={{ __html: JSON.stringify(enseignementSchema) }} />
      <FonctionnalitesLayout
      heroClass="enseignement-page"
      heroBg="/img/im9.jpg"
      heroTitle={<>Révolutionnez votre <span className="highlight">campus</span> avec Genpulse</>}
      heroSubtitle="Un canal privé et sécurisé pour votre école : toute la vie du campus, vos associations, vos événements et votre communication réunis en un seul endroit"
      adminTitle={<>Disposez d&apos;un <span className="highlight-orange">outil de gestion</span> pour centraliser la gestion de votre communication</>}
      adminSubtitle="Fonctionnalités réservées aux administrateurs de l'application"
      adminFeatures={[
        { title: 'Gestion des événements & bons plans', desc: "Gérer l'ensemble des événements & bons plans étudiants venant de vos associations, d'autres établissements ou du crous" },
        { title: 'Gestion des posts', desc: 'Supprimer à tout moment un post ou un événement en dehors du scope de vos valeurs' },
        { title: 'Gestion des associations', desc: 'Gérer les associations de votre école' },
      ]}
      adminNote="La validation systématique par l'administrateur est optionnelle"
      adminImage="/img/admin_p.png"
      adminImageAlt="Interface d'administration Genpulse"
      commTitle={<>Utilisez votre <span className="highlight-orange">outil de gestion</span> pour communiquer à tous les membres du réseau</>}
      commSubtitle="Fonctionnalités réservées aux administrateurs de l'application et aux associations"
      commFeatures={[
        { title: "Création d'événements", desc: 'Créer des événements et partagez les au sein de vos campus ou aux autres établissements' },
        { title: 'Création de bannières', desc: "Une information importante temporaire ? Partagez la sur la bannière pour un maximum de visibilité" },
        { title: 'Création de bons plans', desc: 'Partagez vos partenariats et réductions étudiantes à vos étudiants' },
        { title: 'Création de posts', desc: 'Partagez photos et vidéos dans le fil d\'actualité' },
      ]}
      features={[
        { icon: 'far fa-user', title: 'Informations ciblées', desc: "Communiquez efficacement à vos étudiants avec un système de ciblage intelligent par année, spécialité et campus." },
        { icon: 'far fa-calendar-check', title: 'Calendrier', desc: "Un calendrier pour visualiser l'ensemble des évènements sur le mois et s'inscrire à ceux qui les intéressent." },
        { icon: 'far fa-id-card', title: 'Authentification SSO', desc: "Connexion sécurisée via votre système d'authentification, ne nécessitant pas de créer de nouveau compte." },
        { icon: 'far fa-chart-bar', title: 'Communication administrative', desc: "Diffusez les informations importantes de l'administration via la bannière." },
        { icon: 'far fa-bell', title: 'Notifications', desc: "Système de notifications push pour vous informer en temps réel des nouvelles informations et relances automatiques." },
        { icon: 'far fa-handshake', title: 'Intégration CROUS', desc: "Nous vous connectons avec les services CROUS pour qu'ils puissent diffuser les informations sur les logements, bourses et services étudiants." },
        { icon: 'far fa-credit-card', title: 'Billetterie & scan', desc: "Gérez la vente de billets pour vos événements et scannez les entrées pour un contrôle efficace des participants (billetterie optionnelle)." },
        { icon: 'far fa-heart', title: 'Signalement VSS', desc: "Nous redirigeons vers votre plateforme de signalement des violences sexuelles et sexistes pour assurer la sécurité de tous les étudiants." },
        { icon: 'far fa-star', title: 'Bons plans', desc: "Partagez et découvrez les offres, réductions et opportunités spéciales pour les étudiants de votre campus." },
      ]}
      pilotTitle="Pilotez votre campus"
      pilotSubtitle="Mesurez l'impact de Genpulse sur votre établissement avec des données concrètes"
      metrics={[
        { icon: 'fa-users', label: "% d'engagement étudiant" },
        { icon: 'fa-calendar-check', label: '% de participation aux événements' },
        { icon: 'fa-calendar-alt', label: "Nombre d'événements créés" },
        { icon: 'fa-heart', label: 'Satisfaction des étudiants' },
        { icon: 'fa-eye', label: '% de visibilité des informations' },
        { icon: 'fa-clock', label: "Délai d'obtention de l'information" },
        { icon: 'fa-broadcast-tower', label: "% d'étudiants atteints" },
      ]}
      pilotDashboardDesc="pour optimiser la vie de votre campus"
      demoSubtitle="Découvrez comment Genpulse peut transformer votre campus en quelques minutes"
      ctaTitle="Prêt à moderniser votre campus ?"
      ctaDesc="Rejoignez les établissements qui ont déjà transformé leur communication avec Genpulse"
      visualImages={['/img/p1.png', '/img/p2.png', '/img/p3.png', '/img/p4.png', '/img/p5.png', '/img/p6.png', '/img/p7.png']}
    />
    </>
  )
}
