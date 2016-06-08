<?php 
    
    $con = mysqli_connect('localhost', 'root', '', 'clinica_suavida') or die ('Algum erro ocorreu!');

	/* Verificando o charset atual
	printf("Initial character set: %s\n", mysqli_character_set_name($con));
	*/

	//change character set to utf8 
	if (!mysqli_set_charset($con, "utf8")) {
    	printf("Error loading character set utf8: %s\n", mysqli_error($con));
    exit();
	} else {
    	/*printf("Current character set: %s\n", */ mysqli_character_set_name($con);
	}
    
?>