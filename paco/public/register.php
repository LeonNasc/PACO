<?php

    require("../includes/config.php");

    //If the user reached the controller via a GET request, will render a form
    if($_SERVER["REQUEST_METHOD"] == "GET")
    {
          render("register.php");
    }
    //If the form was filled and sent back as POST request, will add user to DB
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        //Query the database to insert a new user. Check if the user is valid.
        $registered = cs50::query("SELECT * FROM PACO_users WHERE username = ?", $_POST['regisid']);
        
        if (!empty($registered)) //If user isn't valid
        {
         render("apology", ['errormesage' => "This username is already in use. Try again"]);
        }
        else
        {
            $pwd = password_hash($_POST['regispwd'], PASSWORD_DEFAULT);
            
            cs50::query("INSERT INTO PACO_users(username, userhash) VALUES (?,?)", $_POST['regisid'],$pwd);
            render("register.php");  
        }
    }
?>