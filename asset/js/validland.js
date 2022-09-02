const validPassword = function (inputPassword) {
    let msg;
    let valid = false;
    
    if (inputPassword.value.length < 3) {
        msg = 'Le mot de passe doit contenir au moins 3 caractères';
    }
    else if (!/[A-Z]/.test(inputPassword.value)) {
        msg = 'Le mot de passe doit contenir au moins 1 majuscule';
    }
    else if (!/[a-z]/.test(inputPassword.value)) {
        msg = 'Le mot de passe doit contenir au moins 1 minuscule';
    }
    else if (!/[0-9]/.test(inputPassword.value)) {
        msg = 'Le mot de passe doit contenir au moins 1 chiffre';
    }
    // Mot de passe valide
    else {
        msg = 'Mot de passe valide';
        valid = true;
    }

    let small = inputPassword.nextElementSibling;
    let error = document.querySelector('.error');
    let success = document.getElementsByClassName('success');


    if (valid) {
        // let success = document.getElementsByClassName('success');
        small.innerHTML = 'Mot de passe valide';
        small.classList.add('success');
        success.style.color = 'green';
        // document.querySelector('.success').style.color = 'green';
        return true;
    } else {
        // error.style.color = 'red';
        small.innerHTML = msg;
        // small.classList.remove('success');
        small.classList.add('error');
        error.style.color = 'red';
        // document.querySelector('.error').style.color = 'red';
        return false;
    }
}

form.addEventListener('submit', (e) => {
    e.preventDefault();
    if(validEmail(form.email) && validPassword(form.password)){
        form.submit();
    }
});