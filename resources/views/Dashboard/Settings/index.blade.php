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
                    <hr>
                    <label class="form-label" >Social Media </label>
                    <div class="form-group">
                        <label  class="form-label"  for="facebooid">Facebook URL</label>
                        <input type="text" name="fb" class="form-control"  value="{{$setting->fb}}">
                    </div>
                    <div class="form-group">
                        <label  class="form-label" for="facebooid">Twitter URL</label>
                        <input type="text" name="tw" class="form-control" value="{{$setting->tw}}>
                    </div>
                    <div class="form-group">
                        <label class="form-label"  for="facebooid">Instagram URL</label>
                        <input type="text" name="ink" class="form-control" value="{{$setting->ink}}">
                    </div>
                    <div class="form-group">
                        <label class="form-label"  for="facebooid">Youtube URL</label>
                        <input type="text" name="yt" class="form-control" value="{{$setting->yt}}">
                    </div>
                    <div class="form-group">
                        <label  class="form-label" for="facebooid">Linkden URL</label>
                        <input type="text" name="lk" class="form-control" value="{{$setting->lk}}">
                    </div>
                    <div class="form-group">
                        <label class="form-label"  for="facebooid">Tiktok URL</label>
                        <input type="text" name="tk" class="form-control" value="{{$setting->tk}}">
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
                                <input   @if ($key === 'ar')
                                    dir="rtl"
                                @endif   type="text" id="inputtext" class="form-control" aria-describedby="textHelpBlock"
                                    name="{{$key}}[fullname]" value="{{$setting->translate($key)->fullname }}">
                            </div>
                            <div class="form-group">
                                <label for="inputPassword5">Job Title {{$key}} </label>
                                <input  @if ($key === 'ar')
                                    dir="rtl"
                                @endif type="text" id="inputtext" class="form-control" aria-describedby="textHelpBlock"
                                    name="{{$key}}[jobTitle]" value="{{$setting->translate($key)->jobTitle }}">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Description</label>
                                <textarea  @if ($key === 'ar')
                                    dir="rtl"
                                @endif class="form-control"  name="{{$key}}[description]" id="exampleFormControlTextarea1" rows="3">{{$setting->translate($key)->description}}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword5">Copy Right {{$key}} </label>
                                <input   @if ($key === 'ar')
                                    dir="rtl"
                                @endif  type="text" id="inputtext" class="form-control" aria-describedby="textHelpBlock"
                                    name="{{$key}}[copyright]" value="{{$setting->translate($key)->copyright}}">
                            </div>
                            <div class="form-group">
                                <label for="inputPassword5">Address Location {{$key}} </label>
                                <input   @if ($key === 'ar')
                                    dir="rtl"
                                @endif  type="text" id="inputtext" class="form-control" aria-describedby="textHelpBlock"
                                    name="{{$key}}[address]" value="{{$setting->translate($key)->address}}">
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
