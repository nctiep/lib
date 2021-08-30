<?php
namespace Soca\Lib\Controller;

use Laminas\Mvc\Controller\AbstractActionController;
use Laminas\View\Model\ViewModel;

class FrontendController extends AbstractActionController
{
    protected $config;
    protected $moduleName;
    protected $controllerName;
    protected $actionParams;

    public function __construct()
    {
        $controllerParams = $this->params()->fromRoute('controller', '');
        $controllerParamsArr = explode("\Controller\\", $controllerParams);
        $this->moduleName = isset($controllerParamsArr[0])?strtolower($controllerParamsArr[0]):'';
        $this->controllerName = isset($controllerParamsArr[1])?strtolower(substr($controllerParamsArr[1], 0, strpos($controllerParamsArr[1], 'Controller'))):'';
        
        
    }
}