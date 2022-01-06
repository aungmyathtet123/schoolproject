@extends('user.home')
@section('content')
<div class="container" style="font-family: 'Times New Roman', Times, serif">
    <div class="row">
        @foreach ($news as $new)


        <div
            class="bg-image"
            style="
                background-image: url({{ asset('courses/'.$new->image) }});
                height: 50vh;
            "
            >
            <div class="mask" style="background-color: rgba(0, 0, 0, 0.6);">
                <div class="d-flex  align-items-center justify-content-center h-100 w-100">

                        <h1 class="text-white">{{ $new->name }}</h1>
                </div>
            </div>
            </div>
            <div class="card mt-5">
                <div class="card-title text-center">
                    <h3>Our New</h3>
                </div>
                <div class="card-body">
                    <p>{!! $new->description !!}</p>
                </div>
            </div>
            @endforeach
    </div>
</div>
@endsection
