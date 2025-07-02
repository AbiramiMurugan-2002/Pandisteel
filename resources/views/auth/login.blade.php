@extends('layouts.app')

@section('content')
<div class="max-w-md mx-auto mt-10 bg-white p-6 rounded shadow">
    <h2 class="text-xl font-bold mb-4">Login</h2>
    <form method="POST" action="/login" class="space-y-4">
        @csrf
        <input type="email" name="email" placeholder="Email"
            class="w-full border rounded px-4 py-2" required>

        <input type="password" name="password" placeholder="Password"
            class="w-full border rounded px-4 py-2" required>

        <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded w-full">Login</button>
    </form>
</div>
@endsection
