<?php
namespace cmspp\plugin\models\EmptyPlugins;

use cmspp\events\interfaces\IEvent;
use cmspp\plugin\interfaces\IPlugin;
use cmspp\serviceManager\interfaces\Service\IControlManager;
use cmspp\serviceManager\interfaces\Service\IServiceManager;
use cmspp\serviceManager\models\CounterServise\CounterService;

class EmptyThirdPlugin implements IPlugin
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
        $counterService = $serviceManager->get("CounterService");
        if ($counterService instanceof CounterService)
            $counterService->addPlugin($this);
        echo "RUN: OtherPlugin\n";
        return true;
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
        return "Other";
    }

    public function init(IServiceManager $serviceManager)
    {
        echo "INIT: OtherPlugin\n";
    }
}