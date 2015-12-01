<!-- <div class="center-line"></div> -->
<div id="wrap">
	
	<div id="plane"><a href="/creative"><img src="/<?php echo path_to_theme(); ?>/images/Throne-Logos_blue.svg" alt=""></a></div>
	
	<div id="header">
		<div class="close-btn"><a href="#" class="icon-cross"></a></div>
		<div class="title">
			<a href="/creative">Throne <span>Creative</span></a>
		</div>
		<div id="main-nav">
			<?php echo render($page['nav_main']); ?>
		</div>
		<div class="social-icons">
			<a href="http://twitter.com/thronecreative" class="icon-twitter" target="_blank"></a>
			<a href="http://instagram.com/thronecreative" class="icon-instagram" target="_blank"></a>
			<a href="http://facebook.com/thronecreative" class="icon-facebook" target="_blank"></a>
			<a href="https://www.pinterest.com/thronecreative" class="icon-pinterest" target="_blank"></a>
		</div>
		
	</div>
<?php if (arg(0) == 'creative'  && count(arg()) == 1 ) : ?>
	<div id="creative-home">
	  <div class="inner">
	  <div class="title">
	    Throne <span>Creative</span>
	  </div>

	  <h3>Lets build your kingdom.</h3>
	  <div class="arrows">
		<div class="icon-arrow-down2"></div>
	</div>
	</div>
	</div>
<?php endif; ?>	
	
	<div id="open-btn"><a href="#" class="icon-menu"></a></div> 
	
	<div id="main">
		<div class="body-top"><img src="/<?php echo path_to_theme(); ?>/images/body-top.svg" alt=""></div>
		<div class="inner">
			<?php if ($messages): ?>
	        <div class="messages-holder">
	          <?php echo render($messages); ?>
	        </div>
	      <?php endif; ?>
			
			<?php if(isset($title)): ?>
				<h1 id="page-title"><?php echo $title; ?></h1>
			<?php endif; ?>
		
	      <?php if ($tabs): ?>
	        <div class="tabs">
	          <?php echo render($tabs); ?>
	        </div>
	      <?php endif; ?>

	      <div id="content">
				<?php echo render($page['content']); ?>

				<div id="cta" class="section bg-main">
					<div class="translate first" data-index="1">
						<h1>Like what you see?</h1>
						<div class="arrows">
							<div class="icon-arrow-down2"></div>
						</div>
						<div class="btn"><a href="/creative/contact">Contact us today.</a></div>
						<h2><a href="" class="trigger" data-target="2">( Translate )</a></h2>
					</div>
				
					<div class="translate" data-index="2">
						<h1>Don't act like you're not impressed.</h1>
						<div class="arrows">
							<div class="icon-arrow-down2"></div>
						</div>
						<div class="btn"><a href="/creative/contact">Let's do this!</a></div>
						<h2><a href="" class="trigger" data-target="1">( Un-translate )</a></h2>
					</div>
				</div>
			</div>
		</div>
	</div>



	<div id="footer" class="bg-dk">
		<div class="inner">
			<div id="footer-left">
				<div id="footer-company" class="section">
					<a href="/creative"><img src="/<?php echo path_to_theme(); ?>/images/Throne-Logos_blue.svg" alt=""></a>
				</div>

				<div id="footer-sitemap" class="section">
					<h2>Sitemap</h2>
					<ul>
						<li><a href="/creative">Home</a></li>
						<li><a href="/creative/projects">Projects</a></li>
						<li><a href="/creative/agency">The Agency</a></li>
						<li><a href="/creative/contact">Connect</a></li>
					</ul>
				</div>

				<div id="footer-info" class="section">
					<h2>Get in touch</h2>
					
					<p>(323) 388-7347</p>
					<a href="mailto:info@thronecreative.com">hello@thronereative.com</a>
					<div class="social-icons">
						<a href="http://twitter.com/thronecreative" class="icon-twitter" target="_blank"></a>
						<a href="http://instagram.com/thronecreative" class="icon-instagram" target="_blank"></a>
						<a href="http://facebook.com/thronecreative" class="icon-facebook" target="_blank"></a>
						<a href="https://www.pinterest.com/thronecreative" class="icon-pinterest" target="_blank"></a>
					</div>
				</div>
			</div>
			
			<div id="footer-right">
				<div id="footer-articles" class="section">
					
				</div>
			</div>

			
		</div>
		<div class="copy">&copy; <?php echo date('Y'); ?> Throne Creative. Don't steal. It's not nice.</div>
	</div>

</div>


<div id="connect">
	<div class="bg"></div>
	<div class="inner">
		<div class="info">
			<h1>Connect</h1>
			<div class="arrows">
				<div class="icon-arrow-down2"></div>
			</div>
			<div class="email"><a href="mailto:hello@thronecreative.com">hello@thronereative.com</a></div>
			<div class="phone">(323) 388-7348</div>
			<div class="social-icons">
				<a href="http://twitter.com/thronecreative" class="icon-twitter" target="_blank"></a>
				<a href="http://instagram.com/thronecreative" class="icon-instagram" target="_blank"></a>
				<a href="http://facebook.com/thronecreative" class="icon-facebook" target="_blank"></a>
				<a href="https://www.pinterest.com/thronecreative" class="icon-pinterest" target="_blank"></a>
			</div>

			<a href="#" class="icon-cross" ></a>
		</div>
	</div>
</div>



