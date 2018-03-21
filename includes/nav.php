		<a href="index.php" accesskey="h" title="Delectamenti Homepage">    Home    </a>
		<a></a>
		<a href="about.php" accesskey="a" title="About Delectamenti">    About   </a>
		<a></a>
		<a href="contact.php" accesskey="c" title="Contact Delectamenti">  Contact </a>
		<a></a>
<?php
$cookie_name = 'delectamenti.user';
if(!isset($_COOKIE[$cookie_name])) {
    echo '<a href="login.php" accesskey="l" title="Login">    Login   </a>';
} else {
    echo '<a href="logout.php" accesskey="l" title="Logout of website">     Logged in as ' . $_COOKIE[$cookie_name] . ' </a>';
}
?>