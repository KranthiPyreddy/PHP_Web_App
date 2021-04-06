<?php require_once 'app/views/templates/header.php' ?>
 
  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>

<?php 
	
		if($_SESSION['page']!=null)
			{
				$page = $_SESSION['page']; ?>
				<script type='text/javascript'>
					window.swal('Warning!',
								'You do not have permission to access  <b style="color:blue;"><?php echo $page ?></b> page!',
				'warning');</script>
			<?php }
?>
<div class="container">
    <div class="page-header" id="banner">
        <div class="row">
            <div class="col-lg-12">
                <h1>Welcome to MAP202</h1>
                <p class="lead"> <?= date("F jS, Y"); ?></p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <p> <?=$data['message']?> </p>
			<a type="button" href="logout/index" class="btn btn-info btn-lg">
				<span class="glyphicon glyphicon-log-out"></span>Log out</a>
        </div>
    </div>

    <?php require_once 'app/views/templates/footer.php' ?>
	
