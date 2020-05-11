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
        * simply formatted and returned as a text string for display to the user. 
        *
        **/
        
        // Output the $_POST array as an HTML-formatted text string
        echo "<u>macOS (OS X) releases you have used:</u> <b>" . implode(", ", $_POST['macos-releases-used']) . "</b><br><u>Your favourite macOS (OS X) release:</u> <b>" . $_POST['fav-macos-release'] . "</b>";
        
    }
    
?>
