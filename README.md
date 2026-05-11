# GenPulse – Site Vitrine

Site vitrine de **GenPulse**, l'application qui centralise la vie associative, étudiante et citoyenne. Construit avec Next.js 16 App Router et TypeScript.

---

## Stack

- **Next.js 16** (App Router, Turbopack)
- **TypeScript**
- **Firebase Analytics** (Google Analytics)
- **Nodemailer** – envoi d'email depuis le formulaire de contact

---

## Structure du projet

```
app/
├── layout.tsx                        # Layout racine (Navbar, Footer, Analytics)
├── page.tsx                          # Accueil
├── contact/page.tsx                  # Formulaire de contact
├── equipe/page.tsx                   # L'équipe
├── partenariats/page.tsx             # Partenariats
├── fonctionnalites/
│   ├── enseignement/page.tsx
│   ├── commune/page.tsx
│   └── association/page.tsx
├── api/contact/route.ts              # API d'envoi d'email (POST)
├── sitemap.ts                        # Sitemap généré automatiquement
├── robots.ts                         # robots.txt
└── not-found.tsx                     # Page 404

components/
├── Navbar.tsx
├── Footer.tsx
├── ContactForm.tsx                   # Formulaire de contact (client)
├── FonctionnalitesLayout.tsx         # Layout partagé des 3 pages fonctionnalités
├── FirebaseAnalytics.tsx             # Initialisation Google Analytics (client)
├── Counter.tsx                       # Compteur animé (IntersectionObserver)
├── ScrollEffects.tsx                 # Animations au scroll
├── BackToTop.tsx
├── CustomCursor.tsx
└── Spinner.tsx

lib/
└── firebase.ts                       # Config Firebase (lecture des env vars)

public/
├── css/style.css                     # Styles principaux (chargés via <link>)
├── img/                              # Images
└── video/                            # Vidéos
```

---

## Installation

```bash
npm install
```

## Variables d'environnement

Créer un fichier `.env.local` à la racine :

```env
# Firebase / Google Analytics
NEXT_PUBLIC_FIREBASE_API_KEY=
NEXT_PUBLIC_FIREBASE_AUTH_DOMAIN=
NEXT_PUBLIC_FIREBASE_PROJECT_ID=
NEXT_PUBLIC_FIREBASE_STORAGE_BUCKET=
NEXT_PUBLIC_FIREBASE_MESSAGING_SENDER_ID=
NEXT_PUBLIC_FIREBASE_APP_ID=
NEXT_PUBLIC_FIREBASE_MEASUREMENT_ID=

# SMTP (formulaire de contact)
SMTP_HOST=smtp.gmail.com
SMTP_PORT=587
SMTP_USER=
SMTP_PASS=
```

> Les variables `NEXT_PUBLIC_*` sont exposées côté navigateur. Les variables SMTP restent côté serveur.

## Commandes

```bash
npm run dev      # Serveur de développement (http://localhost:3000)
npm run build    # Build de production
npm run start    # Serveur de production
npm run lint     # Lint ESLint
```

---

## Déploiement

Le projet est prêt pour **Vercel** (zéro configuration). Il suffit de connecter le dépôt et d'ajouter les variables d'environnement dans le dashboard Vercel.

Pour tout autre hébergeur supportant Node.js :

```bash
npm run build
npm run start
```
