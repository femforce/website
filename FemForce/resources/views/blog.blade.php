@extends('template')

@section('page_content')

    <div id="blog-container"></div>

@endsection

@section('includes')
    <script>
        var csrfToken = <?php echo json_encode(csrf_token()); ?>;
        var secureURL = "{{url('')}}";
    </script>
    <script type="text/javascript" src="{{asset('js/BlogApp.js')}}"></script>
@endsection