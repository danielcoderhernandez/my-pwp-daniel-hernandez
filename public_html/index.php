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


<section >
	<div class="jumbotron container-fluid bg-info my-1">

			<div class="row navbar navbar-expand-lg navbar-light">

					<div class="col-md-3.5">

					</div>
					<div class="col-md-7.5">
						<h2>
							 Daniel Hernandez
						</h2>
					</div>
					<div class="col-md-1 justify-end">
						<span class="d-inline navbar-toggler-icon"></span>
					</div>

			</div>

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

	<div class="jumbotron container-fluid my-1">
		<div class="row">
		<div class="col-3">
			Icons
		</div>
		<div class="col-9">
		<form class="px-4 py-3">
			<div class="form-group">
				<label for="exampleDropdownFormEmail1">Email address</label>
				<input type="email" class="form-control" id="exampleDropdownFormEmail1" placeholder="email@example.com">
			</div>
		</div>
		</div>




	</div>



	<!--
Begin Sample Contact Form

Create your own contact form.
Do not copy and paste this one.
-->
	<form id="pwp-form" action="../php/" method="post">
		<div class="form-group">
			<label for="contactDemoName">Name <span class="text-danger">*</span></label>
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text"></span>
					<i class="fa fa-user" aria-hidden="true"></i>
				</div>
				<input type="text" class="form-control" id="contactDemoName" name="contactDemoName" placeholder="Name">
			</div>
		</div>
		<div class="form-group">
			<label for="contactDemoEmail">Email <span class="text-danger">*</span></label>
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text"></span>
					<i class="fa fa-envelope" aria-hidden="true"></i>
				</div>
				<input type="email" class="form-control" id="contactDemoEmail" name="contactDemoEmail" placeholder="Email">
			</div>
		</div>
		<div class="form-group">
			<label for="contactDemoSubject">Subject</label>
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text"></span>
					<i class="fa fa-pencil" aria-hidden="true"></i>
				</div>
				<input type="text" class="form-control" id="contactDemoSubject" name="contactDemoSubject" placeholder="Subject">
			</div>
		</div>
		<div class="form-group">
			<label for="contactDemoMessage">Message <span class="text-danger">*</span></label>
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text"></span>
					<i class="fa fa-comment" aria-hidden="true"></i>
				</div>
				<textarea class="form-control" rows="5" id="contactDemoMessage" name="contactDemoMessage" placeholder="I <3 CopyPasta :D~ (2000 characters max)"></textarea>
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

