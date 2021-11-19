@extends('layouts.app')

@section('content')

<body style="overflow-x: hidden;">
    <div class="container mx-md-n5 col-xl-8 m-auto">
        <form action="{{url('/studentData/store')}}" method="POST">
            @csrf
             
                <div class="col-xl-8 m-auto">
                  <div class="card shadow">
                          @if(Session::has('success'))
                              <div class="alert alert-success alert-dismissible">
                                  <button type="button" class="close" data-dismiss="alert">✔</button>
                                  {{Session::get('success')}}
                              </div>
                          @elseif(Session::has('failed'))
                              <div class="alert alert-danger alert-dismissible">
                                  <button type="button" class="close" data-dismiss="alert">×</button>
                                  {{Session::get('failed')}}
                              </div>
                          @endif
    
                          <div class="card-header">
                            <h4 class="card-title font-weight-bold">{{__('Add Student Information')}} </h4>
                        </div>
                        <div class="form-group mb-2 mx-3">
                            <label for="name"> {{__('Student Name')}} <span class="text-danger"> * </span> </label>
                                <input type="text" name="name" class="form-control" value="{{old('name')}}" />
                                {!!$errors->first("name", "<span class='text-danger'>:message</span>")!!}
                        </div>


                        <div class="form-group mb-2 mx-3">
                            <label for="date_of_birth">{{__('Date of Birth')}} <span class="text-danger"> * </span> </label>
                                <input type="text" name="date_of_birth" class="form-control" value="{{old('date_of_birth')}}" />
                                {!!$errors->first("date_of_birth", "<span class='text-danger'>:message</span>")!!}
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-success"> {{__('ADD Student Details')}} </button>
                            <a class="btn btn-success" href="/employees/show"> {{__('Go Back')}}</a>
  
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </body>


@endsection