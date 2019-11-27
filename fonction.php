<?php
$imgFOLDER = './medias/file.png';
$imgDEFAULT = './medias/folder-icon.png';
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
  
  if($fileInfo->isDir()){
  echo "<img src="$imgDEFAULT"/><a href='".rawurlencode($url)."'>". $fileInfo->getFilename() . "</a><br>\n";

  }
  if($fileInfo->isfile()){
    echo  $fileInfo->getFilename() . "<br>\n";
  }

  }



?>
