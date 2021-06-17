<?php  
//save Trasaction information form PayPal 
$txn_id = $_GET['tx']; 
 
$payment_gross = $_GET['amt']; 
 
$currency_code = $_GET['cc']; 
 
$payment_status = $_GET['st']; 
 
 
if(!empty($txn_id)){ 
 
        //Insert tansaction data into the database 
        $sub="Mail from Paypal!";
        $msg="Thank you!!
        You have successfully donated the amount $payment_gross $currency_code  !";
        $rec="dineshsunraj27@gmail.com";
        if(mail($rec,$sub,$msg))
        {
            echo "";
        }
  ?>
<img src="http://www.shikharclasses.in/wp-content/uploads/2020/04/PAYMENT-SUCCESS.png" style="display:block; margin-left: auto;
        margin-right: auto;
        width: 50%;" />
       
      <?php 
       
      }else{ 
       
      ?> 
       
       <img src="https://kashmirreader.com/wp-content/uploads/2020/07/Payment-Failure-1.png" style="display:block; margin-left: auto;
        margin-right: auto;
        width: 50%;" />
       
      <?php 
       
      } 
       
      ?>
 
 

 

 
