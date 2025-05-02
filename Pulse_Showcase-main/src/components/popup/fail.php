<!-- popup fail(if the form send have an error) -->

<!-- popup fail (si l'envoi du formulaire rencontre une erreur) -->
<div id="alert-fail" class="alert-fail">
  <div class="alert-content">
    <svg class="alert-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
      <!-- Icône d'erreur : ici un symbole d'avertissement -->
      <path d="M12 8v4m0 4h.01"/>
      <path fill="none" d="M0 0h24v24H0z"/>
    </svg>
    <div>
      <p class="alert-title">Erreur !</p>
      <p class="alert-message">Une erreur est survenue lors de l'envoi de votre message.</p>
    </div>
  </div>
  <button type="button" class="alert-close" onclick="closeAlert('alert-fail')">
    <svg xmlns="http://www.w3.org/2000/svg" class="alert-close-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
    </svg>
  </button>
</div>
