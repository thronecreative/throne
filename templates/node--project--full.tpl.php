<?php if(isset($bg_image)): ?>
<div class="bg">
	<div class="bg-image"></div>
</div>
<?php endif; ?>

<div class="project full">
	
	<div class="header">
		<h1><?php print $title; ?></h1>
		<div class="services"><?php print $services; ?></div>
		<div class="website"><?php print $website; ?></div>

	</div>
	<div class="body"><?php print $body; ?></div>

	<div class="share-post">
		<h2>Share this project</h2>
		<h3>{ you know you want to }</h3>
	</div>
	
	<?php print $service_links; ?>
</div>