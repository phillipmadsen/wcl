<!DOCTYPE html>
<html lang="en">
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# medium-com: http://ogp.me/ns/fb/medium-com#">
    <meta charset="utf-8">
    <meta name="author" content="Phillip Madsen <contact@affordableprogrammer.com>">
    <meta name="referrer" content="always">
    <meta name="description" content="@yield('meta-desc', 'News, Tutorials, Interviews, Inspiration and Tools for developers and webmasters')">
    <meta name="keywords" content="@yield('meta-keywords', 'WE CODE LARAVEL, LARAVEL, WEB DEVELOPMENT, JQUERY, FREELANCERS, DEVELOPERS, PROGRAMMING, PHP, JAVASCRIPT, LARAVEL PROGRAMMERS')">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    
    <meta property="og:title" content=">@yield('meta-title', 'Online Software Engineers, Web Developers and Web Designers!')">
    <meta property="og:url" content="https://www.wecodelaravel.com/">
    <meta property="og:image" content="">
    <meta property="fb:app_id" content="">
    <meta property="og:description" content="@yield('meta-desc', 'News, Tutorials, Interviews, Inspiration and Tools for developers and webmasters') on FaceBook">
   
    <link rel="shortcut icon" href="/assets/img/favicon.png">
    <title>@yield('meta-title', 'We Code Laravel Online Software Engineers, Web Developers and Web Designers!')</title>
  {{--  <title>We Code Laravel - Online Software Engineers, Web Developers and Web Designers!</title> --}}
    
    <link rel="profile" href="http://microformats.org/profile/specs" />
    <link rel="profile" href="http://microformats.org/profile/hatom" />
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700%7CRaleway:200,300,400,700">
    <link rel="stylesheet" href="/assets/css/frontend.css">
</head>
<body>

{{-- Header --}}
<header id="branding" role="banner">
    {{-- Navigation --}}
    <div class="navbar navbar-fixed-top">
        <div class="container container-header">
            <div class="navbar-header">
                {{-- Logo --}}
                @include('frontend.partials.common.header._logo')
                {{-- /Logo --}}

                {{-- Mobile Navigation --}}
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                {{-- /Mobile Navigation --}}
            </div>

            {{-- Main Navigation --}}
            @include('frontend.partials.common.header._menu')
            {{-- /Main Navigation --}}
        </div>
    </div>
    {{-- /Navigation --}}
</header>
{{-- /Header --}}

{{-- Main Container --}}
<div class="main-container">
    @yield('content')
</div>
{{-- /Main Container --}}

{{-- Footer --}}
<footer class="footer">
    <div class="container">
        <div class="row">
            {{-- About --}}
            @include('frontend.partials.common.footer._about')
            {{-- /About --}}

            {{-- Recent Post --}}
            @include('frontend.partials.common.footer._lastPosts')
            {{-- /Recent Post --}}

            {{-- Contact --}}
            @include('frontend.partials.common.footer._contact')
            {{-- /Contact --}}

            {{-- Social --}}
            @include('frontend.partials.common.footer._social')
            {{-- /Social --}}
        </div>

        {{-- Copyright --}}
        @include('frontend.partials.common.footer._copyright')
        {{-- /Copyright --}}
    </div>
</footer>
{{-- /Footer --}}

<a href="#" class="scroll-top"><div class="scrolltop-holder"><i class="fa fa-arrow-up scrolltop"></i></div></a>

<script src="/assets/js/frontend.js"></script>
@include('frontend.partials.common.footer._analytics')
</body>
</html>
