@extends('layouts.main')
@push('title')
    <title>Form</title>
@endpush
@section('main-section')
    <div class="container my-4">
        <h1>{{$title}}</h1>

        <form action="{{$url}}" method="POST">
            @csrf
            <div class="mb-3 row">
                <label for="name" class="col-sm-2 col-form-label">Enter your name</label>
                <div class="col-sm-10">

                    <input type="name" class="form-control" id="name" name="name" value="{{$title!='Student Registration' ? $student->sname : ''}}"/>
                </div>

            </div>
            <div class="mb-3 row">
                <label for="email" class="col-sm-2 col-form-label">Enter your email</label>
                <div class="col-sm-10">

                    <input type="email" class="form-control" id="email" name="email" value="{{$title!='Student Registration' ? $student->email : ''}}"/>
                </div>
            </div>

                <div class="mb-3 row">
                    <label for="male" class="col-sm-2 col-form-label">Gender</label>
                    <div class="col-sm-10">

                        <input class="form-check-input" type="radio" name="gender" id="male" value="M"
                        @if ($title!='Student Registration')
                            
                        {{$student->gender=='M' ? 'checked': ''}}
                        @endif
                        />
                        <label class="form-check-label" for="male">
                            M
                        </label>

                        <input class="form-check-input" type="radio" name="gender" id="female" value="F"
                        @if ($title!='Student Registration')
                       
                        {{$student->gender=='F' ? 'checked': ''}}
                       @endif 
                        />
                        <label class="form-check-label" for="female">
                            F
                        </label>

                        <input class="form-check-input" type="radio" name="gender" id="other" value="O"
                        @if ($title!='Student Registration')
                        
                        {{$student->gender=='O' ? 'checked': ''}}
                        @endif
                        />
                        <label class="form-check-label" for="other">
                            O
                        </label>
                    </div>
                </div>
            

        <div class="mb-3 row">

            <label for="address" class="col-sm-2 col-form-label">Address</label>
           
            <div class="col-sm-10">

                <textarea class="form-control" id="address" name="address" rows="3">{{$title!='Student Registration' ? $student->address : ''}}</textarea>
            </div>

        </div>

        <div class="mb-3 row">

            <label for="dob" class="col-sm-2 col-form-label">DOB</label>

            <div class="col-sm-10">

            <input type="date" class="form-control" name="dob" id="dob" value="{{$title!='Student Registration' ? $student->dob : ''}}"/>
            </div>
        </div>

        @if ($title=='Student Registration')

            
        <div class="mb-3 row">
            <label for="password" class="col-sm-2 col-form-label">Enter your password</label>
            <div class="col-sm-10">

                <input type="password" name="password" class="form-control" id="password"/>
            </div>
        </div>
        @endif

        <div class="mb-3 row">
            <label for="points" class="col-sm-2 col-form-label">Enter points</label>
            <div class="col-sm-10">

                <input type="number" name="points" class="form-control" id="points" value="{{$title!='Student Registration' ? $student->points : ''}}"/>
            </div>
        </div>
        
        <div class="mb-3 row">


            <div class="col">

                <button type="submit" class="btn btn-primary col-sm-12">Submit</button>
            </div>
        </div>

        </form>

    </div>
@endsection
