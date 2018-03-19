<?php
if (isset($_GET['option']))
    $tmp= $_GET['option'];
else $tmp ="";
if($tmp == 'qlbh')
   include("QLBH.php");

   else 
   if($tmp=='qlcd')
    include("QLCD.php");

    else
    if($tmp=='qlcs')
    include("QLCS.php");
    ?>