@extends('layouts.app')

@section('content')

<body style="overflow-x: hidden;">
    <div class="container mx-md-n5 col-xl-8 m-auto">
        <form action="{{url('/employees/store')}}" method="POST">
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
    
    </div>
</body>


@endsection