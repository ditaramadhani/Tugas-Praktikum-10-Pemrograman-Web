<!--Deklarasi Script PHP-->
<?php
	//memanggil file koneksi.php untuk dapat terkoneksi dengan database db_siswa
	include ('koneksi.php');
	//memanggil file autoload.inc.php yang berada di folder dompdf
	require_once("dompdf/autoload.inc.php");
	//menggunakan namespace Dompdf
	use Dompdf\Dompdf;
	//Deklarasi object dompdf
	$dompdf = new Dompdf();
	//Script query untuk mendapatkan data di tabel tb_siswa dan disimpan di var query
	$query=mysqli_query($conn,"select * from tb_siswa");
	
	//Membuat judul dengan format Header 3
	$html='<center><h3>Daftar Nama Siswa</h3></center><hr/><br/>';
	$html .='<table border="1" width="100%">
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Kelas</th>
			<th>Alamat</th>
		</tr>';
	
	//Deklarasi variabel no
	$no=1;
	//Mengekstrak data dari variabel $query dan disimpan di var $row
	while ($row=mysqli_fetch_array($query)) {
		$html.="<tr>
		<td>".$no."</td>
		<td>".$row['nama']."</td>
		<td>".$row['kelas']."</td>
		<td>".$row['alamat']."</td>
		</tr>";
		$no++;
	}
	//memberikan tutup html
	$html.="</html>";

	//Mengkonversi script HTML menjadi bentuk PDF
	$dompdf->loadHtml($html);
	//Setting ukuran kertas dan orientasi kertas hasil report
	$dompdf->setPaper('A4','potrait');
	//Rendering dari report PDF
	$dompdf->render();
	//Hasil output file PDF dengan nama laporan_siswa.pdf
	$dompdf->stream('laporan_siswa.pdf');
?>