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

class Page
{
    static private $title = "Assignment 2: Form Processing";
    static private $studentName = "Vino Jeong";
    static private $studentID = "3000364560";

    // This static function set the HTML header including the title and display the student name and ID
    static function getHeader() 
    {
    ?>
        <!DOCTYPE html>
        <html>

        <head>
            <meta charset="utf-8">
            <meta name="author" content="">
            <title></title>
            <link href="css/styles.css" rel="stylesheet">
        </head>

        <body>
            <header>
                <h1>Assignment 2: Form Processing by Vino Jeong (300364560)</h1>
            </header>
            <article>
    <?php
    }

    // This static function close all the HTML tags at the bottom of the document
    static function getFooter()
    {
        ?>
                <!-- Start the page's footer -->            
                </article>                
            </body>

        </html>
        <?php
    }

    // This static function display the form. It gets the information of the valid input 
    // that can be part of the $validation status array from the Validate class
    // Note: The correct post data will be displayed within the HTML input control object
    static function showForm($valid_status)
    {
        ?>
                            <section class="main">
                <!-- Start the page's form -->
                <div class="form">
                    <form action="" method="post">
                        <fieldset id="form">
                            <legend>Douglas Custom Build Order Page</legend>
                            <div>                                
                                <label for="fullName">Full Name</label>
                                <input type="text" name="fullName" id="fullName" placeholder="First and last name">
                            </div>
                            <div>                                
                                <label for="email">Email Address</label>
                                <input type="email" name="email" id="email" placeholder="someone@here.ca">
                            </div>                              
                            <div>
                                <label for="phoneNumber">Phone Number</label>
                                <input type="text" name="phoneNumber" id="phoneNumber" placeholder="(nnn) nnn nnnn">
                            </div>                                                          
                            <div>
                                <label for="productAmount">Product Amount</label>
                                <input type="text" name="productAmount" id="productAmount" placeholder="number of product less than 7">
                            </div>                                                
                            <div>
                                <label for="giftWrap">Gift wrap?</label>
                                <span>
                                <input type="radio" name="giftWrap" id="giftWrapYes" value="yes"> Yes
                                <input type="radio" name="giftWrap" id="giftWrapNo" value="no"> No
                                </span>
                            </div>
                            <div>
                                <label for="shipping">Shipping Priority</label>
                                <select name="shipping">
                                    <option value="Select...">Please select one option</option>
                                    <option value="regular">Regular - $6</option>
                                    <option value="express">Express - $15</option>
                                    <option value="priority">Priority - $25</option>
                                </select>
                            </div>                            
                            <div>
                                <input type="submit" name="submit" value="Submit Order">
                                <input type="reset" name="reset" value="Clear Data">
                            </div>
                        </fieldset>
                    </form>
                </div>
            </section> 
        <?php
    }

    // This static function read the validation status property of the Validate class 
    // and display the error messages or submission notification
    static function ShowNotification($valid_status)
    {
        ?>
        <section class="sidebar">
                <!-- Start the page's error notification -->
                <div class="highlight">
                    <p>Please fix the following errors:</p>
                    <ul>
                        <li>Error 1</li>
                        <li>Error 2</li>
                    </ul>                                        
                </div>
                
        <?php
    }



    // This static function display the submitted data. The shipping cost variable is the 
    // shipping cost associative array declared in config.inc.php
    // Make sure to calculate the total cost
    static function showData($shippingCost)
    {
        function calculateTotal($shippingCost) {
            $total = $_POST['productAmount'] * ITEM_COST;
            if($total > 100) {
                  $total = $total * (1 - DISCOUNT);  
            }
            if($_POST['giftWrap'] == "yes") {
                $total += WRAP_COST;
            }
            $total += $shippingCost;
            $total *= 1 + TAX;
            return number_format($total, 2);
            // sprintf('$%.2$f', $total);
        }

        ?>
        <!-- Start the page's display submitted data -->
        <div class="data">
            <b>Entered data is:</b>
            <table>
                
                <tr>
                    <th>Name</th>
                    <td><?=$_POST['fullName'];?></td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td><?=$_POST['email'];?></td>
                </tr>
                <tr>
                    <th>Phone</th>
                    <td><?=$_POST['phoneNumber'];?></td>
                </tr>
                <tr>
                    <th>Product Amount</th>
                    <td><?=$_POST['productAmount'];?></td>
                </tr>                        
                <tr>
                    <th>Gift Wrap?</th>
                    <td><?=$_POST['giftWrap'];?></td>
                </tr>
                <tr>                            
                    <th>Shipping</th>                        
                    <td><?=$_POST['shipping'];?></td>                        
                </tr>
                <tr>                            
                    <th>Total Cost</th>                        
                    <td>$<?=calculateTotal($shippingCost);?></td>                        
                </tr>
            </table>
        </div>
    </section>

    <?php

    }

    static function thankYouMessage() {
        ?>
            <div class="row highlight">            
                <p>
                    Thank you for submitting the data!</p>
                </p>    
            </div>
    
        <?php
    }
    
}



?>