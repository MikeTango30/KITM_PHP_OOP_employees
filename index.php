<?php

require "vendor/autoload.php";

use KITM\Employee;
use KITM\Pupil;
use KITM\Teacher;
use KITM\Printer;

$employee = new Employee(
                  "Arkadijus",
                  "Atotranka",
                  "aa@tranko.lt",
                  "+370 666 66666",
                  "Ūkvedys",
                  "1400",
                  "2025-12-31");
$pupil = new Pupil(
                    "Jonukas",
                    "Stropukas",
                    "js@js.com",
                    "+370666 66 666",
                    "154858",
                    "4b",
                    "9.9"
);

$teacher = new Teacher(
                        "Matas",
                        "Matau",
                        "viska.matau@perrankas.gov",
                        "+37099 999 9999",
                        "666",
                        "Fizika",
                        "Kviestinis"
);

$employeeData = $employee->show();
$pupilData = $pupil->show();
$teacherData = $teacher->show();

?>
<!doctype html>
<html lang="lt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>KITM</title>
  <!-- Bootstrap core CSS -->
  <link href="app/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="app/css/styles.css" rel="stylesheet">
</head>
<body>
<div class="container-fluid">
  <div class="container">
    <div class="row">
      <?php Printer::printArray($employeeData)?>
      <?php Printer::printArray($pupilData)?>
      <?php Printer::printArray($teacherData)?>
    </div>
  </div>
</body>
</html>