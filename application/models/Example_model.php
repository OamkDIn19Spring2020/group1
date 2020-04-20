<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Example_model extends CI_Model{
  private $name='Bob';
  private $students=array(
    array('fn'=>'Lisa', 'ln'=>'Smith'),
    array('fn'=>'Jim', 'ln'=>'Jones'),
    array('fn'=>'Ann', 'ln'=>'Smith')
  );
  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }
  public function getName(){
    return $this->name;
  }
  public function getStudents(){
    return $this->students;
  }

}
