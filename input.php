<?php
	
	if ($_SERVER['REQUEST_METHOD'] === 'POST')
	{
		if(isset($_POST))
		{
			if( !empty(trim($_POST["asal_instansi_unit"])) && 
				!empty(trim($_POST["tanggal_mulai"])) &&  
				!empty(trim($_POST["jam_mulai_selesai"])) &&
				!empty(trim($_POST["judul"])) &&
				!empty(trim($_POST["lokasi"])) &&
				!empty(trim($_POST["catatan_lokasi"])) &&
				!empty(trim($_POST["catatan_disposisi"])) &&
				!empty(trim($_POST["sifat_agenda"])) &&
				!empty(trim($_POST["output"])) &&
				!empty(trim($_POST["catatan_output"])) &&
				!empty(trim($_POST["asal"])) &&
				!empty(trim($_POST["bentuk_agenda"])) &&
				!empty($_POST["disposisi_ke"])
			)
				{
					// ambil data dari form
					$data = array(
						'asal'=>$_POST["asal_instansi_unit"],
						'epoch_mulai'=>strtotime($_POST["tanggal_mulai"]),
						'epoch_selesai'=>strtotime($_POST["tanggal_selesai"]),
						'jam_mulai_selesai'=>$_POST["jam_mulai_selesai"],
						'judul_kegiatan'=>$_POST["judul"],
						'lokasi'=>$_POST["lokasi"],
						'catatan_lokasi'=>$_POST["catatan_lokasi"],
						'catatan_disposisi'=>$_POST["catatan_disposisi"],
						'url_online'=>null,
						'sifat_kegiatan'=>$_POST["sifat_agenda"],
						'status_kegiatan'=>1,
						'catatan_status_kegiatan'=>null,
						'output_kegiatan'=>$_POST["output"],
						'catatan_output'=>$_POST["catatan_output"],
						'epoch_input_kegiatan'=>time(),
						'id_petugas_input_kegiatan'=>null,
						'kategori_asal'=>$_POST["asal"],
						'bentuk_jadwal'=>$_POST["bentuk_agenda"],
						'disposisi'=>json_encode($_POST["disposisi_ke"])
					);
					var_dump($data);

					// connect and select database
					$dbconn = pg_connect("host=localhost dbname=ag user=jerry password=heliumvoldo123456") or die('Gagal terkoneksi; '.pg_last_error());

					$res = pg_insert($dbconn, 'ag_agenda', $data);
					if ($res) {
						echo 'Data berhasil disimpan';
					}
					else
					{
						echo 'Data gagal disimpan';
					}
					$hidden = '';
				}
			else 
			{
				echo 'Belum lengkap data diisi';
				exit();
			}
		}
		
		// 
	}
	


	if ($_SERVER['REQUEST_METHOD'] === 'GET') {
		$hidden = 'hidden';
	}
?>


<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="UTF-8" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<link href="assets/css/build/style.css" rel="stylesheet">

	<title>Input Agenda</title>
</head>
<body class="bg-gray-100">

<!-- begin header -->
<div class="sticky top-0 px-4 py-4 flex flex-row justify-between items-center bg-gray-300 rounded mb-4">
	<div class="w-1/2">
		Logo Agenda
	</div>
	<div class="flex flex-row w-1/2 justify-end space-x-3 item-center">
		<button class="px-4 py-2 font-bold text-sm bg-white rounded hover:bg-gray-100 shadow">Log Out</button>
	</div>
</div>
<!-- end header -->

