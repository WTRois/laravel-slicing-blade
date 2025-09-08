<script src="{{ asset('assets/js/plugins/chartjs.min.js') }}" async></script>
<script src="{{ asset('assets/js/plugins/perfect-scrollbar.min.js') }}" async></script>
<script async defer src="https://buttons.github.io/buttons.js"></script>
<script src="{{ asset('assets/js/soft-ui-dashboard-tailwind.js?v=1.0.5') }}" async></script>


@if (session('success'))
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            Toastify({
                text: '{{ session('success') }}',
                duration: 3000,
                close: true,
                gravity: "top",
                position: "right",
                stopOnFocus: true,
                style: {
                    background: "linear-gradient(to right, #8b5cf6, #a855f7)",
                    borderRadius: "0.5rem",
                    boxShadow: "0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06)",
                    fontFamily: "Open Sans, sans-serif",
                    fontSize: "0.875rem",
                    padding: "0.75rem 1rem",
                },
                onClick: function() {}
            }).showToast();
        });
    </script>
@endif

@if (session('error'))
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            Toastify({
                text: '{{ session('error') }}',
                duration: 3000,
                close: true,
                gravity: "top",
                position: "right",
                stopOnFocus: true,
                style: {
                    background: "linear-gradient(to right, #ef4444, #f87171)",
                    borderRadius: "0.5rem",
                    boxShadow: "0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06)",
                    fontFamily: "Open Sans, sans-serif",
                    fontSize: "0.875rem",
                    padding: "0.75rem 1rem",
                },
                onClick: function() {}
            }).showToast();
        });
    </script>
@endif
