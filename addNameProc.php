<?php

    
    class AddNameProc {

        
        public function split_name($fullName) {
  
            $fullName = trim($fullName);
            $last_name = (strpos($fullName, ' ') === false) ? '' : preg_replace('#.*\s([\w-]*)$#', '$1', $fullName);
            $first_name = trim( preg_replace('#'.preg_quote($last_name,'#').'#', '', $fullName ) );
            return $last_name .", ". $first_name;
          }
    }

            

?>