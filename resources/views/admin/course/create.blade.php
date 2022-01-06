@extends('admin.home')
@section('content')
<section class="content">
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-danger mt-5">
                    <div class="card-header">
                        <h3 class="card-title">Course Form</h3>
                    </div>
                    <form action="{{ route('course.store') }}" method="post" enctype="multipart/form-data">
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
                        <div>
                            <label>Description</label>
                            <textarea id="summernote" name="description"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Image</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-file-video"></i></span>
                                </div>
                                <input type="file" class="form-control" name="image">
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Township</label>
                            <select class="select2" multiple="multiple" data-placeholder="Select a State" style="width: 100%;" name="township_id[]">
                                @foreach ($townships as $township )
                                <option value="{{ $township->id }}">{{ $township->name }}</option>
                                @endforeach
                            </select>
                          </div>

                          <div class="form-group">
                            <label>Date</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-file-signature"></i></span>
                                </div>
                                <input type="date" class="form-control" name="date">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Time</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-file-signature"></i></span>
                                </div>
                                <input type="text" class="form-control" name="time">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Availbleuser</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-file-signature"></i></span>
                                </div>
                                <input type="number" class="form-control" name="availableuser">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Section</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-file-signature"></i></span>
                                </div>
                                <input type="text" class="form-control" name="section">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Fees</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-file-signature"></i></span>
                                </div>
                                <input type="text" class="form-control" name="fees">
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Township</label>
                            <select class="select2" multiple="multiple" data-placeholder="Select a State" style="width: 100%;" name="type_id">
                                @foreach ($types as $type )
                                <option value="{{ $type->id }}">{{ $type->name }}</option>
                                @endforeach
                            </select>
                          </div>



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

