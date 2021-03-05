<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Register</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<div class="row justify-content-center">
    <div class="col-xl-6 col-lg-12 col-md-9">
            <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Buat Akun</h1>
                                    </div>
                                    <form class="user" method="POST" action="{{ route('register') }}">
                                        @csrf
                                        <div class="form-group row">
                                            <div class="col-sm-12 mb-3 mb-sm-0">
                                                <input id="name" class="form-control form-control-user" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" placeholder="Masukan Nama">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-12 mb-3 mb-sm-0">
                                                <input id="telpon" class="form-control form-control-user" type="number" name="telpon" :value="old('telpon')" required autofocus autocomplete="telpon" placeholder="Masukan Nomor Telpon">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-12 mb-3 mb-sm-0">
                                                <textarea id="alamat" class="form-control" type="text" name="alamat" :value="old('alamat')" required autofocus autocomplete="alamat" placeholder="Masukan Alamat">
                                                </textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <input id="email" class="form-control form-control-user" type="email" name="email" :value="old('email')" required placeholder="Masukan Email">
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-12 mb-3 mb-sm-0">
                                                <input type="password" 
                                                id="password" class="form-control form-control-user" type="password" name="password" required autocomplete="new-password" placeholder="Masukan Password">

                                                    @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                            </div>
                                            
                                            <div class="col-sm-12 mt-3">
                                                <input id="password_confirmation" class="form-control form-control-user" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="Ulangi Password">
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-user btn-block btn-primary" href="{{route('login')}}">
                                            {{ __('daftar') }}
                                        </button>
                                    </form>
                                    <hr>
                                    <!-- <div class="text-center">
                                        <a class="small" href="forgot-password.html">Forgot Password?</a>
                                    </div> -->
                                    <div class="text-center">
                                        <a class="small" href="{{route('login')}}">Sudah Mempunyai Akun? Login disini!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</div>



    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>