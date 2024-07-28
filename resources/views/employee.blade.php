<!doctype html>
<html lang="en">

<head>
    <title>Teemwork</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>

<body>
    <div class="container-fluid mt-5">
        <h3 class="text-center font-weight-bold">Employees</h3>
        <table class="table mt-4" id="employees-table">
            <thead>
                <th> # </th>
                <th> Name </th>
                <th> Gender </th>
                <th> Email </th>
                <th> Phone </th>
                <th> Action </th>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.0.js" integrity="sha256-r/AaFHrszJtwpe+tHyNi/XCfMxYpbsRg2Uqn0x3s2zc="
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            var userView = '';
            var table = $('#employees-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('employees') }}",
                columns: [{
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex'
                    },
                    {
                        data: 'name',
                        name: 'name'
                    },
                    {
                        data: 'gender',
                        name: 'gender'
                    },
                    {
                        data: 'email',
                        name: 'email'
                    },
                    {
                        data: 'phone_number',
                        name: 'phone_number'
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false,
                    }
                ],
                columnDefs: [{
                        // User full name
                        targets: 1,
                        responsivePriority: 4,
                        render: function(data, type, full, meta) {
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
                            $output = '<span class="font-medium text-gray-600 dark:text-gray-300">'+ $initials +'</span>';

                            var $row_output = '<div class="flex items-center gap-4">' + 
                            '<div class="relative inline-flex items-center justify-center w-10 h-10 overflow-hidden bg-gray-100 rounded-full dark:bg-gray-600">' +  
                            '<span class="font-medium text-gray-600 dark:text-gray-300">'+ $initials  + '</span>' +
                            '</div>' + 
                            '<div class="font-medium dark:text-white">' + 
                            '<div>' +
                                    '<a href="' +
                                userView +
                                '" class="text-body text-truncate"><span class="fw-medium">' +
                                $name +
                                '</span></a>' + '</div>' +
                            '<div class="text-sm text-gray-500 dark:text-gray-400">'+ $email + '</div>' + 
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
                        render: function(data, type, full, meta) {
                            return('<div class="flex space-x-2 mt-2">' + 
                            '<button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-3 py-2.5 text-center mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"><i class="fas fa-pencil me-1"></i>Edit</button>'+ 
                             '<button type="button" class="text-white bg-red-700 hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-red-300 font-medium rounded-full text-sm px-3 py-2.5 text-center mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900"><i class="fas fa-trash me-1"></i>Delete</button></div>');
                        }
                    }
                ],
            });
        });
    </script>
</body>

</html>