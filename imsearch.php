<?php require_once("res/x5engine.php"); ?>
<!DOCTYPE html><!-- HTML5 -->
<html prefix="og: http://ogp.me/ns#" lang="de-DE" dir="ltr">
	<head>
		<title>Suchen - HolzEffekt</title>
		<meta charset="utf-8" />
		<!--[if IE]><meta http-equiv="ImageToolbar" content="False" /><![endif]-->
		<meta name="author" content="Dennis Spliesgar" />
		<meta name="generator" content="Incomedia WebSite X5 Evo 2023.2.6 - www.websitex5.com" />
		<meta property="og:image" content="http://localhost/favImage.png" />
		<meta property="og:image:type" content="image/png">
		<meta property="og:image:width" content="1179">
		<meta property="og:image:height" content="526">
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		
		<link rel="stylesheet" href="style/reset.css?2023-2-6-0" media="screen,print" />
		<link rel="stylesheet" href="style/print.css?2023-2-6-0" media="print" />
		<link rel="stylesheet" href="style/style.css?2023-2-6-0" media="screen,print" />
		<link rel="stylesheet" href="style/template.css?2023-2-6-0" media="screen" />
		<link rel="stylesheet" href="pcss/imsearch.css?2023-2-6-0-639147244642029153" media="screen,print" />
		<script src="res/jquery.js?2023-2-6-0"></script>
		<script src="res/x5engine.js?2023-2-6-0" data-files-version="2023-2-6-0"></script>
		<script>
			window.onload = function(){ checkBrowserCompatibility('Der von Ihnen verwendete Browser unterstützt nicht die die Funktionen, die für die Anzeige dieser Website benötigt werden.','Der von Ihnen verwendete Browser unterstützt möglicherweise nicht die die Funktionen, die für die Anzeige dieser Website benötigt werden.','[1]Browser aktualisieren[/1] oder [2]Vorgang fortsetzen[/2].','http://outdatedbrowser.com/'); };
			x5engine.utils.currentPagePath = 'imsearch.php';
			x5engine.boot.push(function () { x5engine.imPageToTop.initializeButton({}); });
		</script>
		<link rel="icon" href="favicon.png?2023-2-6-0-639147244642029153" type="image/png" />
	</head>
	<body>
		<div id="imPageExtContainer">
			<div id="imPageIntContainer">
				<div id="imHeaderBg"></div>
				<div id="imFooterBg"></div>
				<div id="imPage">
					<header id="imHeader">
						<h1 class="imHidden">Suchen - HolzEffekt</h1>
						<div id="imHeaderObjects"></div>
					</header>
					<div id="imStickyBarContainer">
						<div id="imStickyBarGraphics"></div>
						<div id="imStickyBar">
							<div id="imStickyBarObjects"></div>
						</div>
					</div>
					<a class="imHidden" href="#imGoToCont" title="Überspringen Sie das Hauptmenü">Direkt zum Seiteninhalt</a>
					<div id="imSideBar">
						<div id="imSideBarObjects"></div>
					</div>
					<div id="imContentGraphics"></div>
					<main id="imContent">
						<a id="imGoToCont"></a>
						<div id="imSearchPage">
						<h2 id="imPgTitle">Suchergebnisse</h2>
						<?php
						$search = new imSearch();
						$keys = isset($_GET['search']) ? @htmlspecialchars($_GET['search'], ENT_COMPAT) : "";
						$page = isset($_GET['page']) ? @htmlspecialchars($_GET['page']) : 0;
						$type = isset($_GET['type']) ? @htmlspecialchars($_GET['type']) : "pages"; ?>
						<div class="searchPageContainer">
						<?php echo $search->search($keys, $page, $type); ?>
						</div>
						</div>
						
					</main>
					<footer id="imFooter">
						<div id="imFooterObjects"></div>
					</footer>
				</div>
				<span class="imHidden"><a href="#imGoToCont" title="Lesen Sie den Inhalt der Seite noch einmal durch">Zurück zum Seiteninhalt</a></span>
			</div>
		</div>
		
		<noscript class="imNoScript"><div class="alert alert-red">Um diese Website nutzen zu können, aktivieren Sie bitte JavaScript.</div></noscript>
	</body>
</html>
