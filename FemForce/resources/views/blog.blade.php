@extends('template')

@section('page_content')

    <div id="blog-container"></div>

@endsection

@section('includes')
    <script>
        var csrfToken = <?php echo json_encode(csrf_token()); ?>;
        var secureURL = "{{url('')}}";
    </script>
    <script type="text/javascript" src="{{secure_asset('js/BlogApp.js')}}"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-118270276-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'UA-118270276-1');
    </script>
@endsection