  <?php include('include/head.php'); ?>

  <?php include('include/nav.php'); ?>
<div class="container">
	<div class="row">
		<div class="col-md-1">&nbsp;</div>
		<div class="col-md-10 text-center">
			<div class="alert alert-danger" role="alert">
				Raspberry-Pi wirklich herunterfahren?
			</div>
		</div>
	</div>
        <div class="row">
		<div class="col-md-1">&nbsp;</div>
                <div class="col-md-4 text-right">
			<a href="index.php" class="btn btn-lg btn-info btn-block" role="button">Zur&uuml;ck zum Portal</a>
                </div>
		<div class="col-md-2">&nbsp;</div>
                <div class="col-md-4">
			<a href="#" onclick="ctrl_script('shutdown.php')" class="btn btn-lg btn-danger btn-block" role="button">Herunterfahren</a>
                </div>
        </div>

</div>
  <?php include('include/footer.php'); ?>
