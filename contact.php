---
layout: contact
title: Contact
---
<?php


if($_POST["message"]) {
    mail("samzgrunebaum@gmail.com", $_POST["name"], $_POST["message"]. "From: ". $_POST["email"]);
}


?>



<html>      
    <form method="post" action="contact.php">
        <label for="name">Name:</label>
        <br>
        <input type="text" id="name" name="name">
        <br>
        
        <label for="email">Email:</label>
        <br>
        <input type="text" id="email" name="email">
        <br>

        <label for="message">Message:</label>
        <br>
        <textarea name="message" id="message"></textarea>
        <input type="submit" value="Send">
    </form>
</html>
