@extends('user.home')
@section('content')
<div class="container-fluid slider">
	<div id="carouselExampleControls" class="carousel slide" data-mdb-ride="carousel">
	  <div class="carousel-inner">
          @php
              $slider=App\Slider::first();

          @endphp
	    <div class="carousel-item active">
	      <img
	        src="{{ asset('slider/'.$slider->image) }}"
	        class="d-block w-100 h-100"
	        alt="Wild Landscape"
	      />
	      <div class="carousel-content d-none d-sm-block">
	      	<h3>{{ $slider->title }}</h3>
	        		<p>{!! $slider->description !!}</p>
                    <a class="btn btn-primary btn-rounded"><i class="far fa-clone left"></i> See More</a>
	      </div>
	    </div>
	    @foreach ($sliders as $slider )
          <div class="carousel-item">
            <img
              src="{{ asset('slider/'.$slider->image) }}"
              class="d-block w-100 h-100"
              alt="Wild Landscape"
            />
            <div class="carousel-content d-none d-sm-block">
                <h3>{{ $slider->title }}</h3>
                      <p>{!! $slider->description !!}</p>
                      <a class="btn btn-primary btn-rounded"><i class="far fa-clone left"></i> See More</a>
            </div>
          </div>
          @endforeach


	  </div>
	  <button
	    class="carousel-control-prev"
	    type="button"
	    data-mdb-target="#carouselExampleControls"
	    data-mdb-slide="prev"
	  >
	    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	    <span class="visually-hidden">Previous</span>
	  </button>
	  <button
	    class="carousel-control-next"
	    type="button"
	    data-mdb-target="#carouselExampleControls"
	    data-mdb-slide="next"
	  >
	    <span class="carousel-control-next-icon" aria-hidden="true"></span>
	    <span class="visually-hidden">Next</span>
	  </button>
	</div>
	<!-- Background image -->
</div>
<div class="container mt-5">
    <h3 class="text-center">Course</h3>

<div class="row mt-5">
    <?php $count = 0; ?>

    @foreach ($courses as $course)
    <?php if($count == 4) break;?>
    <div class="col-lg-6 margin-course">
        <div class="card text-center animated bounce infinite" id="animated-img1">
            <div class="card-title coursename">
                <h5>{{ $course->name }}</h5>
            </div>
            <div class="card-body course">
                <a href="{{ route('course',$course->id) }}" class="text-dark">{!! $course->description !!}</a>
            </div>
        </div>
    </div>
    <?php $count++; ?>
    @endforeach



</div>
</div>

<div class="container-fluid">
<div class="row">
       <div class="col-lg-12 mb-4">
        <div class="card card-image homeimage" style="background-image: url({{ asset('images/school5.jpg') }});">
            <div class="text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4">
                <div class="card-body homeimagebody">

                    <h3 class="card-title py-3  font-weight-bold"><strong>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat fugiat, laboriosam, voluptatem,
                        Odit sed qui, dolorum!"</strong></h3>
                    {{-- <p class="pb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat fugiat, laboriosam, voluptatem,
                        optio vero odio nam sit
                        Odit sed qui, dolorum!</p> --}}
                    <!-- <a class="btn btn-secondary btn-rounded"><i class="far fa-clone left"></i> View project</a> -->
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<div class="container">
<div class="row">
    <h3 class="text-center">Education Service</h3>
    <?php $count = 0; ?>
    @foreach ($services as $service)
    <?php if($count == 3) break;?>
    <div class="col-lg-4 mt-5">
        <div class="card">
            <div class="card-title text-center"><i class="fas fa-desktop fa-2x"></i></div>
            <div class="card-body service text-center">
                <h5>{{ $service->name }}</h5>
                <a href="{{ route('service',$service->id) }}" class="text-dark"><p>{!! $service->description !!}</p>
                </a>
            </div>

        </div>
    </div>
    <?php $count++; ?>
    @endforeach


</div>
</div>

<div class="container mt-5">
<div class="row justify-content-center">
    <h3 class="text-center">Our Management</h3>
    @php
        $management=App\Item::where('category_id',2)->first();
    @endphp
    <div class="col-lg-6 offset-lg-3 mt-5">
        <div class="flip-card">
          <div class="flip-card-inner">
            <div class="flip-card-front">
              <img src="{{ asset('courses/'.$management->image) }}" alt="Avatar" style="width:300px;height:300px;border-radius:50%">
            </div>
            <div class="flip-card-back">
              <h1>{{ $management->name }}</h1>
              <p>{!! $management->description !!}</p>

            </div>
          </div>
        </div>

    </div>

    @foreach ($managements as $management )
    <div class="col-lg-4 offset-lg-2">
        <div class="flip-card">
          <div class="flip-card-inner">
            <div class="flip-card-front">
              <img src="{{ asset('courses/'.$management->image) }}" alt="Avatar" style="width:300px;height:300px; ">
            </div>
            <div class="flip-card-back">
              <h5>{{ $management->name }}</h5>
              <p>{!! $management->description !!}</p>
            </div>
          </div>
        </div>
    </div>
    @endforeach


</div>
</div>

<div class="container-fluid mt-5">
<h3 class="text-center">News</h3>
<div class="row mt-5">
    @php
    $new=App\Item::where('category_id',3)->first();
@endphp
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body text-center">
                <img src="{{ asset('courses/'.$new->image) }}" class="img-fluid">
                <h5>{{ $new->name }}</h5>
                <a href="{{ route('news',$new->id) }}" class="text-dark"> <p style="text-align: justify">{!! $new->description !!}</p></a>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="row">
            @foreach ($news as $new )
            <div class="col-6">
                <div class="card">
                    <div class="card-body text-center">
                        <img src="{{ asset('courses/'.$new->image) }}" class="img-fluid">
                        <h5>{{ $new->name }}</h5>
                        <a href="{{ route('news',$new->id) }}" class="text-dark"><p>{!! $new->description !!}</p></a>
                    </div>
                </div>
            </div>
            @endforeach


        </div>
    </div>
</div>
</div>
@endsection
