<?php
namespace FNPC\Tasks;

class QuickSystemTask extends \pocketmine\scheduler\PluginTask
{
	private $plugin;
	
	public function __construct(\FNPC\Main $plugin)
	{
		parent::__construct($plugin);
		$this->plugin=$plugin;
	}
	
	public function onRun($currentTick)
	{
		$this->plugin=$this->getOwner();
		\FNPC\npc\NPC::tick();
	}
}
?>
