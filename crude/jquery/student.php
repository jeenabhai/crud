<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css"  href="css/bootstrap.min.css">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
		<div class="container-fluid">
			<div class="row" style="background-color: azure;padding: 10px">
				<div class="col-lg-12 text-right">
					<form class="form-inline" action="respose/grtstudentsetail.php">
						<label>
							<input type="text" name="txtname" id="txtname" class="form-control" placeholder="Student Name" />
						</label>
						<label>
							<input type="number" name="txtmobile" id="txtmobile" class="form-control" placeholder="Mobile No" />
						</label>
						<b>Select Gender</b>
						<div class="radio">
						<label>
							<input type="radio" name="rdogender" id="rdomale" value="1" /> Male
						</label>
						<label>
							<input type="radio" name="rdogender" id="rdofemale" value="0" /> Female
						</label>
						</div>
						<label>
							<input type="button" name="btnprocess" id="btnprocess" value="Add" class="btn btn-primary" /> 
						</label>
					</form>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h1>Student Details</h1> <hr/>
					<table class="table table-bordered table-striped" width="100%">
						<thead>
						<tr>
							<td>Sr No</td>
							<td>Name</td>
							<td>Gender</td>
							<td>Mobile No</td>
							<td>Edit </td>
							<td>Delete </td>
						</tr>
						</thead>
						<tbody id="student">
							
						</tbody>
					</table>
				</div>
			</div>
		</div>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
<script>
		$(document).ready(function()
		{
			GetStudentDetail();		
		});
		function GetStudentDetail()
		{
			var ResponsePage = "response/getstudentdetail.php";
			$.get(ResponsePage,null,function(data,status)
			{
				console.log(data);	
				var output = $.parseJSON(data);
				console.log(output.length);
				for(var i=1;i<output.length;i++)
				{
					AddRow(output[i]);
				}
				ResetNumbers();
			});
		}
		function AddRow(output)
		{
			var row = "<tr class='tr'><td></td><td>" + output.name + "</td><td>" + GetGender(output.gender) +"</td><td>" + output.mobile +"</td><td><span class='glyphicon glyphicon-edit'></span></td><td><span class='glyphicon glyphicon-trash'></span></td></tr>";
			$("#student").append(row);	
		}
		function GetGender(gender)
		{
			if(gender=="1")
				return "Male";
			else
				return "Female";
		}
		function ResetNumbers()
		{
			var i=1;
			$(".tr").each(function()
			{
				$(this).find('td:eq(0)').html(i);
				i = parseInt(i) + 1;
			});
		}
	</script>
</body>
</html>