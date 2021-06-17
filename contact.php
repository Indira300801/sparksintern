<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    
     <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>body{
    background-image: url('https://b2r14pkp-69c6.kxcdn.com/wp-content/uploads/2020/10/paypal-alternativen-2048x1152.png');
    background-size: cover;
    background-repeat:no-repeat;
    color:#fff
}
#form{
    background-color: #000;
    height:500px;
    width:450px;
    margin:auto;
    padding:20px;
    opacity: 0.7;
    color:#fff
}
#form h3{
    border-bottom: 2px solid #3399ff;
    width:210px;
    padding: 5px;
}
::placeholder{
    color:#fff
}
#input #input-group{
    width:300px;
    margin:5px;
    border-top: none;
    border-left: none;
    border-right: none;
    outline: none;
    background: transparent;
    color:#fff
}
#input2 #input-group{
    width:195px;
    margin:5px;
    border-top: none;
    border-left: none;
    border-right: none;
    outline: none;
    background: transparent;
    color:#fff
}
#input3 #input-group{
    margin-left: 50px;
}
#input4 #input-group{
    width:300px;
    margin:5px;
    border-top: none;
    border-left: none;
    border-right: none;
    outline: none;
    background: transparent;
    color:#fff
}
#input4 #input-group1{
    width:615px;
    margin:5px;
    border-top: none;
    border-left: none;
    border-right: none;
    outline: none;
    background: transparent;
    color:#fff
}
#input5 h3{
    border-bottom: 2px solid #3399ff;
    width:220px;
    padding: 5px;
}
#input6 #input-group{
    width:300px;
    margin:5px;
    border-top: none;
    border-left: none;
    border-right: none;
    outline: none;
    background: transparent;
    color:#fff
}
#input6 #input-group1{
    width:615px;
    margin:5px;
    border-top: none;
    border-left: none;
    border-right: none;
    outline: none;
    background: transparent;
    color:#fff
}</style>


</head>
<body>
    <div class="container"><!--container-->

        <form class="form-group" action="contact-form-process.php"  method="POST" ><!--form-->
        <h1 class="text-center">Contact Us</h1>

            <div id="form" ><!--form-->
            
            
            <div id="input"><!--input-->
            
                <input type="text" id="input-group" placeholder="Name" right:100px name="Name">
                </div>
                <div id="input">
                <input type="text" id="input-group" placeholder="Email" name="Email">
                <div>
                </form><!--form-->
            <div id="input">
            <label id="input-group">Message</label>
    <textarea  name="Message" placeholder="Write something.." style="height:200px;width:350px"></textarea>
    </div>
    <button type="submit" class="btn btn-primary" name ="submit" style="position:absolute;left:700px">Submit</button>
</div><!--container-->
</body>
</html>