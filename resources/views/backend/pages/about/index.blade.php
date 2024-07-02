@extends('backend.inc.master')
@section('title' , '   About ')
@section('content')

    <div class="page-wrapper">
        <div class="page-content">
            <div class="col-lg-12">
                <div class="card">
                       <div class="card-header">
                        <h1 class="text-center text-primary">All  About </h1>
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
                                        <th>نبذه  بالعربى </th>
                                        <th>نبذه  بالانجليزى</th>
                                    
                                        <th>عنوان الصفحه</th>
                                        <th>عنوان الصفحه بالانجليزى</th>

                                        <th> الصفحه بالعربى</th>
                                        <th> الصفحه بالانجليزى</th>

                                        <th> الصوره </th>
                                        <th>Oppration</th>
                                        {{-- <th>Edit</th>
                                        <th>Delete</th> --}}
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($abouts as $about)
                                        
                                    <tr>
                                        <td>{!!$about->body_ar!!}</td>
                                        <td>{!!$about->body_en!!}</td>
                                       
                                        
                                        <td>{{$about->pagetitle_ar}} </td>
                                        <td>{{$about->pagetitle_en}}</td>

                                        <td>{{$about->title_ar}} </td>
                                        <td>{{$about->title_en}}</td>

                                      <td><img src="{{asset('/abouts/' . $about->image)}}" alt="" width="50" height="50" ></td>
                                        
                                        <td>
                                            <a href="{{ route('about.edit', $about->id) }}" >
                                                <i class="bx bx-edit font-30"></i>
                                            </a>
                                            <button class="border-0 bg-white" data-bs-toggle="modal" data-bs-target="#exampleDangerModal{{ $about->id }}">
                                                <i style="color: red" class="bx bx-trash font-30 " ></i>
                                            </button>
                                        </td>
                                        </tr>
                                        <div class="modal fade" id="exampleDangerModal{{$about->id}}" tabindex="-1" aria-hidden="true">
                                            <form action="{{ route('about.destroy', $about->id) }}" method="POST">
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
                                                        {{$about->text_ar}}
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