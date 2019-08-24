<?php
    // Check variable (firstName) for validation
    if(isset($_POST['firstName']) && $_POST['firstName'] != ""){
    
        // collecting all the posts from the form into local variables.
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $subject = $_POST['subject'];
        
        // Store recipient email in variable
        //$to = "Email adress here";  
        
        // Format Headers
        $headers = "MIME-Version: 1.0\r\n";
        // Email complies with the standard called MIME
        $headers.= "Content-type:text/html;charset=utf-8\r\n";
        // within the MIME standard, this email is: html formatted, and using utf-8
        $fullName = "$firstName $lastName";
        // create a var that has the full name of the user. ex: Joe Smith
        $headers.= "From: $fullName<$email>";
        // $headers.="From: my web site<dontreply@intech.club>";
        
        // Call the function mail(recipient, subject, content, headers-optional)
        mail($to,$subject,$message,$headers);
    }
?>

<!DOCTYPE html>
<html lang = "en">
<head>
    <link rel='icon' href='assets/images/iTfavi.png' type='image/x-icon'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/script.js"></script>
    <script src="https://kit.fontawesome.com/d00e9b5b54.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>inTech Club</title>
</head>
<body>
    <div id="nav_clear"></div> <!--    Navigation Clear    -->

    <nav id="menu" class="respMenu">
        <a href="index.html"><img src="assets/images/intech_logo_dark.png" alt="inTech" id="logo"></a>
        <a href="javascript:void(0);" onClick="responsiveNav()" class="icon">
            <i class="fa fa-bars"></i>
        </a>
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="blog.html">Blog</a></li>
            <li><a href="contact.html">Contact</a></li>
        </ul>
    </nav>
    <main>

        <!--    Contact Submission Section   -->
        <section class="contact_submit_section">
            <div class="content_area">
                <?php // Echo Thank you message
                    echo "<p> Thank you " . ucwords($firstName) . "<br>Your email has been sent!</p>";
                ?>
                <div class="contact_submit_area">
                    <div class="user_submission">
                        <?php // Echo Submitted Email
                            echo "<h3> Your Submission</h3>";
                            echo "<p> Name: " . ucwords($fullName) . "</p>";
                            echo "<p> Email: " . $email . "</p>";
                            echo "<p> Subject: " . $subject . "</p>";
                            echo "<p> Message: " . $message . "</p>";
                        ?>
                    </div>
                    <a href="index.html">Go back to home</a>
                </div>
            </div>
        </section>
    </main>
    

    <footer>
        <p>&copy; Broward College 2019</p>
        <!--<p>Site by<a href="#" target="_blank"><span id="siteAuthor"> Bobby Henderson</span></a></p>-->
        <p><a href="index.html" class="footer-map">Home</a> | <a href="blog.html" class="footer-map">Blog</a> | <a href="contact.html" class="footer-map">Contact</a></p>
    </footer>
</body>
</html>
