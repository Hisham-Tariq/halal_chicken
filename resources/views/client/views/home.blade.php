<!DOCTYPE html>
<html lang="en">

<head>
    @include('includes.head')
    <link rel="stylesheet" href="{{asset('css/owl_carousel/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl_carousel/owl.theme.default.css')}}">
</head>

<body>
    <div>
        <nav>
          <div class="flex h-12 py-2 px-6 items-center justify-between bg-black">
            <div class="w-auto">
              <a class="inline-flex items-center text-green-500 hover:text-white" href="#">
                <svg width="16" height="16" viewbox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M7.36665 9.96668L6.13331 11.2C5.87331 11.46 5.45998 11.46 5.19331 11.2067C5.11998 11.1333 5.04665 11.0667 4.97331 10.9933C4.28665 10.3 3.66665 9.57334 3.11331 8.81334C2.56665 8.05334 2.12665 7.29334 1.80665 6.54001C1.49331 5.78001 1.33331 5.05334 1.33331 4.36001C1.33331 3.90668 1.41331 3.47334 1.57331 3.07334C1.73331 2.66668 1.98665 2.29334 2.33998 1.96001C2.76665 1.54001 3.23331 1.33334 3.72665 1.33334C3.91331 1.33334 4.09998 1.37334 4.26665 1.45334C4.43998 1.53334 4.59331 1.65334 4.71331 1.82668L6.25998 4.00668C6.37998 4.17334 6.46665 4.32668 6.52665 4.47334C6.58665 4.61334 6.61998 4.75334 6.61998 4.88001C6.61998 5.04001 6.57331 5.20001 6.47998 5.35334C6.39331 5.50668 6.26665 5.66668 6.10665 5.82668L5.59998 6.35334C5.52665 6.42668 5.49331 6.51334 5.49331 6.62001C5.49331 6.67334 5.49998 6.72001 5.51331 6.77334C5.53331 6.82668 5.55331 6.86668 5.56665 6.90668C5.68665 7.12668 5.89331 7.41334 6.18665 7.76001C6.48665 8.10668 6.80665 8.46001 7.15331 8.81334C7.21998 8.88001 7.29331 8.94668 7.35998 9.01334C7.62665 9.27334 7.63331 9.70001 7.36665 9.96668Z" fill="currentColor"></path>
                  <path d="M14.6467 12.22C14.6467 12.4067 14.6134 12.6 14.5467 12.7867C14.5267 12.84 14.5067 12.8933 14.48 12.9467C14.3667 13.1867 14.22 13.4133 14.0267 13.6267C13.7 13.9867 13.34 14.2467 12.9334 14.4133C12.9267 14.4133 12.92 14.42 12.9134 14.42C12.52 14.58 12.0934 14.6667 11.6334 14.6667C10.9534 14.6667 10.2267 14.5067 9.46002 14.18C8.69336 13.8533 7.92669 13.4133 7.16669 12.86C6.90669 12.6667 6.64669 12.4733 6.40002 12.2667L8.58002 10.0867C8.76669 10.2267 8.93336 10.3333 9.07336 10.4067C9.10669 10.42 9.14669 10.44 9.19336 10.46C9.24669 10.48 9.30002 10.4867 9.36002 10.4867C9.47336 10.4867 9.56002 10.4467 9.63336 10.3733L10.14 9.87332C10.3067 9.70665 10.4667 9.57999 10.62 9.49999C10.7734 9.40665 10.9267 9.35999 11.0934 9.35999C11.22 9.35999 11.3534 9.38665 11.5 9.44665C11.6467 9.50665 11.8 9.59332 11.9667 9.70665L14.1734 11.2733C14.3467 11.3933 14.4667 11.5333 14.54 11.7C14.6067 11.8667 14.6467 12.0333 14.6467 12.22Z" fill="currentColor"></path>
                </svg>
                <span class="hidden lg:block ml-2 text-sm font-bold">Customer support: +1-202-555-0147</span>
              </a>
            </div>
            <div class="hidden md:block w-auto">
              <ul class="flex items-center">
                <li class="mr-8"><a class="inline-block text-gray-400 hover:text-white font-bold" href="#">Shop now</a></li>
                <li class="mr-8"><a class="inline-block text-gray-400 hover:text-white font-bold" href="#">Order tracking</a></li>
                <li class="mr-8"><a class="inline-block text-gray-400 hover:text-white font-bold" href="#">My account</a></li>
                <li><a class="inline-block text-gray-400 hover:text-white font-bold" href="#">Contact</a></li>
              </ul>
            </div>
          </div>
        </nav>
      </div>


      <!---banner---->
     
