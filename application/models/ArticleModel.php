<?php
class ArticleModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    function getAllArticle($page = 1)
    {
        $nbArticleToShow = 3;
        $this->db->from('dm_article');
        $this->db->order_by("update_date", "desc");
        $this->db->limit($nbArticleToShow, ($nbArticleToShow * ($page  - 1)));
        return $this->db->get()->result();
    }

    public function selectWhere($id)
    {
        return $this->db->get_where('dm_article', array('id' => $id))->result()[0];
    }
}
