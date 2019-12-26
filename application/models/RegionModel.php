<?php
class RegionModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    public function select($id)
    {
        return $this->db->get_where('region', array('IDREGION' => $id))->result();
    }
    public function selectWhere($destination)
    {
        return $this->db->get_where('region', array('IDDESTINATION' => $destination))->result();
    }
    public function update($id, $titre, $image, $idRegion)
    {
        $data = array(
            'TITRE' => $titre,
            'IMAGE' => $image,
            'IDDESTINATION' => $idRegion
        );
        $this->db->where('IDREGION', $id);
        $this->db->update('region', $data);
    }
}
