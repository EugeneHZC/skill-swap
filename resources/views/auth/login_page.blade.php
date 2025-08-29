<x-welcome_layout>
    <div class="form-box overflow-scroll hide-scrollbar">
        <h2 class="text-center font-semibold">Login</h2>

        <form action="{{ route('auth.login') }}" method="post">
            @csrf

            <div class="form-row">
                <label for="email">Email</label>
                <input type="email" name="email" value="{{ old('email') }}">
            </div>

            <div class="form-row">
                <label for="password">Password</label>
                <input type="password" name="password">
            </div>

            {{-- errors display --}}
            @if ($errors->any())
                <ul class="error-message">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif

            <button type="submit" class="btn btn-primary w-full">Login</button>

            <p class="text-sm mt-[5px] text-center">Don't have an account? <a href="{{ route('auth.sign_up_page') }}"
                    class="text-blue-600 hover:text-blue-800 hover:underline">Register</a>
            </p>
        </form>
    </div>
</x-welcome_layout>