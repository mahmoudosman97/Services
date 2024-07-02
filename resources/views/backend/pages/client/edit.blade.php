@extends('backend.inc.master')
@section('title' , ' Edit  Client ')
@section('content')

<div class=" page-wrapper"> 
    <div class=" page-content">
        <div class="col pt-3 ">
            <div class="card ">
                <div class="card-header">
                    <h1 class="text-primary text-center">Edit  Client</h1>
                </div><!-- card-header -->

                <div class="card-body">

                    @if ($errors->any())
                    <div class="alert alert-danger">
                      <ul>
                          @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                    </div>
                   @endif

                   <form action="{{ route('client.update' , $client->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                   
                    <div>
                        <label for="">عنوان الصفحه بالعربى </label>
                        <input type="text" value="{{$client->pagetitle_ar}}" name="pagetitle_ar" class="form-control form-control-lg mb-3" >
                    </div>
                    <div>
                        <label for="">عنوان الصفحه بالانجليزى</label>
                        <input type="text" value="{{$client->pagetitle_en}}" name="pagetitle_en" class="form-control form-control-lg mb-3" >
                    </div>

                   
                    <div>
                        <label for=""> الصفحه بالانجليزى</label>
                        <input type="text" value="{{$client->link}}" name="link" class="form-control form-control-lg mb-3" >
                    </div>

                    <div>
                        <label for="">صوره</label>
                        <input id="image-uploadify" value="{{$client->image_ar}}" type="file" name="image_ar" accept=".xlsx,.xls,image/*,.doc,audio/*,.docx,video/*,.ppt,.pptx,.txt,.pdf" multiple>
                    </div>
                    <div>
                        <label for="">صوره</label>
                        <input id="image-uploadify" value="{{$client->image_en}}" type="file" name="image_en" accept=".xlsx,.xls,image/*,.doc,audio/*,.docx,video/*,.ppt,.pptx,.txt,.pdf" multiple>
                    </div>

                   
                     <div class="form-actions right p-3 text-center ">
                        <button type="submit" class="btn btn-primary btn-lg">
                            <i class="fa fa-check-square-o"></i> Save
                        </button>
        
                        <button type="reset" class="btn btn-warning btn-lg">
                            <i class="feather icon-x"></i> Cancel
                        </button>
                    </div>
                </form>

                </div><!-- card-body -->
            </div><!-- card -->
        </div><!-- col-md-8 -->
    </div><!-- row -->
</div><!-- container  -->
    
@endsection