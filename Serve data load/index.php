<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Load Data From Database with JSON</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.css" media="all" />
</head>
<body>
	<div class="container col-md-8">
		<table class="table table-bordered table-hover table-striped">
			<thead>
				<tr class="text-primary">
					<th>S.L No:</th>
					<th>NAME</th>
					<th>E-MAIL</th>
				</tr>
			</thead>
			<tbody id="show"></tbody>
		</table>
	</div>
	<script type="text/javascript">
		var show=document.getElementById("show");
		var xhr=new XMLHttpRequest();
		xhr.open("GET","a.php?id",true);
		xhr.onload=function(){
			var a=JSON.parse(this.responseText);
			var x='';
			var l=1;
			for(var i=0;i<a.length;i++){
				x +='<tr>'+
					'<td>'+l+'</td>'+
					'<td>'+a[i].fname+'</td>'+
					'<td>'+a[i].email+'</td>'+
				'</tr>';
				l++;
			}
			show.innerHTML=x;
		}
		xhr.send();
	</script>
</body>
</html>