<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style type="text/css">
h1,h2,h3 {
	font-family: Candar, Calibri, Verdana, Helvetica, Arial, sans-serif;
}
pre {
	width:500px;
	background-color:#333333;
	color: #55FF55;
}
</style>
<link rel="stylesheet" href="copycss.css"></link>
</head>
<body>
<h1> Dados de Formulário Recebidos pelo PHP</h1>
<h1> Form Data Received by PHP</h1>

<h2> em $_GET[]</h2>
<pre>
<?php
// apenas mostra o estado da variável
print_r($_GET);

?>
</pre>

<h2> em $_POST[]</h2>
<pre>
<?php
// apenas mostra o estado da variável
print_r($_POST);

?>
</pre>

<h2> em $_FILES[]</h2>
<pre>
<?php
// apenas mostra o estado da variável
print_r($_FILES);

?>
</pre>
</body>
</html>
