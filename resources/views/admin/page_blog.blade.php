@extends('admin.layout.app')

@section('heading', 'Edit Blog Page')


@section('main_content')
<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('admin_page_blog_update') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                      
                                <div class="mb-4">
                                    <label class="form-label">Heading *</label>
                                    <input type="text" class="form-control" name="blog_heading" value="@if($blog_data!=null){{ $blog_data->blog_heading }} @else {{'blog Heading'}} @endif">
                                </div>

                                <div class="mb-4">
                                    <label class="form-label">Status *</label>
                                    <select name="blog_status" class="form-control">
                                        @if($blog_data==null)
                                        <option value="1"selected>Show</option>
                                        <option value="0">Hide</option>
                                        @else
                                        <option value="1" @if($blog_data->blog_status==1) selected @endif>Show</option>
                                        <option value="0" @if($blog_data->blog_status==0) selected @endif>Hide</option>
                                        @endif
                                       
                                    </select>
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