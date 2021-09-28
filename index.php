<?php

     function loadLibraries($className){
          $fileName='system/libs/'.$className.'.php';
          if(file_exists($fileName)){
               include_once $fileName;
          }     
     }
     function loadModals($className){
          $fileName='app/model/'.$className.'.php';
          if(file_exists($fileName)){
               include_once $fileName;
          }     
     }
     

     spl_autoload_register('loadLibraries');
     spl_autoload_register('loadModals');
     new Router();
?>