<?php
interface Strategy { // Abstract policy role, implemented by interface
    public function do_method(); // Algorithm interface
}
class ConcreteStrategyA implements Strategy { // Specific strategy role A
    public function do_method() {
        echo 'do method 1';
    }
}
class ConcreteStrategyB implements Strategy { // Specific strategy role B
    public function do_method() {
        echo 'do method 2';
    }
}
class ConcreteStrategyC implements Strategy { // Specific strategy role C
    public function do_method() {
        echo 'do method 3';
    }
}
class Question{ // Environmental role
    private $_strategy;
    public function __construct(Strategy $strategy) {
        $this->_strategy = $strategy;
    }
    public function handle_question() {
        $this->_strategy->do_method();
    }
}

// client
$strategyA = new ConcreteStrategyA();
$question = new Question($strategyA);
$question->handle_question();
$strategyB = new ConcreteStrategyB();
$question = new Question($strategyB);
$question->handle_question();
$strategyC = new ConcreteStrategyC();
$question = new Question($strategyC);
$question->handle_question();