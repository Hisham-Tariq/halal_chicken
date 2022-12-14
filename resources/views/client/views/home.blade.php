<!DOCTYPE html>
<html lang="en">
<head>
    <title>Page title</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://api.fontshare.com">
    <link href="https://api.fontshare.com/v2/css?f[]=satoshi@900,700,500,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/tailwind.min.css')}}">
    {{--    <link rel="icon" type="image/png" sizes="32x32" href="shuffle-for-tailwind.png">--}}
    <script src="{{asset('js/main.js')}}"></script>
</head>
<body class="antialiased bg-body text-body font-body">
<div class="">

    <div>
        <nav>
            <div class="flex h-20 py-3 px-6 items-center justify-between bg-black relative">
                <button class="xl:hidden navbar-burger flex p-1 items-center text-green-500 hover:text-indigo-500">
                    <svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3 18H21" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                              stroke-linejoin="round"></path>
                        <path d="M3 12H21" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                              stroke-linejoin="round"></path>
                        <path d="M3 6H21" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                              stroke-linejoin="round"></path>
                    </svg>
                </button>
                <a class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 inline-block text-2xl font-bold mr-10"
                   href="#">
                    <img src="shopal-assets/logos/shopal-logo-white.svg" alt="">
                </a>
                <ul class="hidden xl:flex items-center">
                    <li class="mr-6">
                        <button
                            class="relative group inline-flex items-center text-left text-base font-bold text-white hover:text-green-500">
                            <span class="mr-2">Home</span>
                            <svg width="8" height="6" viewbox="0 0 8 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M3.99999 5.08071C3.91243 5.08081 3.82572 5.06361 3.74483 5.03009C3.66394 4.99657 3.59048 4.94739 3.52866 4.88538L0.700184 2.05728C0.575173 1.93227 0.504943 1.76272 0.504944 1.58593C0.504944 1.40913 0.575175 1.23958 0.700187 1.11457C0.825199 0.989561 0.99475 0.919331 1.17154 0.919331C1.34834 0.919332 1.51789 0.989563 1.6429 1.11457L3.99999 3.47132L6.35708 1.11455C6.48209 0.989543 6.65165 0.919312 6.82844 0.919312C7.00523 0.919311 7.17478 0.989541 7.29979 1.11455C7.42481 1.23956 7.49504 1.40911 7.49504 1.58591C7.49504 1.7627 7.42481 1.93225 7.2998 2.05726L4.47132 4.8854C4.4095 4.9474 4.33604 4.99658 4.25515 5.0301C4.17426 5.06361 4.08755 5.08082 3.99999 5.08071V5.08071Z"
                                    fill="currentColor"></path>
                            </svg>
                            <div
                                class="hidden group-hover:block absolute z-50 bottom-0 left-0 transform translate-y-full w-56 pt-6">
                                <div class="p-2 bg-white border-2 border-black rounded-md shadow"><a
                                        class="block p-2 text-sm font-bold text-black hover:text-indigo-500" href="#">Category
                                        1</a><a class="block p-2 text-sm font-bold text-black hover:text-indigo-500"
                                                href="#">Category 2</a><a
                                        class="block p-2 text-sm font-bold text-black hover:text-indigo-500" href="#">Category
                                        3</a></div>
                            </div>
                        </button>
                    </li>
                    <li class="mr-6">
                        <button
                            class="relative group inline-flex items-center text-left text-base font-bold text-white hover:text-green-500">
                            <span class="mr-2">Pages</span>
                            <svg width="8" height="6" viewbox="0 0 8 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M3.99999 5.08071C3.91243 5.08081 3.82572 5.06361 3.74483 5.03009C3.66394 4.99657 3.59048 4.94739 3.52866 4.88538L0.700184 2.05728C0.575173 1.93227 0.504943 1.76272 0.504944 1.58593C0.504944 1.40913 0.575175 1.23958 0.700187 1.11457C0.825199 0.989561 0.99475 0.919331 1.17154 0.919331C1.34834 0.919332 1.51789 0.989563 1.6429 1.11457L3.99999 3.47132L6.35708 1.11455C6.48209 0.989543 6.65165 0.919312 6.82844 0.919312C7.00523 0.919311 7.17478 0.989541 7.29979 1.11455C7.42481 1.23956 7.49504 1.40911 7.49504 1.58591C7.49504 1.7627 7.42481 1.93225 7.2998 2.05726L4.47132 4.8854C4.4095 4.9474 4.33604 4.99658 4.25515 5.0301C4.17426 5.06361 4.08755 5.08082 3.99999 5.08071V5.08071Z"
                                    fill="currentColor"></path>
                            </svg>
                            <div
                                class="hidden group-hover:block absolute z-50 bottom-0 left-0 transform translate-y-full w-56 pt-6">
                                <div class="p-2 bg-white border-2 border-black rounded-md shadow"><a
                                        class="block p-2 text-sm font-bold text-black hover:text-indigo-500" href="#">Category
                                        1</a><a class="block p-2 text-sm font-bold text-black hover:text-indigo-500"
                                                href="#">Category 2</a><a
                                        class="block p-2 text-sm font-bold text-black hover:text-indigo-500" href="#">Category
                                        3</a></div>
                            </div>
                        </button>
                    </li>
                    <li class="mr-6">
                        <button
                            class="relative group inline-flex items-center text-left text-base font-bold text-white hover:text-green-500">
                            <span class="mr-2">Products</span>
                            <svg width="8" height="6" viewbox="0 0 8 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M3.99999 5.08071C3.91243 5.08081 3.82572 5.06361 3.74483 5.03009C3.66394 4.99657 3.59048 4.94739 3.52866 4.88538L0.700184 2.05728C0.575173 1.93227 0.504943 1.76272 0.504944 1.58593C0.504944 1.40913 0.575175 1.23958 0.700187 1.11457C0.825199 0.989561 0.99475 0.919331 1.17154 0.919331C1.34834 0.919332 1.51789 0.989563 1.6429 1.11457L3.99999 3.47132L6.35708 1.11455C6.48209 0.989543 6.65165 0.919312 6.82844 0.919312C7.00523 0.919311 7.17478 0.989541 7.29979 1.11455C7.42481 1.23956 7.49504 1.40911 7.49504 1.58591C7.49504 1.7627 7.42481 1.93225 7.2998 2.05726L4.47132 4.8854C4.4095 4.9474 4.33604 4.99658 4.25515 5.0301C4.17426 5.06361 4.08755 5.08082 3.99999 5.08071V5.08071Z"
                                    fill="currentColor"></path>
                            </svg>
                            <div
                                class="hidden group-hover:block absolute z-50 bottom-0 left-0 transform translate-y-full w-56 pt-6">
                                <div class="p-2 bg-white border-2 border-black rounded-md shadow"><a
                                        class="block p-2 text-sm font-bold text-black hover:text-indigo-500" href="#">Category
                                        1</a><a class="block p-2 text-sm font-bold text-black hover:text-indigo-500"
                                                href="#">Category 2</a><a
                                        class="block p-2 text-sm font-bold text-black hover:text-indigo-500" href="#">Category
                                        3</a></div>
                            </div>
                        </button>
                    </li>
                    <li class="mr-6"><a class="inline-block font-bold text-white hover:text-green-600" href="#">Blog</a>
                    </li>
                    <li class="mr-6"><a class="inline-block font-bold text-white hover:text-green-600" href="#">Shop</a>
                    </li>
                    <li><a class="inline-block font-bold text-white hover:text-green-600" href="#">Contact</a></li>
                </ul>
                <div class="inline-flex items-center">
                    <div class="hidden lg:flex">
                        <a class="inline-block mr-6 text-green-600 hover:text-indigo-500 transition duration-200"
                           href="#">
                            <svg width="20" height="24" viewbox="0 0 20 18" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M14.44 0.100006C12.63 0.100006 11.01 0.980006 10 2.33001C8.99 0.980006 7.37 0.100006 5.56 0.100006C2.49 0.100006 0 2.60001 0 5.69001C0 6.88001 0.19 7.98001 0.52 9.00001C2.1 14 6.97 16.99 9.38 17.81C9.72 17.93 10.28 17.93 10.62 17.81C13.03 16.99 17.9 14 19.48 9.00001C19.81 7.98001 20 6.88001 20 5.69001C20 2.60001 17.51 0.100006 14.44 0.100006Z"
                                    fill="currentColor"></path>
                            </svg>
                        </a>
                        <a class="inline-block mr-6 text-green-600 hover:text-indigo-500 transition duration-200"
                           href="#">
                            <svg width="24" height="24" viewbox="0 0 24 24" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M19.24 5.58H18.84L15.46 2.2C15.19 1.93 14.75 1.93 14.47 2.2C14.2 2.47 14.2 2.91 14.47 3.19L16.86 5.58H7.14L9.53 3.19C9.8 2.92 9.8 2.48 9.53 2.2C9.26 1.93 8.82 1.93 8.54 2.2L5.17 5.58H4.77C3.87 5.58 2 5.58 2 8.14C2 9.11 2.2 9.75 2.62 10.17C2.86 10.42 3.15 10.55 3.46 10.62C3.75 10.69 4.06 10.7 4.36 10.7H19.64C19.95 10.7 20.24 10.68 20.52 10.62C21.36 10.42 22 9.82 22 8.14C22 5.58 20.13 5.58 19.24 5.58Z"
                                    fill="currentColor"></path>
                                <path
                                    d="M19.0499 12H4.86991C4.24991 12 3.77991 12.55 3.87991 13.16L4.71991 18.3C4.99991 20.02 5.74991 22 9.07991 22H14.6899C18.0599 22 18.6599 20.31 19.0199 18.42L20.0299 13.19C20.1499 12.57 19.6799 12 19.0499 12ZM10.6099 18.45C10.6099 18.84 10.2999 19.15 9.91991 19.15C9.52991 19.15 9.21991 18.84 9.21991 18.45V15.15C9.21991 14.77 9.52991 14.45 9.91991 14.45C10.2999 14.45 10.6099 14.77 10.6099 15.15V18.45ZM14.8899 18.45C14.8899 18.84 14.5799 19.15 14.1899 19.15C13.8099 19.15 13.4899 18.84 13.4899 18.45V15.15C13.4899 14.77 13.8099 14.45 14.1899 14.45C14.5799 14.45 14.8899 14.77 14.8899 15.15V18.45Z"
                                    fill="currentColor"></path>
                            </svg>
                        </a>
                        <a class="inline-block mr-6 text-green-600 hover:text-indigo-500 transition duration-200"
                           href="#">
                            <svg width="24" height="24" viewbox="0 0 24 24" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M11.01 20.02C15.9861 20.02 20.02 15.9861 20.02 11.01C20.02 6.03391 15.9861 2 11.01 2C6.03391 2 2 6.03391 2 11.01C2 15.9861 6.03391 20.02 11.01 20.02Z"
                                    fill="currentColor"></path>
                                <path
                                    d="M21.9901 18.95C21.6601 18.34 20.9601 18 20.0201 18C19.3101 18 18.7001 18.29 18.3401 18.79C17.9801 19.29 17.9001 19.96 18.1201 20.63C18.5501 21.93 19.3001 22.22 19.7101 22.27C19.7701 22.28 19.8301 22.28 19.9001 22.28C20.3401 22.28 21.0201 22.09 21.6801 21.1C22.2101 20.33 22.3101 19.56 21.9901 18.95Z"
                                    fill="currentColor"></path>
                            </svg>
                        </a>
                        <a class="inline-block text-green-600 hover:text-indigo-500 transition duration-200" href="#">
                            <svg width="24" height="24" viewbox="0 0 24 24" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M12 12C14.7614 12 17 9.76142 17 7C17 4.23858 14.7614 2 12 2C9.23858 2 7 4.23858 7 7C7 9.76142 9.23858 12 12 12Z"
                                    fill="currentColor"></path>
                                <path
                                    d="M11.9999 14.5C6.98991 14.5 2.90991 17.86 2.90991 22C2.90991 22.28 3.12991 22.5 3.40991 22.5H20.5899C20.8699 22.5 21.0899 22.28 21.0899 22C21.0899 17.86 17.0099 14.5 11.9999 14.5Z"
                                    fill="currentColor"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </nav>
        <div class="hidden navbar-menu fixed top-0 left-0 bottom-0 w-5/6 max-w-sm z-50">
            <div class="navbar-backdrop fixed inset-0 backdrop-blur-xl backdrop-filter bg-gray-900 bg-opacity-80"></div>
            <nav class="relative pt-7 pb-8 bg-white h-full overflow-y-auto">
                <div class="flex flex-col px-6 h-full">
                    <a class="inline-block ml-4 mb-7" href="#">
                        <img src="shopal-assets/logos/shopal-logo.svg" alt="">
                    </a>
                    <ul class="w-full mb-auto pb-16">
                        <li class="mb-6">
                            <button
                                class="relative group inline-flex flex-wrap items-center text-left text-base font-bold text-black">
                                <span class="mr-2">Category</span>
                                <svg width="8" height="6" viewbox="0 0 8 6" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M3.99999 5.08071C3.91243 5.08081 3.82572 5.06361 3.74483 5.03009C3.66394 4.99657 3.59048 4.94739 3.52866 4.88538L0.700184 2.05728C0.575173 1.93227 0.504943 1.76272 0.504944 1.58593C0.504944 1.40913 0.575175 1.23958 0.700187 1.11457C0.825199 0.989561 0.99475 0.919331 1.17154 0.919331C1.34834 0.919332 1.51789 0.989563 1.6429 1.11457L3.99999 3.47132L6.35708 1.11455C6.48209 0.989543 6.65165 0.919312 6.82844 0.919312C7.00523 0.919311 7.17478 0.989541 7.29979 1.11455C7.42481 1.23956 7.49504 1.40911 7.49504 1.58591C7.49504 1.7627 7.42481 1.93225 7.2998 2.05726L4.47132 4.8854C4.4095 4.9474 4.33604 4.99658 4.25515 5.0301C4.17426 5.06361 4.08755 5.08082 3.99999 5.08071V5.08071Z"
                                        fill="currentColor"></path>
                                </svg>
                                <div class="hidden group-hover:block w-full pt-2 px-2"><a
                                        class="block p-2 text-sm font-bold text-black hover:text-indigo-500" href="#">Category
                                        1</a><a class="block p-2 text-sm font-bold text-black hover:text-indigo-500"
                                                href="#">Category 1</a><a
                                        class="block p-2 text-sm font-bold text-black hover:text-indigo-500" href="#">Category
                                        1</a></div>
                            </button>
                        </li>
                        <li class="mb-6">
                            <button
                                class="relative group inline-flex flex-wrap items-center text-left text-base font-bold text-black">
                                <span class="mr-2">Pages</span>
                                <svg width="8" height="6" viewbox="0 0 8 6" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M3.99999 5.08071C3.91243 5.08081 3.82572 5.06361 3.74483 5.03009C3.66394 4.99657 3.59048 4.94739 3.52866 4.88538L0.700184 2.05728C0.575173 1.93227 0.504943 1.76272 0.504944 1.58593C0.504944 1.40913 0.575175 1.23958 0.700187 1.11457C0.825199 0.989561 0.99475 0.919331 1.17154 0.919331C1.34834 0.919332 1.51789 0.989563 1.6429 1.11457L3.99999 3.47132L6.35708 1.11455C6.48209 0.989543 6.65165 0.919312 6.82844 0.919312C7.00523 0.919311 7.17478 0.989541 7.29979 1.11455C7.42481 1.23956 7.49504 1.40911 7.49504 1.58591C7.49504 1.7627 7.42481 1.93225 7.2998 2.05726L4.47132 4.8854C4.4095 4.9474 4.33604 4.99658 4.25515 5.0301C4.17426 5.06361 4.08755 5.08082 3.99999 5.08071V5.08071Z"
                                        fill="currentColor"></path>
                                </svg>
                                <div class="hidden group-hover:block w-full pt-2 px-2"><a
                                        class="block p-2 text-sm font-bold text-black hover:text-indigo-500" href="#">Category
                                        1</a><a class="block p-2 text-sm font-bold text-black hover:text-indigo-500"
                                                href="#">Category 1</a><a
                                        class="block p-2 text-sm font-bold text-black hover:text-indigo-500" href="#">Category
                                        1</a></div>
                            </button>
                        </li>
                        <li class="mb-6">
                            <button
                                class="relative group inline-flex flex-wrap items-center text-left text-base font-bold text-black">
                                <span class="mr-2">Products</span>
                                <svg width="8" height="6" viewbox="0 0 8 6" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M3.99999 5.08071C3.91243 5.08081 3.82572 5.06361 3.74483 5.03009C3.66394 4.99657 3.59048 4.94739 3.52866 4.88538L0.700184 2.05728C0.575173 1.93227 0.504943 1.76272 0.504944 1.58593C0.504944 1.40913 0.575175 1.23958 0.700187 1.11457C0.825199 0.989561 0.99475 0.919331 1.17154 0.919331C1.34834 0.919332 1.51789 0.989563 1.6429 1.11457L3.99999 3.47132L6.35708 1.11455C6.48209 0.989543 6.65165 0.919312 6.82844 0.919312C7.00523 0.919311 7.17478 0.989541 7.29979 1.11455C7.42481 1.23956 7.49504 1.40911 7.49504 1.58591C7.49504 1.7627 7.42481 1.93225 7.2998 2.05726L4.47132 4.8854C4.4095 4.9474 4.33604 4.99658 4.25515 5.0301C4.17426 5.06361 4.08755 5.08082 3.99999 5.08071V5.08071Z"
                                        fill="currentColor"></path>
                                </svg>
                                <div class="hidden group-hover:block w-full pt-2 px-2"><a
                                        class="block p-2 text-sm font-bold text-black hover:text-indigo-500" href="#">Category
                                        1</a><a class="block p-2 text-sm font-bold text-black hover:text-indigo-500"
                                                href="#">Category 1</a><a
                                        class="block p-2 text-sm font-bold text-black hover:text-indigo-500" href="#">Category
                                        1</a></div>
                            </button>
                        </li>
                        <li class="mb-6"><a class="inline-block pl-1 font-bold" href="#">Blog</a></li>
                        <li class="mb-6"><a class="inline-block pl-1 font-bold" href="#">Shop</a></li>
                        <li><a class="inline-block pl-1 font-bold" href="#">Contact</a></li>
                    </ul>
                    <div class="w-full">
                        <button
                            class="block w-full py-4 px-4 mb-4 font-bold border-2 border-gray-900 rounded-md shadow">Log
                            in
                        </button>
                        <button
                            class="block w-full py-4 px-4 mb-8 font-bold border-2 border-gray-900 rounded-md shadow text-gray-900 bg-green-500">
                            Sign up
                        </button>
                        <p class="pl-2 text-sm">2022 © Shuffle</p>
                    </div>
                </div>
            </nav>
        </div>
    </div>

    <div>
        <nav>
            <div class="flex h-20 py-3 px-6 items-center bg-black">
                <a class="inline-block text-2xl font-bold mr-8" href="#">
                    <img src="shopal-assets/logos/shopal-logo-white.svg" alt="">
                </a>
                <div class="hidden md:inline-flex h-10 px-4 py-2 items-center border-2 border-white rounded-md">
                    <input class="text-white text-sm font-bold placeholder-white outline-none bg-transparent"
                           type="search" placeholder="Search now...">
                    <button class="inline-block" type="submit">
                        <svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M11 20C15.9706 20 20 15.9706 20 11C20 6.02944 15.9706 2 11 2C6.02944 2 2 6.02944 2 11C2 15.9706 6.02944 20 11 20Z"
                                stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path
                                d="M18.9299 20.6898C19.4599 22.2898 20.6699 22.4498 21.5999 21.0498C22.4499 19.7698 21.8899 18.7198 20.3499 18.7198C19.2099 18.7098 18.5699 19.5998 18.9299 20.6898Z"
                                stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </button>
                </div>
                <div class="hidden md:block w-auto ml-auto">
                    <a class="group inline-flex mr-8 items-center" href="#">
                        <svg width="20" height="20" viewbox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M16.0332 4.65H15.6998L12.8832 1.83333C12.6582 1.60833 12.2915 1.60833 12.0582 1.83333C11.8332 2.05833 11.8332 2.425 12.0582 2.65833L14.0498 4.65H5.94984L7.9415 2.65833C8.1665 2.43333 8.1665 2.06666 7.9415 1.83333C7.7165 1.60833 7.34984 1.60833 7.1165 1.83333L4.30817 4.65H3.97484C3.22484 4.65 1.6665 4.65 1.6665 6.78333C1.6665 7.59166 1.83317 8.125 2.18317 8.475C2.38317 8.68333 2.62484 8.79166 2.88317 8.85C3.12484 8.90833 3.38317 8.91666 3.63317 8.91666H16.3665C16.6248 8.91666 16.8665 8.9 17.0998 8.85C17.7998 8.68333 18.3332 8.18333 18.3332 6.78333C18.3332 4.65 16.7748 4.65 16.0332 4.65Z"
                                fill="#AFFF0F"></path>
                            <path
                                d="M15.875 10H4.05838C3.54171 10 3.15005 10.4583 3.23338 10.9667L3.93338 15.25C4.16671 16.6833 4.79171 18.3333 7.56671 18.3333H12.2417C15.05 18.3333 15.55 16.925 15.85 15.35L16.6917 10.9917C16.7917 10.475 16.4 10 15.875 10ZM8.84171 15.375C8.84171 15.7 8.58338 15.9583 8.26671 15.9583C7.94171 15.9583 7.68338 15.7 7.68338 15.375V12.625C7.68338 12.3083 7.94171 12.0417 8.26671 12.0417C8.58338 12.0417 8.84171 12.3083 8.84171 12.625V15.375ZM12.4084 15.375C12.4084 15.7 12.15 15.9583 11.825 15.9583C11.5084 15.9583 11.2417 15.7 11.2417 15.375V12.625C11.2417 12.3083 11.5084 12.0417 11.825 12.0417C12.15 12.0417 12.4084 12.3083 12.4084 12.625V15.375Z"
                                fill="#AFFF0F"></path>
                        </svg>
                        <span class="ml-2 text-white group-hover:text-green-500 font-bold">My cart</span>
                    </a>
                    <a class="group inline-flex mr-8 items-center" href="#">
                        <svg width="20" height="20" viewbox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M10.0002 9.99999C12.3013 9.99999 14.1668 8.13451 14.1668 5.83332C14.1668 3.53214 12.3013 1.66666 10.0002 1.66666C7.69898 1.66666 5.8335 3.53214 5.8335 5.83332C5.8335 8.13451 7.69898 9.99999 10.0002 9.99999Z"
                                fill="#AFFF0F"></path>
                            <path
                                d="M9.9998 12.0833C5.8248 12.0833 2.4248 14.8833 2.4248 18.3333C2.4248 18.5667 2.60814 18.75 2.84147 18.75H17.1581C17.3915 18.75 17.5748 18.5667 17.5748 18.3333C17.5748 14.8833 14.1748 12.0833 9.9998 12.0833Z"
                                fill="#AFFF0F"></path>
                        </svg>
                        <span class="ml-2 text-white group-hover:text-green-500 font-bold">Login</span>
                    </a>
                </div>
            </div>
            <div class="flex h-12 py-6 px-6 items-center justify-between bg-green-500 relative">
                <ul class="hidden md:flex items-center absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                    <li class="mr-6">
                        <button
                            class="relative group inline-flex items-center text-left text-base font-bold text-gray-900 hover:text-indigo-500">
                            <span class="mr-2">Category</span>
                            <svg width="8" height="6" viewbox="0 0 8 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M3.99999 5.08071C3.91243 5.08081 3.82572 5.06361 3.74483 5.03009C3.66394 4.99657 3.59048 4.94739 3.52866 4.88538L0.700184 2.05728C0.575173 1.93227 0.504943 1.76272 0.504944 1.58593C0.504944 1.40913 0.575175 1.23958 0.700187 1.11457C0.825199 0.989561 0.99475 0.919331 1.17154 0.919331C1.34834 0.919332 1.51789 0.989563 1.6429 1.11457L3.99999 3.47132L6.35708 1.11455C6.48209 0.989543 6.65165 0.919312 6.82844 0.919312C7.00523 0.919311 7.17478 0.989541 7.29979 1.11455C7.42481 1.23956 7.49504 1.40911 7.49504 1.58591C7.49504 1.7627 7.42481 1.93225 7.2998 2.05726L4.47132 4.8854C4.4095 4.9474 4.33604 4.99658 4.25515 5.0301C4.17426 5.06361 4.08755 5.08082 3.99999 5.08071V5.08071Z"
                                    fill="currentColor"></path>
                            </svg>
                            <div
                                class="hidden group-hover:block absolute z-50 bottom-0 left-0 transform translate-y-full w-56 pt-6">
                                <div class="p-2 bg-white border-2 border-black rounded-md shadow"><a
                                        class="block p-2 text-sm font-bold text-black hover:text-indigo-500" href="#">Category
                                        1</a><a class="block p-2 text-sm font-bold text-black hover:text-indigo-500"
                                                href="#">Category 2</a><a
                                        class="block p-2 text-sm font-bold text-black hover:text-indigo-500" href="#">Category
                                        3</a></div>
                            </div>
                        </button>
                    </li>
                    <li class="mr-6">
                        <button
                            class="relative group inline-flex items-center text-left text-base font-bold text-gray-900 hover:text-indigo-500">
                            <span class="mr-2">Collection</span>
                            <svg width="8" height="6" viewbox="0 0 8 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M3.99999 5.08071C3.91243 5.08081 3.82572 5.06361 3.74483 5.03009C3.66394 4.99657 3.59048 4.94739 3.52866 4.88538L0.700184 2.05728C0.575173 1.93227 0.504943 1.76272 0.504944 1.58593C0.504944 1.40913 0.575175 1.23958 0.700187 1.11457C0.825199 0.989561 0.99475 0.919331 1.17154 0.919331C1.34834 0.919332 1.51789 0.989563 1.6429 1.11457L3.99999 3.47132L6.35708 1.11455C6.48209 0.989543 6.65165 0.919312 6.82844 0.919312C7.00523 0.919311 7.17478 0.989541 7.29979 1.11455C7.42481 1.23956 7.49504 1.40911 7.49504 1.58591C7.49504 1.7627 7.42481 1.93225 7.2998 2.05726L4.47132 4.8854C4.4095 4.9474 4.33604 4.99658 4.25515 5.0301C4.17426 5.06361 4.08755 5.08082 3.99999 5.08071V5.08071Z"
                                    fill="currentColor"></path>
                            </svg>
                            <div
                                class="hidden group-hover:block absolute z-50 bottom-0 left-0 transform translate-y-full w-56 pt-6">
                                <div class="p-2 bg-white border-2 border-black rounded-md shadow"><a
                                        class="block p-2 text-sm font-bold text-black hover:text-indigo-500" href="#">Category
                                        1</a><a class="block p-2 text-sm font-bold text-black hover:text-indigo-500"
                                                href="#">Category 2</a><a
                                        class="block p-2 text-sm font-bold text-black hover:text-indigo-500" href="#">Category
                                        3</a></div>
                            </div>
                        </button>
                    </li>
                    <li class="mr-6"><a class="inline-block font-bold text-gray-900 hover:text-indigo-500" href="#">Story</a>
                    </li>
                    <li><a class="inline-block font-bold text-gray-900 hover:text-indigo-500" href="#">Brand</a></li>
                </ul>
                <div class="md:hidden ml-auto">
                    <button class="navbar-burger flex items-center text-black hover:text-indigo-500">
                        <svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3 18H21" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                  stroke-linejoin="round"></path>
                            <path d="M3 12H21" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                  stroke-linejoin="round"></path>
                            <path d="M3 6H21" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                  stroke-linejoin="round"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </nav>
        <div class="hidden navbar-menu fixed top-0 left-0 bottom-0 w-5/6 max-w-sm z-50">
            <div class="navbar-backdrop fixed inset-0 backdrop-blur-xl backdrop-filter bg-gray-900 bg-opacity-80"></div>
            <nav class="relative pt-7 pb-8 bg-white h-full overflow-y-auto">
                <div class="flex flex-col px-6 h-full">
                    <a class="inline-block ml-4 mb-7" href="#">
                        <img src="shopal-assets/logos/shopal-logo.svg" alt="">
                    </a>
                    <ul class="w-full mb-auto pb-16">
                        <li class="mb-6">
                            <button
                                class="relative group inline-flex flex-wrap items-center text-left text-base font-bold text-black">
                                <span class="mr-2">Category</span>
                                <svg width="8" height="6" viewbox="0 0 8 6" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M3.99999 5.08071C3.91243 5.08081 3.82572 5.06361 3.74483 5.03009C3.66394 4.99657 3.59048 4.94739 3.52866 4.88538L0.700184 2.05728C0.575173 1.93227 0.504943 1.76272 0.504944 1.58593C0.504944 1.40913 0.575175 1.23958 0.700187 1.11457C0.825199 0.989561 0.99475 0.919331 1.17154 0.919331C1.34834 0.919332 1.51789 0.989563 1.6429 1.11457L3.99999 3.47132L6.35708 1.11455C6.48209 0.989543 6.65165 0.919312 6.82844 0.919312C7.00523 0.919311 7.17478 0.989541 7.29979 1.11455C7.42481 1.23956 7.49504 1.40911 7.49504 1.58591C7.49504 1.7627 7.42481 1.93225 7.2998 2.05726L4.47132 4.8854C4.4095 4.9474 4.33604 4.99658 4.25515 5.0301C4.17426 5.06361 4.08755 5.08082 3.99999 5.08071V5.08071Z"
                                        fill="currentColor"></path>
                                </svg>
                                <div class="hidden group-hover:block w-full pt-2 px-2"><a
                                        class="block p-2 text-sm font-bold text-black hover:text-indigo-500" href="#">Category
                                        1</a><a class="block p-2 text-sm font-bold text-black hover:text-indigo-500"
                                                href="#">Category 1</a><a
                                        class="block p-2 text-sm font-bold text-black hover:text-indigo-500" href="#">Category
                                        1</a></div>
                            </button>
                        </li>
                        <li class="mb-6">
                            <button
                                class="relative group inline-flex flex-wrap items-center text-left text-base font-bold text-black">
                                <span class="mr-2">Pages</span>
                                <svg width="8" height="6" viewbox="0 0 8 6" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M3.99999 5.08071C3.91243 5.08081 3.82572 5.06361 3.74483 5.03009C3.66394 4.99657 3.59048 4.94739 3.52866 4.88538L0.700184 2.05728C0.575173 1.93227 0.504943 1.76272 0.504944 1.58593C0.504944 1.40913 0.575175 1.23958 0.700187 1.11457C0.825199 0.989561 0.99475 0.919331 1.17154 0.919331C1.34834 0.919332 1.51789 0.989563 1.6429 1.11457L3.99999 3.47132L6.35708 1.11455C6.48209 0.989543 6.65165 0.919312 6.82844 0.919312C7.00523 0.919311 7.17478 0.989541 7.29979 1.11455C7.42481 1.23956 7.49504 1.40911 7.49504 1.58591C7.49504 1.7627 7.42481 1.93225 7.2998 2.05726L4.47132 4.8854C4.4095 4.9474 4.33604 4.99658 4.25515 5.0301C4.17426 5.06361 4.08755 5.08082 3.99999 5.08071V5.08071Z"
                                        fill="currentColor"></path>
                                </svg>
                                <div class="hidden group-hover:block w-full pt-2 px-2"><a
                                        class="block p-2 text-sm font-bold text-black hover:text-indigo-500" href="#">Category
                                        1</a><a class="block p-2 text-sm font-bold text-black hover:text-indigo-500"
                                                href="#">Category 1</a><a
                                        class="block p-2 text-sm font-bold text-black hover:text-indigo-500" href="#">Category
                                        1</a></div>
                            </button>
                        </li>
                        <li class="mb-6">
                            <button
                                class="relative group inline-flex flex-wrap items-center text-left text-base font-bold text-black">
                                <span class="mr-2">Products</span>
                                <svg width="8" height="6" viewbox="0 0 8 6" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M3.99999 5.08071C3.91243 5.08081 3.82572 5.06361 3.74483 5.03009C3.66394 4.99657 3.59048 4.94739 3.52866 4.88538L0.700184 2.05728C0.575173 1.93227 0.504943 1.76272 0.504944 1.58593C0.504944 1.40913 0.575175 1.23958 0.700187 1.11457C0.825199 0.989561 0.99475 0.919331 1.17154 0.919331C1.34834 0.919332 1.51789 0.989563 1.6429 1.11457L3.99999 3.47132L6.35708 1.11455C6.48209 0.989543 6.65165 0.919312 6.82844 0.919312C7.00523 0.919311 7.17478 0.989541 7.29979 1.11455C7.42481 1.23956 7.49504 1.40911 7.49504 1.58591C7.49504 1.7627 7.42481 1.93225 7.2998 2.05726L4.47132 4.8854C4.4095 4.9474 4.33604 4.99658 4.25515 5.0301C4.17426 5.06361 4.08755 5.08082 3.99999 5.08071V5.08071Z"
                                        fill="currentColor"></path>
                                </svg>
                                <div class="hidden group-hover:block w-full pt-2 px-2"><a
                                        class="block p-2 text-sm font-bold text-black hover:text-indigo-500" href="#">Category
                                        1</a><a class="block p-2 text-sm font-bold text-black hover:text-indigo-500"
                                                href="#">Category 1</a><a
                                        class="block p-2 text-sm font-bold text-black hover:text-indigo-500" href="#">Category
                                        1</a></div>
                            </button>
                        </li>
                        <li class="mb-6"><a class="inline-block pl-1 font-bold" href="#">Blog</a></li>
                        <li class="mb-6"><a class="inline-block pl-1 font-bold" href="#">Shop</a></li>
                        <li><a class="inline-block pl-1 font-bold" href="#">Contact</a></li>
                    </ul>
                    <div class="w-full">
                        <button
                            class="block w-full py-4 px-4 mb-4 font-bold border-2 border-gray-900 rounded-md shadow">Log
                            in
                        </button>
                        <button
                            class="block w-full py-4 px-4 mb-8 font-bold border-2 border-gray-900 rounded-md shadow text-gray-900 bg-green-500">
                            Sign up
                        </button>
                        <p class="pl-2 text-sm">2022 © Shuffle</p>
                    </div>
                </div>
            </nav>
        </div>
    </div>

    <section class="p-6">
        <div class="relative pb-32 md:pb-52 px-4 sm:px-8 rounded-md shadow overflow-hidden">
            <img class="absolute top-0 left-0 w-full h-full object-cover"
                 src="shopal-assets/background/background-office.png" alt="">
            <nav class="mb-24 md:mb-32">
                <div class="flex py-8 items-center justify-between bg-transparent relative">
                    <a class="inline-block text-2xl font-bold mr-10" href="#">
                        <img src="shopal-assets/logos/shopal-logo-white.svg" alt="">
                    </a>
                    <ul class="hidden lg:flex items-center absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                        <li class="mr-6">
                            <button
                                class="relative group inline-flex items-center text-left text-base font-bold text-white hover:text-green-500">
                                <span class="mr-2">Category</span>
                                <svg width="8" height="6" viewbox="0 0 8 6" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M3.99999 5.08071C3.91243 5.08081 3.82572 5.06361 3.74483 5.03009C3.66394 4.99657 3.59048 4.94739 3.52866 4.88538L0.700184 2.05728C0.575173 1.93227 0.504943 1.76272 0.504944 1.58593C0.504944 1.40913 0.575175 1.23958 0.700187 1.11457C0.825199 0.989561 0.99475 0.919331 1.17154 0.919331C1.34834 0.919332 1.51789 0.989563 1.6429 1.11457L3.99999 3.47132L6.35708 1.11455C6.48209 0.989543 6.65165 0.919312 6.82844 0.919312C7.00523 0.919311 7.17478 0.989541 7.29979 1.11455C7.42481 1.23956 7.49504 1.40911 7.49504 1.58591C7.49504 1.7627 7.42481 1.93225 7.2998 2.05726L4.47132 4.8854C4.4095 4.9474 4.33604 4.99658 4.25515 5.0301C4.17426 5.06361 4.08755 5.08082 3.99999 5.08071V5.08071Z"
                                        fill="currentColor"></path>
                                </svg>
                                <div
                                    class="hidden group-hover:block absolute z-50 bottom-0 left-0 transform translate-y-full w-56 pt-6">
                                    <div class="p-2 bg-white border-2 border-black rounded-md shadow"><a
                                            class="block p-2 text-sm font-bold text-black hover:text-indigo-500"
                                            href="#">Category 1</a><a
                                            class="block p-2 text-sm font-bold text-black hover:text-indigo-500"
                                            href="#">Category 1</a><a
                                            class="block p-2 text-sm font-bold text-black hover:text-indigo-500"
                                            href="#">Category 1</a></div>
                                </div>
                            </button>
                        </li>
                        <li class="mr-6">
                            <button
                                class="relative group inline-flex items-center text-left text-base font-bold text-white hover:text-green-500">
                                <span class="mr-2">Category</span>
                                <svg width="8" height="6" viewbox="0 0 8 6" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M3.99999 5.08071C3.91243 5.08081 3.82572 5.06361 3.74483 5.03009C3.66394 4.99657 3.59048 4.94739 3.52866 4.88538L0.700184 2.05728C0.575173 1.93227 0.504943 1.76272 0.504944 1.58593C0.504944 1.40913 0.575175 1.23958 0.700187 1.11457C0.825199 0.989561 0.99475 0.919331 1.17154 0.919331C1.34834 0.919332 1.51789 0.989563 1.6429 1.11457L3.99999 3.47132L6.35708 1.11455C6.48209 0.989543 6.65165 0.919312 6.82844 0.919312C7.00523 0.919311 7.17478 0.989541 7.29979 1.11455C7.42481 1.23956 7.49504 1.40911 7.49504 1.58591C7.49504 1.7627 7.42481 1.93225 7.2998 2.05726L4.47132 4.8854C4.4095 4.9474 4.33604 4.99658 4.25515 5.0301C4.17426 5.06361 4.08755 5.08082 3.99999 5.08071V5.08071Z"
                                        fill="currentColor"></path>
                                </svg>
                                <div
                                    class="hidden group-hover:block absolute z-50 bottom-0 left-0 transform translate-y-full w-56 pt-6">
                                    <div class="p-2 bg-white border-2 border-black rounded-md shadow"><a
                                            class="block p-2 text-sm font-bold text-black hover:text-indigo-500"
                                            href="#">Category 1</a><a
                                            class="block p-2 text-sm font-bold text-black hover:text-indigo-500"
                                            href="#">Category 1</a><a
                                            class="block p-2 text-sm font-bold text-black hover:text-indigo-500"
                                            href="#">Category 1</a></div>
                                </div>
                            </button>
                        </li>
                        <li class="mr-6"><a class="inline-block font-bold text-white hover:text-green-500" href="#">Story</a>
                        </li>
                        <li><a class="inline-block font-bold text-white hover:text-green-500" href="#">Brand</a></li>
                    </ul>
                    <div class="inline-flex items-center">
                        <div class="hidden lg:flex">
                            <a class="inline-block mr-6 text-green-500 hover:text-indigo-500 transition duration-200"
                               href="#">
                                <svg width="20" height="24" viewbox="0 0 20 18" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M14.44 0.100006C12.63 0.100006 11.01 0.980006 10 2.33001C8.99 0.980006 7.37 0.100006 5.56 0.100006C2.49 0.100006 0 2.60001 0 5.69001C0 6.88001 0.19 7.98001 0.52 9.00001C2.1 14 6.97 16.99 9.38 17.81C9.72 17.93 10.28 17.93 10.62 17.81C13.03 16.99 17.9 14 19.48 9.00001C19.81 7.98001 20 6.88001 20 5.69001C20 2.60001 17.51 0.100006 14.44 0.100006Z"
                                        fill="currentColor"></path>
                                </svg>
                            </a>
                            <a class="inline-block mr-6 text-green-500 hover:text-indigo-500 transition duration-200"
                               href="#">
                                <svg width="24" height="24" viewbox="0 0 24 24" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M19.24 5.58H18.84L15.46 2.2C15.19 1.93 14.75 1.93 14.47 2.2C14.2 2.47 14.2 2.91 14.47 3.19L16.86 5.58H7.14L9.53 3.19C9.8 2.92 9.8 2.48 9.53 2.2C9.26 1.93 8.82 1.93 8.54 2.2L5.17 5.58H4.77C3.87 5.58 2 5.58 2 8.14C2 9.11 2.2 9.75 2.62 10.17C2.86 10.42 3.15 10.55 3.46 10.62C3.75 10.69 4.06 10.7 4.36 10.7H19.64C19.95 10.7 20.24 10.68 20.52 10.62C21.36 10.42 22 9.82 22 8.14C22 5.58 20.13 5.58 19.24 5.58Z"
                                        fill="currentColor"></path>
                                    <path
                                        d="M19.0499 12H4.86991C4.24991 12 3.77991 12.55 3.87991 13.16L4.71991 18.3C4.99991 20.02 5.74991 22 9.07991 22H14.6899C18.0599 22 18.6599 20.31 19.0199 18.42L20.0299 13.19C20.1499 12.57 19.6799 12 19.0499 12ZM10.6099 18.45C10.6099 18.84 10.2999 19.15 9.91991 19.15C9.52991 19.15 9.21991 18.84 9.21991 18.45V15.15C9.21991 14.77 9.52991 14.45 9.91991 14.45C10.2999 14.45 10.6099 14.77 10.6099 15.15V18.45ZM14.8899 18.45C14.8899 18.84 14.5799 19.15 14.1899 19.15C13.8099 19.15 13.4899 18.84 13.4899 18.45V15.15C13.4899 14.77 13.8099 14.45 14.1899 14.45C14.5799 14.45 14.8899 14.77 14.8899 15.15V18.45Z"
                                        fill="currentColor"></path>
                                </svg>
                            </a>
                            <a class="inline-block mr-6 text-green-500 hover:text-indigo-500 transition duration-200"
                               href="#">
                                <svg width="24" height="24" viewbox="0 0 24 24" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M11.01 20.02C15.9861 20.02 20.02 15.9861 20.02 11.01C20.02 6.03391 15.9861 2 11.01 2C6.03391 2 2 6.03391 2 11.01C2 15.9861 6.03391 20.02 11.01 20.02Z"
                                        fill="currentColor"></path>
                                    <path
                                        d="M21.9901 18.95C21.6601 18.34 20.9601 18 20.0201 18C19.3101 18 18.7001 18.29 18.3401 18.79C17.9801 19.29 17.9001 19.96 18.1201 20.63C18.5501 21.93 19.3001 22.22 19.7101 22.27C19.7701 22.28 19.8301 22.28 19.9001 22.28C20.3401 22.28 21.0201 22.09 21.6801 21.1C22.2101 20.33 22.3101 19.56 21.9901 18.95Z"
                                        fill="currentColor"></path>
                                </svg>
                            </a>
                            <a class="inline-block mr-6 text-green-500 hover:text-indigo-500 transition duration-200"
                               href="#">
                                <svg width="24" height="24" viewbox="0 0 24 24" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M12 12C14.7614 12 17 9.76142 17 7C17 4.23858 14.7614 2 12 2C9.23858 2 7 4.23858 7 7C7 9.76142 9.23858 12 12 12Z"
                                        fill="currentColor"></path>
                                    <path
                                        d="M11.9999 14.5C6.98991 14.5 2.90991 17.86 2.90991 22C2.90991 22.28 3.12991 22.5 3.40991 22.5H20.5899C20.8699 22.5 21.0899 22.28 21.0899 22C21.0899 17.86 17.0099 14.5 11.9999 14.5Z"
                                        fill="currentColor"></path>
                                </svg>
                            </a>
                        </div>
                        <button class="navbar-burger flex p-1 items-center text-green-500 hover:text-indigo-500">
                            <svg width="24" height="24" viewbox="0 0 24 24" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M3 18H21" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                      stroke-linejoin="round"></path>
                                <path d="M3 12H21" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                      stroke-linejoin="round"></path>
                                <path d="M3 6H21" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                      stroke-linejoin="round"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </nav>
            <div class="container px-4 mx-auto relative">
                <div class="flex flex-wrap -mx-4 items-center justify-center md:justify-between">
                    <div class="w-auto px-4 order-last md:order-first">
                        <a class="inline-block text-orange-500 hover:text-orange-600" href="#">
                            <svg width="40" height="40" viewbox="0 0 40 40" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M20 0C8.96 0 0 8.96 0 20C0 31.04 8.96 40 20 40C31.04 40 40 31.04 40 20C40 8.96 31.04 0 20 0ZM27 21.5H16.62L20.06 24.94C20.64 25.52 20.64 26.48 20.06 27.06C19.76 27.36 19.38 27.5 19 27.5C18.62 27.5 18.24 27.36 17.94 27.06L11.94 21.06C11.36 20.48 11.36 19.52 11.94 18.94L17.94 12.94C18.52 12.36 19.48 12.36 20.06 12.94C20.64 13.52 20.64 14.48 20.06 15.06L16.62 18.5H27C27.82 18.5 28.5 19.18 28.5 20C28.5 20.82 27.82 21.5 27 21.5Z"
                                    fill="currentColor"></path>
                            </svg>
                        </a>
                    </div>
                    <div class="w-full md:w-2/3 lg:w-1/2 px-4 mb-24 md:mb-0">
                        <div class="max-w-lg md:max-w-xl mx-auto text-center">
                            <h1 class="font-heading text-3xl xs:text-4xl 2xl:text-5xl font-black text-white mb-6">Take
                                care of your performance every day.</h1>
                            <p class="max-w-md mx-auto text-lg font-bold text-white mb-12">Build a well-presented brand
                                that everyone will love. Take care to develop resources continually and integrity them
                                with previous projects.</p>
                            <div class="sm:flex items-center justify-center">
                                <a class="group relative inline-block h-12 w-full sm:w-48 mb-2 sm:mb-0 sm:mr-6 bg-blueGray-900 rounded-md"
                                   href="#">
                                    <div
                                        class="absolute top-0 left-0 transform -translate-y-1 -translate-x-1 w-full h-full group-hover:translate-y-0 group-hover:translate-x-0 transition duration-300">
                                        <div
                                            class="flex h-full w-full items-center justify-center bg-green-600 border-2 border-black rounded-md">
                                            <span class="text-base font-black text-black">Check our Catalog</span>
                                        </div>
                                    </div>
                                </a>
                                <a class="group relative inline-block h-12 w-full sm:w-36 bg-blueGray-900 rounded-md"
                                   href="#">
                                    <div
                                        class="absolute top-0 left-0 transform -translate-y-1 -translate-x-1 w-full h-full group-hover:translate-y-0 group-hover:translate-x-0 transition duration-300">
                                        <div
                                            class="flex h-full w-full items-center justify-center bg-orange-500 border-2 border-black rounded-md">
                                            <span class="text-base font-black text-white">Start Buying</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="w-auto px-4 order-last md:order-none">
                        <a class="inline-block text-orange-500 hover:text-orange-600" href="#">
                            <svg width="40" height="40" viewbox="0 0 40 40" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M20 0C31.04 0 40 8.96 40 20C40 31.04 31.04 40 20 40C8.96 40 0 31.04 0 20C0 8.96 8.96 0 20 0ZM13 21.5H23.38L19.94 24.94C19.36 25.52 19.36 26.48 19.94 27.06C20.24 27.36 20.62 27.5 21 27.5C21.38 27.5 21.76 27.36 22.06 27.06L28.06 21.06C28.64 20.48 28.64 19.52 28.06 18.94L22.06 12.94C21.48 12.36 20.52 12.36 19.94 12.94C19.36 13.52 19.36 14.48 19.94 15.06L23.38 18.5H13C12.18 18.5 11.5 19.18 11.5 20C11.5 20.82 12.18 21.5 13 21.5Z"
                                    fill="currentColor"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="hidden navbar-menu fixed top-0 left-0 bottom-0 w-5/6 max-w-sm z-50">
            <div class="navbar-backdrop fixed inset-0 backdrop-blur-xl backdrop-filter bg-gray-900 bg-opacity-80"></div>
            <nav class="relative pt-7 pb-8 bg-white h-full overflow-y-auto">
                <div class="flex flex-col px-6 h-full">
                    <a class="inline-block ml-4 mb-7" href="#">
                        <img src="shopal-assets/logos/shopal-logo.svg" alt="">
                    </a>
                    <ul class="w-full mb-auto pb-16">
                        <li class="mb-6">
                            <button
                                class="relative group inline-flex flex-wrap items-center text-left text-base font-bold text-black">
                                <span class="mr-2">Category</span>
                                <svg width="8" height="6" viewbox="0 0 8 6" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M3.99999 5.08071C3.91243 5.08081 3.82572 5.06361 3.74483 5.03009C3.66394 4.99657 3.59048 4.94739 3.52866 4.88538L0.700184 2.05728C0.575173 1.93227 0.504943 1.76272 0.504944 1.58593C0.504944 1.40913 0.575175 1.23958 0.700187 1.11457C0.825199 0.989561 0.99475 0.919331 1.17154 0.919331C1.34834 0.919332 1.51789 0.989563 1.6429 1.11457L3.99999 3.47132L6.35708 1.11455C6.48209 0.989543 6.65165 0.919312 6.82844 0.919312C7.00523 0.919311 7.17478 0.989541 7.29979 1.11455C7.42481 1.23956 7.49504 1.40911 7.49504 1.58591C7.49504 1.7627 7.42481 1.93225 7.2998 2.05726L4.47132 4.8854C4.4095 4.9474 4.33604 4.99658 4.25515 5.0301C4.17426 5.06361 4.08755 5.08082 3.99999 5.08071V5.08071Z"
                                        fill="currentColor"></path>
                                </svg>
                                <div class="hidden group-hover:block w-full pt-2 px-2"><a
                                        class="block p-2 text-sm font-bold text-black hover:text-indigo-500" href="#">Category
                                        1</a><a class="block p-2 text-sm font-bold text-black hover:text-indigo-500"
                                                href="#">Category 1</a><a
                                        class="block p-2 text-sm font-bold text-black hover:text-indigo-500" href="#">Category
                                        1</a></div>
                            </button>
                        </li>
                        <li class="mb-6">
                            <button
                                class="relative group inline-flex flex-wrap items-center text-left text-base font-bold text-black">
                                <span class="mr-2">Pages</span>
                                <svg width="8" height="6" viewbox="0 0 8 6" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M3.99999 5.08071C3.91243 5.08081 3.82572 5.06361 3.74483 5.03009C3.66394 4.99657 3.59048 4.94739 3.52866 4.88538L0.700184 2.05728C0.575173 1.93227 0.504943 1.76272 0.504944 1.58593C0.504944 1.40913 0.575175 1.23958 0.700187 1.11457C0.825199 0.989561 0.99475 0.919331 1.17154 0.919331C1.34834 0.919332 1.51789 0.989563 1.6429 1.11457L3.99999 3.47132L6.35708 1.11455C6.48209 0.989543 6.65165 0.919312 6.82844 0.919312C7.00523 0.919311 7.17478 0.989541 7.29979 1.11455C7.42481 1.23956 7.49504 1.40911 7.49504 1.58591C7.49504 1.7627 7.42481 1.93225 7.2998 2.05726L4.47132 4.8854C4.4095 4.9474 4.33604 4.99658 4.25515 5.0301C4.17426 5.06361 4.08755 5.08082 3.99999 5.08071V5.08071Z"
                                        fill="currentColor"></path>
                                </svg>
                                <div class="hidden group-hover:block w-full pt-2 px-2"><a
                                        class="block p-2 text-sm font-bold text-black hover:text-indigo-500" href="#">Category
                                        1</a><a class="block p-2 text-sm font-bold text-black hover:text-indigo-500"
                                                href="#">Category 1</a><a
                                        class="block p-2 text-sm font-bold text-black hover:text-indigo-500" href="#">Category
                                        1</a></div>
                            </button>
                        </li>
                        <li class="mb-6">
                            <button
                                class="relative group inline-flex flex-wrap items-center text-left text-base font-bold text-black">
                                <span class="mr-2">Products</span>
                                <svg width="8" height="6" viewbox="0 0 8 6" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M3.99999 5.08071C3.91243 5.08081 3.82572 5.06361 3.74483 5.03009C3.66394 4.99657 3.59048 4.94739 3.52866 4.88538L0.700184 2.05728C0.575173 1.93227 0.504943 1.76272 0.504944 1.58593C0.504944 1.40913 0.575175 1.23958 0.700187 1.11457C0.825199 0.989561 0.99475 0.919331 1.17154 0.919331C1.34834 0.919332 1.51789 0.989563 1.6429 1.11457L3.99999 3.47132L6.35708 1.11455C6.48209 0.989543 6.65165 0.919312 6.82844 0.919312C7.00523 0.919311 7.17478 0.989541 7.29979 1.11455C7.42481 1.23956 7.49504 1.40911 7.49504 1.58591C7.49504 1.7627 7.42481 1.93225 7.2998 2.05726L4.47132 4.8854C4.4095 4.9474 4.33604 4.99658 4.25515 5.0301C4.17426 5.06361 4.08755 5.08082 3.99999 5.08071V5.08071Z"
                                        fill="currentColor"></path>
                                </svg>
                                <div class="hidden group-hover:block w-full pt-2 px-2"><a
                                        class="block p-2 text-sm font-bold text-black hover:text-indigo-500" href="#">Category
                                        1</a><a class="block p-2 text-sm font-bold text-black hover:text-indigo-500"
                                                href="#">Category 1</a><a
                                        class="block p-2 text-sm font-bold text-black hover:text-indigo-500" href="#">Category
                                        1</a></div>
                            </button>
                        </li>
                        <li class="mb-6"><a class="inline-block pl-1 font-bold" href="#">Blog</a></li>
                        <li class="mb-6"><a class="inline-block pl-1 font-bold" href="#">Shop</a></li>
                        <li><a class="inline-block pl-1 font-bold" href="#">Contact</a></li>
                    </ul>
                    <div class="w-full">
                        <button
                            class="block w-full py-4 px-4 mb-4 font-bold border-2 border-gray-900 rounded-md shadow">Log
                            in
                        </button>
                        <button
                            class="block w-full py-4 px-4 mb-8 font-bold border-2 border-gray-900 rounded-md shadow text-gray-900 bg-green-500">
                            Sign up
                        </button>
                        <p class="pl-2 text-sm">2022 © Shuffle</p>
                    </div>
                </div>
            </nav>
        </div>
    </section>

    <section class="pt-20 pb-16 bg-gray-900">
        <div class="container mx-auto px-4 mb-12 md:mb-20">
            <div class="max-w-6xl mx-auto">
                <div class="flex flex-wrap -mx-4">
                    <div class="w-full lg:w-1/3 px-4 mb-6 lg:mb-0">
                        <a class="inline-block mb-16" href="#">
                            <img class="h-7" src="shopal-assets/logos/shopal-logo-white.svg" alt="" width="auto">
                        </a>
                        <div class="flex flex-col mb-8"><a
                                class="inline-block text-sm font-bold text-white hover:underline mb-3" href="#">Call us
                                at: 1-888-699-8900</a><a
                                class="inline-block text-sm font-bold text-white hover:underline"
                                href="mailto:contact@shopal.com">Email: contact@shopal.com</a></div>
                        <div>
                            <a class="inline-block text-green-500 hover:text-indigo-500 mr-6" href="#">
                                <svg width="24" height="24" viewbox="0 0 24 24" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M13.6349 20.7272V12.766H16.3583L16.7669 9.66243H13.6349V7.68126C13.6349 6.78299 13.8882 6.17083 15.203 6.17083L16.8771 6.17015V3.39421C16.5876 3.35731 15.5938 3.27271 14.4371 3.27271C12.0217 3.27271 10.3681 4.71878 10.3681 7.37389V9.66243H7.63647V12.766H10.3681V20.7272H13.6349Z"
                                          fill="currentColor"></path>
                                    <mask id="mask0_601_10113" style="mask-type:alpha" maskunits="userSpaceOnUse" x="7"
                                          y="3" width="10" height="18">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M13.6349 20.7272V12.766H16.3583L16.7669 9.66243H13.6349V7.68126C13.6349 6.78299 13.8882 6.17083 15.203 6.17083L16.8771 6.17015V3.39421C16.5876 3.35731 15.5938 3.27271 14.4371 3.27271C12.0217 3.27271 10.3681 4.71878 10.3681 7.37389V9.66243H7.63647V12.766H10.3681V20.7272H13.6349Z"
                                              fill="white"></path>
                                    </mask>
                                </svg>
                            </a>
                            <a class="inline-block text-green-500 hover:text-indigo-500 mr-6" href="#">
                                <svg width="24" height="24" viewbox="0 0 24 24" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M21.8181 6.14598C21.1356 6.44844 20.4032 6.65356 19.6336 6.74513C20.4194 6.27462 21.0208 5.52831 21.3059 4.64177C20.5689 5.0775 19.7553 5.39389 18.8885 5.56541C18.1943 4.82489 17.2069 4.36365 16.1118 4.36365C14.0108 4.36365 12.3072 6.06719 12.3072 8.16707C12.3072 8.46489 12.3408 8.75577 12.4057 9.03392C9.24434 8.87513 6.44104 7.3605 4.56483 5.05895C4.23686 5.61986 4.05028 6.27344 4.05028 6.9711C4.05028 8.29107 4.72243 9.45574 5.74225 10.1371C5.11877 10.1163 4.53237 9.94477 4.01901 9.65968V9.70719C4.01901 11.5498 5.33086 13.0876 7.07031 13.4376C6.75161 13.5234 6.41555 13.5709 6.06789 13.5709C5.82222 13.5709 5.58464 13.5466 5.35171 13.5002C5.8361 15.0125 7.24067 16.1123 8.90483 16.1424C7.6034 17.1623 5.96243 17.7683 4.1801 17.7683C3.87301 17.7683 3.57052 17.7498 3.27271 17.7162C4.95655 18.7974 6.95561 19.4279 9.10416 19.4279C16.1026 19.4279 19.928 13.6312 19.928 8.60398L19.9153 8.11147C20.6627 7.57834 21.3094 6.90853 21.8181 6.14598Z"
                                          fill="currentColor"></path>
                                    <mask id="mask0_601_10114" style="mask-type:alpha" maskunits="userSpaceOnUse" x="3"
                                          y="4" width="19" height="16">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M21.8181 6.14598C21.1356 6.44844 20.4032 6.65356 19.6336 6.74513C20.4194 6.27462 21.0208 5.52831 21.3059 4.64177C20.5689 5.0775 19.7553 5.39389 18.8885 5.56541C18.1943 4.82489 17.2069 4.36365 16.1118 4.36365C14.0108 4.36365 12.3072 6.06719 12.3072 8.16707C12.3072 8.46489 12.3408 8.75577 12.4057 9.03392C9.24434 8.87513 6.44104 7.3605 4.56483 5.05895C4.23686 5.61986 4.05028 6.27344 4.05028 6.9711C4.05028 8.29107 4.72243 9.45574 5.74225 10.1371C5.11877 10.1163 4.53237 9.94477 4.01901 9.65968V9.70719C4.01901 11.5498 5.33086 13.0876 7.07031 13.4376C6.75161 13.5234 6.41555 13.5709 6.06789 13.5709C5.82222 13.5709 5.58464 13.5466 5.35171 13.5002C5.8361 15.0125 7.24067 16.1123 8.90483 16.1424C7.6034 17.1623 5.96243 17.7683 4.1801 17.7683C3.87301 17.7683 3.57052 17.7498 3.27271 17.7162C4.95655 18.7974 6.95561 19.4279 9.10416 19.4279C16.1026 19.4279 19.928 13.6312 19.928 8.60398L19.9153 8.11147C20.6627 7.57834 21.3094 6.90853 21.8181 6.14598Z"
                                              fill="white"></path>
                                    </mask>
                                </svg>
                            </a>
                            <a class="inline-block text-green-500 hover:text-indigo-500 mr-6" href="#">
                                <svg width="24" height="24" viewbox="0 0 24 24" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M7.6007 2.18176H16.3992C19.3874 2.18176 21.8184 4.61276 21.8182 7.60069V16.3992C21.8182 19.3871 19.3874 21.8181 16.3992 21.8181H7.6007C4.61276 21.8181 2.18188 19.3872 2.18188 16.3992V7.60069C2.18188 4.61276 4.61276 2.18176 7.6007 2.18176ZM16.3993 20.0759C18.4267 20.0759 20.0761 18.4266 20.0761 16.3992H20.076V7.60069C20.076 5.57343 18.4266 3.924 16.3992 3.924H7.6007C5.57343 3.924 3.92412 5.57343 3.92412 7.60069V16.3992C3.92412 18.4266 5.57343 20.076 7.6007 20.0759H16.3993ZM6.85721 12.0001C6.85721 9.16418 9.16425 6.85709 12.0001 6.85709C14.8359 6.85709 17.1429 9.16418 17.1429 12.0001C17.1429 14.8358 14.8359 17.1428 12.0001 17.1428C9.16425 17.1428 6.85721 14.8358 6.85721 12.0001ZM8.62805 11.9999C8.62805 13.8592 10.1408 15.3718 12.0001 15.3718C13.8593 15.3718 15.3721 13.8592 15.3721 11.9999C15.3721 10.1405 13.8594 8.62784 12.0001 8.62784C10.1407 8.62784 8.62805 10.1405 8.62805 11.9999Z"
                                          fill="currentColor"></path>
                                    <mask id="mask0_601_10115" style="mask-type:alpha" maskunits="userSpaceOnUse" x="2"
                                          y="2" width="20" height="20">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M7.6007 2.18176H16.3992C19.3874 2.18176 21.8184 4.61276 21.8182 7.60069V16.3992C21.8182 19.3871 19.3874 21.8181 16.3992 21.8181H7.6007C4.61276 21.8181 2.18188 19.3872 2.18188 16.3992V7.60069C2.18188 4.61276 4.61276 2.18176 7.6007 2.18176ZM16.3993 20.0759C18.4267 20.0759 20.0761 18.4266 20.0761 16.3992H20.076V7.60069C20.076 5.57343 18.4266 3.924 16.3992 3.924H7.6007C5.57343 3.924 3.92412 5.57343 3.92412 7.60069V16.3992C3.92412 18.4266 5.57343 20.076 7.6007 20.0759H16.3993ZM6.85721 12.0001C6.85721 9.16418 9.16425 6.85709 12.0001 6.85709C14.8359 6.85709 17.1429 9.16418 17.1429 12.0001C17.1429 14.8358 14.8359 17.1428 12.0001 17.1428C9.16425 17.1428 6.85721 14.8358 6.85721 12.0001ZM8.62805 11.9999C8.62805 13.8592 10.1408 15.3718 12.0001 15.3718C13.8593 15.3718 15.3721 13.8592 15.3721 11.9999C15.3721 10.1405 13.8594 8.62784 12.0001 8.62784C10.1407 8.62784 8.62805 10.1405 8.62805 11.9999Z"
                                              fill="white"></path>
                                    </mask>
                                </svg>
                            </a>
                            <a class="inline-block text-green-500 hover:text-indigo-500" href="#">
                                <svg width="24" height="24" viewbox="0 0 24 24" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M19.2 3H4.8C3.81 3 3 3.81 3 4.8V19.2C3 20.19 3.81 21 4.8 21H19.2C20.19 21 21 20.19 21 19.2V4.8C21 3.81 20.19 3 19.2 3ZM8.4 18.3H5.7V10.2H8.4V18.3ZM7.05 8.67C6.15 8.67 5.43 7.95 5.43 7.05C5.43 6.15 6.15 5.43 7.05 5.43C7.95 5.43 8.67 6.15 8.67 7.05C8.67 7.95 7.95 8.67 7.05 8.67ZM18.3 18.3H15.6V13.53C15.6 12.81 14.97 12.18 14.25 12.18C13.53 12.18 12.9 12.81 12.9 13.53V18.3H10.2V10.2H12.9V11.28C13.35 10.56 14.34 10.02 15.15 10.02C16.86 10.02 18.3 11.46 18.3 13.17V18.3Z"
                                        fill="currentColor"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="w-full lg:w-2/3 px-4">
                        <div class="flex flex-wrap justify-between -mx-4 -mb-8">
                            <div class="w-full sm:w-1/2 lg:w-auto px-4 mb-8">
                                <h3 class="text-base font-black text-white mb-6">Information</h3>
                                <ul>
                                    <li class="mb-4"><a class="text-sm font-bold text-white hover:text-green-500"
                                                        href="#">About</a></li>
                                    <li class="mb-4"><a class="text-sm font-bold text-white hover:text-green-500"
                                                        href="#">Customer Service</a></li>
                                    <li class="mb-4"><a class="text-sm font-bold text-white hover:text-green-500"
                                                        href="#">Reward Program</a></li>
                                    <li class="mb-4"><a class="text-sm font-bold text-white hover:text-green-500"
                                                        href="#">Shipping &amp; Returns</a></li>
                                    <li class="mb-4"><a class="text-sm font-bold text-white hover:text-green-500"
                                                        href="#">Privacy Policy</a></li>
                                    <li><a class="text-sm font-bold text-white hover:text-green-500" href="#">Terms
                                            &amp; Conditions</a></li>
                                </ul>
                            </div>
                            <div class="w-full sm:w-1/2 lg:w-auto px-4 mb-8">
                                <h3 class="text-base font-black text-white mb-6">Our shop</h3>
                                <ul>
                                    <li class="mb-4"><a class="text-sm font-bold text-white hover:text-green-500"
                                                        href="#">Products</a></li>
                                    <li class="mb-4"><a class="text-sm font-bold text-white hover:text-green-500"
                                                        href="#">New In</a></li>
                                    <li class="mb-4"><a class="text-sm font-bold text-white hover:text-green-500"
                                                        href="#">Accessories</a></li>
                                    <li><a class="text-sm font-bold text-white hover:text-green-500" href="#">Top
                                            Brands</a></li>
                                </ul>
                            </div>
                            <div class="w-full sm:w-1/2 lg:w-3/5 lg:ml-auto px-4 mb-8">
                                <h3 class="text-base font-black text-white mb-6">Newsletter</h3>
                                <span class="block text-sm font-bold text-white mb-5">Lorem ipsum dolor sit amet, consectetur.</span>
                                <div class="xl:flex items-center max-w-xs lg:max-w-sm">
                                    <input
                                        class="h-12 w-full mb-4 xl:mb-0 xl:mr-3 pl-5 py-3 placeholder-white font-bold text-white border-2 border-white bg-gray-900 rounded-md focus:outline-green"
                                        type="email" placeholder="Type your e-mail">
                                    <button
                                        class="group flex-shrink-0 relative inline-block h-12 w-full xl:w-32 bg-blueGray-900 rounded-md"
                                        type="submit">
                                        <div
                                            class="absolute top-0 left-0 transform -translate-y-1 -translate-x-1 w-full h-full group-hover:translate-y-0 group-hover:translate-x-0 transition duration-300">
                                            <div
                                                class="flex h-full w-full items-center justify-center bg-green-600 border-2 border-black rounded-md">
                                                <span class="text-base font-black text-black">Subscribe</span>
                                            </div>
                                        </div>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="pt-6 border-t-2 border-white">
            <div class="container px-4 mx-auto">
                <div class="max-w-6xl mx-auto">
                    <div class="sm:flex items-center justify-between -mb-5">
                        <div class="mb-5">
                            <p class="text-sm font-bold text-white">© Copyright 2022. All rights reserved by Shopal
                                UX.</p>
                        </div>
                        <div class="mb-5">
                            <a class="inline-block mr-5" href="#">
                                <img src="{{asset('shopal-assets/logos/visa-logo.svg')}}" alt="">
                            </a>
                            <a class="inline-block mr-5" href="#">
                                <img src="{{asset('shopal-assets/logos/mastercard-logo.svg')}}" alt="">
                            </a>
                            <a class="inline-block" href="#">
                                <img src="{{asset('shopal-assets/logos/paypal-logo.svg')}}" alt="">
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
</body>
</html>

