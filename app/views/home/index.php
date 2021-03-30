<?php require_once 'app/views/templates/header.php' ?>
<div class="container">
    <div class="page-header" id="banner">
        <div class="row">
            <div class="col-lg-12">
                <h1>Welcome to Lab8</h1>
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
	
