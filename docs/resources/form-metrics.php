	<?php
	include 'layout/header.php';
	// include 'layout/nav.php';
	 ?>

	<main>

		<section class="form">
			<h2>Daily Safety Metrics</h2>
			<form class="form-grid" method="post" name="form-metrics" id="form-metrics" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
				<p class="required">* required field</p>
				<div>
					<label for="">Employee ID <span class="required">*</span></label>
					<input name="employeeID" id="employeeID" tabindex="1" type="number" min="900" max="20000" autofocus>
				</div>
				<div>
					<label for="">Job Number <span class="required">*</span></label>
					<input name="jobNumber" id="jobNumber" tabindex="2" type="number" min="201800" max="202100">
				</div>
				<div>
					<label for="">Hours Onsite <span class="required">*</span></label>
					<input name="hoursOnsite" id="hoursOnsite" tabindex="3" type="number" min="1" max="300">
				</div>
				<div>
					<label for="">Miles Onsite <span class="required">*</span></label>
					<input name="milesOnsite" id="milesOnsite" tabindex="4" type="number" min="1" max="100">
				</div>
				<div>
					<label for="">SWA's <span class="required">*</span></label>
					<input name="stopWorkAuthority" id="stopWorkAuthority" tabindex="5" type="number" min="1" max="20">
				</div>
				<div>
					<label for="">Haz ID's <span class="required">*</span></label>
					<input name="hazID" id="hazID" tabindex="6" type="number" min="1" max="20">
				</div>
				<div>
					<label for="">BBO's <span class="required">*</span></label>
					<input name="behaviorBasedObservation" id="behaviorBasedObservation" tabindex="7" type="number" min="1" max="20">
				</div>
				<div>
					<label for="">Near Miss <span class="required">*</span></label>
					<input name="nearMiss" id="nearMiss" tabindex="8" type="number" min="1" max="20">
				</div>
				<div class="grid-100">
					<label for="">Email <span class="required">*</span></label>
					<input name="email" id="email" tabindex="9" type="text">
				</div>
				<div class="grid-100">
					<label for="">Message</label>
					<textarea name="message" id="message" tabindex="10" cols="30" rows="7"></textarea>
				</div>
				<div class="grid-100">
					<button type="submit" name="form-metrics" form="form-metrics">Send</button>
				</div>
			</form>
		</section>

	</main>

	<?php
	include 'layout/footer.php';
	 ?>
