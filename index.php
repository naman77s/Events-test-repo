<?php
if(!isset($_COOKIE['LandingPageURL'])) {
  error_log ("Cookie named 'LandingPageURL' is not set  in ".__FILE__." #".__LINE__);
} else {
  error_log("Cookie 'LandingPageURL' is set in ".__FILE__." #".__LINE__);
  error_log("Value of Cookie is: " . $_COOKIE['LandingPageURL'] );
}
?>