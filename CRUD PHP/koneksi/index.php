<!DOCTYPE html>
<html lang="en">
<head>
    <title>CRUD PHP dan MSQLi - WWW.MALASNGODING.COM</title>
</head>
<body>
  <H2>CRUD DATA SISWA - WWW.MALASNGODING.COM</H2> 
  <br/>
  <BR/>
  <table border="1">
    <tr>
        <th>NO</th>
        <th>Nama</th>
        <th>NIM</th>
        <th>Alamat</th>
        <th>OPSI</th>
    </tr>
    <?php
    include 'koneksi.php';
    $no = 1;
	$data = mysqli_query($koneksi,"select * from siswa");
	while($d = mysqli_fetch_array($data)){
        ?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['nama']; ?></td>
				<td><?php echo $d['nim']; ?></td>
				<td><?php echo $d['alamat']; ?></td>
				<td>
					<a href="edit.php?id=<?php echo $d['id']; ?>">EDIT</a>
					<a href="hapus.php?id=<?php echo $d['id']; ?>">HAPUS</a>
				</td>
			</tr>
			<?php 
    }
    ?>
  </table>
</body>
</html>