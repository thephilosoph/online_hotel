@extends('admin.layout.app')

@section('heading', 'Edit Slide')

@section('top_right_button')
<a href="{{route('admin_slider_view')}}" class="btn btn-primary"><i class="fa fa-eye"></i> View All</a>
@endsection

@section('main_content')
<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('admin_slider_update',$slide_data->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-4">
                                    <label class="form-label">Existing photo </label>
                                    <div>
                                    <img src="{{asset('uploads/'.$slide_data->photo)}}" class="w_200">
                                </div>
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">New photo </label>
                                    <div>
                                    <input type="file" name="photo" >
                                </div>
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Heading *</label>
                                    <input type="text" class="form-control" name="heading" value="{{ $slide_data->heading }}">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Text</label>
                                    <textarea name="text" class="form-control h_100" cols="30" rows="10">{{$slide_data->text}}</textarea>
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Button Text</label>
                                    <input type="text" class="form-control" name="button_text" value="{{ $slide_data->button_text }}">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Button URL</label>
                                    <input type="text" class="form-control" name="button_url" value="{{ $slide_data->button_url }}">
                                </div>
                                <div class="mb-4">
  
                                    <button type="submit" class="btn btn-primary">Edit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection