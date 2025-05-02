const nodemailer = require('nodemailer');

// Récupération des arguments passés
const email_contact = process.argv[2];
const surname = process.argv[3];
const name = process.argv[4];
const phone = process.argv[5];
const choice = process.argv[6];
const message = process.argv[7];
const etablissement = process.argv[8] || 'Non spécifié';
const sites = process.argv[9] || 'Non spécifié';
const etudiants = process.argv[10] || 'Non spécifié';
const disponibilites = process.argv[11] || 'Non spécifié';
const request_quote = process.argv[12] === '1' ? 'Oui' : 'Non';

// Configuration du transporteur SMTP avec Gmail
let transporter = nodemailer.createTransport({
    host: 'smtp.gmail.com',
    port: 587,
    secure: false,
    auth: {
        user: 'justingendron02@gmail.com',
        pass: 'fijw tnnx jcjl ihmz',
    },
    tls: {
        rejectUnauthorized: false,
    },
});

// Définition du contenu de l'email
let mailOptions = {
    from: 'justingendron02@gmail.com',
    to: `${email_contact}`, // Destinataire
    subject: `Nouvelle Demande : ${choice === 'rendez-vous' ? 'Rendez-vous' : 'Question'}`,
    text: `
Nom : ${surname}
Prénom : ${name}
Email : ${email_contact}
Téléphone : ${phone}
Type de demande : ${choice}
Etablissement : ${etablissement}
Sites concernés : ${sites}
Nombre d'étudiants : ${etudiants}
Disponibilités : ${disponibilites}
Demande de devis : ${request_quote}

Message :
${message}
    `.trim(),
    html: `
        <div style="font-family: Arial, sans-serif; color: #333; background-color: #f5f5f5; padding: 20px;">
            <div style="max-width: 600px; margin: auto; background-color: white; border-radius: 10px; overflow: hidden; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
                <div style="background-color: #000; padding: 30px; text-align: center; color: white;">
                    <h1 style="margin: 0; font-size: 24px;">Nouvelle Demande</h1>
                    <p style="font-size: 16px; color: #bbb;">${choice === 'rendez-vous' ? 'Rendez-vous' : 'Question'}</p>
                </div>
                <div style="padding: 20px;">
                    <h2 style="font-size: 20px; color: #333;">Détails du Contact</h2>
                    <p><strong>Nom :</strong> ${surname}</p>
                    <p><strong>Prénom :</strong> ${name}</p>
                    <p><strong>Email :</strong> <a href="mailto:${email_contact}" style="color: #1a73e8;">${email_contact}</a></p>
                    <p><strong>Téléphone :</strong> ${phone}</p>
                </div>
                <div style="padding: 10px 20px;">
                    <h2 style="font-size: 20px; color: #333;">Détails de la Demande</h2>
                    <p><strong>Type de Demande :</strong> ${choice === 'rendez-vous' ? 'Rendez-vous' : 'Question'}</p>
                    <p><strong>Etablissement :</strong> ${etablissement}</p>
                    <p><strong>Sites concernés :</strong> ${sites}</p>
                    <p><strong>Nombre d'étudiants :</strong> ${etudiants}</p>
                    <p><strong>Disponibilités :</strong> ${disponibilites}</p>
                    <p><strong>Demande de devis :</strong> ${request_quote}</p>
                </div>
                <div style="padding: 10px 20px;">
                    <h2 style="font-size: 20px; color: #333;">Message</h2>
                    <p style="background-color: #f1f1f1; padding: 15px; border-left: 5px solid #000; font-style: italic;">
                        "${message}"
                    </p>
                </div>
                <div style="background-color: #000; padding: 20px; text-align: center; color: white;">
                    <p style="margin: 0;">Merci de votre confiance,</p>
                    <p style="margin: 5px 0;">L'équipe de Léa Payet-Mangeron</p>
                    <p style="font-size: 12px; color: #bbb;">Cet email a été généré automatiquement depuis le formulaire de contact.</p>
                </div>
            </div>
        </div>`
};

// Envoi de l'email
transporter.sendMail(mailOptions, function (error, info) {
    if (error) {
        console.log('Erreur lors de l\'envoi :', error);
    } else {
        console.log('Email envoyé : ' + info.response);
    }
});
