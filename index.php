<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<form action="dadata.php" method="POST">

		<strong>Ваше имя<span class="mf-req">*</span></strong><br>
		<input type="text" name="user_name" value=""><br>

		<strong>Ваше отчество<span class="mf-req">*</span></strong><br>
		<input type="text" name="user_second_name" value=""><br>

		<strong>Ваша фамилия<span class="mf-req">*</span></strong><br>
		<input type="text" name="user_last_name" value=""><br>

        <input type="hidden" name="token" value="687514cd043b56c6c731f8fe26a4389b6894e294">
        <input type="hidden" name="secret" value="2246f5439844eda72777daaff5a2cfd37feaaf5e">

		<input type="submit" name="submit" value="Отправить">
		</form>
</body>
</html>