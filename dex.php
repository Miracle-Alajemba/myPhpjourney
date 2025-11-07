<?php


//working on switch case


$dayNum = 3; // You can change this number (1 to 7)

switch ($dayNum) {
  case 1:
    echo "Monday";
    break;
  case 2:
    echo "Tuesday";
    break;
  case 3:
    echo "Wednesday";
    break;
  case 4:
    echo "Thursday";
    break;
  case 5:
    echo "Friday";
    break;
  case 6:
    echo "Saturday";
    break;
  case 7:
    echo "Sunday";
    break;
  default:
    echo "Invalid day number. Please enter a number from 1 to 7.";
    break;
}

?>


<?php

// $food = 20;
// $yam = 30;

// echo $yam + $food;

// function myTest()
// {
//     static $x = 0;
//     echo $x;
//     $x++;
// }

// myTest();
// myTest();
// myTest();
// $x = "obi";
// var_dump($x);
// $x = 10;
// var_dump($x);
// $cars = array("Volvo", "BMW", "Toyota");
// var_dump($cars);


//echo strlen("Hellowojifpfeufeygflhijderyegrehrrld!");
//echo str_word_count("hello world");

// $speech = "obi visit this website first thing you willl see is this";
// define("GREETING", "Welcome to W3Schools.com!");
// echo "$speech GREETING";
// echo str_replace("Big", "Bull", "this is what life is what is the meaning of life!"); // outputs Hello Dolly!

// if ($x === $y) {
//     echo "this is correct!";
// } else {
//     echo 'this is not correct';
// };


switch ($y) {
    case "%^$#@":
        echo "this is just symbol";
        break;
    case "533":
        echo "Your number is 56";
        break;
    case "book":
        echo "it is correct";
        break;
    default:
        echo "none of it is correct";
}

// $y = 6;

// $x = 1;

// while ($x <= 5) {
//     echo "it is correct<br>";
//     $x++;
// }

// $x = 6;

// do {
//     echo "The number is: $x";
//     $x++;
// } while ($x <= 5);
// for ($x = 0; $x <= 10; $x++) {
//     echo "The number is: $x";
// // }
// $colours = array("red", "green", "blue", "yellow");

// foreach ($colours as $value) {
//     echo "$value";
// }


// function world()
// {
//     echo "what is the meaning of life";
// }
// world();
// function familyName($fname)
// {
//     echo "$fname Refsnes.";
// }

// familyName("Jani");
// familyName("Hege");
// familyName("Stale");
// familyName("Kai Jim");
// familyName("Borge");

// if ($y > $x) {
// echo "it is correct";
// } elseif ($y === $x) {
// echo "check your code is not correct";
// } else {
// echo "check your assignment value";
// }


// $favcolor = "red";

// switch ($favcolor) {
// case "red":
// echo "Your favorite color is red!";
// break;
// case "blue":
// echo "Your favorite color is blue!";
// break;
// case "green":
// echo "Your favorite color is green!";
// break;
// default:
// echo "Your favorite color is neither red, blue, nor green!";
// }
//Assciate Array
//Create an arrry countries that display 5 countries and the capital name expected output
// // Exercises
// $countries = array("Netherlands" => "Amsterdam", "Germany" => "Berlin", "Thailand" =>
// "Bangkok", "Nigeria" => "Abuja");

// foreach ($countries as $key => $value) {
//     echo "The countries of" . $key . "is" . $value;
// }

//Mutidimensional Array


//Expensive
//Audi,mercedes,bmw

//inexpensive

// $cars = array(
//     "Expensive" => array("Audi", "mercedes", " Bmw",),
//     "Inexpensive" => array("volve", "Toyota", "Ford")
// );
// echo $cars["Inexpensive"][0];
//Study about it

// $expenses = array(40, 70, 20, 85, 40);

// $totalAmount  = 0;
// $amountOfExpenses = 0;

// foreach ($expenses as $expense) {
//     $totalAmount = $expense + $totalAmount;
//     $amountOfExpenses = $amountOfExpenses + 1;
// }

// echo "My " . $amountOfExpenses . " biggest expenses were " . $totalAmount;


// $weather  = array("Rain", "Sunshine", "Clouds", "Hail", "Sleet", "Snow", "Wind");

// echo $weather[6], [7];


// comparison operator
// $x = 11;
// $y = 15;

// if ($x != $y) {
//     echo "this is true";
// } else {
//     echo "this is false";
// }

// Spaceship
//if the value on the is less than the value on the right,the system will return a-1
//if the value on the left is equal to the value on the right, the system will return a 0
//if the value on the left is greater than the vlaue on the right, the system will return a 1

// 1 <> 2;
// if ($x >= $y) {
//     echo "this is true";
// } else {
//     echo "this is false";
// }

//Functions  with arguments/parameters
//An arguments is value passed to a function
//A parameter is used to hold the argument

// $num1 = 5;
// $num2 = 5;
// function calculator($num1, $num2)
// {
//     echo  $num1 * $num2;
// }

// //Arguments
// calculator($num1, $num2);
//A global scope

//Global Scope and local scope
// A global scope provide wide spread access of variable declared in the scope that means it can be acessed from any where from outside a function or class
// $x = 10; //A very is our local scope

// function myfunction()
// {
//     $y = 20;
// }

//There are inbuilt functions in php and as mentioned there two types of functions
//1 = user-defined functions which are functions that are made by the user
//2 = predifined functions or built-in functions are functions that exist in php installation package so  already have them on your localhost
//predefined function

//String functions is a function used to manipulate string values
//Math Functions is a function that return a numeric value number of phpfunctions can be used to format numbers return constants or perform mathematical calculations
//Date Functions = used to formata date or time into a human redeable format it can also be used to display the date of an article for insstance or the last updated data in the database
//Random numbr functions = mostly used in working on algorithms used for genrating intergers



//MAth Builtin functions (Ceil and floor function) and the take one parameter

//Math function

//Ceil =  it runs numbers up to nearest highest intergers
// echo ceil(0.50);
// //Floor = it runs numbers up to nearest lowest intergers
// echo floor(0.50);
// echo round(0.54335, 2);
//exponentiation

// echo exp(4);

//Round = it surrounds a floating point number

//the post superglobal
// there is a function called the isset function is the function used to cjeck whether a variable is set or not and it is invisible

// <form acton ="post.php" method="post">


// </form>

//Get
//  the get method is used tocollect data from the html after submiting it an it is visible

// <form acton ="post.php" method="GET">

// <input type="text" name= "name">
// <input type="text" name="name">
// </form>

//and it is usually used to send nonsensitive information
// usually used to get data from the server or database
//Differences between sessions and cookies
//cokkies are stored in th computer of the user
//Session to use for sensitive information and it also exists as long as the browser is open
//the code session_start();
//Storing information
// $_SESSION ["Name"] = "Dary"
// $_SESSION["Age"] = 24;


//how to create  and write files in

// $myfile = fopen("uploads/file.txt", "W");

//side stuff
//creating a working contact form in php
//1-create a form
//2 create a file named after the action if it is contact.php method post
//3. got to that contact.php and then write a logic like this
//if(isset($Post[submit])){$name = trim($_Post["name]};} the feature of the trim is that it removes all the whitspace at the front and back of the text you enterd in the box you will put in the same details as it is in the form then at end you write down mail();
//
