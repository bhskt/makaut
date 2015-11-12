<div class="panel panel-primary">
	<?php if($heading) {
		echo '<div class="panel-heading"><strong>'.$heading.'</strong></div>';
	} ?>
	<div class="list-group">
		<?php foreach($list as $text) {
			echo '<a href="'.toUrl($text).'" class="list-group-item';
			if(preg_match('/^!/', $text)) {
				$text = preg_replace('/^!/', '', $text);
				echo ' list-group-item-success"><strong>'.$text.'</strong></a>';
			}
			else 
				echo '">'.$text.'</a>';
		} ?>
	</div>
</div>