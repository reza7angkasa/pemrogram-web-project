<?php
    header('Content-Type: application/json');

   
    if (empty($_SESSION['csrf_token'])) {
        $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
    }
    
    $headers = apache_request_headers();
   
  ?>