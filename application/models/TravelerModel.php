<?php
class TravelerModel extends CI_Model
{
    private $_firstName;
    private $_lastName;
    private $_type;

    public function __construct()
    {
        parent::__construct();
    }

    public function setFirstName($firstName)
    {
        $this->_firstName = $firstName;
    }

    public function getFirstName()
    {
        return $this->_firstName;
    }

    public function setLastName($lastName)
    {
        $this->_lastName = $lastName;
    }

    public function getLastName()
    {
        return $this->_lastName;
    }

    public function setType($type)
    {
        $this->_type = $type;
    }

    public function getType()
    {
        return $this->_type;
    }
}
