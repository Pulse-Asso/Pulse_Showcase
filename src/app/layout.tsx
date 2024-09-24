import type { Metadata } from "next";
import Head from 'next/head';




export const metadata: Metadata = {
  title: "Pulse - L'application étudiante",
  description:
    "L'application d'évènements universitaires pour booster la communication sur vos campus",
  keywords: [
    "événements étudiants",
    "communication universitaire",
    "associations étudiantes",
    "EPF",
    "EM Lyon",
    "vie étudiante",
    "projet universitaire",
    "réseau inter-écoles",
    "application étudiante",
    "application communication universitaire",
    "évènements étudiants",
  ],
  openGraph: {
    title: "Pulse - L'application étudiante",
    description:
      "L'application d'évènements universitaires pour booster la communication sur vos campus",
    url: "https://your-website-url.com", // Replace with your URL
    type: "website",
    locale: "fr_FR",
    siteName: "Pulse",
    images: [
      {
        url: "https://your-website-url.com/og-image.jpg", // Replace with the correct OG image URL
        width: 1200,
        height: 630,
        alt: "Pulse - L'application étudiante",
      },
    ],
  },
  authors: [
    { name: "Vianney Otton" },
    { name: "Nathalie Saada" },
    { name: "Damien Drozd" },
  ],
  other: {
    "article:published_time": "2024-08-15",
  },
}

export default function RootLayout({
  children,
}: Readonly<{
  children: React.ReactNode;
}>) {
  return (
    <html lang="en">
      <Head>
        {/* Favicon */}
        <link rel="icon" href="/img/favicon.ico" />

        {/* Google Web Fonts */}
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" />
        <link
          href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500&family=Jost:wght@500;600;700&display=swap"
          rel="stylesheet"
        />

        {/* Icon Font Stylesheets */}
        <link
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
          rel="stylesheet"
        />
        <link
          href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
          rel="stylesheet"
        />

        {/* Additional Libraries */}
        <link href="lib/animate/animate.min.css" rel="stylesheet" />
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />

      </Head>
      <body>
        {children}
      </body>
    </html>
  );
}
