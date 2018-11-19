<?php
session_start();
?>
<?php
  if (isset($_SESSION['Email'])){ 
      header("location:watch.php");
      }else{


?>
<!DOCTYPE html>
<html lang="en" >

  <head>
    <meta charset="UTF-8">
    <title>BetterCallFlix</title>
    <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
        <link rel="stylesheet" href="css/style.css">

    
  </head>

  <body>

    <div class="form">
        
        <ul class="tab-group">
          <li class="tab active"><a href="#signup">Inscription</a></li>
          <li class="tab"><a href="#login">Se Connecter</a></li>
        </ul>
        
        <div class="tab-content">
          <div id="signup">   
            <h1>Créer Un Compte</h1>

            <!--Créer un compte-->
            
            <form action="inscription.php" method="post">

              <!--Enregistrer l'email-->
            <div class="field-wrap">
              <label>
                Adresse Email<span class="req"></span>
              </label>
              <input type="email" name="mail" required autocomplete="off"/>
            </div>

            <!--Enregistrer un Mot de Passe-->
            <div class="field-wrap">
              <label>
                Mot De Passe<span class="req"></span>
              </label>
              <input type="password" name="mdp" required autocomplete="off"/>
            </div>

             <div class="field-wrap">
              <label>
                Répétez le Mot De Passe<span class="req"></span>
              </label>
              <input type="password" name="mdpaverif" required autocomplete="off"/>
            </div>   

            <?php
            if(isset($_GET['error'])){
              echo '<font SIZE="7" color=green>Compte enregistré !</font>';
            ?>
            <!-- <form method="post"> <p align="center"> <input type="button" name="B1" value="Compte Enregistré" onClick="window.close()"></p> </form>  -->
            <?php
            //header("url=index.php");
            }
            ?>

            <?php
            if(isset($_GET['errors'])){
              echo '<font SIZE="7" color=red>Email Déjà enregistré</font>';
            ?>
            <!-- <form method="post"> <p align="center"> <input type="button" name="B1" value="Email Déja Utilisé" onClick="window.close()"></p> </form>  -->
            <?php
             //header("url=index.php");
            }
            ?>

            <?php
            if(isset($_GET['error2'])){
              echo '<font SIZE="7" color=red>Email Déjà enregistré</font>';
            ?>
            <!-- <form method="post"> <p align="center"> <input type="button" name="B1" value="Veuillez saisir les meme mot de passe" onClick="window.close()"></p> </form>  -->
            <?php
            // header("url=index.php");
            }
            ?>  

            <?php
            if(isset($_GET['error4'])){
              echo '<font SIZE="7" color=red>Email Invalide</font>';
            ?>
            <!-- <form method="post"> <p align="center"> <input type="button" name="B1" value="Email Déja Utilisé" onClick="window.close()"></p> </form>  -->
            <?php
             //header("url=index.php");
            }
            ?>

            <!--Bouton qui transmet les infos de création de session aux autres pages-->
            <button type="submit" name="valider1" class="button button-block"/>S'enregistrer</button>
            
            </form>

          </div>     


          
          <div id="login">   
            <h1>Bienvenue</h1>
            
            <form action="login.php" method="post">

              <!--Champ de l'Email-->
              <div class="field-wrap">
              <label>
                Adresse Email<span class="req"></span>
              </label>
              <input type="email" name="mail2" required autocomplete="off"/>
            </div>

            <!--Champ du Mot de pass-->
            <div class="field-wrap">
              <label>
                Mot De Passe<span class="req"></span>
              </label>
              <input type="password" name="mdp2" required autocomplete="off"/>
            </div>

            <!--Bouton qui transmet le mot de passe et l'email set-->
            <button class="button button-block"name="connect1"/>Se Connecter</button>


            </form>

          </div>
          
        </div><!-- tab-content -->
        
  </div> <!-- /form -->
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
      <script  src="js/index.js"></script>
  </body>
</html>

<?php
}
?>