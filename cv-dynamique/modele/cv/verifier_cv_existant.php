<?php

	function verifier_cv_existant($email)
	{
		global $bdd;

		$nombre_cv = $bdd->prepare('SELECT count(*) FROM cv WHERE email = ?');
		$nombre_cv->execute(array($email));

		return $nombre_cv;
	}
