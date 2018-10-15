<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Image Preview</title>
<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script src="jquery.mouseyDialog.js"></script>
</head>

<body>
</body>
</html>
<a href="#imageDiv" class="image_hover">
	<img class="img_b" src="http://upload.wikimedia.org/wikipedia/commons/thumb/c/c6/Tony_Estanguet.jpg/260px-Tony_Estanguet.jpg" width="100" height="100" alt=""/>
</a>
<div class="mouseyDialog" style="display: none; position: absolute; z-index: 100;" id="imageDiv">
	<img width="300px" height="300px" src="http://upload.wikimedia.org/wikipedia/commons/thumb/c/c6/Tony_Estanguet.jpg/260px-Tony_Estanguet.jpg"  alt=""/>
</div>
<script type="text/javascript">
$('.image_hover').mouseyDialog({
eventType: 'click',
animation: 'fade',
animationSpeed: 100
});
</script>