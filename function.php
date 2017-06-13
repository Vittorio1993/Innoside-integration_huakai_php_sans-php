<?php
		
			//Connexion à la BD.
			
			function connectBD($login,$pwd)
			{
				$serveur='lmag6s0zwmcswp5w.cbetxkdyhwsb.us-east-1.rds.amazonaws.com';
				$nom_bd='djbebb23w0dubxak';
				$con=mysqli_connect($serveur,$login,$pwd);

				if(!$con)
				{
					die('Could not connect: ' . mysql_error());
				}
				else
				{
					$db_selected=mysqli_select_db($con,$nom_bd);
					
					if ($db_selected)
					{
						return $con;
					}
					else
					{
						die ('Can\'t use : '.$nom_bd. mysql_error());
					}	
				}
			}
?>