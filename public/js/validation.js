
function validation(f) {
  if (f.psw.value == '' || f.pswrepeat.value == '') {
    alert('Tous les champs ne sont pas remplis');
    f.psw.focus();
    return false;
    }
  else if (f.psw.value != f.pswrepeat.value) {
    alert("mot de passe erroné, veuillez modifier");
    f.psw.focus();
    return false;
    }
  else if (f.psw.value == f.pswrepeat.value) {
    return true;
    }
  else {
    f.psw.focus();
    return false;
    }
  }