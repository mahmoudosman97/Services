@extends('backend.inc.master')
@section('title' , ' All Teams ')
@section('content')

<div class=" page-wrapper"> 
    <div class=" page-content">
        <div class="col pt-3 ">
            <div class="card ">
                <div class="card-header">
                    <h1 class="text-primary text-center">Add New  Team</h1>
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

                    <form action="{{ route('team.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div>
                            <label for="">اسم الفريق بالعربى </label>
                            <input type="text" name="name_ar" class="form-control form-control-lg mb-3" placeholder="اسم الفريق">
                        </div>
                        <div>
                            <label for="">اسم الفريق بالانجليزى</label>
                            <input type="text" name="name_en" class="form-control form-control-lg mb-3" placeholder="Name of team">
                        </div>
                       
                        <div>
                            <label for="">  الخبرات السابقه</label>
                            <textarea name="exp" id="sliders"  cols="3" class="form-control form-control-lg mb-3"></textarea>
                        </div>
                        <div>
                            <label for="">الملخص</label>
                            <textarea name="summary" id="teams" cols="3" class="form-control form-control-lg mb-3"></textarea>
                        </div>
                        <div>
                            <label for=""> العنوان</label>
                            <input type="text" name="address" class="form-control form-control-lg mb-3" >
                        </div>

                        <div>
                            <label for="">الهاتف</label>
                            <input type="text" name="phone" class="form-control form-control-lg mb-3">
                        </div>
                        <div>
                            <label for="">الميل</label>
                            <input type="email" name="email" class="form-control form-control-lg mb-3">
                        </div>
                        <div>
                            <label for="">التخصص</label>
                            <input type="text" name="spec" class="form-control form-control-lg mb-3">
                        </div>
                        <div>
                            <label for="">المهارات</label>
                            <input type="text" name="skills" class="form-control form-control-lg mb-3">
                        </div>
                        <div>
                            <label for="">التعليم </label>
                            <input type="text" name="education" class="form-control form-control-lg mb-3">
                        </div>

                        <div>
                            <label for="">عنوان الصفحه</label>
                            <input type="text" name="pagetitle_ar" class="form-control form-control-lg mb-3" placeholder="عنوان الصفحه">
                        </div>
                        <div>
                            <label for="">عنوان الصفحه بالانجليزى</label>
                            <input type="text" name="pagetitle_en" class="form-control form-control-lg mb-3" placeholder="Name of Page Title">
                        </div>

                        <div>
                            <label for="">صوره</label>
                            <input id="image-uploadify" type="file" name="image" accept=".xlsx,.xls,image/*,.doc,audio/*,.docx,video/*,.ppt,.pptx,.txt,.pdf" multiple>
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