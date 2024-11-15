<?php
class GrandChild2 extends Child1 {
    private $grandChildProperty;

    public function getGrandChildProperty() {
        return $this->grandChildProperty;
    }

    public function setGrandChildProperty($value) {
        $this->grandChildProperty = $value;
    }

    public function multiplyParentAndGrandChildProperties() {
        return $this->getProperty2() * $this->grandChildProperty;
    }
}
