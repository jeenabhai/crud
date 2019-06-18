<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<input type="button" id="btngetdate" value="Retreive's Today Date" />
<div id="mydiv">output will come here</div>

<script src="jquery.js"></script>
<script>
	$(document).ready(function(){
		$("#btngetdate").click(function(){
			var ResponseUrl  = "response/ajax1.php";
			$("#mydiv").load(ResponseUrl);
		});
	});
</script>
</body>
</html>