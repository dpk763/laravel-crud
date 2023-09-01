@extends('layouts.main')

@push('title')
<title>Home</title>
@endpush

@section('main-section')
    
<div class="container">

    <h1>View</h1>
    

    <table class="table">
        <thead>
          <tr>
            <th>#</th>
            <th>Name</th>
            <th>Email</th>
            <th>Gender</th>
            <th>Address</th>
            <th>DOB</th>
            <th>Points</th>
            <th>Status</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
            @php
                $i=1;
            @endphp
            @foreach ($students as $student)
                
            <tr>
                <td>@php
                    echo $i;
                @endphp</td>
                <td>{{$student->sname}}</td>
                <td>{{$student->email}}</td>
                <td>
                    @if ($student->gender=="M")
                        Male
                    @elseif ($student->gender=="F")
                        Female
                    @else
                        Other
                    @endif
                        
                    
                </td>
                <td>{{$student->address}}</td>
                <td>{{$student->dob}}</td>
                <td>{{$student->points}}</td>
                <td>
                    @if ($student->status=="1")
                    <span class="badge bg-success">Active</span>
                        
                    @else
                    
                    <span class="badge bg-danger">InActive</span>

                        
                    @endif
                </td>
                <td>
                    <a href="{{url('/students/delete')}}/{{$student->id}}">

                        <button class="btn btn-danger">Delete</button>
                    </a>
                    <a href="{{url('/students/update')}}/{{$student->id}}">

                        <button class="btn btn-primary">Edit</button>
                    </a>
                </td>
            </tr>
            @php
                $i++;
            @endphp
            @endforeach
         
        </tbody>
      </table>
      
</div>
@endsection