<!-- begin main content -->
<div class="main_content_wrapper container mx-auto mb-10 md:w-1/2">
	<div class="bg-white p-4 rounded-xl shadow text-center uppercase text-xl md:text-2xl lg:text-3xl font-bold mb-4">Input Data Agenda</div>
	<div class="bg-white p-4 rounded-xl shadow text-center text-green-500 capitalize font-3xl font-semibold mb-4 <?=$hidden?>">Agenda berhasil disimpan!</div>
	<div class="main_content_subwrapper">
		<form method="POST" action="#" class="flex flex-col space-y-3">
			<div class="p-4 bg-white rounded-xl shadow">
				<p class="mb-2 uppercase font-light font-sm"><label>Bentuk agenda</label></p>
				<div class="flex flex-col md:flex-row justify-start md:items-center  md:space-x-3">
					<div>
						<input type="radio" name="bentuk_agenda" value="1" checked class="">
						<label class="">Undangan</label>
					</div>
					<div>
						<input type="radio" name="bentuk_agenda" value="2" class="">
						<label class="">Instruksi</label>
					</div>
				</div>
			</div>
			<div class="p-4 bg-white rounded-xl shadow">
				<p class="mb-2 uppercase font-light font-sm"><label>Sifat agenda</label></p>
				<div class="flex flex-col md:flex-row justify-start md:items-center md:space-x-3">
					<div class="">
						<input type="radio" name="sifat_agenda" value="1" checked>
						<label>Super Urgent</label>
					</div>
					<div class="">
					<input type="radio" name="sifat_agenda" value="2">
					<label>Urgent</label>
					</div>
					<div class="">
					<input type="radio" name="sifat_agenda" value="3">
					<label>Reguler</label>
					</div>
					<div class="">
					<input type="radio" name="sifat_agenda" value="4">
					<label>Non Prioritas</label>
					</div>
				</div>
			</div>
			<div class="p-4 bg-white rounded-xl shadow">
				<p class="mb-2 uppercase font-light font-sm"><label>Asal Undangan</label></p>
				<div class="flex flex-col md:flex-row justify-start md:items-center md:space-x-3">
					<div>
						<input type="radio" name="asal" value="1" checked>
						<label>Internal</label>
					</div>
					<div>
						<input type="radio" name="asal" value="2">
						<label>Eksternal</label>
					</div>
				</div>
			</div>
			<div class="p-4 bg-white rounded-xl shadow">
				<p class="mb-2 uppercase font-light font-sm"><label>Asal Instansi/Unit</label></p>
				<div class="text-center">
					<input class="w-full border rounded border-black p-2" type="text" name="asal_instansi_unit">
				</div>
			</div>
			<div class="p-4 bg-white rounded-xl shadow">
				<p class="mb-2 uppercase font-light font-sm"><label>Judul Undangan</label></p>
				<div class="">
					<textarea class="border border-gray-700 p-4 rounded w-full text-sm" rows="4" name="judul" rows="4"></textarea>
				</div>
			</div>
			<div class="p-4 bg-white rounded-xl shadow">
				<p class="mb-2 uppercase font-light font-sm"><label>Tanggal Agenda</label></p>
				<div class="text-center w-full flex-col md:flex md:flex-row md:justify-evenly md:items-center md:space-x-3">
					<input class=" border rounded border-black p-2" type="date" name="tanggal_mulai"> 
					<div class="md:mx-2 my-3">s.d.</div> 
					<input class=" border rounded border-black p-2" type="date" name="tanggal_selesai">
				</div>
			</div>
			<div class="p-4 bg-white rounded-xl shadow">
				<p class="mb-2 uppercase font-light font-sm"><label>Jam Agenda</label></p>
				<div class="text-center">
					<input class="w-full border rounded border-black p-2" type="text" name="jam_mulai_selesai" placeholder="mis: 08.30 s.d. 10.00">
				</div>
			</div>
			<div class="p-4 bg-white rounded-xl shadow">
				<p class="mb-2 uppercase font-light font-sm"><label>Lokasi</label></p>
				<div class="flex flex-col md:flex-row justify-start md:items-center md:space-x-3">
					<div>
						<input type="radio" name="lokasi" value="1" checked>
						<label>Offline</label>
					</div>
					<div>
						<input type="radio" name="lokasi" value="2">
						<label>Online</label>
					</div>
				</div>
			</div>
			<div class="p-4 bg-white rounded-xl shadow">
				<p class="mb-2 uppercase font-light font-sm"><label>Catatan Lokasi</label></p>
				<div class="">
					<textarea class="border border-gray-700 p-4 rounded w-full text-sm" rows="4" name="catatan_lokasi" rows="4"></textarea>
				</div>
			</div>
			<div class="p-4 bg-white rounded-xl shadow">
				<p class="mb-2 uppercase font-light font-sm"><label>Disposisi Ke</label></p>
				<div class="flex flex-col items-center">
					<div class="w-full">
						<select class="border-2 border-gray-300 bg-white text-black font-sm p-2 w-full" name="disposisi_ke[]" multiple="multiple">
							<option value="1">PRR</option>
							<option value="2">PRS</option>
							<option value="3">EXIMIK</option>
							<option value="4">TOP</option>
							<option value="5">MR</option>
							<option value="6">AI</option>
							<option value="7">SPIP</option>
							<option value="8">PPK</option>
							<option value="9">AOC</option>
							<option value="10">Tim Medsos</option>
						</select>
					</div>
					<p class="mt-2 mb-2 text-center">dan/atau</p>
					<div class="w-full">
						<select name="disposisi_ke[]" multiple="multiple" class="border-2 border-gray-300 bg-white text-black font-sm p-2 w-full">
							<option value="198411172015021002">Jerry</option>
							<option value="198411172015021002">Anto</option>
						</select>
					</div>
				</div>
			</div>
			<div class="p-4 bg-white rounded-xl shadow">
				<p class="mb-2 uppercase font-light font-sm"><label>Catatan Disposisi</label></p>
				<p class="">
					<textarea class="border border-gray-700 p-4 rounded w-full text-sm" rows="4"  name="catatan_disposisi" rows="4"></textarea>
				</p>
			</div>
			<div class="p-4 bg-white rounded-xl shadow">
				<p class="mb-2 uppercase font-light font-sm"><label>Output</label></p>
				<div class="flex flex-col md:flex-row justify-start items-center space-x-3">
					<div>
						<input type="checkbox" name="output" value="1" checked>
						<label>Notulen</label>
					</div>
					<div>
						<input type="checkbox" name="output" value="2">
						<label>PoA</label>
					</div>
					<div>
						<input type="checkbox" name="output" value="3">
						<label>Lainnya</label>
					</div>
				</div>
			</div>
			<div class="p-4 bg-white rounded-xl shadow">
				<p class="mb-2 uppercase font-light font-sm"><label>Catatan Output</label></p>
				<div class="">
					<textarea class="border border-gray-700 p-4 rounded w-full text-sm" rows="4"  name="catatan_output" rows="4"></textarea>
				</div>
			</div>
			<div class="p-4 bg-gray-200 rounded-xl shadow text-center">
				<button class="px-3 py-2 bg-green-500 text-white rounded shadow mr-4" type="submit">Simpan</button>
				<button class="px-3 py-2 bg-gray-600 text-white rounded shadow" type="reset">Reset</button>
			</div>
		</form>
	</div>
</div>
<!-- end main content -->

</body>
</html>