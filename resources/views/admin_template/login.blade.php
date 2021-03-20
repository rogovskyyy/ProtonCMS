@include('admin_template.header')
<div class='login-box'>
    <div class='login-container'>
        <div class='text-center'><img src="{{ asset('content/logo.svg') }}" style='width: 65px; height: 65px;'></div>
        <form action='/dashboard/action:login' method='post'>
        @csrf
        <h2>Login</h2><br />
            <div class="form-group">
                <label for="exampleInputEmail1">Username</label>
                <input type="text" class="form-control" aria-describedby="emailHelp" name="username">
            </div><br />
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" name="password">
            </div><br /><br />
            <button type="submit" class="btn btn-primary button-login-style" style='width: 100%'>Login</button>
        </form>
    </div>
</div><br />
<p style='text-align:center; font-size: 14px; color: white;'>Powered by ProtonCMS</p>