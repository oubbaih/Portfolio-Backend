<x-dashboard-master>
    @section('main')
    <div class="container-fluid">
        <form action="{{route('setting.update' , $setting)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="card">
                <div class="card-header">
                    <i class="fa fa-align-justify"></i> Settings
                </div>
                <img src="{{asset($setting->favicon)}}" class="setting-img" alt="">
                <div class="card-block">
                    <div class="form-group">
                        <label for="faviconid" class="form-label">FavIcon</label>
                        <input type="file" name="favicon" class="form-control-file">
                    </div>
                    <img src="{{asset($setting->logo)}}" class="setting-img" alt="">

                    <div class="form-group">
                        <label for="faviconid" class="form-label">Logo Image</label>
                        <input type="file" name="logo" class="form-control-file">
                    </div>
                    <img src="{{asset($setting->persnalImage)}}" class="setting-img" alt="">

                    <div class="form-group">
                        <label for="faviconid" class="form-label">Personal Image</label>
                        <input type="file" name="persnalImage" class="form-control-file">
                    </div>
                    <img src="{{asset($setting->bgImage)}}" class="setting-img" alt="">

                    <div class="form-group">
                        <label for="faviconid" class="form-label">Background Image</label>
                        <input type="file" name="bgImage" class="form-control-file">
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
                                <label for="inputPassword5">Full Name {{$key}}</label>
                                <input type="text" id="inputtext" class="form-control" aria-describedby="textHelpBlock"
                                    name="{{$key}}[fullname]" value="{{$setting->translate($key)->fullname }}">
                            </div>
                            <div class="form-group">
                                <label for="inputPassword5">Job Title {{$key}} </label>
                                <input type="text" id="inputtext" class="form-control" aria-describedby="textHelpBlock"
                                    name="{{$key}}[jobTitle]" value="{{$setting->translate($key)->jobTitle }}">
                            </div>
                            <div class="form-group">
                                <label for="inputPassword5">Copy Right {{$key}} </label>
                                <input type="text" id="inputtext" class="form-control" aria-describedby="textHelpBlock"
                                    name="{{$key}}[copyright]" value="{{$setting->translate($key)->copyright}}">
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
