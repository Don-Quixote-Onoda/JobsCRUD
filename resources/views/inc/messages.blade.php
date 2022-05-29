@if (count($errors) > 0)
    @foreach ($errors->all() as $error)
        <div class="bg-red-500 my-3 py-2 px-5 rounded-md font-semibold text-red-100">
            {{$error}}
        </div>
    @endforeach
@endif

@if (session('success'))
    <div class="bg-green-500 my-3 py-2 px-5 rounded-md font-semibold text-green-100">
        {{session('success')}}
    </div>
@endif

@if (session('error'))
    <div class="bg-red-500 my-3 py-2 px-5 rounded-md font-semibold text-red-100">
        {{session('error')}}
    </div>
@endif