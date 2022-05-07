<?php 
/*
Class Name:   Age Calculator  
Author    :   Dharmendra Kumar 
Author URI:   http://www.dharmendramca.wordpress.com
GIT       :   https://github.com/dharmendramca
Ver       :   1.0
*/ 

class AgeCalculator { 

public $dob;
private $result=array();
private $from;
private $to;

public function show_my_age(string $dob='05-06-2000') 
{ 

$from=new DateTime($dob);
$to=new DateTime('today');
if($from->diff($to)->y>0)
$result['year']= $from->diff($to)->y;  
if($from->diff($to)->m>0)
$result['month']= $from->diff($to)->m;  
if($from->diff($to)->d>0)
$result['day']= $from->diff($to)->d;  

return json_encode($result);


  }
} 

$obj=new AgeCalculator();
$dob='05-06-2000';
echo $obj->show_my_age();
