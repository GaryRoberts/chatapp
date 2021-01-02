<?php
$to =  $_POST['client'];
$subject = "Chatroom to join";
$txt = "Hey. please join my chatroom with this id: ".$_POST['roomId'];
$headers = "From: garyroberts1995@gmail.com";

mail($to,$subject,$txt,$headers);

// return response()->json([
//     'message'=>"email was sent to user"
//   ]);

echo "this is cool";
?>