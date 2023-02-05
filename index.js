const agencia = document.querySelector('#agencia-input')

agencia.addEventListener('keypress', () => {
    let agencialength = agencia.value.length

    if(agencialength === 4) {
        agencia.value += '-'
    }
})

const conta = document.querySelector('#conta-input')

conta.addEventListener('keypress', () => {
    let contalength = conta.value.length

    if(contalength === 6) {
        conta.value += '-'
    }
})