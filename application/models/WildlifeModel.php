<?php
class WildlifeModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    public function selectWhere($id)
    {
        return $this->db->get_where('wildlife', array('IDWILDLIFE' => $id))->result();
    }
    public function select()
    {
        return $this->db->get_where('wildlife')->result();
    }
    public function update($id, $title, $image)
    {
        $data = array(
            'TITLE' => $title,
            'IMAGE' => $image
        );
        $this->db->where('IDWILDLIFE', $id);
        $this->db->update('wildlife', $data);
    }
    public function delete($id)
    {
        $this->db->where('IDWILDLIFE', $id);
        $this->db->delete('wildlife');
    }
    public function insert($path, $title)
    {
        $data = array(
            'TITLE' => $title,
            'IMAGE' => $path
        );
        $this->db->insert('wildlife', $data);
    }
}
