<button class="btn btn-outline-primary show-password" type="button">
    <i class="fas fa-eye"></i>
</button>

@push('scripts')
    @once 
        <script>
            let btnPassword = document.querySelector('.show-password');
            btnPassword.addEventListener('click', () => {
                let input = document.querySelector('input[name=password]')
                input.type = input.type === 'password' ? 'text' : 'password';
            })
        </script>
    @endonce
    
@endpush