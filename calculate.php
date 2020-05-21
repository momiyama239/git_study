<?php
if (is_numeric($_GET['number1']) && is_numeric($_GET['number2'])) {
        $sum_number = $_GET['number1'] + $_GET['number2'];
} else {
        $sum_number = "数字以外が含まれています";
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<title>受信ページ</title>
</head>
<body>
<?php echo $sum_number; ?>
<?php echo $sum_number; ?>
<?php echo $sum_number; ?>
</body>
</html>
