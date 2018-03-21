@extends('template')

<script type="text/javascript" src="{{asset('js/tinymce/jquery.tinymce.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/tinymce/tinymce.min.js')}}"></script>

@section('page_content')
    <div class="page-header" style="background: url(assets/img/banner1.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-wrapper">
                        <h2 class="product-title">Blog</h2>
                        <ol class="breadcrumb">
                            <li><a href="#"><i class="ti-home"></i> Home</a></li>
                            <li class="current">Blog</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>
    <!-- end intro section -->
    </div>
    <section class="section">
        <div class="container">
            <h2 class="section-title">Blog Creator/Editor</h2>
            <div class="row">
                <div class="col-md-12">
                    <input id="blog_title" class="form-control" type="text" placeholder="Blog Title">
                    <textarea id="blog_editor" value="{{old('description')}}" class="form-control editor" name="description" rows="10" cols="50"></textarea>
                </div>
                <button id="blog_submit">Submit</button>
            </div>
        </div>
    </section>
    <script>
        var editor_config = {
            path_absolute : "/",
            selector: "textarea.editor",
            plugins: [
                "advlist autolink lists link image charmap print preview hr anchor pagebreak",
                "searchreplace wordcount visualblocks visualchars code fullscreen",
                "insertdatetime media nonbreaking save table contextmenu directionality",
                "emoticons template paste textcolor colorpicker textpattern codesample",
                "fullpage toc imagetools help"
            ],
            toolbar: "insertfile undo redo | styleselect | bold italic strikethrough | alignleft aligncenter alignright alignjustify | ltr rtl | bullist numlist outdent indent removeformat formatselect| link image media | emoticons charmap | code codesample | forecolor backcolor",
            external_plugins: { "nanospell": "http://192.168.10.10/js/tinymce/plugins/nanospell/plugin.js" },
            nanospell_server:"php",
            browser_spellcheck: true,
            relative_urls: false,
            remove_script_host: false,
            file_browser_callback : function(field_name, url, type, win) {
                var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
                var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

                var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
                if (type == 'image') {
                    cmsURL = cmsURL + "&type=Images";
                } else {
                    cmsURL = cmsURL + "&type=Files";
                }

                tinymce.activeEditor.windowManager.open({
                    file: '<?= route('elfinder.tinymce4') ?>',// use an absolute path!
                    title: 'File manager',
                    width: 900,
                    height: 450,
                    resizable: 'yes'
                }, {
                    setUrl: function (url) {
                        win.document.getElementById(field_name).value = url;
                    }
                });
            }
        };

        tinymce.init(editor_config);
    </script>
    <script type="text/javascript" src="{{asset('theme/jobboard-free-lite/assets/js/jquery-min.js')}}"></script>
    <script>
        $(document).ready(function() {
            {!! \File::get(base_path('vendor/barryvdh/laravel-elfinder/resources/assets/js/standalonepopup.min.js')) !!}
            $('#blog_submit').click(function() {
                var data = {
                    'blog': tinyMCE.activeEditor.getContent(),
                    'title': $("#blog_title").val(),
                    '_token': "{{csrf_token()}}"
                };
                $.post("create-blog", data, function(data){

                });
            });
        });
    </script>
@endsection
