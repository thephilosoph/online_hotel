@extends('admin.layout.app')

@section('heading', 'Edit Checkout Page')


@section('main_content')
<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('admin_page_checkout_update') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                      
                                <div class="mb-4">
                                    <label class="form-label">Heading *</label>
                                    <input type="text" class="form-control" name="checkout_heading" value="@if($checkout_data!=null){{ $checkout_data->checkout_heading }} @else {{'checkout Heading'}} @endif">
                                </div>

                                <div class="mb-4">
                                    <label class="form-label">Status *</label>
                                    <select name="checkout_status" class="form-control">
                                        @if($checkout_data==null)
                                        <option value="1"selected>Show</option>
                                        <option value="0">Hide</option>
                                        @else
                                        <option value="1" @if($checkout_data->checkout_status==1) selected @endif>Show</option>
                                        <option value="0" @if($checkout_data->checkout_status==0) selected @endif>Hide</option>
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