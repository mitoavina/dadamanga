<?php
class ParkModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    public function selectWhere($id)
    {
        return $this->db->get_where('park', array('IDPARK' => $id))->result();
    }
    public function select()
    {
        return $this->db->get_where('park')->result();
    }
    public function delete($id)
    {
        $this->db->where('IDPARK', $id);
        $this->db->delete('park');
    }
    public function insert($path,$title){
        $data=array(
            'TITLE'=>$title,
            'IMAGE'=>$path
        );
        $this->db->insert('park',$data);
    }
    public function update($id, $title, $image)
    {
        $data = array(
            'TITLE' => $title,
            'IMAGE' => $image
        );
        $this->db->where('IDPARK', $id);
        $this->db->update('park', $data);
    }
}
