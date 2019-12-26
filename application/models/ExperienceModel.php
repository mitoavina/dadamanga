<?php
class ExperienceModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    public function selectWhere($id)
    {
        return $this->db->get_where('experience', array('IDEXPERIENCE' => $id))->result();
    }
    public function select()
    {
        return $this->db->get('experience')->result();
    }
    public function update($id, $title, $image)
    {
        $data = array(
            'TITLE' => $title,
            'IMAGE' => $image
        );
        $this->db->where('IDEXPERIENCE', $id);
        $this->db->update('experience', $data);
    }
    public function delete($id)
    {
        $this->db->where('IDEXPERIENCE', $id);
        $this->db->delete('experience');
    }
    public function insert($path, $title)
    {
        $data = array(
            'TITLE' => $title,
            'IMAGE' => $path
        );
        $this->db->insert('experience', $data);
    }
}
