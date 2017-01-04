  <?php include('include/head.php'); ?>

  <?php include('include/nav.php'); ?>
<div class="container">
	<div class="row">
                <div class="col-md-6 text-right">
			<img src="img/laser.jpg" class="img-rounded img-responsive" alt="laser">
                </div>
                <div class="col-md-6">
			<img src="img/printer.jpg" class="img-rounded img-responsive" alt="printer">
                </div>
        </div>
	<div class="row">
		<div class="col-md-1">&nbsp;</div>
	 	<div class="col-md-4 text-right">
			<a href="http://srv7.home:5001" class="btn btn-lg btn-primary btn-block" role="button">OctoCNC</a>
		</div>
		<div class="col-md-2">&nbsp;</div>
		<div class="col-md-4">
			<a href="http://srv7.home:5000" class="btn btn-lg btn-primary btn-block" role="button">OctoPrint</a>
		</div>
	</div>
	<div class="row">
		<div class="col-md-1">&nbsp;</div>
	        <div class="col-md-4 text-right">
			<a href="#" onclick="ctrl_script('start_cam3.php')" class="btn btn-lg btn-info btn-block" role="button">Kamera 3 - Laser</a>
	        </div>
		<div class="col-md-2">&nbsp;</div>
	        <div class="col-md-4">
			<a href="#" onclick="ctrl_script('start_cam2.php')" class="btn btn-lg btn-info btn-block" role="button">Kamera 2 - Printer</a>
        	</div>
	</div>
	<div class="row">
		<div class="col-md-12"><hr></div>
	</div>
        <div class="row">
		<div class="col-md-1">&nbsp;</div>
                <div class="col-md-4 text-right">
			<a href="#" onclick="ctrl_script('stop_cam.php')" class="btn btn-lg btn-warning btn-block" role="button">Kameras stoppen</a>
                </div>
		<div class="col-md-2">&nbsp;</div>
                <div class="col-md-4">
			<a href="confirm.php" class="btn btn-lg btn-danger btn-block" role="button">Herunterfahren</a>
                </div>
        </div>

</div>
  <?php include('include/footer.php'); ?>
