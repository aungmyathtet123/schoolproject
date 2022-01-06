@extends('user.home')
@section('content')
<div class="container" style="font-family: 'Times New Roman', Times, serif">
    <div class="row">
        @foreach ($singledepartments as $singledepartment)


        <div
            class="bg-image"
            style="
                background-image: url({{ asset('courses/'.$singledepartment->image) }});
                height: 50vh;
            "
            >
            <div class="mask" style="background-color: rgba(0, 0, 0, 0.6);">
                <div class="d-flex  align-items-center justify-content-center h-100 w-100">

                        <h1 class="text-white">{{ $singledepartment->name }}</h1>
                </div>
            </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <p>{!! $singledepartment->description !!}</p>
                </div>
            </div>
            @endforeach
    </div>
</div>
@endsection
