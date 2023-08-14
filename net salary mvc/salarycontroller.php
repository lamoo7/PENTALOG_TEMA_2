<?php

class SalaryController {
    private $model;
    private $view;

    public function __construct($model, $view) {
        $this->model = $model;
        $this->view = $view;
    }

    public function calculateAndDisplaySalary($baseSalary, $taxRate) {
        $netSalary = $this->model->calculateNetSalary($baseSalary, $taxRate);
        $this->view->displaySalary($netSalary);
    }
}

?>