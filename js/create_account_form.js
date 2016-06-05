var resForm = true;
var resPseudo = true;
var resEmail = true;

function verifForm()
{
  if ($('#pseudo').val() == "")
  {
    resForm = false;
    $('#pseudo').css('border-color', 'red');
  }
  if ($('#email').val() == "")
  {
    resForm = false;
    $('#email').css('border-color', 'red');
  }
  if ($('#mdp').val() == "")
  {
    resForm = false;
    $('#mdp').css('border-color', 'red');
  }
  if ($('#telephone').val() == "")
  {
    resForm = false;
    $('#telephone').css('border-color', 'red');
  } 
  if ($('#datepicker').val() == "")
  {
    resForm = false;
    $('#datepicker').css('border-color', 'red');
  }
    
  verifPseudo();
}

function verifPseudo()
{
  $.post("http://localhost/victor/Utilisateur/webservices.php?function=verifPseudo&pseudo=" + $('#pseudo').val(), null, verifPseudoResponse);
}

function verifPseudoResponse(data)
{
  objetJS = eval('(' + data + ')'); 
    
  if (objetJS != 0)
  {
    $('#pseudo').css('border-color', 'red');
    alert("Le pseudo est déjà utilisé");
    resPseudo = false;
  }
  else
  {
    $('#pseudo').css('border-color', '#ccc');  
  }
    
  verifEmail();
}

function verifEmail()
{
  $.post("http://localhost/victor/Utilisateur/webservices.php?function=verifEmail&email=" + $('#email').val(), null, verifEmailResponse);
}

function verifEmailResponse(data)
{
  //alert(data);
  objetJS = eval('(' + data + ')');
    
  if (objetJS != 0)
  {
    $('#email').css('border-color', 'red');
    alert("L'email est déjà utilisé");
    resEmail = false;
  }
  else
  {
    $('#email').css('border-color', '#ccc');
  }
  
  if (resForm && resPseudo && resEmail)
    $('#form_create_account').submit();
}

