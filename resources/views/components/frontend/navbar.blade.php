<!-- Navbar -->
<div class="header-3-2" style="font-family: 'Poppins', sans-serif">
  <header x-data="{ open: false }"
    class="w-full grid grid-cols-1 lg:grid-cols-3 py-8 lg:px-24 md:px-16 sm:px-8 px-8">
    <div class="flex items-center justify-between">
      <a href="#">
        <img src="{{ url('frontend/images/logo.png') }}"
          alt="" />
      </a>
      <div class="flex justify-end items-center lg:hidden cursor-pointer">
        <svg class="w-6 h-6" @click="open = !open" fill="none" stroke="currentColor" viewBox="0 0 24 24"
          xmlns="http://www.w3.org/2000/svg">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
        </svg>
      </div>
    </div>
    <!-- Backdrop -->
    <!-- Backdop -->
    <div :class="{'hidden': !open}" class="bg-black fixed hidden w-full h-full top-0 left-0 z-30 bg-opacity-60"
      @click="open = !open"></div>
    <nav :class="{'flex': open, 'hidden': !open}"
      class="hidden z-50 fixed left-3 right-3 rounded-md shadow-md flex-col p-8 justify-center navigation items-start lg:shadow-none lg:bg-transparent lg:p-0 lg:items-center lg:flex lg:flex-row lg:relative lg:space-x-7 bg-white">
      <a href="#">
        <img class="m-0 lg:hidden mb-3"
          src="{{ url('frontend/images/brand.png') }}"
          alt="" />
      </a>
      <a href="{{ route('index') }}" class="text-sm text-black-2 font-medium mx-0 lg:mx-5 my-4 lg:my-0 relative {{ request()->is('index') ? 'active' : '' }}">Home</a>
      <a href="{{ route('kelas') }}" class="text-sm text-black-2 font-light mx-0 lg:mx-5 my-4 lg:my-0 relative {{ request()->is('kelas') ? 'active' : '' }}">Kelas</a>
      <a href="#" class="text-sm text-black-2 font-light mx-0 lg:mx-5 my-4 lg:my-0 relative">News</a>
      <a href="#" class="text-sm text-black-2 font-light mx-0 lg:mx-5 my-4 lg:my-0 relative">About</a>
      @auth
      <a href="{{ route('dashboard.index') }}" class="text-sm text-black-2 font-light mx-0 lg:mx-5 my-4 lg:my-0 relative">Dashboard</a>
      @endauth
      <div class="mx-0 lg:mx-5 my-4 lg:my-0" x-data="{ search: false }">
        <svg @click="search = !search" class="hidden cursor-pointer search-icon"
          :class="{'flex': !search, 'hidden': search}" width="15" height="15" viewBox="0 0 15 15" fill="none"
          xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" clip-rule="evenodd"
            d="M5.85 1.69346C3.5304 1.69346 1.65 3.57386 1.65 5.89346C1.65 8.21305 3.5304 10.0935 5.85 10.0935C8.1696 10.0935 10.05 8.21305 10.05 5.89346C10.05 3.57386 8.1696 1.69346 5.85 1.69346ZM0.25 5.89346C0.25 2.80066 2.75721 0.293457 5.85 0.293457C8.94279 0.293457 11.45 2.80066 11.45 5.89346C11.45 8.98625 8.94279 11.4935 5.85 11.4935C2.75721 11.4935 0.25 8.98625 0.25 5.89346Z"
            fill="#303030" />
          <path fill-rule="evenodd" clip-rule="evenodd"
            d="M8.85503 8.89848C9.12839 8.62512 9.57161 8.62512 9.84497 8.89848L14.045 13.0985C14.3183 13.3718 14.3183 13.8151 14.045 14.0884C13.7716 14.3618 13.3284 14.3618 13.055 14.0884L8.85503 9.88843C8.58166 9.61506 8.58166 9.17185 8.85503 8.89848Z"
            fill="#303030" />
        </svg>
        <form method="" name="search" id="form"
          :class="{'flex lg:absolute center-search': search, 'hidden': !search}"
          class="hidden items-center rounded-full focus:outline-none px-3" style="background-color: #fff3f2">
          <input name="search" type="text" class="rounded-full focus:outline-none" placeholder="Search" />
          <button type="button">
            <svg @click="search = !search" style="width: 20px; height: 20px"
              class="focus:outline-none cursor-pointer" fill="none" stroke="#243142" viewBox="0 0 24 24"
              xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
          </button>
        </form>
      </div>
      @guest  
      <div class="flex items-center justify-end w-full lg:hidden mt-3">
        <button class="btn-no-fill text-sm font-medium py-3 px-8 focus:outline-none">
          Sign In
        </button>
        <button class="btn-fill text-sm text-white font-medium py-3 px-8 rounded-full focus:outline-none">
          Register
        </button>
      </div>
      @endguest
      <svg @click="open = !open" class="w-6 h-6 absolute top-4 right-4 cursor-pointer lg:hidden" fill="none"
        stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
      </svg>
    </nav>
    @guest
    <div class="hidden items-center justify-end lg:flex">
      <a href="{{route('login')}}" class="btn-no-fill text-sm font-medium py-3 px-8 focus:outline-none">
        Sign In
      </a>
      <a href="{{route('register')}}" class="btn-fill text-white font-medium text-sm py-3 px-6 rounded-full focus:outline-none">
        Register
      </a>
    </div>
    @endguest
  </header>
  <div class="lg:px-24 md:px-16 sm:px-8 px-8">
    <hr style="border-color: #f4f4f4" />
  </div>
