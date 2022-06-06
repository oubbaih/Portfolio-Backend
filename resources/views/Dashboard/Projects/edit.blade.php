<x-dashboard-master>
    @section('main')
    <div class="container-fluid">
        <form action="{{route('project.update' , $project)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="card">
                <div class="card-header">
                    <i class="fa fa-align-justify"></i> Create Project
                </div>
            
                <div class="card-block">


                    <div class="form-group">
                        <label for="faviconid" class="form-label">Multiple Images</label>
                        <input type="file" name="filename[]" class="form-control-file"  multiple="multiple">
                    </div>
                    <div class="form-group">
                        <label for="faviconid" class="form-label">Year Of Project Creation</label>
                        <input type="text" name="year"  class="form-control" aria-describedby="textHelpBlock" value="{{$project->year}}">
                    </div>
                </div>
                <div class="card-block">
                    <hr>
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        @foreach (config('app.languages') as $key => $value)
                        <li class="nav-item" role="presentation">
                            <a class="nav-link  @if ($loop->index === 0)
                             active
                        @endif" id="pills-home-tab" data-toggle="pill" href="#{{$key}}" role="tab"
                                aria-controls="pills-home" aria-selected="true">{{$value}}</a>
                        </li>
                        @endforeach

                    </ul>
                    <input type="hidden" name="author" value="1">
                    <div class="tab-content" id="pills-tabContent">
                        @foreach (config('app.languages') as $key=>$lang)
                        <div class="tab-pane  show @if ($loop->index === 0)
                          active
                      @endif " id="{{$key}}" role="tabpanel" aria-labelledby="pills-home-tab">
                            <div class="form-group">
                                <label for="inputPassword5">Case Study</label>
                                <input   @if ($key === 'ar')
                                    dir="rtl"
                                @endif   type="text" id="inputtext" class="form-control" aria-describedby="textHelpBlock"
                                    name="{{$key}}[casestudy]" value="{{$project->translate($key)->casestudy}}" >
                            </div>
                            <div class="form-group">
                                <label for="inputPassword5">My Role</label>
                                <input  @if ($key === 'ar')
                                    dir="rtl"
                                @endif type="text" id="inputtext" class="form-control" aria-describedby="textHelpBlock"
                                    name="{{$key}}[myrole]" value="{{$project->translate($key)->myrole}}" >
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Description</label>
                                <textarea  @if ($key === 'ar')
                                    dir="rtl"
                                @endif class="form-control"  name="{{$key}}[description]" id="exampleFormControlTextarea1" rows="3">
                              {{$project->translate($key)->description}}
                              </textarea>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword5">Client Name</label>
                                <input   @if ($key === 'ar')
                                    dir="rtl"
                                @endif  type="text" id="inputtext" class="form-control" aria-describedby="textHelpBlock"
                                    name="{{$key}}[client]" value="{{$project->translate($key)->client}}">
                            </div>
                            <div class="form-group">
                                <label for="inputPassword5">Agency Name </label>
                                <input   @if ($key === 'ar')
                                    dir="rtl"
                                @endif  type="text" id="inputtext" class="form-control" aria-describedby="textHelpBlock"
                                    name="{{$key}}[agencyname]" value="{{$project->translate($key)->agencyname}}">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Create Project</button>
                            </div>
                        </div>

                        @endforeach
                    </div>
                </div>
            </div>
    </div>
    </form>
    </div>
    @endsection
</x-dashboard-master>
