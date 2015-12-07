<?php
namespace FNPC\protocol;

/*
Copyright FENGberd © 2015
Coding Project:
http://coding.net/u/FENGberd/p/FNPC
*/

class StrangePacket extends \pocketmine\network\protocol\DataPacket
{
	const NETWORK_ID=0x1b;
	public $address;
	public $port=19132;
	
	public function pid()
	{
		return 0x1b;
	}
	
	public function decode()
	{
		
	}
	
	public function encode($version=4)
	{
		$this->reset();
		$this->putByte($version);
		if($version===4)
		{
			foreach(explode('.',$this->address) as $b)
			{
				$this->putByte((~((int)$b))&0xff);
				unset($b);
			}
			$this->putShort($this->port);
		}
		else
		{
			//IPv6
		}
	}
}
?>
