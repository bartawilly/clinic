<?php
class OperationsController extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
               $this->load->model('employeemodel');
    $this->load->model('OperationsModel');
	
		require_once "PHPExcel.php";
    }
    public function addjson()
    {
                  $params['name'] = $this->input->post('user');
		   $params['age'] = $this->input->post('pw');
		
$this->OperationsModel->add_operation($params);


    }
	public function add_operation()
	{
		$date = $this->input->post('date');
		$params['id'] = $this->input->post('id');
	    $params['address'] = $this->input->post('address');
        $params['age'] = $this->input->post('age');
        $params['date'] = $date;
        $params['name'] = $this->input->post('name');
        $params['phone'] = $this->input->post('phone');
		$params['price'] = $this->input->post('data');
	    $this->OperationsModel->add_operation($params);
        $this->get_operations();	
	}
	public function update_operation()
	{
		$params['id'] = $this->input->post('id');
		$params['address'] = $this->input->post('address');
        $params['age'] = $this->input->post('age');
        $params['date'] = $this->input->post('date');
        $params['name'] = $this->input->post('name');
        $params['phone'] = $this->input->post('phone');
		$params['price'] = $this->input->post('data');
	    $this->OperationsModel->update_operation($params);
	
        $this->get_operations();		
	}
	public function delete_operation()
	{
	    $id = $this->input->post('opID');	
	    $this->OperationsModel->delete_operation($id);
        $this->get_operations();
	}
	public function get_operation_by_name($name)
	{
	
		$operations = $this->OperationsModel->get_operation_with_name($name);
		if( count ($operations) !=0)
		{
		    $this-> print_operations_table($operations);
		}
		else
		{
			$table_body = '
		             <table class="table-stripped table-hover tabel-bordered output" id="operationstable">	
                        <thead>
							<tr>
								<th>رقم الملف</th>
								<th>الاسم</th>
								<th>العنوان</th>
								<th>التليفون</th>
								<th>التاريخ</th>
								<th>البيان</th>
								<th>التقرير</th>
								<th>العمر</th>
								<th>تعديل</th>
								<th>حذف</th>
							</tr>
						</thead>
					    <tbody>
                        ';
				$table_body .= " </tbody>";	
                $table_body .= " </table>";			
		echo $table_body;
		}

	}
	public function search_operation()
	{
			
		$d=$this->input->post('data');
		$data="$d";
		if(@$data[0] >'9')
		{
			$this->get_operation_by_name($data);
		}
		else
		{
		$this->get_operation_by_id($data);
		}
		
	}
	
	public function getyear()
	{
		$d=$this->input->post('year');
		$year="$d";
		
		$operations = $this->OperationsModel->get_operation_with_year($year);
		if( count ($operations) !=0)
		{
		    $this-> print_operations_table($operations);
		}
		else
		{
			$table_body = '
		             <table class="table-stripped table-hover tabel-bordered output" id="operationstable">	
                        <thead>
							<tr>
								<th>رقم الملف</th>
								<th>الاسم</th>
								<th>العنوان</th>
								<th>التليفون</th>
								<th>التاريخ</th>
								<th>البيان</th>
								<th>التقرير</th>
								<th>العمر</th>
								<th>تعديل</th>
								<th>حذف</th>
							</tr>
						</thead>
					    <tbody>
                        ';
				$table_body .= " </tbody>";	
                $table_body .= " </table>";			
		echo $table_body;
		}
		
		
		
		
		
	}
	public function get_operation_by_id($id)
	{
		
		$operations = $this->OperationsModel->get_operation_with_id($id);
		if( count ($operations) !=0)
		{
		    $this-> print_operations_table($operations);
		}
		else
		{
			$this->get_operations();
		}

	}
	
	public function get_operations()
	{
		$operations = $this->OperationsModel->get_operations();
		$this-> print_operations_table($operations);	
	}
	
	public function print_operations_table($operations)
	{
		
		$table_body = '
		             <table class="table-stripped table-hover tabel-bordered output" id="operationstable">	
                        <thead>
							<tr>
								<th>رقم الملف</th>
								<th>الاسم</th>
								<th>العمر</th>
								<th>العنوان</th>
								<th>التليفون</th>
								<th>التاريخ</th>
								<th>الكشف</th>
								<th>تعديل</th>
								<th>حذف</th>
							</tr>
						</thead>
					    <tbody>
                        ';
                        $i=0;
		foreach ($operations as $Instance)
        {
        	$i=$i+1;
        	if($i > 1000)
        	{
        		continue;
        	}
			$table_body .= "<tr>";
            $table_body .= "<td>$Instance->id</td>";
            $table_body .= "<td>$Instance->name</td>";
			$table_body .= "<td>$Instance->age</td>";
            $table_body .= "<td>$Instance->address</td>";
            $table_body .= "<td>$Instance->phone</td>";
            $table_body .= "<td>$Instance->date;</td>";
            $table_body .= "<td>$Instance->price </td>";
			$table_body .= '<td> <a type="button" class=" edit-emp" data-toggle="modal" data-target="#Edit" data-date='.$Instance->date.' data-mydata='.$Instance->price.'  data-myid='.$Instance->id.' data-name='.$Instance->name.'  data-myage='.$Instance->age.' data-report='.$Instance->doctor.' data-phone='.$Instance->phone.' data-myaddress='.$Instance->address.'><i class="fa fa-pencil-square-o"> </i></a> </td>';
	       $table_body .= '<td> <a type="button" class="delete-emp" data-toggle="modal" data-target="#Delete"   data-id='.$Instance->id.'  ><i class="fa fa-trash" aria-hidden="true"></i></a> </td>';
  
			$table_body .= "</tr>";
		}	
        $table_body .= " </tbody>";	
$table_body .= " </table>";			
		echo $table_body;
	}
	/*
	public function connect_ex()
	{
		
$file = "D:\Ahmed work\wamp\www\Clinic\drEssam\patient 2002.xls";
$excelReader= PHPExcel_IOFactory::CreateReaderForFile($file);
$excelObj= $excelReader->load($file);
//$workSheet=$excelObj->getActiveSheet();
//$lastrow = $workSheet -> getHighestRow();
//$lastcol = $workSheet -> getHighestColumn(); // H bl7ob :D

    $i = 0;
    while ($excelObj->setActiveSheetIndex($i)){
      
        $workSheet = $excelObj->getActiveSheet();
       echo"wlaaaaa";    
$lastrow = $workSheet -> getHighestRow();
for($row = 3; $row < $lastrow ; $row++)
 {
	 
       if( strlen ( $workSheet->getCell('B'.$row)->getValue()) > 10)
	   {
		$params['id'] = $workSheet->getCell('A'.$row)->getValue();
	    $params['address'] = $workSheet->getCell('C'.$row)->getValue();
        $params['age'] = $workSheet->getCell('D'.$row)->getValue();
         
	    $params['date'] = PHPExcel_Style_NumberFormat::toFormattedString($workSheet->getCell('F'.$row)->getValue(),'YYYY-MM-DD' );
        
		//($workSheet->getCell('F'.$row)->getValue() - 25569) * 86400;
        $params['name'] = $workSheet->getCell('B'.$row)->getValue();
        $params['phone'] = $workSheet->getCell('E'.$row)->getValue();
		$params['doctor'] = $workSheet->getCell('G'.$row)->getValue();
		$params['price'] = $workSheet->getCell('H'.$row)->getValue();
        print_r($params);  
	    $this->OperationsModel->add_operation($params);
	   }
		
  }	  
        $i++;
    }
	}
*/

