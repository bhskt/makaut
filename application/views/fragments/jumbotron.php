<div class ="jumbotron">
	<div class="container-fluid">
		<div class="row">
			<div id="logo" class="col-sm-2">
				<?php echo img($this->config->item('logo')); ?>
			</div>
			<div class="col-sm-10">
				<?php $headings = $this->config->item('headings');
				echo heading($headings['large'][0],2);
				if($headings['small']) echo heading($headings['small'], 4);
				echo heading($headings['large'][1],3); ?>	
			</div>
		</div>
	</div>
</div>