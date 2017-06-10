<?php
class EmployeeModel extends CI_Model
{
	protected $table = "employee";
	Public function __construct() 
    { 
        parent::__construct();

    }
	public function add_employee($params)
    {
        $this->db->insert($this->table,$params);
    }
	public function get_employee($params)
    {
        return $this->db->query("SELECT * FROM `employee` WHERE `name`='".$params['username']."' and `password`='".$params['password']."'")->result(); 
    }
	public function get_employee_by_name($name)
    {
		return $this->db->query("SELECT * FROM `employee` WHERE `name` LIKE '$name%'")->result(); 
	}
	public function update_employee($params)
    {
        //$this->db->query("UPDATE `employee` SET `name`='".$params['name']."',`username`='".$params['username']."',`password`='".$params['password']."' WHERE `name`='".$params['name']."'")->result(); 
        $this->db->where('name', $params['username']);
        $this->db->update($this->table, $params);
	
	}
	public function delete_employee($name)
    {
        $this->db->query("DELETE FROM `employee` WHERE `name`=$name")->result(); 
    }
	public function get_employees()
	{
		return $this->db->query("SELECT * FROM `employee` WHERE 1")->result(); 
	}
	
}