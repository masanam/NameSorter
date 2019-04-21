<?php
$file = "filename.txt";
name_sorter($file);

function name_sorter($filename) {
     $rows = array();
     $result = '';
     $resultstring ='';
     $data = file($filename);

     //get the content from file
     foreach($data as $key => $val) {
          //split the lines 
          $rowarray = explode(" ", $val);
          //Grab the last column
          $rows[] = (isset($rowarray[2]) && $rowarray[2] <> "") ? $rowarray[2] : $rowarray[1];
     }

     //sort by last-name
     asort($rows);
     
     //print the sort-list.
     foreach($rows as $key => $val) {
          $result .= trim($data[$key]) . "\r\n";
          $resultstring .= trim($data[$key]) . "<br/>";

     }
     //put the sort-list to new-file
     file_put_contents("sorted-names-list.txt", $result);
     //display the sort-list to screen.
     print_r($resultstring);
}
