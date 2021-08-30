<?php
namespace Soca\Controller;

use Laminas\Mvc\Controller\AbstractActionController;
use Laminas\View\Model\ViewModel;

class BackendController extends AbstractActionController
{
    protected $config;
    protected $moduleName;
    protected $controllerName;
    protected $actionParams;

    public function __construct()
    {
        $controllerParams = $this->params()->fromRoute('controller', '');
        $controllerParamsArr = explode("\Controller\\", $controllerParams);
        $moduleName = isset($controllerParamsArr[0])?strtolower($controllerParamsArr[0]):'';
        $controllerName = isset($controllerParamsArr[1])?strtolower(substr($controllerParamsArr[1], 0, strpos($controllerParamsArr[1], 'Controller'))):'';
        $action = $this->params()->fromRoute('action', '');
        
        $id = $this->params()->fromRoute('id', 0);
        
        echo '<br>controllerParams: ';print_r($controllerParams);
        echo '<br>module: '.$moduleName;
        echo '<br>controllerName: '.$controllerName;
        echo '<br>action: '.$action;
        echo '<br>id: '.$id;
    }
}