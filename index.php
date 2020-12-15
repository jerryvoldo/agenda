<!-- begin PHP script -->
<?php

?>
<!-- end PHP script -->


<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="UTF-8" />
	<link href="assets/css/build/style.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<title>Agenda</title>
</head>
<body class="bg-gray-200">
<div class="container md:mx-auto">
	<!-- begin header -->
	<div class="sticky top-0 px-4 py-4 flex flex-row justify-between items-center">
		<div class="w-1/2">
			Logo Agenda
		</div>
		<div class="flex flex-row w-1/2 justify-end space-x-3 item-center">
			<button class="px-4 py-2 font-bold text-sm bg-white rounded hover:bg-gray-100 shadow">Log In</button>
		</div>
	</div>
	<!-- end header -->

	<!-- begin content -->
	<div class="py-2 flex flex-col md:flex-row">
		<!-- begin sidebar -->
		<div id="sidebar" class="md:w-2/6 md:overflow-y-auto md:h-screen hidden">
			<div id="sidebar-menu-list" class="p-4">
				<!-- begin main content of menus -->
				<div class="bg-gray-100 p-4 rounded mb-2">
					<p class="uppercase text-sm">Bentuk</p>
					<div id="bentuk" class="flex md:flex-row space-x-1 flex-wrap">
						<button data-bentuk="undangan" class="p-2 font-bold text-sm bg-white rounded hover:bg-gray-100 shadow  flex-1">Undangan</button>
						<button data-bentuk="instruksi"  class="p-2 font-bold text-sm bg-white rounded hover:bg-gray-100 shadow flex-1">Instruksi</button>
					</div>
				</div>

				<div class="bg-gray-100 p-4 rounded mb-2">
					<p class="uppercase text-sm">Lokasi</p>
					<div id="lokasi" class="flex md:flex-row space-x-1 flex-wrap">
						<button data-lokasi=2 class="p-2 font-bold text-sm bg-white rounded hover:bg-gray-100 shadow flex-1">Online</button>
						<button data-lokasi=1 class="p-2 font-bold text-sm bg-white rounded hover:bg-gray-100 shadow flex-1">Offline</button>
					</div>
				</div>

				<div class="bg-gray-100 p-4 rounded mb-2">
					<p class="uppercase text-sm">Waktu</p>
					<div id="waktu" class="flex md:flex-row space-x-1 flex-wrap">
						<button data-waktu="now" class="p-2 font-bold text-sm bg-white rounded hover:bg-gray-100 shadow flex-1">Sekarang</button>
						<button data-waktu="tomorrow" class="p-2 font-bold text-sm bg-white rounded hover:bg-gray-100 shadow flex-1">Besok</button>
					</div>
				</div>

				<div class="bg-gray-100 p-4 rounded mb-2">
					<p class="uppercase text-sm">Asal</p>
					<div id="asal" class="flex md:flex-row space-x-1 flex-wrap">
						<button data-asal="1" class="p-2 font-bold text-sm bg-white rounded hover:bg-gray-100 shadow flex-1">Internal</button>
						<button data-asal="2" class="p-2 font-bold text-sm bg-white rounded hover:bg-gray-100 shadow flex-1">Eksternal</button>
					</div>
				</div>

				<div class="bg-gray-100 p-4 rounded mb-2">
					<p class="uppercase text-sm">Disposisi ke</p>
					<div class="flex flex-col space-y-2">
						<div id="disposisi-ke-1" class="flex flex-row flex-1 space-x-1 flex-wrap">
							<button data-disposisi-ke="1" class="flex-1 p-2 font-bold text-sm bg-white rounded hover:bg-gray-100 shadow flex-1">PRR</button>
							<button data-disposisi-ke="2" class="flex-1 p-2 font-bold text-sm bg-white rounded hover:bg-gray-100 shadow flex-1">PRS</button>
							<button data-disposisi-ke="3" class="flex-1 p-2 font-bold text-sm bg-white rounded hover:bg-gray-100 shadow flex-1">Eximik</button>
							<button data-disposisi-ke="4" class="flex-1 p-2 font-bold text-sm bg-white rounded hover:bg-gray-100 shadow flex-1">TOP</button>
						</div>
						<div id="disposisi-ke-2" class="flex flex-row flex-1 space-x-1 flex-wrap">
							<button data-disposisi-ke="5" class="flex-1 p-2 font-bold text-sm bg-white rounded hover:bg-gray-100 shadow flex-1">MR</button>
							<button data-disposisi-ke="6" class="flex-1 p-2 font-bold text-sm bg-white rounded hover:bg-gray-100 shadow flex-1">AI</button>
							<button data-disposisi-ke="7" class="flex-1 p-2 font-bold text-sm bg-white rounded hover:bg-gray-100 shadow flex-1">SPIP</button>
							<button data-disposisi-ke="8" class="flex-1 p-2 font-bold text-sm bg-white rounded hover:bg-gray-100 shadow flex-1">PPK</button>
						</div>
						<div id="disposisi-ke-3" class="flex flex-row flex-1 space-x-1 flex-wrap">
							<button data-disposisi-ke="9" class="flex-1 p-2 font-bold text-sm bg-white rounded hover:bg-gray-100 shadow flex-1">AOC</button>
							<button data-disposisi-ke="10" class="flex-1 p-2 font-bold text-sm bg-white rounded hover:bg-gray-100 shadow flex-1">Tim Medsos</button>
						</div>
						<div  id="disposisi-ke-4" class="">
							<select data-disposisi-ke="11" class="w-full p-2 bg-white shadow rounded">
								<option>Nama 1</option>
								<option>Nama 2</option>
								<option>Nama 3</option>
							</select>
						</div>
					</div>
				</div>

				<div class="bg-gray-100 p-4 rounded mb-2">
					<p class="uppercase text-sm">Output</p>
					<div id="output" class="flex md:flex-row space-x-1 flex-wrap">
						<button data-output=1 class="p-2 font-bold text-sm bg-white rounded hover:bg-gray-100 shadow flex-1">Notulen</button>
						<button data-output=2 class="p-2 font-bold text-sm bg-white rounded hover:bg-gray-100 shadow flex-1">PoA</button>
						<button  data-output=3 class="p-2 font-bold text-sm bg-white rounded hover:bg-gray-100 shadow flex-1">Rancangan</button>
						<button  data-output=4 class="p-2 font-bold text-sm bg-white rounded hover:bg-gray-100 shadow flex-1">Lainnya</button>
					</div>
				</div>
				
				<div class="bg-gray-100 p-4 rounded mb-2">
					<p class="uppercase text-sm">Sifat</p>
					<div id="sifat" class="flex md:flex-row space-x-1 flex-wrap">
						<button  data-sifat=1 class="p-2 font-bold text-sm bg-white rounded hover:bg-gray-100 shadow flex-1">Super Urgent</button>
						<button  data-sifat=2 class="p-2 font-bold text-sm bg-white rounded hover:bg-gray-100 shadow flex-1">Urgent</button>
						<button   data-sifat=3 class="p-2 font-bold text-sm bg-white rounded hover:bg-gray-100 shadow flex-1">Reguler</button>
						<button   data-sifat=4 class="p-2 font-bold text-sm bg-white rounded hover:bg-gray-100 shadow flex-1">Non Prioritas</button>
					</div>
				</div>

				<div class="bg-gray-100 p-4 rounded mb-2">
					<p class="uppercase text-sm">Status</p>
					<div id="status" class="flex md:flex-row space-x-1 flex-wrap">
						<button data-jadwal=1 class="p-2 font-bold text-sm bg-white rounded hover:bg-gray-100 shadow flex-1">Terjadwal</button>
						<button data-jadwal=2 class="p-2 font-bold text-sm bg-white rounded hover:bg-gray-100 shadow flex-1">Selesai</button>
						<button data-jadwal=3 class="p-2 font-bold text-sm bg-white rounded hover:bg-gray-100 shadow flex-1">Batal</button>
						<button data-jadwal=4 class="p-2 font-bold text-sm bg-white rounded hover:bg-gray-100 shadow flex-1">Ditunda</button>
					</div>
				</div>
				<!-- end main content of menus -->
			</div>
		</div>
		<!-- end sidebar -->

		<!-- begin main content-->
		<div id="main-content" class="flex-grow md:overflow-y-auto md:h-screen">
			<div class="p-4">
				<!-- begin space for submenu or special announcement or advertisment -->
				<div class="">
					<button id="btn-filter" class="bg-green-500 text-white py-1 px-5  rounded shadow hover:bg-green-700">Filters</button>
				</div>
				<!-- end space for submnenu -->

				<!-- begin real content -->
				<div class="mt-2">
					<div class="p-4 rounded mb-2 bg-white shadow flex flex-col md:flex-row space-x-3 justify-items-start">
						<div class="">
							<p class="md:text-xl text-base font-light">#1</p>
						</div>
						<div class="flex flex-col space-y-3 mt-1">
							<div class="uppercase font-light">Undangan</div>
							<div class="font-bold capitalize">Kepala PPSDM <span class="ml-2 bg-gray-400 text-white text-sm rounded-lg px-2">internal</span> </div>
							<div class="capitalize font-light text-sm">
								8 Desember 2020 - 11 Desember 2020 
								<span class="bg-green-400 text-white font-bold text-sm capitalize px-2 rounded-lg">Terjadwal</span>
								<span class="ml-2 bg-gray-400 text-white font-bold text-sm rounded-lg px-2">Reguler</span>
							</div>
							<div class="capitalize font-bold md:text-3xl text-base">
								Informasi Kegiatan Pelatihan Editing Video
							</div>
							<div class="flex md:flex-row flex-col">
								<div>Hotel Harris Vertu Harmoni</div>
								<div>08.30 s.d. selesai</div>
							</div>
							<div>
								<p>Trisna</p>
								<div>
									<p>Notulen</p>
								</div>
							</div>
						</div>
					</div>

					<div class="p-4 rounded mb-2 bg-white shadow">
						<div>
							<p>1.</p>
						</div>
						<p>Undangan</p>
						<p>Kepala PPSDM <span>internal</span> </p>
						<p>
							8 Desember 2020 - 11 Desember 2020 
							<span>Terjadwal</span>
							<span>Reguler</span>
						</p>
						<p>
							Informasi Kegiatan Pelatihan Editing Video
						</p>
						<div>
							<p>Hotel Harris Vertu Harmoni</p>
							<p>08.30 s.d. selesai</p>
						</div>
						<div>
							<p>Trisna</p>
							<div>
								<p>Notulen</p>
							</div>
						</div>
					</div>
				</div>
				<!-- end real content -->
			</div>
		</div>
		<!-- end main content -->
	</div>
	<!-- end content -->

	<!-- begin footer -->
	<div></div>
	<!-- end footer -->
