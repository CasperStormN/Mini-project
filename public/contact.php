<?php require_once('header.php'); ?>

<div id="contact">
	<div class="container">
		<h1>Contact us</h1>

		<form action="">
			<div>
				<label for="">Name:</label>
				<input type="text" name="name" placeholder="YOUR NAME...">
			</div>
			<div>
				<label for="">Email:</label>
				<input type="email" name="email" placeholder="YOUR E-MAIL...">
			</div>
			<div class="message">
				<label for="">Message:</label>
				<textarea name="message" id="" cols="30" rows="10" placeholder="YOUR TEXT..."></textarea>
			</div>
			<input type="submit" value="SEND MESSAGE">
		</form>
	</div>
</div>


<?php require_once('footer.php'); ?>