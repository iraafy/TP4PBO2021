<?php 

class Task extends DB
{	
	// Mengambil data
	function getTask()
	{
		// Query mysql select data ke tb_to_do
		$query = "SELECT * FROM tb_data";
		// Mengeksekusi query
		return $this->execute($query);
	}

	function insert($data)
	{
		$a = $data['tnama'];
		$b = $data['tnim'];
		$c = $data['tpinjam'];
		$d = $data['tjurusan'];
		$e = $data['tkelas'];
		$f = $data['tbuku'];
		$g = "Belum Mengembalikan";
		$query = "INSERT INTO tb_data (nama, nim, tgl_peminjaman, jurusan, kelas, buku, stat) VALUES ('$a', '$b', '$c', '$d', '$e', '$f', '$g')";
		return $this->execute($query);
	}

	function delete($id_hps)
	{
		$query = "DELETE FROM tb_data WHERE id = $id_hps";
		return $this->execute($query);
	}

	function update($id_edit)
	{
		$query = "UPDATE tb_data SET stat = 'Sudah Mengembalikan' WHERE id = $id_edit";
		return $this->execute($query);
	}

	function sortnama1()
	{
		$query = "SELECT * FROM tb_data ORDER BY nama ASC";
		return $this->execute($query);
	}

	function sortnama2()
	{
		$query = "SELECT * FROM tb_data ORDER BY nama DESC";
		return $this->execute($query);
	}

	function sortnim1()
	{
		$query = "SELECT * FROM tb_data ORDER BY nim ASC";
		return $this->execute($query);
	}

	function sortnim2()
	{
		$query = "SELECT * FROM tb_data ORDER BY nim DESC";
		return $this->execute($query);
	}

	function sorttgl1()
	{
		$query = "SELECT * FROM tb_data ORDER BY tgl_peminjaman ASC";
		return $this->execute($query);
	}

	function sorttgl2()
	{
		$query = "SELECT * FROM tb_data ORDER BY tgl_peminjaman DESC";
		return $this->execute($query);
	}

	function sortjurusan1()
	{
		$query = "SELECT * FROM tb_data ORDER BY jurusan ASC";
		return $this->execute($query);
	}

	function sortjurusan2()
	{
		$query = "SELECT * FROM tb_data ORDER BY jurusan DESC";
		return $this->execute($query);
	}

	function sortkelas1()
	{
		$query = "SELECT * FROM tb_data ORDER BY kelas ASC";
		return $this->execute($query);
	}

	function sortkelas2()
	{
		$query = "SELECT * FROM tb_data ORDER BY kelas DESC";
		return $this->execute($query);
	}

	function sortbuku1()
	{
		$query = "SELECT * FROM tb_data ORDER BY buku ASC";
		return $this->execute($query);
	}

	function sortbuku2()
	{
		$query = "SELECT * FROM tb_data ORDER BY buku DESC";
		return $this->execute($query);
	}

	function sortstatus1()
	{
		$query = "SELECT * FROM tb_data ORDER BY stat ASC";
		return $this->execute($query);
	}

	function sortstatus2()
	{
		$query = "SELECT * FROM tb_data ORDER BY stat DESC";
		return $this->execute($query);
	}

	function sortreset()
	{
		$query = "SELECT * FROM tb_data ORDER BY id ASC";
		return $this->execute($query);
	}
}
?>