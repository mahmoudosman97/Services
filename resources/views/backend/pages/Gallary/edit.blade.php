@extends('backend.inc.master')
@section('title' , ' Edit  Gallary ')
@section('content')

<div class=" page-wrapper"> 
    <div class=" page-content">
        <div class="col pt-3 ">
            <div class="card ">
                <div class="card-header">
                    <h1 class="text-primary text-center">Edit  Gallary</h1>
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

                    <form action="{{ route('Gallary.update', $gallary->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div>
                            <label for="">اسم المعرض بالعربى  </label>
                            <input type="text" value="{{$gallary->title_ar}}"  name="title_ar" class="form-control form-control-lg mb-3" placeholder="اسم المقاله">
                        </div>
                        <div>
                            <label for=""> اسم المعرض بالانجليزى</label>
                            <input type="text"  value="{{$gallary->title_en}}" name="title_en" class="form-control form-control-lg mb-3" placeholder="Name of Blog">
                        </div>
                        
                       
                        
                        
                        <div>
                            <label for="">عنوان الصفحه</label>
                            <input type="text" value="{{$gallary->pagetitle_ar}}"  name="pagetitle_ar" class="form-control form-control-lg mb-3" placeholder="عنوان الصفحه">
                        </div>
                        <div>
                            <label for="">عنوان الصفحه بالانجليزى</label>
                            <input type="text" value="{{$gallary->pagetitle_en}}"  name="pagetitle_en" class="form-control form-control-lg mb-3" placeholder="Name of Page Title">
                        </div>

                        <div>
                            <label for="">صوره</label>
                            <input type="file"  value="{{$gallary->image}}"  name="image" class="form-control form-control-lg mb-3">
                        </div>

                        <div>
                            <select name="category_id" class=" form form-select form-select-lg mb-3">
                                 <option>Category</option>
                                 @foreach ($categories as $category)
                                     
                                 <option value="{{ $category->id }}"
                                    {{ $category->id == $gallary->category_id ? 'selected' : '' }}>
                                    {{ $category->name_ar }}
                                </option>
                                 @endforeach
                                 
                            </select>
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