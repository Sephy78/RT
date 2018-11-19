
<?php
$bdd = new PDO('mysql:host=localhost;dbname=BetterCallFlix', 'root','root');


if (isset($_POST['valider1'])){
	$mailaverif = htmlspecialchars($_POST['mail']);
	if(sha1($_POST['mdp'])==sha1($_POST['mdpaverif'])){
		if(preg_match('/[@]/', $mailaverif)){
			if(preg_match('/[.]/', $mailaverif)){
				$mailconnect1 = htmlspecialchars($_POST['mail']);
			    $requsere = $bdd->prepare("SELECT * FROM Utilisateurs WHERE Email = ?  ");
			    $requsere->execute(array($mailconnect1));
			    $userexiste = $requsere->rowCount();
			    if($userexiste == 1) {
					header("location:index.php?errors=email_already_exist");
				}else{
					$mdp=sha1($_POST['mdp']);
					$mail=htmlspecialchars($_POST['mail']);
					$register=$bdd->prepare("INSERT INTO Utilisateurs( Email , Password ) VALUES('$mail', '$mdp')");
					$register->execute(array($mail,$mdp));
					header("location:index.php?error=connected");
				}
				}else{
				header("location:index.php?error4=mail_f");
				}
			}else{
				header("location:index.php?error4=mail_f");
				}
		}else{
			header("location:index.php?error2=No_Match");
		}	
	}



?>

