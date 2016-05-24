<?php
namespace cmspp\plugin\models\plugin\interfaces;
use cmspp\events\models\events\interfaces\IEvent;
use cmspp\events\models\events\interfaces\IWhereExecuted;
use cmspp\serviceManager\interfaces\IServiceManager;
interface IPlugin extends IPriority, IEvent
{
    public function run(IServiceManager $serviceManager, IWhereExecuted $whereExecuted);
}