<section>
    <nav class="relative z-50">
      <div class="flex h-20 py-3 px-6 items-center bg-black">
        <a class="inline-block text-2xl font-bold mr-8" href="#">
          <img src="shopal-assets/logos/shopal-logo-white.svg" alt="">
        </a>
        <div class="hidden md:inline-flex h-10 px-4 py-2 items-center border-2 border-white rounded-md">
          <input class="text-white text-sm font-bold placeholder-white outline-none bg-transparent" type="search" placeholder="Search now...">
          <button class="inline-block" type="submit">
            <svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M11 20C15.9706 20 20 15.9706 20 11C20 6.02944 15.9706 2 11 2C6.02944 2 2 6.02944 2 11C2 15.9706 6.02944 20 11 20Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
              <path d="M18.9299 20.6898C19.4599 22.2898 20.6699 22.4498 21.5999 21.0498C22.4499 19.7698 21.8899 18.7198 20.3499 18.7198C19.2099 18.7098 18.5699 19.5998 18.9299 20.6898Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>
          </button>
        </div>
        <div class="hidden md:block w-auto ml-auto">
          <a class="group inline-flex mr-8 items-center" href="#">
            <svg width="20" height="20" viewbox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M16.0332 4.65H15.6998L12.8832 1.83333C12.6582 1.60833 12.2915 1.60833 12.0582 1.83333C11.8332 2.05833 11.8332 2.425 12.0582 2.65833L14.0498 4.65H5.94984L7.9415 2.65833C8.1665 2.43333 8.1665 2.06666 7.9415 1.83333C7.7165 1.60833 7.34984 1.60833 7.1165 1.83333L4.30817 4.65H3.97484C3.22484 4.65 1.6665 4.65 1.6665 6.78333C1.6665 7.59166 1.83317 8.125 2.18317 8.475C2.38317 8.68333 2.62484 8.79166 2.88317 8.85C3.12484 8.90833 3.38317 8.91666 3.63317 8.91666H16.3665C16.6248 8.91666 16.8665 8.9 17.0998 8.85C17.7998 8.68333 18.3332 8.18333 18.3332 6.78333C18.3332 4.65 16.7748 4.65 16.0332 4.65Z" fill="#AFFF0F"></path>
              <path d="M15.875 10H4.05838C3.54171 10 3.15005 10.4583 3.23338 10.9667L3.93338 15.25C4.16671 16.6833 4.79171 18.3333 7.56671 18.3333H12.2417C15.05 18.3333 15.55 16.925 15.85 15.35L16.6917 10.9917C16.7917 10.475 16.4 10 15.875 10ZM8.84171 15.375C8.84171 15.7 8.58338 15.9583 8.26671 15.9583C7.94171 15.9583 7.68338 15.7 7.68338 15.375V12.625C7.68338 12.3083 7.94171 12.0417 8.26671 12.0417C8.58338 12.0417 8.84171 12.3083 8.84171 12.625V15.375ZM12.4084 15.375C12.4084 15.7 12.15 15.9583 11.825 15.9583C11.5084 15.9583 11.2417 15.7 11.2417 15.375V12.625C11.2417 12.3083 11.5084 12.0417 11.825 12.0417C12.15 12.0417 12.4084 12.3083 12.4084 12.625V15.375Z" fill="#AFFF0F"></path>
            </svg>
            <span class="ml-2 text-white group-hover:text-green-500 font-bold">My cart</span>
          </a>
          <a class="group inline-flex mr-8 items-center" href="#">
            <svg width="20" height="20" viewbox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M10.0002 9.99999C12.3013 9.99999 14.1668 8.13451 14.1668 5.83332C14.1668 3.53214 12.3013 1.66666 10.0002 1.66666C7.69898 1.66666 5.8335 3.53214 5.8335 5.83332C5.8335 8.13451 7.69898 9.99999 10.0002 9.99999Z" fill="#AFFF0F"></path>
              <path d="M9.9998 12.0833C5.8248 12.0833 2.4248 14.8833 2.4248 18.3333C2.4248 18.5667 2.60814 18.75 2.84147 18.75H17.1581C17.3915 18.75 17.5748 18.5667 17.5748 18.3333C17.5748 14.8833 14.1748 12.0833 9.9998 12.0833Z" fill="#AFFF0F"></path>
            </svg>
            <span class="ml-2 text-white group-hover:text-green-500 font-bold">Login</span>
          </a>
        </div>
      </div>
      <div class="flex h-12 py-6 px-6 items-center justify-between bg-green-500 relative">
        <ul class="hidden md:flex items-center absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
          <li class="mr-6">
            <button class="relative group inline-flex items-center text-left text-base font-bold text-black hover:text-indigo-500">
              <span class="mr-2">Home</span>
              <svg width="8" height="6" viewbox="0 0 8 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M3.99999 5.08071C3.91243 5.08081 3.82572 5.06361 3.74483 5.03009C3.66394 4.99657 3.59048 4.94739 3.52866 4.88538L0.700184 2.05728C0.575173 1.93227 0.504943 1.76272 0.504944 1.58593C0.504944 1.40913 0.575175 1.23958 0.700187 1.11457C0.825199 0.989561 0.99475 0.919331 1.17154 0.919331C1.34834 0.919332 1.51789 0.989563 1.6429 1.11457L3.99999 3.47132L6.35708 1.11455C6.48209 0.989543 6.65165 0.919312 6.82844 0.919312C7.00523 0.919311 7.17478 0.989541 7.29979 1.11455C7.42481 1.23956 7.49504 1.40911 7.49504 1.58591C7.49504 1.7627 7.42481 1.93225 7.2998 2.05726L4.47132 4.8854C4.4095 4.9474 4.33604 4.99658 4.25515 5.0301C4.17426 5.06361 4.08755 5.08082 3.99999 5.08071V5.08071Z" fill="currentColor"></path>
              </svg>
              <div class="hidden group-hover:block absolute z-50 bottom-0 left-0 transform translate-y-full w-56 pt-6">
                <div class="p-2 bg-white border-2 border-black rounded-md shadow"><a class="block p-2 text-sm font-bold text-black hover:text-indigo-500" href="#">Category 1</a><a class="block p-2 text-sm font-bold text-black hover:text-indigo-500" href="#">Category 1</a><a class="block p-2 text-sm font-bold text-black hover:text-indigo-500" href="#">Category 1</a></div>
              </div>
            </button>
          </li>
          <li class="mr-6">
            <button class="relative group inline-flex items-center text-left text-base font-bold text-black hover:text-indigo-500">
              <span class="mr-2">Menu</span>
              <svg width="8" height="6" viewbox="0 0 8 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M3.99999 5.08071C3.91243 5.08081 3.82572 5.06361 3.74483 5.03009C3.66394 4.99657 3.59048 4.94739 3.52866 4.88538L0.700184 2.05728C0.575173 1.93227 0.504943 1.76272 0.504944 1.58593C0.504944 1.40913 0.575175 1.23958 0.700187 1.11457C0.825199 0.989561 0.99475 0.919331 1.17154 0.919331C1.34834 0.919332 1.51789 0.989563 1.6429 1.11457L3.99999 3.47132L6.35708 1.11455C6.48209 0.989543 6.65165 0.919312 6.82844 0.919312C7.00523 0.919311 7.17478 0.989541 7.29979 1.11455C7.42481 1.23956 7.49504 1.40911 7.49504 1.58591C7.49504 1.7627 7.42481 1.93225 7.2998 2.05726L4.47132 4.8854C4.4095 4.9474 4.33604 4.99658 4.25515 5.0301C4.17426 5.06361 4.08755 5.08082 3.99999 5.08071V5.08071Z" fill="currentColor"></path>
              </svg>
              <div class="hidden group-hover:block absolute z-50 bottom-0 left-0 transform translate-y-full w-56 pt-6">
                <div class="p-2 bg-white border-2 border-black rounded-md shadow"><a class="block p-2 text-sm font-bold text-black hover:text-indigo-500" href="#">Category 1</a><a class="block p-2 text-sm font-bold text-black hover:text-indigo-500" href="#">Category 1</a><a class="block p-2 text-sm font-bold text-black hover:text-indigo-500" href="#">Category 1</a></div>
              </div>
            </button>
          </li>
          <li class="mr-6"><a class="inline-block font-bold text-black hover:text-indigo-500" href="#">About us</a></li>
          <li class="mr-6"><a class="inline-block font-bold text-black hover:text-indigo-500" href="#">Our Chef</a></li>
          <li><a class="inline-block font-bold text-black hover:text-indigo-500" href="#">Contact us</a></li>
        </ul>

      </div>
    </nav>
    <div class="relative py-24">
      <img class="absolute top-0 left-0 w-full h-full img-fluid object-cover" src="shopal-assets/background/background-office.png" alt="">
      <div class="container px-4 mx-auto relative">
        <div class="max-w-sm md:max-w-xl mx-auto mb-24 text-center">
          <h1 class="font-heading text-3xl sm:text-4xl xl:text-5xl text-white font-black mb-5">Take care of your performance every day.</h1>
          <div class="xs:flex mb-24 items-center justify-center">
            <a class="group relative inline-block h-12 w-full xs:w-48 mb-2 xs:mb-0 xs:mr-6 bg-blueGray-900 rounded-md" href="#">
              <div class="absolute top-0 left-0 transform -translate-y-1 -translate-x-1 w-full h-full group-hover:translate-y-0 group-hover:translate-x-0 transition duration-300">
                <div class="flex h-full w-full items-center justify-center bg-green-600 border-2 border-black rounded-md">
                  <span class="text-base font-black text-black">Check our Catalog</span>
                </div>
              </div>
            </a>
            <a class="group relative inline-block h-12 w-full xs:w-36 bg-blueGray-900 rounded-md" href="#">
              <div class="absolute top-0 left-0 transform -translate-y-1 -translate-x-1 w-full h-full group-hover:translate-y-0 group-hover:translate-x-0 transition duration-300">
                <div class="flex h-full w-full items-center justify-center bg-orange-500 border-2 border-black rounded-md">
                  <span class="text-base font-black text-white">Start Buying</span>
                </div>
              </div>
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
              <button class="relative group inline-flex flex-wrap items-center text-left text-base font-bold text-black">
                <span class="mr-2">Contact us</span>
                <svg width="8" height="6" viewbox="0 0 8 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M3.99999 5.08071C3.91243 5.08081 3.82572 5.06361 3.74483 5.03009C3.66394 4.99657 3.59048 4.94739 3.52866 4.88538L0.700184 2.05728C0.575173 1.93227 0.504943 1.76272 0.504944 1.58593C0.504944 1.40913 0.575175 1.23958 0.700187 1.11457C0.825199 0.989561 0.99475 0.919331 1.17154 0.919331C1.34834 0.919332 1.51789 0.989563 1.6429 1.11457L3.99999 3.47132L6.35708 1.11455C6.48209 0.989543 6.65165 0.919312 6.82844 0.919312C7.00523 0.919311 7.17478 0.989541 7.29979 1.11455C7.42481 1.23956 7.49504 1.40911 7.49504 1.58591C7.49504 1.7627 7.42481 1.93225 7.2998 2.05726L4.47132 4.8854C4.4095 4.9474 4.33604 4.99658 4.25515 5.0301C4.17426 5.06361 4.08755 5.08082 3.99999 5.08071V5.08071Z" fill="currentColor"></path>
                </svg>
                <div class="hidden group-hover:block w-full pt-2 px-2"><a class="block p-2 text-sm font-bold text-black hover:text-indigo-500" href="#">Category 1</a><a class="block p-2 text-sm font-bold text-black hover:text-indigo-500" href="#">Category 1</a><a class="block p-2 text-sm font-bold text-black hover:text-indigo-500" href="#">Category 1</a></div>
              </button>
            </li>
            <li class="mb-6">
              <button class="relative group inline-flex flex-wrap items-center text-left text-base font-bold text-black">
                <span class="mr-2">Pages</span>
                <svg width="8" height="6" viewbox="0 0 8 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M3.99999 5.08071C3.91243 5.08081 3.82572 5.06361 3.74483 5.03009C3.66394 4.99657 3.59048 4.94739 3.52866 4.88538L0.700184 2.05728C0.575173 1.93227 0.504943 1.76272 0.504944 1.58593C0.504944 1.40913 0.575175 1.23958 0.700187 1.11457C0.825199 0.989561 0.99475 0.919331 1.17154 0.919331C1.34834 0.919332 1.51789 0.989563 1.6429 1.11457L3.99999 3.47132L6.35708 1.11455C6.48209 0.989543 6.65165 0.919312 6.82844 0.919312C7.00523 0.919311 7.17478 0.989541 7.29979 1.11455C7.42481 1.23956 7.49504 1.40911 7.49504 1.58591C7.49504 1.7627 7.42481 1.93225 7.2998 2.05726L4.47132 4.8854C4.4095 4.9474 4.33604 4.99658 4.25515 5.0301C4.17426 5.06361 4.08755 5.08082 3.99999 5.08071V5.08071Z" fill="currentColor"></path>
                </svg>
                <div class="hidden group-hover:block w-full pt-2 px-2"><a class="block p-2 text-sm font-bold text-black hover:text-indigo-500" href="#">Category 1</a><a class="block p-2 text-sm font-bold text-black hover:text-indigo-500" href="#">Category 1</a><a class="block p-2 text-sm font-bold text-black hover:text-indigo-500" href="#">Category 1</a></div>
              </button>
            </li>
            <li class="mb-6">
              <button class="relative group inline-flex flex-wrap items-center text-left text-base font-bold text-black">
                <span class="mr-2">Products</span>
                <svg width="8" height="6" viewbox="0 0 8 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M3.99999 5.08071C3.91243 5.08081 3.82572 5.06361 3.74483 5.03009C3.66394 4.99657 3.59048 4.94739 3.52866 4.88538L0.700184 2.05728C0.575173 1.93227 0.504943 1.76272 0.504944 1.58593C0.504944 1.40913 0.575175 1.23958 0.700187 1.11457C0.825199 0.989561 0.99475 0.919331 1.17154 0.919331C1.34834 0.919332 1.51789 0.989563 1.6429 1.11457L3.99999 3.47132L6.35708 1.11455C6.48209 0.989543 6.65165 0.919312 6.82844 0.919312C7.00523 0.919311 7.17478 0.989541 7.29979 1.11455C7.42481 1.23956 7.49504 1.40911 7.49504 1.58591C7.49504 1.7627 7.42481 1.93225 7.2998 2.05726L4.47132 4.8854C4.4095 4.9474 4.33604 4.99658 4.25515 5.0301C4.17426 5.06361 4.08755 5.08082 3.99999 5.08071V5.08071Z" fill="currentColor"></path>
                </svg>
                <div class="hidden group-hover:block w-full pt-2 px-2"><a class="block p-2 text-sm font-bold text-black hover:text-indigo-500" href="#">Category 1</a><a class="block p-2 text-sm font-bold text-black hover:text-indigo-500" href="#">Category 1</a><a class="block p-2 text-sm font-bold text-black hover:text-indigo-500" href="#">Category 1</a></div>
              </button>
            </li>
            <li class="mb-6"><a class="inline-block pl-1 font-bold" href="#">Blog</a></li>
            <li class="mb-6"><a class="inline-block pl-1 font-bold" href="#">Shop</a></li>
            <li><a class="inline-block pl-1 font-bold" href="#">Contact</a></li>
          </ul>
          <div class="w-full">
            <button class="block w-full py-4 px-4 mb-4 font-bold border-2 border-gray-900 rounded-md shadow">Log in</button>
            <button class="block w-full py-4 px-4 mb-8 font-bold border-2 border-gray-900 rounded-md shadow text-gray-900 bg-green-500">Sign up</button>
            <p class="pl-2 text-sm">2022 &copy; Shuffle</p>
          </div>
        </div>
      </nav>
    </div>
  </section>
               
  
  <section class="py-24 bg-gray-900">
    <div class="container px-4 mx-auto">
      <div class="text-center mb-16">
        <h1 class="font-heading text-4xl font-black text-white">New arrivals</h1>
      </div>
      <div class="max-w-sm md:max-w-2xl xl:max-w-6xl mx-auto">
        <div class="flex flex-wrap -mx-4 -mb-8">
          <div class="w-full md:w-1/2 xl:w-1/4 px-4 mb-8">
            <a class="group block relative" href="#">
              <div class="relative h-72 mb-3">
                <div class="absolute top-0 left-0 w-full h-full bg-blueGray-900 rounded-md"></div>
                <img class="img-fluid transform -translate-x-1 -translate-y-1 h-full w-full mb-3 border-2 border-black rounded-md" src="shopal-assets/products/product1.png" alt="">
              </div>
              <div class="text-center">
                <h3 class="font-bold text-white group-hover:text-indigo-500 mb-1 transition duration-300">Product title</h3>
                <span class="text-sm text-green-500 font-bold">$ 199.00</span>
              </div>
            </a>
          </div>
          <div class="w-full md:w-1/2 xl:w-1/4 px-4 mb-8">
            <a class="group block relative" href="#">
              <div class="relative h-72 mb-3">
                <div class="absolute top-0 left-0 w-full h-full bg-blueGray-900 rounded-md"></div>
                <img class="img-fluid transform -translate-x-1 -translate-y-1 h-full w-full mb-3 border-2 border-black rounded-md" src="shopal-assets/products/product2.png" alt="">
              </div>
              <div class="text-center">
                <h3 class="font-bold text-white group-hover:text-indigo-500 mb-1 transition duration-300">Product title</h3>
                <span class="text-sm text-green-500 font-bold">$ 199.00</span>
              </div>
            </a>
          </div>
          <div class="w-full md:w-1/2 xl:w-1/4 px-4 mb-8">
            <a class="group block relative" href="#">
              <div class="relative h-72 mb-3">
                <div class="absolute top-0 left-0 w-full h-full bg-blueGray-900 rounded-md"></div>
                <img class="img-fluid transform -translate-x-1 -translate-y-1 h-full w-full mb-3 border-2 border-black rounded-md" src="shopal-assets/products/product3.png" alt="">
              </div>
              <div class="text-center">
                <h3 class="font-bold text-white group-hover:text-indigo-500 mb-1 transition duration-300">Product title</h3>
                <span class="text-sm text-green-500 font-bold">$ 199.00</span>
              </div>
            </a>
          </div>
          <div class="w-full md:w-1/2 xl:w-1/4 px-4 mb-8">
            <a class="group block relative" href="#">
              <div class="relative h-72 mb-3">
                <div class="absolute top-0 left-0 w-full h-full bg-blueGray-900 rounded-md"></div>
                <img class="img-fluid transform -translate-x-1 -translate-y-1 h-full w-full mb-3 border-2 border-black rounded-md" src="shopal-assets/products/product4.png" alt="">
              </div>
              <div class="text-center">
                <h3 class="font-bold text-white group-hover:text-indigo-500 mb-1 transition duration-300">Product title</h3>
                <span class="text-sm text-green-500 font-bold">$ 199.00</span>
              </div>
            </a>
          </div>
          <div class="w-full md:w-1/2 xl:w-1/4 px-4 mb-8">
            <a class="group block relative" href="#">
              <div class="relative h-72 mb-3">
                <div class="absolute top-0 left-0 w-full h-full bg-blueGray-900 rounded-md"></div>
                <img class="img-fluid transform -translate-x-1 -translate-y-1 h-full w-full mb-3 border-2 border-black rounded-md" src="shopal-assets/products/product5.png" alt="">
              </div>
              <div class="text-center">
                <h3 class="font-bold text-white group-hover:text-indigo-500 mb-1 transition duration-300">Product title</h3>
                <span class="text-sm text-green-500 font-bold">$ 199.00</span>
              </div>
            </a>
          </div>
          <div class="w-full md:w-1/2 xl:w-1/4 px-4 mb-8">
            <a class="group block relative" href="#">
              <div class="relative h-72 mb-3">
                <div class="absolute top-0 left-0 w-full h-full bg-blueGray-900 rounded-md"></div>
                <img class="img-fluid transform -translate-x-1 -translate-y-1 h-full w-full mb-3 border-2 border-black rounded-md" src="shopal-assets/products/product6.png" alt="">
              </div>
              <div class="text-center">
                <h3 class="font-bold text-white group-hover:text-indigo-500 mb-1 transition duration-300">Product title</h3>
                <span class="text-sm text-green-500 font-bold">$ 199.00</span>
              </div>
            </a>
          </div>
          <div class="w-full md:w-1/2 xl:w-1/4 px-4 mb-8">
            <a class="group block relative" href="#">
              <div class="relative h-72 mb-3">
                <div class="absolute top-0 left-0 w-full h-full bg-blueGray-900 rounded-md"></div>
                <img class="img-fluid transform -translate-x-1 -translate-y-1 h-full w-full mb-3 border-2 border-black rounded-md" src="shopal-assets/products/product7.png" alt="">
              </div>
              <div class="text-center">
                <h3 class="font-bold text-white group-hover:text-indigo-500 mb-1 transition duration-300">Product title</h3>
                <span class="text-sm text-green-500 font-bold">$ 199.00</span>
              </div>
            </a>
          </div>
          <div class="w-full md:w-1/2 xl:w-1/4 px-4 mb-8">
            <a class="group block relative" href="#">
              <div class="relative h-72 mb-3">
                <div class="absolute top-0 left-0 w-full h-full bg-blueGray-900 rounded-md"></div>
                <img class="img-fluid transform -translate-x-1 -translate-y-1 h-full w-full mb-3 border-2 border-black rounded-md" src="shopal-assets/products/product8.png" alt="">
              </div>
              <div class="text-center">
                <h3 class="font-bold text-white group-hover:text-indigo-500 mb-1 transition duration-300">Product title</h3>
                <span class="text-sm text-green-500 font-bold">$ 199.00</span>
              </div>
            </a>
          </div>
        </div>
      </div>
      <div class="mt-14 text-center">
        <a class="group relative inline-block h-12 max-w-sm w-full md:w-34 bg-blueGray-900 rounded-md" href="#">
          <div class="absolute top-0 left-0 transform -translate-y-1 -translate-x-1 w-full h-full group-hover:translate-y-0 group-hover:translate-x-0 transition duration-300">
            <div class="flex h-full w-full items-center justify-center bg-indigo-500 border-2 border-black rounded-md">
              <span class="text-base font-black text-white">Show more</span>
            </div>
          </div>
        </a>
      </div>
    </div>
  </section>
            
  <section class="py-16 bg-white">
    <div class="container px-4 mx-auto mb-10">
      <div class="max-w-xl xl:max-w-6xl mx-auto">
        <div class="flex flex-wrap -mx-4 mb-12">
          <div class="w-full xl:w-1/2 px-4 mb-16 xl:mb-0">
            <div class="sm:pl-20 xl:pl-0 max-w-xl">
              <h2 class="font-heading text-4xl font-black mb-8">Lorem ipsum dolor sit amet consectetur</h2>
              <p class="max-w-md text-lg font-bold">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque massa nibh, pulvinar vitae aliquet nec, accumsan aliquet orci.</p>
            </div>
          </div>
          <div class="w-full xl:w-1/2 px-4">
            <div class="pl-20 max-w-lg xl:max-w-none relative">
              <img class="absolute top-0 left-0 transform img-fluid w-12 md:w-auto" src="shopal-assets/background/circle-orange-green-part.svg" alt="">
              <img class="img-fluid w-full h-67 border-2 border-black rounded-md shadow" src="shopal-assets/images/benefit-table-work.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="pt-10 border-t-2 border-black">
      <div class="container px-4 mx-auto">
        <div class="max-w-xs md:max-w-xl xl:max-w-7xl mx-auto">
          <div class="flex flex-wrap items-center -mx-2 -mb-12">
            <div class="w-full md:w-1/2 xl:w-1/4 px-2 mb-12">
              <div class="flex items-center">
                <span class="inline-flex w-12 h-12 items-center justify-center rounded-full border-2 border-black shadow">
                  <svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M21.5 15.5C21.78 15.5 22 15.72 22 16V17C22 18.66 20.66 20 19 20C19 18.35 17.65 17 16 17C14.35 17 13 18.35 13 20H11C11 18.35 9.65 17 8 17C6.35 17 5 18.35 5 20C3.34 20 2 18.66 2 17V15C2 14.45 2.45 14 3 14H12.5C13.88 14 15 12.88 15 11.5V6C15 5.45 15.45 5 16 5H16.84C17.56 5 18.22 5.39 18.58 6.01L19.22 7.13C19.31 7.29 19.19 7.5 19 7.5C17.62 7.5 16.5 8.62 16.5 10V13C16.5 14.38 17.62 15.5 19 15.5H21.5Z" fill="#474BC5"></path>
                    <path d="M8 22C9.10457 22 10 21.1046 10 20C10 18.8954 9.10457 18 8 18C6.89543 18 6 18.8954 6 20C6 21.1046 6.89543 22 8 22Z" fill="#474BC5"></path>
                    <path d="M16 22C17.1046 22 18 21.1046 18 20C18 18.8954 17.1046 18 16 18C14.8954 18 14 18.8954 14 20C14 21.1046 14.8954 22 16 22Z" fill="#474BC5"></path>
                    <path d="M22 12.53V14H19C18.45 14 18 13.55 18 13V10C18 9.45 18.45 9 19 9H20.29L21.74 11.54C21.91 11.84 22 12.18 22 12.53Z" fill="#474BC5"></path>
                    <path d="M13.08 2H5.69C3.65 2 2 3.65 2 5.69V12.07C2 12.62 2.45 13.07 3 13.07H12.15C13.17 13.07 14 12.24 14 11.22V2.92C14 2.41 13.59 2 13.08 2ZM10.07 7.07L7.98 9.09C7.83 9.23 7.64 9.3 7.46 9.3C7.27 9.3 7.08 9.23 6.94 9.09L5.93 8.13C5.63 7.84 5.62 7.36 5.91 7.06C6.19 6.76 6.67 6.76 6.97 7.04L7.46 7.51L9.03 5.99C9.33 5.7 9.8 5.71 10.09 6.01C10.38 6.31 10.37 6.78 10.07 7.07Z" fill="#474BC5"></path>
                  </svg>
                </span>
                <div class="ml-4">
                  <h4 class="text-xl font-black mb-1">Free Shipping</h4>
                  <span class="text-lg font-bold">From $45</span>
                </div>
              </div>
            </div>
            <div class="w-full md:w-1/2 xl:w-1/4 px-2 mb-12">
              <div class="flex items-center">
                <span class="inline-flex w-12 h-12 items-center justify-center rounded-full border-2 border-black shadow">
                  <svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M18.75 8V10.1C18.31 10.04 17.81 10.01 17.25 10V8C17.25 4.85 16.36 2.75 12 2.75C7.64 2.75 6.75 4.85 6.75 8V10C6.19 10.01 5.69 10.04 5.25 10.1V8C5.25 5.1 5.95 1.25 12 1.25C18.05 1.25 18.75 5.1 18.75 8Z" fill="#EB742E"></path>
                    <path d="M18.75 10.1C18.31 10.04 17.81 10.01 17.25 10H6.75C6.19 10.01 5.69 10.04 5.25 10.1C2.7 10.41 2 11.66 2 15V17C2 21 3 22 7 22H17C21 22 22 21 22 17V15C22 11.66 21.3 10.41 18.75 10.1ZM8.71 16.71C8.52 16.89 8.26 17 8 17C7.87 17 7.74 16.97 7.62 16.92C7.49 16.87 7.39 16.8 7.29 16.71C7.11 16.52 7 16.26 7 16C7 15.87 7.03 15.74 7.08 15.62C7.13 15.5 7.2 15.39 7.29 15.29C7.39 15.2 7.49 15.13 7.62 15.08C7.99 14.92 8.43 15.01 8.71 15.29C8.8 15.39 8.87 15.5 8.92 15.62C8.97 15.74 9 15.87 9 16C9 16.26 8.89 16.52 8.71 16.71ZM12.92 16.38C12.87 16.5 12.8 16.61 12.71 16.71C12.52 16.89 12.26 17 12 17C11.73 17 11.48 16.89 11.29 16.71C11.2 16.61 11.13 16.5 11.08 16.38C11.03 16.26 11 16.13 11 16C11 15.73 11.11 15.48 11.29 15.29C11.66 14.92 12.33 14.92 12.71 15.29C12.89 15.48 13 15.73 13 16C13 16.13 12.97 16.26 12.92 16.38ZM16.71 16.71C16.52 16.89 16.26 17 16 17C15.74 17 15.48 16.89 15.29 16.71C15.11 16.52 15 16.27 15 16C15 15.73 15.11 15.48 15.29 15.29C15.67 14.92 16.34 14.92 16.71 15.29C16.75 15.34 16.79 15.39 16.83 15.45C16.87 15.5 16.9 15.56 16.92 15.62C16.95 15.68 16.97 15.74 16.98 15.8C16.99 15.87 17 15.94 17 16C17 16.26 16.89 16.52 16.71 16.71Z" fill="#EB742E"></path>
                  </svg>
                </span>
                <div class="ml-4">
                  <h4 class="text-xl font-black mb-1">Secure Shopping</h4>
                  <span class="text-lg font-bold">100% Guarantee</span>
                </div>
              </div>
            </div>
            <div class="w-full md:w-1/2 xl:w-1/4 px-2 mb-12">
              <div class="flex items-center">
                <span class="inline-flex w-12 h-12 items-center justify-center rounded-full border-2 border-black shadow">
                  <svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M8.38989 18.49V8.32998C8.38989 7.92998 8.50989 7.53998 8.72989 7.20998L11.4599 3.14998C11.8899 2.49998 12.9599 2.03998 13.8699 2.37998C14.8499 2.70998 15.4999 3.80997 15.2899 4.78997L14.7699 8.05998C14.7299 8.35998 14.8099 8.62998 14.9799 8.83998C15.1499 9.02998 15.3999 9.14997 15.6699 9.14997H19.7799C20.5699 9.14997 21.2499 9.46997 21.6499 10.03C22.0299 10.57 22.0999 11.27 21.8499 11.98L19.3899 19.47C19.0799 20.71 17.7299 21.72 16.3899 21.72H12.4899C11.8199 21.72 10.8799 21.49 10.4499 21.06L9.16989 20.07C8.67989 19.7 8.38989 19.11 8.38989 18.49Z" fill="#C6FF53"></path>
                    <path d="M5.21 6.37988H4.18C2.63 6.37988 2 6.97988 2 8.45988V18.5199C2 19.9999 2.63 20.5999 4.18 20.5999H5.21C6.76 20.5999 7.39 19.9999 7.39 18.5199V8.45988C7.39 6.97988 6.76 6.37988 5.21 6.37988Z" fill="#C6FF53"></path>
                  </svg>
                </span>
                <div class="ml-4">
                  <h4 class="text-xl font-black mb-1">Customer Satisfaction</h4>
                  <span class="text-lg font-bold">100% Positive Feedbacks</span>
                </div>
              </div>
            </div>
            <div class="w-full md:w-1/2 xl:w-1/4 px-2 mb-12">
              <div class="flex items-center">
                <span class="inline-flex w-12 h-12 items-center justify-center rounded-full border-2 border-black shadow">
                  <svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M20 6.75C21.5188 6.75 22.75 5.51878 22.75 4C22.75 2.48122 21.5188 1.25 20 1.25C18.4812 1.25 17.25 2.48122 17.25 4C17.25 5.51878 18.4812 6.75 20 6.75Z" fill="#FD4B38"></path>
                    <path d="M19.04 8.15C17.47 7.81 16.19 6.53 15.85 4.96C15.72 4.35 15.71 3.76 15.82 3.2C15.95 2.58 15.49 2 14.85 2H7C4.24 2 2 4.24 2 7V13.95C2 16.71 4.24 18.95 7 18.95H8.5C8.78 18.95 9.14 19.13 9.3 19.35L10.8 21.34C11.46 22.22 12.54 22.22 13.2 21.34L14.7 19.35C14.89 19.1 15.18 18.95 15.5 18.95H17.01C19.77 18.95 22 16.72 22 13.96V9.15C22 8.52 21.42 8.06 20.8 8.18C20.24 8.28 19.65 8.28 19.04 8.15ZM8 12C7.44 12 7 11.55 7 11C7 10.45 7.44 10 8 10C8.55 10 9 10.45 9 11C9 11.55 8.56 12 8 12ZM12 12C11.44 12 11 11.55 11 11C11 10.45 11.44 10 12 10C12.55 10 13 10.45 13 11C13 11.55 12.56 12 12 12ZM16 12C15.44 12 15 11.55 15 11C15 10.45 15.44 10 16 10C16.55 10 17 10.45 17 11C17 11.55 16.56 12 16 12Z" fill="#FD4B38"></path>
                  </svg>
                </span>
                <div class="ml-4">
                  <h4 class="text-xl font-black mb-1">Support</h4>
                  <span class="text-lg font-bold">Online Support 24/7</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
      
  
  
  <section class="pt-16 pb-14">
    <div class="container px-4 mx-auto">
      <div class="max-w-8xl mx-auto">
        <h3 class="text-4xl font-white text-black text-center mb-8">Best Specialties</h3>
        <div class="flex flex-wrap items-center justify-between -mx-4">
          <div class="hidden lg:block w-auto px-4">
            <a class="group flex items-center justify-center transform -translate-y-1 -translate-x-1 transition duration-500 h-16 w-16 rounded-full bg-gray-900" href="#">
              <div class="inline-flex z-10 items-center justify-center absolute top-0 left-0 h-16 w-16 transform -translate-y-1 -translate-x-1 group-hover:-translate-y-0 group-hover:-translate-x-0 bg-black rounded-full transition-all duration-300">
                <svg width="20" height="20" viewbox="0 0 20 20" fill="white" xmlns="http://www.w3.org/2000/svg">
                  <path d="M10 0C4.48 0 0 4.48 0 10C0 15.52 4.48 20 10 20C15.52 20 20 15.52 20 10C20 4.48 15.52 0 10 0ZM13.5 10.75H8.31L10.03 12.47C10.32 12.76 10.32 13.24 10.03 13.53C9.88 13.68 9.69 13.75 9.5 13.75C9.31 13.75 9.12 13.68 8.97 13.53L5.97 10.53C5.68 10.24 5.68 9.76 5.97 9.47L8.97 6.47C9.26 6.18 9.74 6.18 10.03 6.47C10.32 6.76 10.32 7.24 10.03 7.53L8.31 9.25H13.5C13.91 9.25 14.25 9.59 14.25 10C14.25 10.41 13.91 10.75 13.5 10.75Z" fill="white"></path>
                </svg>
              </div>
            </a>
          </div>
          <div class="w-full lg:w-2/3 px-4">
            <div class="max-w-5xl mx-auto text-center">
                <div class="sm:max-w-sm md:max-w-3xl xl:max-w-none mx-auto mb-10">
                    <div class="flex flex-wrap items-center -mx-4 -mb-8">
                      <div class="w-full md:w-1/2 xl:w-1/3 px-4 mb-8 ">
                        <div class="h-72 rounded-sm overflow-hidden bg-black shadow">
                          <img class="img-fluid mx-auto mt-6" style="width:120px; height:120px;" src="shopal-assets/images/product-insta-medium3.png" alt="">
                          <h3 class="text-2xl font-white text-white mb-2 mt-4">Halal Food</h3>
                          <p class="text-sm text-white m-2 mb-6">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                      </div>
                      <div class="w-full md:w-1/2 xl:w-1/3 px-4 mb-8 ">
                        <div class="h-72 rounded-sm overflow-hidden bg-black shadow">
                          <img class="img-fluid mx-auto mt-6" style="width:120px; height:120px;" src="shopal-assets/images/product-insta-medium3.png" alt="">
                          <h3 class="text-2xl font-white text-white mb-2 mt-4">Fresh Environment</h3>
                          <p class="text-sm text-white m-2 mb-6">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                      </div>
                      <div class="w-full md:w-1/2 xl:w-1/3 px-4 mb-8 ">
                        <div class="h-72 rounded-sm overflow-hidden bg-black shadow">
                          <img class="img-fluid mx-auto mt-6" style="width:120px; height:120px;" src="shopal-assets/images/product-insta-medium3.png" alt="">
                          <h3 class="text-2xl font-white text-white mb-2 mt-4">Skilled Chef</h3>
                          <p class="text-sm text-white m-2 mb-6">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                      </div>
                     
                    </div>
                  </div>
            </div>
          </div>
          <div class="lg:hidden w-full px-4 mt-16">
            <div class="flex items-center justify-center">
              <a class="group flex mr-6 items-center justify-center transform -translate-y-1 -translate-x-1 transition duration-500 h-16 w-16 rounded-full bg-gray-900" href="#">
                <div class="inline-flex z-10 items-center justify-center absolute top-0 left-0 h-16 w-16 transform -translate-y-1 -translate-x-1 group-hover:-translate-y-0 group-hover:-translate-x-0 bg-indigo-500 rounded-full transition-all duration-300">
                  <svg width="20" height="20" viewbox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10 0C4.48 0 0 4.48 0 10C0 15.52 4.48 20 10 20C15.52 20 20 15.52 20 10C20 4.48 15.52 0 10 0ZM13.5 10.75H8.31L10.03 12.47C10.32 12.76 10.32 13.24 10.03 13.53C9.88 13.68 9.69 13.75 9.5 13.75C9.31 13.75 9.12 13.68 8.97 13.53L5.97 10.53C5.68 10.24 5.68 9.76 5.97 9.47L8.97 6.47C9.26 6.18 9.74 6.18 10.03 6.47C10.32 6.76 10.32 7.24 10.03 7.53L8.31 9.25H13.5C13.91 9.25 14.25 9.59 14.25 10C14.25 10.41 13.91 10.75 13.5 10.75Z" fill="white"></path>
                  </svg>
                </div>
              </a>
              <a class="group flex items-center justify-center transform -translate-y-1 -translate-x-1 transition duration-500 h-16 w-16 rounded-full bg-gray-900" href="#">
                <div class="inline-flex z-10 items-center justify-center absolute top-0 left-0 h-16 w-16 transform -translate-y-1 -translate-x-1 group-hover:-translate-y-0 group-hover:-translate-x-0 bg-indigo-500 rounded-full transition-all duration-300">
                  <svg width="20" height="20" viewbox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10 20C15.52 20 20 15.52 20 10C20 4.48 15.52 3.91654e-07 10 8.74228e-07C4.48 1.3568e-06 -1.3568e-06 4.48 -8.74228e-07 10C-3.91654e-07 15.52 4.48 20 10 20ZM6.5 9.25L11.69 9.25L9.97 7.53C9.68 7.24 9.68 6.76 9.97 6.47C10.12 6.32 10.31 6.25 10.5 6.25C10.69 6.25 10.88 6.32 11.03 6.47L14.03 9.47C14.32 9.76 14.32 10.24 14.03 10.53L11.03 13.53C10.74 13.82 10.26 13.82 9.97 13.53C9.68 13.24 9.68 12.76 9.97 12.47L11.69 10.75L6.5 10.75C6.09 10.75 5.75 10.41 5.75 10C5.75 9.59 6.09 9.25 6.5 9.25Z" fill="white"></path>
                  </svg>
                </div>
              </a>
            </div>
          </div>
          <div class="hidden lg:block w-auto px-4">
            <a class="group flex items-center justify-center transform -translate-y-1 -translate-x-1 transition duration-500 h-16 w-16 rounded-full bg-gray-900" href="#">
              <div class="inline-flex z-10 items-center justify-center absolute top-0 left-0 h-16 w-16 transform -translate-y-1 -translate-x-1 group-hover:-translate-y-0 group-hover:-translate-x-0 bg-black rounded-full transition-all duration-300">
                <svg width="20" height="20" viewbox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M10 20C15.52 20 20 15.52 20 10C20 4.48 15.52 3.91654e-07 10 8.74228e-07C4.48 1.3568e-06 -1.3568e-06 4.48 -8.74228e-07 10C-3.91654e-07 15.52 4.48 20 10 20ZM6.5 9.25L11.69 9.25L9.97 7.53C9.68 7.24 9.68 6.76 9.97 6.47C10.12 6.32 10.31 6.25 10.5 6.25C10.69 6.25 10.88 6.32 11.03 6.47L14.03 9.47C14.32 9.76 14.32 10.24 14.03 10.53L11.03 13.53C10.74 13.82 10.26 13.82 9.97 13.53C9.68 13.24 9.68 12.76 9.97 12.47L11.69 10.75L6.5 10.75C6.09 10.75 5.75 10.41 5.75 10C5.75 9.59 6.09 9.25 6.5 9.25Z" fill="white"></path>
                </svg>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  
  <section class="py-12" style="background-color: rgba(0, 0, 0, 0.95)">
    <div class="container px-4 mx-auto">
      <div class="max-w-6xl mx-auto">
        <div class="text-center">
          <h3 class="text-4xl font-white text-white mb-2">Our Strengths</h3>
          <p class="text-lg font-bold text-white mb-6">Why choose us?</p>
          <div class="sm:max-w-sm md:max-w-2xl xl:max-w-none mx-auto mb-10">
            <div class="flex flex-wrap items-center -mx-4 -mb-8">
              <div class="w-full md:w-1/2 xl:w-1/4 px-4 mb-8 ">
                <div class="h-72 rounded-sm overflow-hidden bg-black shadow">
                  <img class="img-fluid mx-auto mt-6" style="width:120px; height:120px;" src="shopal-assets/images/product-insta-medium3.png" alt="">
                  <h3 class="text-2xl font-white text-white mb-2 mt-4">Halal Food</h3>
                  <p class="text-sm text-white m-2 mb-6">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
              </div>
              <div class="w-full md:w-1/2 xl:w-1/4 px-4 mb-8 ">
                <div class="h-72 rounded-sm overflow-hidden bg-dark shadow">
                  <img class="img-fluid mx-auto mt-6" style="width:120px; height:120px;" src="shopal-assets/images/product-insta-medium3.png" alt="">
                  <h3 class="text-2xl font-white text-white mb-2 mt-4">Fresh Environment</h3>
                  <p class="text-sm text-white m-2 mb-6">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
              </div>
              <div class="w-full md:w-1/2 xl:w-1/4 px-4 mb-8 ">
                <div class="h-72 rounded-sm overflow-hidden bg-black shadow">
                  <img class="img-fluid mx-auto mt-6" style="width:120px; height:120px;" src="shopal-assets/images/product-insta-medium3.png" alt="">
                  <h3 class="text-2xl font-white text-white mb-2 mt-4">Skilled Chef</h3>
                  <p class="text-sm text-white m-2 mb-6">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
              </div>
              <div class="w-full md:w-1/2 xl:w-1/4 px-4 mb-8 ">
                <div class="h-72 rounded-sm overflow-hidden bg-dark shadow">
                  <img class="img-fluid mx-auto mt-6" style="width:120px; height:120px;" src="shopal-assets/images/product-insta-medium3.png" alt="">
                  <h3 class="text-2xl font-white text-white mb-2 mt-4">Different Deals</h3>
                  <p class="text-sm text-white m-2 mb-6">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
              </div>
            </div>
          </div>
          <a class="group relative inline-block h-12 w-full sm:w-64 bg-blueGray-900 rounded-md" href="#">
            <div class="absolute top-0 left-0 transform -translate-y-1 -translate-x-1 w-full h-full group-hover:translate-y-0 group-hover:translate-x-0 transition duration-300">
              <div class="flex h-full w-full items-center justify-center bg-green-500 border-2 border-black rounded-md">
                <span class="text-base font-black text-black">Check our Instagram</span>
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
  </section>
            
  <section class="py-16 bg-gray-900">
    <div class="container px-4 mx-auto">
      <div class="shadow rounded-md relative overflow-hidden">
        <img class="img-fluid w-full h-80 border-2 border-black rounded-md object-cover" src="shopal-assets/images/banner1.png" alt="">
        <div class="absolute top-1/2 left-0 sm:pl-20 p-6 w-full transform -translate-y-1/2">
          <h4 class="text-3xl font-black text-white mb-6">Banner Hero</h4>
          <a class="group relative inline-block h-12 w-full xs:w-34 text-center bg-blueGray-900 rounded-md" href="#">
            <div class="absolute top-0 left-0 transform -translate-y-1 -translate-x-1 w-full h-full group-hover:translate-y-0 group-hover:translate-x-0 transition duration-300">
              <div class="flex h-full w-full items-center justify-center bg-green-600 border-2 border-black rounded-md">
                <span class="text-base font-black text-black">Start Buying</span>
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
  </section>
            

  

  <section class="py-24 bg-black relative">
    <div class="container px-4 mx-auto">
      <div class="flex flex-wrap -mx-4">
        <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-8 lg:mb-0">
          <div class="relative w-full">
            <div class="text-center absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2">
              <p class="text-sm text-indigo-200 font-bold mb-2">Daily Orders</p>
              <h2 class="text-4xl font-heading text-white">12 350</h2>
            </div>
          </div>
        </div>
        <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-8 lg:mb-0">
          <div class="relative w-full">
            <div class="text-center absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2">
              <p class="text-sm text-indigo-200 font-bold mb-2">Special Dishes</p>
              <h2 class="text-4xl font-heading text-white">5 065</h2>
            </div>
          </div>
        </div>
        <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-8 lg:mb-0">
          <div class="relative w-full">
            <div class="text-center absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2">
              <p class="text-sm text-indigo-200 font-bold mb-2">Our Chefs</p>
              <h2 class="text-4xl font-heading text-white">12 350</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="pt-16 pb-14">
    <div class="container px-4 mx-auto">
      <div class="max-w-6xl mx-auto">
        <div class="flex flex-wrap items-center justify-between -mx-4">
          <div class="hidden lg:block w-auto px-4">
            <a class="group flex items-center justify-center transform -translate-y-1 -translate-x-1 transition duration-500 h-16 w-16 rounded-full bg-gray-900" href="#">
              <div class="inline-flex z-10 items-center justify-center absolute top-0 left-0 h-16 w-16 transform -translate-y-1 -translate-x-1 group-hover:-translate-y-0 group-hover:-translate-x-0 bg-indigo-500 rounded-full transition-all duration-300">
                <svg width="20" height="20" viewbox="0 0 20 20" fill="white" xmlns="http://www.w3.org/2000/svg">
                  <path d="M10 0C4.48 0 0 4.48 0 10C0 15.52 4.48 20 10 20C15.52 20 20 15.52 20 10C20 4.48 15.52 0 10 0ZM13.5 10.75H8.31L10.03 12.47C10.32 12.76 10.32 13.24 10.03 13.53C9.88 13.68 9.69 13.75 9.5 13.75C9.31 13.75 9.12 13.68 8.97 13.53L5.97 10.53C5.68 10.24 5.68 9.76 5.97 9.47L8.97 6.47C9.26 6.18 9.74 6.18 10.03 6.47C10.32 6.76 10.32 7.24 10.03 7.53L8.31 9.25H13.5C13.91 9.25 14.25 9.59 14.25 10C14.25 10.41 13.91 10.75 13.5 10.75Z" fill="white"></path>
                </svg>
              </div>
            </a>
          </div>
          <div class="w-full lg:w-2/3 px-4">
            <div class="max-w-3xl mx-auto text-center">
              <span class="inline-block mb-5 text-sm font-black text-indigo-500">Halal Chicken</span>
              <h2 class="text-2xl sm:text-3xl md:text-4xl font-black mb-8">"</h2>
              <p class="max-w-lg mx-auto text-base sm:text-lg font-bold mb-9">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam ipsum quae in asperiores eaque iste animi, rerum excepturi provident incidunt blanditiis accusantium omnis. Sapiente culpa dolorum est neque vero velit?</p>
              <div>
                <img class="w-16 h-16 mb-6 mx-auto rounded-full border-2 border-black shadow img-fluid" src="shopal-assets/images/avatar-men.png" alt="">
                <h5 class="text-xl font-black mb-1">Commentor Name</h5>
                <span class="font-bold">Address or Area</span>
              </div>
            </div>
          </div>
          <div class="lg:hidden w-full px-4 mt-16">
            <div class="flex items-center justify-center">
              <a class="group flex mr-6 items-center justify-center transform -translate-y-1 -translate-x-1 transition duration-500 h-16 w-16 rounded-full bg-gray-900" href="#">
                <div class="inline-flex z-10 items-center justify-center absolute top-0 left-0 h-16 w-16 transform -translate-y-1 -translate-x-1 group-hover:-translate-y-0 group-hover:-translate-x-0 bg-indigo-500 rounded-full transition-all duration-300">
                  <svg width="20" height="20" viewbox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10 0C4.48 0 0 4.48 0 10C0 15.52 4.48 20 10 20C15.52 20 20 15.52 20 10C20 4.48 15.52 0 10 0ZM13.5 10.75H8.31L10.03 12.47C10.32 12.76 10.32 13.24 10.03 13.53C9.88 13.68 9.69 13.75 9.5 13.75C9.31 13.75 9.12 13.68 8.97 13.53L5.97 10.53C5.68 10.24 5.68 9.76 5.97 9.47L8.97 6.47C9.26 6.18 9.74 6.18 10.03 6.47C10.32 6.76 10.32 7.24 10.03 7.53L8.31 9.25H13.5C13.91 9.25 14.25 9.59 14.25 10C14.25 10.41 13.91 10.75 13.5 10.75Z" fill="white"></path>
                  </svg>
                </div>
              </a>
              <a class="group flex items-center justify-center transform -translate-y-1 -translate-x-1 transition duration-500 h-16 w-16 rounded-full bg-gray-900" href="#">
                <div class="inline-flex z-10 items-center justify-center absolute top-0 left-0 h-16 w-16 transform -translate-y-1 -translate-x-1 group-hover:-translate-y-0 group-hover:-translate-x-0 bg-indigo-500 rounded-full transition-all duration-300">
                  <svg width="20" height="20" viewbox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10 20C15.52 20 20 15.52 20 10C20 4.48 15.52 3.91654e-07 10 8.74228e-07C4.48 1.3568e-06 -1.3568e-06 4.48 -8.74228e-07 10C-3.91654e-07 15.52 4.48 20 10 20ZM6.5 9.25L11.69 9.25L9.97 7.53C9.68 7.24 9.68 6.76 9.97 6.47C10.12 6.32 10.31 6.25 10.5 6.25C10.69 6.25 10.88 6.32 11.03 6.47L14.03 9.47C14.32 9.76 14.32 10.24 14.03 10.53L11.03 13.53C10.74 13.82 10.26 13.82 9.97 13.53C9.68 13.24 9.68 12.76 9.97 12.47L11.69 10.75L6.5 10.75C6.09 10.75 5.75 10.41 5.75 10C5.75 9.59 6.09 9.25 6.5 9.25Z" fill="white"></path>
                  </svg>
                </div>
              </a>
            </div>
          </div>
          <div class="hidden lg:block w-auto px-4">
            <a class="group flex items-center justify-center transform -translate-y-1 -translate-x-1 transition duration-500 h-16 w-16 rounded-full bg-gray-900" href="#">
              <div class="inline-flex z-10 items-center justify-center absolute top-0 left-0 h-16 w-16 transform -translate-y-1 -translate-x-1 group-hover:-translate-y-0 group-hover:-translate-x-0 bg-indigo-500 rounded-full transition-all duration-300">
                <svg width="20" height="20" viewbox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M10 20C15.52 20 20 15.52 20 10C20 4.48 15.52 3.91654e-07 10 8.74228e-07C4.48 1.3568e-06 -1.3568e-06 4.48 -8.74228e-07 10C-3.91654e-07 15.52 4.48 20 10 20ZM6.5 9.25L11.69 9.25L9.97 7.53C9.68 7.24 9.68 6.76 9.97 6.47C10.12 6.32 10.31 6.25 10.5 6.25C10.69 6.25 10.88 6.32 11.03 6.47L14.03 9.47C14.32 9.76 14.32 10.24 14.03 10.53L11.03 13.53C10.74 13.82 10.26 13.82 9.97 13.53C9.68 13.24 9.68 12.76 9.97 12.47L11.69 10.75L6.5 10.75C6.09 10.75 5.75 10.41 5.75 10C5.75 9.59 6.09 9.25 6.5 9.25Z" fill="white"></path>
                </svg>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>


<x-footer/>

@include('includes.foot')
{{-- Floating Action Button --}}
<script src="{{asset('js/jquery-3.6.1.min.js')}}"></script>
<script src="{{asset('js/owl_carousel/owl.carousel.min.js')}}"></script>

</body>


</html>
