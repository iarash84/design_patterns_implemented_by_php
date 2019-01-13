<?php
class Request
{
    protected $requestType;
    public function setRequestType($requestType)
    {
        $this->requestType = $requestType;
    }
    public function getRequestType()
    {
        return $this->requestType;
    }
    protected $requestContent;
    public function setRequestContent($requestContent)
    {
        $this->requestContent = $requestContent;
    }
    public function getRequestContent()
    {
        return $this->requestContent;
    }
    protected $number;
    public function setNumber($number)
    {
        $this->number = $number;
    }
    public function getNumber()
    {
        return $this->number;
    }
}
// salary raises
abstract class Manager
{
    protected $name;
    protected $superior;
    function __construct($name)
    {
        $this->name = $name;
    }
    public function setSuperior($superior)
    {
        $this->superior = $superior;
    }
    //apply
    abstract public function requestApplications(Request $request);
}
class CommonManager extends Manager
{
    public function requestApplications(Request $request)
    {
        if ($request->getRequestType() === 'dayoff' && $request->getNumber() <=2)
        {
            echo $this->name.":".$request->getRequestContent()." times:".$request->getNumber()."\n";
        } else {
            if ($this->superior != null) {
                $this->superior->requestApplications($request);
            }
        }
    }
}
class MajaorManager extends Manager
{
    public function requestApplications(Request $request)
    {
        if ($request->getRequestType() === 'dayoff' && $request->getNumber() <=5)
        {
            echo $this->name.":".$request->getRequestContent()." times:".$request->getNumber()."\n";
        } else {
            if ($this->superior != null) {
                $this->superior->requestApplications($request);
            }
        }
    }
}
class GeneralManager extends Manager
{
    public function requestApplications(Request $request)
    {
        if ($request->getRequestType() === 'dayoff')
        {
            echo $this->name.":".$request->getRequestContent()." times:".$request->getNumber()."\n";
        } else if ($request->getRequestType() === 'salary' && $request->getNumber() <= 500){
            echo $this->name.":".$request->getRequestContent()." money:".$request->getNumber()."\n";
        } else {
            echo "no way!\n";
        }
    }
}
$jinli = new CommonManager('jinli');
$zongjian = new MajaorManager('zongjian');
$zhongjinli = new GeneralManager('zhongjinli');
$jinli->setSuperior($zongjian);
$zongjian->setSuperior($zhongjinli);
$request = new Request();
$request->setRequestType('dayoff');
$request->setRequestContent('xiaocai dayoff');
$request->setNumber(1);
$jinli->requestApplications($request);
$request2 = new Request();
$request2->setRequestType('dayoff');
$request2->setRequestContent('xiaocai dayoff');
$request2->setNumber(4);
$jinli->requestApplications($request2);
$request3 = new Request();
$request3->setRequestType('salary');
$request3->setRequestContent('xiaocai add salary');
$request3->setNumber(500);
$jinli->requestApplications($request3);
$request4 = new Request();
$request4->setRequestType('salary');
$request4->setRequestContent('xiaocai add salary');
$request4->setNumber(10000);
$jinli->requestApplications($request4);