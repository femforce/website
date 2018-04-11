@extends('employeeTemplate')

@section('page_content')

    <div id="blog-editor-container"></div>

@endsection

@section('includes')
    <script>
        var csrfToken = <?php echo json_encode(csrf_token()); ?>;
        var secureURL = "{{url('')}}";
    </script>
    <script type="text/javascript" src="{{asset('js/BlogEditorApp.js')}}"></script>
@endsection
