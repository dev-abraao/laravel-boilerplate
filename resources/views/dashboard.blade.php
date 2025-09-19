<x-layout>
    <div>
        <h1>User Dashboard</h1>
        <p>Welcome to your dashboard, {{ Auth::user()->name }}!</p>
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit">Logout</button>
        </form>
    </div>
</x-layout>