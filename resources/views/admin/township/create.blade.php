@extends('admin.home')
@section('content')
<section class="content">
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-danger mt-5">
                    <div class="card-header">
                        <h3 class="card-title">Township Form</h3>
                    </div>
                    <form action="{{ route('township.store') }}" method="post">
                        @csrf
                    <div class="card-body">

                        <div class="form-group">
                            <label>Name</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-file-signature"></i></span>
                                </div>
                                <input type="text" class="form-control" name="name">
                            </div>
                        </div>

                        <input type="hidden" name="city_id" value="{{ $id }}">

                        <div class="form-group">
                            <div class="input-group">
                                <input type="submit" class="btn btn-primary" value="submit">
                            </div>
                        </div>

                    </div>
                </form>
                </div>

            </div>
        </div>
    </div>
</section>


@endsection
