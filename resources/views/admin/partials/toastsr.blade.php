@if (session()->has('success'))
<script>
    toastr.success("{{ session('success') }}")

</script>
@endif

@if (session('error'))
<script>
    toastr.error("{{ session('error') }}")
</script>
@endif
