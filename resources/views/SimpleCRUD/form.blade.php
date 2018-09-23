<!DOCTYPE html>
<html>
<head>
	<title>Simple CRUD</title>
	<link rel="stylesheet" href="/css/bootstrap.min.css">
</head>
<body>
<div class="container-fluid">
	<div class="row">
		<div class="col col-12">
			<form method="POST" action="submit">

				<!-- Name -->
				<div class="form-group">
					<div class="form-inline col">
						<label class="col-3">Name: </label>
						<input type="text" name="name" class="form-control col-4" placeholder="Your name" autocomplete="off">
						@if ($errors->has('name'))
							@if ($errors->first('name'))
								<div class="alert alert-danger">Mohon untuk mengisi bagian ini terlebih dahulu</div>
							@endif
						@endif
					</div>
				</div>
				
				<!-- Email -->
				<div class="form-group">
					<div class="form-inline col ">
						<label class="col-3">Email: </label>
						<input type="email" name="mail" class="form-control col-4" placeholder="example@example.com" autocomplete="off">
						@if ($errors->has('mail'))
							@if ($errors->first('mail'))
								<div class="alert alert-danger">Mohon untuk mengisi bagian ini terlebih dahulu</div>
							@endif
						@endif
					</div>
				</div>
				
				<!-- Date of birth -->
				<div class="form-group">
					<div class="form-inline col ">
						<label class="col-3">Date of Birth: </label>
						<input type="date" name="dateofbirth" class="form-control col-4">
						@if ($errors->has('dateofbirth'))
							@if ($errors->first('dateofbirth'))
								<div class="alert alert-danger">Mohon untuk mengisi bagian ini terlebih dahulu</div>
							@endif
						@endif
					</div>
				</div>
					
				<!-- Address -->
				<div class="form-group">
					<div class="form-inline col ">
						<label class="col-3">Address: </label>
						<input type="text" name="address" class="form-control col-4" placeholder="Your address" autocomplete="off">
						@if ($errors->has('address'))
							@if ($errors->first('address'))
								<div class="alert alert-danger">Mohon untuk mengisi bagian ini terlebih dahulu</div>
							@endif
						@endif
					</div>
				</div>
					
				<!-- Button submit and reset -->
				<div class="form-group">
					<div class="form-inline">
						<div class="col-3" style="text-align: center;">
							<input type="submit" name="submit" class="btn btn-success">
						</div>
						<div class="col-3" style="text-align: center;">
							<input type="reset" name="reset" class="btn btn-danger">
						</div>
					</div>
				</div>

				<input type="hidden" name="_token" value="{{csrf_token()}}">
			</form>
		</div>
	</div>
</div>
</body>
</html>