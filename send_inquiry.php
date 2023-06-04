<?php
$data = file_get_contents("php://input");
$inquiry = json_decode($data, true);
$username = $inquiry["username"];
$email = $inquiry['email'];
$product_name = $inquiry['product_name'];
$quantity = $inquiry['quantity'];
$mailFile = "mail.txt";

//管理者宛て
$mailAddress = file_get_contents($mailFile);
$subject = "商品問い合わせ: {$product_name}";
$message = 
    "ユーザー名: {$username}\r\n"
    ."メールアドレス: {$email}\r\n"
    ."商品名: {$product_name}\r\n"
    ."希望数量: {$quantity}";
mail($mailAddress, $subject, $message);

//問い合わせ元宛て
$subject = "商品問い合わせ受領連絡: {$product_name}";
$message = 
    "以下の問い合わせを受領しました。管理者からの連絡をお待ちください。\r\n"
    ."ユーザー名: {$username}\r\n"
    ."メールアドレス: {$email}\r\n"
    ."商品名: {$product_name}\r\n"
    ."希望数量: {$quantity}";
mail($email, $subject, $message);

?>
