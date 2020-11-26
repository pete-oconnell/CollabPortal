<div class="grid-container">
<div class="left-content"><?php include_once('template/left-content.php'); ?></div>
<div class="main-content">
<?php if (isset($product))
{
 echo "<h1>".$product."</h1><br><br>";
 if (isset($sections))
 {
     foreach($sections as $section)
     {
         echo "<a href=\"".url_title($product)."/".url_title($section->name)."\">".$section->name."</a><br>";
     }
 }
}?>
</div>
<div class="right-content"><?php include_once('template/right-content.php');?></div>
</div>