<html><head><title>TEST PHP CODE 2</title></head>
  <body>
<?php 
    print(date("Y/m/d H:i:s")."<br />");
    $ip=$_SERVER['REMOTE_ADDR'];
    $ip2=$_SERVER['HTTP_X_FORWARDED_FOR'];
    $ip3=$_SERVER['HTTP_X_CLUSTER_CLIENT_IP'];
    $ip4=$_SERVER['HTTP_CLIENT_IP'];
print("Your IP is: ".$ip);
    print("<br />Or : ".$ip2."<br />".$ip3."<br />".$ip4);
?>
  </body>
</html>
