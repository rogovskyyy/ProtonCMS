@include('admin_template.header')
<div class='login-box'>
    <div class='login-container'>
        <form action='/dashboard/action:pages:update' method='post'>
        @csrf
        <h2>Editing pages</h2><br />
            <div class="form-group">
                <label for="exampleInputEmail1">Page path (e.g. /home, /blog)</label>
                <select class="form-control" aria-describedby="emailHelp"  name="new_path">>
                    @php
                        for($i = 0; $i <= count($data) - 1; $i++) {
                            echo "<option value='".$data[$i]->name."'>";
                            echo $data[$i]->name." ( ".$data[$i]->path.")";
                            echo '</option>';
                        }
                    @endphp
                </select>
            </div><br />
            <input type='hidden' name='current_path' value='{{ $data[0]->path }}'>
            <div class="form-group">
                <label for="exampleInputEmail1">File path (e.g. /home.blade.php) </label>
                <input type="text" class="form-control" aria-describedby="emailHelp"  name="filename" value='{{ $data[0]->filename }}'>
            </div><br />       
            <div class="row">
                <div class="col-sm">
                    <button type="submit" class="btn btn-primary button-login-style" style='width: 100%'>Update</button>
                </div>
                <div class="col-sm">
                    <a href='/dashboard#pages'><div class="btn btn-primary button-login-style" style='width: 100%'>Cancel</div></a>
                </div>
            </div>
            </div>
        </form>
    </div>
</div><br />
<p style='text-align:center; font-size: 14px; color: white;'>Powered by ProtonCMS</p>