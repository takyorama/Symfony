const toggle = (data) => {
    let style = (data)?'toggle':'toggle toggle-checked'
    return '<div class="'+style+'">Eu acho que deu certo</div>'
}

let toogle = toggle(true)

document.querySelector('#app').innerHTML = toogle