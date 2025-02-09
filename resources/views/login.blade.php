<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 h-screen flex items-center justify-center">

    <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-sm">
        <h2 class="text-2xl font-bold text-center text-gray-800 mb-6">Login</h2>
        
        <form action="#" method="POST">
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-600">Email</label>
                <input type="email" id="email" name="email" required class="w-full px-4 py-2 mt-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-blue-500" placeholder="Enter your email">
            </div>

            <div class="mb-6">
                <label for="password" class="block text-sm font-medium text-gray-600">Password</label>
                <input type="password" id="password" name="password" required class="w-full px-4 py-2 mt-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-blue-500" placeholder="Enter your password">
            </div>

            <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded-md text-lg hover:bg-blue-700 transition duration-200" ><a href="/maindashboard">Login</a></button>
        </form>

        <div class="mt-4 text-center">
            <p class="text-sm text-gray-600">Don't have an account? <a href="#" class="text-blue-600 hover:text-blue-700">Sign up</a></p>
        </div>
    </div>

</body>
</html>
