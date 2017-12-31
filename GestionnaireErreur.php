<?php
	
	function gest_err_vue($fichier )
	{
		if (! file_exists ($fichier))
		{
			echo ('la vue demandée est introuvable');
		}
		
		else 
		{
			require $fichier ;
		}
	}
	
	set_error_handler('gest_err_vue' , E_All);


?>