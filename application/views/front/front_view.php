<?php defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php echo$title?></title>
	<link rel="stylesheet" href="<?php echo base_url()?>/assets/css/bootstrap.min.css">
	<?php /*<script src="<?php echo base_url()?>/assets/js/bootstrap.min.js"></script>*/?>
</head>
<body>


	<div class="container">
		<div class="row">
			<div class="text-center col-lg-6 col-lg-offset-3">

				<h1>Kanji-cho</h1>
				<form role="form-inline">
					<div class="form-group">
						<?php echo form_input($search)?>
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-default">Submit</button>
					</div>
				</form>
			</div>
		</div><!-- /.row -->
	</div><!-- /.container -->

</body>
</html>
