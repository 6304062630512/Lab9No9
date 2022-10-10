<?php include "connect.php" ?>

<?php
    $stmt = $pdo->prepare("SELECT * FROM member WHERE username=?");
    $stmt->bindParam(1, $_GET["username"]);
    $stmt->execute();
    $row = $stmt->fetch();
?>

<html>
<head>
    <meta charset="utf-8">
</head>
<body>
    <form action="update-member.php" method="post">
        <input type="hidden" name="username" value="<?=$row["username"]?>"><br>
        password: <input type="password" name="password" value="<?=$row["password"]?>"><br> 
        ชื่อสมาชิก: <input type="text" name="name" value="<?=$row["name"]?>"><br>
        ที่อยู่: <input type="text" name="address" value="<?=$row["address"]?>"><br>
        เบอรืโทร: <input type="text" name="mobile" value="<?=$row["mobile"]?>"><br>
        อีเมล: <input type="email" name="email" value="<?=$row["email"]?>"><br> 
        <input type="submit" value="เเก้ไขข้อมูล">
    </form>
</body>
</html>