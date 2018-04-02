<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Title Page</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="../../assets/css/bootstrap.min.css">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<nav class="navbar-inverse navbar-default" role="navigation">
			<div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="home"><img class="img-responsive" alt="Coding" src="../../assets/img/sklh.jpeg" width="40" height="40" style="margin-top: -10px;"></a>
				</div>
		
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-ex1-collapse">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="../../home">Home</a></li>
						<li><a href="../../home">About</a></li>
						<li><a href="../../blog">Blog</a></li>
					</ul>
				</div><!-- /.navbar-collapse -->
			</div>
		</nav>

		<div class="container">
	    	<div class="jumbotron" style="background-color:#CCF;">
	        	<div class="page-header" style="color:#066;</h3>">
	            	<h1>Blog</h1>
	            </div>
	            <p>detail blog...</p>
	         </div>
	    </div>

	    <?php foreach ($detail as $key): ?>
	    <div class="container">
	    	<table>
	    		<tr class="text-center">
	    			<td>
	    				<h3><b><?php echo $key->judul; ?></b><h3>
	    				</td>
	    		</tr>
	    		<tr>
	    			<td class="text-center">
	    				<img src="../../img/<?php echo $key->image;?>" alt="Image" width="500" height="400">
	    				<br></br>
	    				<br></br>
	    				<br></br>
	    				<?php echo $key->tanggal; ?>
	    				<br></br>
	    				<br></br>
	    				<br></br>

	    			</td>
	    		</tr>
	    		<tr>
	    			<td class="text-justify">
	    				<?php echo $key->content; ?>
	    			</td>
	    		</tr>
	    	</table>
	    </div>
	    <?php endforeach ?>
	</body>
</html>