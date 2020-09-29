<?php
if(isset($_POST['submit'])){
$name = $_POST['name'];
$class = $_POST['class'];
$roll = $_POST['roll'];
$year = $_POST['year'];
$ban = $_POST['ban'];
//$gr_ban = "";
//$gpa_ban = "";
$eng = $_POST['eng'];
//$gr_eng = "";
//$gpa_eng = "";
$math = $_POST['math'];
//$gr_math = "";
//$gpa_math = "";
$ag = $_POST['ag'];
/*$gr_ag = "";
$gpa_ag = "";
$gpa_2_ag = "";
$obtmark = "";
$total_gpa1 = "";
$total_gpa2 = "";
$result = "";*/


//total marks
$obtmark = $ban+$eng+$math+$ag;

//grade bangla
if(($ban>=80)&&($ban<=100)){
	$gr_ban = "A+";
}
else if(($ban>=70)&&($ban<=79.99)){
	$gr_ban = "A";
}
else if(($ban>=60)&&($ban<=69.99)){
	$gr_ban = "A-";
}
else if(($ban>=50)&&($ban<=59.99)){
	$gr_ban = "B";
}
else if(($ban>=40)&&($ban<=49.99)){
	$gr_ban = "C";
}
else if(($ban>=33)&&($ban<=39.99)){
	$gr_ban = "D";
}else{
	$gr_ban = "F";
}

//grade english
if(($eng>=80)&&($eng<=100)){
	$gr_eng = "A+";
}
else if(($eng>=70)&&($eng<=79.99)){
	$gr_eng = "A";
}
else if(($eng>=60)&&($eng<=69.99)){
	$gr_eng = "A-";
}
else if(($eng>=50)&&($eng<=59.99)){
	$gr_eng = "B";
}
else if(($eng>=40)&&($eng<=49.99)){
	$gr_eng = "C";
}
else if(($eng>=33)&&($eng<=39.99)){
	$gr_eng = "D";
}else{
	$gr_eng = "F";
}
//grade math
if(($math>=80)&&($math<=100)){
	$gr_math = "A+";
}
else if(($math>=70)&&($math<=79.99)){
	 $gr_math = "A";
}
else if(($math>=60)&&($math<=69.99)){
    $gr_math = "A-";
}
else if(($math>=50)&&($math<=59.99)){
	$gr_math = "B";
}
else if(($math>=40)&&($math<=49.99)){
	$gr_math = "C";
}
else if(($math>=33)&&($math<=39.99)){
	$gr_math = "D";
}else{
	$gr_math = "F";
}
//grade Agriculture
if(($ag>=80)&&($ag<=100)){
	$gr_ag = "A+";
}
else if(($ag>=70)&&($ag<=79.99)){
	$gr_ag = "A";
}
else if(($ag>=60)&&($ag<=69.99)){
	$gr_ag = "A-";
}
else if(($ag>=50)&&($ag<=59.99)){
	$gr_ag = "B";
}
else if(($ag>=40)&&($ag<=49.99)){
	$gr_ag = "C";
}
else if(($ag>=33)&&($ag<=39.99)){
	$gr_ag = "D";
}else{
	$gr_ag = "F";
}


//gpa bangla
if(($ban>=80)&&($ban<=100)){
	$gpa_ban = "5.0";
}
else if(($ban>=70)&&($ban<=79.99)){
	$gpa_ban = "4.0";
}
else if(($ban>=60)&&($ban<=69.99)){
	$gpa_ban = "3.5";
}
else if(($ban>=50)&&($ban<=59.99)){
	$gpa_ban = "3.0";
}
else if(($ban>=40)&&($ban<=49.99)){
	$gpa_ban = "2.0";
}
else if(($ban>=33)&&($ban<=39.99)){
	$gpa_ban = "1.0";
}else{
	$gpa_ban = "0.0";
}

//gpa english
if(($eng>=80)&&($eng<=100)){
	$gpa_eng = "5.0";
}
else if(($eng>=70)&&($eng<=79.99)){
	$gpa_eng = "4.0";
}
else if(($eng>=60)&&($eng<=69.99)){
	$gpa_eng = "3.5";
}
else if(($eng>=50)&&($eng<=59.99)){
	$gpa_eng = "3.0";
}
else if(($eng>=40)&&($eng<=49.99)){
	$gpa_eng = "2.0";
}
else if(($eng>=33)&&($eng<=39.99)){
	$gpa_eng = "1.0";
}else{
	$gpa_eng = "0.0";
}
//gpa math
if(($math>=80)&&($math<=100)){
	$gpa_math = "5.0";
}
else if(($math>=70)&&($math<=79.99)){
	 $gpa_math = "4.0";
}
else if(($math>=60)&&($math<=69.99)){
    $gpa_math = "3.5";
}
else if(($math>=50)&&($math<=59.99)){
	$gpa_math = "3.0";
}
else if(($math>=40)&&($math<=49.99)){
	$gpa_math = "2.0";
}
else if(($math>=33)&&($math<=39.99)){
	$gpa_math = "1.0";
}else{
	$gpa_math = "0.0";
}


//gpa Agriculture
if(($ag>=80)&&($ag<=100)){
	$gpa_ag = "5.00";
}
else if(($ag>=70)&&($ag<=79.99)){
	$gpa_ag = "4.00";
}
else if(($ag>=60)&&($ag<=69.99)){
	$gpa_ag = "3.5";
}
else if(($ag>=50)&&($ag<=59.99)){
	$gpa_ag = "3..00";
}
else if(($ag>=40)&&($ag<=49.99)){
	$gpa_ag = "2.00";
}
else if(($ag>=33)&&($ag<=39.99)){
	$gpa_ag = "1.00";
}else{
	$gpa_ag = "0.00";
}

//Addtional subject-gpa(Gp above 2)
if(($ag>=80)&&($ag<=100)){
	$gpa_2_ag = "3.00";
}
else if(($ag>=70)&&($ag<=79.99)){
	$gpa_2_ag = "2";
}
else if(($ag>=60)&&($ag<=69.99)){
	$gpa_2_ag = "1.5";
}
else if(($ag>=50)&&($ag<=59.99)){
	$gpa_2_ag = "1.00";
}else{
	$gpa_2_ag = "0.00";
}

//without Additional Subject
 $total_gpa1 = ($gpa_ban+$gpa_eng+$gpa_math)/3;
//with Additional Subject
 $total_gpa2 = ($gpa_ban+$gpa_eng+$gpa_math+$gpa_2_ag)/3;
 
//Condition

if(($total_gpa2)>=5){

    $total_gpa2 = "5.00";
}
//result pass/fail
if($ban <=32 OR $eng <=32 OR $math<=32){
	$result = "Fail";

}else{

	$result = " ";
}


include('include/connect.php');
	$con = connectBD();
	$sql = "INSERT INTO results VALUES(NULL,'$name','$class','$roll','$year','$ban',
	'$gr_ban','$gpa_ban','$eng','$gr_eng','$gpa_eng','$math','$gr_math','$gpa_math',
	'$ag','$gr_ag','$gpa_ag','$gpa_2_ag','$obtmark','$total_gpa1','$total_gpa2',
	'$result');";
	if(mysqli_query($con,$sql)) {
		
	header("Location:index.php? success= 1");
	} else {
		
	header("Location:create.php? error = 1");
	}
}
?>