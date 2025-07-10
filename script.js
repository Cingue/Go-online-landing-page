
window.addEventListener("scroll", () =>{
    let ctaBtn = document.querySelector('#CTA'); 
    if (window.scrollY >= 422) {
        ctaBtn.style.display = 'block';
    } else {
        ctaBtn.style.display = 'none';
    }
})



var button = document.querySelector('button');

button.addEventListener('click', (e) =>{
let input_prenom = document.querySelector('#prenom');
let div_prenom = document.querySelector('.form-input-1');
let error_prenom = document.querySelector('#error-nom');

let input_numero = document.querySelector('#numero');
let div_numero = document.querySelector('.form-input-2')
let error_numero = document.querySelector('#error-numero');

let input_ville = document.querySelector('#ville');
let div_ville = document.querySelector('.form-input-3')
let error_ville = document.querySelector('#error-ville');

const regex = /^[1-9 +-][0-9 +-]{0,23}$/

if (input_prenom.value.trim() === '' ) {
    e.preventDefault()
    div_prenom.style.border = '1px solid red';
    input_prenom.focus()
    error_prenom.innerHTML = 'Veuillez saisir votre prenom';
    error_prenom.style.color = 'red';
    error_prenom.style.alignSelf = 'flex-start';
}
else if (input_numero.value.trim() === '' || regex.test(input_numero.value) === false) {
    e.preventDefault()
    div_numero.style.border = '1px solid red';
    input_numero.focus()
    error_numero.innerHTML = 'Veuillez saisir un numéro valide';
    error_numero.style.color = 'red';
    error_numero.style.alignSelf = 'flex-start';
}
else if (input_ville.value.trim() === '') {
    e.preventDefault()
    div_ville.style.border = '1px solid red';
    input_ville.focus()
    error_ville.innerHTML = 'Veuillez entrer votre ville';
    error_ville.style.color = 'red';
    error_ville.style.alignSelf = 'flex-start';
} else{
    
}
});

var showFaq1 = document.querySelector(".faq-div-1");
showFaq1.addEventListener('click', () => {
    let response1 = document.querySelector('.response-1')
    let up1= document.querySelector('#up-1');

    if (response1.style.display === 'none') {
        response1.style.display = "block";
        response1.style.alignSelf = 'flex-start';
        up1.style.transform = `rotate(${180}deg)`;
        up1.style.transition = `${.3}s`;
    } else{
        response1.style.display = "none";
        up1.style.transform = `rotate(${0}deg)`;
        
    }
    
});

