@extends('layouts.page')

@section('title', 'Create Job')

@section('page')
<div class="container mt-5">
    <header class="mb-2">
        <h1 class="text-3xl">Create job posting</h1>
        <hr class="h-px my-2 border-b border-solid border-tm-primary border-opacity-100" />
    </header>
    <div class="row mt-4">
        <form>
            <div class="mb-6">
                <div class="row mb-4">
                    <div class="col-6">
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Title
                        </label>
                        <input type="text" id="title"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-tm-primary focus:border-tm-primary block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="e.g. Accountant" required />
                    </div>
                    <div class="col-6">
                        <label for="company" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Company
                        </label>
                        <input type="text" id="company"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-tm-primary focus:border-tm-primary block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Teemwork" required />
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="col-12">
                        <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Job Description
                        </label>

                        <form>
                            <div
                                class="w-full mb-4 border border-gray-200 rounded-lg bg-gray-50 dark:bg-gray-700 dark:border-gray-600">
                                <div class="flex items-center justify-between px-3 py-2 border-b dark:border-gray-600">
                                    <div
                                        class="flex flex-wrap items-center divide-gray-200 sm:divide-x sm:rtl:divide-x-reverse dark:divide-gray-600">
                                        <div class="flex items-center space-x-1 rtl:space-x-reverse sm:pe-4">
                                            <button type="button"
                                                class="p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                                                <svg class="w-4 h-4" aria-hidden="true"
                                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 12 20">
                                                    <path stroke="currentColor" stroke-linejoin="round" stroke-width="2"
                                                        d="M1 6v8a5 5 0 1 0 10 0V4.5a3.5 3.5 0 1 0-7 0V13a2 2 0 0 0 4 0V6" />
                                                </svg>
                                                <span class="sr-only">Attach file</span>
                                            </button>
                                            <button type="button"
                                                class="p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                                                <svg class="w-4 h-4" aria-hidden="true"
                                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                    viewBox="0 0 16 20">
                                                    <path
                                                        d="M8 0a7.992 7.992 0 0 0-6.583 12.535 1 1 0 0 0 .12.183l.12.146c.112.145.227.285.326.4l5.245 6.374a1 1 0 0 0 1.545-.003l5.092-6.205c.206-.222.4-.455.578-.7l.127-.155a.934.934 0 0 0 .122-.192A8.001 8.001 0 0 0 8 0Zm0 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6Z" />
                                                </svg>
                                                <span class="sr-only">Embed map</span>
                                            </button>
                                            <button type="button"
                                                class="p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                                                <svg class="w-4 h-4" aria-hidden="true"
                                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                    viewBox="0 0 16 20">
                                                    <path
                                                        d="M14.066 0H7v5a2 2 0 0 1-2 2H0v11a1.97 1.97 0 0 0 1.934 2h12.132A1.97 1.97 0 0 0 16 18V2a1.97 1.97 0 0 0-1.934-2ZM10.5 6a1.5 1.5 0 1 1 0 2.999A1.5 1.5 0 0 1 10.5 6Zm2.221 10.515a1 1 0 0 1-.858.485h-8a1 1 0 0 1-.9-1.43L5.6 10.039a.978.978 0 0 1 .936-.57 1 1 0 0 1 .9.632l1.181 2.981.541-1a.945.945 0 0 1 .883-.522 1 1 0 0 1 .879.529l1.832 3.438a1 1 0 0 1-.031.988Z" />
                                                    <path
                                                        d="M5 5V.13a2.96 2.96 0 0 0-1.293.749L.879 3.707A2.98 2.98 0 0 0 .13 5H5Z" />
                                                </svg>
                                                <span class="sr-only">Upload image</span>
                                            </button>
                                            <button type="button"
                                                class="p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                                                <svg class="w-4 h-4" aria-hidden="true"
                                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                    viewBox="0 0 16 20">
                                                    <path
                                                        d="M5 5V.13a2.96 2.96 0 0 0-1.293.749L.879 3.707A2.96 2.96 0 0 0 .13 5H5Z" />
                                                    <path
                                                        d="M14.067 0H7v5a2 2 0 0 1-2 2H0v11a1.969 1.969 0 0 0 1.933 2h12.134A1.97 1.97 0 0 0 16 18V2a1.97 1.97 0 0 0-1.933-2ZM6.709 13.809a1 1 0 1 1-1.418 1.409l-2-2.013a1 1 0 0 1 0-1.412l2-2a1 1 0 0 1 1.414 1.414L5.412 12.5l1.297 1.309Zm6-.6-2 2.013a1 1 0 1 1-1.418-1.409l1.3-1.307-1.295-1.295a1 1 0 0 1 1.414-1.414l2 2a1 1 0 0 1-.001 1.408v.004Z" />
                                                </svg>
                                                <span class="sr-only">Format code</span>
                                            </button>
                                            <button type="button"
                                                class="p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                                                <svg class="w-4 h-4" aria-hidden="true"
                                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                    viewBox="0 0 20 20">
                                                    <path
                                                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM13.5 6a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm-7 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm3.5 9.5A5.5 5.5 0 0 1 4.6 11h10.81A5.5 5.5 0 0 1 10 15.5Z" />
                                                </svg>
                                                <span class="sr-only">Add emoji</span>
                                            </button>
                                        </div>
                                        <div class="flex flex-wrap items-center space-x-1 rtl:space-x-reverse sm:ps-4">
                                            <button type="button"
                                                class="p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                                                <svg class="w-4 h-4" aria-hidden="true"
                                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 21 18">
                                                    <path stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2"
                                                        d="M9.5 3h9.563M9.5 9h9.563M9.5 15h9.563M1.5 13a2 2 0 1 1 3.321 1.5L1.5 17h5m-5-15 2-1v6m-2 0h4" />
                                                </svg>
                                                <span class="sr-only">Add list</span>
                                            </button>
                                            <button type="button"
                                                class="p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                                                <svg class="w-4 h-4" aria-hidden="true"
                                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                    viewBox="0 0 20 20">
                                                    <path
                                                        d="M18 7.5h-.423l-.452-1.09.3-.3a1.5 1.5 0 0 0 0-2.121L16.01 2.575a1.5 1.5 0 0 0-2.121 0l-.3.3-1.089-.452V2A1.5 1.5 0 0 0 11 .5H9A1.5 1.5 0 0 0 7.5 2v.423l-1.09.452-.3-.3a1.5 1.5 0 0 0-2.121 0L2.576 3.99a1.5 1.5 0 0 0 0 2.121l.3.3L2.423 7.5H2A1.5 1.5 0 0 0 .5 9v2A1.5 1.5 0 0 0 2 12.5h.423l.452 1.09-.3.3a1.5 1.5 0 0 0 0 2.121l1.415 1.413a1.5 1.5 0 0 0 2.121 0l.3-.3 1.09.452V18A1.5 1.5 0 0 0 9 19.5h2a1.5 1.5 0 0 0 1.5-1.5v-.423l1.09-.452.3.3a1.5 1.5 0 0 0 2.121 0l1.415-1.414a1.5 1.5 0 0 0 0-2.121l-.3-.3.452-1.09H18a1.5 1.5 0 0 0 1.5-1.5V9A1.5 1.5 0 0 0 18 7.5Zm-8 6a3.5 3.5 0 1 1 0-7 3.5 3.5 0 0 1 0 7Z" />
                                                </svg>
                                                <span class="sr-only">Settings</span>
                                            </button>
                                            <button type="button"
                                                class="p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                                                <svg class="w-4 h-4" aria-hidden="true"
                                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                    viewBox="0 0 20 20">
                                                    <path
                                                        d="M18 2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2ZM2 18V7h6.7l.4-.409A4.309 4.309 0 0 1 15.753 7H18v11H2Z" />
                                                    <path
                                                        d="M8.139 10.411 5.289 13.3A1 1 0 0 0 5 14v2a1 1 0 0 0 1 1h2a1 1 0 0 0 .7-.288l2.886-2.851-3.447-3.45ZM14 8a2.463 2.463 0 0 0-3.484 0l-.971.983 3.468 3.468.987-.971A2.463 2.463 0 0 0 14 8Z" />
                                                </svg>
                                                <span class="sr-only">Timeline</span>
                                            </button>
                                            <button type="button"
                                                class="p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                                                <svg class="w-4 h-4" aria-hidden="true"
                                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                    viewBox="0 0 20 20">
                                                    <path
                                                        d="M14.707 7.793a1 1 0 0 0-1.414 0L11 10.086V1.5a1 1 0 0 0-2 0v8.586L6.707 7.793a1 1 0 1 0-1.414 1.414l4 4a1 1 0 0 0 1.416 0l4-4a1 1 0 0 0-.002-1.414Z" />
                                                    <path
                                                        d="M18 12h-2.55l-2.975 2.975a3.5 3.5 0 0 1-4.95 0L4.55 12H2a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-4a2 2 0 0 0-2-2Zm-3 5a1 1 0 1 1 0-2 1 1 0 0 1 0 2Z" />
                                                </svg>
                                                <span class="sr-only">Download</span>
                                            </button>
                                        </div>
                                    </div>
                                    <button type="button" data-tooltip-target="tooltip-fullscreen"
                                        class="p-2 text-gray-500 rounded cursor-pointer sm:ms-auto hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 19 19">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2"
                                                d="M13 1h5m0 0v5m0-5-5 5M1.979 6V1H7m0 16.042H1.979V12M18 12v5.042h-5M13 12l5 5M2 1l5 5m0 6-5 5" />
                                        </svg>
                                        <span class="sr-only">Full screen</span>
                                    </button>
                                    <div id="tooltip-fullscreen" role="tooltip"
                                        class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                        Show full screen
                                        <div class="tooltip-arrow" data-popper-arrow></div>
                                    </div>
                                </div>
                                <div class="px-4 py-2 bg-white rounded-b-lg dark:bg-gray-800">
                                    <label for="editor" class="sr-only">Publish post</label>
                                    <textarea id="editor" rows="8"
                                        class="block w-full px-0 text-sm text-gray-800 bg-white border-0 dark:bg-gray-800 focus:ring-0 dark:text-white dark:placeholder-gray-400"
                                        placeholder="Write an article..." required></textarea>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>

                <div class="row mb-4">
                    <div class="col-6">
                        <label for="departments"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Departments</label>
                        <select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg
                        focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5
                        dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400
                        dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected>Choose department</option>
                            <option value="US">United States</option>
                            <option value="CA">Canada</option>
                            <option value="FR">France</option>
                            <option value="DE">Germany</option>
                        </select>
                    </div>
                    <div class="col-6">
                        <label for="departments" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Hiring manager
                        </label>
                        <select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg
                        focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5
                        dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400
                        dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected>Choose hiring manager</option>
                            <option value="US">United States</option>
                            <option value="CA">Canada</option>
                            <option value="FR">France</option>
                            <option value="DE">Germany</option>
                        </select>
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="col-6">
                        <label for="departments"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Location</label>
                        <select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg
                        focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5
                        dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400
                        dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected>Choose location</option>
                            <option value="US">United States</option>
                            <option value="CA">Canada</option>
                            <option value="FR">France</option>
                            <option value="DE">Germany</option>
                        </select>
                    </div>
                    <div class="col-6">
                        <label for="departments"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Employment Type</label>
                        <select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg
                        focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5
                        dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400
                        dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected>Choose employment type</option>
                            <option value="US">United States</option>
                            <option value="CA">Canada</option>
                            <option value="FR">France</option>
                            <option value="DE">Germany</option>
                        </select>
                    </div>
                </div>


                <div class="row mb-4">
                    <div class="col-4">
                        <label for="number-input"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Headcount</label>
                        <input type="number" id="number-input" aria-describedby="helper-text-explanation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg
                        focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400
                            dark:text-white dark:focus:ring-blue-500
                            dark:focus:border-blue-500" placeholder="1" required />
                    </div>
                    <div class="col-4">
                        <label for="number-input"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Salary Range</label>

                        <div class="">
                            <input type="number" id="number-input" aria-describedby="helper-text-explanation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg
                            focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400
                                dark:text-white dark:focus:ring-blue-500
                                dark:focus:border-blue-500" placeholder="Max" required />
                        </div>
                    </div>
                    <div class="col-4">
                        <label for="number-input"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Salary Range</label>

                        <div class="">
                            <input type="number" id="number-input" aria-describedby="helper-text-explanation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg
                            focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400
                                dark:text-white dark:focus:ring-blue-500
                                dark:focus:border-blue-500" placeholder="Max" required />
                        </div>
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="col-6">
                        <div class="relative top-0">
                            <label for="number-input"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                Posting Date
                            </label>
                            <div class="absolute inset-y-12 start-0 flex items-center ps-3.5 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                </svg>
                            </div>
                            <input datepicker id="default-datepicker" type="text"
                                class="bg-gray-50 border border-gray-300 text-gray-900 
                                text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500
                                block w-full ps-10 p-2.5 dark:bg-gray-700 dark:border-gray-600
                                dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date">
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="relative top-0">
                            <label for="number-input"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                Application Deadline
                            </label>
                            <div class="absolute inset-y-12 start-0 flex items-center ps-3.5 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                </svg>
                            </div>
                            <input datepicker id="default-datepicker" type="text" class="bg-gray-50 border border-gray-300
                                text-gray-900 text-sm rounded-lg focus:ring-blue-500
                                focus:border-blue-500 block w-full ps-10 p-2.5 dark:bg-gray-700
                                dark:border-gray-600 dark:placeholder-gray-400 dark:text-white
                                dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date">
                        </div>
                    </div>
                </div>
                <div class="row p-3 mb-4 card bg-inherit">
                    <h3 class="block text-lg mb-2 me-4 text-gray-900 dark:text-white">
                        Pre-screening Questions
                    </h3>
                    <div class="mt-2 flex">
                        <div class="flex items-center w-full max-w-md mb-3">
                            <div class="relative w-full mr-3">
                                <select id="question-field" class="bg-gray-50 border
                                border-gray-300 text-gray-900 text-sm rounded-lg
                                focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5
                                dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400
                                    dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option selected value="yesOrNo">Yes or No</option>
                                    <option value="number">Number</option>
                                    <option value="customAnswer">Custom Answer</option>
                                </select>
                            </div>
                            <button type="button" name="add" id="addQuestionBtn" class="text-white bg-gray-700 hover:bg-gray-500 
                                font-medium rounded-lg text-sm w-full sm:w-auto px-5 me-2 py-2.5 text-center">
                                Add
                            </button>
                        </div>
                    </div>
                    <div id="questionContainer" class="row">
                        

                        <!-- <div class="grid grid-cols-2 gap-4 card p-4 mb-2 shadow">
                            <div>
                                <label for="message" class="block mb-2 text-sm font-medium text-gray-900">Question 1</label>
                                <textarea id="message" rows="4" class="block p-2.5
                                    w-full text-sm text-gray-900 bg-gray-50 rounded-lg border"
                                        placeholder="Write your question here..."></textarea>
                            </div>
                            <div>
                                <label for="message" class="block mb-2 text-sm font-medium text-gray-900">Answer</label>
                                <input type="number" id="number-input" aria-describedby="helper-text-explanation"
                                 class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5"
                                placeholder="Enter your answer here" required />
                            </div>
                        </div>
                        
                        <div class="grid grid-cols-2 gap-4 card p-4 mb-2 shadow">
                            <div class="mb-3">
                                <label for="message" class="block mb-2 text-sm font-medium text-gray-900">Question 1</label>
                                <textarea id="message" rows="4" class="block p-2.5
                                    w-full text-sm text-gray-900 bg-gray-50 rounded-lg border"
                                        placeholder="Write your question here..."></textarea>
                            </div>
                            <div class="">
                                <label for="message" class="block mb-2 text-sm font-medium text-gray-900">Answer</label>
                                <textarea id="message" rows="4" class="block p-2.5
                                    w-full text-sm text-gray-900 bg-gray-50 rounded-lg border"
                                        placeholder="Write your question here..."></textarea>
                            </div>
                        </div> -->
                    </div>
                </div>


                <div class="row p-3 card bg-inherit">
                    <h3 class="block text-lg mb-2 me-4 text-gray-900 dark:text-white">
                        Add Custom Field
                    </h3>
                    <div class="mt-2 flex">
                        <div class="flex items-center w-full max-w-md mb-3">
                            <div class="relative w-full mr-3">
                                <select id="custom-field" class="bg-gray-50 border
                                border-gray-300 text-gray-900 text-sm rounded-lg
                                focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5
                                dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400
                                    dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option selected value="text">Text</option>
                                    <option value="number">Number</option>
                                    <option value="date">Date</option>
                                    <option value="money">Money</option>
                                    <option value="file">Attachment</option>
                                </select>
                            </div>
                            <button type="button" name="add" id="addCustomFieldBtn" class="text-white bg-gray-700 hover:bg-gray-500 
                                font-medium rounded-lg text-sm w-full sm:w-auto px-5 me-2 py-2.5 text-center">
                                Add
                            </button>
                        </div>
                    </div>
                    <table class="table border-none" id="customFieldContainer">
                        <tr></tr>
                    </table>
                </div>
            </div>
    </div>

    <div class="mt-2 flex justify-end">
        <a href="{{ route('jobs') }}" class="text-white bg-gray-700 hover:bg-tm-secondary focus:ring-4 focus:outline-none
                    focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 me-2 
                    py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            Cancel
        </a>
        <button type="submit" class="text-white bg-tm-primary hover:bg-tm-secondary focus:ring-4 focus:outline-none
                    focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 
                    py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            Save
        </button>
    </div>

    </form>
