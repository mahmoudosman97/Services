@extends('backend.inc.master')
@section('title' , ' Create Blog ')
@section('content')

    <div class="page-wrapper">
        <div class="page-content">
            <div class="col-lg-12">
                <div class="card">
                       <div class="card-header">
                        <h1 class="text-center text-primary">All Blogs</h1>
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
                                        <th>Body</th>
                                        <th>المقال</th>
                                        <th>اسم العنوان</th>
                                        <th>Name of Title</th>
                                        <th>عنوان الصفحه</th>
                                        <th>Name of Page Title</th>
                                        <th>Category</th>
                                        <th>Operators</th>
                                        
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($blogs as $blog)
                                        
                                    <tr>
                                        <td>{{$blog->name_ar}}</td>
                                        <td>{{$blog->name_en}}</td>
                                        <td><img src="{{url('/blogs/' . $blog->image)}}"  width="70" height="70" alt=""></td>
                                        <td>{!! $blog->body_en !!}</td>
                                        <td>{!! $blog->body_ar !!}</td>
                                        <td>{{$blog->title_ar}}</td>
                                        <td>{{$blog->title_en}}</td>
                                        <td>{{$blog->pagetitle_ar}} </td>
                                        <td>{{$blog->pagetitle_en}}</td>
                                        <td>{{$blog->category_blog->name_ar}}</td>
                                        <td>
                                            <a href="{{ route('Blog.edit', $blog->id) }}" >
                                                <i class="bx bx-edit font-30"></i>
                                            </a>
                                            <button class="border-0 bg-white" data-bs-toggle="modal" data-bs-target="#exampleDangerModal{{ $blog->id }}">
                                                <i style="color: red" class="bx bx-trash font-30 " ></i>
                                            </button>
                                        </td>
                                        </tr>
                                         {{-- Start Modal --}}
                        <div class="modal fade" id="exampleDangerModal{{$blog->id}}" tabindex="-1" aria-hidden="true">
                            <form action="{{ route('Blog.destroy', $blog->id) }}" method="POST">
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
                                        {{$blog->name_ar}}
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
                        {{-- End Modal --}}
                                    @endforeach
                                </tbody>

                            </table><!-- table -->
                       </div><!-- card-body -->
                </div><!-- card -->
            </div><!-- col-lg-12 -->
        </div><!-- page-content -->
    </div><!-- page-wrapper -->

@endsection