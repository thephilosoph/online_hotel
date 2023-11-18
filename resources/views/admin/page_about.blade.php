@extends('admin.layout.app')

@section('heading', 'Edit About Page')


@section('main_content')
<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('admin_page_about_update') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                      
                                <div class="mb-4">
                                    <label class="form-label">Heading *</label>
                                    <input type="text" class="form-control" name="about_heading" value="@if($about_data!=null){{ $about_data->about_heading }} @else {{'About Heading'}} @endif">
                                </div>

                                <div class="mb-4">
                                    <label class="form-label">Content *</label>
                                    <textarea name="about_content" class="form-control snote" cols="30" rows="10">@if($about_data!=null){{ $about_data->about_content }} @else {{'About Content'}} @endif</textarea>
                                </div>    

                                <div class="mb-4">
                                    <label class="form-label">Status *</label>
                                    <select name="about_status" class="form-control">
                                        @if($about_data==null)
                                        <option value="1"selected>Show</option>
                                        <option value="0">Hide</option>
                                        @else
                                        <option value="1" @if($about_data->about_status==1) selected @endif>Show</option>
                                        <option value="0" @if($about_data->about_status==0) selected @endif>Hide</option>
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