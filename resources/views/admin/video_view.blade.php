@extends('admin.layout.app')

@section('heading', 'view Videos')
@section('top_right_button')
<a href="{{route('admin_video_add')}}" class="btn btn-primary"><i class="fa fa-plus"></i> Add New</a>
@endsection

@section('main_content')
<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="example1">
                            <thead>
                            <tr>
                                <th>SL</th>
                                <th>video Preview</th>
                                <th>Caption</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($videos as $item)
                                    
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td><div class="iframe-container1"><iframe class="w_200" width="560" height="315" src="https://www.youtube.com/{{$item->video_id}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></div></td>
                                <td>{{$item->caption}}</td>
                                <td class="pt_10 pb_10">
                                    <a href="{{route('admin_video_edit',$item->id)}}" class="btn btn-primary">Edite</a>
                                    <a href="{{route('admin_video_delete',$item->id)}}" class="btn btn-danger" onClick="return confirm('Are you sure?');">Delete</a>
                                </td>
                            </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection