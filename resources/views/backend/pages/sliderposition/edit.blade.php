@extends('backend.inc.master')
@section('title' , ' Edit Category Slider ')
@section('content')

<div class=" page-wrapper"> 
    <div class=" page-content">
        <div class="col pt-3 ">
            <div class="card ">
                <div class="card-header">
                    <h1 class="text-primary text-center">Edit Category Slider</h1>
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

                    <form action="{{ route('sliderposition.update' , $sliderPosition->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div>
                            <label for="">اسم المعرض بالعربى  </label>
                            <input type="text" value="{{$sliderPosition->name_ar}}"  name="name_ar" class="form-control form-control-lg mb-3" >
                        </div>
                        <div>
                            <label for=""> اسم المعرض بالانجليزى</label>
                            <input type="text"  value="{{$sliderPosition->name_en}}" name="name_en" class="form-control form-control-lg mb-3">
                        </div>
                        
                       
                        
                        <div>
                            <label for="">عنوان الصفحه</label>
                            <input type="text" value="{{$sliderPosition->pagetitle_ar}}"  name="pagetitle_ar" class="form-control form-control-lg mb-3" placeholder="عنوان الصفحه">
                        </div>
                        <div>
                            <label for="">عنوان الصفحه بالانجليزى</label>
                            <input type="text" value="{{$sliderPosition->pagetitle_en}}"  name="pagetitle_en" class="form-control form-control-lg mb-3" placeholder="Name of Page Title">
                        </div>

                        <div>
                            <label for="">صوره</label>
                            <input type="file"  value="{{$sliderPosition->image}}"  name="image" class="form-control form-control-lg mb-3">
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