<?php
abstract class Subject
{
    abstract public function action();
}
class RealSubject extends Subject
{
    public function __construct()
    {
    }

    public function action()
    {
    }
}
class ProxySubject extends Subject
{
    private $_real_subject = NULL;

    public function __construct()
    {
    }

    public function action()
    {
        $this->_beforeAction();
        if (is_null($this->_real_subject)) {
            $this->_real_subject = new RealSubject();
        }
        $this->_real_subject->action();
        $this->_afterAction();
    }

    private function _beforeAction()
    {
        echo 'Before the action, I want to do something....';
    }

    private function _afterAction()
    {
        echo 'After the action, I still want to do something....';
    }
}
// client
$subject = new ProxySubject();
$subject->action();