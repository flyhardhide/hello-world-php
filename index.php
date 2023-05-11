<html><head><title>TEST PHP CODE</title></head>
  <body>
<?php 
    print(date('Y/m/d')."<br />");
    $ip=$_SERVER['REMOTE_ADDR'];
    $ip2=$_SERVER['HTTP_X_FORWARDED_FOR'];
print("Your IP is: ".$ip);
    print("<br />Or : ".$ip2);
?>
  </body>
</html>
