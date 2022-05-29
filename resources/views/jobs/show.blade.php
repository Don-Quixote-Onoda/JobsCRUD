@extends('layout.app')
@section('content')
    <button onclick="window.location='/jobs'" class="underline decoration-blue-200 hover:bg-blue-300 hover:text-blue-50 hover:border-blue-300 font-bold text-lg hover:decoration-4 transition ease-in-out duration-300 px-3 py-1 mb-5 bg-blue-100 rounded-md border-2 border-gray-400">Back</button>
    <div class="ml-10">
        <h3 class="font-bold text-2xl">{{$job->title}}</h3>
        <h5 class="text-lg">{{$job->company_name}}</h5>
        <h5 class="text-lg">{{$job->company_location}}</h5>
        <p class="my-3 font-bold">PHP {{$job->salary}} a month</p>
        <p class="text-gray-800">{{$job->job_types}}</p>
        <p class="text-gray-800 my-1"><span class="font-bold">Posted on: </span> {{$job->date_posted}}</p>
        <div class="mt-5">
            <button onclick="window.location='/jobs/{{$job->id}}/edit'" class="inline-block mr-2 underline decoration-blue-200 hover:bg-blue-700 hover:text-blue-50 hover:border-blue-300 font-bold text-lg hover:decoration-4 transition ease-in-out duration-300 px-3 py-1 mb-5 bg-blue-100 rounded-md border-2 border-gray-400">Edit</button>
            {!!Form::open(['action' => ['JobsController@destroy', $job->id], 'method' => 'POST', 'class'=>'w-30 inline-block'])!!}
                {{Form::hidden('_method', 'DELETE')}}
                <button type="submit" class="mx-2 underline inline-block decoration-red-200 hover:bg-red-700 hover:text-red-50 hover:border-red-300 font-bold text-lg hover:decoration-4 transition ease-in-out duration-300 px-3 py-1 mb-5 bg-red-100 rounded-md border-2 border-gray-400">Delete</button>
            {!!Form::close()!!}
            
        </div>
    </div>
@endsection