@stack('before-scripts')

<script type="application/javascript" src="{{ asset('assets/plugins/jquery/jquery-3.5.1.min.js') }}"></script>
<script type="application/javascript" src="{{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script type="application/javascript" src="{{ asset('assets/plugins/datatables/datatables.min.js') }}"></script>
<script type="application/javascript" src="{{ asset('assets/plugins/perfectscroll/perfect-scrollbar.min.js') }}"></script>
<script type="application/javascript" src="{{ asset('assets/plugins/sweetalert2/sweetalert2.min.js') }}"></script>
<script type="application/javascript" src="{{ asset('assets/plugins/pace/pace.min.js') }}"></script>
<script type="application/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.min.js')}}"></script>
<script type="application/javascript" src="{{ asset('assets/js/general/datatables.min.js') }}"></script>
<script type="application/javascript" src="{{ asset('assets/js/general/main.min.js') }}"></script>
<script type="application/javascript" src="{{ asset('assets/js/general/global.min.js') }}"></script>
<script type="application/javascript" src="{{ asset('assets/js/general/sweetalert.min.js') }}"
    swal-icon="{{ session('swal.icon') }}"
    swal-title="{{ session('swal.title') }}"
    swal-text="{{ session('swal.text') }}"
    swal-button="{{ session('swal.button') }}">
</script>

@stack('after-scripts')
