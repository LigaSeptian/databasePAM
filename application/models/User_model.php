<?php
class User_model extends CI_Model
{
    private $table_name = 'users';
    function __construct()
    {
        parent::__construct();
    }

    public function add_user($data)
    {
        $this->db->insert($this->table_name, $data);
    }
}
