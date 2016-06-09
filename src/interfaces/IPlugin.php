<?php
namespace cmspp\plugin\interfaces;
use cmspp\events\interfaces\IEvent;

/**
 * Interface IPlugin
 * Все плагины - есть события. Каждый плагин, может вещать или удалять события на другие плагины. А возможно даже, может решать, быть или не быть видным для определённого события.
 *
 * Когда плагин запускается, то запускаются и те плагины и события, которые отслеживают его.
 * В итоге, - цепная реакция. Каждый плагин, занимается своими делами.
 * @package cmspp\plugin\models\plugin\interfaces
 */
interface IPlugin extends IEvent
{
    
}