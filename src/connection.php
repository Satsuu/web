<?php

$connection = new PDO('mysql:host=localhost;dbname=ollies_db', 'root');

if (mysqli_connect_errno()) {
  echo "MYSQL CONNECTION ERROR: " . mysqli_connect_errno();
}

?>

<style>
    h3.h3{text-align:center;margin:1em;text-transform:capitalize;font-size:1.7em;}

    /********************* Shopping Demo-3 **********************/

        .product-grid3{font-family:Roboto,sans-serif;text-align:center;position:relative;z-index:1}
        .product-grid3:before{content:"";height:81%;width:100%;background:#fff;border:1px solid rgba(0,0,0,.1);opacity:0;position:absolute;top:0;left:0;z-index:-1;transition:all .5s ease 0s}
        .product-grid3:hover:before{opacity:1;height:100%}
        .product-grid3 .product-image3{position:relative}
        .product-grid3 .product-image3 a{display:block}
        .product-grid3 .product-image3 img{width:100%;height:auto}
        .product-grid3 .pic-1{opacity:1;transition:all .5s ease-out 0s}
        .product-grid3 .pic-2{position:absolute;top:0;left:0;opacity:0;transition:all .5s ease-out 0s}
        .product-grid3 .product-discount-label,.product-grid3 .product-new-label{background-color:#e67e22;color:#fff;font-size:17px;padding:2px 10px;position:absolute;right:10px;top:10px;transition:all .3s}
        .product-grid3 .product-content{z-index:-1;padding:15px;text-align:left}
        .product-grid3 .title{font-size:14px;text-transform:capitalize;margin:0 0 7px;transition:all .3s ease 0s}
        .product-grid3 .title a{color:#414141}
        .product-grid3 .price{color:#000;font-size:16px;letter-spacing:1px;font-weight:600;margin-right:2px;display:inline-block}
        .product-grid3 .quantity{padding:0;margin:-22px 0 0;list-style:none;text-align:right;display:block}
        @media only screen and (max-width:1200px){.product-grid3 .rating{margin:0}
        }
        @media only screen and (max-width:990px){.product-grid3{margin-bottom:30px}
        .product-grid3 .rating{margin:-22px 0 0}
        }
        @media only screen and (max-width:359px){.product-grid3 .rating{margin:0}
    }
</style>

