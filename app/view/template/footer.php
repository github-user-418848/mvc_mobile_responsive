<footer>
	<div id="footer">
		<div class="container">
			<div class="bg-container bg-primary">
				<div class="row text-center flex-md-row flex-column">
					<div class="col-md-4">
						<small>Phone</small>
						<a href="tel:<?php $this->info("phone"); ?>"><?php $this->info("phone"); ?></a>
						<a href="tel:<?php $this->info("phone2"); ?>"><?php $this->info("phone2"); ?></a>
					</div>
					<div class="col-md-4">
						<small>Email</small>
						<a href="mailto:<?php $this->info("email"); ?>"><?php $this->info("email"); ?></a>
					</div>
					<div class="col-md-4">
						<small>Location</small>
						<span><?php $this->info("address"); ?></span>
					</div>
				</div>

				<!-- <div class="d-flex justify-content-space-between align-items-center">
					<div class="col-md-4">
						© <?php echo date("Y") . ' '; $this->info("company_name"); ?> All Rights Reserved. 
						<?php if( $this->siteInfo['policy_link'] ): ?>
							<a href="<?php $this->info("policy_link"); ?>">Privacy Policy</a>. 
						<?php endif ?>
					</div>
					<div class="col-md-4 d-flex align-items-center text-right">
						<img class="lazy loaded img-fluid d-inline" src="public/images/hd-logo.png" alt="Footer Logo">
						<a href="http://technodreamoutsourcing.com/"> Web Design</a> Done by 
						<a href="http://technodreamoutsourcing.com/"> TechnoDream LLC</a>
					</div>
				</div> -->
			</div>
		</div>
	</div>
</footer>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="<?php echo URL; ?>public/scripts/sendform.js" data-view="<?php echo $view; ?>" id="sendform"></script>
<!-- <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>  -->
<script src="<?php echo URL; ?>public/scripts/responsive-menu.js"></script>
<script src="https://unpkg.com/sweetalert2@7.20.10/dist/sweetalert2.all.js"></script>

<?php if( $this->siteInfo['cookie'] ): ?>
	<script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.js"></script>
	<script src="<?php echo URL; ?>public/scripts/cookie-script.js"></script>
<?php endif ?>

<?php if(in_array($view,["home","contact"])): ?>
	<textarea id="g-recaptcha-response" class="destroy-on-load"></textarea>
	<script src='//www.google.com/recaptcha/api.js?onload=captchaCallBack&render=explicit' async defer></script>
	<script>
		var captchaCallBack = function() {
			$('.g-recaptcha').each(function(index, el) {
				var recaptcha = grecaptcha.render(el, {'sitekey' : '<?php $this->info("site_key");?>'});
				$( '.destroy-on-load' ).remove();
			})
		};


		$('.consentBox').click(function () {
		    if ($(this).is(':checked')) {
		    	if($('.termsBox').length){
		    		if($('.termsBox').is(':checked')){
		        		$('.ctcBtn').removeAttr('disabled');
		        	}
		    	}else{
		        	$('.ctcBtn').removeAttr('disabled');
		    	}
		    } else {
		        $('.ctcBtn').attr('disabled', true);
		    }
		});

		$('.termsBox').click(function () {
		    if ($(this).is(':checked')) {
	    		if($('.consentBox').is(':checked')){
	        		$('.ctcBtn').removeAttr('disabled');
	        	}
		    } else {
		        $('.ctcBtn').attr('disabled', true);
		    }
		});

	</script>

<?php endif; ?>


<?php if ($view == "gallery"): ?>
	<script src="<?php echo URL; ?>public/fancybox/source/jquery.fancybox.js?v=2.1.5"></script>
	<script src="<?php echo URL; ?>public/scripts/jquery.pajinate.js"></script>
	<script>
		$('#gall1').pajinate({ num_page_links_to_display : 3, items_per_page : 10 });
		$('.fancy').fancybox({
			helpers: {
				title : {
					type : 'over'
				}
			}
		});
	</script>
<?php endif; ?>

<a class="cta" href="tel:<?php $this->info("phone") ;?>"><span style="display: block; width: 1px; height: 1px; overflow: hidden;">Call To Action Button</span></a>

<?php $this->checkSuspensionFooter(); ?>
</body>
</html>


