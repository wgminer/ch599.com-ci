	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="<?php echo base_url(); ?>assets/javascripts/vendor/jquery.js"><\/script>')</script>
	
	<script src="http://www.youtube.com/iframe_api"></script>
	<script src="http://connect.soundcloud.com/sdk.js"></script>
	<script src="https://w.soundcloud.com/player/api.js"></script>

	<?php if (isset($pagination)) : ?>
		<script>
			var ajaxUrl = '<?php echo base_url(); ?>index.php/<?php echo $pagination; ?>';
		</script>
  	<?php endif; ?>

	<?php echo script_tag(base_url().'assets/js/vendor/plugins.js'); ?>
  	<?php echo script_tag(base_url().'assets/js/script.js'); ?>

  	<script type="text/javascript">
		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-38870469-1']);
		_gaq.push(['_trackPageview']);

		(function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();
	</script>
	
</body>
</html>