<!--Deklarasi Script PHP-->
<?php 
	//memanggil file koneksi.php untuk dapat terkoneksi dengan database 
	include ('conn.php');
	//memanggil file autoload.inc.php yang berada di folder dompdf
	require_once("dompdf/autoload.inc.php");
	//menggunakan namespace Dompdf
	use Dompdf\Dompdf;
	//Deklarasi object dompdf
	$dompdf = new Dompdf();

	//Script query untuk mendapatkan data di tabel tb_siswa dan disimpan di var query
	$query=mysqli_query($koneksi,"select * from pesertaDidik");

	//Membuat judul dengan format Header 3
	$html='<center><h3>Daftar Data Siswa</h3></center><hr/><br/>';
	//membuat tabel dan membuat judul kolom
	$html .='<table border="1" width="100%">
		<tr>
			<th>No</th>
			<th>Tanggal Pendaftaran</th>
			<th>Jenis Pendaftaran</th>
			<th>Tanggal Masuk Sekolah</th>
			<th>NIS</th>
			<th>No. Peserta Ujian</th>
			<th>PAUD</th>
			<th>TK</th>
			<th>No. Seri SKHUN</th>
			<th>No. Seri Ijazah</th>
			<th>Hobi</th>
			<th>Cita-Cita</th>
			<th>Nama Lengkap</th>
			<th>Jenis Kelamin</th>
			<th>NISN</th>
			<th>NIK</th>
			<th>Tempat Lahir</th>
			<th>Tanggal Lahir</th>
			<th>Agama</th>
			<th>Berkebutuhan Khusus</th>
			<th>Alamat Jalan</th>
			<th>RT</th>
			<th>RW</th>
			<th>Dusun</th>
			<th>Kelurahan/Desa</th>
			<th>Kecamatan</th>
			<th>Kode Pos</th>
			<th>Tempat Rumah</th>
			<th>Moda Transport</th>
			<th>Nomor HP</th>
			<th>Nomor Telepon</th>
			<th>Email Pribadi</th>
			<th>Penerima KPS/KIP/PKH</th>
			<th>No.KPS/KIP/PKH</th>
			<th>Kewarganegaraan</th>
			<th>Nama Ayah Kandung</th>
			<th>Tahun Lahir</th>
			<th>Pendidikan</th>
			<th>Pekerjaan</th>
			<th>Penghasilan</th>
			<th>Berkebutuhan Khusus</th>
			<th>Nama Ibu Kandung</th>
			<th>Tahun Lahir</th>
			<th>Pendidikan</th>
			<th>Pekerjaan</th>
			<th>Penghasilan</th>
			<th>Berkebutuhan Khusus</th>
		</tr>';

	//Deklarasi variabel no
	$no=1;
	//Mengekstrak data dari variabel $query dan disimpan di var $row
	while ($row=mysqli_fetch_array($query)) {
		$html.="<tr>
		<td>".$no."</td>
		<td>".$row['formDate']."</td>
		<td>".$row['jenis_daftar']."</td>
		<td>".$row['sekolahDate']."</td>
		<td>".$row['nis']."</td>
		<td>".$row['noPeserta']."</td>
		<td>".$row['isPaud']."</td>
		<td>".$row['isTk']."</td>
		<td>".$row['noSkhun']."</td>
		<td>".$row['noijazah']."</td>
		<td>".$row['hobi']."</td>
		<td>".$row['cita']."</td>
		<td>".$row['nama']."</td>
		<td>".$row['gender']."</td>
		<td>".$row['nisn']."</td>
		<td>".$row['nik']."</td>
		<td>".$row['born']."</td>
		<td>".$row['bornDate']."</td>
		<td>".$row['agama']."</td>
		<td>".$row['ABK']."</td>
		<td>".$row['alamat']."</td>
		<td>".$row['rt']."</td>
		<td>".$row['rw']."</td>
		<td>".$row['dusun']."</td>
		<td>".$row['desa']."</td>
		<td>".$row['kecamatan']."</td>
		<td>".$row['idPos']."</td>
		<td>".$row['rumah']."</td>
		<td>".$row['transport']."</td>
		<td>".$row['noHp']."</td>
		<td>".$row['noTelp']."</td>
		<td>".$row['email']."</td>
		<td>".$row['isKip']."</td>
		<td>".$row['nokip']."</td>
		<td>".$row['kwn']."</td>
		<td>".$row['ayah']."</td>
		<td>".$row['bornAyah']."</td>
		<td>".$row['eduAyah']."</td>
		<td>".$row['workAyah']."</td>
		<td>".$row['salAyah']."</td>
		<td>".$row['ABKAyah']."</td>
		<td>".$row['ibu']."</td>
		<td>".$row['bornIbu']."</td>
		<td>".$row['eduIbu']."</td>
		<td>".$row['workIbu']."</td>
		<td>".$row['salIbu']."</td>
		<td>".$row['ABKIbu']."</td>
		</tr>";
		$no++;
	}
	//memberikan tutup html
	$html.="</html>";

	//Mengkonversi script HTML menjadi bentuk PDF
	$dompdf->loadHtml($html);
	//Setting ukuran kertas dan orientasi kertas hasil report
	$dompdf->setPaper('A0','landscape');
	//Rendering dari report PDF
	$dompdf->render();
	//Hasil output file PDF dengan nama laporan_siswa.pdf
	$dompdf->stream('pendaftaran_siswa.pdf');
?>