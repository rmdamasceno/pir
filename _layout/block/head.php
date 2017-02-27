﻿<head>
	<meta charset='<?php echo $sitecharset ?>'>
	<meta name="description" content='<?php echo $sitedescription ?>'>
	<meta name="keywords" content='<?php echo $sitekeywords ?>'>
	<meta name="author" content='<?php echo $siteauthor ?>'>
	<meta name="viewport" content='<?php echo $siteviewport ?>'>
	<title><?php echo $maintitle . $localtitle; ?></title>
    <link rel="stylesheet" type="text/css" href='<?php echo $themepatch . $theme; ?>.css'>
	<link rel="stylesheet" type="text/css" href='<?php echo $themepatch; ?>calendario.css'>
	<script src='<?php echo $scriptpatch; ?>calendarioengine.js'></script>
	<script src='<?php echo $scriptpatch; ?>calendarioui.js'script></script>
	<script>
		$(function() {
			$( "#calendario" ).datepicker({
				//showOn: "button",
				//buttonImage: "calendario.png",
				//buttonImageOnly: true,
				//showButtonPanel: false,
				dateFormat: 'dd/mm/yy',
				changeMonth: true,
				changeYear: true,
				showOtherMonths: true,
				selectOtherMonths: true,
				numberOfMonths: 1,
				dayNames: ['Domingo','Segunda','Terça','Quarta','Quinta','Sexta','Sábado','Domingo'],
				dayNamesMin: ['D','S','T','Q','Q','S','S','D'],
				dayNamesShort: ['Dom','Seg','Ter','Qua','Qui','Sex','Sáb','Dom'],
				monthNames: ['Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'],
				monthNamesShort: ['Jan','Fev','Mar','Abr','Mai','Jun','Jul','Ago','Set','Out','Nov','Dez']
			});

		});
	</script>
</head>