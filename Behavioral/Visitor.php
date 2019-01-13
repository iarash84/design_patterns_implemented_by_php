<?php
abstract class Action
{
    abstract public function getManConclusion(Man $concreteElementA);
    abstract public function getWomanConclusion(Woman $concreteElementB);
}
abstract class Person
{
    abstract public function accept(Action $visitor);
}
class Success extends Action
{
    public function getManConclusion(Man $concreteElementA)
    {
        echo "Most of the time behind there is a great woman\n";
    }
    public function getWomanConclusion(Woman $concreteElementB)
    {
        echo "There is an unsuccessful man behind him.\n";
    }
}
class Failing extends Action
{
    public function getManConclusion(Man $concreteElementA)
    {
        echo "When a man fails, he drinks and drinks, and no one advises\n";
    }
    public function getWomanConclusion(Woman $concreteElementB)
    {
        echo "When a woman fails, she is tearful, no one can persuade\n";
    }
}
class Amativeness extends Action
{
    public function getManConclusion(Man $concreteElementA)
    {
        echo "When a man is in love, he does not know how to understand everything.\n";
    }
    public function getWomanConclusion(Woman $concreteElementB)
    {
        echo "When a woman is in love, she does not know how to understand things.\n";
    }
}
class Man extends Person
{
    public function accept(Action $visitor)
    {
        $visitor->getManConclusion($this);
    }
}
class Woman extends Person
{
    public function accept(Action $visitor)
    {
        $visitor->getWomanConclusion($this);
    }
}
class ObjectStructure
{
    private $person = [];
    public function acctch(Person $person)
    {
        array_push($this->person, $person);
    }
    public function display(Action $visitor)
    {
        foreach ($this->person as $person) {
            $person->accept($visitor);
        }
    }
}
$o = new ObjectStructure();
$o->acctch(new Man());
$o->acctch(new Woman());
// Response when successful
$v1 = new Success();
$o->display($v1);
$v2 = new Failing();
$o->display($v2);
$v3 = new Amativeness();
$o->display($v3);
