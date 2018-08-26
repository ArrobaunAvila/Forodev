<?php 


unset($_SESSION['user'],$_SESSION['session'],$_SESSION['email']);
session_destroy();
header('location: ?view=index');


 ?>