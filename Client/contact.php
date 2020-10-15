<?php
	
	include 'include/header.php';

?>
<div class="container-fluid">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3819.2941411368865!2d96.15892571439433!3d16.81175782357681!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c1ecae510d548f%3A0x20f37492849f61c3!2sYangon!5e0!3m2!1sen!2smm!4v1602157120910!5m2!1sen!2smm" width="100%" height="480" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</div>

<!-- Material form login -->
<div class="container mt-4 rounded-pill">
	<div class="card">

		<h5 class="card-header bg-dark white-text text-center py-4">
			<strong>Send Us A Message</strong>
		</h5>

		<!--Card content-->
		<div class="card-body px-lg-5 pt-0">

			<!-- Form -->
			<form class="text-center" style="color: #757575;" action="#!">

				<!-- Email -->
				<div class="md-form">
					<input type="email" id="materialLoginFormEmail" class="form-control">
					<label for="materialLoginFormEmail">E-mail</label>
				</div>

				<!-- Password -->
				<div class="md-form">
					<input type="password" id="materialLoginFormPassword" class="form-control">
					<label for="materialLoginFormPassword">Title</label>
				</div>

				<div class="md-form">
					<textarea id="form7" class="md-textarea form-control" rows="3"></textarea>
					<label for="form7">Message</label>
				</div>

				<!-- Sign in button -->
				<button class="btn btn-outline-dark btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit">Send a Message</button>

			</form>
			<!-- Form -->

		</div>

	</div>
	<!-- Material form login -->
</div>

<?php
	
	include 'include/footer.php';

?>
</body>
</html>