
<!DOCTYPE html>
<html lang="en">

	<head>
	<style>
	.panel{
	 
-webkit-box-shadow: 0px 5px 8px 0px rgba(50, 50, 50, 0.46);
	-moz-box-shadow:    0px 5px 8px 0px rgba(50, 50, 50, 0.46);
	box-shadow:         0px 5px 8px 0px rgba(50, 50, 50, 0.46);
  border-radius: 5px;
    border:solid lightblue 2px;

	
}		
	</style>
	</head>
	<body>



<div class="panel panel-primary">
				 <div class="panel_title" id="div_title">News/Announcement</div>
				<div  class="panel-body" id="leftcontent">

		<script type="text/javascript">
			function AdjustIframeHeightOnLoad() { document.getElementById("form-iframe").style.height = document.getElementById("form-iframe").contentWindow.document.body.scrollHeight + "px"; }
			function AdjustIframeHeight(i) { document.getElementById("form-iframe").style.height = parseInt(i) + "px"; }
		</script>

		<iframe id="form-iframe" src="pages/news_content.php" style="margin:0; width:100%; height:800px; border:none; overflow:hidden;" scrolling="Yes" ></iframe>

		</div>
	</div>


 
 </body>
 
 </html>