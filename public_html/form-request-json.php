<?php

  /** 
    * This script represents the target of POST requests from XMLHttpRequest objects,
    * jQuery ajax() methods and the Fetch API's fetch() method.
    *
    **/
    
    // Simulate an error to test error responses. Comment-out when finished testing. 
    //header("HTTP/1.0 403 Forbidden");

    if (!empty($_POST)) {
    
      /** 
        * Typically, the user-submitted form data is used to perform some server-side actions. For example, 
        * to update a database, send an email, create a user etc. In this instance however, the form data is   
        * simply returned as a JSON encoded string for further processing before being displayed to the user. 
        *
        **/
    
        // Output the $_POST array as a JSON encoded string. See example below.
        echo json_encode($_POST);
        
    }
       
  /** 
    * EXAMPLE:
    * 

    1. The $_POST array:

        Array (
            [macos-releases-used] => Array (
                [0] => Catalina (10.15)
                [1] => Mojave (10.14)
                [2] => Mountain Lion (10.8)
                [3] => Snow Leopard (10.6)
                [4] => Kodiak (Public Beta)
            )
            [fav-macos-release] => Snow Leopard (10.6)
            [submit] => Submit
        )


    2. The $_POST array as a JSON encoded string:

        {"macos-releases-used":["Catalina (10.15)","Mojave (10.14)","Mountain Lion (10.8)","Snow Leopard (10.6)","Kodiak (Public Beta)"],"fav-macos-release":"Snow Leopard (10.6)","submit":"Submit"}

    *
    *
    **/

?>
