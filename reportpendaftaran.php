<!--Deklarasi Script PHP-->
<?php 
	//membuka koneksi ke database 
	include "conn.php";
	
	//memanggil file library spreadsheet
	require 'vendor/autoload.php';
	use PhpOffice\PhpSpreadsheet\Spreadsheet;
	use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

	//Deklarasi variabel dengan class spreadsheet
	$spreadsheet=new spreadsheet();
	//Deklarasi var sheet sebagai activesheet di file excel
	$sheet=$spreadsheet->getActiveSheet();

	//Membuat judul pada setiap kolom
	$sheet->setCellValue('A1','No');
	$sheet->setCellValue('B1','Tanggal Pendaftaran');
	$sheet->setCellValue('C1','Jenis Pendaftaran');
	$sheet->setCellValue('D1','Tanggal Masuk Sekolah');
	$sheet->setCellValue('E1','NIS');
	$sheet->setCellValue('F1','No. Peserta Ujian');
	$sheet->setCellValue('G1','Pernah PAUD?');
	$sheet->setCellValue('H1','Pernah TK?');
	$sheet->setCellValue('I1','No. Seri SKHUN');
	$sheet->setCellValue('J1','No. Seri Ijazah');
	$sheet->setCellValue('K1','Hobi');
	$sheet->setCellValue('L1','Cita-Cita');
	$sheet->setCellValue('M1','Nama Lengkap');
	$sheet->setCellValue('N1','Jenis Kelamin');
	$sheet->setCellValue('O1','NISN');
	$sheet->setCellValue('P1','NIK');
	$sheet->setCellValue('Q1','Tempat Lahir');
	$sheet->setCellValue('R1','Tanggal Lahir');
	$sheet->setCellValue('S1','Agama');
	$sheet->setCellValue('T1','Berkebutuhan Khusus');
	$sheet->setCellValue('U1','Alamat Jalan');
	$sheet->setCellValue('V1','RT');
	$sheet->setCellValue('W1','RW');
	$sheet->setCellValue('X1','Dusun');
	$sheet->setCellValue('Y1','Kelurahan/Desa');
	$sheet->setCellValue('Z1','Kecamatan');
	$sheet->setCellValue('AA1','Kode Pos');
	$sheet->setCellValue('AB1','Tempat Rumah');
	$sheet->setCellValue('AC1','Moda Transport');
	$sheet->setCellValue('AD1','Nomor HP');
	$sheet->setCellValue('AE1','Nomor Telepon');
	$sheet->setCellValue('AF1','Email Pribadi');
	$sheet->setCellValue('AG1','Penerima KPS/KIP/PKH');
	$sheet->setCellValue('AH1','No.KPS/KIP/PKH');
	$sheet->setCellValue('AI1','Kewarganegaraan');
	$sheet->setCellValue('AJ1','Nama Ayah Kandung');
	$sheet->setCellValue('AK1','Tahun Lahir');
	$sheet->setCellValue('AL1','Pendidikan');
	$sheet->setCellValue('AM1','Pekerjaan');
	$sheet->setCellValue('AN1','Penghasilan');
	$sheet->setCellValue('AO1','Berkebutuhan Khusus');
	$sheet->setCellValue('AP1','Nama Ibu Kandung');
	$sheet->setCellValue('AQ1','Tahun Lahir');
	$sheet->setCellValue('AR1','Pendidikan');
	$sheet->setCellValue('AS1','Pekerjaan');
	$sheet->setCellValue('AT1','Penghasilan');
	$sheet->setCellValue('AU1','Berkebutuhan Khusus');

	//mengambil data pada database dan disimpan di var query
	$query=mysqli_query($koneksi,"select * from pesertaDidik");
	//menyimpan nomor awal cell dan ditampilkan mulai row 2
	$i=2;
	$no=1;
	//extract hasil query dan data disimpan di var row
	while($row=mysqli_fetch_array($query)){
		$sheet->setCellValue('A'.$i,$no++);
		$sheet->setCellValue('B'.$i,$row['formDate']);
		$sheet->setCellValue('C'.$i,$row['jenis_daftar']);
		$sheet->setCellValue('D'.$i,$row['sekolahDate']);
		$sheet->setCellValue('E'.$i,$row['nis']);
		$sheet->setCellValue('F'.$i,$row['noPeserta']);
		$sheet->setCellValue('G'.$i,$row['isPaud']);
		$sheet->setCellValue('H'.$i,$row['isTk']);
		$sheet->setCellValue('I'.$i,$row['noSkhun']);
		$sheet->setCellValue('J'.$i,$row['noijazah']);
		$sheet->setCellValue('K'.$i,$row['hobi']);
		$sheet->setCellValue('L'.$i,$row['cita']);
		$sheet->setCellValue('M'.$i,$row['nama']);
		$sheet->setCellValue('N'.$i,$row['gender']);
		$sheet->setCellValue('O'.$i,$row['nisn']);
		$sheet->setCellValue('P'.$i,$row['nik']);
		$sheet->setCellValue('Q'.$i,$row['born']);
		$sheet->setCellValue('R'.$i,$row['bornDate']);
		$sheet->setCellValue('S'.$i,$row['agama']);
		$sheet->setCellValue('T'.$i,$row['ABK']);
		$sheet->setCellValue('U'.$i,$row['alamat']);
		$sheet->setCellValue('V'.$i,$row['rt']);
		$sheet->setCellValue('W'.$i,$row['rw']);
		$sheet->setCellValue('X'.$i,$row['dusun']);
		$sheet->setCellValue('Y'.$i,$row['desa']);
		$sheet->setCellValue('Z'.$i,$row['kecamatan']);
		$sheet->setCellValue('AA'.$i,$row['idPos']);
		$sheet->setCellValue('AB'.$i,$row['rumah']);
		$sheet->setCellValue('AC'.$i,$row['transport']);
		$sheet->setCellValue('AD'.$i,$row['noHp']);
		$sheet->setCellValue('AE'.$i,$row['noTelp']);
		$sheet->setCellValue('AF'.$i,$row['email']);
		$sheet->setCellValue('AG'.$i,$row['isKip']);
		$sheet->setCellValue('AH'.$i,$row['nokip']);
		$sheet->setCellValue('AI'.$i,$row['kwn']);
		$sheet->setCellValue('AJ'.$i,$row['ayah']);
		$sheet->setCellValue('AK'.$i,$row['bornAyah']);
		$sheet->setCellValue('AL'.$i,$row['eduAyah']);
		$sheet->setCellValue('AM'.$i,$row['workAyah']);
		$sheet->setCellValue('AN'.$i,$row['salAyah']);
		$sheet->setCellValue('AO'.$i,$row['ABKAyah']);
		$sheet->setCellValue('AP'.$i,$row['ibu']);
		$sheet->setCellValue('AQ'.$i,$row['bornIbu']);
		$sheet->setCellValue('AR'.$i,$row['eduIbu']);
		$sheet->setCellValue('AS'.$i,$row['workIbu']);
		$sheet->setCellValue('AT'.$i,$row['salIbu']);
		$sheet->setCellValue('AU'.$i,$row['ABKIbu']);
		$i++;	
	}

	//style border untuk cell
	$styleArray=[
				'borders'=>[
					'allBorders'=>[
						'borderStyle'=>PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
					],
				],
	];
	//memunculkan file excel
	$i=$i-1;
	$sheet->getStyle('A1:AU'.$i)->applyFromArray($styleArray);
	//Merender menjadi file xlsx
	$writer=new Xlsx($spreadsheet);
	//Ekspor dan save file excel
	$writer->save('Report Data Pendaftaran Siswa.xlsx');
?>