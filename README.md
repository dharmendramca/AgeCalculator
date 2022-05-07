# AgeCalculator
AgeCalculator is a simple PHP class. It can calculate age and return JSON format result.

require('AgeCalculator.php');
$obj=new AgeCalculator();
$dob='05-06-2000';
echo $obj->show_my_age();
