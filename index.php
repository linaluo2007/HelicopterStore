<?php 
//Run a select query to get my latest 6 items
// Connect to the MySQL database  
include "storescripts/connect_to_mysql.php"; 
$dynamicList="";
$sql = mysql_query("SELECT * FROM products ORDER BY date_added DESC LIMIT 6");
$productCount = mysql_num_rows($sql); // count the output amount
if ($productCount > 0) {
	while($row = mysql_fetch_array($sql)){ 
             $id = $row["id"];
			 $product_name = $row["product_name"];
			 $price = $row["price"];
			 $date_added = strftime("%b %d, %Y", strtotime($row["date_added"]));
			 $dynamicList .= '<table width="100%" border="1" cellspacing="0" cellpadding="0">
      <tr>
        <th width="22%" scope="col"><a href="product.php?id=' . $id .'"><img style="border:#fff 2px solid" src="inventory_images/' . $id .'.jpg" width="169" height="135" alt="' . $product_name .'" /></a></th>
        <th width="78%" valign="top" scope="col"><p class="content">' . $product_name .'</p>
          <p class="content">$' . $price .'</p>
          <p class="content"><a href="product.php?id=' . $id .'">View Product Details</a></p></th>
      </tr>
    </table>';
    }
} else {
	$dynamicList  = "We have no products listed in your store yet.";
}
mysql_close();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Store Home page</title>
<link rel="stylesheet" href="style/style.css" type="text/css" media='screen'/>
<style type="text/css">
.content {
	text-align: left;
}
.content {
	text-align: left;
}
</style>
</head>

<body>
<div align="left" id="mainWrapper">
  <?php include_once("template_header.php");?>
  <div id="pageContent"><br /></div>
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <th width="23%" scope="col"><p>Others</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p></th>
    <th width="56%" scope="col">Newest items added to the store&nbsp;
    <p><?php echo $dynamicList; ?></p>
   <!--<table width="100%" border="1" cellspacing="0" cellpadding="0">
      <tr>
        <th width="22%" scope="col"><a href="product.php?"><img style="border:#fff 2px solid" src="Inventory_images/E-Flite_Blade.jpg" width="169" height="135" alt="$dynamicTitle" /></a></th>
        <th width="78%" valign="top" scope="col"><p class="content">Product Title</p>
          <p class="content">Product Price</p>
          <p class="content"><a href="product.php?">View Product</a></p></th>
      </tr>
    </table>-->
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p></th>
    <th width="21%" scope="col">Others:
      <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p></th>
  </tr>
</table>
  <?php include_once("template_footer.php");?>
  
</body>
</html>