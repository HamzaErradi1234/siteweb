var form = document.querySelector("#myForm");
console.log(form.ville);
form.ville.addEventListener('Change', function () {
    validVille(this);
});


const validVille = function (inputVille) {
    let villeregExp = new RegExp(
        '^[a-zA-Z0-9.-_]+[@]{1}[a-zA-Z0-9.-_]+[.]{1}[a-z]{2,10}$', 'g'
    );
    var testville = villeregExp.test(inputVille.value);
    var small = inputVille.nextElementSibling;
    if (testVille) {
        small.innerHTML = "adresse valide";
    }
    else {
        small.innerHTML = "adresse non valide";
    }
};