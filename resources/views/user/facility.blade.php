@extends('user.home')
@section('content')
<div class="container" style="font-family: 'Times New Roman', Times, serif">
    <div class="row">

        <div class="col-lg-8 offset-lg-4">

            <div
            class="bg-image"
            style="
                background-image: url('images/facility4.jpg');
                height: 50vh;
            "
            >
            <div class="mask" style="background-color: rgba(0, 0, 0, 0.6);">
                <div class="d-flex  align-items-center justify-content-center h-100 w-100">
                    <div class="card">
                        <div class="card-body">
                            @foreach (App\Category::where('id',5)->get() as $facility)
                            <h3>{{ $facility->name }}</h3>
                            <p>{!! $facility->description !!}</p>
                            @endforeach


                        </div>
                    </div>
                </div>
            </div>
            </div>

        </div>
    </div>
    <div class="row mt-5">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body department">
                    @foreach (App\Item::where('category_id', 5)->take(1)->get() as $facility)

                    <img src="{{ asset('courses/'.$facility->image) }}" alt="Avatar" class="image" style="width:100%; height: 30vh;">
                    <div class="middle">
                        <div class="text"><a href="{{ route('singlefacility',$facility->id) }}" class="text-dark">{{ $facility->name }}</a></div>
                    </div>
                    @endforeach
                </div>
            </div>


        </div>

        <div class="col-lg-6 offset-lg-6">
            <div class="card">
                <div class="card-body department">
                    @foreach (App\Item::where('category_id', 5)->skip(1)->take(1)->get() as $facility)
                    <img src="{{ asset('courses/'.$facility->image) }}" alt="Avatar" class="image" style="width:100%; height: 30vh;">
                    <div class="middle">
                        <div class="text"><a href="{{ route('singlefacility',$facility->id) }}" class="text-dark">{{ $facility->name }}</a></div>
                    </div>
                    @endforeach
                </div>
            </div>


        </div>

        <div class="col-lg-6">
            <div class="card">
                <div class="card-body department">
                    @foreach (App\Item::where('category_id', 5)->skip(2)->take(1)->get() as $facility)
                    <img src="{{ asset('courses/'.$facility->image) }}" alt="Avatar" class="image" style="width:100%; height: 30vh;">
                    <div class="middle">
                        <div class="text"><a href="{{ route('singlefacility',$facility->id) }}" class="text-dark">{{ $facility->name }}</a></div>
                    </div>
                    @endforeach

                </div>
            </div>


        </div>
    </div>

</div>
@endsection
