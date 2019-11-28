<!DOCTYPE html>
<html lang="en">


<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">



	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
		integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
	</script>

	<!-- Include our stylesheet -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

	<link href="css/styles.css" rel="stylesheet" />

	<title>Cute file browser</title>

</head>


<body>
	<div class="container-fluid">
		<div class="container">
			<div class="row">
				<div class="filemanager">
					<div class="search">
						<input type="search" placeholder="Find a file.." />
					</div>
				</div>

				<div class="header">
					<img src="./medias/home-icon.jpg" alt="">
				</div>
			</div>
			<div class="row">



				<ul class="data">
					<?php

						$imgPHP = './medias/icon_php.png';
						$imgTXT = './medias/icon_text.png';
						$imgFOLDER = './medias/file-icon.png';
						$imgDEFAULT = './medias/folder-icon.png';
						$imgPHP = './medias/icon_php.png';
						$imgTXT = './medias/icon_text.png';
						$DEFAULT='/var/www/html/'; /*Default redirection quand le script commence*/
						
						if(isset($_GET['d'])){
						  
						  $DEFAULT ='/var/www/html/'.$_GET['d'];
						  }
						
						  foreach (new DirectoryIterator($DEFAULT) as $fileInfo){
							if (isset($_GET['d']) ){ 
							$url=$_GET['d']."/".$fileInfo->getFilename();
						  }
						
						  else{
							$url=$fileInfo->getFilename();
						  }
						  
						
						
						
						
						?>



					
						<!-- <span class="icon folder full "></span> -->
						<?php
							
							if($fileInfo->isDir()){
								// if ($fileInfo == '.' or $fileInfo == '..'){echo }

						  	echo '<li class="folders ">',"<a href='?d=".rawurlencode($url)."'>",'<img src="'.$imgDEFAULT.'" alt="Fichier" width="50px" height="50px"/>'. $fileInfo->getFilename() . "</a><br>\n";
						
						  	}
						  	if($fileInfo->isfile()){
							var_dump(pathinfo($fileInfo, PATHINFO_EXTENSION));
							$multiIMG = pathinfo($fileInfo, PATHINFO_EXTENSION);
							echo  '<li class="folders ">','<img src="medias/'.$multiIMG.'-icon.png" alt="Fichier" width="50px" height="50px"/>'. $fileInfo->getFilename() . "<br>\n";
							}
						  	}
							
						  			
						?>



				</ul>


			</div>
		</div>
	</div>




	</div>
	

	<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	
</body>

</html>