@extends('user.home')
@section('content')
<div class="container" style="font-family: 'Times New Roman', Times, serif">
    <div class="row">



        <div
            class="bg-image"
            style="
                background-image: url({{ asset('images/school2.jpg') }});
                height: 30vh;
            "
            >
            <div class="mask" style="background-color: rgba(0, 0, 0, 0.6);">
                <div class="d-flex  align-items-center justify-content-center h-100 w-100">

                        <h1 class="text-white">Home-Contact</h1>
                </div>
            </div>
            </div>

    </div>
</div>
<div class="container mt-5">
    <div class="row">
        <div class="col-lg-6">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29551.356495925913!2d96.09874234530955!3d22.205163009270834!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30cb40d71f99abb3%3A0x374df42cac73959b!2sMadaya!5e0!3m2!1sen!2smm!4v1641354233975!5m2!1sen!2smm" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
        <div class="col-lg-6">
            @foreach ($contacts as $contact)
            <div class="card mt-5">
                <div class="card-body">
                   <ul style="list-style-type: none">
                       <li><i class="fas fa-home fa-lg"></i>&nbsp;{{ $contact->email }}</li><br>
                       <li><i class="fas fa-phone fa-lg"></i>&nbsp;{{ $contact->phone }}</li><br>
                       <li><i class="fas fa-map-marked-alt fa-lg"></i>&nbsp;{{ $contact->address }}</li><br>
                       <li>
                           <a href="{{ $contact->facebooklink }}"><i class="fab fa-facebook-square fa-lg"></i></a>
                           <a href="{{ $contact->instagramlink }}"><i class="fab fa-instagram-square fa-lg"></i></a>
                    </li>

                   </ul>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
