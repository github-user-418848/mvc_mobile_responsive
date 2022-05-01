<div id="content">

	<div id="welcome">
		<div class="container">
			<div class="bg-container">

			</div>
		</div>
	</div>

	<div id="services">
		<div class="container">
			<div class="bg-container">
				
			</div>
		</div>
	</div>

	<div id="gallery">
		<div class="container">
			<div class="bg-container">
				
			</div>
		</div>
	</div>

	<div id="testimonials">
		<div class="container">
			<div class="bg-container">
				
			</div>
		</div>
	</div>

	<div id="contact">
		<div class="container">
			<div class="bg-container">
				<form action="sendContactForm" method="post" class="sends-email ctc-form">
					<div class="d-flex cg-1 flex-md-row flex-column">
						<input type="text" name="name" placeholder="Name">
						<input type="text" name="email" placeholder="Email">
						<input type="text" name="phone" placeholder="Phone">
					</div>
					<textarea name="message" cols="30" rows="10" placeholder="Message"></textarea>
					<div class="row align-items-center">
						<div class="col-md-6">
							<label for="g-recaptcha-response"><span class="ctc-hide">Recaptcha</span></label>
							<div class="g-recaptcha"></div>
						</div>
						<div class="col-md-6 text-left">
							<label>
								<input type="checkbox" name="consent" class="consentBox">I hereby consent to having this website store my submitted information so that they can respond to my inquiry.
							</label><br>
							<?php if( $this->siteInfo['policy_link'] ): ?>
							<label>
								<input type="checkbox" name="termsConditions" class="termsBox"/> I hereby confirm that I have read and understood this website's <a href="<?php $this->info("policy_link"); ?>" target="_blank">Privacy Policy.</a>
							</label>
							<?php endif ?><br>
						</div>
					</div>
					<input type="submit" class="ctcBtn btn btn-primary" value="SUBMIT FORM" disabled>
				</form>
			</div>
		</div>
	</div>

</div>
