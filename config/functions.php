<?php


function dateEU($input, $hour = false){
	//si la date est vide on retourne n.c.
	if(empty($input)){
		return 'n.c.';
	}else{
		//on cree un objet de temps
		$time = new DateTime($input);

		//si on souhaite avoir l'heure
		if ($hour) {
			return $time->format('d/m/Y h:i');
		}else{
			//on retourne n=un format qui nous intéresse (regardé doc php)
			return $time->format('d/m/Y');
		}
	}
}


//on cree une fonction qui redirige l'utilisateur et arrete l'execution de la page
function redirect($page){
	//redirection
	header('Location: '.$page);
	//on bloque le reste des executions
	exit();
}





