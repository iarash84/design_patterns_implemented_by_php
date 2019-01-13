<?php
interface IObserver{
    function onSendMsg( $sender, $args );
    function getName();
}
interface IObservable{
    function addObserver( $observer );
}
class UserList implements IObservable{
    private $_observers = array();
    public function sendMsg( $name ){
        foreach( $this->_observers as $obs ){
            $obs->onSendMsg( $this, $name );
        }
    }
    public function addObserver( $observer ){
        $this->_observers[]= $observer;
    }
    public function removeObserver($observer_name) {
        foreach($this->_observers as $index => $observer) {
            if ($observer->getName() === $observer_name) {
                array_splice($this->_observers, $index, 1);
                return;
            }
        }
    }
}
class UserListLogger implements IObserver{
    public function onSendMsg( $sender, $args ){
        echo( "'$args' send to UserListLogger\n" );
    }
    public function getName(){
        return 'UserListLogger';
    }
}
class OtherObserver implements IObserver{
    public function onSendMsg( $sender, $args ){
        echo( "'$args' send to OtherObserver\n" );
    }
    public function getName(){
        return 'OtherObserver';
    }
}
$ul = new UserList();//Observer
$ul->addObserver( new UserListLogger() );//Increase observer
$ul->addObserver( new OtherObserver() );//Increase observer
$ul->sendMsg( "Jack" );//Send a message to the observer
$ul->removeObserver('UserListLogger');//Remove observer
$ul->sendMsg("hello");//Send a message to the observer