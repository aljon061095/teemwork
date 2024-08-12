@extends('layouts.page')

<!--Title of the page-->
@section('title', 'Job Details')

@section('page')
<div class="container-fluid mt-5">
    <div class="lg:flex lg:items-center lg:justify-between">
        <div class="min-w-0 flex-1">
            <h2 class="text-3xl font-bold leading-7
                sm:truncate sm:text-3xl sm:tracking-tight">
               {{ $job->title }}
            </h2>
            <div class="mt-2 flex flex-col sm:mt-0 sm:flex-row sm:flex-wrap sm:space-x-6">
                <div class="mt-2 me-3 flex items-center text-sm text-gray-500">
                    <i class="fas fa-briefcase me-1"></i>
                    Full-time
                </div>
                <div class="mt-2 me-3 flex items-center text-sm text-gray-500">
                    <i class="fas fa-location-dot me-1"></i>
                    Remote
                </div>
                <div class="mt-2 me-3 flex items-center text-sm text-gray-500">
                    <i class="fas fa-dollar-sign me-1"></i>
                    120k &ndash; 140k
                </div>
                <div class="mt-2 me-3 flex items-center text-sm text-gray-500">
                    <i class="fas fa-calendar me-1"></i>
                    Closing on January 9, 2020
                </div>
            </div>
        </div>
        <div class="mt-2 flex lg:ml-4 lg:mt-0">
            <span class="sm:block">
                <a href="{{ route('edit-job', ['id' => $job->id]) }}" class="inline-flex items-center rounded-md text-white
                    bg-tm-primary px-3 py-2 text-sm font-semibold
                    shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-tm-secondary">
                    <i class="fas fa-pencil me-1"></i>
                    Edit
                </a>
            </span>
        </div>
    </div>

    <div class="row mt-4">
        <div class="border-t border-gray-100">
            <div class="divide-gray-100 grid grid-cols-2">
                <div class="px-2 py-4 sm:grid sm:grid-cols-2 sm:px-0">
                    <div class="text-base font-medium leading-6 text-gray-900">Company</div>
                    <div class="mt-1 text-sm leading-6 text-gray-600 sm:col-span-2 sm:mt-0">{{ $job->company }}</div>
                </div>
                <div class="px-2 py-4 sm:grid sm:grid-cols-2 sm:px-0">
                    <dt class="text-base font-medium leading-6 text-gray-900">Hiring Manager</dt>
                    <dd class="mt-1 text-sm leading-6 text-gray-600 sm:col-span-2 sm:mt-0">{{ $job->hiring_manager ? $job->hiring_manager : 'No hiring manager indicated' }}</dd>
                </div>

            </div>
        </div>

        <div class="px-4 py-6 sm:px-0">
            <h3 class="text-xl font-semibold leading-7 text-gray-900">About the Job</h3>
            <p class="mt-1 text-sm leading-6 text-gray-500">
                {{ $job->description }}
            </p>
        </div>


        <section class="bg-white dark:bg-gray-900">
            <div class="py-2 px-2 mx-auto sm:py-16 lg:px-6">
                <h3 class="text-xl font-semibold leading-7 text-gray-900 mb-2">Screening questions</h3>
                <div class="grid pt-4 border-t text-left border-gray-200 md:gap-16 dark:border-gray-700 md:grid-cols-2">
                    <div class="me-4">
                        <div class="mb-4">
                            <h3 class="flex items-center mb-2 text-lg font-medium text-gray-900 dark:text-white">
                                <i class="fas fa-circle-question me-2"></i>
                                What do you mean by "Figma assets"?
                            </h3>
                            <p class="text-gray-500 dark:text-gray-400">
                                You will have access to download the full Figma
                                project including all of the pages, the components, responsive pages, and also the
                                icons, illustrations, and images included in the screens.
                            </p>
                        </div>
                        <div class="mb-4">
                            <h3 class="flex items-center mb-2 text-lg font-medium text-gray-900 dark:text-white">
                                <i class="fas fa-circle-question me-2"></i>
                                What does "lifetime access" exactly mean?
                            </h3>
                            <p class="text-gray-500 dark:text-gray-400">Once you have purchased either the design, code,
                                or both packages, you will have access to all of the future updates based on the
                                roadmap, free of charge.</p>
                        </div>
                        <div class="mb-4">
                            <h3 class="flex items-center mb-2 text-lg font-medium text-gray-900 dark:text-white">
                                <i class="fas fa-circle-question me-2"></i>
                                How does support work?
                            </h3>
                            <p class="text-gray-500 dark:text-gray-400">We're aware of the importance of well qualified
                                support, that is why we decided that support will only be provided by the authors that
                                actually worked on this project.</p>
                            <p class="text-gray-500 dark:text-gray-400">Feel free to <a href="#"
                                    class="font-medium underline text-primary-600 dark:text-primary-500 hover:no-underline"
                                    target="_blank" rel="noreferrer">contact us</a> and we'll help you out as soon as we
                                can.
                            </p>
                        </div>
                    </div>
                    <div class="me-4">
                        <div class="mb-4">
                            <h3 class="flex items-center mb-2 text-lg font-medium text-gray-900 dark:text-white">
                                <i class="fas fa-circle-question me-2"></i>
                                What does "free updates" include?
                            </h3>
                            <p class="text-gray-500 dark:text-gray-400">The free updates that will be provided is based
                                on the <a href="#"
                                    class="font-medium underline text-primary-600 dark:text-primary-500 hover:no-underline">roadmap</a>
                                that we have laid out for this project. It is also possible that we will provide extra
                                updates outside of the roadmap as well.</p>
                        </div>
                        <div class="mb-4">
                            <h3 class="flex items-center mb-2 text-lg font-medium text-gray-900 dark:text-white">
                                <i class="fas fa-circle-question me-2"></i>
                                What does the free version include?
                            </h3>
                            <p class="text-gray-500 dark:text-gray-400">The <a href="#"
                                    class="font-medium underline text-primary-600 dark:text-primary-500 hover:no-underline">free
                                    version</a> of Windster includes a minimal style guidelines, component variants, and
                                a dashboard page with the mobile version alongside it.</p>
                            <p class="text-gray-500 dark:text-gray-400">You can use this version for any purposes,
                                because it is open-source under the MIT license.</p>
                        </div>
                        <div class="mb-4">
                            <h3 class="flex items-center mb-2 text-lg font-medium text-gray-900 dark:text-white">
                                <i class="fas fa-circle-question me-2"></i>
                                What is the difference between Windster and Tailwind UI?
                            </h3>
                            <p class="text-gray-500 dark:text-gray-400">Although both Windster and Tailwind UI are built
                                for integration with Tailwind CSS, the main difference is in the design, the pages, the
                                extra components and UI elements that Windster includes.</p>
                            <p class="text-gray-500 dark:text-gray-400">Additionally, Windster is a project that is
                                still in development, and later it will include both the application, marketing, and
                                e-commerce UI interfaces.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>


</div>
@endsection

@push('scripts')
@endpush