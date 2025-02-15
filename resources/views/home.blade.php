<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luxury Hotel | Home</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body class="bg-gray-100">

    @include('Shared.header')


    <!-- Navbar -->


    <!-- Hero Section -->
    <div class="relative min-h-[400px] bg-cover bg-center flex items-center justify-center text-white"
        style="background-image: url('https://i.ibb.co/SzGFCHt/Banner.jpg');">
        <div class="bg-black bg-opacity-30 p-8 text-center rounded-2xl">
            <h1 class="text-4xl md:text-5xl font-bold">Welcome to GrandPr0 Hotel</h1>
            <p class="text-lg md:text-2xl mt-4">Experience luxury and comfort like never before.</p>
        </div>
    </div>






    <!-- About  -->
    <div class="py-8">
        <div class="hero bg-base-200 min-h-screen">
            <div class="hero-content flex flex-col lg:flex-row items-center justify-center gap-8 px-4 lg:px-16">
                <!-- Image Section -->
                <img src="https://i.ibb.co/xSHHq43t/View.jpg" class="rounded-lg shadow-2xl" alt="View" />

                <!-- Text Section -->
                <div class="text-center lg:text-left">
                    <h1 class="text-4xl md:text-5xl font-bold text-gray-800">About Us</h1>
                    <p class="py-3 text-lg md:text-xl text-gray-700">
                        Provident cupiditate voluptatem et in. Quaerat fugiat ut assumenda excepturi exercitationem
                        quasi. In deleniti eaque aut repudiandae et a id nisi.

                    </p>
                    <p class="py-3 text-lg md:text-xl text-gray-700">Provident cupiditate voluptatem et in. Quaerat
                        fugiat ut assumenda excepturi exercitationem
                        quasi. In deleniti eaque aut repudiandae et a id nisi.</p>
                    <p class="py-3 text-lg md:text-xl text-gray-700">


                        Provident cupiditate voluptatem et in. Quaerat fugiat ut assumenda excepturi exercitationem
                        quasi. In deleniti eaque aut repudiandae et a id nisi.</p>
                    <button
                        class="btn btn-primary text-white bg-blue-600 hover:bg-blue-700 px-6 py-3 rounded-lg shadow-md transition duration-300">
                        <a href="/roombooking">Book Now</a>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Room -->
    <div class="py-8 "  style="margin-top: -150px;">
        <div class="hero bg-base-200 min-h-screen">
            <div class="hero-content flex flex-col lg:flex-row items-center justify-center gap-8 px-4 lg:px-16">
                <!-- Text Section -->
                <div class="text-center lg:text-left">
                    <h1 class="text-4xl md:text-5xl font-bold text-gray-800">Rooms</h1>
                    <p class="py-3 text-lg md:text-xl text-gray-700">
                        Provident cupiditate voluptatem et in. Quaerat fugiat ut assumenda excepturi exercitationem
                        quasi. In deleniti eaque aut repudiandae Quaerat fugiat ut assumenda excepturi exercitationem
                        quasi. In deleniti eaque aut repudiandae et a id nisi.

                    </p>
                    <h1 class="text-4xl md:text-5xl font-bold text-gray-800">AMENITIES</h1>
                    <p class="py-3 text-lg md:text-xl text-gray-700">Provident cupiditate voluptatem Lorem ipsum dolor
                        sit amet consectetur adipisicing elit. Dolore, similique! et in. Quaerat fugiat ut assumenda
                        excepturi exercitationem quasi. In deleniti eaque aut repudiandae et a id nisi.</p>

                    <button
                        class="btn btn-primary text-white bg-blue-600 hover:bg-blue-700 px-6 py-3 rounded-lg shadow-md transition duration-300">
                        <a href="/roombooking">Book Now</a>
                    </button>
                </div>
                <!-- Image Section -->
                <img src="https://i.ibb.co.com/XrNffGTm/roberto-nickson-tle-CJi-DOri0-unsplash.jpg"
                    class="rounded-lg shadow-2xl" alt="View" />
            </div>
        </div>
    </div>
    <!-- swiming pull -->
    <div class="py-8"  style="margin-top: -150px;">
        <div class="hero bg-base-200 min-h-screen">
            <div class="hero-content flex flex-col lg:flex-row items-center justify-center gap-8 px-4 lg:px-16">
                <!-- Image Section -->
                <img src="https://i.ibb.co.com/vCJSX4hs/exterior-design-in-gulshan-1-1024x576.jpg"
                    class="rounded-lg shadow-2xl" alt="View" />

                <!-- Text Section -->
                <div class="text-center lg:text-left">
                    <h1 class="text-4xl md:text-5xl font-bold text-gray-800">SWIMING POOL</h1>
                    <p class="py-3 text-lg md:text-xl text-gray-700">
                        Provident cupiditate voluptatem et in. Quaerat fugiat ut assumenda excepturi exercitationem
                        quasi. In deleniti eaque aut repudiandae Quaerat fugiat ut assumenda excepturi exercitationem
                        quasi.

                    </p>
                    <h1 class="text-4xl md:text-5xl font-bold text-gray-800">CAR PARKING</h1>
                    <p class="py-3 text-lg md:text-xl text-gray-700">Provident cupiditate voluptatem Lorem ipsum dolor
                        sit amet consectetur adipisicing elit. Dolore, similique! et in. Quaerat fugiat ut assumenda
                        excepturi exercitationem quasi. </p>

                    <button
                        class="btn btn-primary text-white bg-blue-600 hover:bg-blue-700 px-6 py-3 rounded-lg shadow-md transition duration-300">
                        <a href="/roombooking">Book Now</a>
                    </button>
                </div>

            </div>
        </div>
    </div>



    <div class="min-h-screen p-8 bg-base-200"  style="margin-top: -250px;">
        <h1 class="text-4xl font-bold text-center py-8">Gallery</h1>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            <div class="relative">
                <img src="https://i.ibb.co.com/qYm7m7th/download-2.jpg" alt="Gallery Image 1"
                    class="rounded-lg shadow-lg w-full h-auto">
            </div>
            <div class="relative">
                <img src="https://i.ibb.co.com/zWJvLHtQ/download.jpg" alt="Gallery Image 2"
                    class="rounded-lg shadow-lg w-full h-auto">
            </div>
            <div class="relative">
                <img src="https://i.ibb.co.com/1kFcm30/istockphoto-1166166558-612x612.jpg" alt="Gallery Image 3"
                    class="rounded-lg shadow-lg w-full h-auto">
            </div>
            <div class="relative">
                <img src="https://i.ibb.co.com/wrJdg9HJ/istockphoto-1448294355-612x612.jpg" alt="Gallery Image 4"
                    class="rounded-lg shadow-lg w-full h-auto">
            </div>
            <div class="relative">
                <img src="https://i.ibb.co.com/WNF94nyw/istockphoto-1481129583-612x612.jpg" alt="Gallery Image 5"
                    class="rounded-lg shadow-lg w-full h-auto">
            </div>
            <div class="relative">
                <img src="https://i.ibb.co.com/wrJdg9HJ/istockphoto-1448294355-612x612.jpg" alt="Gallery Image 6"
                    class="rounded-lg shadow-lg w-full h-auto">
            </div>
            <div class="relative">
                <img src="https://i.ibb.co.com/TBz8kfqr/download.jpg" alt="Gallery Image 7"
                    class="rounded-lg shadow-lg w-full h-auto">
            </div>
            <div class="relative">
                <img src="https://i.ibb.co.com/qY1mMtcB/download-1.jpg" alt="Gallery Image 8"
                    class="rounded-lg shadow-lg w-full h-auto">
            </div>
        </div>
    </div>

    <section>
        <div class="py-8">
            <h2 class="text-3xl font-bold text-center mb-6">Instagram Feed</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 px-4">
                <!-- Instagram Images -->
                <a href="#" target="_blank" rel="noopener noreferrer"
                    class="block overflow-hidden rounded-lg shadow-lg hover:scale-105 transition-transform">
                    <img src="https://i.ibb.co.com/qYm7m7th/download-2.jpg" alt="Instagram Post 1"
                        class="w-full h-full object-cover">
                </a>
                <a href="#" target="_blank" rel="noopener noreferrer"
                    class="block overflow-hidden rounded-lg shadow-lg hover:scale-105 transition-transform">
                    <img src="https://i.ibb.co.com/zWJvLHtQ/download.jpg" alt="Instagram Post 2"
                        class="w-full h-full object-cover">
                </a>
                <a href="#" target="_blank" rel="noopener noreferrer"
                    class="block overflow-hidden rounded-lg shadow-lg hover:scale-105 transition-transform">
                    <img src="https://i.ibb.co.com/1kFcm30/istockphoto-1166166558-612x612.jpg" alt="Instagram Post 3"
                        class="w-full h-full object-cover">
                </a>
                <a href="#" target="_blank" rel="noopener noreferrer"
                    class="block overflow-hidden rounded-lg shadow-lg hover:scale-105 transition-transform">
                    <img src="https://i.ibb.co.com/wrJdg9HJ/istockphoto-1448294355-612x612.jpg" alt="Instagram Post 4"
                        class="w-full h-full object-cover">
                </a>
            </div>
        </div>
    </section>

    @include('Shared.footer')

    <!-- Footer -->

    <script src="https://cdn.tailwindcss.com"></script>
</body>

</html>