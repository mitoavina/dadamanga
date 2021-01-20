<?php
class TripModel extends CI_Model
{
    private $_id;
    private $_name;
    private $_price;
    private $_currency;
    private $_img;

    public function __construct()
    {
        parent::__construct();
    }

    public function getId()
    {
        return $this->_id;
    }

    public function setId($id)
    {
        $this->_id = $id;
    }

    public function getName()
    {
        return $this->_name;
    }

    public function setName($name)
    {
        $this->_name = $name;
    }

    public function getPrice()
    {
        return $this->_price;
    }

    public function setPrice($price)
    {
        $this->_price = $price;
    }

    public function getCurrency()
    {
        return $this->_currency;
    }

    public function setCurrency($currency)
    {
        $this->_currency = $currency;
    }

    public function getImg()
    {
        return $this->_img;
    }

    public function setImg($img)
    {
        $this->_img = $img;
    }
}
