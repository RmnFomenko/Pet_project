<?php
class GrandChild1 extends Child1 {
    private $grandChildProperty;

    public function getGrandChildProperty() {
        return $this->grandChildProperty;
    }

    public function setGrandChildProperty($value) {
        $this->grandChildProperty = $value;
    }

    public function divideProperties() {
        return $this->getChildProperty() / $this->grandChildProperty;
    }

    public function addParentAndGrandChildProperties() {
        return $this->getProperty1() + $this->grandChildProperty;
    }
}