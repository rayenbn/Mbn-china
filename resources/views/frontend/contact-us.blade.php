@extends('layouts.theme')
@section('content')
<!-- Breadcrumbs -->
<nav aria-label="breadcrumb" class="page-breadcrumb">
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Contact</li>
        </ol>
    </div>
</nav>

<!-- Page content -->
<div class="page-content">
    <section class="section-contact-map">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <p class="mb-40"><strong>{{ $contactus->title ?? ''}}</strong></p>
                    <p>{!! $contactus->address ?? '' !!}</p>
                    <p><a href="mailto:{{ $contactus->email ?? ''}}">{{ $contactus->email ?? ''}}</a><br />
                        {{ $contactus->phone ?? ''}}
                    </p>
                </div>

                <div class="map col-lg-9">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8 col-md-10 text-center">
                                <h2 class="h3 mb-40">Contact us</h2>

                                @if(count($errors) > 0)
                                <ul>
                                    @foreach($errors->all() as $error)
                                    <li style="color: #ff4a56;">-> {{ $error }}</li>
                                    @endforeach
                                </ul>
                                @endif
                                @if($message = Session::get('success'))
                                <h1 style="font-size: 22px;color:#34e582;">*** {{ $message }} ***</h1>
                                @endif

                                <form class="contact-form" action="{{ url('contact-us/send') }}" method="post">
                                    {{ csrf_field() }}
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <input type="text" name="name" class="form-control" placeholder="Name">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <input type="text" name="company_name" class="form-control" placeholder="Company name">

                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <input type="text" name="email" class="form-control" placeholder="E-mail address">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <input type="text" name="phone" class="form-control" placeholder="Phone number">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <textarea rows="5" class="form-control" name="message" placeholder="Your message"></textarea>
                                    </div>

                                    <div class="form-submit mt-3">
                                        <input type="submit" class="btn btn-primary btn-lg btn-block" value="Send" />
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- <section class="section-contact-form">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8 text-center">
                    <h2 class="h3 mb-40">Contact us</h2>

                    @if(count($errors) > 0)
                    <ul>
                        @foreach($errors->all() as $error)
                        <li style="color: #ff4a56;">-> {{ $error }}</li>
                        @endforeach
                    </ul>
                    @endif
                    @if($message = Session::get('success'))
                    <h1 style="font-size: 22px;color:#34e582;">*** {{ $message }} ***</h1>
                    @endif

                    <form class="contact-form" action="{{ url('contact-us/send') }}" method="post">
                        {{ csrf_field() }}
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <input type="text" name="name" class="form-control" placeholder="Name">
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" name="company_name" class="form-control" placeholder="Company name">

                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <input type="text" name="email" class="form-control" placeholder="E-mail address">
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" name="phone" class="form-control" placeholder="Phone number">
                            </div>
                        </div>

                        <div class="form-group">
                            <textarea rows="5" class="form-control" name="message" placeholder="Your message"></textarea>
                        </div>

                        <div class="form-submit mt-3">
                            <input type="submit" class="btn btn-primary btn-lg btn-block" value="Send" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section> -->
</div> <!-- /.page-content -->
@endsection