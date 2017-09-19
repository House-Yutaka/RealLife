<?php
	// $eTabName は各ページごとに$tabNamesと一致するように決める 

	// style用のclassの名前
	$selectedClass = "selectedTab";
	
	// タブの名前
	$tabNames = array("Home","Mypage","Upload","About","Edit");
	
	// それぞれのタブのリンク
	$links = array(
		"index.php",
		"mypage.php",
		"upload.php",
		"about.php",
		"edit.php"
		);

	// それぞれのタブの横に出るアイコンのタグ (awesome font)
	$iconTexts = array(
		"<i class=\"fa fa-home fa-fw faa-ring\" aria-hidden=\"true\"></i>",
		"<i class=\"fa fa-meh-o fa-fw faa-ring\" aria-hidden=\"true\"></i>",
		"<i class=\"fa fa-camera-retro fa-fw faa-ring\" aria-hidden=\"true\"></i>",
		"<i class=\"fa fa-info fa-fw faa-ring\" aria-hidden=\"true\"></i>",
		"<i class=\"fa fa-pencil-square-o fa-fw faa-ring\" aria-hidden=\"true\"></i>"
		);



// =========ここから下は触らないでOK=========
	for ($i=0; $i < count($tabNames); $i++) {
		if (strcmp($eTabName, $tabNames[$i]) == 0) {
			print "<li><a href=\"${links[$i]}\" class=\"faa-parent animated-hover ${selectedClass}\">${iconTexts[$i]}${tabNames[$i]}</a></li>\n";
			continue;
		}
		print "<li><a href=\"${links[$i]}\" class=\"faa-parent animated-hover\">${iconTexts[$i]}${tabNames[$i]}</a></li>\n";
	}


?>