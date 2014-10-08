<?php
class Contact{
protected $f_name="";
protected $l_name="";
protected $phone="";
protected $email="";
protected $address="";
protected $city="";
protected $zip="";
protected $isfriend="";

function set($f_name,$l_name,$phone,$email,$address,$city,$zip,$isfriend){
$this->f_name=$f_name;
$this->l_name=$l_name;
$this->phone=$phone;
$this->address=$address;
$this->city=$city;
$this->zip=$zip;
$this->isfriend=$isfriend;
}
}

?>