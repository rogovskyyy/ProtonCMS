@include('admin_template.header')
<style>

    .box {
        width: 25%;
        margin: auto;
        background: white;
        border-radius: 12px;
        margin-top: 125px;
        -webkit-box-shadow: 4px 4px 22px -3px rgba(0,0,0,0.56); 
        box-shadow: 4px 4px 22px -3px rgba(0,0,0,0.56);
    }

    .content {
        padding: 30px 30px 30px 30px;
    }

    .button-login-style { 
        background: rgb(238,70,140);
        background: linear-gradient(90deg, rgba(238,70,140,1) 0%, rgba(240,68,125,1) 50%, rgba(241,66,116,1) 100%);
        border-radius: 12px;
        border: none;
    }

    .button-login-style:hover { 
        background: rgb(238,70,140);
        background: linear-gradient(90deg, rgba(238,70,140,1) 0%, rgba(240,68,125,1) 50%, rgba(241,66,116,1) 100%);
        border-radius: 12px;
        border: none;
        -webkit-box-shadow: 2px 2px 11px -3px rgba(0,0,0,0.56); 
        box-shadow: 2px 2px 11px -3px rgba(0,0,0,0.56);
    }

</style>
<div class='box'>
    <div class='content'>
        <div class='text-center'><img src="{{ asset('content/logo.svg') }}" style='width: 65px; height: 65px;'></div>
        <form action='/pcms-admin/action:login' method='post'>
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