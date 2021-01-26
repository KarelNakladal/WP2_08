<?php
// index.php
require_once('functions.php');
 
?>
 
<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// Dohoda nezdaněná výplata
$employees[0]['salary'] = 8000; 
$employees[0]['type'] = 'student';
$employees[1]['salary'] = 9000; 
$employees[1]['type'] = 'corona';
$employees[2]['salary'] = 7000; 
$employees[2]['type'] = 'student';
$employees[3]['salary'] = 5000; 
$employees[3]['type'] = 'corona';
$employees[4]['salary'] = 12000;
$employees[4]['type'] = 'student';
$employees[5]['salary'] = 9000; 
$employees[5]['type'] = 'corona';
$employees[6]['salary'] = 9000;
$employees[6]['type'] = 'student';
$employees[7]['salary'] = 10000; 
$employees[7]['type'] = 'corona';
$employees[8]['salary'] = 3000; 
$employees[8]['type'] = 'student';
$employees[9]['salary'] = 7000; 
$employees[9]['type'] = 'corona';
 
// odečíst 15% - čistá výplata
//$employee1Clean = $employee1 * 0.85;
//$employee2Clean = $employee2 * 0.85; 
for($i=0; $i<10;$i++){

echo("Zaměstnanec č. " .$i. " " .$employees[$i]['type']. " má hrubou mzdu " .$employees[$i]['salary']. "kč a čistou " . cleanSalaryComplex($employees[$i]['salary']). "kč<br>");

}

?>
</body>
</html>