<?php
namespace cmspp\plugin\models\plugin\interfaces;

interface IPlugin extends IPriority, IPluginName
{
    public function run();
    
}