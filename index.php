<!DOCTYPE html>
<html>


<head lang="en">
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<title>Cute file browser</title>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
		integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
	</script>

	<!-- Include our stylesheet -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

	<link href="assets/css/styles.css" rel="stylesheet" />




</head>

<body>

	<div class="filemanager">

		<div class="search">
			<input type="search" placeholder="Find a file.." />
		</div>


		<div class="container-fluid">
			<div class="container">
				<div class="row">


					<ul class="data"></ul>
					<li class="folders pad-left py-5"><a href="" title="files/Archives" class=""><span
								 ><span class="name">Archives</span> <span
								class="details">3
								items</span></a></li>

					
					<li class="folders"><a href="Archives" title="files/Archives" class=""><span
								class="icon folder full"></span><span class="name">Archives</span> <span
								class="details">3
								items</span></a></li>

					<li class="folders"><a href="Documents" title="Documents"
							class=""><span class="icon folder full"></span><span class="name"></span>
								Documents</span> <span class="details">2 items</span></a></li>


					<li class="folders"><a href="Documents" title="files/Important Documents"
							class=""><span class="icon folder full"></span><span class="name">
								Documents</span> <span class="details">2 items</span></a></li>

					<li class="folders"><a href="Movies" title="files/Movies" class=""><span
								class="icon folder full"></span><span class="name">Movies</span> <span class="details">1</span></a></li>

					
					<li class="folders"><a href="Music" title="Music" class=""><span
								class="icon folder full"></span><span class="name">Music</span> <span class="details">1</span></a></li>


					<li class="folders"><a href="Trash" title="Trash"
							class=""><span class="icon folder full"></span><span class="name">
								Trash</span> <span class="details">2 items</span></a></li>


					<li class="folders"><a href="Movies" title="Movies" class=""><span
								class="icon folder full"></span><span class="name">Movies</span> <span class="details">1</span></a></li>

												

					<li class="folders"><a href="Music" title="Music" class=""><span
								class="icon folder full"></span><span class="name">Music</span> <span class="details">3</span></a></li>


					<li class="folders"><a href="Empty" title="Empty" class=""><span
								class="icon folder"></span><span class="name">Empty</span> <span
								class="details">Empty</span></a></li>



					<li class="folders"><a href="Videos" title="Videos" class=""><span
								class="icon folder full"></span><span class="name">Videos</span> <span class="details">5
								items</span></a></li>


					<li class="folders"><a href="Photos" title="Photos" class=""><span
								 class="icon folder full"></span><span class="name">Photos</span> <span class="details">5
								items</span></a></li> 

				


				</div>
			</div>
		</div>


		<div class="nothingfound">
			<div class="nofiles"></div>
			<span>No files here.</span>
		</div>

	</div>

	
	<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="assets/js/script.js"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>

</html>