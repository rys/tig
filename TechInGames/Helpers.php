<?php
	class TechInGames_Helpers
	{
		public static function tigtag($tag)
		{
			$trimmed = trim($tag);
			$lower = strtolower($trimmed);
			$tig = "tig:";

			if($tig === substr($lower, 0, strlen($tig)))
			{
				$e = explode(':', $trimmed);
				return $e[1];
			}

			return 'TechInGames_TagNotFound';
		}
	}
?>
