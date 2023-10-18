<?php
/**
 * Student Name:            Vino Jeong
 * Student ID:              300364560
 * Assignment/File Name:    Assignment2
 * Section:                 001
 * 
 * Description: 
 *      This portion describes the File/Assignment
 * 
 * References:
 *      Please make sure you provide the appropriate url references
 *      or any comment for example if you referenced some help you
 *      received from your instructor or demo code provided in class      
**/

// Make sure to call all your include files
require_once("inc/config.inc.php");
require_once("inc/Page.class.VJe64560.php");


// if the form was posted, validate the input and to update the valid status

//Show the header
Page::getHeader();
if(isset($_POST['submit'])) {
    switch($_POST['shipping']) {
        case "regular":
            Page::showData($shippingCost["regular"]);
            break;
        case "express";
            Page::showData($shippingCost["express"]);
            break;
        case "priority";
            Page::showData($shippingCost["priority"]);
            break;
    }
} else {
    Page::showForm(true);
}

// If there was post data and there were errors
// display the error messages and the form
// Note that the correct entry needs to be printed in the form's inputs
    
// If there was post data and there were no errors...
// Display thank you message
// Display the data
    
// Other than that, display the form

// Show the footer

Page::getFooter();

?>