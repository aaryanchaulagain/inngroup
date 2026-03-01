<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login | ContactHub</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    <style>body { font-family: 'Inter', sans-serif; }</style>
</head>
<body class="bg-gray-100">

<div class="flex min-h-screen">
    <!-- Left Side Image -->
    <div class="hidden md:flex w-1/2 bg-cover bg-center" style="background-image: url('{{ asset('image/s.jpg') }}');"></div>

    <!-- Right Side Form -->
    <div class="flex flex-col justify-center items-center w-full md:w-1/2 p-10">
        <div class="w-full max-w-md bg-white rounded-2xl shadow-lg p-8">
            <h2 class="text-2xl font-bold mb-6 text-center">Admin Login</h2>

            @if($errors->any())
                <div class="bg-red-100 text-red-700 p-2 rounded mb-4 text-sm">
                    {{ $errors->first() }}
                </div>
            @endif

            <form action="{{ route('admin.login.submit') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label class="block text-sm font-medium mb-1">Email</label>
                    <input type="email" name="email" value="{{ old('email') }}" class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 outline-none" placeholder="admin@inngroup.com.au" required>
                </div>
                <div class="mb-4">
                    <label class="block text-sm font-medium mb-1">Password</label>
                    <input type="password" name="password" class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 outline-none" placeholder="********" required>
                </div>
                <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded-lg font-semibold hover:bg-blue-700 transition-all">Login</button>
            </form>

            <p class="mt-6 text-center text-sm text-gray-500">
                &copy; 2026 ContactHub. All rights reserved.
            </p>
        </div>
    </div>
</div>

</body>
</html>
