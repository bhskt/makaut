<div class="navbar-header">
	<div class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navMiddleCollapse">
		<span class="glyphicon glyphicon-menu-hamburger"></span>
	</div>
</div>
<div id="navMiddleCollapse" class="collapse navbar-collapse">
	<ul class="nav navbar-nav">
		<li>
			<a href="<?php echo site_url(); ?>">
				<span class="glyphicon glyphicon-home"></span>
			</a>
		</li>
    	<?php foreach($this->config->item('navigation')['middle'] as $groupText => $group) {
    		echo '<li>';
    		if(is_array($group)) {
    			echo '<a href="#" class="dropdown-toggle" data-toggle="dropdown"><strong>';
    			echo $groupText;
    			echo '</strong><span class="glyphicon glyphicon-option-horizontal"></span></a>';
    			echo '<ul class="dropdown-menu">';
                $firstLink = true;
    			foreach($group as $text) {
                    if($firstLink) $firstLink = false; else echo '<li role="separator" class="divider"></li>';
    				echo '<li class="text-center"><a href="'.toUrl($text).'">'.$text.'</a></li>';
    			}
    			echo '</ul>';
    		} else {
    			echo '<a href="'.$group.'">'.$groupText.'</a>';
    		}
    		echo '</li>';
    	} ?>
		</ul>
	</div>