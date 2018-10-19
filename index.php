<?php 

include "koneksi.php";

// -----------------------

	$query = "SELECT nama, nim, jns_k, prog_stud, fakultas, asal, moto
			  FROM mhs";

	$hasil = mysqli_query($koneksi, $query);
	$result = mysqli_fetch_array($hasil);

	echo "<table border=1>
				<tr>
					<th>Nama</th>
					<th>NIM</th>
					<th>Jenis Kelamin</th>
					<th>Program Studi</th>
					<th>Fakultas</th>
					<th>Asal</th>
					<th>Moto Hidup</th>
				<tr>";

				foreach ($hasil as $qry) {
					echo "<tr>
					          <td>".$qry['nama']."</td>
					          <td>".$qry['nim']."</td>
					          <td>".$qry['jns_k']."</td>
					          <td>".$qry['prog_stud']."</td>
					          <td>".$qry['fakultas']."</td>
					          <td>".$qry['asal']."</td>
					          <td>".$qry['moto']."</td>";
				}


 ?>