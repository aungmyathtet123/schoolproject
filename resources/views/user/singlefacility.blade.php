@extends('user.home')
@section('content')
<div class="container" style="font-family: 'Times New Roman', Times, serif">
    <div class="row">
        @foreach ($singlefacilities as $singlefacility)


        <div
            class="bg-image"
            style="
                background-image: url({{ asset('courses/'.$singlefacility->image) }});
                height: 50vh;
            "
            >
            <div class="mask" style="background-color: rgba(0, 0, 0, 0.6);">
                <div class="d-flex  align-items-center justify-content-center h-100 w-100">

                        <h1 class="text-white">{{ $singlefacility->name }}</h1>
                </div>
            </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <p>{!! $singlefacility->description !!}</p>
                </div>
            </div>
            @endforeach
    </div>
</div>
@endsection
