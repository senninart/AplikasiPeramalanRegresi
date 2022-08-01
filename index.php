<?php 
	include("function.php");
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<title>Peramalan Regresi</title>
</head>
<body>
	<center>
		<h1 class="mt-4 mb-5">Peramalan Regresi</h1>
		<div>
		<form action="#" method="post">
			<div class="card mb-5" style="width: 65rem;">
			  	<div class="card-body">
			<table class="table table-borderless">
				<tr>
					<td>
						<div class="input-group">
							<span class="input-group-text" id="basic-addon1">Pilih Tahun</span>
							<select class="form-select" name="tahun">
								<?php optionTahun() ?>
							</select>
						</div>
					</td>
				</tr>
				<tr align="center">
					<td><h5>Januari</td>
					<td><h5>Februari</td>
					<td><h5>Maret</td>
					<td><h5>April</td>
				</tr>
				<tr>
					<td>
						<div class="input-group">
							<span class="input-group-text" id="basic-addon1">Rp.</span>
							<input type="number" name="1" required class="form-control">
						</div>
					</td>
					<td>
						<div class="input-group">
							<span class="input-group-text" id="basic-addon1">Rp.</span>
							<input type="number" name="2" required class="form-control">
						</div>
					</td>
					<td>
						<div class="input-group">
							<span class="input-group-text" id="basic-addon1">Rp.</span>
							<input type="number" name="3" required class="form-control">
						</div>
					</td>
					<td>
						<div class="input-group">
							<span class="input-group-text" id="basic-addon1">Rp.</span>
							<input type="number" name="4" required class="form-control">
						</div>
					</td>
				</tr>
				<tr align="center">
					<td><h5>Mei</td>
					<td><h5>Juni</td>
					<td><h5>Juli</td>
					<td><h5>Agustus</td>
				</tr>
				<tr>
					<td>
						<div class="input-group">
							<span class="input-group-text" id="basic-addon1">Rp.</span>
							<input type="number" name="5" class="form-control">
						</div>
					</td>
					<td>
						<div class="input-group">
							<span class="input-group-text" id="basic-addon1">Rp.</span>
							<input type="number" name="6" class="form-control">
						</div>
					</td>
					<td>
						<div class="input-group">
							<span class="input-group-text" id="basic-addon1">Rp.</span>
							<input type="number" name="7" class="form-control">
						</div>
					</td>
					<td>
						<div class="input-group">
							<span class="input-group-text" id="basic-addon1">Rp.</span>
							<input type="number" name="8" class="form-control">
						</div>
					</td>
				</tr>
				<tr align="center">
					<td><h5>September</td>
					<td><h5>Oktober</td>
					<td><h5>November</td>
					<td><h5>Desember</td>
				</tr>
				<tr>
					<td>
						<div class="input-group">
							<span class="input-group-text" id="basic-addon1">Rp.</span>
							<input type="number" name="9" class="form-control">
						</div>
					</td>
					<td>
						<div class="input-group">
							<span class="input-group-text" id="basic-addon1">Rp.</span>
							<input type="number" name="10" class="form-control">
						</div>
					</td>
					<td>
						<div class="input-group">
							<span class="input-group-text" id="basic-addon1">Rp.</span>
							<input type="number" name="11" class="form-control">
						</div>
					</td>
					<td>
						<div class="input-group">
							<span class="input-group-text" id="basic-addon1">Rp.</span>
							<input type="number" name="12" class="form-control">
						</div>
					</td>
				</tr>
				<tr>
					<td align="right" colspan="4">
						<a href="../AplikasiPeramalanRegresi" class="btn btn-danger">Reset</a>
						<input type="submit" name="proses" value="Proses" class="btn btn-success">
					</td>
				</tr>
			</table>
			</div>
		</div>
		</form>
		<?php 
		if (isset($_POST['proses'])) {
			
			regresi();

			detailRegresi();
		}
	 ?>
	</div>
		</div>
		</div>
	</center>
</body>
</html>