public function connect_ex()   //connect operations 
	{
		
$file = "D:\Ahmed work\wamp\www\Clinic\drEssam\operations.xls";
$excelReader= PHPExcel_IOFactory::CreateReaderForFile($file);
$excelObj= $excelReader->load($file);
//$workSheet=$excelObj->getActiveSheet();
//$lastrow = $workSheet -> getHighestRow();
//$lastcol = $workSheet -> getHighestColumn(); // H bl7ob :D

    $i = 0;
    while ($excelObj->setActiveSheetIndex($i)){
      
        $workSheet = $excelObj->getActiveSheet();
       echo"wlaaaaa";    
$lastrow = $workSheet -> getHighestRow();
for($row = 2; $row < $lastrow ; $row++)
 {
	 
        $params['Id'] = $workSheet->getCell('A'.$row)->getValue();
	    $params['name'] = $workSheet->getCell('B'.$row)->getValue();
        $params['companyName'] = $workSheet->getCell('H'.$row)->getValue(); 
	    $params['date'] = PHPExcel_Style_NumberFormat::toFormattedString($workSheet->getCell('D'.$row)->getValue(),'YYYY-MM-DD' );
        $params['phone'] = $workSheet->getCell('C'.$row)->getValue();
        $params['left'] = $workSheet->getCell('G'.$row)->getValue();
		$params['type'] = $workSheet->getCell('E'.$row)->getValue();
		$params['right'] = $workSheet->getCell('F'.$row)->getValue();
     //   print_r($params); 	  
		$this->employeemodel->add_employee($params);     
     //   $this->get_employees();	

		
  }	  
	  
	  
	  
        $i++;
    }

	}

}


