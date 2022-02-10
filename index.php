<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<header>
  <h1>Tests</h1>

	</header>
    <?php

//Сортування бульбашкою
/*function bubbleSort(array $arr) {
    $count = count($arr);
    if ($count <= 1) {
        return $arr;
    }
 
    for ($i = 0; $i < $count; $i++) {
        for ($j = $count - 1; $j > $i; $j--) {
            if ($arr[$j] < $arr[$j - 1]) {
                $tmp = $arr[$j];
                $arr[$j] = $arr[$j - 1];
                $arr[$j - 1] = $tmp;
            }
        }
    }
 
    return $arr;
}*/
//Сортування вставками
/*function insertSort(array $arr) {
    $count = count($arr);
    if ($count <= 1) {
        return $arr;
    }
 
    for ($i = 1; $i < $count; $i++) {
        $cur_val = $arr[$i];
        $j = $i - 1;
 
        while (isset($arr[$j]) && $arr[$j] > $cur_val) {
            $arr[$j + 1] = $arr[$j];
            $arr[$j] = $cur_val;
            $j--;
        }
    }
 
    return $arr;
}*/
//Швидке сортування
/*function quickSort(array $arr) {
    $count= count($arr);
    if ($count <= 1) {
        return $arr;
    }
 
    $first_val = $arr[0];
    $left_arr = array();
    $right_arr = array();
 
    for ($i = 1; $i < $count; $i++) {
        if ($arr[$i] <= $first_val) {
            $left_arr[] = $arr[$i];
        } else {
            $right_arr[] = $arr[$i];
        }
    }

    $left_arr = quickSort($left_arr);
    $right_arr = quickSort($right_arr);
 
    return array_merge($left_arr, array($first_val), $right_arr);
}*/


//  echo "<br>"; 
// $arr = array(1,3,5,-3,5,12,-4,77);
// foreach ($arr as $i){
// 	echo $i.' ';
// }

//  echo "<br>"; 
// $arr2 = ...($arr);
// foreach ($arr2 as $i){
// 	echo $i.' ';
// }

 /**
  * 
  */
 class Person
 {
     private $age, $name;
     static $status = "alive";

     function __construct($name, $age)
     {
        echo "constructor_person";
         $this->name = $name;
         $this->age = $age;
     }

    function __destruct()
    {
        echo "<br>";
        echo "destructor_person";
    }

     function print_per()
     {
        echo "Name: $this->name Age: $this->age Status: ".Person::$status." <br>";
     }
 }


 class Me extends Person
 {
     private $condition;

     function __construct($name, $age, $condition)
     {
         parent::__construct($name, $age);
         $this->condition = $condition;
     }

      function print_me()
     {
        echo "constructor_me";
        Person::print_per();echo "<br>";
        echo "Anxiety ".$this->condition;
     }

     function __destruct()
    {
        echo "<br>";
        echo "destructor_me";
    }
 }




$pers = new Person("Luke", 39);
$pers->print_per();

echo "<br>";
$tan = new Me("Tania", 21, true);
$tan->print_me();


	 ?>
</body>
</html>