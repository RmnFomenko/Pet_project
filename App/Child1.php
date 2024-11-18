<?php

namespace App;
class Child1 extends ParentClass {
    private $childProperty;

    public function getChildProperty() {
        return $this->childProperty;
    }

    public function setChildProperty($value) {
        $this->childProperty = $value;
    }

    public function addProperties() {
        return $this->getProperty1() + $this->childProperty;
    }

    // Реализация абстракции
    public function calculatePower($base, $exponent) {
        return pow($base, $exponent);
    }
}