		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
		<?php if(ENVIRONMENT === 'development') {
			echo '<script src="//cdnjs.cloudflare.com/ajax/libs/less.js/2.5.3/less.min.js"></script>';
		} ?>
		<script src="<?php echo site_url('assets/script');
		if(ENVIRONMENT === 'production') echo 'min.';
		echo '.js'; ?>"></script>
	</body>
</html>