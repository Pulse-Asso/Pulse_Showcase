<!DOCTYPE html>
<html lang="fr">

<!-- Head start -->
<?php include '../Components/head.php'; ?>
<!-- Head End -->

<body>
    <!-- Custom Cursor -->
    <div class="custom-cursor"></div>
    
    <!-- Spinner Start -->
    <div id="spinner" class="show position-fixed w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="loading"></div>
    </div>
    <!-- Spinner End -->

    <!-- Navbar Start -->
    <?php include '../Components/navbar.php'; ?>
    <!-- Navbar End -->

    <!-- Hero Section Start -->
    <section class="hero-section" style="background-image: url('../img/office.jpg'); background-size: cover; background-position: center; position: relative;">
        <div class="hero-overlay" style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: rgba(0,0,0,0.35);"></div>
        <div class="hero-content" style="position: relative; z-index: 2;">
            <div class="hero-text">
                <h1 class="hero-title" style="color: white;">Politique de <span class="highlight">Confidentialité</span></h1>
                <p class="hero-subtitle" style="color: white;">Comment Pulse collecte, utilise et protège vos données</p>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Politique de Confidentialité Content Start -->
    <section class="section" style="background: white;">
        <div class="container">
            <div class="section-title">
                <p class="section-subtitle">Protection des données</p>
                <h2>Politique de Confidentialité</h2>
            </div>

            <div class="card" style="padding: 2rem;">
                <p><strong>Pulse</strong> s'engage à protéger la vie privée de ses utilisateurs et la confidentialité de leurs données personnelles. La présente Politique de Confidentialité vise à vous informer sur la manière dont nous collectons, utilisons et protégeons vos informations personnelles dans le cadre de l'utilisation de notre application et de notre site web, en conformité avec le Règlement (UE) 2016/679 (Règlement Général sur la Protection des Données - RGPD) et la législation française applicable.</p>

                <h3 style="margin-top: 2rem;">1. Données personnelles collectées</h3>
                <p>Nous pouvons être amenés à collecter et traiter les catégories de données personnelles suivantes :</p>
                <ul>
                    <li><strong>Identité</strong> : nom, prénom.</li>
                    <li><strong>Coordonnées de contact</strong> : adresse e-mail, numéro de téléphone, adresse postale.</li>
                    <li><strong>Informations de compte et d'authentification</strong> : données transmises via le système de connexion unique (SSO) de votre établissement (par exemple, identifiant utilisateur fourni par l'école/université, adresse email académique).</li>
                    <li><strong>Données liées à la billetterie (à venir)</strong> : informations nécessaires lors de l'inscription à des événements et à l'achat de billets (ex : historique des réservations, informations de facturation). Les données de paiement seront traitées de manière sécurisée par un prestataire certifié PCI-DSS (nous ne conservons pas directement vos données de carte bancaire).</li>
                    <li><strong>Informations fournies via les formulaires (contact, devis)</strong> : par exemple, les données que vous renseignez volontairement telles que votre nom, votre email, l'objet de votre demande et le contenu de votre message.</li>
                    <li><strong>Données de navigation et cookies</strong> : notamment des cookies de session (pour le fonctionnement et la sécurité du service) et des cookies analytiques (pour la mesure d'audience, avec votre consentement). Ces cookies peuvent collecter des informations relatives à votre navigation telles que les pages consultées, la durée de consultation, ou encore des identifiants techniques de votre terminal.</li>
                </ul>

                <h3 style="margin-top: 2rem;">2. Finalités du traitement et bases légales</h3>
                <p>Chaque traitement de vos données personnelles a une finalité déterminée et s'appuie sur une base légale conforme à la réglementation. En particulier :</p>
                <ul>
                    <li><strong>Fourniture de l'application et des services Pulse</strong> (création et gestion de votre compte utilisateur, connexion sécurisée via SSO, accès aux fonctionnalités de l'application) : base légale – exécution du contrat (nos Conditions d'Utilisation que vous acceptez en créant un compte).</li>
                    <li><strong>Inscriptions aux événements et billetterie</strong> (lorsque ce service sera disponible) : base légale – exécution du contrat (fournir le service demandé) et respect d'obligations légales (tenue de comptabilité et facturation).</li>
                    <li><strong>Communication et support utilisateur</strong> (répondre à vos demandes via le support ou le formulaire de contact) : base légale – intérêt légitime de Pulse à vous assister et à répondre à vos sollicitations (ou exécution de mesures précontractuelles si vous demandez un devis).</li>
                    <li><strong>Envoi d'informations et de prospection commerciale</strong> (telles que des newsletters ou offres de partenaires) : base légale – votre consentement (que vous pouvez retirer à tout moment).</li>
                    <li><strong>Analyse d'utilisation et amélioration du service</strong> (statistiques de fréquentation, feedback utilisateurs) : base légale – intérêt légitime de Pulse à améliorer ses services et proposer de nouvelles fonctionnalités adaptées.</li>
                    <li><strong>Assurer la sécurité de la plateforme</strong> (prévention des fraudes, détection des accès non autorisés) : base légale – intérêt légitime de Pulse à garantir l'intégrité et la sécurité du site, de l'application et des données.</li>
                    <li><strong>Respect des obligations légales</strong> : traiter et conserver certaines données afin de nous conformer à nos obligations légales et réglementaires (par exemple, conservation des données de transaction à des fins comptables ou réponse à des demandes officielles des autorités si nécessaire).</li>
                </ul>

                <h3 style="margin-top: 2rem;">3. Destinataires des données personnelles</h3>
                <p>Vos données personnelles ne sont accessibles qu'aux personnes et entités ayant besoin d'y accéder dans le cadre des finalités mentionnées ci-dessus. Ainsi, peuvent avoir accès à certaines de vos données :</p>
                <ul>
                    <li>Le personnel autorisé de Pulse, soumis à une obligation de confidentialité (équipe support, équipe technique, équipe commerciale/marketing).</li>
                    <li>Nos prestataires techniques (sous-traitants) intervenant pour la fourniture de nos services (hébergeur, services d'analytique, etc.), agissant selon nos instructions et sous contrat.</li>
                    <li>Le prestataire de paiement (lorsque la billetterie sera en place) qui traitera les transactions financières, avec accès uniquement aux informations nécessaires au paiement.</li>
                    <li>D'éventuels partenaires commerciaux, uniquement si vous avez donné votre consentement pour le partage de vos informations.</li>
                    <li>Les autorités administratives ou judiciaires, uniquement en cas d'obligation légale.</li>
                </ul>

                <h3 style="margin-top: 2rem;">4. Durée de conservation des données</h3>
                <p>Nous conservons vos données personnelles uniquement pendant la durée nécessaire à l'accomplissement des finalités décrites et dans le respect des durées légales de conservation.</p>
                <ul>
                    <li><strong>Données de votre compte utilisateur</strong> : conservées tant que votre compte est actif. Après suppression ou inactivité prolongée, elles seront supprimées ou anonymisées après un délai raisonnable, sauf archivage pour obligations légales.</li>
                    <li><strong>Données de prospection commerciale</strong> : conservées pendant 3 ans à partir du dernier contact.</li>
                    <li><strong>Données de facturation et transactions</strong> : conservées pendant 10 ans à compter de la clôture de l'exercice comptable.</li>
                    <li><strong>Données de navigation et cookies</strong> : conservées pour une durée maximale de 13 mois (cookies analytiques) et environ 12 mois pour les logs de connexion, sauf obligation légale contraire.</li>
                </ul>

                <h3 style="margin-top: 2rem;">5. Mesures de sécurité</h3>
                <p>Pulse met en œuvre des mesures techniques et organisationnelles appropriées pour protéger vos données :</p>
                <ul>
                    <li>Contrôle des accès : accès restreint aux personnes autorisées via un système d'habilitations.</li>
                    <li>Authentification sécurisée : accès aux comptes via identifiant/mot de passe ou SSO, avec stockage chiffré des mots de passe.</li>
                    <li>Traçabilité et surveillance : tenue de journaux d'accès et d'actions pour détecter toute activité anormale.</li>
                    <li>Hébergement sécurisé : serveurs et bases de données hébergés dans des centres de données sécurisés, avec échanges chiffrés via HTTPS/TLS.</li>
                </ul>

                <h3 style="margin-top: 2rem;">6. Vos droits sur vos données</h3>
                <p>Conformément au RGPD et à la loi Informatique et Libertés, vous disposez des droits suivants :</p>
                <ul>
                    <li>Droit d'accès : obtenir la confirmation et la communication des données vous concernant.</li>
                    <li>Droit de rectification : faire corriger des données inexactes ou incomplètes.</li>
                    <li>Droit à l'effacement (droit à l'oubli) : obtenir la suppression de vos données dans certains cas.</li>
                    <li>Droit d'opposition : vous opposer au traitement de vos données pour des motifs légitimes ou à des fins de prospection commerciale.</li>
                    <li>Droit à la limitation du traitement : demander la suspension temporaire du traitement de certaines données.</li>
                    <li>Droit à la portabilité : récupérer vos données dans un format structuré et couramment utilisé.</li>
                </ul>

                <h3 style="margin-top: 2rem;">7. Exercice de vos droits et contact</h3>
                <p>Pour toute question ou pour exercer vos droits, vous pouvez nous contacter :</p>
                <ul>
                    <li>Par email : <a href="mailto:pulse.pro.event@gmail.com">pulse.pro.event@gmail.com</a></li>
                    <li>Par courrier : Pulse - 3 résidence du Parc, 91300 Massy, France</li>
                </ul>
                <p>Nous pourrons vous demander une preuve d'identité pour sécuriser l'exercice de vos droits. Nous répondrons dans un délai d'un mois conformément à la réglementation. En cas de non-respect de vos droits, vous pouvez introduire une réclamation auprès de la CNIL.</p>

                <h3 style="margin-top: 2rem;">8. Transferts de données hors de l'Union Européenne</h3>
                <p>À ce jour, aucune donnée personnelle n'est transférée hors de l'Union Européenne ou vers des pays hors EEE. Toutes les données sont hébergées sur des serveurs localisés au sein de l'UE. Le cas échéant, des garanties appropriées seront mises en place pour assurer un niveau de protection suffisant.</p>
            </div>
        </div>
    </section>
    <!-- Politique de Confidentialité Content End -->

    <!-- Footer Start -->
    <?php include '../Components/footer.php'; ?>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="back-to-top">
        <i class="fas fa-arrow-up"></i>
    </a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Template Javascript -->
    <script src="../js/main.js"></script>
    <script src="../js/cursor.js"></script>
    
</body>

</html>
