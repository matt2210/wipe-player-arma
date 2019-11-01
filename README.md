# WIPE-ARMA-ALTISLIFE



Wipe Web Systeme powered HTML5 and PHP.

  - Wipe [DELET] a player form you Database in 1 click 
  - Secure with a custom password
  - Magic DRAG & DROP with only 1 file to edit 

### Installation

Require PHP - A web Server

    -1 Step Drag & Drop the ZIP file in your web server
    -2 Step Unzip the ZIP file 
    -3 Edit wipe.php file 
```php
<!-- 1 Remplace SET YOUR OWN PASSWORD by a Random Password --> 
$password = array("SET YOUR OWN PASSWORD");
<!--2 remplace HOST with your host (localhost or 127.0.0.1 for ex) DATABASE NAME your database Name USER by USER and Pass by USERPASSWORD for database --> 
$dbh = new PDO('mysql:host=HOST;dbname=DATABASENAME', "USER", "PASS");
```

### Todos

 - POPUS FOR ERROR OR SUCESS

License
----

GNU General Public License v3.0


BlackWido 2019-2020


