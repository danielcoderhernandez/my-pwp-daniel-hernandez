<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
			integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->

	<script src="https://code.jquery.com/jquery-3.4.1.min.js"
			  integrity="sha384-vk5WoKIaW/vJyUAd9n/wmopsmNhiy+L2Z+SBxGYnUkunIxVxAv/UtMOhba/xskxh"
			  crossorigin="anonymous"></script>


	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
			  integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
			  crossorigin="anonymous"></script>

	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
			  integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
			  crossorigin="anonymous"></script>

	<!-- jQuery Form, Additional Methods, Validate -->



	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/additional-methods.min.js"></script>

	<!-- Your JavaScript Form Validator -->
	<script src="js/form-validate.js"></script>

	<!-- Google reCAPTCHA -->
	<script src='https://www.google.com/recaptcha/api.js'></script>

	<title>Welcome</title>
</head>

<body>


<section>

	<nav class="navbar navbar-expand-md navbar-light" style="background-color: navajowhite">
		<a class="navbar-brand mx-auto href"> Daniel Hernandez </a>
		<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
				  data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="true" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="navbar-collapse collapse" id="navbarToggler">
			<ul class="navbar-nav">...</ul>
				<li class="nav-item">...</li>
				<li class="nav-item">...</li>
				<li class="nav-item">...</li>
		</div>
	</nav>

	<div class="collapse navbar-collapse" id="navbarToggler">
		<ul class="navbar-nav mr-auto mt-2 mt-md-0">
			<li class="nav-item active">
				<a class="nav-link" href="bootstrap-navbar.php"> About <span class="sr-only">(current)</span></a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="bootstrap-navbar.php"> Portfolio</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="bootstrap-navbar.php"> Contact </a>
			</li>
		</ul>
	</div>

</section>

<section>

	<div class="jumbotron container-fluid my-1">
		<div class="row">
			<div class="col-3"> Name, menu icons</div>
			<div class="col-9">Image</div>
		</div>
	</div>

	<div class="jumbotron container-fluid my-1">
		<div class="row">
			<div class="col-3">Name, menu icons</div>
			<div class="col-9">Text, Paragraphs</div>
		</div>
	</div>

	<div class="jumbotron container-fluid my-1">
		<div class="row">
			<div class="col-3"> Name, menu icons</div>
			<div class="col-9"> Text,Image</div>
		</div>
	</div>





	<!--
Begin Sample Contact Form

Create your own contact form.
Do not copy and paste this one.
-->
	<form id="form" action="../php/" method="post">
		<div class="form-group">
			<label for="name">Name <span class="text-danger">*</span></label>
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text"></span>
					<i class="fa fa-user" aria-hidden="true"></i>
				</div>
				<input type="text" class="form-control" id="contactDemoName" name="name" placeholder="Name">
			</div>
		</div>
		<div class="form-group">
			<label for="email">Email <span class="text-danger">*</span></label>
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text"></span>
					<i class="fa fa-envelope" aria-hidden="true"></i>
				</div>
				<input type="email" class="form-control" id="contactDemoEmail" name="email" placeholder="Email">
			</div>
		</div>
		<div class="form-group">
			<label for="subject">Subject</label>
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text"></span>
					<i class="fa fa-pencil" aria-hidden="true"></i>
				</div>
				<input type="text" class="form-control" id="contactDemoSubject" name="subject" placeholder="Subject">
			</div>
		</div>
		<div class="form-group">
			<label for="message">Message <span class="text-danger">*</span></label>
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text"></span>
					<i class="fa fa-comment" aria-hidden="true"></i>
				</div>
				<textarea class="form-control" rows="5" id="contactDemoMessage" name="message" placeholder="I <3 CopyPasta :D~ (2000 characters max)"></textarea>
			</div>
		</div>

		<!-- reCAPTCHA -->
		<div class="g-recaptcha" data-sitekey="6LerKsIUAAAAABhYOrCPFviJlEas5Q_fmhUrmiXh"></div>

		<button class="btn btn-success" type="submit"><i class="fa fa-paper-plane"></i> Send</button>
		<button class="btn btn-warning" type="reset"><i class="fa fa-ban"></i> Reset</button>
	</form>

	<!--empty area for form error/success output-->
	<div class="row">
		<div class="col-xs-12">
			<div id="output-area"></div>
		</div>
	</div>



</section>

</body>

