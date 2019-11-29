<?php
		
$imgDEFAULT = './medias/folder-icon.png';

$DEFAULT='/var/www/html/'; /*Default redirection quand le script commence*/

if(!isset($_GET['d'])){
	$_GET['d']= '.';
}
$path = getcwd()."/".$_GET['d'];


if(isset($_GET['d'])){

$DEFAULT ='/var/www/html/'.$_GET['d'];
}

?>



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
	<div class="container-fluid mt-5">
		<div class="container">
			<div class="row style mb-5 ">


				<a href="index.php"><img class="mx-2 homestyle" src="./medias/home-icon.png" alt="accueil" width="50px"
						alt="50px"></a>

				<div class="text-white explorer-font d-flex justify-content-center align-items-center mx-5 ">
					<?php
						echo '<p>'.$path.'</p>';
					?>
				</div>
				
				<a href="javascript:history.go(-1)"><img class="mx-2 homestyle" src="./medias/home-icon.png" alt="accueil" width="50px"
					alt="50px"></a>
			
				<a href="javascript:history.go(+1)"><img class="mx-2 homestyle" src="./medias/home-icon.png" alt="accueil" width="50px"
					alt="50px"></a>

				

			</div>

			<div class="row">
				<ul class="data ">



					<!-- <span class="icon folder full "></span> -->
					<?php
					
						foreach (new DirectoryIterator($DEFAULT) as $fileInfo){
						if (isset($_GET['d']) ){ 
						$url=$_GET['d']."/".$fileInfo->getFilename();
						}
					
						else{
						$url=$fileInfo->getFilename();
						}
						if($fileInfo->isDir()){

							if ($fileInfo == '.' or $fileInfo == '..'){continue;}
							
						echo '<li class="folders my-3 mx-2">',"<a class='align-items-center justify-content-start' href='?d=".rawurlencode($url)."'>",'<img class="imgIcon" src="'.$imgDEFAULT.'" alt="Fichier" width="50px" height="50px"/>','<p class="wdiff">'. $fileInfo->getFilename().'</p>' , "</a><br>\n";
						
						}
						if($fileInfo->isfile()){
								
						// var_dump(pathinfo($fileInfo, PATHINFO_EXTENSION));
						$multiIMG = pathinfo($fileInfo, PATHINFO_EXTENSION);
								
						echo  '<li class="folders my-3 mx-2">','<div class="d-flex justify-content-start pad align-items-center">','<img class="imgIcon align-items-center" src="medias/'.$multiIMG.'-icon.png" alt="Fichier" width="50px" height="50px"/>','<p class="wdiff">' .$fileInfo->getFilename().'</p>','</div>'. "<br>\n";
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