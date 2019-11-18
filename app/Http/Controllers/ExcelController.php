<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PHPExcel_IOFactory;

class ExcelController extends Controller
{
    public function index(){
        $inputFileName = 'Product.xlsx';
        $objPHPExcel = PHPExcel_IOFactory::load($inputFileName);
        $objPHPExcel->setActiveSheetIndex(0);
        $sheet_data = $objPHPExcel->getActiveSheet()->toArray(null,true,true,true); 
        $i=0;
        echo "<br>";
        foreach($sheet_data as $row){
            if($i>0){
                echo '[<br>';
                echo  "'name' => '".$row['B']."',<br>";
                echo  "'detail' => '".$row['C']."',<br>";
                echo  "'img' => '".$row['D']."',<br>";
                echo  "'type_id' => ".$row['E'].",<br>";
                echo  "'created_at' => now(),<br>";
                echo '],<br>';
            }
            $i++;
        }
        // return response()->json($sheet_data);
    }
}
