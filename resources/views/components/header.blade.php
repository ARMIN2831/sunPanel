<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>sunPanel</title>
    <link rel="icon" href="{{ asset('favicon.ico') }}">
    {{--alpine js--}}
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    {{--tailwind css--}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.2/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    {{--<link rel="stylesheet" href="{{ asset('css/app.css') }}">--}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">



    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <style>

        @font-face {
            font-family: 'vazir';
            src: url({{ asset('fonts/Vazir-Light.woff') }}) format('woff2')
        }
        .font-vazir{
            font-family: vazir;
        }
        .header-menu-item {
            position: relative;
            color: #fff;
            padding-bottom: 5px;
            transition: color 0.3s ease;
        }
        .header-menu-item::after {
            content: "";
            position: absolute;
            left: 0;
            bottom: 0;
            height: 1px;
            width: 0;
            background: #09599f;
            transition: width 0.3s ease;
        }

        .header-menu-item:hover::after {
            width: 100%;
        }

        .container {
            width: 100%;
            max-width: 100%;
            margin: 0 auto;
            padding: 0 1.25rem; /* padding-x برای سایز‌های کوچک */
        }

        @media (min-width: 640px) {
            .container {
                max-width: 35rem; /* معادل sm:max-w-[35rem] */
            }
        }

        @media (min-width: 768px) {
            .container {
                max-width: 45rem; /* معادل md:max-w-[45rem] */
            }
        }

        @media (min-width: 1024px) {
            .container {
                max-width: 1024px; /* معادل lg:max-w-[1024px] */
                padding: 0 2rem; /* padding-x برای سایز‌های بزرگ */
            }
        }

        @media (min-width: 1280px) {
            .container {
                max-width: 85%;
                padding: 2.5rem 0;
            }
        }






        .header-transform1{
            transform-style: preserve-3d;
            transform: translate3d(0px, -2rem, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg);
            opacity: 0;
        }
        .header-transform2{
            transform-style: preserve-3d;
            transform: translate3d(0px, 0rem, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg);
            opacity: 1;
        }



        /* سایه‌ها */
        .shadow-inset1 {
            box-shadow: inset 0 -7px 9px -4px rgba(175, 175, 175, 0.4);
        }
        .shadow-inset2 {
            box-shadow: inset 0 -7px 9px -4px rgba(255, 235, 227, 0.4);
        }
        .shadow-inset3 {
            box-shadow: inset 0 -2px 8px -1px rgba(204, 204, 204, 0.4);
        }
        .shadow-inset4 {
            box-shadow: inset 0 -8px 4px -9px rgba(175, 175, 175, 0.4);
        }
        .shadow1 {
            box-shadow: 0 12px 16px -4px rgba(0, 0, 0, 0.08), 0 4px 6px -2px rgba(16, 24, 40, 0.03);
        }
        .shadow2 {
            box-shadow: 0 4px 9px rgba(51, 51, 51, 0.03);
        }
        .shadow3 {
            box-shadow: 0 4px 10px 1px rgba(241, 241, 241, 0.2);
        }
        .shadow4 {
            box-shadow: 2px 2px 0 1px #ff9839;
        }

        /* انیمیشن‌ها */
        @keyframes slideUp {
            0% {
                transform: translateY(15%);
                opacity: 0;
            }
            100% {
                transform: translateY(0%);
                opacity: 1;
            }
        }

        @keyframes hero {
            0% {
                transform: translate3d(247.208px, -15.1294px, 0) scale3d(0.6, 0.6, 1);
            }
            50% {
                transform: translate3d(-180.395px, -16.6983px, 0) scale3d(0.7, 0.7, 1);
            }
            100% {
                transform: translate3d(247.208px, -15.1294px, 0) scale3d(0.6, 0.6, 1);
            }
        }

        /* کلاس‌های انیمیشن */
        .animate-slideUpAnimate {
            animation: slideUp 0.75s ease-out both;
        }

        .animate-heroAnimate {
            animation: hero 5s ease-in-out infinite;
        }
        .direction-rtl{
            direction: rtl;
        }
        .direction-ltr{
            direction: ltr;
        }
    </style>
</head>
<body class="bg-[#f8f8f8] font-vazir">
    <header style="box-shadow: 1px 1px 8px 0px #191717;" class="h-20 flex items-center justify-center z-[60] bg-[#151515] fixed w-full">
        <div class="w-full h-[47px] flex justify-center">
            <div class="w-[85%] h-full flex justify-between font-vazir">
                <div class="flex flex-row gap-4 justify-center items-center">
                    {{--<div class="text-xs font-semibold py-2.5 px-3.5 rounded-md cursor-pointer text-neutral-600 bg-zinc-100 hover:bg-zinc-200 transition transition-all duration-200">ورود | ثبت نام</div>--}}
                    <img class="w-20 brightness-[300%]" src="{{ asset('assets/photos/logo.png') }}">
                </div>
                <div class="flex flex-row gap-8 justify-center items-center text-sm font-semibold h-fll text-white">
                    <div class="cursor-pointer header-menu-item">تماس با ما</div>
                    <div class="cursor-pointer header-menu-item">سوابق</div>
                    <div class="cursor-pointer header-menu-item">محصولات و خدمات</div>
                    <div class="cursor-pointer header-menu-item">معرفی شرکت</div>
                    {{--<div class="w-28 ml-10 cursor-pointer">

                    </div>--}}
                </div>
            </div>
        </div>
    </header>
