<?php require_once 'app/views/templates/headerPublic.php' ?>
<main role="main" class="container">
    <div class="page-header" id="banner">
        <div class="row">
            <div class="col-lg-12">
                <h1>Enter the details to sign up</h1>
            </div>
        </div>
    </div>

<div class="row">
    <div class="col-sm-auto">
		<form action="/register/verify" method="post" >
		<fieldset>
			<div class="form-group">
				<label for="name">Username</label>
				<input required type="text" class="form-control" name="username">
				<?php /*
				<?php if (isset($name_error)): ?>
				<span><?php echo $name_error; ?></span>
				<?php endif ?> */ ?>
				
			</div>
			<div class="form-group">
				<label for="name">Password</label>
				<input required type="password" class="form-control" name="password">
			</div>
		  <button type="submit" class="btn btn-primary" name = "create" >Sign Up</button>
			<p>
				<a href = "/login">Click here to login</a> 
			</p>
		</fieldset>
		</form> 
	</div>
</div>
<?php require_once 'app/views/templates/footer.php' ?>

