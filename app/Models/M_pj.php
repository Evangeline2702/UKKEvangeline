<?php

namespace App\Models;
use CodeIgniter\Model;

class M_pj extends Model
{
	public function tampil($tabel)
	{
		return $this->db->table($tabel)
						->get()
						->getResult();
	}
	public function filter ($table, $where)
	{
		return $this->db->table($table)->getWhere($where)->getResult();
	}
	public function filter2($table, $awal, $akhir)
	{
		return $this->db->query(
			"SELECT * 
			 FROM ".$table."
			 JOIN barang
			 ON ".$table.".id_brg=barang.id_brg
			 WHERE ".$table.".Tanggal
			 BETWEEN '".$awal."'
			 and '".$akhir."'"
		
		)->getResult();
	}
	public function filter4($table, $awal, $akhir)
	{
		return $this->db->query(
			"SELECT * 
			 FROM ".$table."
			 WHERE ".$table.".Tanggal
			 BETWEEN '".$awal."'
			 and '".$akhir."'"
		
		)->getResult();
	}
	public function filter3($table, $awal, $akhir)
	{
		return $this->db->query(
			"SELECT * 
			 FROM ".$table."
			 WHERE ".$table.".Tanggal
			 BETWEEN '".$awal."'
			 and '".$akhir."'"
		
		)->getResult();
	}
	public function hapus($table, $where)
	{
		return $this->db->table($table)
						->delete($where);
	}
	public function simpan($table, $data)
	{
		return $this->db->table($table)
						->insert($data);
	}
	public function getWhere($table, $where)
	{
		return $this->db->table($table)
						->getWhere($where)
						->getRow();
	}
	public function edit($table, $data, $where)
	{
		return $this->db->table($table)
						->update($data, $where);
	}
	public function getarray($table, $where)
	{
		return $this->db->table($table)
						->getWhere($where)
						->getRowArray();
	}
	public function fusion($table1, $table2, $on)
	{
		return $this->db->table($table1)
						->join($table2, $on)
						->get()
						->getResult();
	}
	public function super($table1, $table2, $table3, $on,  $on2)
	{
		return $this->db->table($table1)
						->join($table2, $on, 'left')
						->get()
						->getResult();
	}
	public function ultra($table1, $table2, $table3, $table4, $on, $on2, $on3)
	{
		return $this->db->table($table1)
						->join($table2, $on, 'left')
						-> join($table3, $on2, 'left')
						->join($table4, $on3, 'left')
						->get()
						->getResult();
	}
	public function ultra_bayar($table1, $table2, $table3, $table4, $on, $on2, $on3, $where)
	{
		return $this->db->table($table1)
						->join($table2, $on, 'left')
						->join($table3, $on2, 'left')
						->join($table4, $on3, 'left')
						->getWhere($where)
						->getResult();
	}
}