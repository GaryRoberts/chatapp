<?php
$to =  $_POST['client'];
$subject = "Chatroom to join";
$txt = "Hey. please join my chatroom with this id: ".$_POST['roomId'];
$headers = "From: garyroberts1995@gmail.com";

// $result->message = "email was sent to user with chatroom id";
// echo json_encode($result);
// mail($to,$subject,$txt,$headers);

//  echo response()->json([
//      'message'=>"email was sent to user with chatroom id"
//   ]);


if(@mail($to,$subject,$txt,$headers))
{
    // $result->message = "email was sent to user with chatroom id";
    // return json_encode($result);
   return response()->json(['message'=>"email was sent to user with chatroom id"]);
}else{
    $result->message = "email was not sent";
    return json_encode($result);
}

?>