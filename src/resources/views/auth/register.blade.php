<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white p-12 rounded-lg shadow-lg w-full max-w-lg">
        <h2 class="text-4xl font-bold mb-8 text-center">Register</h2>

        <!-- Success Message -->
        @if(session('success'))
            <div class="bg-green-500 text-white p-3 rounded mb-4 text-center">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('register') }}" method="POST">
            @csrf

            <div class="mb-6">
                <label class="block text-gray-700 text-lg font-bold mb-2">Name</label>
                <input type="text" name="name" value="{{ old('name') }}" class="w-full px-4 py-3 border rounded-lg focus:ring focus:ring-blue-400" required>
                @error('name')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label class="block text-gray-700 text-lg font-bold mb-2">Email</label>
                <input type="email" name="email" value="{{ old('email') }}" class="w-full px-4 py-3 border rounded-lg focus:ring focus:ring-blue-400" required>
                @error('email')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label class="block text-gray-700 text-lg font-bold mb-2">Password</label>
                <input type="password" name="password" class="w-full px-4 py-3 border rounded-lg focus:ring focus:ring-blue-400" required>
                @error('password')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label class="block text-gray-700 text-lg font-bold mb-2">Confirm Password</label>
                <input type="password" name="password_confirmation" class="w-full px-4 py-3 border rounded-lg focus:ring focus:ring-blue-400" required>
            </div>

            <button type="submit" class="w-full bg-blue-600 text-white py-3 rounded-lg hover:bg-blue-700">Register</button>
        </form>
    </div>
</body>
</html>
