<?php
$links = [
    'dccomics' => [
        'title' => 'DC COMICS',
        'items' => [
            ['name' => 'Characters', 'url' => '#'],
            ['name' => 'Characters', 'url' => '#'],
            ['name' => 'Characters', 'url' => '#'],
            ['name' => 'Characters', 'url' => '#'],
            ['name' => 'Characters', 'url' => '#'],
            ['name' => 'Characters', 'url' => '#'],
            ['name' => 'Characters', 'url' => '#']
        ]
    ],
    'shop' => [
        'title' => 'SHOP',
        'items' => [
            ['name' => 'Shop DC', 'url' => '#'],
            ['name' => 'Shop DC Collectibles', 'url' => '#']
        ]
    ],
    'dc' => [
        'title' => 'DC',
        'items' => [
            ['name' => 'Characters', 'url' => '#'],
            ['name' => 'Characters', 'url' => '#'],
            ['name' => 'Characters', 'url' => '#'],
            ['name' => 'Characters', 'url' => '#'],
            ['name' => 'Characters', 'url' => '#'],
            ['name' => 'Characters', 'url' => '#'],
            ['name' => 'Characters', 'url' => '#']
        ]
    ],
    'sites' => [
        'title' => 'SITES',
        'items' => [
            ['name' => 'Characters', 'url' => '#'],
            ['name' => 'Characters', 'url' => '#'],
            ['name' => 'Characters', 'url' => '#'],
            ['name' => 'Characters', 'url' => '#'],
            ['name' => 'Characters', 'url' => '#']
        ]
    ],
    'followlinks' => [
        'title' => 'FOLLOW US',
        'items' => [
            ['name' => 'fa-brands fa-facebook', 'url' => '#'],
            ['name' => 'fa-brands fa-twitter', 'url' => '#'],
            ['name' => 'fa-brands fa-youtube', 'url' => '#'],
            ['name' => 'fa-brands fa-pinterest', 'url' => '#'],
            ['name' => 'fa-brands fa-periscope', 'url' => '#']
        ]
    ]
];
?>


<footer>
    <div id="footer-top" class="d-flex justify-content-around align-items-center ">
        <div class="d-flex">

            <div class="px-2">
                <div>
                    <h5 class="text-white ">{{ $links['dccomics']['title'] }}</h5>
                    <ul>
                        @foreach ($links['dccomics']['items'] as $item)
                            <li>
                                <a href="{{ $item['url'] }}">{{ $item['name'] }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div >
                    <h5 class="text-white ">{{ $links['shop']['title'] }}</h5>
                    <ul >
                        @foreach ($links['shop']['items'] as $item)
                            <li>
                                <a href="{{ $item['url'] }}">{{ $item['name'] }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <div class="d-flex">
            <div >
                    <h5 class="text-white">{{ $links['dc']['title'] }}</h5>
                    <ul>
                        @foreach ($links['dc']['items'] as $item)
                            <li>
                                <a href="{{ $item['url'] }}">{{ $item['name'] }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div >
                    <h5 class="text-white ">{{ $links['sites']['title'] }}</h5>
                    <ul >
                        @foreach ($links['sites']['items'] as $item)
                            <li>
                                <a href="{{ $item['url'] }}">{{ $item['name'] }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        
        <div class="logo-bg" id="logo-footer">
            
        </div>
    </div>

    <div id="footer-bottom" class="bg-dark">
        <div class="container d-flex justify-content-between align-items-center py-2">
            <div class="text-white blue-border p-2" id="sign-button">
                <a href="#">SIGN-UP NOW!</a> 
            </div>
            <div class="d-flex">
                <h5 class="text-white ">{{ $links['followlinks']['title'] }}</h5>
                @foreach ($links['followlinks']['items'] as $item)
                    <i class="{{ $item['name'] }}"></i>
                @endforeach
            </div>   
        </div>

    </div> 
   </footer>


<style lang="scss" scoped>
    #footer-top{
        background-size: cover;
    }
    .logo-bg{
        width: 563px;
        height: 370px;
        background-position: center;
    }
    .blue-border{
        border:2px solid #0C7CEC;
    }
    #footer-bottom{
       padding: 10px 0px;
    }
    #sign-button:hover{
        background-color:#0C7CEC;
        transition: 0.5s ease-in-out;
    }
    a{
        color: grey;
    }
    a:hover{
        text-decoration: underline;
        color: white;
    }
    h5{
        padding-left: 30px;
    }
    i{
        color:rgb(168, 168, 168);
        font-size: 30px;
        padding: 0px 10px;
    }
    i:hover{
        color: white;
    }
</style>