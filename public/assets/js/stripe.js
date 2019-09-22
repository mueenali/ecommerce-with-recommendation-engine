const stripe = Stripe('pk_test_tBlBzfV49suKTf7aLJKwQRdG');
const elements = stripe.elements({
    fonts: [
        {
            family: 'Open Sans',
            weight: 400,
            src: 'local("Open Sans"), local("OpenSans"), url(https://fonts.gstatic.com/s/opensans/v13/cJZKeOuBrn4kERxqtaUH3ZBw1xU1rKptJj_0jans920.woff2) format("woff2")',
            unicodeRange: 'U+0000-00FF, U+0131, U+0152-0153, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2212, U+2215',
        },
    ]
});

const card = elements.create('card', {
    hidePostalCode: true,
    style: {
        base: {
            iconColor: '#F99A52',
            color: '#32315E',
            lineHeight: '48px',
            fontWeight: 400,
            fontFamily: '"Open Sans", "Helvetica Neue", "Helvetica", sans-serif',
            fontSize: '15px',

            '::placeholder': {
                color: '#CFD7DF',
            }
        },
    }
});
card.mount('#card-element');

function setOutcome(result) {
    const errorElement = document.querySelector('.error');
    errorElement.classList.remove('visible');
    if (result.token) {
        // Use the token to create a charge or a customer
        // https://stripe.com/docs/charges
        const form = document.getElementById('form-checkout');
        const hiddenInput = document.createElement('input');
        hiddenInput.setAttribute('type', 'hidden');
        hiddenInput.setAttribute('name', 'stripeToken');
        hiddenInput.setAttribute('value', result.token.id);
        form.appendChild(hiddenInput);
        form.submit();
    } else if (result.error) {
        errorElement.textContent = result.error.message;
        errorElement.classList.add('visible');
    }
}

card.on('change', function(event) {
    setOutcome(event);
});

document.querySelector('form').addEventListener('submit', function(e) {
    e.preventDefault();
    const form = document.querySelector('form');
    const extraDetails = {
        name: form.querySelector('input[name=cardholderName]').value
    };
    stripe.createToken(card, extraDetails).then(setOutcome);
});
