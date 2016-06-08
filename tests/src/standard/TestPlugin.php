<?php
namespace cmspp\plugin\standard;


use cmspp\events\models\events\interfaces\IEvent;
use cmspp\plugin\models\interfaces\IPlugin;
use cmspp\serviceManager\interfaces\Service\IControlManager;
use cmspp\serviceManager\interfaces\Service\IServiceManager;

class TestPlugin implements IPlugin
{
    /**
     * @param IServiceManager $serviceManager
     * События (или более расшириный вариант, - плагины), могут управлять всем приложением, выводом или фильтрации контатна.
     * У них есть доступ ко всем сервисам, а соответственно, с лёгкостью могут работать с базой данных, управлять или реагировать на определённые маршруты и т.д.
     * @see IServiceManager
     *
     * @return IEvent[]
     */
    public function run(IServiceManager $serviceManager, IControlManager $serviceControl): bool
    {
        echo "RUN: testPlugin\n";
        return false;
    }
    /**
     * @return int
     */
    public function getPriority(): int
    {
        return 0;
    }

    public function getType(): string
    {
        return "Plugin";
    }

    public function getName(): string
    {
        return "test";
    }

    public function init(IServiceManager $serviceManager)
    {
        echo "INIT: testPlugin\n";
    }
}