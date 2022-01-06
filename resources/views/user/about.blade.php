@extends('user.home')
@section('content')
<div class="container" style="font-family: 'Times New Roman', Times, serif">
    <div class="row">
        @foreach ($abouts as $about)


        <div
            class="bg-image"
            style="
                background-image: url({{ asset('about/'.$about->image) }});
                height: 50vh;
            "
            >
            <div class="mask" style="background-color: rgba(0, 0, 0, 0.6);">
                <div class="d-flex  align-items-center justify-content-center h-100 w-100">

                        <h1 class="text-white">Home-About</h1>
                </div>
            </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <p>{!! $about->description !!}</p>
                </div>
            </div>
            @endforeach
    </div>
</div>
<div class="container mt-5" style="font-family: 'Times New Roman', Times, serif">
    <h3 class="text-center">Our Managements</h3>
    <div class="row mt-3">
        @foreach ($managements as $management)
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <img src="{{ asset('courses/'.$management->image) }}" alt="" style="width:300px;height:300px;border-radius:50%">
                    <h4 class="text-center">{{ $management->name }}</h4>
                </div>
            </div>
        </div>
        @endforeach

    </div>
</div>
<div class="container mt-5" style="font-family: 'Times New Roman', Times, serif">
    <h3 class="text-center">Group Company</h3>
    <div class="row justify-content-center">
        @foreach ($groupcompanies as $groupcompany )
        <div class="col-lg-2  m-5 ">
            <div class="card">
                <div class="card-body text-center">
                    <img src="{{ asset('company/'.$groupcompany->image) }}" alt="" class="img-fluid">
                    <h5>{{ $groupcompany->name }}</h5>
                </div>
            </div>
            <p class="text-center">{!! $groupcompany->description !!}</p>
        </div>
        @endforeach

    </div>
</div>

@endsection
