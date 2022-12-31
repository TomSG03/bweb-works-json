<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Json</title>
  <link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>
  <div class="info">
    <strong>Массив полученный из <i>$_REQUEST</i></strong>
    <!-- Вывод содержимого массива $_REQUEST в отформатированном виде -->
    <?
      echo "<pre>";
        var_dump($_REQUEST); 
      echo "</pre>";

      $arUserInfo = array("name"=>$_REQUEST['user_name'], "user_second_name"=>$_REQUEST['user_second_name'], "user_last_name"=>$_REQUEST['user_last_name'], "user_address_city"=>$_REQUEST['user_address_city'], "user_address_city"=>$_REQUEST['user_address_city'], "user_address_street"=>$_REQUEST['user_address_street'], "user_address_house"=>$_REQUEST['user_address_house'], "user_address_flat"=>$_REQUEST['user_address_flat']);
      
      // Превращаем массив $arUserInfo в json-строку $strUserInfo
      $strUserInfo = json_encode($arUserInfo, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
    ?>

    <p>
      <strong>Json-строка <i>$strUserInfo</i> полученная из массива <i>$arUserInfo</i></strong>
    </p>

    <!--  Вывод json-строки $strUserInfo  -->
    <div id="result">
	   <?=$strUserInfo?>
    </div>

    <input class="button" type="button" onclick="location.href='index.php'" id="submit" value="Назад" />
  </div>
</body>
</html>