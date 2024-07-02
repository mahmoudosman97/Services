@extends('backend.inc.master')
@section('title' , ' Add  Client ')
@section('content')

<div class=" page-wrapper"> 
    <div class=" page-content">
        <div class="col pt-3 ">
            <div class="card ">
                <div class="card-header">
                    <h1 class="text-primary text-center">Add New  Client</h1>
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

                    <form action="{{ route('client.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        
                       
                        <div>
                            <label for="">عنوان الصفحه بالعربى </label>
                            <input type="text" name="pagetitle_ar" class="form-control form-control-lg mb-3" >
                        </div>
                        <div>
                            <label for="">عنوان الصفحه بالانجليزى</label>
                            <input type="text" name="pagetitle_en" class="form-control form-control-lg mb-3" >
                        </div>

                       
                        <div>
                            <label for=""> الصفحه بالانجليزى</label>
                            <input type="text" name="link" class="form-control form-control-lg mb-3" >
                        </div>

                        <div>
                            <label for="">صوره</label>
                            <input id="image-uploadify" type="file" name="image_ar" accept=".xlsx,.xls,image/*,.doc,audio/*,.docx,video/*,.ppt,.pptx,.txt,.pdf" multiple>
                        </div>


{{--                         
                        <div>
                            <label for="">صوره</label>
                            <input id="image-uploadify" type="file" name="image_en" accept=".xlsx,.xls,image/*,.doc,audio/*,.docx,video/*,.ppt,.pptx,.txt,.pdf" multiple>
                        </div> --}}

                       
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