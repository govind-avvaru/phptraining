<?php
 $str1="helloworld    ,hi";
 $str2="who's there";
 $str3="who is ram         hari";
 // 1.addcslashes() ---adds a blackslash before a specific character
 
 echo addcslashes($str1,"w")."<br>";


// 2. addslashes()  --- adds a blackslash before a predefined characters
// predefined characters are ' , " , Null ...etc 

echo addslashes($str2)."<br>";


//3.chop()  ---remove whitespaces or other text from a right side o a string

echo chop($str3)."<br>";


//4. chr()  --- returns a specific character based on ascii value


echo chr(98)."<br>";


//5. count_chars() returns character count.
//   for  argument  0 -> an array with the ascii value as key and number of occurance value.(default)
//1-> bur occurances greater than 0
//2->equal to 0
//3->a string with all the different characters
//4-> a string with all the unused characters

print_r(count_chars($str1,1));

echo"<br>";

//6.explode() --- breaks a string into array

//syntax:-   explode(separator,string,limit)

//separator --->	Required. Specifies where to break the string
//string    -->        Required. The string to split

print_r(explode(" ",$str1));

echo"<br>";

//7.implode() --- The implode() function returns a string from the elements of an array.
$s=array("hi","bye");

print_r(implode("     ",$s));
echo "<br>";

$arr = array('Hello','World!','Beautiful','Day!');
echo implode(" ",$arr)."<br>";
echo implode("+",$arr)."<br>";


echo strlen("Hello world!"); 

echo str_word_count("Hello world!");

echo strrev("Hello world!");



echo strpos("Hello world!", "world");


echo str_replace("world", "Dolly", "Hello world!");































?>
