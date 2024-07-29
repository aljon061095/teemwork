<aside id="logo-sidebar"
    class="fixed top-0 left-0 z-40 w-70 h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700"
    aria-label="Sidebar">
    <div class="h-full px-3 pb-4 overflow-y-auto bg-white dark:bg-gray-800 mt-2">
        <ul class="space-y-2 font-medium">
            <li>
                <a href="{{ route('home') }}"
                    class="flex items-center w-full p-2 text-base text-gray-600 transition duration-75 rounded-lg group hover:bg-tm-secondary hover:text-white group">
                    <i class="fa-solid fa-house fa-lg"></i>
                    <span class="ms-3">Home</span>
                </a>
            </li>
            <li>
                <button type="button"
                    class="flex items-center w-full p-2 text-base text-gray-600 transition duration-75 rounded-lg group hover:bg-tm-secondary hover:text-white group"
                    aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
                    <i class="fa-solid fa-magnifying-glass fa-lg"></i>
                    <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Recruitment</span>
                    <i class="fa-solid fa-angle-down"></i>
                </button>
                <ul id="dropdown-example" class="hidden py-2 space-y-2 ml-4">
                    <li>
                        <a href="{{ route('jobs')}}"
                            class="flex items-center w-full p-2 text-gray-600 transition duration-75
                             rounded-lg pl-11 group hover:bg-tm-primary hover:text-white
                             dark:text-white dark:hover:bg-gray-700">
                            <i class="fa-solid fa-briefcase fa-lg"></i>
                            <span class="ms-3">Jobs</span>
                        </a>
                    </li>
                    <li>
                    <a href="#"
                            class="flex items-center w-full p-2 text-gray-600 transition duration-75
                             rounded-lg pl-11 group hover:bg-tm-primary hover:text-white
                             dark:text-white dark:hover:bg-gray-700">
                             <i class="fa-solid fa-user-group fa-lg"></i>
                             <span class="ms-3">Candidates</span>
                        </a>
                    </li>
                   
                </ul>
            </li>
            <li>
                <button type="button"
                    class="flex items-center w-full p-2 text-base text-gray-600 transition duration-75 rounded-lg group hover:bg-tm-secondary hover:text-white group"
                    aria-controls="dropdown-example" data-collapse-toggle="employees">
                    <i class="fa-solid fa-users fa-lg"></i>
                    <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Employees</span>
                    <i class="fa-solid fa-angle-down"></i>
                </button>
                <ul id="employees" class="hidden py-2 space-y-2 ml-4">
                    <li>
                        <a href="{{ route('employees') }}"
                            class="flex items-center w-full p-2 text-gray-600 transition duration-75
                             rounded-lg pl-11 group hover:bg-tm-primary hover:text-white
                             dark:text-white dark:hover:bg-gray-700">
                            <i class="fa-solid fa-users fa-lg"></i>
                            <span class="ms-3">Employees</span>
                        </a>
                    </li>
                    <li>
                    <a href="#"
                            class="flex items-center w-full p-2 text-gray-600 transition duration-75
                             rounded-lg pl-11 group hover:bg-tm-primary hover:text-white
                             dark:text-white dark:hover:bg-gray-700">
                             <i class="fa-solid fa-file fa-lg"></i>
                             <span class="ms-3">Files</span>
                        </a>
                    </li>
                   
                </ul>
            </li>
            <li>
                <a href="#"
                    class="flex items-center w-full p-2 text-base text-gray-600 transition duration-75 rounded-lg group hover:bg-tm-secondary hover:text-white group">
                    <i class="fa-solid fa-clock fa-lg"></i>
                    <span class="ms-3">Timesheet</span>
                </a>
            </li>
            <li>
                <button type="button"
                    class="flex items-center w-full p-2 text-base text-gray-600 transition duration-75 rounded-lg group hover:bg-tm-secondary hover:text-white group"
                    aria-controls="dropdown-example" data-collapse-toggle="payroll">
                    <i class="fa-solid fa-hand-holding-dollar fa-lg"></i>
                    <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Payroll</span>
                    <i class="fa-solid fa-angle-down"></i>
                </button>
                <ul id="payroll" class="hidden py-2 space-y-2 ml-4">
                    <li>
                        <a href="#"
                            class="flex items-center w-full p-2 text-gray-600 transition duration-75
                             rounded-lg pl-11 group hover:bg-tm-primary hover:text-white
                             dark:text-white dark:hover:bg-gray-700">
                             <i class="fa-solid fa-money-bill-trend-up fa-lg"></i>
                            <span class="ms-3">Salary</span>
                        </a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center w-full p-2 text-gray-600 transition duration-75
                             rounded-lg pl-11 group hover:bg-tm-primary hover:text-white
                             dark:text-white dark:hover:bg-gray-700">
                             <i class="fa-solid fa-chart-simple fa-lg"></i>
                            <span class="ms-3">Benefits</span>
                        </a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center w-full p-2 text-gray-600 transition duration-75
                             rounded-lg pl-11 group hover:bg-tm-primary hover:text-white
                             dark:text-white dark:hover:bg-gray-700">
                             <i class="fa-solid fa-money-bill fa-lg"></i>
                            <span class="ms-3">Compensation</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <button type="button"
                    class="flex items-center w-full p-2 text-base text-gray-600 transition duration-75 rounded-lg group hover:bg-tm-secondary hover:text-white group"
                    aria-controls="dropdown-example" data-collapse-toggle="performance">
                    <i class="fa-solid fa-chart-line fa-lg"></i>
                    <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Performance</span>
                    <i class="fa-solid fa-angle-down"></i>
                </button>
                <ul id="performance" class="hidden py-2 space-y-2 ml-4">
                    <li>
                        <a href="#"
                            class="flex items-center w-full p-2 text-gray-600 transition duration-75
                             rounded-lg pl-11 group hover:bg-tm-primary hover:text-white
                             dark:text-white dark:hover:bg-gray-700">
                             <i class="fa-solid fa-up-long fa-lg"></i>
                            <span class="ms-3">Appraisal</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"
                    class="flex items-center w-full p-2 text-base text-gray-600 transition duration-75 rounded-lg group hover:bg-tm-secondary hover:text-white group">
                    <i class="fa-solid fa-person-running fa-lg"></i>
                    <span class="ms-3">Training</span>
                </a>
            </li>
            <li>
                <a href="#"
                    class="flex items-center w-full p-2 text-base text-gray-600 transition duration-75 rounded-lg group hover:bg-tm-secondary hover:text-white group">
                    <i class="fa-solid fa-users-line fa-lg"></i>
                    <span class="ms-3">Employee Engagement</span>
                </a>
            </li>
            <li>
                <button type="button"
                    class="flex items-center w-full p-2 text-base text-gray-600 transition duration-75 rounded-lg group hover:bg-tm-secondary hover:text-white group"
                    aria-controls="dropdown-example" data-collapse-toggle="talent">
                    <i class="fa-solid fa-chart-pie fa-lg"></i>
                    <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Talent Management</span>
                    <i class="fa-solid fa-angle-down"></i>
                </button>
                <ul id="talent" class="hidden py-2 space-y-2 ml-4">
                    <li>
                        <a href="#"
                            class="flex items-center w-full p-2 text-gray-600 transition duration-75
                             rounded-lg pl-11 group hover:bg-tm-primary hover:text-white
                             dark:text-white dark:hover:bg-gray-700">
                             <i class="fa-solid fa-up-long fa-lg"></i>
                            <span class="ms-3">Workforce Plan</span>
                        </a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center w-full p-2 text-gray-600 transition duration-75
                             rounded-lg pl-11 group hover:bg-tm-primary hover:text-white
                             dark:text-white dark:hover:bg-gray-700">
                             <i class="fa-solid fa-up-long fa-lg"></i>
                            <span class="ms-3">Succession Plan</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"
                    class="flex items-center w-full p-2 text-base text-gray-600 transition duration-75 rounded-lg group hover:bg-tm-secondary hover:text-white group">
                    <i class="fa-solid fa-chart-gantt fa-lg"></i>
                    <span class="ms-3">Analytics & Reporting</span>
                </a>
            </li>
            <li>
                <a href="#"
                    class="flex items-center w-full p-2 text-base text-gray-600 transition duration-75 rounded-lg group hover:bg-tm-secondary hover:text-white group">
                    <i class="fa-solid fa-bars fa-lg"></i>
                    <span class="ms-3">Support</span>
                </a>
            </li>
            <li>
                <button type="button"
                    class="flex items-center w-full p-2 text-base text-gray-600 transition duration-75 rounded-lg group hover:bg-tm-secondary hover:text-white group"
                    aria-controls="dropdown-example" data-collapse-toggle="settings">
                    <i class="fa-solid fa-cog fa-lg"></i>
                    <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Settings</span>
                    <i class="fa-solid fa-angle-down"></i>
                </button>
                <ul id="settings" class="hidden py-2 space-y-2 ml-4">
                    <li>
                        <a href="{{ route('users') }}"
                            :active="request()->routeIs('users')"
                            class="flex items-center w-full p-2 text-gray-600 transition duration-75
                             rounded-lg pl-11 group hover:bg-tm-primary hover:text-white
                             dark:text-white dark:hover:bg-gray-700">
                             <i class="fa-solid fa-user-gear fa-lg"></i>
                            <span class="ms-3">User Management</span>
                        </a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center w-full p-2 text-gray-600 transition duration-75
                             rounded-lg pl-11 group hover:bg-tm-primary hover:text-white
                             dark:text-white dark:hover:bg-gray-700">
                             <i class="fa-solid fa-desktop fa-lg"></i>
                            <span class="ms-3">Integrations</span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</aside>