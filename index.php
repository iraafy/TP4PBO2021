<?php

include("conf.php");
include("includes/Template.class.php");
include("includes/DB.class.php");
include("includes/Task.class.php");

// Membuat objek dari kelas task
$otask = new Task($db_host, $db_user, $db_password, $db_name);
$otask->open();
$data = null;
$no = 1;

if(isset($_POST['ascNama']))
{
	$otask->sortnama1();
}
else if(isset($_POST['descNama']))
{
	$otask->sortnama2();
}
else if(isset($_POST['ascNim']))
{
	$otask->sortnim1();
}
else if(isset($_POST['descNim']))
{
	$otask->sortnim2();
}
else if(isset($_POST['ascTgl']))
{
	$otask->sorttgl1();
}
else if(isset($_POST['descTgl']))
{
	$otask->sorttgl2();
}
else if(isset($_POST['ascJur']))
{
	$otask->sortjurusan1();
}
else if(isset($_POST['descJur']))
{
	$otask->sortjurusan2();
}
else if(isset($_POST['ascKel']))
{
	$otask->sortkelas1();
}
else if(isset($_POST['descKel']))
{
	$otask->sortkelas2();
}
else if(isset($_POST['ascBuku']))
{
	$otask->sortbuku1();
}
else if(isset($_POST['descBuku']))
{
	$otask->sortbuku2();
}
else if(isset($_POST['ascStat']))
{
	$otask->sortstatus1();
}
else if(isset($_POST['descStat']))
{
	$otask->sortstatus2();
}
else if(isset($_POST['reset']))
{
	$otask->sortreset();
}
else
{
	$otask->getTask();
}

while (list($id, $tnama, $tnim, $tpinjam, $tjurusan, $tkelas, $tbuku, $tstatus) = $otask->getResult()) {
	if($tstatus == "Belum Mengembalikan"){
		$data .= "<tr>
			<td>" . $no . "</td>
			<td>" . $tnama . "</td>
			<td>" . $tnim . "</td>
			<td>" . $tpinjam . "</td>
			<td>" . $tjurusan . "</td>
			<td>" . $tkelas . "</td>
			<td>" . $tbuku . "</td>
			<td> <a class='btn btn-warning' href='index.php?id_edit=" . $id . "' style='color: white;'>Kembalikan</a> </td>
			<td>
				<a class='btn btn-danger' href='index.php?id_hapus=" . $id . "' style='color: white;'>Hapus</a>
			</td>    
			</tr>";
		$no++;
	}
	else
	{
		$data .= "<tr>
			<td>" . $no . "</td>
			<td>" . $tnama . "</td>
			<td>" . $tnim . "</td>
			<td>" . $tpinjam . "</td>
			<td>" . $tjurusan . "</td>
			<td>" . $tkelas . "</td>
			<td>" . $tbuku . "</td>
			<td>" . $tstatus . "</td>
			<td>
				<a class='btn btn-danger' href='index.php?id_hapus=" . $id . "' style='color: white;'>Hapus</a>
			</td>    
			</tr>";
		$no++;
	}
}

if(isset($_POST['add']))
{
	$otask->insert($_POST);
	header("Location:index.php");
}

if(isset($_GET['id_hapus']))
{
	$id_hps = $_GET['id_hapus'];
	$otask->delete($id_hps);
	unset($_GET['id_hapus']);
	header("Location: index.php");
}

if(isset($_GET['id_edit']))
{
	$id_edit = $_GET['id_edit'];
	$otask->update($id_edit);
	unset($_GET['id_edit']);
	header("Location: index.php");
}

$otask->close();

// Membaca template skin.html
$tp4 = new Template("templates/skin.html");

// // Mengganti kode Data_Tabel dengan data yang sudah diproses
$tp4->replace("DATA_TABEL", $data);

// Menampilkan ke layar
$tp4->write();
?>