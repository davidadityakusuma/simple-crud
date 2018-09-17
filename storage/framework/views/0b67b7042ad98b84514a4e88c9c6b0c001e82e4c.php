<!DOCTYPE html>
<html>
<head>
	<title>DETAILS</title>
	<link rel="stylesheet" href="/css/bootstrap.min.css">
	<!-- <meta name="csrf_token" content="<?php echo e(csrf_token()); ?>"> -->
</head>
<body>
<div class="container-fluid">
	<div class="row">
		<div class="col col-8">
			<form>

				<!-- Name -->
				<div class="form-group">
					<div class="form-inline col">
						<label class="col-3">Name: </label>
						<input type="text" name="name" class="form-control col-5" placeholder="Your name" autocomplete="off" value="<?php echo e($name); ?>" readonly>
					</div>
				</div>
				
				<!-- Email -->
				<div class="form-group">
					<div class="form-inline col ">
						<label class="col-3">Email: </label>
						<input type="email" name="mail" class="form-control col-5" placeholder="example@example.com" autocomplete="off" value="<?php echo e($mail); ?>" readonly>
					</div>
				</div>
				
				<!-- Date of birth -->
				<div class="form-group">
					<div class="form-inline col ">
						<label class="col-3">Date of Birth: </label>
						<input type="date" name="dateofbirth" class="form-control" value="<?php echo e($date); ?>" readonly>
					</div>
				</div>
					
				<!-- Address -->
				<div class="form-group">
					<div class="form-inline col ">
						<label class="col-3">Address: </label>
						<input type="text" name="address" class="form-control col-5" placeholder="Your address" autocomplete="off" value="<?php echo e($addr); ?>" readonly>
					</div>
				</div>

				<input type="hidden" name="_token" value="<?php echo csrf_token();?>">
			</form>
		</div>
	</div>
</div>
</body>
</html>