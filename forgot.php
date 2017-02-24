<?php
	include('forgotform.php');
?>
<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login / Registratie BPV</title>
    <link href="extra/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="extra/font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css"  href="extra/jquery-ui-1.12.1.custom/jquery-ui.min.css">
        <link rel="stylesheet" type="text/css"  href="css/styleforgot.css">
        <script src='extra/jquery-3.1.1.js'></script>
        <script src='extra/jquery-ui-1.12.1.custom/jquery-ui.min.js'></script>
</head>
<body>
    <div class="container">
    	<div class="row">
			<div class="col-md-6 col-md-offset-3 content">
				<div class="panel panel-login">
					<div class="panel-heading">
							<div class="col-xs-6 loginhead">
                                <h3>Wachtwoord vergeten?</h3>
							</div>
						<hr>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">
								<form id="login-form" method="post" role="form" style="display: block;">
									<div class="form-group">
										<input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email" value="">
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="submit" id="submit" tabindex="4" class="form-control btn btn-login" value="Submit">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-12">
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
        <script src="./js.js"></script>
</body>
</html>
