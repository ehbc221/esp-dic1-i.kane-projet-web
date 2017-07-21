<?php

include_once('modele/cv/verifier_cv_existant.php');
global $nombre_cv;

	function ajouter() {
		$nombre_cv = verifier_cv_existant('ehbc221@gmail.com');

		include_once('vue/cv/ajouter_cv.php');
	}
