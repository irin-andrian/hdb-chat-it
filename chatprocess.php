<?php

    $function = $_POST['function'];
    
    $log = array();

    switch($function) {
        case('getState'):
        if(file_exists('chat.txt')){
          $lines = file('chat.txt');
        }
        $log['state'] = count($lines); 
        break;	
       
   }
   echo json_encode($log);

   ?>