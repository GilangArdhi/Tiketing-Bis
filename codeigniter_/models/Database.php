<?php
class Database extends CI_Model
{
    public function insert_data($table, $data)
    {
        $query = "INSERT INTO users (email, nama, pass) VALUES (?, ?, ?)";
        $this->db->query($query, $data);
        return ($this->db->affected_rows() > 0);

        // $this->db->insert($table, $data);
        // return $this->db->insert_id();
    }
    public function emailLogin($userEmail, $userPass)
    {
        $this->db->select('email, nama, pass'); 
        $this->db->where('email', $userEmail);
        $this->db->where('pass', $userPass);
        $query = $this->db->get('users');
        return $query->row();
    }

}