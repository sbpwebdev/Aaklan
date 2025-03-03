<!-- Start Main project js, jQuery, Bootstrap -->
<script src="{!! asset('bundles/lib.vendor.bundle.js') !!}"></script>

<!-- Start Plugin Js -->
<!-- <script src="{!! asset('bundles/fullcalendar.bundle.js') !!}"></script> -->

<!-- Start project main js  and page js -->
<!-- <script src="{!! asset('js/core.js') !!}"></script>
<script src="{!! asset('assets/js/page/calendar.js') !!}"></script> -->

<!-- Start all plugin js -->
<script src="{!! asset('bundles/counterup.bundle.js') !!}"></script>
<script src="{!! asset('bundles/apexcharts.bundle.js') !!}"></script>
<script src="{!! asset('bundles/summernote.bundle.js') !!}"></script>
<script src="{!! asset('plugins/sweetalert/sweetalert.min.js') !!}"></script>
<script src="{!! asset('bundles/dataTables.bundle.js') !!}"></script>

<!-- Start project main js  and page js -->
<script src="{!! asset('js/core.js') !!}"></script>
<script src="{!! asset('assets/js/page/index.js') !!}"></script>
<script src="{!! asset('assets/js/page/summernote.js') !!}"></script>
<script>
document.addEventListener('DOMContentLoaded', function () {
    const sweetAlertBtn = document.querySelector('.js-sweetalert');
    
    if (sweetAlertBtn) {
        sweetAlertBtn.addEventListener('click', function (e) {
            e.preventDefault();
            
            Swal.fire({
                title: 'Are you sure?',
                text: 'You really want to delete this record?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Example: Submit the form (if it's a form submit action)
                    document.getElementById('delete-form').submit(); // Make sure your form has this id
                }
            });
        });
    }
});

</script>
</body>
</html>
