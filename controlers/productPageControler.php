<?php
  $product = new shop();
  $product->id = $_GET['idProduct'];
  $productInfos = $product->productInfos();
  $product->idProduct = $_GET['idProduct'];
  $allPictures = $product->allPictures();
  $allPicturesMini = $product->allPictures();
  $allPicturesZoom= $product->allPictures();
?>
