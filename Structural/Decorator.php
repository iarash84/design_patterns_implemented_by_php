<?php
interface Component {
    public function operation();
}

abstract class Decorator implements Component{
    protected  $_component;
    public function __construct(Component $component) {
        $this->_component = $component;
    }
    public function operation() {
        $this->_component->operation();
    }
}

class ConcreteDecoratorA extends Decorator {
    public function __construct(Component $component) {
        parent::__construct($component);
    }
    public function operation() {
        parent::operation();
        $this->addedOperationA();
    }
    public function addedOperationA() {echo 'A加点酱油;';}


}
class ConcreteDecoratorB extends Decorator {
    public function __construct(Component $component) {
        parent::__construct($component);
    }
    public function operation() {
        parent::operation();
        $this->addedOperationB();
    }
    public function addedOperationB() {echo "B加点辣椒;";}
}

class ConcreteComponent implements Component{
    public function operation() {}
}

// clients
$component = new ConcreteComponent();
$decoratorA = new ConcreteDecoratorA($component);
$decoratorB = new ConcreteDecoratorB($decoratorA);
$decoratorA->operation();
echo '<br />--------<br />';
$decoratorB->operation();