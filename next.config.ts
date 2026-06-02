import type { NextConfig } from "next";

const nextConfig: NextConfig = {
  async redirects() {
    return [
      // www → non-www (canonical is genpulse.fr without www)
      {
        source: '/:path*',
        has: [{ type: 'host', value: 'www.genpulse.fr' }],
        destination: 'https://genpulse.fr/:path*',
        permanent: true,
      },
      // PDF → page HTML
      { source: '/mentions-legales.pdf', destination: '/mentions-legales', permanent: true },
      // old PHP URLs
      { source: '/index.php', destination: '/', permanent: true },
      { source: '/contact.php', destination: '/contact', permanent: true },
      // old static site HTML URLs
      { source: '/index.html', destination: '/', permanent: true },
      { source: '/equipe.html', destination: '/equipe', permanent: true },
      { source: '/partenariats.html', destination: '/partenariats', permanent: true },
      { source: '/fonctionnalites-commune.html', destination: '/fonctionnalites/commune', permanent: true },
      { source: '/fonctionnalites-association.html', destination: '/fonctionnalites/association', permanent: true },
      { source: '/fonctionnalites-enseignement.html', destination: '/fonctionnalites/enseignement', permanent: true },
      // stale link from old static site
      { source: '/page2%20Nath.html', destination: '/', permanent: true },
      { source: '/page2 Nath.html', destination: '/', permanent: true },
    ]
  },
};

export default nextConfig;
