<?
$arUrlRewrite = array(
	array(
		"CONDITION" => "#^/tours-in-russia/([^/]+)/?(?:\\?(.*))?\$#",
		"RULE" => "CODE=\$1&\$2",
		"ID" => "",
		"PATH" => "/tours-in-russia/detail.php",
	),
	array(
		"CONDITION" => "#^/o-kompanii/([^/]+)/?(?:\\?(.*))?\$#",
		"RULE" => "CODE=\$1&\$2",
		"ID" => "",
		"PATH" => "/o-kompanii/detail.php",
	),
	array(
		"CONDITION" => "#^/transport/([^/]+)/?(?:\\?(.*))?\$#",
		"RULE" => "CODE=\$1&\$2",
		"ID" => "",
		"PATH" => "/transport/detail.php",
	),
	array(
		"CONDITION" => "#^/ekskursii/([^/]+)/?(?:\\?(.*))?\$#",
		"RULE" => "CODE=\$1&\$2",
		"ID" => "",
		"PATH" => "/ekskursii/detail.php",
	),
	array(
		"CONDITION" => "#^/photo/([^/]+)/?(?:\\?(.*))?\$#",
		"RULE" => "CODE=\$1&\$2",
		"ID" => "",
		"PATH" => "/photo/detail.php",
	),
	array(
		"CONDITION" => "#^/video/([^/]+)/?(?:\\?(.*))?\$#",
		"RULE" => "CODE=\$1&\$2",
		"ID" => "",
		"PATH" => "/video/detail.php",
	),
	array(
		"CONDITION" => "#^/o-kavkaze/#",
		"RULE" => "",
		"ID" => "bitrix:catalog",
		"PATH" => "/o-kavkaze/index.php",
	),
	array(
		"CONDITION" => "#^/hotel/#",
		"RULE" => "",
		"ID" => "bitrix:news",
		"PATH" => "/hotel/index.php",
	),
	array(
		"CONDITION" => "#^/o-kmv/#",
		"RULE" => "",
		"ID" => "bitrix:catalog",
		"PATH" => "/o-kmv/index.php",
	),
	array(
		"CONDITION" => "#^/tours/#",
		"RULE" => "",
		"ID" => "bitrix:news",
		"PATH" => "/tours/index.php",
	),
	array(
		"CONDITION" => "#^/news/#",
		"RULE" => "",
		"ID" => "bitrix:news",
		"PATH" => "/news/index.php",
	),
);

?>