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






                {{-- Model Setup  --}}
                <div class="modal fade" id="contactBTN" data-backdrop="static" data-keyboard="false" tabindex="-1"
                    aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <form action="{{route('conatct.delete')}}" method="post">
                                @csrf
                                @method('DELETE')
                                <input type="hidden" name="id_use" id="id-name">
                                <p style="padding:2rem; text-align:center; font-size:2rem; text-transform:capitalize;">
                                    Are You Sure Want To Delete User</p>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
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
                            ajax: { 
                                "url": "{{ route('contact.list') }}",
                                "dataSrc" : "",
                            },
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

                    function clickFinc() {
                        let element = document.getElementById('deleteBtn');
                        let id = element.getAttribute('data-id');
                        let inputHiddenId = document.getElementById('id-name');
                        inputHiddenId.value = id;

                    }

                </script>
                @endsection


</x-dashboard-master>
