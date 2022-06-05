<x-dashboard-master>
    @section('main')
    <h1>Project Section</h1>
    @endsection

    <table class="table table-bordered yajra-datatable">
        <thead>
            <tr>
                <th>ID</th>
                <th>Case Study</th>
                <th>Client</th>
                <th>Year</th>
                <th>Description</th>
                <th>Agency Name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>

    @section('scripts')
    <link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet">

    <link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
    <script type="text/javascript">
        $(function () {

            var table = $('.yajra-datatable').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('project.list') }}",
                columns: [{
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex'
                    },
                    {
                        data: 'name',
                        name: 'name'
                    },
                    {
                        data: 'email',
                        name: 'email'
                    },
                    {
                        data: 'username',
                        name: 'username'
                    },
                    {
                        data: 'phone',
                        name: 'phone'
                    },
                    {
                        data: 'dob',
                        name: 'dob'
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: true,
                        searchable: true
                    },
                ]
            });

        });

    </script>
    @endsection


</x-dashboard-master>
