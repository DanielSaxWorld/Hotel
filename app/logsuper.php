<?php
session_start();
if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 1800)) {
// last request was more than 10 minutes ago
session_unset();     // unset $_SESSION variable for the run-time
session_destroy();   // destroy session data in storage
}
$_SESSION['LAST_ACTIVITY'] = time(); // update last activity time stamp

if(session_destroy()) //Destroying all sessions
{
  echo "<script>alert('Your Session successfully terminated, please login again')
location.href='../'</script>";
   //Redirecting to home page
}
?>
