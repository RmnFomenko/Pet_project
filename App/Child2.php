<?php

namespace App;
class Child2 extends ParentClass {
    private $childProperty;

    public function getChildProperty() {
        return $this->childProperty;
    }

    public function setChildProperty($value) {
        $this->childProperty = $value;
    }

    public function subtractProperties() {
        return $this->getProperty2() - $this->childProperty;
    }

    // Реализация абстракции
    public function calculatePower($base, $exponent) {
        return pow($base, $exponent);
    }
}
