<?php 

function optionTahun() {
	for ($tahun=2022; $tahun >= 1990 ; $tahun--) { 
		echo "	<option>$tahun</option>";
	}
}

function regresi(){
	$no1	= $_POST['1'];
	$no2	= $_POST['2'];
	$no3	= $_POST['3'];
	$no4	= $_POST['4'];
	$no5	= $_POST['5'];
	$no6	= $_POST['6'];
	$no7	= $_POST['7'];
	$no8	= $_POST['8'];
	$no9	= $_POST['9'];
	$no10	= $_POST['10'];
	$no11	= $_POST['11'];
	$no12	= $_POST['12'];
	$tahun 	= $_POST["tahun"];

	$total 		= $no1 + $no2 + $no3 + $no4 + $no5 + $no6 + $no7 + $no8 + $no9 + $no10 + $no11 + $no12;
	$totalBulan	= 12;

	$totalx		= 0;
	$totaly		= 0;
	$totalxy	= 0;
	$totalx2	= 0;
	$totaly2	= 0;
	$no = 1;

	?>
	<div class='card mb-5' style='width: 30rem';>
		<div class='card-body'>
			<h2 class="mb-4">Peramalan Regresi Tahun <?= $tahun+1 ?></h2>
			<table class='table table-bordered' width='35%'>
					<tr align='center' class='table-dark'>
						<td>Bulan</td>
						<td>Penjualan</td>
					</tr>
	<?php  
	for ($i=1; $i <= $totalBulan ; $i++) {
					
		$pendapatan = ${'no'.$i};
		$xy			= $pendapatan * $i;
		$x2			= $i * $i;
		$y2			= $pendapatan * $pendapatan;

		$totalx		= $totalx + $i;
		$totaly		= $totaly + $pendapatan;
		$totalxy	= $totalxy + $xy;
		$totalx2	= $totalx2 + $x2;
		$totaly2	= $totaly2 + $y2;
	}
	for ($i; $i <= 24 ; $i++) {
		/*Rumus Regresi*/
		$b = (($totalBulan * $totalxy) - ($totalx * $totaly)) /
	 	 (($totalBulan * $totalx2) - ($totalx * $totalx));

		$a = ($totaly / $totalBulan) - $b * ($totalx / $totalBulan);

		$y = $a + $b * $i;
		/*Rumus Regresi*/

		$pembulatanY 	= round($y);
		$formatY 		= number_format($pembulatanY,0,',','.');

		echo "<tr>
				<td>$no</td>
				<td>Rp. $formatY</td>
			  </tr>";
		$no++;
	}

		// echo "<tr>
		// 		<td>$i</td>
		// 		<td>Rp. $formatY</td>
		// 	  </tr>";
	
	?>
			</table>
		</div>
	</div>
	<?php
}

function detailRegresi(){
	$no1	= $_POST['1'];
	$no2	= $_POST['2'];
	$no3	= $_POST['3'];
	$no4	= $_POST['4'];
	$no5	= $_POST['5'];
	$no6	= $_POST['6'];
	$no7	= $_POST['7'];
	$no8	= $_POST['8'];
	$no9	= $_POST['9'];
	$no10	= $_POST['10'];
	$no11	= $_POST['11'];
	$no12	= $_POST['12'];

	$total 		= $no1 + $no2 + $no3 + $no4 + $no5 + $no6 + $no7 + $no8 + $no9 + $no10 + $no11 + $no12;
	$totalBulan	= 12;

	$totalx		= 0;
	$totaly		= 0;
	$totalxy	= 0;
	$totalx2	= 0;
	$totaly2	= 0;
	?>
	<div class='card' style='width: 40rem';>
		<div class='card-body'>
			<h2 class="mb-4">Detail Proses Regresi</h2>
			<table class='table table-bordered' width='35%'>
					<tr align='center' class='table-dark'>
						<td width=50>x</td>
						<td width=120>y</td>
						<td width=100>x * y</td>
						<td>x<sup>2</sup></td>
						<td>y<sup>2</sup></td>
					</tr>
	<?php  
	for ($i=1; $i <= $totalBulan ; $i++) {
					
		$pendapatan = ${'no'.$i};
		$xy			= $pendapatan * $i;
		$x2			= $i * $i;
		$y2			= $pendapatan * $pendapatan;

		$totalx		= $totalx + $i;
		$totaly		= $totaly + $pendapatan;
		$totalxy	= $totalxy + $xy;
		$totalx2	= $totalx2 + $x2;
		$totaly2	= $totaly2 + $y2;

		

		/*Format Penomoran*/

		$formatPendapatan	= number_format($pendapatan,0,',','.');
		$formatXY 			= number_format($xy,0,',','.');
		$formatY2 			= number_format($y2,0,',','.');
		$formatTotalY 		= number_format($totaly,0,',','.');
		$formatTotalXY 		= number_format($totalxy,0,',','.');
		$formatTotalY2 		= number_format($totaly2,0,',','.');

		/*End Format Penomoran*/

		echo "<tr>
				<td>$i</td>
				<td>$formatPendapatan</td>
				<td align='right'>$formatXY</td>
				<td>$x2</td>
				<td>$formatY2</td>";
	}
	?>
		<tr>
	 		<td colspan="5" align="center" class="table-dark">TOTAL</td>
	 	</tr>
	 	<tr>
	 		<td><?= $totalx; ?></td>
	 		<td><?= $formatPendapatan; ?></td>
	 		<td align="right"><?= $formatTotalXY; ?></td>
	 		<td><?= $totalx2; ?></td>
	 		<td><?= $formatTotalY2; ?></td>
	 	</tr>
	</table>
	<?php
}

 ?>