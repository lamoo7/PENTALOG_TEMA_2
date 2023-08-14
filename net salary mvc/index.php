<?php

require_once 'salarymodel.php';
require_once 'salaryview.php';
require_once 'salarycontroller.php';

$model = new SalaryModel();
$view = new SalaryView();
$controller = new SalaryController($model, $view);

$baseSalary = 5000;
$taxRate = 0.2;

$controller->calculateAndDisplaySalary($baseSalary, $taxRate);

?>