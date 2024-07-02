@extends('backend.inc.master')
@section('title' , ' All Contacts ')
@section('content')

    <div class="page-wrapper">
        <div class="page-content">
            <div class="col-lg-12">
                <div class="card">
                       <div class="card-header">
                        <h1 class="text-center text-primary">All Contacts</h1>
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
                                        <th>اسم العنوان بالعربى</th>
                                        <th>اسم العنوان بالانجليزى</th>
                                        <th> الموقع</th>
                                        <th>العنوان</th>
                                        <th>الهاتف</th>
                                        <th>الميل</th>
                                        <th>فيس بوك</th>
                                        <th>تويتر</th>
                                        <th>انستغرام</th>
                                        <th>يوتيوب</th>
                                        <th>عنوان الصفحه بالعربي </th>
                                        <th>عنوان الصفحه بالانجليزى</th>
                                       
                                       
                                        <th>Operators</th>
                                        
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($contacts as $contact)
                                        
                                    <tr>
                                        <td>{{$contact->title_ar}}</td>
                                        <td>{{$contact->title_en}}</td>
                                        
                                        <td>{{$contact->location}}</td>
                                        <td>{{$contact->address}}</td>
                                        <td>{{$contact->phone}}</td>
                                        <td>{{$contact->email}}</td>
                                        <td>{{$contact->facebook}}</td>
                                        <td>{{$contact->twitter}}</td>
                                        <td>{{$contact->instagram}}</td>
                                        <td>{{$contact->youtube}}</td>
                                        <td>{{$contact->pagetitle_ar}} </td>
                                        <td>{{$contact->pagetitle_en}}</td>
                                       
                                        
                                        <td>
                                            <a href="{{ route('contact.edit', $contact->id) }}" >
                                                <i class="bx bx-edit font-30"></i>
                                            </a>
                                            <button class="border-0 bg-white" data-bs-toggle="modal" data-bs-target="#exampleDangerModal{{ $contact->id }}">
                                                <i style="color: red" class="bx bx-trash font-30 " ></i>
                                            </button>
                                        </td>
                                        </tr>
                                         {{-- Start Modal --}}
                        <div class="modal fade" id="exampleDangerModal{{$contact->id}}" tabindex="-1" aria-hidden="true">
                            <form action="{{ route('contact.destroy', $contact->id) }}" method="POST">
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
                                        {{$contact->title_ar}}
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