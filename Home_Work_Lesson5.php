<?php

// Задача 1: Создать родительский (главный) класс
// Класс должен содержать 2 свойства
// Каждое свойство должно иметь геттеры и сеттеры
// Должен содержать абстрактную функцию возведения в степень

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

// Задача 2: Создать 3 наследника родительского класса
// Каждый наследник должен содержать одно свойство
// Каждое свойство должно иметь геттер и сеттер
// Наследники должны реализовать по одному методу, который выполняет одно математическое действие с данными родителя и своими данными
// Один наследник не должен быть наследуемым

// Наследник 1
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

// Наследник 2
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

// Наследник 3 (финальный класс, нельзя наследовать)
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

// Задача 3: Создать по 2 наследника от наследников первого уровня
// Каждое свойство должно иметь геттер и сеттер
// Наследники должны реализовать по одному методу, который выполняет одно математическое действие с данными родителя и своими данными
// И по одному методу, который выполняет любое математическое действие со свойством корневого класса и своим свойством

// Наследник наследника 1
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

// Наследник наследника 2
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

// Пример вывода
$grandChild1 = new GrandChild1();
$grandChild1->setProperty1(20);
$grandChild1->setChildProperty(10);
$grandChild1->setGrandChildProperty(2);

var_dump($grandChild1->getProperty1());
var_dump($grandChild1->getChildProperty());
var_dump($grandChild1->getGrandChildProperty());

// 10 / 2 = 5
var_dump($grandChild1->divideProperties()); // 10 / 2 = 5
// 20 + 2 = 22
var_dump($grandChild1->addParentAndGrandChildProperties());
