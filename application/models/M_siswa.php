<?php
class M_Siswa extends CI_Model
{
    public function tambah($table, $file)
    {
        return $this->db->insert($table, $file);
    }
    public function tampil($table)
    {
        return $this->db->get($table);
    }
    public function tampil_id($table, $id)
    {
        return $this->db->get_where($table, $id);
    }
    public function join($table, $tbljoin, $join)
    {
        $this->db->join($tbljoin, $join);
        return $this->db->get($table);
    }
    public function join2() {
        $this->db->select('*');
        $this->db->from('tb_siswa');
        $this->db->join('tb_kelas', 'tb_kelas.id_kelas=tb_siswa.id_kelas');
        $this->db->join('tb_buku', 'tb_buku.id_buku=tb_siswa.id_buku');
        $query = $this->db->get();
        return $query->result();   
    }
}