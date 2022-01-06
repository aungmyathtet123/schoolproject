@extends('user.home')
@section('content')


<div class="container">
	<div class="row">
		<!-- Background image -->
        @foreach (App\Course::where('id',$id)->get() as $course )
		<div
		  class="bg-image d-flex justify-content-center align-items-center" style="
		    background-image: url('{{ asset('items/'.$course->image) }}');
		  "
		>

		<div class="card course_slide">
			<div class="card-body bannertext">

                <p>{!! $course->description !!}</p>

			</div>
		</div>

		</div>
        @endforeach

	</div>
</div>

<div class="container mt-5">
	<h3 class="text-center coursetext">Courses</h3>
	<div class="row">
		<div class="col-lg-3 coursetext">
			<div class="row">
				<div class="col-12">
                    <h5>Search Courses</h5>
                    <form action="{{ route('search') }}" method="GET">
                        @csrf
                        <input type="hidden" name="course_id" value="{{ $id }}">

					<div class="input-group">
					  <div class="form-outline">

					    <input type="search" id="form1" class="form-control" name="s" />
					    <label class="form-label" for="form1">Search</label>
					  </div>
					  <button type="submit" class="btn btn-primary">
					    <i class="fas fa-search"></i>
					  </button>
					</div>
                    </form>
				</div>
				<div class="col-12 mt-3 coursetext">
                    <h5>Location</h5>
                    <form action="{{ route('filter') }}" method="GET">
                        @csrf

                        <input type="hidden" name="course_id" value="{{ $id }}">
					<select class="form-control" name="filterby" onchange="this.form.submit()">

					 <option value="1">All</option>

                      @foreach ($townships as $township )

                      <option value="{{ $township->id }}" @if(Request::get('filterby')==$township->id)
                        selected
                      @endif>{{ $township->name }}</option>
                      @endforeach
					</select>
                </form>
				</div>
				<div class="col-12 mt-3 coursetext">
					<div class="card">
						<div class="card-body">
							<h4>Courses</h4>
                            @foreach (App\Course::all() as $course )
							<h6><a href="{{ route('course',$course->id) }}">{{ $course->name }}</a></h6>
							@endforeach
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-9 coursetext">
			<div class="row">
                @foreach ($courses as $course )
                <div class="col-lg-4">
					<div class="card">
						<div class="card-body text-center">
							<img
						      src="{{ asset('items/'.$course->image) }}"
						      class="img-fluid"
						    />
						    <h5 class="card-title">{{ $course->name }}</h5>
						    <p class="card-text">
						      {!! $course->description !!}
						    </p>
						    <a href="{{ route('singlecourse',$course->id) }}" class="btn btn-primary">{{ $course->created_at }}</a>
						</div>

					</div>
				</div>
                @endforeach


			</div>
		</div>
	</div>
</div>

@endsection
