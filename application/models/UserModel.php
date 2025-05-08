<?php 

class UserModel extends CI_Model
{
    public function registerUser($data)
    {
        return $this->db->insert('user_info', $data);
    }

    public function loginUser($data)
    {
        $this->db->select('*');
        $this->db->where('stud_num', $data['stud_num']);
        $this->db->where('pass', $data['pass']);
        $this->db->from('user_info');
        $this->db->limit(1);
        $query = $this->db->get();
        if($query->num_rows()==1)
        {
            return $query->row();
        }
        else{
            return false;
        }
    }
}

?>