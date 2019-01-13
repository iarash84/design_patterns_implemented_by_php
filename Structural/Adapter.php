<?php
interface FirstTarget {
    public function FirstMethod();
    public function SecondMethod();
}

class FirstAdaptee {
    public function FirstMethod() {
        echo 'FirstMethod';
    }
}

class Adapter implements FirstTarget {
    private $_adaptee;
    public function __construct(Adaptee $adaptee) {
        $this->_adaptee = $adaptee;
    }

    public function FirstMethod() {
        $this->_adaptee->FirstMethod();
    }

    public function SecondMethod() {
        echo 'SecondMethod';
    }
}

$adapter = new Adapter(new FirstAdaptee());
$adapter->FirstMethod();
$adapter->SecondMethod();

interface SecondTarget {
    public function FirstMethod();
    public function SecondMethod();
}

class SecondAdaptee {
    public function FirstMethod() {}
}

class SecondAdapter extends SecondAdaptee implements SecondTarget {
    public function SecondMethod() {}
}
$adapter = new SecondAdapter();
$adapter->FirstMethod();
$adapter->SecondMethod();
?>