<style>
.cb-slideshow,
.cb-slideshow:after { 
    width: 100%;
    height: 100%;
    top: 0px;
    left: 0px;
    z-index: 0; 
}
.cb-slideshow:after { 
    content: '';
    background: transparent url(../images/pattern.png) repeat top left; 
}
.cb-slideshow li span { 
    width: 100%;
    height: 100%;
    position: absolute;
    top: 0px;
    left: 0px;
    color: transparent;
    background-size: cover;
    background-position: 60% 40%;
    background-repeat: none;
    opacity: 0;
    z-index: 0;
	-webkit-backface-visibility: hidden;
    -webkit-animation: imageAnimation 36s linear infinite 0s;
    -moz-animation: imageAnimation 36s linear infinite 0s;
    -o-animation: imageAnimation 36s linear infinite 0s;
    -ms-animation: imageAnimation 36s linear infinite 0s;
    animation: imageAnimation 36s linear infinite 0s; 
}
.cb-slideshow li div { 
    z-index: 1000;
    position: absolute;
    top: 0px;
    left: 0px;
    width: 100%;
    text-align: center;
    opacity: 0;
    color: #fff;
    -webkit-animation: titleAnimation 36s linear infinite 0s;
    -moz-animation: titleAnimation 36s linear infinite 0s;
    -o-animation: titleAnimation 36s linear infinite 0s;
    -ms-animation: titleAnimation 36s linear infinite 0s;
    animation: titleAnimation 36s linear infinite 0s; 
}
.cb-slideshow li div h3 { 
    font-family: 'BebasNeueRegular', 'Arial Narrow', Arial, sans-serif;
    font-size: 240px;
    padding: 0;
    line-height: 200px; 
}
.cb-slideshow li:nth-child(1) span { 
    background-image: url(../gambar/1.jpg) 
}
<?php $gambar = 1;$animasi=6;while ($gambar <= 100) {?>
.cb-slideshow li:nth-child(2) span { 
    background-image: url(../gambar/<?php echo $gambar; ?>.jpg);
    -webkit-animation-delay: <?php echo $animasi.'s'; ?>;
    -moz-animation-delay: <?php echo $animasi.'s'; ?>;
    -o-animation-delay: <?php echo $animasi.'s'; ?>;
    -ms-animation-delay: <?php echo $animasi.'s'; ?>;
    animation-delay: <?php echo $animasi.'s'; ?>; 
}
.cb-slideshow li:nth-child(2) div { 
    -webkit-animation-delay: <?php echo $animasi.'s'; ?>;
    -moz-animation-delay: <?php echo $animasi.'s'; ?>;
    -o-animation-delay: <?php echo $animasi.'s'; ?>;
    -ms-animation-delay: <?php echo $animasi.'s'; ?>;
    animation-delay: <?php echo $animasi.'s'; ?>; 
}
<?php $gambar++;$animasi+6; } ?>
/* Animation for the slideshow gambar */
@-webkit-keyframes imageAnimation { 
    0% { opacity: 0;
    -webkit-animation-timing-function: ease-in; }
    8% { opacity: 1;
         -webkit-animation-timing-function: ease-out; }
    17% { opacity: 1 }
    25% { opacity: 0 }
    100% { opacity: 0 }
}
@-moz-keyframes imageAnimation { 
    0% { opacity: 0;
    -moz-animation-timing-function: ease-in; }
    8% { opacity: 1;
         -moz-animation-timing-function: ease-out; }
    17% { opacity: 1 }
    25% { opacity: 0 }
    100% { opacity: 0 }
}
@-o-keyframes imageAnimation { 
    0% { opacity: 0;
    -o-animation-timing-function: ease-in; }
    8% { opacity: 1;
         -o-animation-timing-function: ease-out; }
    17% { opacity: 1 }
    25% { opacity: 0 }
    100% { opacity: 0 }
}
@-ms-keyframes imageAnimation { 
    0% { opacity: 0;
    -ms-animation-timing-function: ease-in; }
    8% { opacity: 1;
         -ms-animation-timing-function: ease-out; }
    17% { opacity: 1 }
    25% { opacity: 0 }
    100% { opacity: 0 }
}
@keyframes imageAnimation { 
    0% { opacity: 0;
    animation-timing-function: ease-in; }
    8% { opacity: 1;
         animation-timing-function: ease-out; }
    17% { opacity: 1 }
    25% { opacity: 0 }
    100% { opacity: 0 }
}
/* Show at least something when animations not supported */
.no-cssanimations .cb-slideshow li span{
	opacity: 1;
}

@media screen and (max-width: 1140px) { 
    .cb-slideshow li div h3 { font-size: 140px }
}
@media screen and (max-width: 600px) { 
    .cb-slideshow li div h3 { font-size: 80px }
}
</style>