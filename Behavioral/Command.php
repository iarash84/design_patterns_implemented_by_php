<?php
interface Command { // Command role
    public function execute(); // Execution method
}
class ConcreteCommand implements Command { // Specific command method
    private $_receiver;
    public function __construct(Receiver $receiver) {
        $this->_receiver = $receiver;
    }
    public function execute() {
        $this->_receiver->action();
    }
}
class Receiver { // Recipient role
    private $_name;
    public function __construct($name) {
        $this->_name = $name;
    }
    public function action() {
        echo 'receive some cmd:'.$this->_name;
    }
}
class Invoker { // Requester role
    private $_command;
    public function __construct(Command $command) {
        $this->_command = $command;
    }
    public function action() {
        $this->_command->execute();
    }
}

$receiver = new Receiver('hello world');
$command = new ConcreteCommand($receiver);
$invoker = new Invoker($command);
$invoker->action();