@extends('admin.layout.app')

@section('heading', 'Edit Contact Page')


@section('main_content')
<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('admin_page_contact_update') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                      
                                <div class="mb-4">
                                    <label class="form-label">Heading *</label>
                                    <input type="text" class="form-control" name="contact_heading" value="@if($contact_data!=null){{ $contact_data->contact_heading }} @else {{'contact Heading'}} @endif">
                                </div>

                                <div class="mb-4">
                                    <label class="form-label">Map ifram *</label>
                                    <textarea name="contact_map" class="form-control" cols="30" rows="10">@if($contact_data!=null){{ $contact_data->contact_map }} @else {{'contact Map'}} @endif</textarea>
                                </div>    

                                <div class="mb-4">
                                    <label class="form-label">Status *</label>
                                    <select name="contact_status" class="form-control">
                                        @if($contact_data==null)
                                        <option value="1"selected>Show</option>
                                        <option value="0">Hide</option>
                                        @else
                                        <option value="1" @if($contact_data->contact_status==1) selected @endif>Show</option>
                                        <option value="0" @if($contact_data->contact_status==0) selected @endif>Hide</option>
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