@extends('admin.home')
@section('content')
<section class="content">
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-danger mt-5">
                    <div class="card-header">
                        <h3 class="card-title">About Form</h3>
                    </div>
                    <form action="{{ route('about.update',$about->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                    <div class="card-body">


                        <div class="form-group">
                            <label>Address</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-file-signature"></i></span>
                                </div>
                                <input type="text" class="form-control" name="address" value="{{ $about->address }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-file-signature"></i></span>
                                </div>
                                <input type="email" class="form-control" name="email" value="{{ $about->email }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Image</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-file-video"></i></span>
                                </div>
                                <input type="file" class="form-control" name="image">
                            </div>
                            <img src="{{ asset('about/'.$about->image) }}" alt="" width="100px;" height="100px;">
                        </div>
                        <div class="form-group">
                            <label>Phone</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                </div>
                                <input type="text" class="form-control" name="phone" value="{{ $about->phone }}">
                            </div>
                        </div>
                        <div>
                            <label>Description</label>
                            <textarea id="summernote" name="description">{!! $about->description !!}</textarea>
                        </div>
                        <div class="form-group">
                            <label>Facebook-link</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-file-signature"></i></span>
                                </div>
                                <input type="text" class="form-control" name="facebooklink" value="{{ $about->facebooklink }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Instagram-link</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-file-signature"></i></span>
                                </div>
                                <input type="text" class="form-control" name="instagramlink" value="{{ $about->instagramlink }}">
                            </div>
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
