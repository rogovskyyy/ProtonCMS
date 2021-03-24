@include('admin_template.header')
<div class='login-box'>
    <div class='login-container'>
        <form action='/dashboard/action:pages:add' method='post'>
        @csrf
        <h2>Adding pages</h2><br />
                @php
                    $data_list = json_decode(json_encode($data_list), true);
                @endphp
            <div class="form-group">
                <label for="exampleInputEmail1">Attach to: </label>
                <select class="form-control" id="exampleFormControlSelect1" name='path'>
                @php
                for($i = 0; $i <= count($data_list) - 1; $i++) {
                    echo '<option>';
                    echo $data_list[$i]['pathway'];
                    echo '</option>';
                }

                @endphp
                </select>
            </div><br />
            <div class="form-group">
                <label for="exampleInputEmail1">Filename (e.g. about.blade.php)</label>
                <input type="text" class="form-control" aria-describedby="emailHelp" name="filename">

            </div><br />        
            <div class="row">
                <div class="col-sm">
                    <button type="submit" class="btn btn-primary button-login-style" style='width: 100%'>Add</button>
                </div>
                <div class="col-sm">
                    <a href='/dashboard#menus'><div class="btn btn-primary button-login-style" style='width: 100%'>Cancel</div></a>
                </div>
            </div>
            </div>
        </form>
    </div>
</div><br />
<p style='text-align:center; font-size: 14px; color: white;'>Powered by ProtonCMS</p>