<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Image Preview</title>
<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script src="jquery.mouseyDialog.js"></script>
</head>

<body>

<?php
ob_start();
?>
<table>
	<tr>
    	<td>New Test</td>
        <td>New Test</td>
        <td>New Test</td>
    </tr>
    <tr>
    	<td>New Test</td>
        <td>New Test</td>
        <td>New Test</td>
    </tr>
    <tr>
    	<td>New Test</td>
        <td>New Test</td>
        <td>New Test</td>
    </tr>
    <tr>
    	<td>New Test</td>
        <td>New Test</td>
        <td>New Test</td>
    </tr>
    <tr>
    	<td>New Test</td>
        <td>New Test</td>
        <td>New Test</td>
    </tr>
    <tr>
    	<td>New Test</td>
        <td>New Test</td>
        <td>New Test</td>
    </tr>
     <tr>
    	<td>New Test</td>
        <td>New Test</td>
        <td>New Test</td>
    </tr>
    <tr>
    	<td>New Test</td>
        <td>New Test</td>
        <td>New Test</td>
    </tr>
     <tr>
    	<td>New Test</td>
        <td>New Test</td>
        <td>New Test</td>
    </tr>
    <tr>
    	<td>New Test</td>
        <td>New Test</td>
        <td>New Test</td>
    </tr>
     <tr>
    	<td>New Test</td>
        <td>New Test</td>
        <td>New Test</td>
    </tr>
    <tr>
    	<td>New Test</td>
        <td>New Test</td>
        <td>New Test</td>
    </tr>
     <tr>
    	<td>New Test</td>
        <td>New Test</td>
        <td>New Test</td>
    </tr>
    <tr>
    	<td>New Test</td>
        <td>New Test</td>
        <td>New Test</td>
    </tr>
</table>
<?php
   $content = ob_get_contents();
   if(isset($_REQUEST["exp"]) && $_REQUEST["exp"] == 1)
   {
  	$fp = fopen("test.csv","w");
	fwrite($fp,$content,strlen($content));
	fclose($fp);
	
	header('Pragma: public');
	header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");                  // Date in the past   
	header('Last-Modified: '.gmdate('D, d M Y H:i:s') . ' GMT');
	header('Cache-Control: no-store, no-cache, must-revalidate');     // HTTP/1.1
	header('Cache-Control: pre-check=0, post-check=0, max-age=0');    // HTTP/1.1
	header ("Pragma: no-cache");
	header("Expires: 0");
	header('Content-Transfer-Encoding: none');
	header('Content-Type: application/vnd.ms-excel;');                 // This should work for IE & Opera
	header("Content-type: application/x-msexcel");                    // This should work for the rest 
	header("Content-Disposition: attachment;filename=test.csv ");
	header("Content-Transfer-Encoding: binary ");
	exit;
   }
   ?>
<a href="index2.php?exp=1">Export</a>
</body>
</html>
