<?php

$your_name = htmlspecialchars($_POST["name"]);
$email = htmlspecialchars($_POST["email"]);
$tema = htmlspecialchars($_POST["tema"]);
$message = htmlspecialchars($_POST["mes"]);
/* Устанавливаем e-mail адресата */
$myemail = "alenastryhina@gmail.com";

$your_name = check_input($_POST["name"], "Name!");
$tema = check_input($_POST["tema"], "Tema!");
$email = check_input($_POST["email"], "e-mail!");
$message = check_input($_POST["mes"], "Keine Nachricht!");

if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email))
{
show_error("<br /> Е-mail gibt es nicht");
}

$message_to_myemail = "Hallo!
Name: $your_name 
E-mail: $email 
Nachricht: $message 
Ende!";

$from  = "From: $your_name <$email> \r\n Reply-To: $email \r\n"; 
mail($myemail, $tema, $message_to_myemail, $from);
?>
<p>Gesendet!</p>
<p> <a href="index.html"> >>></a></p>
<?php

function check_input($data, $problem = "")
{
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
if ($problem && strlen($data) == 0)
{
show_error($problem);
}
return $data;
}
function show_error($myError)
{
?>
<html>
<body>
<p>Korrigieren:</p>
<?php echo $myError; ?>
</body>
</html>
<?php
exit();
}
?>