<?php $carousel = $this->config->item('carousel'); ?>
<div id="<?php echo $carousel['id']; ?>" class="carousel slide" data-ride="carousel">
	<ul class="carousel-indicators">
		<?php for($count = 0; $count < count($carousel['data']); $count++) {
			echo '<li data-target="#<?php echo $id; ?>" data-slide-to="'.$count.'"';
			if(!$count) echo ' class="active"';
			echo '></li>';
		} ?>
	</ul>
	<div class="carousel-inner" role="listbox">
		<?php $firstSlide = true;
			foreach($carousel['data'] as $text => $link) {
			echo '<div class="item';
			if($firstSlide) {
				echo ' active';
				$firstSlide = false;
			}
			echo '">'.img($link);
			echo '<div class="carousel-caption"><h2>'.$text.'</h2></div></div>';
		} ?>
	</div>
	<a class="left carousel-control" href="#<?php echo $carousel['id']; ?>" role="button" data-slide="prev">
		<span class="glyphicon glyphicon-chevron-left"></span>
	</a>
	<a class="right carousel-control" href="#<?php echo $carousel['id']; ?>" role="button" data-slide="next">
		<span class="glyphicon glyphicon-chevron-right"></span>
	</a>
</div>