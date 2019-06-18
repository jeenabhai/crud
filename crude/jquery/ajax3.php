<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
		<table width="100%" border="2" cellpadding="10">
			<tr>
				<td>
					<input type="text" id="txtname" placeholder="Customer Name" />
				</td>
				<td>
					<input type="button" id="btnsearch" value="Search" />
				</td>
			</tr>
			<tr>
				<td colspan="2" id="output">
					output will come here
				</td>
			</tr>
		</table>
<script src="jquery.js" language="javascript" type="text/javascript"></script>
<script>
	$(document).ready(function(){
		$("#btnsearch").click(function(){
			var SearchText = $("#txtname").val();
			var ResponseUrl = "response/ajax3.php?name=" + SearchText;
			$.get(ResponseUrl,function(data,status)
				  {
				$("#output").html(data);
			})
		})
	});
</script>
</body>
</html>