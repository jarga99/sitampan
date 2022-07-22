<div class="login-box">
    <h2 style="text-align:center "><b>SITAMPAN</b></h2>
    <h3 style="text-align:center ">Sistem Informasi Tanam Panen</h3>
    <!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg">Silahkan login terlebih dahulu</p>

        <form action="{{route('login')}}" method="post" class="form-login">
            @csrf
            <div class="form-group has-feedback @error('username')
                has-error
            @enderror">
                <input type="text" name="username" class="form-control" placeholder="Username" required value="{{old('username')}}" autofocus>
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                @error('username')
                    <span class="help-block">{{ $message }}</span>
                @else
                <span class="help-block with-errors"></span>
                @enderror

            </div>
            <div class="form-group has-feedback @error('password')
                has-error
            @enderror">
                <input type="password" name="password" class="form-control" placeholder="Password" required>
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                @error('passowrd')
                    <span class="help-block">{{ $message }}</span>
                @else
                <span class="help-block with-errors"></span>
                @enderror
            </div>
            <div class="row">
                <div class="col-xs-8">
                    <div class="checkbox icheck">
                        <label>
                            <input type="checkbox"> Remember Me
                        </label>
                    </div>
                </div>
                <!-- /.col -->
                <div class="col-xs-4">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">Login</button>
                </div>
                <!-- /.col -->
            </div>
        </form>
    </div>
    <!-- /.login-box-body -->
</div>
