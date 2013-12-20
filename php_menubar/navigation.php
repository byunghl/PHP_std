<ul id="menu">
	<li <?php
		if($thisPage=="index")
			echo " id=\"currentpage\" class=\"selected\" "; 
	?>> 
	<a href="index.php"> Home </a>
	
	<li <?php
		if($thisPage=="page1")
			echo " id=\"currentpage\" class=\"selected\" "; 
	?>> 
	<a href="page1.php"> Resume </a>
	
	<li <?php
		if($thisPage=="page2")
			echo " id=\"currentpage\" class=\"selected\" "; 
	?>> 
	<a href="page2.php"> Projects </a>
	
	
	<li <?php
		if($thisPage=="page3")
			echo " id=\"currentpage\" class=\"selected\" "; 
	?>> 
	<a href="page3.php"> Interests </a>
	
	<li <?php
		if($thisPage=="page4")
			echo " id=\"currentpage\" class=\"selected\" "; 
	?>> 
	<a href="page4.php"> Contact </a>
</ul>