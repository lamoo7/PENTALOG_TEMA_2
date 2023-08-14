<?php
class SalaryModel {
    public function calculateNetSalary($baseSalary, $taxRate) {
        return $baseSalary * (1 - $taxRate);
    }
}
?>