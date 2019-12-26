<?php
class PageModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function select($id)
    {
        $result = $this->db->get_where('page', array('IDPAGE' => $id))->result();
        return $result[0];
    }

    public function update($id, $name, $info)
    {
        $data = array(
            'NAME' => $name,
            'INFORMATION' => $info
        );
        $this->db->where('IDPAGE', $id);
        $this->db->update('page', $data);
    }

    public function addInformation($id)
    {
        $data = $this->select($id);
        $information = $data->INFORMATION;

        return json_decode($information);
    }
}
