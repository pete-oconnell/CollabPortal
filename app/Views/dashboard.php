<div class="grid-container">
<div class="left-content">left content</div>
<div class="main-content">
<?php if (isset($products))
{
 foreach($products as $product)
 {
     echo "<h3><a href=\"".url_title($product->name)."\">".$product->name."</a></h3><br>";
 }
}?>
</div>
<div class="right-content">right content</div>
</div>