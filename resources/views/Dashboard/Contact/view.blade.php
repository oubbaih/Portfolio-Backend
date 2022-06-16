<x-dashboard-master>


    @section('main')
    <div class="col-lg-12 mb-5">
        <div class="card">
            <div class="card-header">
                <i class="fa fa-align-justify"></i>View Message
            </div>
            <div class="card-block">
                <div class="form-group">
                    <label class="form-label">Client Name</label>
                    <input type="text" class="form-control"      disabled value="{{$contact->name}}">
                </div>
                <div class="form-group">
                    <label class="form-label">Client Email</label>
                    <input type="text" class="form-control "    disabled  value="{{$contact->email}}">
                </div>
                <div class="form-group">
                    <label class="form-label">Asked Service</label>
                    <input type="text" class="form-control "    disabled  value="{{$contact->service}}">
                </div>
                <div class="form-group">
                    <label class="form-label">Client Budget</label>
                    <input type="text" class="form-control"      disabled value="{{$contact->budget}}">
                </div>
                <div class="form-group">
                    <label class="form-label">Client Message</label>
                    <textarea class="form-control "    disabled >{{$contact->message}}</textarea>
                </div>
                <div class="form-group">
                    <label class="form-label">client Budget</label>
                    <input type="text" class="form-control"      disabled  value="{{$contact->budget}}">
                </div>


            </div>
        </div>
    </div>


    @endsection


</x-dashboard-master>
