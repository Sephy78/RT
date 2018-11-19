<?php 


if(isset($_POST['connect1'])) {
	 $mailconnect1 = htmlspecialchars($_POST['mail2']);
	 $mdpconnect1 = sha1($_POST['mdp2']);
	 if(!empty($mailconnect1) AND !empty($mdpconnect1)) {
	    $bdd = new PDO('mysql:host=localhost;dbname=BetterCallFlix', 'root', 'root');
	    $requser = $bdd->prepare("SELECT * FROM Utilisateurs WHERE Email = ? AND Password= ? ");
	    $requser->execute(array($mailconnect1, $mdpconnect1));
	    $userexist2 = $requser->rowCount();
	    if($userexist2 == 1) {
	       $userinfo = $requser->fetch();
	       session_start();
	       $_SESSION['Email'] = $userinfo['Email'];
	       header("location: watch.php" .$_SESSION['mail']);   
	   	}
	}

}
?>