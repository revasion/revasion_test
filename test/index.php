<?php
//use Guest\Mest\Test\ClassTest;
//namespace Guest\Mest\Test;
//require 'ClassTest.php';
//$c=new ClassTest();
//$c->set(1);
//$c->get();
//$m=new DateTime();
//echo $m->getTimestamp();

require_once  "Cnain.php";
$ch=new Chain();
echo $ch->add2()->add5()->num;
//echo $ch->num;
echo "commiting";
echo "commiting 2";
echo 'COMMITING 3';
?>