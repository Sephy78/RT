<?php
$bdd = new PDO('mysql:host=localhost;dbname=BetterCallFlix', 'root','root');



$requsr = $bdd->prepare("SELECT * FROM BetterCallSaul WHERE saison = 1  and episode = $i");



?>