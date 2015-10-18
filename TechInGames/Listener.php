<?php
	class TechInGames_Listener
	{
		public static function init(XenForo_Dependencies_Abstract $dependencies, array $data)
		{
			XenForo_Template_Helper_Core::$helperCallbacks += array(
				'tigtag' => array('TechInGames_Helpers', 'tigtag')
			);
		}
	}
?>
