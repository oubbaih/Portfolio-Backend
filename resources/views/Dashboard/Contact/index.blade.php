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
                            <th>Name</th>
                            <th>E-mail</th>
                            <th>Service</th>
                            <th>Budget</th>
                            <th>Message</th>
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
                            ajax: "{{ route('contact.list') }}",
                            columns: [{
                                    data: 'id',
                                    name: 'id'
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
                                    data: 'service',
                                    name: 'service'
                                },
                                {
                                    data: 'budget',
                                    name: 'budget'
                                },
                                {
                                    data: 'message',
                                    name: 'message'
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
