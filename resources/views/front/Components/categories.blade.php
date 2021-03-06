<div class="bg-white hidden overflow-y-auto  sidebar-menu h-screen w-64 fixed right-0 top-0 z-10 flex flex-col justify-between items-center">
    <div class="relative">
      <i onclick="closeSidebarMenu()" class="fa cursor-pointer fa-times text-black right-0 text-3xl z-50 absolute top-2 "></i>
      @foreach ($categories as $category)
      @if ($category->active)
      <ul class="flex-col w-56">
        <div class="flex items-center justify-between mt-14 cursor-pointer">
        <a href="{{ route('getBlade', ['page' => $category->path_blade ?? '404']) }}"><li>{{ $category->name }}</li></a>
        @if (empty($category->path_blade))
        <i id="{{ $category->name }}" onclick="dropdownBtn{{ $category->name }}()" class="fas fa-chevron-down arrowDown{{ $category->name }}"></i>
        <span onclick="closedropdown{{ $category->name }}()" class="hidden arrowUp{{ $category->name }}">
        <i class="fas fa-chevron-up"></i>
        </span>
        </div>
        <ul class="dropdown-container-{{ $category->name }} hidden flex-col mt-6 ml-4">
          <h1 class="mb-2 mt-2 font-extrabold">{{ $category->name }}</h1>
          <hr class="border-b-2 w-12 border-yellow-500">
          @foreach ($category->subCategories as $subCategory)
          @if ($subCategory->active && count($subCategory->subCategories))
          @foreach ($subCategory->subCategories as $subSubCategory)
          <a href="{{ route('getBlade', ['page' => $subSubCategory->path_blade ?? '404']) }}"><li class="mt-4">{{ $subSubCategory->name }}</li></a>
          @endforeach
          @endif
          @endforeach
        </ul>
         @endif
        </ul>
        @endif
        @endforeach
        <a href="{{ route('getBlade', ['page' => 'contact_us']) }}"><button class="bg-blue-700 py-1 px-8 text-white mt-2 cursor-pointer">{{ t("Let's Talk")  }}</button></a>
    </div>
    <div class="mb-8">
      <p>{{ t("Can't find what you need?")  }}</p>
      <button class="bg-blue-700 py-1 px-8 text-white mt-2 cursor-pointer">{{ t("Ask Us")  }}</button>
    </div>
  </div>

