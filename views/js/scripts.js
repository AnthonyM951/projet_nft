const stripe = Stripe("pk_test_51KVmAzJUkguCXOlsBFAvLERhhaSRHKQQw0ExUor4NY1auCNMLFn5kvZiF0HXfV7Y46VLF54ZuORWlMHkyGuxDpCJ00DFuJVCcX")
const btn = document.querySelector('#btn')
btn.addEventListener('click', () => {
    fetch('checkout.php', {
        method: "POST",
        headers: {
            'Content-Type': 'application/json',
            'Content-Type': 'text/html; charset=utf-8'
        },
        body: JSON.stringify({})
    }).then(res => res.json())
        .then(payload => {
            stripe.redirectToCheckout({ sessionId: payload.id })
        })
})