<?php
	
	class NightsWatch implements IFighter
	{
		private $warrior = array();

		public function recruit($a)
		{
			$this->warrior[] = $a;
		}

		function fight()
		{
			foreach ($this->warrior as $s) {
				if (method_exists(get_class($s), 'fight'))
					$s->fight();
			}
		}
	}
?>
