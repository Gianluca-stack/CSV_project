<?php

$label_array = [];
$integer_datatype;
$double_datatype;

//array counters
$datatypearray_counter = 0;

// storing datatypes for each data field
$datatypes_array = [];

//storing each field value from every single row
$rowarr_count = 0;
$rowfield_counter = 0;
$row_value_array = array();
$string = "/:/";
$insertvalues = "";
$users_data;
$occurences = 0;

// converting values from strings to their associate data types
for($row = 0; $row<count($data); $row++){

    if($row == 0){

        for($labels = 0; $labels < $num; $labels++){
             
              $label_array[$labels] = $data[$row][$labels];

        }

        for ($labelvals=0; $labelvals < count($label_array); $labelvals++) { 
            
            $lastindex = count($label_array) - 1;

            if($labelvals = $lastindex){

                $insertvalues = $label_array[$labelvals];

            }else{

                
            }
        }
    }
}

?>