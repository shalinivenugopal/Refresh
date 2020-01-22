<!-- Main JavaScript -->
<script src="{{ url('js/neat.js?v=1.0') }}"></script>

<link href="{{ url('/css/select2.min.css') }}" rel="stylesheet" />
<script src="{{ url('/js/select2.min.js') }}"></script>
<script>
    $(document).ready(function() {
        // $('.js-example-basic-single').select2();
    });
</script>

@yield('script')
</body>
</html>