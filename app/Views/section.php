<div class="grid-container">
<div class="left-content"><?php include_once('template/left-content.php'); ?></div>
<div class="main-content"><h1>
<?php if (isset($product))
{
 echo $product;
 if (isset($section))
 {
     echo " - ".$section;
 }
}?>
</h1><br><br>
</div>
<div class="right-content"><?php include_once('template/right-content.php');?></div>
</div>