@extends('layouts.page')

<!--Title of the page-->
@section('title', 'Job Posting')

@section('page')
<div class="container-fluid mt-5">
    @if(session('message'))
    <div id="toast-default" class="flex items-center z-50 
        w-full max-w-xs p-3 bg-white rounded-lg shadow fixed top-5 right-4" role="alert">
        <div class="ms-3 text-sm font-normal">
            {{ session('message') }}
        </div>
        <button type="button" class="ms-auto -mx-1.5 -my-1.5
            bg-white text-gray-400 hover:text-gray-900 
            rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5
            hover:bg-gray-100 inline-flex items-center justify-center
            h-8 w-8"
            data-dismiss-target="#toast-default" aria-label="Close">
            <span class="sr-only">Close</span>
            <span class="fas fa-close"></span>
        </button>
    </div>
    @endif
    <div class="flex items-center justify-between rtl:justify-end">
        <h1 class="text-3xl mb-4">Job Posting</h1>
        <a href="{{ route('create-job')}}" 
            type="button" class="text-white bg-tm-primary hover:bg-tm-secondary
            font-medium rounded-lg text-sm px-4 py-2.5 me-2 mb-2">
            <i class="fas fa-plus"></i>
            Add new job
        </a>
    </div>
    <table class="table mt-4" id="jobs-table">
        <thead>
            <th> # </th>
            <th> Title </th>
            <th> Action </th>
        </thead>
        <tbody>
        </tbody>
    </table>
</div>
@endsection

@push('scripts')
    <script type="text/javascript">
        $(document).ready(function () {
            var userView = '';
            var table = $('#jobs-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('jobs') }}",
                columns: [{
                    data: 'DT_RowIndex',
                    name: 'DT_RowIndex'
                },
                {
                    data: 'title',
                    name: 'title'
                },
                {
                    data: 'action',
                    name: 'action',
                    orderable: false,
                    searchable: false,
                }
                ],
                language: {
                    processing: '<i class="fas fa-spinner fa-spin fa-3x fa-fw"></i>'
                },
                dom: 'Blfrtip',
                buttons: [
                    'copy', 'excel',
                ],
                columnDefs: [{
                    // User full name
                    targets: 1,
                    responsivePriority: 4,
                    render: function (data, type, full, meta) {
                        var $name = full['title'];
                        var $company = full['company'];

                        // For Avatar badge
                        var stateNum = Math.floor(Math.random() * 6);
                        var states = ['success', 'danger', 'warning', 'info', 'dark', 'primary', 'secondary'];
                        var $state = states[stateNum],
                            $name = full['title'],
                            $initials = $name.match(/\b\w/g) || [],
                            $output;
                        $initials = (($initials.shift() || '') + ($initials.pop() || '')).toUpperCase();
                        $output = '<span class="font-medium text-gray-600 dark:text-gray-300">' + $initials + '</span>';

                        var $row_output = '<div class="flex items-center gap-4">' +
                            '<div class="relative inline-flex items-center justify-center w-10 h-10 overflow-hidden bg-gray-100 rounded-full dark:bg-gray-600">' +
                            '<span class="font-medium text-gray-600 dark:text-gray-300">' + $initials + '</span>' +
                            '</div>' +
                            '<div class="font-medium dark:text-white">' +
                            '<div>' +
                            '<a href="' +
                            'jobs/' + full['id'] + '/details' +
                            '" class="text-body text-truncate"><span class="fw-medium">' +
                            $name +
                            '</span></a>' + '</div>' +
                            '<div class="text-sm text-gray-500 dark:text-gray-400">' + $company + '</div>' +
                            '</div>' + '</div>';

                        return $row_output;
                    }
                },
                {
                    // Actions
                    targets: -1,
                    title: 'Actions',
                    searchable: false,
                    orderable: false,
                    render: function (data, type, full, meta) {
                        return ('<div class="flex space-x-2 mt-2">' +
                            '<a href="/users/' + full['id'] + '/edit"  class="text-white bg-tm-primary hover:bg-tm-secondary focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-3 py-2.5 text-center mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"><i class="fas fa-pencil me-1"></i>Edit</a>' +
                            '<button type="button" class="text-white bg-red-700 hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-red-300 font-medium rounded-full text-sm px-3 py-2.5 text-center mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900 delete-item"><i class="fas fa-trash me-1"></i>Delete</button></div>');
                    }
                }
                ],

            });

            $(document).on('click', '.delete-item', function(e) {
                var item = $(e.currentTarget).data('name');
                var id = $(e.currentTarget).data('id');
                Swal.fire({
                    title: 'Do you want to delete this ' + item + '?',
                    showCancelButton: true,
                    confirmButtonText: 'Yes',
                    }).then((result) => {
                    if (result.isConfirmed) {
                        //add the delete method here
                        $.ajax({
                            data: id,
                            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                            url: "/jobs/" + id + "/delete",
                            type: 'DELETE',
                            success: function(result) {
                                Swal.fire('Successfully deleted!', '', 'success')
                            }
                        });
                    } 
                })
            });
        });
    </script>
@endpush