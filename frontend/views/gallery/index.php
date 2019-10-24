<?php
use frontend\assets\GalleryAsset;
GalleryAsset::register($this);
$this->registerJsFile('@web/js/gallery/scripts.js', [
    'depends' => [
        GalleryAsset::className()
    ]
])
?>
<h1>Gallery</h1>

<div class="portfolioFilter">
    <a href="#" data-filter="*" class="current">All categories</a>
    <a href="#" data-filter=".people">People</a>
    <a href="#" data-filter=".places" >Places</a>
    <a href="#" data-filter=".food" >Food</a>
    <a href="#" data-filter=".objects" >Objects</a>
</div>
<h3>hello</h3>
<div class="portfolioContainer">
    <div class="objects">
        <img src="/files/photos/belka.jpg" alt="image">
    </div>

    <div class="people places">
        <img src="/files/photos/cherepa.jpg" alt="image">
    </div>

    <div class="food">
        <img src="/files/photos/ezhik.jpg" alt="image">
    </div>

    <div class="people places">
        <img src="/files/photos/kotik.jpg" alt="image">
    </div>

    <div class="places objects">
        <img src="/files/photos/mysh.jpg" alt="image">
    </div>

    <div class="people food objects">
        <img src="/files/photos/niochem.jpg" alt="image">
    </div>

    <div class="food objects">
        <img src="/files/photos/zaets.jpg" alt="image">
    </div>

    <div class="food">
        <img src="/files/photos/zhiraf.jpg" alt="image">
    </div>
</div>
