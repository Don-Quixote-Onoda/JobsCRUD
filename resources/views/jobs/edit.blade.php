@extends('layout.app')
@section('content')
    <button onclick="window.location='/jobs/{{$job->id}}'" class="underline decoration-blue-200 hover:bg-blue-300 hover:text-blue-50 hover:border-blue-300 font-bold text-lg hover:decoration-4 transition ease-in-out duration-300 px-3 py-1 mb-5 bg-blue-100 rounded-md border-2 border-gray-400">Back</button>
    {!! Form::open(['action' => ['JobsController@update', $job->id], 'method' => 'POST',  'enctype' =>'multipart/form-data']) !!}
    <input value="{{$job->title}}" type="text" name="title" id="" placeholder="Job Title" class="my-3 mx-2 border-2 w-96 focus:bg-blue-50 focus:border-blue-900 border-blue-900 rounded-lg px-5 py-2">
    <input value="{{$job->company_name}}" type="text" name="company_name" id="" placeholder="Company Name" class="my-3 mx-2 border-2 w-96 focus:bg-blue-50 focus:border-blue-900 border-blue-900 rounded-lg px-5 py-2">
    <input value="{{$job->company_location}}" type="text" name="company_location" id="" placeholder="Company Location" class="my-3 mx-2 border-2 w-96 focus:bg-blue-50 focus:border-blue-900 border-blue-900 rounded-lg px-5 py-2">
    <input value="{{$job->salary}}" type="number" name="salary" id="" placeholder="Salary" class="my-3 mx-2 border-2 w-96 focus:bg-blue-50 focus:border-blue-900 border-blue-900 rounded-lg px-5 py-2">
    <input value="{{$job->job_types}}" type="text" name="job_types" id="" placeholder="Job Types" class="my-3 mx-2 border-2 w-96 focus:bg-blue-50 focus:border-blue-900 border-blue-900 rounded-lg px-5 py-2">
    <input value="{{$job->date_posted}}" type="date" name="date_posted" class="my-3 mx-2 border-2 w-96 focus:bg-blue-50 focus:border-blue-900 border-blue-900 rounded-lg px-5 py-2">
    <br>
    {{Form::hidden('_method', 'PUT')}}
    <button type="submit" class="border-2 border-blue-800 px-4 py-2 rounded-md font-bold text-blue-900 hover:text-blue-50 hover:bg-blue-900 transition duration-300 ease-out md:ease-in">Update</button>
    {!! Form::close() !!}   
@endsection