</div>

<script>
	var conditions=[];
	$(document).ready(function(){
		$("#btn-filter").click(function(){
			$("#sidebar").toggleClass("hidden");
		});


		$('#bentuk > button').click(function(){
			conditions.push($(this).data('bentuk'));
			console.log(conditions);
		});

		$('#lokasi > button').click(function(){
			conditions.push($(this).data('lokasi'));
			console.log(conditions);
		});

		$('#waktu > button').click(function(){
			conditions.push($(this).data('waktu'));
			console.log(conditions);
		});

		$('#asal > button').click(function(){
			conditions.push($(this).data('asal'));
			console.log(conditions);
		});

		$('#disposisi-ke-1 > button').click(function(){
			conditions.push($(this).data('disposisi-ke'));
			console.log(conditions);
		});

		$('#disposisi-ke-2 > button').click(function(){
			conditions.push($(this).data('disposisi-ke'));
			console.log(conditions);
		});

		$('#disposisi-ke-3 > button').click(function(){
			conditions.push($(this).data('disposisi-ke'));
			console.log(conditions);
		});

		$('#disposisi-ke-4 > select').click(function(){
			conditions.push($(this).data('disposisi-ke'));
			console.log(conditions);
		});

		$('#output > button').click(function(){
			conditions.push($(this).data('output'));
			console.log(conditions);
		});

		$('#sifat > button').click(function(){
			conditions.push($(this).data('sifat'));
			console.log(conditions);
		});

		$('#status > button').click(function(){
			conditions.push($(this).data('jadwal'));
			console.log(conditions);
		});
	})
	
</script>
</body>
</html>