<div class="md:px-16 lg:px-16 px-6 w-full top-0 left-0 fixed bg-white shadow z-50">
    <div class="flex justify-between items-center">
        <a href="/">
            <img class="w-32" src="{{ asset('assets/images/logo2.png') }}" alt="logo">
        </a>
        <div id="searchbar" class="flex justify-end items-center w-4/5">
            <ul class="w-11/12 hidden lg:flex justify-end items-center list-none">
                @foreach ($categories as $category)
                    @if ($category->active)
                        <li class="flex mr-10 border-white hover:border-blue-700 cursor-pointer hover:text-blue-500">
                            @if (empty($category->path_blade))
                                <div x-data="{ open: false }">
                                    <h1 @mouseover="open = true" @mouseout="open = false"
                                        class="font-medium text-sm uppercase hover:text-blue-500 border-b-4 border-white hover:border-blue-500 duration-300 py-5 text-black">
                                        {{ $category->name }}</h1>
                                    <div x-show="open" @mouseover="open = true" @mouseout="open = false"
                                        class="duration-500 flex w-full absolute left-0 z-40 top-16 border-t-2 border-b-2 bg-white justify-start py-5 px-10">
                                        <div class="w-1/3 px-3">
                                            <h1 class="mb-2 font-bold text-black uppercase">{{ $category->name }}</h1>
                                            <hr class="border-b w-12 border-yellow-500">
                                            <p class="mt-4 text-black text-sm font-normal">
                                                {{ $category->description }}</p>
                                            <p class=" mt-4 text-black font-bold">Can't find what you need?</p>
                                            <div
                                                class="bg-blue-700 px-6 py-2 text-sm font-bold text-white mt-4 w-36 text-center">
                                                <a href="#">ASK US</a>
                                            </div>
                                        </div>

                                        @foreach ($category->subCategories as $subCategory)
                                            <div class="w-1/5 list-none">
                                                <h1 class="mb-2 font-bold text-black uppercase">
                                                    {{ $subCategory->name }}</h1>
                                                <hr class="border-b w-12 border-yellow-500">
                                                <ul>
                                                    @if ($subCategory->active && count($subCategory->subCategories))
                                                        @foreach ($subCategory->subCategories as $subSubCategory)
                                                            <a class="font-normal"
                                                                href="{{ route('getBlade', ['page' => $subSubCategory->path_blade ?? '404']) }}">
                                                                <li class="mt-2 text-black hover:text-blue-700 text-sm items-center flex transition
                                                    duration-300 ease-in-out transform hover:translate-x-3">
                                                                    @if ($subSubCategory->icon)<img
                                                                            class="h-8 w-8 pr-2"
                                                                            src="{{ asset('uploads/categories/icons/' . $subSubCategory->icon) }}"
                                                                            alt="logo">
                                                                    @else<img class="h-8 w-8 pr-2"
                                                                            src="{{ asset('images/default-image.png') }}"
                                                                            alt="logo"> @endif
                                                                    {{ ' ' . $subSubCategory->name }}
                                                                </li>
                                                            </a>

                                                        @endforeach
                                                    @endif
                                                </ul>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            @else
                                <a id="{{ $category->name }}"
                                    class="font-medium border-b-4 text-sm uppercase border-white hover:border-blue-500 duration-300 relative py-5"
                                    href="{{ route('getBlade', ['page' => $category->path_blade ?? '404']) }}">
                                    {{ $category->name }}
                                </a>
                            @endif

                        </li>
                    @endif
                @endforeach
                <li
                    class="flex justify-center rounded items-center bg-blue-700 text-white px-4 py-2 mr-6 hover:bg-blue-900">
                    <a class="text-sm font-bold" href="{{ route('getBlade', ['page' => 'contact_us']) }}">Let's
                        talk</a>
                </li>
            </ul>
            <!-- Search Bar -->
            <div onclick="searchBarClick()"
                class="flex justify-center cursor-pointer items-center bg-blue-700 rounded-full text-white p-3 hover:bg-blue-900">
                <i class="fa fa-search fa-xl"></i>
            </div>
            <div onclick="openSidebarMenu()" class="flex lg:hidden ml-4 cursor-pointer">
                <i class="fas fa-bars"></i>
            </div>
        </div>
        <div id="exitbar" class="w-full py-0 lg:py-2 duration-300 justify-between ml-4 items-center hidden bg-white">
            <input type="text" placeholder="Search..." id="searchInput"
                class="border focus:border-blue-500 duration-300 border-gray-300 rounded focus:outline-none w-full z-50 mr-1 py-0 lg:py-2 lg:px-3 px-3">
            <div class="flex w-10 h-10 justify-center items-center z-50 rounded-full">
                <i onclick="exitClick()" class="fa fa-times text-gray-800 text-2xl z-50"></i>
            </div>

        </div>
        {{-- <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @php $locale = session()->get('locale'); @endphp
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        @switch($locale)
                            @case('en')
                            English
                            @break
                            @case('ru')
                            Russian
                            @break
                            @case('uz')
                            Uzbek
                            @break
                            @default
                            English
                        @endswitch
                        <span class="caret"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="lang"><img src="">English</a>
                        <a class="dropdown-item" href="lang"><img src="">Russian</a>
                        <a class="dropdown-item" href="lang"><img src="">Uzbek</a>
                    </div>
                </li>
            </ul>
        </div> --}}


        @include('front.Components.resources_views_components_language_selection')
    </div>
</div>
