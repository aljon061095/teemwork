@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="text-3xl mb-4">Edit user</h1>

    <div class="row">

        <form>
            <div class="grid gap-6 mb-6 md:grid-cols-2">
                <div>
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Name
                    </label>
                    <input type="text" id="first_name"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-tm-primary
                         focus:border-tm-primary block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600
                          dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        value="{{ $user->name }}"
                        placeholder="John Doe" required />
                </div>
                <div>
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email
                        address</label>
                    <input type="email" id="email"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm
                         rounded-lg focus:ring-tm-primary focus:border-tm-primary block 
                         w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400
                          dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        value="{{ $user->email }}"
                        placeholder="john.doe@company.com" 
                        required />
                </div>
                <div>
                    <label for="company"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Company</label>
                    <input type="text" id="company"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg
                         focus:ring-tm-primary focus:border-tm-primary
                          block w-full p-2.5 dark:bg-gray-700
                           dark:border-gray-600 dark:placeholder-gray-400
                            dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                         value="{{ $user->name }}"
                        placeholder="Flowbite" required />
                </div>
                <div>
                    <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone
                        number</label>
                    <input type="tel" id="phone"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm
                         rounded-lg focus:ring-tm-primary focus:border-tm-primary
                          block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600
                           dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="123-45-678" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required />
                </div>
            </div>
            <a href="{{ route('users') }}"
                class="text-white bg-gray-700 hover:bg-gray-500 focus:ring-4 focus:outline-none
                 focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 me-2 
                 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                 Cancel
            </a>
            <button type="submit"
                class="text-white bg-tm-primary hover:bg-tm-secondary focus:ring-4 focus:outline-none
                 focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 
                 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                 Update
                </button>
        </form>
    </div>
</div>
@endsection