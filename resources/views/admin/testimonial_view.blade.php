@extends('admin.layout.app')

@section('heading', 'view Testimonial')
@section('top_right_button')
<a href="{{route('admin_testimonial_add')}}" class="btn btn-primary"><i class="fa fa-plus"></i> Add New</a>
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
                                <th>photo</th>
                                <th>Name</th>
                                <th>Designation</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($testimonial as $item)
                                    
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td><img src="{{asset('uploads/'.$item->photo)}}" class="w_200"></td>
                                <td>{{$item->name}}</td>
                                <td>{{$item->designation}}</td>
                                <td class="pt_10 pb_10">
                                    <a href="{{route('admin_testimonial_edit',$item->id)}}" class="btn btn-primary">Edite</a>
                                    <a href="{{route('admin_testimonial_delete',$item->id)}}" class="btn btn-danger" onClick="return confirm('Are you sure?');">Delete</a>
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