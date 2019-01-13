<?php
abstract class Component
{
    protected $name;

    function __construct($name)
    {
        $this->name = $name;
    }

//The add and remove methods are usually used to provide the ability to add or remove branches and leaves.
    abstract public function add(Component $c);

    abstract public function remove(Component $c);

    abstract public function display($depth);
}
//Leaf represents a leaf node object in the combination, and the leaf node object has no child nodes.
class Leaf extends Component
{
// Since the leaves do not add branches and leaves, the add and remove methods do not make sense.
// But doing so can eliminate the difference between the leaf node and the branch node object at the abstraction level, they have a completely consistent interface.
    public function add(Component $c)
    {
        echo "can not add to a leaf\n";
    }

    public function remove(Component $c)
    {
        echo "can not remove to a leaf\n";
    }

// 叶节点的具体方法，此处是显示其名称和级别
    public function display($depth)
    {
        echo str_repeat('-', $depth) . $this->name . "\n";
    }
}
//The composite definition has a branch node behavior, which is used to store subcomponents, and implements operations related to subcomponents in the Component interface, such as adding add and removing remove.
class Composite extends Component
{
//A set of child objects is used to store the branch nodes and leaf nodes of its subordinates.
    private $childern = [];

    public function add(Component $c)
    {
        array_push($this->childern, $c);
    }

    public function remove(Component $c)
    {
        foreach ($this->childern as $key => $value) {
            if ($c === $value) {
                unset($this->childern[$key]);
            }
        }
    }

// Display its branch node name and traverse its subordinate
    public function display($depth)
    {
        echo str_repeat('-', $depth) . $this->name . "\n";
        foreach ($this->childern as $component) {
            $component->display($depth + 2);
        }
    }
}
//Client code
$root = new Composite('root');
$root->add(new Leaf("Leaf A"));
$root->add(new Leaf("Leaf B"));
$comp = new Composite("Composite X");
$comp->add(new Leaf("Leaf XA"));
$comp->add(new Leaf("Leaf XB"));
$root->add($comp);
$comp2 = new Composite("Composite X");
$comp2->add(new Leaf("Leaf XA"));
$comp2->add(new Leaf("Leaf XB"));
$comp->add($comp2);
$root->add(new  Leaf("Leaf C"));
$leaf = new Leaf("Leaf D");
$root->add($leaf);
$root->remove($leaf);
$root->display(1);