<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title><?php echo $title; ?> | VSDL</title>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<script src="<?php echo base_url('script/DataTables-1.9.4/jquery.dataTables.js'); ?>"></script>
		<script src="<?php echo base_url('script/tiny_mce/tiny_mce.js'); ?>"></script>
		<script src="<?php echo base_url('script/SyntaxHighlighter/scripts/XRegExp.js'); ?>"></script>
		<script src="<?php echo base_url('script/SyntaxHighlighter/scripts/shCore.js'); ?>"></script>
		<script src="<?php echo base_url('script/SyntaxHighlighter/scripts/shBrushJScript.js'); ?>"></script>
		<script src="<?php echo base_url('script/SyntaxHighlighter/scripts/shBrushPhp.js'); ?>"></script>
		<script src="<?php echo base_url('script/SyntaxHighlighter/scripts/shBrushBash.js'); ?>"></script>
		<script src="<?php echo base_url('script/SyntaxHighlighter/scripts/shBrushCss.js'); ?>"></script>
		<script src="<?php echo base_url('script/SyntaxHighlighter/scripts/shBrushSql.js'); ?>"></script>
		<script src="<?php echo base_url('script/SyntaxHighlighter/scripts/shBrushPlain.js'); ?>"></script>

		<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/style.css'); ?>" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('script/SyntaxHighlighter/styles/shCore.css'); ?>" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('script/SyntaxHighlighter/styles/shThemeDefault.css'); ?>" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/DataTables-1.9.4/jquery.dataTables.css'); ?>" />
	</head>
	<body>
		<div id="wrapper">
			<header><h1>Very Simple Daily Log</h1></header>