<?php
class Newsletter_model extends CI_Model {

    public $id;
    public $content;
    public $date;

    private $table = 'newsletter';

    public function __construct()
    {
        parent::__construct();
    }

    public function get_data()
    {
        $query = $this->db->get($this->table);

        return $query->result();
    }

    public function get_data_by_id($id)
    {
        $query = $this->db->get_where($this->table, array('id' => $id));

        $data = $query->result();

        return end($data);
    }

    public function delete_by_id($id)
    {
        $query = $this->db->delete($this->table, array('id' => $id));

        return (boolean) $query;
    }
}