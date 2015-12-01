<?php if(isset($bg_image)): ?>
	<div class="bg">
		<div class="bg-image"></div>

		<?php if(isset($bg_body)): ?>
			<div class="bg-body">
				<?php print $bg_body; ?>
			</div>
		<?php endif; ?>

	</div>
<?php endif; ?>

<div class="page full">

	<div class="body"><?php print $body; ?></div>

	
	
</div>