</div>
</div>
@endsection

@push('scripts')
    <script type="text/javascript">
        var i = 0;

        $("#addCustomFieldBtn").click(function () {
            ++i;
            var custom_field = $('#custom-field').val();

            var input = '<tr><td><input type="text" name="moreFields['
                + i + '][title]" placeholder="Enter field label" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full" /></td><td><input type="text" name="moreFields['
                + i + '][title]" placeholder="Enter field value" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full" /></td><td><button type="button" class="btn btn-danger remove-tr">Remove</button></td></tr>';

            switch (custom_field) {
                case 'number':
                    input = '<tr><td><input type="text" name="moreFields['
                    + i + '][title]" placeholder="Enter field label" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full" /></td><td><input type="number" name="moreFields['
                    + i + '][title]" placeholder="Enter field value" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full" /></td><td><button type="button" class="btn btn-danger remove-tr">Remove</button></td></tr>';
                    break;

                case 'money':
                    input = '<tr><td><input type="text" name="moreFields['
                    + i + '][title]" placeholder="Enter field label" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full" /></td><td><input type="number" name="moreFields['
                    + i + '][title]" placeholder="Enter field value" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full" /></td><td><button type="button" class="btn btn-danger remove-tr">Remove</button></td></tr>';
                    break;

                case 'date':
                    input = '<tr><td><input type="text" name="moreFields['
                    + i + '][title]" placeholder="Enter field label" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full" /></td><td><input datepicker id="default-datepicker" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full" placeholder="Select date"></td><td><button type="button" class="btn btn-danger remove-tr">Remove</button></td></tr>';
                    break;

                case 'file':
                    input = '<tr><td><input type="text" name="moreFields['
                    + i + '][title]" placeholder="Enter field label" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full" /></td><td><input type="file" name="moreFields['
                    + i + '][title]" placeholder="Enter field value" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full" /></td><td><button type="button" class="btn btn-danger remove-tr">Remove</button></td></tr>';
                    break;

                default:
                    input = input;
            }

            $("#customFieldContainer").append(input);
            //$('#custom-field').val('')
        });

        $(document).on('click', '.remove-tr', function () {
            $(this).parents('tr').remove();
        });  
    </script>
    <script type="text/javascript">
        var i = 0;

        $("#addQuestionBtn").click(function () {
            i = $('.question-section').length + 1;
            var question_field = $('#question-field').val();

            var input = '<div class="question-section card shadow p-4 mb-2"><div class="flex justify-end"><a class="removeQtn" href="javascript:void(0);"><i  class="fas fa-xmark fa-lg"></i></a></div><div class="grid grid-cols-2 gap-4"><div><label for="message" class="block mb-2 text-sm font-medium text-gray-900">Question ' + '<span class="question-number">' + i + '</span>' + '</label><textarea id="message" rows="6" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border" placeholder="Write your question here..."></textarea></div><div><label for="message" class="block mb-2 text-sm font-medium text-gray-900">Answer</label><div class="flex items-center ps-4 border border-gray-200 rounded"><input id="bordered-radio-1" type="radio" value="" name="bordered-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300"><label for="bordered-radio-1" class="w-full py-4 ms-2 text-sm font-medium text-gray-900">Yes</label></div><div class="flex items-center ps-4 border border-gray-200 rounded dark:border-gray-700"><input checked id="bordered-radio-2" type="radio" value="" name="bordered-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300"><label for="bordered-radio-2" class="w-full py-4 ms-2 text-sm font-medium text-gray-900 ">No</label></div></div></div></div>';
            switch (question_field) {
                case 'number':
                    input = '<div class="question-section card shadow p-4 mb-2"><div class="flex justify-end"><a class="removeQtn" href="javascript:void(0);"><i class="fas fa-xmark fa-lg"></i></a></div><div class="grid grid-cols-2 gap-4"><div><label for="message" class="block mb-2 text-sm font-medium text-gray-900">Question ' + '<span class="question-number">' + i + '</span>' +  '</label><textarea id="message" rows="6" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border" placeholder="Write your question here..."></textarea></div><div><label for="message" class="block mb-2 text-sm font-medium text-gray-900">Answer</label><input type="number" id="number-input" aria-describedby="helper-text-explanation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5" placeholder="Enter your answer here" required /></div></div></div>';
                    break;

                case 'customAnswer':
                    input = '<div class="question-section card shadow p-4 mb-2"><div class="flex justify-end"><a class="removeQtn" href="javascript:void(0);"><i class="fas fa-xmark fa-lg"></i></a></div><div class="grid grid-cols-2 gap-4"><div><label for="message" class="block mb-2 text-sm font-medium text-gray-900">Question ' + '<span class="question-number">' + i + '</span>' +  '</label><textarea id="message" rows="6" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border" placeholder="Write your question here..."></textarea></div><div><label for="message" class="block mb-2 text-sm font-medium text-gray-900">Answer</label><input type="text" id="number-input" aria-describedby="helper-text-explanation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5" placeholder="Enter your answer here" required /></div></div></div>';
                    break;

                default:
                    input = input;
            }

            $("#questionContainer").append(input);
            i++;
            return false;
        });

        $(document).on('click', '.removeQtn', function () {
            if (i > 0) {
                var $target = $(this).parents('.question-section');
                $target.hide('slow', function() {
                    $target.remove();
                });
                resetIndexes($('.question-section').length - 1);
            }
            return false;
        });  

        function resetIndexes(indx) {
            var j = 1;
            $('.question-section').each(function() {
                if (j > 1) {
                    $(this).find('.question-number').text(j);
                }
                j++;
            });
            console.log(j);
        }
    </script>
@endpush