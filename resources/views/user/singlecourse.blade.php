@extends('user.home')
@section('content')
<div class="container-fluid">
	<div
  class="bg-image d-flex justify-content-center align-items-center"
  style="
    background-image: url('{{ asset('images/school5.jpg') }}');
    height: 30vh;
  "
>
<div class="card-body text-center singlecoursebanner">
  <h1 class="text-white"></h1>
    <p  class="text-white">Home-Course</p>
</div>
</div>
</div>

<div class="container mt-5" style="font-family: 'Times New Roman', Times, serif">
	<div class="row">
		<div class="col-lg-6 offset-lg-3">
			<div class="card">
                @foreach (App\Course::where('id',$id)->get() as $course )
                <div class="card-body text-center">
                    <h3>{{ $course->name }}</h3>
					<p>{!! $course->description !!}</p>
				</div>

                @endforeach



			</div>
		</div>
		<div class="col-lg-12">
			<div class="row mt-5">
				{{-- <div class="col-lg-3">
					<h6>City</h6>
                    <form action="{{ route('township') }}" method="POST">
                        @csrf
					<select class="form-control" name="township" onchange="this.form.submit()">
						  <option >Please select City</option>
                          @foreach (App\City::all() as $city )
                          <option value="{{ $city->id }}" @if(Request::get('township')==$city->id)
                            selected
                          @endif>{{ $city->name }}</option>
                          @endforeach
					</select>
                    </form>
				</div> --}}

				<div class="col-lg-4">
					<h6>Township</h6>
                    <form action="{{ route('center') }}" method="GET">
                        @csrf
                        <input type="hidden" name="course_id" value="{{ $id }}">
					<select class="form-control" name="township" onchange="this.form.submit()">
						  <option value="1">All</option>
                          @foreach ($townships as $township)
						  <option value="{{ $township->id }}" @if(Request::get('township')==$township->id)
                            selected
                          @endif>{{ $township->name }}</option>

                          @endforeach

					</select>
                    </form>
				</div>
				<div class="col-lg-4">
					<h6>Type</h6>
					<select class="form-control">
						  <option selected>All</option>
                          @foreach ($types as $type )
						  <option value="{{ $type->id }}">{{ $type->name }}</option>

                          @endforeach

					</select>
				</div>
				<div class="col-lg-4">
					<h6>Center</h6>
					<select class="form-control">
						  <option selected>All</option>
                          @foreach ($centers as $center)
						  <option value="{{ $center->id }}" @if(Request::get('center')==$center->id)
                            selected
                          @endif>{{ $center->name }}</option>

                          @endforeach
					</select>
				</div>
			</div>
		</div>
	</div>
    @foreach ($courses as $course )


    <div class="row mt-5">
        <div class="col-lg-2 mt-4">
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">Time</th>

                  </tr>
                  <tr>
                    <th scope="row">Available User</th>

                  </tr>
                  <tr>
                    <th scope="row">Section</th>

                  </tr>
                  <tr>
                    <th scope="row">Fees</th>

                  </tr>
                </tbody>
              </table>
        </div>
        <div class="col-lg-2">
            <table class="table table-striped">
                <thead class="bg-info">
                  <tr>
                    <th scope="col">{{ $course->date }}</th>
                  </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">{{ $course->time }}</th>

                      </tr>
                  <tr>
                    <th scope="row">{{ $course->availableuser }}</th>

                  </tr>
                  <tr>
                    <th scope="row">{{ $course->section }}</th>

                  </tr>
                  <tr>
                    <th scope="row">{{ $course->fees }}
                    </th>

                  </tr>
                  <tr>
                    <th scope="row">
                        <button
                        type="button"
                        class="btn btn-info"
                        data-mdb-toggle="modal"
                        data-mdb-target="#exampleModal"
                        >
                       Enroll
                        </button>
                    </th>

                  </tr>
                  <div
                    class="modal fade"
                    id="exampleModal"
                    tabindex="-1"
                    aria-labelledby="exampleModalLabel"
                    aria-hidden="true"
                    >
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title text-center" id="exampleModalLabel">Register Form</h5>
                            <button
                            type="button"
                            class="btn-close"
                            data-mdb-dismiss="modal"
                            aria-label="Close"
                            ></button>
                        </div>
                        <div class="modal-body">
                            <input type="text" placeholder="Name" class="form-control"><br>
                            <input type="phone" placeholder="Phone" class="form-control"><br>
                            <input type="email" placeholder="Email" class="form-control">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-success" data-mdb-dismiss="modal">
                            Close
                            </button>
                            <button type="button" class="btn btn-info">Register</button>
                        </div>
                        </div>
                    </div>
                    </div>
                </tbody>
              </table>
        </div>

    </div>

    @endforeach
</div>
@endsection
