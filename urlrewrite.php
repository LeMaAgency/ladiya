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
		"CONDITION" => "#^/o-kavkaze/([^/]+)/?(?:\\?(.*))?\$#",
		"RULE" => "CODE=\$1&\$2",
		"ID" => "",
		"PATH" => "/o-kavkaze/detail.php",
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
		"CONDITION" => "#^/o-kmv/([^/]+)/?(?:\\?(.*))?\$#",
		"RULE" => "CODE=\$1&\$2",
		"ID" => "",
		"PATH" => "/o-kmv/detail.php",
	),
	array(
		"CONDITION" => "#^/hotel/#",
		"RULE" => "",
		"ID" => "bitrix:news",
		"PATH" => "/hotel/index.php",
	),
	array(
		"CONDITION" => "#^/tours/#",
		"RULE" => "",
		"ID" => "bitrix:news",
		"PATH" => "/tours/index.php",
	),
);

?>