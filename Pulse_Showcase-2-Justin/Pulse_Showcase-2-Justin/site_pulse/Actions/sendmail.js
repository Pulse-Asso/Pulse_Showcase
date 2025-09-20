#!/usr/bin/env node
// Minimal mail sender placeholder using Node.js
// Usage: node sendmail.js '<jsonPayload>'
// jsonPayload: { to, subject, text }

const fs = require('fs');

function log(message) {
  try {
    const logDir = __dirname + '/../logs';
    if (!fs.existsSync(logDir)) fs.mkdirSync(logDir, { recursive: true });
    fs.appendFileSync(logDir + '/node_mail.log', `[${new Date().toISOString()}] ${message}\n`);
  } catch (e) {
    // ignore
  }
}

async function main() {
  try {
    const arg = process.argv[2] || '{}';
    const payload = JSON.parse(arg);
    // Here you could integrate nodemailer. For now, we just log the payload.
    log(`MAIL -> to: ${payload.to}, subject: ${payload.subject}, text: ${payload.text?.slice(0, 500)}`);
    console.log(JSON.stringify({ status: 'ok' }));
    process.exit(0);
  } catch (err) {
    log(`MAIL ERROR: ${err?.message}`);
    console.error(JSON.stringify({ status: 'error', message: String(err?.message || err) }));
    process.exit(1);
  }
}

main();