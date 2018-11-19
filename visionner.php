<?php
session_start();
?>
<?php
  if (isset($_SESSION['Email'])){ 
  	if(isset($_GET["requete"]) && $_GET["saison"]){
?>
<!DOCTYPE html>
<html lang="en" >
   <head>
     <meta charset="UTF-8">
     <title>BetterCallFlix</title>
     <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
        <link rel="stylesheet" href="css/Style2.css">
          <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

   </head>
   <body>
        <?php
          $choixs=$_GET['saison'];
          $choixr=$_GET['requete'];
          $bdd = new PDO('mysql:host=localhost;dbname=BetterCallFlix', 'root','root');
          $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

          $requete = $bdd->query('SELECT url FROM BetterCallSaul WHERE saison= "'.$choixs.'"	 AND episode= "'.$choixr.'" ');

          while($data = $requete->fetch()){ 
            echo '<div><p align="center"><iframe width="789" height="444" src='.' " '.$data['url'].' " '.'frameborder="10" allow="autoplay; encrypted-media" allowfullscreen></iframe></p>';
        }
        ?>     


    <button  style="display: block;margin:auto" id="button" class="btn btn-info" type="button" onclick="window.location.href='watch.php'">Retour Au Choix</button>

  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script  src="js/index.js"></script>
   </body>
</html>

<?php
	}else{
		echo"erreur dans la requete";
	}
?>
<?php 
//premier if  
}else{
  header("location:watch.php");;
}
?>