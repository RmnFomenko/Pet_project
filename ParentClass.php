<?php
abstract class ParentClass {
    private $property1;
    private $property2;

    public function getProperty1() {
        return $this->property1;
    }

    public function setProperty1($value) {
        $this->property1 = $value;
    }

    public function getProperty2() {
        return $this->property2;
    }

    public function setProperty2($value) {
        $this->property2 = $value;
    }

    // Абстракция для возведения в степень
    abstract public function calculatePower($base, $exponent);
}
