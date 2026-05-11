'use client'

import { useState } from 'react'

type Status = 'idle' | 'loading' | 'success' | 'error'

export default function ContactForm() {
  const [status, setStatus] = useState<Status>('idle')
  const [form, setForm] = useState({ name: '', email: '', subject: '', message: '' })

  const handleChange = (e: React.ChangeEvent<HTMLInputElement | HTMLTextAreaElement | HTMLSelectElement>) => {
    setForm(prev => ({ ...prev, [e.target.name]: e.target.value }))
  }

  const handleSubmit = async (e: React.FormEvent) => {
    e.preventDefault()
    setStatus('loading')
    try {
      const res = await fetch('/api/contact', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify(form),
      })
      const data = await res.json()
      setStatus(data.status === 'success' ? 'success' : 'error')
    } catch {
      setStatus('error')
    }
  }

  if (status === 'success') {
    return (
      <div style={{ textAlign: 'center', padding: '4rem 2rem' }}>
        <div style={{ fontSize: '4rem', marginBottom: '1.5rem' }}>
          <i className="fas fa-check-circle" style={{ color: '#10b981' }}></i>
        </div>
        <h3 style={{ fontSize: '1.75rem', fontWeight: 700, color: '#1e293b', marginBottom: '1rem' }}>
          Message envoyé !
        </h3>
        <p style={{ color: '#64748b', fontSize: '1.125rem', marginBottom: '2rem' }}>
          Merci pour votre message. Nous vous répondrons dans les plus brefs délais.
        </p>
        <button
          onClick={() => { setStatus('idle'); setForm({ name: '', email: '', subject: '', message: '' }) }}
          className="btn btn-primary"
        >
          Envoyer un autre message
        </button>
      </div>
    )
  }

  return (
    <form onSubmit={handleSubmit} style={{ display: 'flex', flexDirection: 'column', gap: '1.5rem' }}>
      <div style={{ display: 'grid', gridTemplateColumns: '1fr 1fr', gap: '1.5rem' }}>
        <div className="form-group">
          <label htmlFor="name" style={labelStyle}>Nom complet *</label>
          <input
            id="name"
            name="name"
            type="text"
            required
            value={form.name}
            onChange={handleChange}
            placeholder="Votre nom"
            style={inputStyle}
          />
        </div>
        <div className="form-group">
          <label htmlFor="email" style={labelStyle}>Email *</label>
          <input
            id="email"
            name="email"
            type="email"
            required
            value={form.email}
            onChange={handleChange}
            placeholder="votre@email.com"
            style={inputStyle}
          />
        </div>
      </div>

      <div className="form-group">
        <label htmlFor="subject" style={labelStyle}>Sujet</label>
        <select
          id="subject"
          name="subject"
          value={form.subject}
          onChange={handleChange}
          style={inputStyle}
        >
          <option value="">Sélectionnez un sujet</option>
          <option value="Demande de démonstration">Demande de démonstration</option>
          <option value="Partenariat">Partenariat</option>
          <option value="Enseignement supérieur">Enseignement supérieur</option>
          <option value="Commune / Mairie">Commune / Mairie</option>
          <option value="Association">Association</option>
          <option value="Autre">Autre</option>
        </select>
      </div>

      <div className="form-group">
        <label htmlFor="message" style={labelStyle}>Message *</label>
        <textarea
          id="message"
          name="message"
          required
          value={form.message}
          onChange={handleChange}
          placeholder="Décrivez votre demande..."
          rows={6}
          style={{ ...inputStyle, resize: 'vertical' }}
        />
      </div>

      {status === 'error' && (
        <p style={{ color: '#ef4444', display: 'flex', alignItems: 'center', gap: '0.5rem', fontSize: '0.95rem' }}>
          <i className="fas fa-exclamation-circle"></i>
          Une erreur est survenue. Veuillez réessayer ou nous écrire à{' '}
          <a href="mailto:genpulse.pro@gmail.com" style={{ color: '#ff6b35', textDecoration: 'underline' }}>
            genpulse.pro@gmail.com
          </a>.
        </p>
      )}

      <button
        type="submit"
        disabled={status === 'loading'}
        className="btn btn-primary btn-lg"
        style={{ alignSelf: 'flex-start', opacity: status === 'loading' ? 0.7 : 1, cursor: status === 'loading' ? 'not-allowed' : 'pointer' }}
      >
        {status === 'loading' ? (
          <><i className="fas fa-spinner fa-spin"></i> Envoi en cours...</>
        ) : (
          <><i className="fas fa-paper-plane"></i> Envoyer le message</>
        )}
      </button>
    </form>
  )
}

const labelStyle: React.CSSProperties = {
  display: 'block',
  fontWeight: 600,
  color: '#1e293b',
  marginBottom: '0.5rem',
  fontSize: '0.95rem',
}

const inputStyle: React.CSSProperties = {
  width: '100%',
  padding: '0.75rem 1rem',
  border: '1.5px solid #e2e8f0',
  borderRadius: '10px',
  fontSize: '1rem',
  color: '#1e293b',
  background: '#f8fafc',
  outline: 'none',
  transition: 'border-color 0.2s',
}
