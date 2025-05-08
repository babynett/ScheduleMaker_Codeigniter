<?php 

class CorModel extends CI_Model
{
    public function insertCor($data)
    {
        return $this->db->insert('cor_files', $data);
    }
}

?>