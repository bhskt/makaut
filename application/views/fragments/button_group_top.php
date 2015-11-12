<div class="btn-group btn-group-sm">
	<?php $navigationTop = $this->config->item('navigation')['top'];
	foreach($navigationTop['external'] as $text => $link) {
		echo '<a href="'.$link.'" class="btn btn-info" target="_blank">';
		echo '<span class="glyphicon glyphicon-new-window"></span>'.$text.'</a>';
	} ?>
</div>
<div class="btn-group btn-group-sm">
	<a href="<?php echo $navigationTop['webMail']; ?>" class="btn btn-primary" target="_blank">
		<span class="glyphicon glyphicon-envelope"></span>WebMail
	</a>
</div>
<div class="btn-group btn-group-sm">
	<a href="#" class="btn btn-default" target="_blank">
		<span class="glyphicon glyphicon-cog"></span>Login
	</a>
</div>