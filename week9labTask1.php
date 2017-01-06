 <head>
        <title>Week 9 Lab - Task One</title>
    </head>
    <body>
        <h1>Response from PHP</h1>
<?php
       $firstName=$_GET["fname"];
	   $middleName=$_GET["mname"];
	   $lastName=$_GET["lname"];




        if(empty($_GET["mname"]) && empty($_GET["fname"])&& empty($_GET["lname"])){

           echo "You did not supply any names";
        }

	  elseif (empty($_GET["mname"]) && empty($_GET["lname"])){

			echo "Hello"."     ". $_GET ["fname"]."       "."Welcome to php";
			}
        elseif(isset($_GET["fname"])&& empty($_GET["mname"]) && isset($_GET["lname"])){

          echo "Hello"."    ". $_GET ["fname"]."   ".$_GET ["lname"]."    "."It is a pleasure to meet you";
            }
            elseif(isset($_GET["fname"]) && isset($_GET["mname"])&& isset($_GET["lname"])){

           echo "Hello"."      ". $_GET ["fname"]."      ".$_GET ["mname"]. "     ".$_GET ["lname"]."    "."Your middle name is very unique";
}
        else{
            echo "you didn't supply anything";
        }
	?>
</body>
