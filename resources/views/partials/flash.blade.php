@if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert" data-auto-dismiss>
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

@if ($errors->any())
    <div class="alert alert-danger alert-dismissible fade show" role="alert" data-auto-dismiss>
        <div class="fw-semibold mb-2">Periksa kembali isian berikut:</div>
        <ul class="mb-0">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

@if (session('success') || $errors->any())
    @push('scripts')
        <script>
            window.setTimeout(() => {
                document.querySelectorAll('[data-auto-dismiss]').forEach((alert) => {
                    alert.classList.remove('show');
                    alert.addEventListener('transitionend', () => alert.remove());
                });
            }, 4000);
        </script>
    @endpush
@endif
