<?php
$shop=[
    'DIGITAL COMICS',
    'DC MERCHANDISE',
    'SUBSCRIPTION',
    'COMIC SHOP LOCATOR',
    'DC POWER VISA',
];
$shopimg=[
    'resources/img/buy-comics-digital-comics.png',
    'resources/img/buy-comics-merchandise.png',
    'resources/img/buy-comics-subscriptions.png',
    'resources/img/buy-comics-shop-locator.png',
    'resources/img/buy-dc-power-visa.svg',
 ];

?>

<div class="bg-info py-4">
    <div class="container">
        <div class="row">
            @foreach ($shopimg as $index => $img)
                <div class="col-5 col-md-5 col-lg-2  mx-3 d-flex align-items-center">
                    <div class="shopimg-width">
                        <img src="{{ Vite::asset($img) }}" alt="shop-img"/>
                    </div>
                    <span class="mx-3">{{ $shop[$index] }}</span>
                </div>
            @endforeach
        </div>
    </div>
</div>

<style lang="scss" scoped>
    span{
        font-size: 15px;
        color: #ffffff;
    }
    .shopimg-width{
        width: 60px;
    }
</style>