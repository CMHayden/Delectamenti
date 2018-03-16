<?php
if(isset($_POST['email'])) {


    $email_to = "cmh1@hw.ac.uk";
    $email_subject = "New contact";

    function died($error) {
      echo'
      <html>
      <head>
          <meta charset="UTF-8"></meta>
          <meta name="description" content="A website gathering recipes and helping to teach people how to cook."></meta>
          <meta name="keywords" content="Delectamenti. Food. Eat. Cook. Recipe."></meta> <!-- used by search engines -->
          <meta name="author" content="Callum M Hayden & Martyn Dewar"></meta>
          <meta name="viewport" content="width=device-width, initial-scale=1.0"></meta> <!-- used for RWD -->
      	  <title>Message errors</title>
          <link rel="stylesheet" media="screen and (min-width: 550px)" href="style.css"></link>
          <link rel="stylesheet" media="screen and (max-width: 550px)" href="smallstyle.css"></link>
      </head>
      <body>
      <div class = "wrapper" id="wrapper">
        <div class = "socialsearch" id="socialsearch">
          <a href=https://www.instagram.com/delectamentiuk><img src="Image/instagram.png" alt="Instagram link" width="25" height="25"></img></a>
          <a href=https://twitter.com/DelectamentiUk><img src="Image/twitter.png" alt="Twitter link" width="25" height="25"></img></a>
          <a href=https://www.pinterest.co.uk/delectamenti/pins/><img src="Image/pinterest.png" alt="Pinterest link" width="25" height="25"></img></a>
          <a href=https://www.facebook.com/DelectamentiUK/><img src="Image/facebook.png" alt="Facebook link" width="25" height="25"></img></a>
        </div>
        <div class = "search" id="search">
          <form>
            <input type="text" name="search" placeholder="Search.."></input>
          </form>
        </div>
        <div class = "logo" id="logo">
          <a href="index.html"><h1>Delectamenti</h1></a>
        </div>
        <div class = "nav" id="myNav">
          <a                  href="index.html">    Home    </a>
          <a></a>
          <a                  href="about.html">    About   </a>
          <a></a>
          <a                  href="contact.html">  Contact </a>
          <a></a>
          <a                  href="login.html">    Login   </a>
        </div>
        <br />
      </body>
      </html>';
      echo'  <div class="display" id="myDisplay">';
        echo "Sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
      echo'
        <form action="contact.html">
          <input type="submit" value="Back" />
        </form>
      </div>
      <footer>
      <div class ="footer" id="footer">
        Creative design coursework prototype authored by Callum M Hayden and Martyn Dewar. For further information contact us on
        cmh1@hw.ac.uk or md46@hw.ac.uk and we will try to respond as swiftly
        as possible.
      </div>
      </footer>';

        die();
    }


    // validation expected data exists
    if(!isset($_POST['firstname']) ||
        !isset($_POST['lastname']) ||
        !isset($_POST['email']) ||
        !isset($_POST['subject'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');
    }



    $first_name = $_POST['firstname']; // required
    $last_name = $_POST['lastname']; // required
    $email_from = $_POST['email']; // required
    $subject = $_POST['subject']; // required

    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

  if(!preg_match($email_exp,$email_from)) {
    $error_message .= "The email address you entered isn't valid.<br />";
  }

    $string_exp = "/^[A-Za-z .'-]+$/";

  if(!preg_match($string_exp,$first_name)) {
    $error_message .= "The first name you entered isn't valid.<br />";
  }

  if(!preg_match($string_exp,$last_name)) {
    $error_message .= "The last name you entered isn't valid.<br />";
  }

  if(strlen($subject) < 2) {
    $error_message .= "The message you're trying to send isn't valid.<br />";
  }

  if(strlen($error_message) > 0) {
    died($error_message);
  }

    $email_message = "Form details below.\n\n";


    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }

    $email_message .= "First Name: ".clean_string($first_name)."\n";
    $email_message .= "Last Name: ".clean_string($last_name)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Comments: ".clean_string($subject)."\n";

// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"></meta>
    <meta name="description" content="A website gathering recipes and helping to teach people how to cook."></meta>
    <meta name="keywords" content="Delectamenti. Food. Eat. Cook. Recipe."></meta> <!-- used by search engines -->
    <meta name="author" content="Callum M Hayden & Martyn Dewar"></meta>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"></meta> <!-- used for RWD -->
	  <title>Message sent</title>
    <link rel="stylesheet" media="screen and (min-width: 550px)" href="style.css"></link>
    <link rel="stylesheet" media="screen and (max-width: 550px)" href="smallstyle.css"></link>
</head>
<body>
<div class = "wrapper" id="wrapper">
  <div class = "socialsearch" id="socialsearch">
    <a href=https://www.instagram.com/delectamentiuk><img src="Image/instagram.png" alt="Instagram link" width="25" height="25"></img></a>
    <a href=https://twitter.com/DelectamentiUk><img src="Image/twitter.png" alt="Twitter link" width="25" height="25"></img></a>
    <a href=https://www.pinterest.co.uk/delectamenti/pins/><img src="Image/pinterest.png" alt="Pinterest link" width="25" height="25"></img></a>
    <a href=https://www.facebook.com/DelectamentiUK/><img src="Image/facebook.png" alt="Facebook link" width="25" height="25"></img></a>
  </div>
  <div class = "search" id="search">
    <form>
      <input type="text" name="search" placeholder="Search.."></input>
    </form>
  </div>
  <div class = "logo" id="logo">
    <a href="index.html"><h1>Delectamenti</h1></a>
  </div>
  <div class = "nav" id="myNav">
    <a                  href="index.html">    Home    </a>
    <a></a>
    <a                  href="about.html">    About   </a>
    <a></a>
    <a                  href="contact.html">  Contact </a>
    <a></a>
    <a                  href="login.html">    Login   </a>
  </div>
  <div class="display" id="myDisplay">
    Message sent! Thanks for contacting us. We will get back to you as soon as possible.<br />
    <form action="contact.html">
      <input type="submit" value="Back" />
    </form>
  </div>
  <footer>
    <div class ="footer" id="footer">
      Creative design coursework prototype authored by Callum M Hayden and Martyn Dewar. For further information contact us on
      cmh1@hw.ac.uk or md46@hw.ac.uk and we will try to respond as swiftly
      as possible.
    </div>
  </footer>
</body>
</html>
<?php

}
?>
