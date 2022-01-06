@extends('user.home')
@section('content')
<div class="container" style="font-family: 'Times New Roman', Times, serif">
    <div class="row">

        <div class="col-lg-8 offset-lg-4">

            <div
            class="bg-image"
            style="
                background-image: url('images/school2.jpg');
                height: 50vh;
            "
            >
            <div class="mask" style="background-color: rgba(0, 0, 0, 0.6);">
                <div class="d-flex  align-items-center justify-content-center h-100 w-100">
                    <div class="card">
                        <div class="card-body">
                            @foreach (App\Category::where('id',4)->get() as $department)
                            <h3>{{ $department->name }}</h3>
                            <p>{!! $department->description !!}</p>
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
                    @foreach (App\Item::where('category_id', 4)->take(1)->get() as $department)

                    <img src="{{ asset('courses/'.$department->image) }}" alt="Avatar" class="image" style="width:100%; height: 30vh;">
                    <div class="middle">
                        <div class="text"><a href="{{ route('singledepartment',$department->id) }}" class="text-dark">{{ $department->name }}</a></div>
                    </div>
                    @endforeach
                </div>
            </div>


        </div>

        <div class="col-lg-6 offset-lg-6">
            <div class="card">
                <div class="card-body department">
                    @foreach (App\Item::where('category_id', 4)->skip(1)->take(1)->get() as $department)
                    <img src="{{ asset('courses/'.$department->image) }}" alt="Avatar" class="image" style="width:100%; height: 30vh;">
                    <div class="middle">
                        <div class="text"><a href="{{ route('singledepartment',$department->id) }}" class="text-dark">{{ $department->name }}</a></div>
                    </div>
                    @endforeach
                </div>
            </div>


        </div>

        <div class="col-lg-6">
            <div class="card">
                <div class="card-body department">
                    @foreach (App\Item::where('category_id', 4)->skip(2)->take(1)->get() as $department)
                    <img src="{{ asset('courses/'.$department->image) }}" alt="Avatar" class="image" style="width:100%; height: 30vh;">
                    <div class="middle">
                        <div class="text"><a href="{{ route('singledepartment',$department->id) }}" class="text-dark">{{ $department->name }}</a></div>
                    </div>
                    @endforeach

                </div>
            </div>


        </div>
    </div>

</div>
@endsection
