function getter(nom) {
  return document.getElementById(nom);
}

function Tester() {

  function check(nm, bb, bh) {
    return !(parseFloat(nm)>=bb && parseFloat(nm)<=bh);
  }
  var poper = true;
  if (getter('num').value.length!=5) {
    poper = false;
  }
    
  if (getter('num').value.substring(0, 3).toUpperCase() !='4SI') {
    poper = false;
  }
  if (check(getter('num').value.substring(3), 11, 99)) {
    poper = false;
  }
  if (parseInt(getter('num').value.substring(3))%10==0) {
    poper = false;
  }
  if ( (getter('matiere').value == "Choisir une matiere:" ) || check(getter('dc').value, 0, 20)
      || check(getter('ds').value, 0, 20) ) {
    poper = false;
  }
  if (!poper) {
    alert('Faute de saisie!');
  }
  return poper;

}

function Annuler() {
  getter('matiere').value = '';
  getter('dc').value = '';
  getter('ds').value = '';
}
