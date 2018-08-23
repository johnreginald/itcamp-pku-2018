<?php

    require "app1.php";	
    require "app2.php";
    require "app3.php";

    use One\Application as One;
    use Two\Application as Two;
    use Three\Application as Three;

    $test = new One\Test(); // Local Namespace
    $test->message();


    $test = new \App2\Test(); // Global Namespace
    $test->message();


    // $test = new A3\Test();
    // $test->message();