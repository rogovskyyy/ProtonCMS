@include('admin_template.header')
<div class='login-box'>
    <div class='login-container'>
    <form action='/dashboard/action:posts:update' method='post'>
        @csrf
        <h2>Editing post</h2><br />
            <div class="form-group">
                <label for="exampleInputEmail1">Mount at: </label>
                <input type="text" readonly class="form-control" aria-describedby="emailHelp" name="mount_at" value='{{ $mount_at }} '>
            </div><br />
            <div class="form-group">
                <label for="exampleInputEmail1">Custom path (e.g. /hello-world) </label>
                <input type="text" class="form-control" aria-describedby="emailHelp" name="custom_path" value='{{ $custom_path }} '>
            </div><br />
            <div class="form-group">
                <label for="exampleInputEmail1">Title</label>
                <input type="text" class="form-control" aria-describedby="emailHelp" name="title" value='{{ $title }} '>
            </div><br />

            <div class="form-group">
                <label for="exampleInputPassword1">Content</label>
                <div id='editor' style='height: 300px;'>
                    {{ $content }}
                </div>
            </div><br /><br />

            <input type='hidden' name='id' value='{{ $id }}'>
            <input type='hidden' name='content' id='content' value="">
            
            <div class="row">
                <div class="col-sm">
                    <button type="submit" class="btn btn-primary button-login-style" style='width: 100%'>Update</button>
                </div>
                <div class="col-sm">
                    <a href='/dashboard#posts'><div class="btn btn-primary button-login-style" style='width: 100%'>Cancel</div></a>
                </div>
            </div>
            </div>
        </form>
    </div>
</div><br />
<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
<script>
    var toolbarOptions = [
    ['bold', 'italic', 'underline', 'strike'],        // toggled buttons
    ['blockquote', 'code-block'],

    [{ 'header': 1 }, { 'header': 2 }],               // custom button values
    [{ 'list': 'ordered'}, { 'list': 'bullet' }],
    [{ 'script': 'sub'}, { 'script': 'super' }],      // superscript/subscript
    [{ 'indent': '-1'}, { 'indent': '+1' }],          // outdent/indent
    [{ 'direction': 'rtl' }],                         // text direction

    [{ 'size': ['small', false, 'large', 'huge'] }],  // custom dropdown
    [{ 'header': [1, 2, 3, 4, 5, 6, false] }],

    [{ 'color': [] }, { 'background': [] }],          // dropdown with defaults from theme
    [{ 'font': [] }],
    [{ 'align': [] }],

    ['clean']                                         // remove formatting button
    ];

    var quill = new Quill('#editor', {
    modules: {
        toolbar: toolbarOptions
    },
    theme: 'snow'
    });

    function updateValue() {
        $('#content').attr('value', quill.root.innerHTML);
    }

    setInterval(function() {
        updateValue();
    }, 250);



</script>
<?php
    print "<script>";
    print "var delta = quill.clipboard.convert('".$content."');
                       quill.setContents(delta, 'silent')";
    print "</script>";
?>
<p style='text-align:center; font-size: 14px; color: white;'>Powered by ProtonCMS</p>