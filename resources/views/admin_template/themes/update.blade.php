@include('admin_template.header')
<div class='login-box'>
    <div class='login-container'>
        <form action='/dashboard/action:themes:update' method='post'>
        @csrf
        <h2>Adding new theme</h2><br />
            <div class="form-group">
                <label for="exampleInputEmail1">Edit file path</label>
                <input type="text" class="form-control" readonly aria-describedby="emailHelp" name="_path" value="{{ $catalog.'/'.$filename }}">
            </div><br />

            <div class="form-group">
                <label for="exampleFormControlTextarea1">Content</label>
                <textarea class="form-control " id="exampleFormControlTextarea1" rows="3" name="_content">{{ $content }}</textarea>
            </div>
            <br /><br />

            <input type='hidden' name='_catalog' value='{{ $catalog }}'>
            <input type='hidden' name='_filename' value='{{ $filename }}'>
            
            <div class="row">
                <div class="col-sm">
                    <button type="submit" class="btn btn-primary button-login-style" style='width: 100%'>Update</button>
                </div>
                <div class="col-sm">
                    <a href='/dashboard#themes'><div class="btn btn-primary button-login-style" style='width: 100%'>Cancel</div></a>
                </div>
            </div>
            </div>
        </form>
    </div>
</div><br />
<p style='text-align:center; font-size: 14px; color: white;'>Powered by ProtonCMS</p>