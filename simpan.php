<?php  
	//memanggil file koneksi.php untuk dapat terkoneksi dengan database 
	include 'conn.php';
		//menampilkan data kembali
		if(isset($_POST['submit'])) {
			$formDate					= date("Y-m-d");
			$jenis_daftar			    = $_POST['jenis_daftar'];
			$sekolahDate		    	= $_POST['sekolahDate'];
			$nis						= $_POST['nis'];
			$noPeserta					= $_POST['noPeserta'];
			$isPaud 					= $_POST['isPaud'];
			$isTk 						= $_POST['isTk'];
			$noSkhun 					= $_POST['noSkhun'];
			$noijazah 					= $_POST['noijazah'];
			$hobi 						= $_POST['hobi'];
			$cita 						= $_POST['cita'];
			$nama 			        	= $_POST['nama'];
			$gender 					= $_POST['gender'];
			$nisn 						= $_POST['nisn'];
			$nik 						= $_POST['nik'];
			$born 						= $_POST['born'];
			$bornDate					= $_POST['bornDate'];
			$agama 						= $_POST['agama'];
			$ABK 						= $_POST['ABK'];
			$alamat 					= $_POST['alamat'];
			$rt 						= $_POST['rt'];
			$rw 						= $_POST['rw'];
			$dusun 						= $_POST['dusun'];
			$desa 						= $_POST['desa'];
			$kecamatan 					= $_POST['kecamatan'];
			$idPos 						= $_POST['idPos'];
			$rumah 						= $_POST['rumah'];
			$transport 					= $_POST['transport'];
			$noHp 						= $_POST['noHp'];
			$noTelp 					= $_POST['noTelp'];
			$email 						= $_POST['email'];
			$isKip 						= $_POST['isKip'];
			$nokip					 	= $_POST['nokip'];
			$kwn 						= $_POST['kwn'];
			$ayah 						= $_POST['ayah'];
			$bornAyah 					= $_POST['bornAyah'];
			$eduAyah					= $_POST['eduAyah'];
			$workAyah 					= $_POST['workAyah'];
			$salAyah 					= $_POST['salAyah'];
			$ABKayah 					= $_POST['ABKayah'];
			$ibu 						= $_POST['ibu'];
			$bornIbu 					= $_POST['bornIbu'];
			$eduIbu 					= $_POST['eduIbu'];
			$workIbu 					= $_POST['workIbu'];
			$salIbu 					= $_POST['salIbu'];
			$ABKibu 					= $_POST['ABKibu'];
			
			//Script query untuk insert/menyimpan di database
			$query = "INSERT INTO pesertaDidik (formDate,jenis_daftar,sekolahDate,nis,noPeserta,isPaud,isTk,noSkhun,noijazah,hobi,cita,nama,gender,nisn,nik,born,bornDate,agama,ABK,alamat,rt,rw,dusun,desa,kecamatan,idPos,rumah,transport,noHp,noTelp,email,isKip,nokip,kwn,ayah,bornAyah,eduAyah,workAyah,salAyah,ABKayah,ibu,bornIbu,eduIbu,workIbu,salIbu,ABKibu) 
			VALUES ('$formDate','$jenis_daftar','$sekolahDate','$nis','$noPeserta','$isPaud','$isTk','$noSkhun','$noijazah','$hobi','$cita','$nama','$gender','$nisn','$nik','$born','$bornDate','$agama','$ABK','$alamat','$rt','$rw','$dusun','$desa','$kecamatan','$idPos','$rumah','$transport','$noHp','$noTelp','$email','$isKip','$nokip','$kwn','$ayah','$bornAyah','$eduAyah','$workAyah','$salAyah','$ABKayah','$ibu','$bornIbu','$eduIbu','$workIbu','$salIbu','$ABKibu')";
			$sql = mysqli_query($koneksi,$query);
			
			//Mengecek apakah data berhasil disimpan di database atau tidak
			if ($sql) {
				header("location:index.php");
			}else{
				echo "Error";
			}
		}
	?>