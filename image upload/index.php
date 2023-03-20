<!DOCTYPE html>
<html>
<head>
	<title>Upload Files</title>
	<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/css/bootstrap.min.css'>
	<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
	<style>
		body {
			margin: 0;
			background-color: #ecfab6;
		}
	</style>
</head>
<body>
	<div class="container py-3">
		<div class="row justify-content-center">
			<div class="col-md-6">
				<h2 align="center">Upload File</h2>
				<form action="process_page.php" enctype="multipart/form-data" method="post">
					<div class="form-group">
						<label for="full_name">Full Name:</label>
						<input type="text" class="form-control" id="full_name" placeholder="Enter Full Name" name="full_name" required>
						<div class="form-group">
							<label for="uploadFile">Upload File:</label>
							<input type="file" class="form-control" id="uploadFile" name="uploadFile">
							<span style="color:#f00;font-size:15px;"><b>Note:</b> Only  JPG, PNG and GIF images are allowed. Maximum upload size is 50kb </span>
						</div>
						<button type="submit" name="btnSubmit" class="btn btn-default btn-primary">Submit</button>

					</div>
				</form>
			</div>
		</div>
	</div>

</body>
</html>