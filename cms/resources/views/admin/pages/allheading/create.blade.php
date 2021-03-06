@extends('admin.layouts.master') 
@section('title','All Heading Create')
@section('content')
<div class="content-i">
    <div class="content-box">
        <div class="row">
            <div class="col-lg-12">
                @include('admin.partials.messege');
                <div class="element-wrapper">
                    <h6 class="element-header">
                        Add All Heading
                        <a class="btn btn-success btn-sm float-right mr-2" href="{{route('allheading.index')}}">View All</a>
                    </h6>
                    <div class="element-box">
                        <form action="{{route('allheading.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                            <h5 class="form-desc">
                                All Heading 
                            </h5>
                            <div class="form-group row">
                                <label class="col-form-label col-sm-2 offset-md-1" for="">Causes Heading</label>
                                <div class="col-sm-7">
                                    <input class="form-control" placeholder="Enter causes heading" type="text" name="causes_heading">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label offset-md-1">Causes Sub Heading</label>
                                <div class="col-sm-7">
                                    <textarea class="form-control" rows="4" name="causes_subheading" placeholder="Enter causes sub heading"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-sm-2 offset-md-1" for="">Events Heading</label>
                                <div class="col-sm-7">
                                    <input class="form-control" placeholder="Enter events heading" type="text" name="events_heading">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label offset-md-1">Events Sub Heading</label>
                                <div class="col-sm-7">
                                    <textarea class="form-control" rows="4" name="events_subheading" placeholder="Enter events sub heading"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-sm-2 offset-md-1" for="">Story Heading</label>
                                <div class="col-sm-7">
                                    <input class="form-control" placeholder="Enter story heading" type="text" name="story_heading">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label offset-md-1">Story Sub Heading</label>
                                <div class="col-sm-7">
                                    <textarea class="form-control" rows="4" name="story_subheading" placeholder="Enter story sub heading"></textarea>
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