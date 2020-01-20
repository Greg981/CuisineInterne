$message = stripslashes(strip_tags($_POST['message2']));
$tlf=array(
            array("email" => "name1", "name" => "mname1"),
            array("email" => "name2", "name" => "mname2")
          );
$subject = "Hello world";
$from = "me@gmail.com";
$headers = "From: $from";

foreach($tlf as $contact){
    $to = $contact["email"] "@gmail.com";
    $replacedMessage = str_replace('$navn', $contact["name"], $message);
    mail($to,$subject,$replacedMessage,$headers);
}