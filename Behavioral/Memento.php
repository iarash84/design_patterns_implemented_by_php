<?php
class Originator { // Originator role
    private $_state;
    public function __construct() {
        $this->_state = '';
    }
    public function createMemento() { // Create a memo
        return new Memento($this->_state);
    }
    public function restoreMemento(Memento $memento) { // Restore the initiator to the state of the memo object record
        $this->_state = $memento->getState();
    }
    public function setState($state) { $this->_state = $state; }
    public function getState() { return $this->_state; }
    public function showState() {
        echo $this->_state;echo "<br>";
    }

}
class Memento { // Memento role
    private $_state;
    public function __construct($state) {
        $this->setState($state);
    }
    public function getState() { return $this->_state; }
    public function setState($state) { $this->_state = $state;}
}
class Caretaker { // Caretaker role
    private $_memento;
    public function getMemento() { return $this->_memento; }
    public function setMemento(Memento $memento) { $this->_memento = $memento; }
}

// client
/* Create target object */
$org = new Originator();
$org->setState('open');
$org->showState();
/* Create a note */
$memento = $org->createMemento();
/* Save this note with Caretaker */
$caretaker = new Caretaker();
$caretaker->setMemento($memento);
/* Change the state of the target object */
$org->setState('close');
$org->showState();
$org->restoreMemento($memento);
$org->showState();
/* Change the state of the target object */
$org->setState('close');
$org->showState();
/* Restore operation */
$org->restoreMemento($caretaker->getMemento());
$org->showState();