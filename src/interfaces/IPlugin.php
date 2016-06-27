<?php
namespace cmspp\plugin\interfaces;
use cmspp\events\interfaces\IEvent;

/**
 * Interface IPlugin
 * Когда плагин запускается, то запускаются и те плагины и события, которые отслеживают его.
 * @package cmspp\plugin\models\plugin\interfaces
 */
interface IPlugin extends IEvent
{
    
}