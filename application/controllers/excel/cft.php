<?php
require_once "PHPExcel.php";
$file = "patient 98.xls";
$excelReader= PHPExcel_IOFactory::CreateReaderForFile($file);
$excelObj= $excelReader->load($file);
$workSheet=$excelObj->getActiveSheet();
$lastrow = $workSheet -> getHighestRow();
$lastcol = $workSheet -> getHighestColumn();
echo $lastcol;
echo "<table>";
for($row = 1; $row <= $lastrow ; $row++)
{
	for($col='A'; $col <= $lastcol; $col++)
	{
	echo "<tr><td>";
	echo $workSheet->getCell($col.$row)->getValue();
	echo "</td><tr>";
	echo "</td><tr>";
	}
}
echo "</table>";



$sheet = $excelObj->getSheet(0); 
$highestRow = $sheet->getHighestRow(); 
$highestColumn = $sheet->getHighestDataColumn();

//  Loop through each row of the worksheet in turn
for ($row = 1; $row <= $highestRow; $row++){ 
    //  Read a row of data into an array
    $rowData = $sheet->rangeToArray('A' . $row . ':' . $highestColumn . $row,
                                    NULL,
                                    TRUE,
                                    FALSE);


}
