<?php
/**
 * Created by PhpStorm.
 * User: momin
 * Date: 7/8/2018
 * Time: 1:02 PM
 */
?>
        <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Red Blog Theme - Free CSS Templates</title>
    <meta name="keywords" content="Red Blog Theme, Free CSS Templates" />
    <meta name="description" content="Red Blog Theme - Free CSS Templates by templatemo.com" />
    <link href="{{asset('public/assets')}}/templatemo_style.css" rel="stylesheet" type="text/css" />

</head>
<body>

<div id="templatemo_top_wrapper">
    <div id="templatemo_top">

        <div id="templatemo_menu">

            <ul>
                <li><a href="{{url('/')}}" class="current">Home</a></li>
                <li><a href="{{url('/portfolio')}}">Portfolio</a></li>
                <li><a href="services.html">Services</a></li>
                <li><a href="contact.html">Contact Us</a></li>
            </ul>

        </div> <!-- end of templatemo_menu -->

        <div id="twitter">
            <a href="#">follow us <br />
                on twitter</a>
        </div>

    </div>
</div>

<div id="templatemo_header_wrapper">
    <div id="templatemo_header">

        <div id="site_title">
            <h1><a href="http://www.templatemo.com" target="_parent"><strong>Red Blog</strong><span>Free Blog Template in HTML CSS</span></a></h1>
        </div>

    </div>
</div>

<div id="templatemo_main_wrapper">
    <div id="templatemo_main">
        <div id="templatemo_main_top">

            <div id="templatemo_content">


                <!--kata hoyeche   -->
                @yield('post_section')

            </div>

                @yield('portfolio_section')

            <div id="templatemo_sidebar">

                <h4>Categories</h4>
                <ul class="templatemo_list">
                    <?php
                        $categorys=DB::table('category')
                        ->get();

                    ?>
                        <li><a href="{{URL::to('/popular_post')}}">Popular</a></li>

                    @foreach($categorys as $category)
                    <li><a href="{{URL::to('/category_post/'.$category->id)}}">{{$category->Category_name}}</a></li>
                        @endforeach
                </ul>

                <div class="cleaner_h40"></div>


                <div id="ads">
                    <a href="#"><img src="{{asset('public/assets')}}/images/templatemo_200x100_banner.jpg" alt="banner 1" /></a>

                    <a href="#"><img src="{{asset('public/assets')}}/images/templatemo_200x100_banner.jpg" alt="banner 2" /></a>
                </div>

            </div>

            <div class="cleaner"></div>

        </div>

    </div>

    <div id="templatemo_main_bottom"></div>

</div>

<div id="templatemo_footer">

    Copyright © 2048 <a href="index.html">Your Company Name</a> |
    <a href="http://www.iwebsitetemplate.com" target="_parent">Website Templates</a> by <a href="http://www.templatemo.com" target="_parent">Free CSS Templates</a>

</div>

<div align=center>This template  downloaded form <a href='http://all-free-download.com/free-website-templates/'>free website templates</a></div></body>
</html>