@extends('backend.inc.master')
@section('title' , ' Edit  Approach ')
@section('content')

<div class=" page-wrapper"> 
    <div class=" page-content">
        <div class="col pt-3 ">
            <div class="card ">
                <div class="card-header">
                    <h1 class="text-primary text-center">Edit  Approach</h1>
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

                   <form action="{{ route('approach.update' , $approach->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div>
                            <label for="">نبذه عنه بالعربى</label>
                            <textarea name="body_ar" id="cat_g_ar" cols="3" class="form-control form-control-lg mb-3">{{$approach->body_ar}}</textarea>
                        </div>
                        <div>
                            <label for="">نبذه عنه بالانجليزى</label>
                            <textarea name="body_en" id="cat_g_en" cols="3" class="form-control form-control-lg mb-3">{{$approach->body_en}}</textarea>
                        </div>
                       
                        
                        
                        <div>
                            <label for="">عنوان الصفحه بالعربى </label>
                            <input type="text" value="{{$approach->pagetitle_ar}}" name="pagetitle_ar" class="form-control form-control-lg mb-3" >
                        </div>
                        <div>
                            <label for="">عنوان الصفحه بالانجليزى</label>
                            <input type="text" value="{{$approach->pagetitle_en}}" name="pagetitle_en" class="form-control form-control-lg mb-3" >
                        </div>

                        <div>
                            <label for=""> الصفحه بالعربى </label>
                            <input type="text" value="{{$approach->title_ar}}"  name="title_ar" class="form-control form-control-lg mb-3" >
                        </div>
                        <div>
                            <label for=""> الصفحه بالانجليزى</label>
                            <input type="text"  value="{{$approach->title_en}}" name="title_en" class="form-control form-control-lg mb-3" >
                        </div>

                        <div>
                            <label for="">صوره</label>
                            <input id="image-uploadify" type="file" value="{{$approach->image}}" name="image" accept=".xlsx,.xls,image/*,.doc,audio/*,.docx,video/*,.ppt,.pptx,.txt,.pdf" multiple>
                            <td><img src="{{asset('/approaches/' . $approach->image)}}" alt="" width="50" height="50" ></td>
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