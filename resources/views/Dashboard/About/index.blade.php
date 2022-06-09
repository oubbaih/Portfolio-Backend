
      <x-dashboard-master>
    @section('main')
    <div class="container-fluid">
        <form action="{{route('about.update' , $about)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="card">
                <div class="card-header">
                    <i class="fa fa-align-justify"></i> About Page Settings
                </div>
                <div class="card-block">
                    <div class="form-group">
                        <label for="faviconid" class="form-label">Slider Images</label>
                        <input type="file" name="images[]" class="form-control-file" multiple='multiple'>
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
                                <label for="inputPassword5">Present Title</label>
                                <input   @if ($key === 'ar')
                                    dir="rtl"
                                @endif   type="text" id="inputtext" class="form-control" aria-describedby="textHelpBlock"
                                    name="{{$key}}[present_title]" value="{{$about->translate($key)->present_title }}">
                            </div>
                            <div class="form-group">
                                <label for="inputPassword5">Present Description  </label>
                                <textarea  @if ($key === 'ar')
                                    dir="rtl"
                                @endif type="text" id="inputtext" class="form-control" aria-describedby="textHelpBlock"
                                    name="{{$key}}[present_des]" >{{$about->translate($key)->present_des }}
                                </textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Tools</label>
                                <input  @if ($key === 'ar')
                                    dir="rtl"
                                @endif class="form-control"   value="{{$about->translate($key)->tools}}" name="{{$key}}[tools]" id="exampleFormControlTextarea1" />
                            </div>
                            <div class="form-group">
                                <label for="inputPassword5">Services </label>
                                <input   @if ($key === 'ar')
                                    dir="rtl"
                                @endif  type="text" id="inputtext" class="form-control" aria-describedby="textHelpBlock"
                                    name="{{$key}}[services]" value="{{$about->translate($key)->services}}">
                            </div>
                            <div class="form-group">
                                <label for="inputPassword5">Experience Title </label>
                                <input   @if ($key === 'ar')
                                    dir="rtl"
                                @endif  type="text" id="inputtext" class="form-control" aria-describedby="textHelpBlock"
                                    name="{{$key}}[experience_title]" value="{{$about->translate($key)->experience_title}}">
                            </div>
                            <div class="form-group">
                                <label for="inputPassword5">Experience Description </label>
                                <textarea   @if ($key === 'ar')
                                    dir="rtl"
                                @endif  type="text" id="inputtext" class="form-control" aria-describedby="textHelpBlock"
                                    name="{{$key}}[experience_des]" >{{$about->translate($key)->experience_des}}
                                  </textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Update</button>
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

