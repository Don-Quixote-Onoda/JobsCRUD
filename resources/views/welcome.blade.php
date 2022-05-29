@extends('layout.app')
@section('content')
    @if (count($jobs) > 0)
        @foreach ($jobs as $job)
            <div class="my-5 border-blue-200 border-2 rounded-md p-5 bg-blue-50 hover:bg-blue-100 hover:cursor-pointer transition ease-in-out delay-150 duration-300">
                <h3 class="hover:underline hover:decoration-red-300 font-bold text-2xl hover:-translate-y-2 hover:cursor-pointer transition ease-in-out delay-150 duration-300">{{$job->title}}</h3>
                <h5 class="text-lg">{{$job->company_name}}</h5>
                <h5 class="text-lg">{{$job->company_location}}</h5>
                <p class="my-3 font-bold">PHP {{$job->salary}} a month</p>
                <p class="text-gray-800">{{$job->job_types}}</p>
                <p class="text-gray-800 my-1"><span class="font-bold">Posted on: </span> {{$job->date_posted}}</p>
            </div>
        @endforeach
    @else
        <h1>No jobs info added</h1>
    @endif
@endsection