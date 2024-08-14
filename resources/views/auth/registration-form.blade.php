<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
    <link rel="shortcut icon" href="{{ asset('img/farm_flow_logo2.png') }}" type="image/x-icon">

</head>

<body>
    <div id="auth">

        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-8 mx-auto">
                    @if ($success_message = Session::get('registration-success'))
                        <div class="alert alert-success color-info shadow">
                            {{ $success_message }}
                        </div>
                    @endif
                    <div class="card pt-4">
                        <div class="card-body">
                            <div class="text-center mb-5">
                                <img src="{{ asset('img/farm_flow_logo.png') }}" class='img-fluid mb-4'
                                    style="max-width:200px">
                                <h3>সাইন আপ করুন</h3>
                                <p>অনুগ্রহ করে নিবন্ধন করতে ফর্মটি পূরণ করুন</p>
                            </div>
                            <form action="{{ route('registerUser') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="name">আপনার নাম</label>
                                            @if ($errors->has('name'))
                                                <div class="text-danger my-1">{{ $errors->first('name') }}</div>
                                            @endif
                                            <input type="text" id="name" class="form-control" name="name"
                                                value="{{ @old('name') }}">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="name">স্পেস্ ছাড়া আপনার ছোট নাম</label>
                                            @if ($errors->has('user_name'))
                                                <div class="text-danger my-1">{{ $errors->first('user_name') }}</div>
                                            @endif
                                            <input type="text" id="user_name" class="form-control" name="user_name"
                                                value="{{ @old('user_name') }}">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="email">আপনার ইমেইল</label>
                                            @if ($errors->has('email'))
                                                <div class="text-danger my-1">{{ $errors->first('email') }}</div>
                                            @endif
                                            <input type="email" id="email" class="form-control" name="email"
                                                value="{{ @old('email') }}">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="password">আপনার পাসওয়ার্ড</label>
                                            @if ($errors->has('password'))
                                                <div class="text-danger my-1">{{ $errors->first('password') }}</div>
                                            @endif
                                            <input type="password" id="email" class="form-control" name="password"
                                                value="{{ @old('password') }}">
                                        </div>
                                    </div>
                                </diV>

                                <div class="clearfix">
                                    <button class="btn btn-primary" type="submit">সাইন আপ করুন</button>
                                </div>
                            </form>
                            <div class="mt-3">
                                <a href="{{ route('loginForm') }}">ইতিমধ্যে একটি অ্যাকাউন্ট আছে? সাইন ইন করুন</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>

</html>
