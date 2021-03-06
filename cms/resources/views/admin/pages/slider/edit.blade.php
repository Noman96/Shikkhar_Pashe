@extends('admin.layouts.master') 
@section('title','Slider Edit')
@section('content')
<div class="content-i">
    <div class="content-box">
        <div class="row">
            <div class="col-lg-12">
                <div class="element-wrapper">
                    <h6 class="element-header">
                        Edit Slider
                        <a class="btn btn-success btn-sm float-right mr-2" href="{{route('slider.index')}}">Back</a>
                    </h6>
                    <div class="element-box">
                        <form action="{{route('slider.update',$slider->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                            <h5 class="form-desc">
                                 slider
                            </h5>
                            <div class="form-group row">
                                <label class="col-form-label col-sm-2 offset-md-1" for="">Title</label>
                                <div class="col-sm-7">
                                    <input class="form-control" type="text" name="title" value="{{$slider->title}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label offset-md-1">Sub Title</label>
                                <div class="col-sm-7">
                                    <textarea class="form-control" rows="3" name="info">{{$slider->info}}</textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-sm-2 offset-md-1" for="">Button Name</label>
                                <div class="col-sm-7">
                                    <input class="form-control"  type="text" name="button" value="{{$slider->button}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-sm-2 offset-md-1" for="">Image</label>
                                <div class="col-sm-7">
                                    <input class="form-control"  type="file" name="image">
                                </div>
                            </div>
                            <div class="form-buttons-w text-center">
                                <button class="btn btn-primary" type="submit"> Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection    