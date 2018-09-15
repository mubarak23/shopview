
 <!-- App js -->
<script src="{{ asset('temp/js/vendor.min.js') }}"></script>
<script src="{{ asset('temp/js/app.min.js') }}"></script>
<!-- Plugins js -->
<script src="{{ asset('temp/js/vendor/Chart.bundle.js') }}"></script>
<script src="{{ asset('temp/js/vendor/jquery.sparkline.min.js') }}"></script>
<script src="{{ asset('temp/js/vendor/jquery.knob.min.js') }}"></script>
<script src="{{ asset('temp/js/vendor/jquery.dataTables.js') }}"></script>
<script src="{{ asset('temp/js/vendor/dataTables.bootstrap4.js') }}"></script>
<script src="{{ asset('temp/js/vendor/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('temp/js/vendor/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('temp/js/pages/dashboard.init.js') }}"></script>

<script>
        $(document).ready(function() {
            // Default Datatable
            $('#basic-datatable').DataTable({
                "pageLength": 8,
                "lengthMenu": [[8, 15, 25, 50, -1], [8, 15, 25, 50, "All"]],
                "language": {
                    "paginate": {
                        "previous": "<i class='mdi mdi-chevron-left'>",
                        "next": "<i class='mdi mdi-chevron-right'>"
                    }
                },
                "drawCallback": function () {
                    $('.dataTables_paginate > .pagination').addClass('pagination-rounded');
                }
            });
        });
    </script>
