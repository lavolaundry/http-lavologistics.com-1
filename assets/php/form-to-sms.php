<?php
/**
 * This script requires a Twilio Account and the Twilio PHP Helper Library,
 * which can be found at http://www.twilio.com/docs/libraries
 */
// Require Twilio Helper Library
// Get the PHP helper library from twilio.com/docs/php/install 
require_once 'Twilio/autoload.php'; // Loads the library 
 
use Twilio\Rest\Client;

$accountSid = 'AC6cf27bb3b633f0d662ce3ee5adf18dcd'; // <-- Replace
$authToken = '915224310698f4ba53a00f8ccceedf2d'; // <-- Replace
// Twilio number the SMS message will be from. You can only send SMS messages from a number purchased from Twilio.
$sending_number = '+14805681771'; // <-- Replace
// Create a connection to Twilio's API with credentials
$client = new Services_Twilio($accountSid, $authToken);
// Actually send the number. This is where the magic happens!
$message = $client->account->sms_messages->create(
  $sending_number,
  $_REQUEST['phone'],
  'LINK TO APP DOWNLOAD'
);
echo "<p>Link sent!</p>";


<?php 
 
 