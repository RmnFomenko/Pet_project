<?php
final class Child3 extends ParentClass {
    private $childProperty;

    public function getChildProperty() {
        return $this->childProperty;
    }

    public function setChildProperty($value) {
        $this->childProperty = $value;
    }

    public function multiplyProperties() {
        return $this->getProperty1() * $this->childProperty;
    }

    // Реализация абстракции
    public function calculatePower($base, $exponent) {
        return pow($base, $exponent);
    }
}