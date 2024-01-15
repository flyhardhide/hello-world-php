<html><head><title>TEST PHP CODE 2</title></head>
  <body>
<?php 
    print(date("Y/m/d H:i:s")."<br />");
    $ip1=$_SERVER['REMOTE_ADDR'];
    $ip2=$_SERVER['HTTP_X_FORWARDED_FOR'];
    $ip3=$_SERVER['HTTP_X_CLUSTER_CLIENT_IP'];
    $ip4=$_SERVER['HTTP_CLIENT_IP'];
    $ip5=$_SERVER['HTTP_INCAP_CLIENT_IP'];
print("Your IP is: ".$ip1);
    print("<br />Or HTTP_X_FORWORDED_FOR: ".$ip2."<br />Or HTTP_X_CLUSTER_CLIENT_IP: ".$ip3."<br />Or HTTP_CLIENT_IP: ".$ip4."<br />Or HTTP_INCAP_CLIENT_IP: ".$ip5);
?>
print("<hr/>");
  </body>
</html>
