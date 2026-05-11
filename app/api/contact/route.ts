import { NextRequest, NextResponse } from 'next/server'
import nodemailer from 'nodemailer'

export async function POST(req: NextRequest) {
  try {
    const body = await req.json()
    const { name, email, subject, message } = body

    if (!name || !email || !message) {
      return NextResponse.json({ status: 'error', message: 'Champs requis manquants' }, { status: 400 })
    }

    const transporter = nodemailer.createTransport({
      host: process.env.SMTP_HOST ?? 'smtp.gmail.com',
      port: Number(process.env.SMTP_PORT ?? 587),
      secure: false,
      auth: {
        user: process.env.SMTP_USER,
        pass: process.env.SMTP_PASS,
      },
    })

    await transporter.sendMail({
      from: `"${name}" <${process.env.SMTP_USER}>`,
      to: 'genpulse.pro@gmail.com',
      replyTo: email,
      subject: subject ?? `Contact depuis le site - ${name}`,
      text: message,
      html: `<p><strong>De :</strong> ${name} (${email})</p><p>${message.replace(/\n/g, '<br>')}</p>`,
    })

    return NextResponse.json({ status: 'success' })
  } catch (err) {
    console.error('Contact route error:', err)
    return NextResponse.json({ status: 'error', message: 'Erreur serveur' }, { status: 500 })
  }
}
