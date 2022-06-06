<x-dashboard-master>
    @section('styles')
    <link rel="stylesheet" href="{{asset('css/dataTables.min.css')}}">
    @endsection

    @section('main')
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <i class="fa fa-align-justify"></i>Projects Index Page
            </div>
            <div class="card-block">
                <table class="table-bordered table-striped table-condensed table" id="example">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Year</th>
                            <th>Case Study</th>
                            <th>My Role</th>
                            <th>Client</th>
                            <th>Description</th>
                            <th>Agency Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
                @endsection
                @section('scripts')
                <script src="{{asset('js/jquery.dataTables.min.js')}}"></script>
                <script type="text/javascript">
                    $(function () {

                        $('#example').dataTable({
                            processing: true,
                            serverSide: true,
                            order: [
                                [0, "desc"]
                            ],
                            ajax: "{{ route('project.list') }}",
                            columns: [{
                                    data: 'id',
                                    name: 'id'
                                },
                                {
                                    data: 'year',
                                    name: 'year'
                                },
                                {
                                    data: 'casestudy',
                                    name: 'casestudy'
                                },
                                {
                                    data: 'myrole',
                                    name: 'myrole'
                                },
                                {
                                    data: 'client',
                                    name: 'client'
                                },
                                {
                                    data: 'description',
                                    name: 'description'
                                },
                                {
                                    data: 'agencyname',
                                    name: 'agencyname'
                                },
                                {
                                    data: 'action',
                                    name: 'action',
                                },
                            ]
                        });

                    });

                </script>
                @endsection


</x-dashboard-master>
