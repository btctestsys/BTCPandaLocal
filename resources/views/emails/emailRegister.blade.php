<html>
<body>

Hello <?php echo $username; ?>,<br>
<br>
You have submitted request to register an account with us.<br>
<br>
This email is a confirmation for your registration. If you think this is a mistake, please ignore the email. If not, please confirm the registration by clicking on the following link:<br>
<br>

<a href="https://<?php echo $_ENV['SERVER_URL'];?>/verifyEmail/<?php echo $token; ?>">
https://{{$_ENV['SERVER_URL']}}/verifyEmail/<?php echo $token; ?></a>

<br>
<br>
We hope you have a pleasant experience with us and look forward to serve you in the near future.<br>
<br>
Thanks.<br>

BTCPanda Team
</body>
</html>
