<?php

require 'src/db.php';
try{
    $db=new MysqlAdapter();
}catch (Exception $e){
    print "Error: " . $e->getMessage();
}


?>