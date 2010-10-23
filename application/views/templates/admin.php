<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<title><?php echo $title; ?></title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<?php foreach ($styles as $file => $type): ?>
	<?php echo HTML::style($file, array('media' => $type)), "\n"; ?>
<?php endforeach; ?>
<?php foreach ($scripts as $file): ?>
	<?php echo HTML::script($file), "\n"; ?>
<?php endforeach; ?>
</head>

<body>
<div id="wrapper">
<div id="header">

</div>
<ul id="navigation">

</ul>
<div id="content">
	<?php echo $content; ?>
</div>
</div>

<a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/3.0/"><img alt="Contrat Creative Commons" style="border-width:0" src="http://i.creativecommons.org/l/by-nc-sa/3.0/80x15.png" /></a><br /><span xmlns:dct="http://purl.org/dc/terms/" property="dct:title">MsgBoard</span> by <a xmlns:cc="http://creativecommons.org/ns#" href="http://ziopod.com" property="cc:attributionName" rel="cc:attributionURL">Ziopod</a> est mis à disposition selon les termes de la <a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/3.0/">licence Creative Commons Paternité - Pas d'Utilisation Commerciale - Partage des Conditions Initiales à l'Identique 3.0 Unported</a>.<br />Basé(e) sur une oeuvre à <a xmlns:dct="http://purl.org/dc/terms/" href="http://github.com/ziopod/Mykoa" rel="dct:source">github.com</a>.
<div id="kohana-profiler">
<?php echo View::factory('profiler/stats'); ?>
</div></body>
</html>