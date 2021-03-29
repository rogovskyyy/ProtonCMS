@include('admin_template.header')
<div class='login-box'>
    <div class='login-container'>
        <form action='/dashboard/action:themes:add' method='post'>
        @csrf
        <h2>Adding new theme</h2><br />
            <div class="form-group">
                <label for="exampleInputEmail1">Catalog name (e.g. my_new_style)</label>
                <input type="text" class="form-control" aria-describedby="emailHelp" name="_catalog">
            </div><br />

            <div class="form-group">
                <label for="exampleInputEmail1">Filename (e.g. admin.blade.php)</label>
                <input type="text" class="form-control" aria-describedby="emailHelp" name="_filename">
            </div><br />

            <div class="form-group">
                <label for="exampleFormControlTextarea1">Content</label>
                <textarea type="text" class="form-control" id="exampleFormControlTextarea1" rows="3" name="_content" ></textarea>
            </div>
            <br /><br />
            
            <div class="row">
                <div class="col-sm">
                    <button type="submit" class="btn btn-primary button-login-style" style='width: 100%'>Add</button>
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