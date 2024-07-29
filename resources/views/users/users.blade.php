<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{ URL::asset('/favicon.ico') }}" type="image/x-icon"/>

    <title>{{ config('app.name', 'Teemwork') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>

    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.0.3/css/buttons.dataTables.min.css">
    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">

    @vite(['resources/sass/app.scss', 'resources/js/app.js', 'resources/css/app.css', 'resources/css/style.css'])
</head>

<body>
    <div class="min-h-full">
        @include('layouts._shared.navbar')
        @include('layouts._shared.sidebar')

        <div class="p-6 mt-4 sm:ml-64">
            <main class="py-4">
                <div class="container-fluid mt-5">
                    <div class="flex items-center justify-between rtl:justify-end">
                        <h1 class="text-3xl mb-4">User Management</h1>
                        <a href="{{ route('create-user')}}" type="button" class="text-white bg-tm-primary hover:bg-tm-secondary focus:ring-4
                         focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2.5 me-2 mb-2">
                            <i class="fas fa-plus"></i>
                            Add new user
                        </a>
                    </div>
                    <table class="table mt-4" id="users-table">
                        <thead>
                            <th> # </th>
                            <th> Name </th>
                            <th> Action </th>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </main>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.0.js"
        integrity="sha256-r/AaFHrszJtwpe+tHyNi/XCfMxYpbsRg2Uqn0x3s2zc=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
        </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
        </script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.4/js/dataTables.buttons.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            var userView = '';
            var table = $('#users-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('users') }}",
                columns: [{
                    data: 'DT_RowIndex',
                    name: 'DT_RowIndex'
                },
                {
                    data: 'name',
                    name: 'name'
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
                        var $name = full['name'];
                        var $email = full['email'];

                        // For Avatar badge
                        var stateNum = Math.floor(Math.random() * 6);
                        var states = ['success', 'danger', 'warning', 'info', 'dark', 'primary', 'secondary'];
                        var $state = states[stateNum],
                            $name = full['name'],
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
                            userView +
                            '" class="text-body text-truncate"><span class="fw-medium">' +
                            $name +
                            '</span></a>' + '</div>' +
                            '<div class="text-sm text-gray-500 dark:text-gray-400">' + $email + '</div>' +
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
                            '<a href="/users/' + full['id']  +'/edit"  class="text-white bg-tm-primary hover:bg-tm-secondary focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-3 py-2.5 text-center mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"><i class="fas fa-pencil me-1"></i>Edit</a>' +
                            '<button type="button" class="text-white bg-red-700 hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-red-300 font-medium rounded-full text-sm px-3 py-2.5 text-center mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900"><i class="fas fa-trash me-1"></i>Delete</button></div>');
                    }
                }
                ],

            });
        });
    </script>
</body>

</html>