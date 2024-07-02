@extends('backend.inc.master')
@section('title' , ' Create Team ')
@section('content')

    <div class="page-wrapper">
        <div class="page-content">
            <div class="col-lg-12">
                <div class="card">
                       <div class="card-header">
                        <h1 class="text-center text-primary">All Teams</h1>
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
                                        <th>اسم الفريق بالعربى</th>
                                        <th>اسم الفريق بالانجليزى</th>
                                        <th>الخبرات السابقه</th>
                                        <th>الملخص</th>
                                        <th>العنوان</th>
                                        <th>االهاتف</th>
                                        <th>الميل</th>
                                        <th>التخصص</th>
                                        <th>المهارات</th>
                                        <th>التعليم</th>
                                        <th>عنوان الصفحه بالعربي </th>
                                        <th>عنوان الصفحه بالانجليزى</th>
                                        <th>صوره</th>
                                       
                                        <th>Operators</th>
                                        
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($teams as $team)
                                        
                                    <tr>
                                        <td>{{$team->name_ar}}</td>
                                        <td>{{$team->name_en}}</td>
                                        
                                        <td>{!! $team->exp !!}</td>
                                        <td>{!! $team->summary !!}</td>
                                        <td>{{$team->address}}</td>
                                        <td>{{$team->phone}}</td>
                                        <td>{{$team->email}}</td>
                                        <td>{{$team->spec}}</td>
                                        <td>{{$team->skills}}</td>
                                        <td>{{$team->education}}</td>
                                        <td>{{$team->pagetitle_ar}} </td>
                                        <td>{{$team->pagetitle_en}}</td>
                                       
                                        <td><img src="{{url('/teams/' . $team->image)}}"  width="70" height="70" alt=""></td>
                                        <td>
                                            <a href="{{ route('team.edit', $team->id) }}" >
                                                <i class="bx bx-edit font-30"></i>
                                            </a>
                                            <button class="border-0 bg-white" data-bs-toggle="modal" data-bs-target="#exampleDangerModal{{ $team->id }}">
                                                <i style="color: red" class="bx bx-trash font-30 " ></i>
                                            </button>
                                        </td>
                                        </tr>
                                         {{-- Start Modal --}}
                        <div class="modal fade" id="exampleDangerModal{{$team->id}}" tabindex="-1" aria-hidden="true">
                            <form action="{{ route('team.destroy', $team->id) }}" method="POST">
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
                                        {{$team->name_ar}}
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