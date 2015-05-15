<?php
require_once('../model/Category.php');
require_once('../model/product.php');
$brass = new Category(4,'Brass');
$trumpet = new Product($brass,'getzen','getzen 700 Trumpet',999.95);
echo 'category Object: <tt><pre>'.var_export($brass,TRUE)  .'</pre></tt><br/>';
echo 'product Object: <tt><pre>'. var_export($trumpet,TRUE) .'</pre></tt><br/>';
?>