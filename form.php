<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!--Script pembuka koneksi ke bootstrap-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<!--Script CSS-->
	<style>
		.head2{
			background-color: #505050;
			color: white;
			padding: 10px;
			margin: 0px 0 20px 0;
			border-radius: 5px;
			width: 100%;
		}
		.center{
			width: 120%;
			margin-left: 25%;
		}
		.card-head{
			padding: 20px;
		}
	</style>
</head>
<body>
	<div class="center">
	<div class="row">
	<div class="col-md-6">
	<div class="card">
		<div class="card-head">
			<h1 style="text-align: center;">Formulir Peserta Didik</h1><br>
			<br>
			<b>Tanggal : <?php echo date("d  /  m  /  Y")  ?></b>
			<h3 style="float: right;">F-PD</h3>
		</div>
		<div class="head2">Registrasi Peserta Didik</div>
		<div class="card-body">
			
			<!--Pembuatan form dengan Method POST dan memanggil file action simpan.php-->
			<form method="POST" action="simpan.php" id="peserta">
				<!-- Option Jenis Pendaftaran -->
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Jenis Pendaftaran</label>
					<div class="col-sm-10">
						<select name="jenis_daftar" class="form-control" required="">
							<option selected disabled value="">-- Pilih --</option>
							<option value="Siswa Baru">01</option>
							<option value="Pindahan">02</option>
						</select>
					<span style="font-size: 11px; text-decoration-line: initial;">
							<p>
								<i>
									*01)Siswa Baru   02)Siswa Pindahan<br>
									
								</i>
							</p>
					</span>
					
					</div>
				</div>
				<!-- Tanggal Masuk Sekolah -->
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Tanggal Masuk Sekolah</label>
					<div class="col-sm-10">
						<input type="date" name="sekolahDate" class="form-control" required="">
					</div>
				</div>
				<!-- NIS -->
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">NIS</label>
					<div class="col-sm-10">
						<input type="number" name="nis" class="form-control"  placeholder="NIS" required="">
					</div>
				</div>
				<!-- Nomor Peserta Ujian -->
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Nomor Peserta Ujian</label>
					<div class="col-sm-10">
						<input type="number" name="noPeserta" class="form-control" required="" placeholder="Nomor Peserta Ujian"> 
						<span style="font-size: 11px; text-decoration-line: initial;">
							<p>
								<i>
									* Nomor Peserta Ujian adalah 20 Digit yang Tertera dalam Sertifikat 
									<i style="color: red; font-weight: bold;">NOSKHUN SD</i>
									, diisi bagi peserta didik jenjang SMP 	
								</i>
							</p>
						</span>
					</div>
				</div>
				<!-- IsPaud -->
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Apakah Pernah Paud?</label>
					<div class="col-sm-10">
						<input type="radio" name="isPaud" value="Ya" required=""> Ya
						<input type="radio" name="isPaud" value="Tidak" required=""> Tidak
					</div>
				</div>
				<!-- ISTK -->
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Apakah Pernah TK?</label>
					<div class="col-sm-10">
						<input type="radio" name="isTk" value="Ya" required=""> Ya
						<input type="radio" name="isTk" value="Tidak" required=""> Tidak
					</div>
				</div>
				<!-- No. seri NOSKHUN  -->
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">No. Seri NOSKHUN Sebelumnya</label>
					<div class="col-sm-10">
						<input type="number" name="noSkhun" class="form-control"  placeholder="No. Seri NOSKHUN" required=""> 
						<span style="font-size: 11px; text-decoration-line: initial;">
							<p>
								<i>
									Diisi 16 digit yang tertera di
									<i style="color: red; font-weight: bold;">NOSKHUN SD</i>
									- diisi bagi peserta didik jenjang SMP 	
								</i>
							</p>
						</span>
					</div>
				</div>
				<!-- No. seri NOIJAZAH  -->
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">No. Seri NOIJAZAH Sebelumnya</label>
					<div class="col-sm-10">
						<input type="number" name="noijazah" class="form-control"  placeholder="No. Seri NOIJAZAH" required=""> 
						<span style="font-size: 11px; text-decoration-line: initial;">
							<p>
								<i>
									Diisi 16 digit yang tertera di
									<i style="color: red; font-weight: bold;">NOIJAZAH SD</i>
									- diisi bagi peserta didik jenjang SMP 	
								</i>
							</p>
						</span>
					</div>
				</div>
				<!-- Hobi -->
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Hobi</label>
					<div class="col-sm-10">
						<select name="hobi" class="form-control" required="">
							<option selected disabled value="">-- Pilih --</option>
							<option value="Olahraga">A) Olahraga</option>
							<option value="Kesenian">B) Kesenian</option>
							<option value="Membaca">C) Membaca</option>
							<option value="Menulis">D) Menulis</option>
							<option value="Travelin">E) Traveling</option>
							<option value="Lainnya">F) Lainnya</option>
						</select>
					</div>
				</div>
				<!-- Cita -->
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Cita - Cita</label>
					<div class="col-sm-10">
						<select name="cita" class="form-control" required="">
							<option selected disabled value="">-- Pilih --</option>
							<option value="PNS">A) PNS</option>
							<option value="TNI/POLRI">B) TNI/POLRI</option>
							<option value="Guru/Dosen">C) Guru/Dosen</option>
							<option value="Dokter">D) Dokter</option>
							<option value="Politikus">E) Politikus</option>
							<option value="Wiraswasta">F) Wiraswasta</option>
							<option value="Seni/Lukis/Artis/Sejenis">G) Seni/Lukis/Artis/Sejenis</option>
							<option value="Lainnya">H) Lainnya</option>
						</select>
					</div>
				</div>
				<!-- Data Pribadi -->
				<div class="head2">Data Pribadi</div>
				<!-- Nama Lengkap -->
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Nama Lengkap</label>
					<div class="col-sm-10">
						<input type="text" name="nama" class="form-control"  placeholder="Nama Lengkap" required="">
					</div>
				</div>
				<!-- Jenis Kelamin -->
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Jenis Kelamin</label>
					<div class="col-sm-10">
						<input type="radio" name="gender" value="Laki - laki" required=""> Laki - laki
						<input type="radio" name="gender" value="Perempuan" required=""> Perempuan
					</div>
				</div>
				<!-- NISN -->
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">NISN</label>
					<div class="col-sm-10">
						<input type="number" name="nisn" class="form-control"  placeholder="NISN" required="">
					</div>
				</div>
				<!-- NIK -->
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">NIK</label>
					<div class="col-sm-10">
						<input type="number" name="nik" class="form-control"  placeholder="NIK" required="">
					</div>
				</div>
				<!-- Tempat Lahir -->
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Tempat Lahir</label>
					<div class="col-sm-10">
						<input type="text" name="born" class="form-control"  placeholder="Tempat Lahir" required="">
					</div>
				</div>
				<!-- Tanggal Lahir -->
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Tanggal Lahir</label>
					<div class="col-sm-10">
						<input type="date" name="bornDate" class="form-control" required="">
					</div>
				</div>
				<!-- Agama -->
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Agama</label>
					<div class="col-sm-10">
						<select name="agama" class="form-control" required="">
							<option selected disabled value="">-- Pilih --</option>
							<option value="Islam">01) Islam</option>
							<option value="Kristen Protestan">02) Kristen Protestan</option>
							<option value="Katholik">03) Katholik</option>
							<option value="Hindu">04) Hindu</option>
							<option value="Budha">05) Budha</option>
							<option value="Khong Hu Chu">06) Khong Hu Chu</option>
							<option value="Lainnya">07) Lainnya</option>
						</select>
					</div>
				</div>
				<!-- Berkebutuhan Khusus Pribadi -->
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Berkebutuhan Khusus</label>
					<div class="col-sm-10">
						<select name="ABK" class="form-control" required="">
							<option selected disabled value="">-- Pilih --</option>
							<option value="Tidak">01.Tidak</option>
							<option value="Netra">(A) 02.Netra</option>
							<option value="Rungu">(B) 03.Rungu</option>
							<option value="Grahita Sedang">(C) 03.Grahita Sedang</option>
							<option value="Daksa Ringan">(D) 04.Daksa Ringan</option>
							<option value="Daksa Sedang">(E) 05.Daksa Sedang</option>
							<option value="Laras">(F) 06.Laras</option>
							<option value="Wicara">(G) 07.Wicara</option>
							<option value="Tuna Ganda">(H) 08.Tuna Ganda</option>
							<option value="Hiper Aktif">(I) 09.Hiper Aktif</option>
							<option value="Cerdas Istimewa">(J) 10.Cerdas Istimewa</option>
							<option value="Bakat Istimewa">(K) 11.Bakat Istimewa</option>
							<option value="Kesulitan Belajar">(L) 12.Kesulitan Belajar</option>
							<option value="Narkoba">(M) 13.Narkoba</option>
							<option value="Indigo">(N) 14.Indigo</option>
							<option value="Down Sindrome">(O) 15.Down Sindrome</option>
							<option value="Autis">(P) 16.Autis</option>
							<option value="Lainnya">(Q) 17.Lainnya</option>
						</select>
					</div>
				</div>
				<!-- Alamat Pribadi -->
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Alamat Jalan</label>
					<div class="col-sm-10">
						<input type="text" name="alamat" class="form-control"  placeholder="Alamat" required="">
					</div>
				</div>
				<!-- RT -->
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">RT</label>
					<div class="col-sm-10">
						<input type="text" name="rt" class="form-control"  placeholder="RT" required="">
					</div>
				</div>
				<!-- RW -->
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">RW</label>
					<div class="col-sm-10">
						<input type="text" name="rw" class="form-control"  placeholder="RW" required="">
					</div>
				</div>
				<!-- Nama Dusun -->
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Nama Dusun</label>
					<div class="col-sm-10">
						<input type="text" name="dusun" class="form-control"  placeholder="Nama Dusun" required="">
					</div>
				</div>
				<!-- Nama Kelurahan/Desa -->
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Nama Kelurahan/Desa</label>
					<div class="col-sm-10">
						<input type="text" name="desa" class="form-control"  placeholder="Nama Kelurahan/Desa" required="">
					</div>
				</div>
				<!-- Kecamatan -->
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Kecamatan</label>
					<div class="col-sm-10">
						<input type="text" name="kecamatan" class="form-control"  placeholder="Kecamatan" required="">
					</div>
				</div>
				<!-- Kode Pos -->
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Kode Pos</label>
					<div class="col-sm-10">
						<input type="text" name="idPos" class="form-control"  placeholder="Kode Pos" required="">
					</div>
				</div>
				<!-- Tempat Rumah -->
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Tempat Rumah</label>
					<div class="col-sm-10">
						<select name="rumah" class="form-control" required="">
							<option selected disabled value="">-- Pilih --</option>
							<option value="Bersama Orangtua">1 Bersama Orangtua</option>
							<option value="Wali">2 Wali</option>
							<option value="Kos">3 Kos</option>
							<option value="Asrama">4 Asrama</option>
							<option value="Panti Asuhan">5 Panti Asuhan</option>
							<option value="Lainnya">9 Lainnya</option>
						</select>
					</div>
				</div>
				<!-- Moda Transport -->
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Moda Transport</label>
					<div class="col-sm-10">
						<select name="transport" class="form-control" required="">
							<option selected disabled value="">-- Pilih --</option>
							<option value="Jalan kaki">01) Jalan kaki</option>
							<option value="Kendaraan Pribadi">02) Kendaraan Pribadi</option>
							<option value="Kendaraan Umum">03) Kendaraan Umum</option>
							<option value="Jemputan Sekolah">04) Jemputan Sekolah</option>
							<option value="Kereta Api">05) Kereta Api</option>
							<option value="Ojek">06) Ojek</option>
							<option value="Dokar/Becak">07) Dokar/Becak</option>
							<option value="Perahu Penyebrangan">08) Perahu Penyebrangan</option>
							<option value="Lainnya">09) Lainnya</option>
						</select>
					</div>
				</div>
				<!-- Nomor HP -->
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Nomor Handphone</label>
					<div class="col-sm-10">
						<input type="number" name="noHp" class="form-control"  placeholder="Nomor Handphone" required="">
					</div>
				</div>
				<!-- Nomor Telepon -->
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Nomor Telepon</label>
					<div class="col-sm-10">
						<input type="number" name="noTelp" class="form-control"   placeholder="Nomor Handphone" required="">
					</div>
				</div>
				<!-- Email -->
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Email Pribadi</label>
					<div class="col-sm-10">
						<input type="email" name="email" class="form-control"  placeholder="Email" required="">
					</div>
				</div>
				<!-- Penerima KPS/KIP/PKH -->
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Penerima KPS/KIP/PKH</label>
					<div class="col-sm-10">
						<input type="radio" name="isKip" value="Ya" required=""> Ya
						<input type="radio" name="isKip" value="Tidak" required=""> Tidak
					</div>
				</div>
				<!-- No. KPS/KIP/PKH/KKS -->
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">No. KPS/KIP/PKH/KKS</label>
					<div class="col-sm-10">
						<input type="number" name="nokip" placeholder="No. KPS/KIP/PKH/KKS" > <i>*)Apabila Menerima</i>
					</div>
				</div>
				<!-- Kewarganegaraan -->
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Kewarganegaraan</label>
					<div class="col-sm-10">
						<input type="radio" name="kwn" value="Indonesia(WNI)" required=""> Indonesia(WNI)
						<input type="radio" name="kwn" value="Asing(WNA)" required=""> Asing(WNA)
						<input type="radio" name="kwn" value="Lainnya" required=""> Lainnya
						<input type="text" name="kwn" id="others" style='display:none;' />
					</div>
				</div>
				<!-- Data Ayah Kandung -->
				<div class="head2">Data Ayah Kandung</div>
				<!-- Nama Ayah Kandung -->
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Nama Ayah Kandung</label>
					<div class="col-sm-10">
						<input type="text" name="ayah" class="form-control"  placeholder="Nama Ayah Kandung" required="">
					</div>
				</div>
				<!-- Tahun Lahir Ayah -->
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Tahun Lahir</label>
					<div class="col-sm-10">
						<input type="date" name="bornAyah" class="form-control" required="">
					</div>
				</div>
				<!-- Pendidikan Ayah-->
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Pendidikan</label>
					<div class="col-sm-10">
						<select name="eduAyah" class="form-control" required="">
							<option selected disabled value="">-- Pilih --</option>
							<option value="Tidak Sekolah">Tidak Sekolah</option>
							<option value="Putus SD">Putus SD</option>
							<option value="SD Sederajat">SD Sederajat</option>
							<option value="SMP Sederajat">SMP Sederajat</option>
							<option value="SMA Sederajat">SMA Sederajat</option>
							<option value="D1">D1</option>
							<option value="D2">D2</option>
							<option value="D3">D3</option>
							<option value="D4/S1">D4/S1</option>
							<option value="S2">S2</option>
							<option value="S3">S3</option>
							<option value="Lainnya">Lainnya</option>
						</select>
					</div>
				</div>
				<!-- Pekerjaan Ayah-->
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Pekerjaan</label>
					<div class="col-sm-10">
						<select name="workAyah" class="form-control" required="">
							<option selected disabled value="">-- Pilih --</option>
							<option value="Tidak Bekerja">Tidak Bekerja</option>
							<option value="Nelayan">Nelayan</option>
							<option value="Petani">Petani</option>
							<option value="Peternak">Peternak</option>
							<option value="PNS/TNI/POLRI">PNS/TNI/POLRI</option>
							<option value="Karyawan Swasta">Karyawan Swasta</option>
							<option value="Pedagang Kecil">Pedagang Kecil</option>
							<option value="Pedagang Besar">Pedagang Besar</option>
							<option value="Wiraswasta">Wiraswasta</option>
							<option value="Wirausaha">Wirausaha</option>
							<option value="Buruh">Buruh</option>
							<option value="Pensiunan">Pensiunan</option>
							<option value="Lainnya">Lainnya</option>
						</select>
					</div>
				</div>
				<!-- Penghasilan Ayah -->
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Penghasilan</label>
					<div class="col-sm-10">
						<select name="salAyah" class="form-control" required="">
							<option selected disabled value="">-- Pilih --</option>
							<option value="Kurang dari 500,000">Kurang dari 500,000</option>
							<option value="500,000 - 999,999">500,000 - 999,999</option>
							<option value="1 jt - 1,999,999">1 jt - 1,999,999</option>
							<option value="4,2 jt - 4,9 jt">2 jt - 4,9 jt</option>
							<option value="5,5 jt - 20 jt">5 jt - 20 jt</option>
							<option value="6 Lebih dari 20 jt">Lebih dari 20 jt</option>
						</select>
					</div>
				</div>
				<!-- Berkebutuhan Khusus Ayah -->
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Berkebutuhan Khusus</label>
					<div class="col-sm-10">
						<select name="ABKayah" class="form-control" required="">
							<option selected disabled value="">-- Pilih --</option>
							<option value="Tidak">Tidak</option>
							<option value="Netra">Netra</option>
							<option value="Rungu">Rungu</option>
							<option value="Grahita Sedang">Grahita Sedang</option>
							<option value="Daksa Ringan">Daksa Ringan</option>
							<option value="Daksa Sedang">Daksa Sedang</option>
							<option value="Laras">Laras</option>
							<option value="Wicara">Wicara</option>
							<option value="Tuna Ganda">Tuna Ganda</option>
							<option value="Hiper Aktif">Hiper Aktif</option>
							<option value="Cerdas Istimewa">Cerdas Istimewa</option>
							<option value="Bakat Istimewa">Bakat Istimewa</option>
							<option value="Kesulitan Belajar">Kesulitan Belajar</option>
							<option value="Narkoba">Narkoba</option>
							<option value="Indigo">Indigo</option>
							<option value="Down Sindrome">Down Sindrome</option>
							<option value="Autis">Autis</option>
							<option value="Lainnya">Lainnya</option>
						</select>
					</div>
				</div>
				<!-- Data Ibu Kandung -->
				<div class="head2">Data Ibu Kandung</div>
				<!-- Nama Ibu Kandung -->
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Nama Ibu Kandung</label>
					<div class="col-sm-10">
						<input type="text" name="ibu" class="form-control"  placeholder="Nama Ibu Kandung" required="">
					</div>
				</div>
				<!-- Tahun Lahir Ibu -->
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Tahun Lahir</label>
					<div class="col-sm-10">
						<input type="date" name="bornIbu" class="form-control" required="">
					</div>
				</div>
				<!-- Pendidikan Ibu-->
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Pendidikan</label>
					<div class="col-sm-10">
						<select name="eduIbu" class="form-control" required="">
							<option selected disabled value="">-- Pilih --</option>
							<option value="Tidak Sekolah">Tidak Sekolah</option>
							<option value="Putus SD">Putus SD</option>
							<option value="SD Sederajat">SD Sederajat</option>
							<option value="SMP Sederajat">SMP Sederajat</option>
							<option value="SMA Sederajat">SMA Sederajat</option>
							<option value="D1">D1</option>
							<option value="D2">D2</option>
							<option value="D3">D3</option>
							<option value="D4/S1">D4/S1</option>
							<option value="S2">S2</option>
							<option value="S3">S3</option>
							<option value="Lainnya">Lainnya</option>
						</select>
					</div>
				</div>
				<!-- Pekerjaan Ibu-->
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Pekerjaan</label>
					<div class="col-sm-10">
						<select name="workIbu" class="form-control" required="">
							<option selected disabled value="">-- Pilih --</option>
							<option value="Tidak Bekerja">Tidak Bekerja</option>
							<option value="Nelayan">Nelayan</option>
							<option value="Petani">Petani</option>
							<option value="Peternak">Peternak</option>
							<option value="PNS/TNI/POLRI">PNS/TNI/POLRI</option>
							<option value="Karyawan Swasta">Karyawan Swasta</option>
							<option value="Pedagang Kecil">Pedagang Kecil</option>
							<option value="Pedagang Besar">Pedagang Besar</option>
							<option value="Wiraswasta">Wiraswasta</option>
							<option value="Wirausaha">Wirausaha</option>
							<option value="Buruh">Buruh</option>
							<option value="Pensiunan">Pensiunan</option>
							<option value="Lainnya">Lainnya</option>
						</select>
					</div>
				</div>
				<!-- Penghasilan Ibu -->
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Penghasilan</label>
					<div class="col-sm-10">
						<select name="salIbu" class="form-control" required="">
							<option selected disabled value="">-- Pilih --</option>
							<option value="Kurang dari 500,000">Kurang dari 500,000</option>
							<option value="500,000 - 999,999">500,000 - 999,999</option>
							<option value="1 jt - 1,999,999">1 jt - 1,999,999</option>
							<option value="4,2 jt - 4,9 jt">2 jt - 4,9 jt</option>
							<option value="5,5 jt - 20 jt">5 jt - 20 jt</option>
							<option value="6 Lebih dari 20 jt">Lebih dari 20 jt</option>
						</select>
					</div>
				</div>
				<!-- Berkebutuhan Khusus Ibu -->
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Berkebutuhan Khusus</label>
					<div class="col-sm-10">
						<select name="ABKibu" class="form-control" required="">
							<option selected disabled value="">-- Pilih --</option>
							<option value="Tidak">Tidak</option>
							<option value="Netra">Netra</option>
							<option value="Rungu">Rungu</option>
							<option value="Grahita Sedang">Grahita Sedang</option>
							<option value="Daksa Ringan">Daksa Ringan</option>
							<option value="Daksa Sedang">Daksa Sedang</option>
							<option value="Laras">Laras</option>
							<option value="Wicara">Wicara</option>
							<option value="Tuna Ganda">Tuna Ganda</option>
							<option value="Hiper Aktif">Hiper Aktif</option>
							<option value="Cerdas Istimewa">Cerdas Istimewa</option>
							<option value="Bakat Istimewa">Bakat Istimewa</option>
							<option value="Kesulitan Belajar">Kesulitan Belajar</option>
							<option value="Narkoba">Narkoba</option>
							<option value="Indigo">Indigo</option>
							<option value="Down Sindrome">Down Sindrome</option>
							<option value="Autis">Autis</option>
							<option value="Lainnya">Lainnya</option>
						</select>
					</div>
				</div>
				<div class="form-group row">
					<div class="col-sm-10">
						<button type="submit" name="submit" class="btn btn-primary">Daftar</button>
						<button type="button" name="submit" class="btn btn-primary"><a style="color: white; float: right;" href="reportpendaftaran.php">Export to Excel</a></button>

					</div>
				</div>
				<div class="form-group row">
					<div class="col-sm-10">
						<button type="button" name="submit" class="btn btn-primary"><a style="color: white;" href="index.php">Lihat Data Pendaftaran</a></button>
						<button type="button" name="submit" class="btn btn-primary"><a style="color: white;" href="reportpdf.php">Export to PDF</a></button>
					</div>
				</div>
					
			</form>
		</div>
	</div>
	</div>
	</div>
	</div>
	
</body>
</html>