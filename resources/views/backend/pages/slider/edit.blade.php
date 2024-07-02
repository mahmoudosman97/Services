@extends('backend.inc.master')
@section('title' , ' Edit  Slider ')
@section('content')

<div class=" page-wrapper"> 
    <div class=" page-content">
        <div class="col pt-3 ">
            <div class="card ">
                <div class="card-header">
                    <h1 class="text-primary text-center">Edit  Slider</h1>
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

                    <form action="{{ route('slider.update' , $slider->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div>
                            <label for="">Body</label>
                            <textarea name="text_ar" id="sliders"  cols="3" class="form-control form-control-lg mb-3">{{$slider->text_ar}}</textarea>
                        </div>
                        <div>
                            <label for="">المقال</label>
                            <textarea name="text_en" id="teams" cols="3" class="form-control form-control-lg mb-3">{{$slider->text_en}}</textarea>
                        </div>
                        
                       
                        
                        <div>
                            <label for="">عنوان الصفحه</label>
                            <input type="text" value="{{$slider->pagetitle_ar}}"  name="pagetitle_ar" class="form-control form-control-lg mb-3" >
                        </div>
                        <div>
                            <label for="">عنوان الصفحه بالانجليزى</label>
                            <input type="text" value="{{$slider->pagetitle_en}}"  name="pagetitle_en" class="form-control form-control-lg mb-3" >
                        </div>

                       <select name="position_id" id="" class="form-select form-select-lg">
                        <option value="">slider</option>
                        @foreach ($sliderpositions as $sliderposition)
                         <option value="{{$sliderposition->id}}"
                                {{$sliderposition->id == $slider->position_id ? 'selected' : ''}}>
                                 {{$sliderposition->name_ar}}
                        </option>
                        @endforeach
                       </select>

                       <div>
                        <label for="">صوره</label>
                        <input type="file"  value="{{$slider->image}}"  name="image" class="form-control form-control-lg mb-3">
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