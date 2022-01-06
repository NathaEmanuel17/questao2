<?php 
	function primo($inicial, $final) {
		$array = [];

		$i = 0;
		
		echo 'numeros primos entre 10 e 29'.'<br />';
		for($i = $inicial, $j = 0; $i < $final; $i++, $j++) {
			if(($i % 2) == 1) {
				$array[$j] = $i;

				//verifica
				if(($array[$j]) % 3 != 0) {
					if(($array[$j]/5) != 5) {
						print "$array[$j] <br>";
					}
				}
			}
		}

		//print_r($array);
	}

	primo(10, 29);
?>