		<a href="index.php" accesskey="h" title="Delectamenti Homepage">    Home    </a>
		<a></a>
		<a href="about.html" accesskey="a" title="About Delectamenti">    About   </a>
		<a></a>
		<a href="contact.html" accesskey="c" title="Contact Delectamenti">  Contact </a>
		<a></a>
		<a href="login.html" accesskey="l" title="Login">    Login   </a>

<?php
$cookie_name = 'delectamenti.user';
if(!isset($_COOKIE[$cookie_name])) {
    echo '<a href="login.html" accesskey="l" title="Login">    Login   </a>';
} else {
    echo '<a href="login.html" accesskey="l" title="Logout of website">     Logged in as ' . $_COOKIE[$cookie_name] . ' </a>';
}
?>