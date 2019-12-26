<?php
class DestinationModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    public function selectWhere($name)
    {
        return $this->db->get_where('destination', array('NAME' => $name))->result();
    }
    public function select()
    {
        return $this->db->get('destination')->result();
    }
    public function selectOther($name)
    {
        return $this->db->get_where('destination', array('NAME != ' => $name))->result();
    }
    public function update($id, $title, $image, $description, $information, $amount)
    {
        $data = array(
            'TITLE' => $title,
            'IMAGE' => $image,
            'DESCRIPTION' => $description,
            'INFORMATION' => $information,
            'AMOUNT' => $amount
        );
        $this->db->where('IDDESTINATION', $id);
        $this->db->update('destination', $data);
    }
}
