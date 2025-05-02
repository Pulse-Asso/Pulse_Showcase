<!-- pop up success (if the send form is correctly send)-->

<div id="alert-success" class="alert-success">
    <div class="alert-content">
        <svg class="alert-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
            <path d="M10 15l-5-5h10l-5 5z"/>
            <path fill="none" d="M0 0h24v24H0z"/>
        </svg>
        <div>
            <p class="alert-title">Envoyé !</p>
            <p class="alert-message">Votre message a bien été envoyé avec succès !</p>
        </div>
    </div>
    <button type="button" class="alert-close" onclick="closeAlert('alert-success')">
        <svg xmlns="http://www.w3.org/2000/svg" class="alert-close-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
        </svg>
    </button>
</div>
