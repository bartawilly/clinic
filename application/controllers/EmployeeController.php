<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
include 'excel_reader.php';
class EmployeeController extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('employeemodel');
    $this->load->model('OperationsModel');
	
    }
	public function addemp()
	{
		$this->load->view('Employees/addemployee');
	}
	public function operation_view()
	{
		$data['operations']=$this->OperationsModel->get_operations();
		
		 $this->load->view('Operation/operation',$data);
	}
	public function add_employee()
	{
	    $params['name'] = $this->input->post('name');
        $params['date'] = $this->input->post('date');
        $params['type'] = $this->input->post('type');
	    $params['right'] = $this->input->post('right');
        $params['left'] = $this->input->post('left');
        $params['companyName'] = $this->input->post('companyName');
	    $params['Id'] = $this->input->post('Id');
	    $params['phone'] = $this->input->post('phone');
	    
		$this->employeemodel->add_employee($params); 
        $this->get_employees();	
	}
	public function login()
	{		
                   $this->load->view('Operation/operation');
	}
	public function logout()
	{
		 header('location:'.$this->config->base_url());
	}
	
	public function print_employee_table($employees)
	{
		
		$table_body = '
		<table class="table-stripped table-hover tabel-bordered output" id="employeesTable">
						<thead>
							<tr>
							    <th>رقم الملف </th>
								<th>الاسم</th>
								<th>رقم التليفون</th>
								<th>التاريخ</th>
								<th>نوع العمليه</th>
								<th>اليمنى</th>
								<th>اليسرى</th>
								<th>أسم الشركه</th>
								<th>حذف</th>
									
							</tr>
						</thead>
						<tbody>
					
			
					
					';
		foreach ($employees as $Instance)
        {
			
			$table_body .= "<tr>";
             $table_body .= "<td>$Instance->Id</td>";
			$table_body .= "<td>$Instance->name</td>";
            $table_body .= "<td>$Instance->phone</td>";
			$table_body .= "<td>$Instance->date</td>";
            $table_body .= "<td>$Instance->type</td>";
            $table_body .= "<td>$Instance->right</td>";
			$table_body .= "<td>$Instance->left</td>";
            $table_body .= "<td>$Instance->companyName</td>";
            
			$table_body .= '<td> <a type="button" class="delete-emp" data-toggle="modal" data-target="#Delete"  data-name='.$Instance->name.'><i class="fa fa-trash" aria-hidden="true"></i></a> </td>';
   				
			$table_body .= "</tr>";
		}	
		$table_body .= "</tbody>";
		$table_body .= "</table>";
		echo $table_body;
	}
	public function get_employees()
	{
		$employees = $this->employeemodel->get_employees();
		$this-> print_employee_table($employees);	
		
	}
	
	public function get_employee_by_name()
	{
		
		$name= $this->input->post('name');
		$employees = $this->employeemodel->get_employee_by_name($name);
		if( count ($employees) !=0)
		{
			$this-> print_employee_table($employees);	  
		}
		else
		{
			$this->get_employees();
		}

	}
	
	public function delete_employee()
	{
		$name = $this->input->post('empName');
		$this->employeemodel->delete_employee($name);
		$this->get_employees();
	}
	
	
}