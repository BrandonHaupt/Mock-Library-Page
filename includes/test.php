

<?php

//"localhost" <== connects to the database, since you have to upload the file to the server it will use it's localhost that way.
//byluwxjfslhh <== is the cPanel login username of the database
//"Ab18t26q@t" <== password of the database, DONT STEAL!
//"schoolStuff" <== name of the database I am trying to use.
$conn = mysqli_connect("localhost","byluwxjfslhh","Ab18t26q@t","schoolStuff");

//failed to connect
if(mysqli_connect_errno()){
    echo "Failed to connect" . mysqli_connect_error();
}

//it does connect
if(mysqli_ping($conn)){
    echo "Connection made!";
}else {
   echo "Error: " . mysqli_error($conn); 
}

mysqli_close($conn);



/*   
CREATE TABLE users (
    (AUTO_INCREMENT increases the number by 1 each time so we dont have to manually do it each time)
    idUsers int(11) AUTO_INCREMENT PRIMARY KEY NOT NULL,
     (TINYTEXT certain number of letters before it cuts it off)
    uidUsers TINYTEXT NOT NULL,
    emailUsers TINYTEXT NOT NULL,
    pwdUsers LONGTEXT NOT NULL
);
*/