let formInEle = document.getElementById('form_signin');
let formUpEle = document.getElementById('form_signup');

console.log(formInEle);

let btnSignin = document.getElementById('btn_signin');

btnSignin.onclick = function(){
    formInEle.classList.add('transform-left-380px');
    formUpEle.classList.add('transform-left-380px');
}