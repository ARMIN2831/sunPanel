<section style="box-shadow: 1px 4px 8px 0px #191717;" class="px-10 z-20  pt-12 pb-24 direction-rtl bg-[#010102]">

    <div class="flex flex-col gap-16 justify-center items-center">
        <div class="flex flex-col lg:flex-row justify-between w-full">
            <div class="flex flex-col gap-2">
                <h2 class="text-white text-4xl max-sm:text-2xl max-sm:text-3xl font-bold">سوالات متداول</h2>
                <p class="text-lg max-sm:text-sm text-stone-200 font-semibold">پاسخی که به دنبالش هستید را نمی بینید؟ تماس بگیرید.</p>
            </div>
            <div class="flex justify-center items-center max-lg:w-full max-lg:mt-4">
                <a class="max-lg:w-full cursor-pointer bg-stone-800 text-white hover:bg-stone-900 text-center transition transition-all duration-200 border border-[#f0f0f0] text-black rounded-lg py-3 px-6 text-sm font-bold hover:shadow-inset4">ارتباط با ما</a>
            </div>
        </div>
        <div class="mt-16 w-full">
            <div class="flex flex-col gap-4">

                <div @click="isOpen = !isOpen" x-data="{ isOpen: false }" class="border border-[#f0f0f0] bg-[#111111] rounded-md">
                    <div class="cursor-pointer rounded-md flex flex-row justify-between items-center py-5 px-6">
                        <div class="text-stone-200 font-semibold">
                            آیا از فضای منزل مسکونی هم جهت احداث نیروگاه برق خورشیدی میتوان استفاده کرد؟
                        </div>
                        <div :class="{ 'rotate-45': isOpen }" class="ml-6 w-8 transition-all duration-300">
                            <div class="flex justify-center items-center w-4 h-4">
                                <svg class="text-white" width="100%" height="100%" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M25.3333 15.667V16.3336C25.3333 16.7018 25.0349 17.0003 24.6667 17.0003H17V24.667C17 25.0351 16.7015 25.3336 16.3333 25.3336H15.6667C15.2985 25.3336 15 25.0351 15 24.667V17.0003H7.3333C6.96511 17.0003 6.66663 16.7018 6.66663 16.3336V15.667C6.66663 15.2988 6.96511 15.0003 7.3333 15.0003H15V7.33365C15 6.96546 15.2985 6.66699 15.6667 6.66699H16.3333C16.7015 6.66699 17 6.96546 17 7.33365V15.0003H24.6667C25.0349 15.0003 25.3333 15.2988 25.3333 15.667Z" fill="currentColor"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div :class="{ 'h-[138px] max-lg:h-[160px] opacity-100 translate-y-0': isOpen , 'h-[0px] opacity-0 -translate-y-4': !isOpen }" class="w-full px-6 overflow-hidden transition-all duration-500 ease-out transform opacity-0">
                        <div class="mb-6">
                            <div class="w-full max-w-[48rem]">
                                <p class="text-stone-200 font-sm max-sm:text-xs">
                                    بله، وزارت نیرو طی قرار داد 20 ساله برق تولیدی را خریداری مینماید.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div @click="isOpen = !isOpen" x-data="{ isOpen: false }" class="border border-[#f0f0f0] bg-[#111111] rounded-md">
                    <div class="cursor-pointer rounded-md flex flex-row justify-between items-center py-5 px-6">
                        <div class="text-stone-200 font-semibold">
                            آیا از فضای منزل مسکونی هم جهت احداث نیروگاه برق خورشیدی میتوان استفاده کرد؟
                        </div>
                        <div :class="{ 'rotate-45': isOpen }" class="ml-6 w-8 transition-all duration-300">
                            <div class="flex justify-center items-center w-4 h-4">
                                <svg class="text-white" width="100%" height="100%" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M25.3333 15.667V16.3336C25.3333 16.7018 25.0349 17.0003 24.6667 17.0003H17V24.667C17 25.0351 16.7015 25.3336 16.3333 25.3336H15.6667C15.2985 25.3336 15 25.0351 15 24.667V17.0003H7.3333C6.96511 17.0003 6.66663 16.7018 6.66663 16.3336V15.667C6.66663 15.2988 6.96511 15.0003 7.3333 15.0003H15V7.33365C15 6.96546 15.2985 6.66699 15.6667 6.66699H16.3333C16.7015 6.66699 17 6.96546 17 7.33365V15.0003H24.6667C25.0349 15.0003 25.3333 15.2988 25.3333 15.667Z" fill="currentColor"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div :class="{ 'h-[138px] max-lg:h-[160px] opacity-100 translate-y-0': isOpen , 'h-[0px] opacity-0 -translate-y-4': !isOpen }" class="w-full px-6 overflow-hidden transition-all duration-500 ease-out transform opacity-0">
                        <div class="mb-6">
                            <div class="w-full max-w-[48rem]">
                                <p class="text-stone-200 font-sm max-sm:text-xs">
                                    بله، وزارت نیرو طی قرار داد 20 ساله برق تولیدی را خریداری مینماید.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div @click="isOpen = !isOpen" x-data="{ isOpen: false }" class="border border-[#f0f0f0] bg-[#111111] rounded-md">
                    <div class="cursor-pointer rounded-md flex flex-row justify-between items-center py-5 px-6">
                        <div class="text-stone-200 font-semibold">
                            آیا از فضای منزل مسکونی هم جهت احداث نیروگاه برق خورشیدی میتوان استفاده کرد؟
                        </div>
                        <div :class="{ 'rotate-45': isOpen }" class="ml-6 w-8 transition-all duration-300">
                            <div class="flex justify-center items-center w-4 h-4">
                                <svg class="text-white" width="100%" height="100%" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M25.3333 15.667V16.3336C25.3333 16.7018 25.0349 17.0003 24.6667 17.0003H17V24.667C17 25.0351 16.7015 25.3336 16.3333 25.3336H15.6667C15.2985 25.3336 15 25.0351 15 24.667V17.0003H7.3333C6.96511 17.0003 6.66663 16.7018 6.66663 16.3336V15.667C6.66663 15.2988 6.96511 15.0003 7.3333 15.0003H15V7.33365C15 6.96546 15.2985 6.66699 15.6667 6.66699H16.3333C16.7015 6.66699 17 6.96546 17 7.33365V15.0003H24.6667C25.0349 15.0003 25.3333 15.2988 25.3333 15.667Z" fill="currentColor"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div :class="{ 'h-[138px] max-lg:h-[160px] opacity-100 translate-y-0': isOpen , 'h-[0px] opacity-0 -translate-y-4': !isOpen }" class="w-full px-6 overflow-hidden transition-all duration-500 ease-out transform opacity-0">
                        <div class="mb-6">
                            <div class="w-full max-w-[48rem]">
                                <p class="text-stone-200 font-sm max-sm:text-xs">
                                    بله، وزارت نیرو طی قرار داد 20 ساله برق تولیدی را خریداری مینماید.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div @click="isOpen = !isOpen" x-data="{ isOpen: false }" class="border border-[#f0f0f0] bg-[#111111] rounded-md">
                    <div class="cursor-pointer rounded-md flex flex-row justify-between items-center py-5 px-6">
                        <div class="text-stone-200 font-semibold">
                            آیا از فضای منزل مسکونی هم جهت احداث نیروگاه برق خورشیدی میتوان استفاده کرد؟
                        </div>
                        <div :class="{ 'rotate-45': isOpen }" class="ml-6 w-8 transition-all duration-300">
                            <div class="flex justify-center items-center w-4 h-4">
                                <svg class="text-white" width="100%" height="100%" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M25.3333 15.667V16.3336C25.3333 16.7018 25.0349 17.0003 24.6667 17.0003H17V24.667C17 25.0351 16.7015 25.3336 16.3333 25.3336H15.6667C15.2985 25.3336 15 25.0351 15 24.667V17.0003H7.3333C6.96511 17.0003 6.66663 16.7018 6.66663 16.3336V15.667C6.66663 15.2988 6.96511 15.0003 7.3333 15.0003H15V7.33365C15 6.96546 15.2985 6.66699 15.6667 6.66699H16.3333C16.7015 6.66699 17 6.96546 17 7.33365V15.0003H24.6667C25.0349 15.0003 25.3333 15.2988 25.3333 15.667Z" fill="currentColor"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div :class="{ 'h-[138px] max-lg:h-[160px] opacity-100 translate-y-0': isOpen , 'h-[0px] opacity-0 -translate-y-4': !isOpen }" class="w-full px-6 overflow-hidden transition-all duration-500 ease-out transform opacity-0">
                        <div class="mb-6">
                            <div class="w-full max-w-[48rem]">
                                <p class="text-stone-200 font-sm max-sm:text-xs">
                                    بله، وزارت نیرو طی قرار داد 20 ساله برق تولیدی را خریداری مینماید.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div @click="isOpen = !isOpen" x-data="{ isOpen: false }" class="border border-[#f0f0f0] bg-[#111111] rounded-md">
                    <div class="cursor-pointer rounded-md flex flex-row justify-between items-center py-5 px-6">
                        <div class="text-stone-200 font-semibold">
                            آیا از فضای منزل مسکونی هم جهت احداث نیروگاه برق خورشیدی میتوان استفاده کرد؟
                        </div>
                        <div :class="{ 'rotate-45': isOpen }" class="ml-6 w-8 transition-all duration-300">
                            <div class="flex justify-center items-center w-4 h-4">
                                <svg class="text-white" width="100%" height="100%" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M25.3333 15.667V16.3336C25.3333 16.7018 25.0349 17.0003 24.6667 17.0003H17V24.667C17 25.0351 16.7015 25.3336 16.3333 25.3336H15.6667C15.2985 25.3336 15 25.0351 15 24.667V17.0003H7.3333C6.96511 17.0003 6.66663 16.7018 6.66663 16.3336V15.667C6.66663 15.2988 6.96511 15.0003 7.3333 15.0003H15V7.33365C15 6.96546 15.2985 6.66699 15.6667 6.66699H16.3333C16.7015 6.66699 17 6.96546 17 7.33365V15.0003H24.6667C25.0349 15.0003 25.3333 15.2988 25.3333 15.667Z" fill="currentColor"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div :class="{ 'h-[138px] max-lg:h-[160px] opacity-100 translate-y-0': isOpen , 'h-[0px] opacity-0 -translate-y-4': !isOpen }" class="w-full px-6 overflow-hidden transition-all duration-500 ease-out transform opacity-0">
                        <div class="mb-6">
                            <div class="w-full max-w-[48rem]">
                                <p class="text-stone-200 font-sm max-sm:text-xs">
                                    بله، وزارت نیرو طی قرار داد 20 ساله برق تولیدی را خریداری مینماید.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

</section>
