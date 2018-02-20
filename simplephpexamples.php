<?php echo"Simple PHP<br></br>";

	$testvar = 1234;
	echo"Here is a variable: $testvar <br></br>";
	
	$testvar +=10;
	echo"Here is the same variable with 10 added to it : $testvar <br></br>";
	
	echo"Here is an example of using an If statement<br></br>";
	IF(5+5 == 10){
		echo"If you see this, it's because 5+5 equals 10<br></br>";
	};
	IF(5+5 == 11){
		echo"null";
	}ELSE{
		echo"If you see this, it's because 5+6 does not equal 10 <br></br>";
	};
	IF("5"===5){
		echo"null";
	}ELSE{
		echo'"5" is not equal to 5. <br></br>';
	}
	echo"Next example is of different types of loops.<br></br>";
	$whileloop = 1;
	WHILE($whileloop < 5){
		echo"Number of loops = $whileloop ";
		$whileloop++;
	};
	echo"<br></br>";
	FOR($forloop = 1; $forloop <= 5;$forloop++){
		echo"Number of loops for = $forloop ";
	};
	echo"<br></br>";
	$names = ARRAY("Ben","Bob","Brenda","Keith");
	FOREACH($names as $item=>$value){
		echo"$item $value ";
	};
	echo"<br></br>";
	$switchvar = 1;
	SWITCH($switchvar){
		case 0:
		echo"Switch case = 0";
		break;
		case 1:
		echo"Switch case = 1";
		break;
		case 10:
		echo"Switch case = 10";
		break;
	}
	echo"<br></br>";
	FUNCTION addthensubtract1($x,$y){
		return ($x+$y)-1;
	}
	$results = addthensubtract1(5,7);
	echo"The function adds 5 and 7 then - 1 so the result should be 11 and the actual result is $results";
	
	
?>
