@extends('layout.app')
@section('content')
    <div class="container main-container">
        <div class="row">
            <div class="col-sm-12 bg-white" style="margin-bottom: 15px; padding-bottom: 20px;">
                <img src="/Images/banner-massages.jpg" class="img-responsive" alt="banner"
                    style="padding-top: 15px; margin-bottom: 15px; " />
                <h3 class="text-center">Book Now</h3>
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3">
                        {{$barbers}}
                        {!! Form::open(['url'=>'bookappointment/submit']) !!}

                                <div class="form-group">
                                    <label> Name</label>
                                    {{Form::text('name','',['class'=>'form-control','placeholder'=>'Enter name'])}}
                                </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                {{Form::text('email','',['class'=>'form-control','placeholder'=>'Enter email'])}}
                            </div>
                        <div class="form-group">
                            <label>Mobile</label>
                            {{Form::text('mobile','',['class'=>'form-control','placeholder'=>'Enter Mobile'])}}
                        </div>

                            <div class="row" style="margin-top: 15px;">
                                <div class="form-group col-md-6">
                                    <label>Hair Cut Type</label>
                                    <select class="form-control">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    </select>
                                </div>

                                <div class="form-group col-md-6">
                                    <label>Appoinment Date</label>
                                    <input type="date" name='date' class="form-control datepicker" placeholder="Appoinment Date">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Appoinment Time</label>
                                    <input type="date" nam='time' class="form-control timepicker" placeholder="Appoinment Date">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-theme">Book Now</button>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
            @endsection
            {{-- <!DOCTPE html>
<html>
<head>
<title>View appointments for admin</title>
</head>
<body>
<table border = "1">
<tr>
<td>Id</td>
<td>Barber Name</td>
<td>Booking Time</td>
<a href="{{ URL::to('logout') }}">Logout</a>
</tr>
@foreach ($barbers as $barber)
<tr>

<td>{{ $barber->barber_name }}</td>
<td>{{ $barber->booking_time }}</td>

</tr>
@endforeach
</table>
</body>
</html> --}}
