<nav class="fixed top-0 z-50 w-full bg-white border-b border-gray-200 dark:bg-gray-800 dark:border-gray-700">
    <div class="px-3 py-3 lg:px-5 lg:pl-3">
        <div class="flex items-center justify-between">
            <div class="flex items-center justify-start rtl:justify-end">
                <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar"
                    type="button"
                    class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
                    <span class="sr-only">Open sidebar</span>
                    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path clip-rule="evenodd" fill-rule="evenodd"
                            d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
                        </path>
                    </svg>
                </button>
                <a href="/" class="flex ms-2 md:me-24">
                    <img src="{{URL::asset('/img/tm_logo.png')}}" alt="profile Pic" class="object-cover w-36">
                </a>
            </div>
            <div class="flex items-center">
                <div class="flex items-center ms-3">
                    <div>
                        <div
                            class="flex cursor-pointer"
                            aria-expanded="false" data-dropdown-toggle="dropdown-user">
                            <span class="sr-only">Open user menu</span>
                            <div class="relative inline-flex items-center
                                 justify-center w-10 h-10 overflow-hidden bg-gray-100 
                                 rounded-full dark:bg-gray-600">
                                <span class="font-medium text-gray-600 dark:text-gray-300">
                                    {{ Helper::initials(Auth::user()->name) }}
                                </span>
                            </div>
                            <!-- <div class="text-sm bg-gray-800 rounded-full">
                                <img class="w-8 h-8 rounded-full"
                                    src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" 
                                alt="user photo">
                            </div> -->
                           <!-- <div class="m-1">{{ Auth::user()->name }}<i class="fa-solid fa-angle-down ms-1"></i></div> -->
                        </div>
                    </div>
                    <div class="z-50 hidden text-base list-none bg-white divide-y divide-gray-100 rounded shadow dark:bg-gray-700 dark:divide-gray-600"
                        id="dropdown-user">
                        <div class="px-4 py-3" role="none">
                            <div class="flex justify-between">
                                <div class="relative inline-flex items-center
                                    justify-center w-10 h-10 overflow-hidden bg-gray-100 
                                    rounded-full dark:bg-gray-600">
                                    <span class="font-medium text-gray-600 dark:text-gray-300">
                                        {{ Helper::initials(Auth::user()->name) }}
                                    </span>
                                </div>
                                <div class="mx-3">
                                    <span class="block text-sm font-semibold text-gray-900 dark:text-white">{{ Auth::user()->name }}</span>
                                    <small class="text-muted">{{ Auth::user()->role }}</small>
                                </div>
                            </div>
                        </div>
                        <ul class="py-1" role="none">
                            <li>
                                <a href="{{ route('profile') }}" class="block px-4 py-2 text-sm
                                    text-gray-700 hover:bg-gray-100" role="menuitem">
                                    {{ __('Profile') }}
                                </a>
                            </li>
                            <li>
                                <div class="dropdown-divider"></div>
                            </li>
                            <li>
                                <a href="{{ route('logout') }}" class="block px-4 py-2 text-sm
                                             text-gray-700 hover:bg-gray-100
                                              dark:text-gray-300 dark:hover:bg-gray-600
                                               dark:hover:text-white" role="menuitem" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
</nav>