<?php
session_start();
?>
<?php
  if (isset($_SESSION['Email'])){ 
    $bdd = new PDO('mysql:host=localhost;dbname=BetterCallFlix', 'root','root');
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
    <div>
      <p style="text-align:center;color:white;font-size:50px;top-margin:10%">Listes des saisons de Better Call Saul</p>
      <ul>
      <table class="table table-dark" style="width:450px;overflow:auto;text-align:center;margin-left:200px;margin-right:auto;float:left;margin-top:8%" >
        <thead>
          <tr>
            <th scope="col">Saison 1:</th>
          </tr>
        </thead>
        <tbody>
          <tr>
        <?php
          $saisons = array();
          $bdd = new PDO('mysql:host=localhost;dbname=BetterCallFlix', 'root','root');
          $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          $requete = $bdd->query('SELECT episode FROM BetterCallSaul WHERE saison=1');

          while($data = $requete->fetch()){ 
            echo '<tr> <td>' . '<a title="'.'Episode: '. $data['episode']. ' " ' .'href= "visionner.php?requete='.$data['episode'].'&saison='.'1">'.'Episode: '. $data['episode'].'</a>'.'</td> </tr>';
          }
        ?>                     
          </tr>

        </tbody>
      </table>

      <table class="table table-dark" id="tableau2" style="width:450px;overflow:auto;text-align:center;margin-left:auto;margin-right:200px;float:right;margin-top:8%;">
        <thead>
          <tr>
            <th scope="col">Saison 2: </th>
          </tr>
        </thead>
        <tbody>

          <tr>
        <?php
          $saisons = array();
          $bdd = new PDO('mysql:host=localhost;dbname=BetterCallFlix', 'root','root');
          $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          $requete = $bdd->query('SELECT episode FROM BetterCallSaul WHERE saison=2');

          while($data = $requete->fetch()){
            echo '<tr> <td>' . '<a title="'.'Episode: '. $data['episode']. ' " ' .'href= "visionner.php?requete='.$data['episode'].'&saison='.'2">'.'Episode: '. $data['episode'].'</a>'.'</td> </tr>';
          }
        ?>             
          </tr>
        </tbody>
      </table>      
    <button  style="display: block;margin : auto;" id="button" class="btn btn-inverse" type="button" onclick="window.location.href='deco.php'">Se Deconnecter</button>

    </div> <!-- /form -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script  src="js/index.js"></script>
   </body>
</html>
<?php   
}else{
  header("location:index.php");
}

?>