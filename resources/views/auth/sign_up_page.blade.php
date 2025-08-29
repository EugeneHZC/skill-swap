<x-welcome_layout>
    <div class="form-box overflow-scroll hide-scrollbar">
        <h2 class="text-center font-semibold">Sign Up</h2>

        <form action="{{ route('auth.sign_up') }}" method="post">
            @csrf

            <div class="form-row">
                <label for="username">Username</label>
                <input type="text" name="username" value="{{ old('username') }}">
            </div>

            <div class="form-row">
                <label for="email">Email</label>
                <input type="email" name="email" value="{{ old('email') }}">
            </div>

            <div class="form-row">
                <label for="gender">Gender</label>
                <select name="gender">
                    <option value="Male" {{ old('gender') === 'Male' ? 'selected' : '' }}>Male</option>
                    <option value="Female" {{ old('gender') === 'Female' ? 'selected' : '' }}>Female</option>
                </select>
            </div>

            <div class="form-row">
                <label for="phone_number">Phone Number</label>
                <input type="text" name="phone_number" value="{{ old('phone_number') }}">
            </div>

            <div class="form-row">
                <label for="password">Password</label>
                <input type="password" name="password">
            </div>

            <div class="form-row">
                <label for="password_confirmation">Confirm Password</label>
                <input type="password" name="password_confirmation">
            </div>

            {{-- errors display --}}
            @if ($errors->any())
                <ul class="error-message">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif

            <button type="submit" class="btn btn-primary w-full">Sign Up</button>

            <p class="text-sm mt-[5px] text-center">Already have an account? <a href="{{ route('auth.login_page') }}"
                    class="text-blue-600 hover:text-blue-800 hover:underline">Login</a>
            </p>
        </form>
    </div>
</x-welcome_layout>