<?php
// print ('Hello World' );
// $name = 'Olulu';
// $age = 'Unknown';
// echo "<br>The name of the Student is '.$name' his age is " .$age

// $p = 4000;
// $r = 15;
// $t = 5;

// $i = $p * $r * $t/100;
// echo $i;

// $name = 'Pince William';
// if($name == "Prince William"){
//     echo "Hey Bro, welcome";
// } else{
//     echo "Olel! Ole! Catch Am!!!";
// }

// $x = 20; $y = 5;
// if ($x <= 0 || $y = 5){
//     echo 'within range of -1 to 10';
// }elseif($x <=20){
//     echo 'value is within range of 1 and 20';
// }else{
//     echo 'value greater than 20';
// }

// $x = 20;
// $y = 5;
// if($x <= 0 || $y <= 5){
//     echo 'great 1';
// }elseif($x = 20 || $y >= 5){
//     echo 'great 2';
// }else{
//     echo 'great 3';
// }


// Switch Statements
// $school = "Unique";
// $principal = "Joe";

// switch ($school){
//     case 'Unique';
//         echo 'Right';
//         break;
//     case 'Joe';
//         echo 'yes yes';
//         break;
//     default:
//         echo 'all wrong';
//         break;
// }

// multiplication table
// $c = 1;
// while ($c <= 12) {
//     echo '9 x ' .$c. ' = '.$c*9;
//     $c++;
// }

// $i = 0;
// do {
//     echo 'ye we can';
//     $i++;
//     echo '<br>';
// }while($i<=5);

// for ($i=1; $i <= 12; $i++){
//     echo "test mode" .$i. "<br>";
// }

// $name = array(['name ' => ' Josh ', ' age ' =>  32, ' nickname ' => ' Tonye ', ' address ' => ' 23 ada lane'],
// ['name ' => ' Josh ', ' age ' =>  32, ' nickname ' => ' Tonye ', ' address ' => ' 23 ada lane']);
// foreach($name as $key => $value){
//     echo $key .'is'. $value;
// }

// function sumNow($x, $y){
//     $c = $x + $y;
//     echo 'the sum of '.$x. ' and ' .$y. ' is ' .$c;
// }
// sumNow(21, 40);
// echo "<br>";

if ($_REQUEST['name'] || $_REQUEST['email'] || $_REQUEST['age'])
{
    echo 'you are welcome' .$_REQUEST['name'];
    echo 'your email is' .$_REQUEST['email'];
    echo 'your age is' .$_REQUEST['age']. 'years old';
}
?> 
<html lang="en">

    <form action = ''; method = ''>
        Name: <input type:'text', name='name'>
        email: <input type:'email', name='email'>
        Age: <input type:'text', name='age'><br>
             <button type:'submit', name='submit'>Submit</button>
    </form>

</html>