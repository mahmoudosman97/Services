@extends('backend.inc.master')
@section('title' , ' All Blogs ')
@section('content')

<div class=" page-wrapper"> 
    <div class=" page-content">
        <div class="col pt-3 ">
            <div class="card ">
                <div class="card-header">
                    <h1 class="text-primary text-center">Add New  Blog</h1>
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

                    <form action="{{ route('Blog.update',$blog->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div>
                            <label for="">اسم المقاله</label>
                            <input type="text" name="name_ar"  value="{{$blog->name_ar}}" class="form-control form-control-lg mb-3" placeholder="اسم المقاله">
                        </div>
                        <div>
                            <label for="">Name</label>
                            <input type="text" name="name_en" value="{{$blog->name_en}}" class="form-control form-control-lg mb-3" placeholder="Name of Blog">
                        </div>
                        <div class="mb-3">
                            <label for="inputProductDescription" class="form-label"> Image</label>
                            <input name="image" value="{{$blog->image}}" id="blah" id="imagepre" id="image-uploadify" type="file" accept=".xlsx,.xls,image/*,.doc,audio/*,.docx,video/*,.ppt,.pptx,.txt,.pdf" >
                          </div>
                        <div>
                            <label for="">Body</label>
                            <textarea name="body_ar" id="sliders"  cols="3" class="form-control form-control-lg mb-3">{{$blog->body_ar}}</textarea>
                        </div>
                        <div>
                            <label for="">المقال</label>
                            <textarea name="body_en" id="teams" cols="3" class="form-control form-control-lg mb-3">{{$blog->body_ar}}</textarea>
                        </div>
                        <div>
                            <label for="">اسم العنوان</label>
                            <input type="text" value="{{$blog->title_ar}}"  name="title_ar" class="form-control form-control-lg mb-3" placeholder="اسم العنوان">
                        </div>
                        <div>
                            <label for="">Name of Title</label>
                            <input type="text" value="{{$blog->title_en}}"  name="title_en" class="form-control form-control-lg mb-3" placeholder="Name of Title">
                        </div>
                        <div>
                            <label for="">عنوان الصفحه</label>
                            <input type="text" value="{{$blog->pagetitle_ar}}" name="pagetitle_ar" class="form-control form-control-lg mb-3" placeholder="عنوان الصفحه">
                        </div>
                        <div>
                            <label for="">Name of Page Title</label>
                            <input type="text" value="{{$blog->pagetitle_en}}" name="pagetitle_en" class="form-control form-control-lg mb-3" placeholder="Name of Page Title">
                        </div>
                        <div>
                            <select name="category_id" class=" form form-select form-select-lg mb-3">
                                 <option>Category</option>
                                 @foreach ($categories as $category)
                                     
                                 <option value="{{ $category->id }}"
                                    {{ $category->id == $blog->category_id ? 'selected' : '' }}>
                                    {{ $category->name_ar }}
                                </option>
                                 @endforeach
                                 
                            </select>
                         </div>

                         <div class="form-actions right p-3 text-center ">
                            <button type="submit" class="btn btn-primary btn-lg">
                                <i class="fa fa-check-square-o"></i> Update
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
    
@section('scripts')
<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah')
                    .attr('src', e.target.result)
                    .width(100)
                    .height(100);

                $('#imagepre')
                    .attr('style', e.target.result)
                    .opacity(1)
            };


            reader.readAsDataURL(input.files[0]);
        }
    }
</script>

@endsection