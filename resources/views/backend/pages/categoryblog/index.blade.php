@extends('backend.inc.master')
@section('title' , '  Category Blog ')
@section('content')

    <div class="page-wrapper">
        <div class="page-content">
            <div class="col-lg-12">
                <div class="card">
                       <div class="card-header">
                        <h1 class="text-center text-primary">All Category Blogs</h1>
                       </div> <!-- card-header -->

                       <div class="card-body">

                        <div class="table-responsive">
                            @if (session('message'))
                            <div class="alert alert-success">
                                {{ session('message') }}
                            </div>
                        @endif
                            <table class="table table-bordered table-primary table-hover text-center">
                                <thead>
                                    <tr>
                                        <th>اسم المقال</th>
                                        <th>Name</th>
                                        <th>Image</th>
                                        <th>Text</th>
                                        <th>المقال</th>
                                        <th>عنوان الصفحه</th>
                                        <th>Name of Page Title</th>
                                        <th>Oppration</th>
                                        {{-- <th>Edit</th>
                                        <th>Delete</th> --}}
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($categoryBlogs as $categoryBlog)
                                        
                                    <tr>
                                        <td>{{$categoryBlog->name_ar}}</td>
                                        <td>{{$categoryBlog->name_en}}</td>
                                        <td><img src="{{asset('/categoryblog/' . $categoryBlog->image)}}" alt="" width="50" height="50" ></td>
                                        <td>{{$categoryBlog->text_ar}}</td>
                                        <td>{{$categoryBlog->text_en}}</td>
                                        <td>{{$categoryBlog->pagetitle_ar}} </td>
                                        <td>{{$categoryBlog->pagetitle_en}}</td>
                                        
                                        <td>
                                            <a href="{{ route('CategoryBlog.edit', $categoryBlog->id) }}" >
                                                <i class="bx bx-edit font-30"></i>
                                            </a>
                                            <button class="border-0 bg-white" data-bs-toggle="modal" data-bs-target="#exampleDangerModal{{ $categoryBlog->id }}">
                                                <i style="color: red" class="bx bx-trash font-30 " ></i>
                                            </button>
                                        </td>
                                        </tr>
                                        <div class="modal fade" id="exampleDangerModal{{$categoryBlog->id}}" tabindex="-1" aria-hidden="true">
                                            <form action="{{ route('CategoryBlog.destroy', $categoryBlog->id) }}" method="POST">
                                                @csrf
                                                @method('delete')
                                            <div class="modal-dialog modal-lg modal-dialog-centered">
                                                <div class="modal-content bg-danger">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title text-white"> Confirm delete !</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body text-white">
                                                        <p>
                                                             Are you sure to delete :
                                                        {{$categoryBlog->name_ar}}
                                                        ?
                                                        </p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">cancell</button>
                                                        <button type="submit" class="btn btn-dark"> Delete</button>
                                                    </div>
                                                </div>
                                            </div>
                                            </form>
                                        </div>
                                    @endforeach
                                </tbody>

                            </table><!-- table -->
                       </div><!-- card-body -->
                </div><!-- card -->
            </div><!-- col-lg-12 -->
        </div><!-- page-content -->
    </div><!-- page-wrapper -->

@endsection