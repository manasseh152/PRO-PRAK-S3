<?php
  // $alert = (isset($_GET["alert"]))? $_GET["alert"]: "default";
  // $id = (isset($_GET["id"]))? $_GET["id"]: "";
  // $pwh = (isset($_GET["pwh"]))? $_GET["pwh"]: "";
  // $email = (isset($_GET["email"]))? $_GET["email"]: "";

  // switch($_GET["alert"]) {
  //   case "no-email-or-password" :
  //     echo('<div class="alert alert-info mt-5 w-50 mx-auto" role="alert">
  //     U heeft geen email of wachtwoord ingevuld!
  //   </div>');
  //   header("Refresh: 3; ./index.php?content=register");
  //   break;
  //   case "emailexists":
  //     echo('<div class="alert alert-warning mt-5 w-50 mx-auto" role="alert">
  //     De ingevulde email bestaat al!
  //       </div>');
  //     header("Refresh: 3; ./index.php?content=register");
  //   break;
  //   case "register-error":
  //     echo('<div class="alert alert-danger mt-5 w-50 mx-auto" role="alert">
  //     Er was een fout tijdens het registreren!
  //       </div>');
  //     header("Refresh: 3; ./index.php?content=register");
  //   break;
  //   case "register-succes":
  //     echo('<div class="alert alert-succes mt-5 w-50 mx-auto" role="alert">
  //     Het registreren is gelukt!
  //       </div>');
  //     header("Refresh: 3; ./index.php?content=login");
  //   break;
  //   case "hacker-alert":
  //     echo('<div class="alert alert-warning mt-5 w-50 mx-auto" role="alert">
  //     U heeft geen rechten op deze pagina!
  //       </div>');
  //     header("Refresh: 3; ./index.php?content=home");
  //   break;
  //   case "password-empty":
  //     echo('<div class="alert alert-warning mt-5 w-50 mx-auto" role="alert">
  //     U heeft een van de wachtwoord velden niet ingevuld. Probeer het opnieuw
  //       </div>');
  //     header("Refresh: 3; ./index.php?content=activate&id=$id&pwh=$pwh");
  //   break;
  //   case "nomatch-password":
  //     echo('<div class="alert alert-warning mt-5 w-50 mx-auto" role="alert">
  //     Uw ingevulde wachtwoorden zijn niet gelijk
  //       </div>');
  //     header("Refresh: 3; ./index.php?content=activate&id=$id&pwh=$pwh");
  //   break;
  //   case "no-id-pwh-match":
  //     echo('<div class="alert alert-warning mt-5 w-50 mx-auto" role="alert">
  //     Uw bent niet geregistreerd in de database, u wordt doorgesturd naar de registratiepagina
  //       </div>');
  //     header("Refresh: 3; ./index.php?content=register");
  //   break;
  //   case "update-succes":
  //     echo('<div class="alert alert-succes mt-5 w-50 mx-auto" role="alert">
  //     U bent succesvol geregistreerd, u wordt doorgestuurd naar de inlog pagina
  //       </div>');
  //     header("Refresh: 3; ./index.php?content=login");
  //   break;
  //   case "update-error":
  //     echo('<div class="alert alert-danger mt-5 w-50 mx-auto" role="alert">
  //     Het registratie proces is niet gelukt, kies een nieuw wachtwoord
  //       </div>');
  //       header("Refresh: 3; ./index.php?content=activate&id=$id&pwh=$pwh");
  //   break;
  //   case "already-active":
  //     echo('<div class="alert alert-danger mt-5 w-50 mx-auto" role="alert">
  //     uw account is al actief
  //       </div>');
  //       header("Refresh: 3; ./index.php?content=login");
  //   break;
  //   case "no-match-pwh":
  //     echo('<div class="alert alert-danger mt-5 w-50 mx-auto" role="alert">
  //     uw activatielink gegevens zijn niet correct, registreer opnieuw
  //       </div>');
  //       header("Refresh: 3; ./index.php?content=register");
  //   break;
  //   case "loginform-empty":
  //     echo('<div class="alert alert-danger mt-5 w-50 mx-auto" role="alert">
  //     u heeft een van beide velden niet ingevuld probeer opnieuw
  //       </div>');
  //       header("Refresh: 3; ./index.php?content=login");
  //   break;
  //   case "email-unknown":
  //     echo('<div class="alert alert-danger mt-5 w-50 mx-auto" role="alert">
  //     Het door u ingevulde e-mailadres is bij ons niet bekend
  //       </div>');
  //       header("Refresh: 3; ./index.php?content=login");
  //   break;
  //   case "not-activated":
  //     echo('<div class="alert alert-danger mt-5 w-50 mx-auto" role="alert">
  //     Uw account is not niet geactiveerd. Check uw mail <span class="badge badge-danger p-2">' . $email .'</span> voor de actievatielink
  //       </div>');
  //       header("Refresh: 3; ./index.php?content=login");
  //   break;
  //   case "no-pw-match":
  //     echo('<div class="alert alert-danger mt-5 w-50 mx-auto" role="alert">
  //     Uw ingevulde wachtwoord voor het emailadres <span class="badge badge-danger p-2">' . $email .'</span>is niet correct
  //       </div>');
  //       header("Refresh: 3; ./index.php?content=login");
  //   break;
  //   case "logout":
  //     echo('<div class="alert alert-info mt-5 w-50 mx-auto" role="alert">
  //     U bent uitgelogd, u wordt doorgestuurd naar de home page
  //       </div>');
  //       header("Refresh: 3; ./index.php?content=home");
  //   break;
  //   case "auth-error":
  //     echo('<div class="alert alert-info mt-5 w-50 mx-auto" role="alert">
  //     U bent niet ingelogd, u wordt doorgestuurd naar de home page
  //       </div>');
  //       header("Refresh: 3; ./index.php?content=home");
  //   break;
  //   case "auth-error-userrole":
  //     echo('<div class="alert alert-info mt-5 w-50 mx-auto" role="alert">
  //     U heeft geen rechten op deze pagina, u wordt doorgestuurd naar de home page
  //       </div>');
  //       header("Refresh: 3; ./index.php?content=home");
  //   break;
  //   default:
  //   header("Location: ./index.php?content=home");
  //   break;
  // }