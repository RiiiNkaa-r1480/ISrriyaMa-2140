<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>文字列をテキストファイルに保存する</title>
</head>
<body>
    <?php
    $fp = fopen("kadai_1-2.txt","w");
    fwrite($fp,"Hello World");
    fclose($fp);
    ?>
</body>
</html>