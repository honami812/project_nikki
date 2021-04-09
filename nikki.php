<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <style>
    </style>
</head>
<body>

<?php 
/* Connect to a MySQL database using driver invocation */
require_once('db_info.php');

try { 
    $dbh = new PDO($dsn);
    
    // この下にプログラムを書きましょう。
    $password = $_POST["password"];
    print $password;
    if  ($password == "secret"){
       print"成功";
       $re = $dbh->query("SELECT * FROM nikki");
    print '<div class="flex-container">';
        while($kekka = $re->fetch()) {
            print "<div class='box'>";
            print $kekka[0];
            print "<br>";
            print "</div>";
            print $kekka[2];
            print "<br>";
            print "</div>";
            print $kekka[1];
            print " | ";
            print $kekka[3];
            
        }
   } else {
       print "パスワードが違います";
       print "<br>";
       print "</br>";
       print "<a href='index.html'>戻る</a>";
 
   }
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
    
}

?>

</body>
</html>