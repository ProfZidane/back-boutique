const ranger = document.getElementById('formControlRange');
const valueAfficher = document.getElementById('valueRange');

 ranger.addEventListener('change', () => {
     console.log(ranger.value);
    valueAfficher.innerHTML = ranger.value 
 })