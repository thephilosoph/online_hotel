@extends('admin.layout.app')

@section('heading', 'view FAQ')
@section('top_right_button')
<a href="{{route('admin_faq_add')}}" class="btn btn-primary"><i class="fa fa-plus"></i> Add New</a>
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
                                <th>Question</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($faqs as $item)
                                    
                            <tr>
                                <td>{{$loop->iteration}}</td>
                               <td>{{$item->question}}</td>
                                <td class="pt_10 pb_10">
                                    <a href="{{route('admin_faq_edit',$item->id)}}" class="btn btn-primary">Edite</a>
                                    <a href="{{route('admin_faq_delete',$item->id)}}" class="btn btn-danger" onClick="return confirm('Are you sure?');">Delete</a>
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