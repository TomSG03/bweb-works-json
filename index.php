<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Form</title>
  <link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>

	<form class="info" action="json.php" method="POST">
		<strong>Ваше имя<span class="mf-req">*</span></strong>
		<input type="text" name="user_name" id="user_name" value="" required>

		<strong>Ваше отчество<span class="mf-req">*</span></strong>
		<input type="text" name="user_second_name" id="user_second_name" value="" required>

		<strong>Ваша фамилия<span class="mf-req">*</span></strong>
		<input type="text" name="user_last_name" id="user_last_name" value="" required>

		<strong>Город<span class="mf-req">*</span></strong>
		<input type="text" name="user_address_city" id="user_address" value="" required>
    
    <strong>Улица<span class="mf-req">*</span></strong>
		<input type="text" name="user_address_street" id="user_address" value="" required>

    <strong>Дом<span class="mf-req">*</span></strong>
		<input type="text" name="user_address_house" id="user_address" value="" required>

    <strong>Квартира</strong>
		<input type="text" name="user_address_flat" id="user_address" value="">

		<input type="submit" name="submit" id="submit" value="Отправить">
	</form>
  
</body>
</html>