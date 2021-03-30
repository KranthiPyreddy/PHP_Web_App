<?php require_once 'app/views/templates/headerPublic.php'?>
<main role="main" class="container">
    <div class="page-header" id="banner">
        <div class="row">
            <div class="col-lg-12">
                <h1>Enter the details below</h1>
				
				<?php if ($_SESSION['failedAuth'])
				echo '<P> Login failed, Username & Password must be a valid, try again </P>'; 
				if($data['message']){?>
					<?= $data['message'];?>
				<?php }
				?>
		
            </div>
        </div>
    </div>

<div class="row">
    <div class="col-sm-auto">
		<form action="/login/verify" method="post" >
		<fieldset>
			<div class="form-group">
				<label for="name">Username</label>
				<input required type="text" class="form-control" name="username">
			</div>
			<div class="form-group">
				<label for="name">Password</label>
				<input required type="password" class="form-control" name="password">
			</div>
		  <button type="submit" class="btn btn-primary">Log In</button>
			<p>
				<a href = "/register">Click here to register new accout</a> 
			</p>
		</fieldset>
		</form> 
	</div>
</div>
    <?php require_once 'app/views/templates/footer.php' ?>
