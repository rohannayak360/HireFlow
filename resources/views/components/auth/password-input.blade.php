@props(['id' => 'password', 'name' => 'password', 'required' => true, 'placeholder' => 'Enter your password'])

<div class="relative group">
    <div class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none">
        <i class="fas fa-lock text-gray-400 group-focus-within:text-blue-500 transition-colors"></i>
    </div>
    
    <input 
        type="password" 
        id="{{ $id }}" 
        name="{{ $name }}" 
        {{ $required ? 'required' : '' }} 
        class="block w-full rounded-xl border-0 py-3 pl-11 pr-12 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300/40 placeholder:text-gray-400 bg-white/70 backdrop-blur-md focus:ring-2 focus:ring-inset focus:ring-blue-600 sm:text-sm sm:leading-6 auth-input"
        placeholder="{{ $placeholder }}"
    >
    
    <div class="absolute inset-y-0 right-0 flex items-center pr-3">
        <button 
            type="button" 
            onclick="togglePasswordVisibility('{{ $id }}')"
            class="p-1 text-gray-400 hover:text-blue-600 focus:outline-none transition-colors rounded-lg hover:bg-black/5"
            tabindex="-1"
        >
            <i class="fas fa-eye" id="toggle-icon-{{ $id }}"></i>
        </button>
    </div>
</div>

<script>
    if (typeof togglePasswordVisibility !== 'function') {
        function togglePasswordVisibility(inputId) {
            const input = document.getElementById(inputId);
            const icon = document.getElementById('toggle-icon-' + inputId);
            
            if (input.type === 'password') {
                input.type = 'text';
                icon.classList.remove('fa-eye');
                icon.classList.add('fa-eye-slash');
            } else {
                input.type = 'password';
                icon.classList.remove('fa-eye-slash');
                icon.classList.add('fa-eye');
            }
        }
    }
</script>
