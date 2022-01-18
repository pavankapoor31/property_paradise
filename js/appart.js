var size = document.getElementById('size');
var prize = document.getElementById('prize');
var contact = document.getElementById('contact');
var address = document.getElementById('address');
var sizeerror = document.getElementById('sizeerror');
var contacterror = document.getElementById('contacterror');
var addresserror = document.getElementById('addresserror');
var prizeerror = document.getElementById('prizeerror');

//checks whole validation
function formValidation() {

    if (size.value.length < 3) {
        sizeerror.style.visibility = 'visible';
        console.log('sizeerror false');
        return false;
    }

    if (prize.value.length < 3) {
        prizeerror.style.visibility = 'visible';
        console.log('contacterror false');
        return false;
    }
    if (contact.value.length != 10) {
        contacterror.style.visibility = 'visible';
        console.log('contacterror false');
        return false;
    }
    if (address.value.length < 3) {
        addresserror.style.visibility = 'visible';
        console.log('contacterror false');
        return false;
    }
}


function hideNext(el) {
    el = el.nextSibling.nextSibling;
    el.style.visibility = 'hidden';
    signuperror.style.visibility = 'hidden';
}