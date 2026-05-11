import Link from 'next/link'

export default function Footer() {
  return (
    <footer className="footer">
      <div className="container">
        <div className="footer-content">
          <div className="footer-section">
            <h4>Genpulse</h4>
            <p>
              L&apos;application qui révolutionne la communication universitaire en centralisant
              tous les événements et informations sur une seule plateforme intuitive.
            </p>
          </div>

          <div className="footer-section">
            <h4>Liens rapides</h4>
            <Link href="/#about">À propos</Link>
            <Link href="/#profile-features">Fonctionnalités</Link>
            <Link href="/equipe">L&apos;équipe</Link>
            <Link href="/partenariats">Partenariats</Link>
            <Link href="/contact">Contact</Link>
          </div>

          <div className="footer-section">
            <h4>Support</h4>
            <a href="/mentions-legales.pdf" target="_blank" rel="noopener noreferrer">
              Mentions légales
            </a>
            <a href="#">Politique de confidentialité</a>
            <a href="#">Conditions d&apos;utilisation</a>
            <a href="#">FAQ</a>
          </div>
        </div>

        <div className="footer-bottom">
          <p>&copy; 2025 Genpulse. Tous droits réservés. Conçu avec ❤️ pour la communauté étudiante.</p>
        </div>
      </div>
    </footer>
  )
}
