@extends('admin.layout.app')

@section('heading', 'Edit Video')

@section('top_right_button')
<a href="{{route('admin_video_view')}}" class="btn btn-primary"><i class="fa fa-eye"></i> View All</a>
@endsection

@section('main_content')
<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('admin_video_update',$video_data->id) }}" method="Post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-4">
                                    <label class="form-label">Existing Video </label>
                                    <div class="iframe-container1"><iframe class="w_200" width="560" height="315" src="https://www.youtube.com/{{$video_data->video_id}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></div>
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Video Id *</label>
                                    <input type="text" class="form-control" name="video_id" value="{{ $video_data->video_id }}">
                                </div>

                                <div class="mb-4">
                                    <label class="form-label">Caption *</label>
                                    <input type="text" class="form-control" name="caption" value="{{ $video_data->caption }}">
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