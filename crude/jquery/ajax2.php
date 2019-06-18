<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<style>
	div 
	{
		text-align: center;
		font-size: 10em;
		width:100%;
		padding: 10px;
		color:blue;
	}
</style>
</head>

<body>
<div id="mydiv">output will come here</div>

<script src="jquery.js"></script>
<script>
	$(document).ready(function(){
		setInterval(function(){
			RefreshDateTime();
		},5000);
		function RefreshDateTime()
		{
			var ResponseUrl  = "response/ajax1.php";
			$("#mydiv").load(ResponseUrl);
		}
	});
</script>
</body>
</html>