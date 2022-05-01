<?php $this->suspensionRedirect($view); ?>
<!DOCTYPE html>
<html lang="en" <?php $this->helpers->htmlClasses(); ?>>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="apple-mobile-web-app-status-bar-style" content="black" />

	<?php $this->helpers->seo($view); ?>
	<link rel="icon" href="public/images/favicon.png" type="image/x-icon">
	<!-- <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> -->
	<link href="<?php echo URL; ?>public/styles/style.css" rel="stylesheet">
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.css" />
	<link rel="stylesheet" href="<?php echo URL; ?>public/fancybox/source/jquery.fancybox.css" media="screen" />
	<?php $this->helpers->analytics(); ?>

	<link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700%7CMontserrat:400,700,900%7CLato:700" rel="stylesheet">
	
</head>

<body <?php $this->helpers->bodyClasses($view); ?>>
<?php $this->checkSuspensionHeader(); ?>
	<header>
		<div id="header">
			<nav>
				<a href="#" id="pull"><strong>MENU</strong></a>
				<ul>
					<li <?php $this->helpers->isActiveMenu("home"); ?>><a href="<?php echo URL ?>">HOME</a></li>
					<li <?php $this->helpers->isActiveMenu("about"); ?>><a href="<?php echo URL ?>about#content">ABOUT US</a></li>
					<li <?php $this->helpers->isActiveMenu("services"); ?>><a href="<?php echo URL ?>services#content">SERVICES</a></li>
					<li <?php $this->helpers->isActiveMenu("gallery"); ?>><a href="<?php echo URL ?>gallery#content">GALLERY</a></li>
					<li <?php $this->helpers->isActiveMenu("testimonials"); ?>><a href="<?php echo URL ?>testimonials#content">TESTIMONIALS</a></li>
					<li <?php $this->helpers->isActiveMenu("reviews"); ?>><a href="<?php echo URL ?>reviews#content">REVIEWS</a></li>
					<li <?php $this->helpers->isActiveMenu("contact"); ?>><a href="<?php echo URL ?>contact#content">CONTACT US</a></li>
					<li <?php $this->helpers->isActiveMenu("privacy-policy"); ?>><a href="<?php echo URL ?>privacy-policy#content">PRIVACY POLICY</a></li>
				</ul>
			</nav>
		</div>
	</header>

	<?php if($view == "home"):?>
		<div id="banner">
			<div class="container">
				<div class="bg-container">
					<div class="row">
						<div class="col-md-6">
							<div class="text-container mx-auto">
								<h1 class="title">HELLO WORLD</h1>
								<div class="subtitle">
									Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minus autem corporis eveniet nisi animi. Error pariatur sunt, tempore debitis veniam et eveniet reiciendis perspiciatis, facilis explicabo aliquam ipsam tenetur blanditiis at cupiditate eaque optio voluptate commodi distinctio dolores hic? Amet nam facilis placeat non ab nulla alias nostrum cum illum.
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="img-container me-auto bg-primary">
								<div class="subtitle">
									Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum adipisci perspiciatis sed aliquam eligendi labore repudiandae eius vel est ea ab nihil dolores voluptate sunt, sit cupiditate, beatae quasi neque!
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	<?php endif; ?>