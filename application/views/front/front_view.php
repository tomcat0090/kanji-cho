<?php defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php echo$title?></title>
	<link rel="stylesheet" href="<?php echo base_url()?>/assets/css/bootstrap.min.css">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/themes/smoothness/jquery-ui.css" />
	<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
	<script src="<?php echo base_url()?>/assets/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url()?>/assets/js/custom.js"></script>
</head>
<body>


	<div class="container">
		<div class="row">
			<div class="text-center col-lg-6 col-lg-offset-3">

				<h1>Kanji-cho</h1>
				<?php echo form_open()?>
					<div class="form-group">
						<?php echo form_input($search)?>
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-default" id="doSearch">Submit</button>
					</div>
					<div id="result"></div>
				<?php echo form_close()?>
			</div>
		</div><!-- /.row -->
	</div><!-- /.container -->
	<script>
		var baseUrl = '<?php echo base_url()?>';
	</script>
</body>
</html>
