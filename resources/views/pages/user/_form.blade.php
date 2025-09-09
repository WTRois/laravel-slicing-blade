<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
    <!-- Name Field -->
    <div class="mb-4">
        <label for="name" class="block text-sm font-semibold text-slate-700 mb-2">Name</label>
        <input type="text" id="name" name="name"
            class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none"
            placeholder="Enter full name" value="{{ old('name', $user->name ?? '') }}" required>
        @error('name')
            <span class="text-xs text-red-500 mt-1">{{ $message }}</span>
        @enderror
    </div>

    <!-- Email Field -->
    <div class="mb-4">
        <label for="email" class="block text-sm font-semibold text-slate-700 mb-2">Email</label>
        <input type="email" id="email" name="email"
            class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none"
            placeholder="Enter email address" value="{{ old('email', $user->email ?? '') }}" required>
        @error('email')
            <span class="text-xs text-red-500 mt-1">{{ $message }}</span>
        @enderror
    </div>

    <!-- Password Field -->
    <div class="mb-4 relative">
        <label for="password" class="block text-sm font-semibold text-slate-700 mb-2">Password</label>
        <div class="relative">
            <input type="password" id="password" name="password"
                class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none pr-10"
                placeholder="Enter password (leave blank to keep current password)">
            <button type="button" id="togglePassword"
                class="absolute inset-y-0 right-0 pr-3 flex items-center text-gray-500 hover:text-gray-700">
                <i class="fa-solid fa-eye"></i>
            </button>
        </div>
        @error('password')
            <span class="text-xs text-red-500 mt-1">{{ $message }}</span>
        @enderror
    </div>

    <!-- Password Confirmation Field -->
    <div class="mb-4 relative">
        <label for="password_confirmation" class="block text-sm font-semibold text-slate-700 mb-2">Confirm Password</label>
        <div class="relative">
            <input type="password" id="password_confirmation" name="password_confirmation"
                class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none pr-10"
                placeholder="Confirm password (leave blank to keep current password)">
            <button type="button" id="togglePasswordConfirmation"
                class="absolute inset-y-0 right-0 pr-3 flex items-center text-gray-500 hover:text-gray-700">
                <i class="fa-solid fa-eye"></i>
            </button>
        </div>
        @error('password_confirmation')
            <span class="text-xs text-red-500 mt-1">{{ $message }}</span>
        @enderror
    </div>

    <!-- Avatar Upload (Optional) -->
    <div class="mb-6">
        <label for="avatar" class="block text-sm font-semibold text-slate-700 mb-2">Avatar (Optional)</label>

        <!-- Custom File Input -->
        <div class="relative">
            <input type="file" id="avatar" name="avatar"
                class="absolute inset-0 w-full h-full opacity-0 cursor-pointer z-10"
                accept="image/*,.jpg,.jpeg,.png,.gif,.webp">

            <!-- Custom Button -->
            <button type="button"
                class="inline-flex items-center justify-center px-4 py-2 text-sm font-semibold text-fuchsia-600 bg-white border border-fuchsia-600 rounded-full hover:bg-fuchsia-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-fuchsia-500 transition-all hover:scale-102"
                onclick="document.getElementById('avatar').click()">
                <i class="fas fa-upload mr-1"></i> Choose File
            </button>

            <!-- File Display -->
            <div id="fileDisplay" class="mt-1 text-sm text-gray-500 hidden">
                No file chosen
            </div>

            <!-- Current Avatar Preview (if exists) -->
            @if(isset($user) && $user->avatar)
                <div class="mt-2">
                    <p class="text-xs text-gray-500 mb-1">Current Avatar:</p>
                    <img src="{{ asset('storage/' . $user->avatar) }}"
                         alt="Current Avatar"
                         class="w-16 h-16 rounded-lg object-cover border border-gray-200">
                </div>
            @endif
        </div>

        <p class="text-xs text-gray-500 mt-1">Format: JPG, JPEG, PNG, GIF (Max: 2MB)</p>
        @error('avatar')
            <span class="text-xs text-red-500 mt-1">{{ $message }}</span>
        @enderror
    </div>
</div>

@push('js')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const togglePassword = document.getElementById('togglePassword');
            const togglePasswordConfirmation = document.getElementById('togglePasswordConfirmation');
            const password = document.getElementById('password');
            const passwordConfirmation = document.getElementById('password_confirmation');
            const fileInput = document.getElementById('avatar');
            const fileDisplay = document.getElementById('fileDisplay');

            if (togglePassword) {
                togglePassword.addEventListener('click', function() {
                    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
                    password.setAttribute('type', type);
                    this.querySelector('i').classList.toggle('fa-eye');
                    this.querySelector('i').classList.toggle('fa-eye-slash');
                });
            }

            if (togglePasswordConfirmation) {
                togglePasswordConfirmation.addEventListener('click', function() {
                    const type = passwordConfirmation.getAttribute('type') === 'password' ? 'text' : 'password';
                    passwordConfirmation.setAttribute('type', type);
                    this.querySelector('i').classList.toggle('fa-eye');
                    this.querySelector('i').classList.toggle('fa-eye-slash');
                });
            }

            // Show filename when file is selected
            if (fileInput) {
                fileInput.addEventListener('change', function() {
                    if (this.files.length > 0) {
                        fileDisplay.textContent = this.files[0].name;
                        fileDisplay.classList.remove('hidden');
                    } else {
                        fileDisplay.classList.add('hidden');
                    }
                });
            }
        });
    </script>
@endpush
