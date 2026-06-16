# GenPulse – Site Vitrine

Site vitrine de **GenPulse**, l'application qui centralise la vie associative, étudiante et citoyenne. Construit avec Next.js 16 App Router et TypeScript.

````markdown
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

````

---

## Mettre à jour le site

Suivez ces étapes simples pour mettre à jour le site via Git/GitHub :

- **Récupérer la dernière version :**

	- `git pull origin main`

- **Travailler sur une branche :**

	- `git checkout -b feature/ma-modif`
	- Effectuez vos modifications localement et testez avec `npm run dev`.

- **Commit & push :**

	- `git add .`
	- `git commit -m "Courte description des changements"`
	- `git push -u origin feature/ma-modif`

- **Créer une Pull Request :**

	- Ouvrez une PR depuis `feature/ma-modif` vers `main` sur GitHub, demandez une relecture si nécessaire.

- **Merge / Déploiement :**

	- Une fois la PR approuvée, mergez vers `main`. Si un pipeline CI/CD (Vercel, Netlify, GitHub Actions...) est configuré, le déploiement s'effectuera automatiquement après le merge. Attendez quelques minutes puis vérifiez le site.

- **Petite correction urgente :**

	- Pour un correctif mineur vous pouvez aussi committer directement sur `main` (éviter si plusieurs contributeurs).

- **Annuler un changement :**

	- Utilisez la fonction "Revert" de GitHub sur la PR ou `git revert <commit>` puis push.

- **Variables d'environnement :**

	- Si vous devez mettre à jour des secrets (ex : clés Firebase, SMTP), modifiez-les dans le dashboard d'hébergement (Vercel/GitHub Actions) ou dans les _Secrets_ du dépôt GitHub.

Si vous voulez, je peux créer une version très courte (cheat-sheet) ou une checklist imprimable à coller dans la doc interne.

### Travailler directement sur `main`

Pour ce petit projet si vous préférez travailler uniquement sur la branche `main`, suivez ces étapes simples :



Cloner le dépôt (si vous ne l'avez pas encore) :

- git clone https://github.com/Pulse-Asso/Pulse_Showcase.git : copie le dépôt distant sur votre machine.

cd Pulse_Showcase

- `git pull origin main`: récupère les dernières modifications depuis la branche `main` distante et les intègre localement.
- Effectuez vos modifications et testez localement avec `npm run dev`.
- `git add .`: place les fichiers modifiés en attente de commit.
- `git commit -m "Description courte des changements"`: crée un commit local avec un message décrivant les changements.
- `git push origin main`envoie vos commits vers le dépôt distant.

Remarque : cette méthode est pratique pour un développeur unique ou des changements mineurs. Si plusieurs personnes contribuent, il est recommandé d'utiliser des branches pour éviter les conflits.




