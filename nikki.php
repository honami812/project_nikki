<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <style>
        .flex-container {
    display: flex;
    justify-content: right; /* 真ん中に箱を配置する。右の場合は'right' */
}
        .flex-container {
            background-color: peru;    
        }

        .box {
            
            margin: 25px;
            padding: 25px;
            border: 5px solid black;
        }
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
       
       $re = $dbh->query("SELECT * FROM nikki");
    print '<div class="flex-container">';
    print "<div class='box'>";
        while($kekka = $re->fetch()) {
            
        
            print $kekka[0];
            print "<br>";
            print $kekka[2];
            print "<br>";
            print $kekka[1];
            print " | ";
            print $kekka[3];
        }
        print "</div>";
        print "<div class='box'>";
            
       
           print  "<form method="POST" action="nikki.php">";
            print "パスワードを入力してください<br><input type="text" name="password">"
                 <input type="submit" value="入力">
         </form>
        }
        print "form";
        print "</div>";
        print '</div>';
        
        
    else {
       print "パスワードが違います";
       print "<br>";
       print "</br>";
       print "<a href='index.html'>戻る</a>";

       $name = $_POST["namae"];
     $message = $_POST["message"];
    
   }
  
 
}    catch (PDOException $e) { 
    echo 'Connection failed: ' . $e->getMessage();
    
    
}

?>

</body>
</html>