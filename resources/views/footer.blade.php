<!-- Start Main project js, jQuery, Bootstrap -->
<script src="{!! asset('bundles/lib.vendor.bundle.js') !!}"></script>

<!-- Start Plugin Js -->
<!-- <script src="{!! asset('bundles/fullcalendar.bundle.js') !!}"></script> -->

<!-- Start project main js  and page js -->
<!-- <script src="{!! asset('js/core.js') !!}"></script>
<script src="{!! asset('assets/js/page/calendar.js') !!}"></script> -->

<!-- Start all plugin js -->
<script src="{!! asset('bundles/counterup.bundle.js') !!}"></script>
<!-- <script src="{!! asset('bundles/apexcharts.bundle.js') !!}"></script> -->
<script src="{!! asset('bundles/summernote.bundle.js') !!}"></script>
<script src="{!! asset('bundles/sweetalert.bundle.js') !!}"></script>
<script src="{!! asset('bundles/dataTables.bundle.js') !!}"></script>

<!-- Start project main js  and page js -->
<script src="{!! asset('js/core.js') !!}"></script>
<script src="{!! asset('assets/js/page/index.js') !!}"></script>
<script src="{!! asset('assets/js/page/summernote.js') !!}"></script>

<script>
    //$(document).ready(function() {
        $('.menu_toggle').click(function() {
            $('#menu').toggle();  // Toggle the visibility of the menu
        });
   // });
</script>
</body>
</html>
