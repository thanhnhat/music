<?php
if (isset($_GET['option']))
    $tmp= $_GET['option'];
else $tmp ="";
if($tmp == 'nghealbum')
   include("nghealbum.php");
else
   if($tmp == 'nghe1bh')
   include("nghe1bh.php");
else
  
   include("home.php");
   


//    else 
//    if($tmp=='qlcd')
//     include("QLCD.php");

//     else
//     if($tmp=='qlcs')
//     include("QLCS.php");
//   
  ?>