<section style="box-shadow: 1px 2px 8px 0px #191717;" class="pt-[80px] animate-slideUpAnimate font-vazir bg-[#010102]">
    <div class="relative">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <!-- Slide 1 -->
                <div class="swiper-slide bg-cover" style="background-image: url('{{ asset('assets/photos/banner1.jpg') }}');">
                    <div class="text-overlay">
                        <h1>متن بنر اول</h1>
                        <p>توضیحات بنر اول</p>
                    </div>
                </div>
                <!-- Slide 2 -->
                <div class="swiper-slide bg-cover" style="background-image: url('{{ asset('assets/photos/banner2.jpg') }}');">
                    <div class="text-overlay">
                        <h1>متن بنر دوم</h1>
                        <p>توضیحات بنر دوم</p>
                    </div>
                </div>
                <!-- Slide 3 -->
                <div class="swiper-slide bg-cover" style="background-image: url('{{ asset('assets/photos/banner3.jpg') }}');">
                    <div class="text-overlay">
                        <h1>متن بنر سوم</h1>
                        <p>توضیحات بنر سوم</p>
                    </div>
                </div>
            </div>
            <!-- Add Navigation -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
        </div>
    </div>
    <div class="px-10 pt-10 bg-stone-900">
        <div class="border border-[#f0f0f0] w-full bg-stone-800 text-center delay-0 rounded-t-[2rem] rounded-b-md pb-10">
            <div class="pt-6 px-2 lg:pt-8 lg:px-16 flex flex-col gap-2 items-center">
                <div class="flex flex-col justify-center items-center gap-4 max-w-[45rem]">
                    <h1 class="text-3xl max-sm:text-2xl text-white font-bold direction-rtl">برگزاری کلاس های آموزشی برق خورشیدی و اعطای نمایندگی شرکت زیست انرژِی بارمان</h1>

                    <p class="text-stone-200 max-w-[35rem] text-center max-lg:text-sm direction-rtl">
                        <span class="text-[#29c6bb] font-medium">کارشناسان</span>
                        شرکت
                        <span class="text-[#29c6bb] font-medium">بارمان</span>
                        آماده بازدید و ارائه مشاوره در خصوص اجرای پروژه های
                        <span class="text-[#29c6bb] font-medium">برق خورشیدی</span>
                        به مشتریان خود میباشند.
                    </p>
                </div>
                <div class="bg-stone-800 w-1/2 h-4 relative bottom-[-65px] blur-[30px] z-0 animate-heroAnimate"></div>

            </div>
        </div>
        <div class="flex flex-row gap-4 mt-4 justify-center items-center w-full">
            <div class="grid justify-around grid-cols-2 lg:flex lg:flex-row md:grid md:grid-cols-3 max-lg:gap-8 max-lg:justify-center max-lg:items-center pt-6 pb-5 w-full">
                <a target="_blank" class="flex justify-center">
                    <img src="{{ asset('assets/photos/hero1.svg') }}" class="w-32 h-8 mt-1 brightness-[100%]">
                </a>
                <a target="_blank" class="flex justify-center">
                    <img src="{{ asset('assets/photos/hero2.svg') }}" class="w-32 h-8 mt-1 brightness-[100%]">
                </a>
                <a target="_blank" class="flex justify-center">
                    <img src="{{ asset('assets/photos/hero3.svg') }}" class="w-32 h-8 mt-1 brightness-[100%]">
                </a>
                <a target="_blank" class="flex justify-center">
                    <img src="{{ asset('assets/photos/hero4.png') }}" sizes="(max-width: 479px) 38vw, (max-width: 991px) 96px, 128px" class="w-32 h-8 mt-1 brightness-[300%]">
                </a>
                <a target="_blank" class="flex justify-center max-sm:hidden">
                    <img src="{{ asset('assets/photos/hero5.webp') }}" class="w-32 h-8 mt-1 brightness-[200%]">
                </a>
            </div>
        </div>
    </div>
    <style>
        .swiper-container {
            width: 100%;
            height: calc(100vh - 80px);
        }

        .swiper-slide {
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-align: right;
            background-size: cover;
            background-position: center;
            position: relative;
            align-content: flex-end;
            flex-wrap: wrap;
        }

        .text-overlay {
            background: rgba(0, 0, 0, 0.5); /* پس‌زمینه نیمه‌شفاف */
            padding: 20px;
            width: 100%;
        }

        .text-overlay h1 {
            font-size: 2rem;
            margin-bottom: 10px;
        }

        .text-overlay p {
            font-size: 1rem;
        }
        .swiper-backface-hidden{
            overflow: hidden;
        }
    </style>
    <script>
        const swiper = new Swiper('.swiper-container', {
            loop: true, // اسلایدها به صورت حلقه‌ای
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            autoplay: {
                delay: 3000, // تغییر خودکار هر ۳ ثانیه
                disableOnInteraction: false,
            },
        });
    </script>

</section>

