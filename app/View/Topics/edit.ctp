<h1> Edit </h1>


<?php

	echo $this -> form -> create('Topic');
	//echo $this -> form -> input('user_id');
	echo $this -> form -> input('title');
	echo $this -> form -> input('visible');
	echo $this -> form -> end('Edit User');


?>