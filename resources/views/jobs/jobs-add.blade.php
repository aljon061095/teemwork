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
                        <label for="name"
                            class="block mb-2 text-sm font-medium text-gray-900">
                            Title
                        </label>
                        <input type="text" id="title"
                            name="title"
                            class="bg-gray-50 border
                            border-gray-300 text-gray-900 text-sm rounded-lg
                            block w-full p-2.5"
                            placeholder="e.g. Accountant" 
                            required />
                    </div>

                    <div class="col-6">
                        <label for="company" 
                            class="block mb-2 text-sm font-medium text-gray-900">
                            Company
                        </label>
                        <input type="text" id="company"
                            name="company"
                            class="bg-gray-50 border
                            border-gray-300 text-gray-900 text-sm rounded-lg
                            block w-full p-2.5"
                            placeholder="Teemwork" required />
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="col-12">
                        <label for="description" 
                            class="block mb-2 text-sm font-medium text-gray-900">
                            Job Description
                        </label>
                        <textarea id="job_description" name="description" rows="6"
                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border"
                            placeholder="Write your job description here..."></textarea>
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="col-6">
                        <label for="departments"
                            class="block mb-2 text-sm font-medium text-gray-900">
                            Departments
                        </label>
                        <select id="department" name="department" 
                            class="livesearch form-control bg-gray-50 border border-gray-300">
                        </select>
                    </div>

                    <div class="col-6">
                        <label for="hiring_manager" 
                            class="block mb-2 text-sm font-medium text-gray-900">
                            Hiring manager
                        </label>
                        <select id="hiring_manager" name="hiring_manager" 
                            class="livesearch form-control bg-gray-50 border border-gray-300">
                        </select>
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="col-6">
                        <label for="location"
                            class="block mb-2 text-sm font-medium text-gray-900">
                            Location
                        </label>
                        <select id="location" name="location" 
                            class="livesearch form-control bg-gray-50 border border-gray-300">
                        </select>
                    </div>
                    <div class="col-6">
                        <label for="employment_types"
                            class="block mb-2 text-sm font-medium text-gray-900">
                            Employment Type
                        </label>
                        <select id="employment-type" name="employment_type" 
                            class="livesearch form-control bg-gray-50 border border-gray-300">
                        </select>
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="col-4">
                        <label for="number-input"
                            class="block mb-2 text-sm font-medium text-gray-900">
                            Headcount
                        </label>
                        <input type="number" 
                            id="head-count"
                            name="head_count" 
                            class="bg-gray-50 border
                            border-gray-300 text-gray-900 text-sm rounded-lg
                            block w-full p-2.5"
                            placeholder="1" required />
                    </div>

                    <div class="col-4">
                        <label for="number-input"
                            class="block mb-2 text-sm font-medium text-gray-900">
                            Salary Range
                        </label>
                        <div class="">
                            <input type="number" id="number-input"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg
                            block w-full p-2.5"
                            placeholder="Min" required />
                        </div>
                    </div>

                    <div class="col-4 mt-1">
                        <div class="mt-4">
                            <input type="number" id="number-input" 
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg
                            focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                            placeholder="Max" required />
                        </div>
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="col-6">
                        <label for="number-input"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Posting Date
                        </label>
                        <div class="relative">
                            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                                </svg>
                            </div>
                            <input id="datepicker-autohide" datepicker datepicker-autohide type="text" 
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg
                            focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5 
                            dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400
                            dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" 
                            placeholder="Select date">
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="top-0">
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
                        <!-- <div class="question-section card shadow p-4 mb-2">
                            <div class="flex justify-end"><a class="removeQtn" href="javascript:void(0);"><i
                                        class="fas fa-xmark fa-lg"></i></a></div>
                            <div class="grid grid-cols-2 gap-4">
                                <div><label for="message" class="block mb-2 text-sm font-medium text-gray-900">
                                        Question 1
                                    </label><textarea id="message" rows="6"
                                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border"
                                        placeholder="Write your question here..."></textarea></div>
                                <div><label for="message"
                                        class="block mb-2 text-sm font-medium text-gray-900">Answer</label><input
                                        type="number" id="number-input" aria-describedby="helper-text-explanation"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5"
                                        placeholder="Enter your answer here" required /></div>
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
        <a href="{{ route('jobs') }}" class="text-white bg-gray-700 hover:bg-tm-secondary font-medium rounded-lg text-base w-full sm:w-auto px-6 py-3.5 me-2 
                    text-center">
            Cancel
        </a>
        <button type="submit" class="text-white bg-tm-primary hover:bg-tm-secondary font-medium rounded-lg text-base w-full sm:w-auto px-6 py-3.5 
                    text-center">
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
        });

        $(document).on('click', '.remove-tr', function () {
            $(this).parents('tr').remove();
        });  
    </script>

    <script type="text/javascript">
        var index = 0;

        $("#addQuestionBtn").click(function () {
            index = $('.parent-container .question-section').length + 1;
            var question_field = $('#question-field').val();

            var input = '<div class="parent-container"><div class="question-section card shadow p-4 mb-2"><div class="flex justify-end"><a class="removeQtn" href="javascript:void(0);"><i  class="fas fa-xmark fa-lg"></i></a></div><div class="grid grid-cols-2 gap-4"><div><label for="message" class="block mb-2 text-sm font-medium text-gray-900">Question ' + '<span class="question-number">' + index + '</span>' + '</label><textarea id="message" rows="6" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border" placeholder="Write your question here..."></textarea></div><div><label for="message" class="block mb-2 text-sm font-medium text-gray-900">Answer</label><div class="flex items-center ps-4 border border-gray-200 rounded"><input id="bordered-radio-1" type="radio" value="" name="bordered-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300"><label for="bordered-radio-1" class="w-full py-4 ms-2 text-sm font-medium text-gray-900">Yes</label></div><div class="flex items-center ps-4 border border-gray-200 rounded dark:border-gray-700"><input checked id="bordered-radio-2" type="radio" value="" name="bordered-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300"><label for="bordered-radio-2" class="w-full py-4 ms-2 text-sm font-medium text-gray-900 ">No</label></div></div></div></div></div>';
            switch (question_field) {
                case 'number':
                    input = '<div class="parent-container"><div class="question-section card shadow p-4 mb-2"><div class="flex justify-end"><a class="removeQtn" href="javascript:void(0);"><i class="fas fa-xmark fa-lg"></i></a></div><div class="grid grid-cols-2 gap-4"><div><label for="message" class="block mb-2 text-sm font-medium text-gray-900">Question ' + '<span class="question-number">' + index + '</span>' + '</label><textarea id="message" rows="6" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border" placeholder="Write your question here..."></textarea></div><div><label for="message" class="block mb-2 text-sm font-medium text-gray-900">Answer</label><input type="number" id="number-input" aria-describedby="helper-text-explanation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5" placeholder="Enter your answer here" required /></div></div></div></div>';
                    break;

                case 'customAnswer':
                    input = '<div class="parent-container"><div class="question-section card shadow p-4 mb-2"><div class="flex justify-end"><a class="removeQtn" href="javascript:void(0);"><i class="fas fa-xmark fa-lg"></i></a></div><div class="grid grid-cols-2 gap-4"><div><label for="message" class="block mb-2 text-sm font-medium text-gray-900">Question ' + '<span class="question-number">' + index + '</span>' + '</label><textarea id="message" rows="6" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border" placeholder="Write your question here..."></textarea></div><div><label for="message" class="block mb-2 text-sm font-medium text-gray-900">Answer</label><input type="text" id="number-input" aria-describedby="helper-text-explanation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5" placeholder="Enter your answer here" required /></div></div></div></div>';
                    break;

                default:
                    input = input;
            }

            $("#questionContainer").append(input);
            index++;
        });

        $(document).on('click', '.removeQtn', function (e) {
            e.stopPropagation();
            if (index > 1) {
                var $target = $(this).parents('.parent-container');
                $target.hide('slow', function () {
                    $target.remove();
                });
                resetIndexes();
            }
        });

        function resetIndexes() {
            var j = 0;
            $('.question-section').each(function () {
                if (j > 0) {
                    console.log(j, "j");
                    $(this).find('.question-number').text(j);
                }
                j++;
            });
        }
    </script>

    <!-- Load all select2 dropdown here -->
    <script type="text/javascript">
        $('#department').select2({
            tags: true,
            createTag: function (params) {
                return {
                    id: 0,
                    text: params.term,
                    newOption: true
                }
            },
            placeholder: 'Choose department',
            ajax: {
                url: '/get-departments',
                dataType: 'json',
                delay: 250,
                processResults: function (data) {
                    return {
                        results: $.map(data, function (item) {
                            return {
                                text: item.name,
                                id: item.id
                            }
                        })
                    };
                },
                cache: true
            }
        }).on('select2:select', function (e) {
            var data = e.params.data;
            console.log(e.params);
        });

        $('#hiring_manager').select2({
            tags: true,
            createTag: function (params) {
                return {
                    id: 0,
                    text: params.term,
                    newOption: true
                }
            },
            placeholder: 'Choose hiring manager',
            ajax: {
                url: '/get-hiring-managers',
                dataType: 'json',
                delay: 250,
                processResults: function (data) {
                    return {
                        results: $.map(data, function (item) {
                            return {
                                text: item.name,
                                id: item.id
                            }
                        })
                    };
                },
                cache: true
            }
        }).on('select2:select', function (e) {
            var data = e.params.data;
            console.log(e.params);
        });

        $('#location').select2({
            tags: true,
            createTag: function (params) {
                return {
                    id: 0,
                    text: params.term,
                    newOption: true
                }
            },
            placeholder: 'Choose location',
            ajax: {
                url: '/get-locations',
                dataType: 'json',
                delay: 250,
                processResults: function (data) {
                    return {
                        results: $.map(data, function (item) {
                            return {
                                text: item.name,
                                id: item.id
                            }
                        })
                    };
                },
                cache: true
            }
        }).on('select2:select', function (e) {
            var data = e.params.data;
            console.log(e.params);
        });

        $('#employment-type').select2({
            tags: true,
            createTag: function (params) {
                return {
                    id: 0,
                    text: params.term,
                    newOption: true
                }
            },
            placeholder: 'Choose employment type',
            ajax: {
                url: '/get-employment-types',
                dataType: 'json',
                delay: 250,
                processResults: function (data) {
                    return {
                        results: $.map(data, function (item) {
                            return {
                                text: item.name,
                                id: item.id
                            }
                        })
                    };
                },
                cache: true
            }
        }).on('select2:select', function (e) {
            var data = e.params.data;
            console.log(e.params);
        });

    </script>

    <script type="text/javascript">
        $('.datepicker').removeClass('top-0');
    </script>
@endpush