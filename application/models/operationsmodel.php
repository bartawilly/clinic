<?php
class OperationsModel extends CI_Model
{
	protected $table = "operations";
	Public function __construct() 
    { 
        parent::__construct();
    }
	public function add_operation($params)
    {
        $this->db->insert($this->table,$params);
    }
	
	public function update_operation($params)
    {
      //  $this->db->query("UPDATE `operations` SET `name`='".$params['name']."',`address`='".$params['address']."',
		//                  `phone`='".$params['phone']."',`date`='".$params['date']."',`age`='".$params['age']."',`report`='".$params['report']."',`data`='".$params['data']."' WHERE `id` = '".$params['id']."'"); 
         $this->db->where('id', $params['id']);
        $this->db->update($this->table, $params);
   }
	
	public function delete_operation($id)
    {
        $this->db->query("DELETE FROM `operations` WHERE `id`=$id"); 
    }
	
	public function get_operations()
	{
		return $this->db->query("SELECT * FROM `operations` WHERE 1")->result(); 
	}
	public function get_operation_with_name($name)
	{
		return $this->db->query("SELECT * FROM `operations` WHERE `name` LIKE '$name%'")->result(); 
	}
	public function get_operation_with_id($id)
	{
		return $this->db->query("SELECT * FROM `operations` WHERE `name` LIKE '$id'")->result(); 
	}
	public function get_operation_with_year($year)
	{
		return $this->db->query("SELECT * FROM `operations` WHERE `date` LIKE '%$year'")->result(); 
	}
}