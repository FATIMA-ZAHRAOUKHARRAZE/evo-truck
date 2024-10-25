@extends('layout.navbar')

@section('content')
    <div style="position: relative; width: 100vw;">
        <img style="width: 100%;opacity:.9;"
            src="https://www.xcmg.com/en-ap/upload/images/2020/08/04/a35d6d08748249069143a07c1bfb604f.jpg" alt="">
        <div
            style="font-weight:bold;position: absolute; top: 20%; left: 20%; color: #ffffffc6; font-size: 24px; padding: 10px;">
            <span style="font-size:50px;"> Order now</span>
            <div style="font-weight:200;top:20px">
                </p>
            </div>
        </div>
    </div>
    <section>
        <div class="container text-center">
            <h2 style="font-weight: bold">Free Get Quote
            </h2>
            <p> Nous vous contacterons dans les 24 heures (jours ouvrables), veuillez garder votre téléphone portable ouvert. Si vous avez besoin d'autres services,
                n'hésitez pas à appeler la</p>

            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <form method="post" action="{{ route('order.inser') }}" class="w-75 "
                style="margin-left: 120px;margin-top:40px">
                @csrf
                <div class="row mb-4">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="fname"> Product category</label>
                            <input type="text" name="prod_cat" value="{{ $spesificcat }}" class="form-control" readonly>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="lname">Product model</label>
                            <input type="text" class="form-control" name="prod_mod" readonly value="{{ $name }}">
                        </div>
                    </div>
                </div>


                <div class="row mb-4">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="fname"> your name</label>
                            <input type="text" class="form-control" id="fname" name="name"
                                placeholder="Enter your first name">
                            @if ($errors->has('name'))
                                <small class="text-danger">{{ $errors->first('name') }}</small>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="lname">your phone</label>
                            <input type="text" class="form-control" id="lname" name="phone"
                                placeholder="Enter your last name">
                            @if ($errors->has('phone'))
                                <small class="text-danger">{{ $errors->first('phone') }}</small>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="fname"> Email</label>
                            <input type="mail" name="email" class="form-control" id="fname"
                                placeholder="Enter your first name">
                            @if ($errors->has('email'))
                                <small class="text-danger">{{ $errors->first('email') }}</small>
                            @endif
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="lname">country</label>
                            <input type="text" class="form-control" id="lname" name="country">
                            @if ($errors->has('country'))
                                <small class="text-danger">{{ $errors->first('country') }}</small>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="fname"> message</label>
                        <textarea class="form-control" name="message"></textarea>
                        @if ($errors->has('message'))
                            <small class="text-danger">{{ $errors->first('message') }}</small>
                        @endif
                    </div>
                </div>
                <div class="col-md-6 mt-4">
                    <div class="form-group">

                        <input type="text" class="form-control  " id="fname" placeholder="security code">
                    </div>
                </div>


                <button type="submit" class="btn btn-primary btn-block mt-4">Submit</button>
            </form>


        </div>


    </section>
@endsection
