@props([
    'action' => '',
    'enctype' => false
])

<form class="needs-validation" action="{{$action}}" method="post" nvalidate {{$enctype ? "enctype='multipart/form-data'" : '' }}>
    {{$slot}}
</form>

@push('scripts')
    @once
        <script>
            /*From bootstrap*/
            let forms = document.getElementsByClassName('needs-validation');
                // Loop over them and prevent submission
                let validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
                });
            }, false);
            })();
        </script>
    @endonce
@endpush