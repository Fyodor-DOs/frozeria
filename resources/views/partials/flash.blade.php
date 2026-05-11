@if (session('success') || $errors->any())
    <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 1080; max-width: 420px;">
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show mb-2" role="alert" data-auto-dismiss>
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger alert-dismissible fade show mb-0" role="alert" data-auto-dismiss>
                <div class="fw-semibold mb-2">Periksa kembali isian berikut:</div>
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
    </div>

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
