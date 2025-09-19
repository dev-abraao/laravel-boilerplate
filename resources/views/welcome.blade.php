<x-layout>
        <div>
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <input type="email" name="email" placeholder="E-mail" required>
                    @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                <input type="password" name="password" placeholder="Senha" required>
                    @error('password')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                <button type="submit">Log in</button>
            </form>
        </div>

        <a href="{{ route('register.view') }}">Sign up</a>
</x-layout>