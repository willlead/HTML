<?php 
    // 문자열 더하기 연산자   .  dot x.y
    $x = "대한민국";
    $y = "만세";

    // $z = $x.$y;
    echo $x."<br>";
    echo $y."<br>";
    echo $x.$y."1 <br>";

    // $z = $x.$y;
    echo $x."2 <br>";
    echo $x .="만세3";
    

    echo $user = $_GET["user"] ?? "anonymous";
    echo("<br>");
  
    // ??
    $color = "blue";
    echo $color = $color ?? "red";

?>