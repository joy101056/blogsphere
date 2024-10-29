<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.10/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>BlogSphere</title>
</head>

<body class="container mx-auto">
    <!-- Navbar -->
    <nav class="navbar bg-base-100">
        <div class="navbar-start">
            <div class="dropdown">
                <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h8m-8 6h16" />
                    </svg>
                </div>
                <ul tabindex="0" class="text-xl dropdown-content bg-base-100 rounded-box z-[1] mt-3 w-52 p-2 shadow">
                    <li><a>Home</a></li>
                    <li><a>Blogs</a></li>
                    <li><a>Category</a></li>
                    <li><a>About</a></li>
                    <li><a>Contact</a></li>
                </ul>
            </div>
            <a class="btn btn-ghost text-xl flex items-center">
                <img src="/logo.png" alt="Logo" class="h-12 mr-2">
            </a>
        </div>
        <div class="navbar-center hidden lg:flex">
            <ul class="menu menu-horizontal px-1 text-lg">
                <li><a>Home</a></li>
                <li><a>Blogs</a></li>
                <li><a>Category</a></li>
                <li><a>About</a></li>
                <li><a>Contact</a></li>
            </ul>
        </div>
        <div class="navbar-end ">
            <button class="btn btn-neutral mr-2">Login</button>
            <button class="btn btn-neutral">Register</button>
        </div>
    </nav>
    <!-- Banner -->
    <section class="dark:bg-gray-100 dark:text-gray-800">
        <div class="container flex flex-col justify-center p-6 mx-auto sm:py-12 lg:py-24 lg:flex-row lg:justify-between">
            <div class="flex items-center justify-center p-6 mt-8 lg:mt-0 h-72 sm:h-80 lg:h-96 xl:h-112 2xl:h-128">
                <img src="/how-to-write-a-good-blog-post.png" alt="" class="object-contain h-72 sm:h-80 lg:h-96 xl:h-112 2xl:h-128">
            </div>
            <div class="flex flex-col justify-center p-6 text-center rounded-sm lg:max-w-md xl:max-w-lg lg:text-left">
                <h1 class="text-5xl font-bold leading-none sm:text-6xl">Welcome
                    <span class="dark:text-violet-600"> to </span>Blogsphere
                </h1>
                <p class="mt-6 mb-8 text-lg sm:mb-12">Sharing insights, experiences,
                    <br class="hidden md:inline lg:hidden">and stories on various professional topics.
                </p>
                <div class="flex flex-col space-y-4 sm:items-center sm:justify-center sm:flex-row sm:space-y-0 sm:space-x-4 lg:justify-start">
                    <a rel="noopener noreferrer" href="#" class="px-8 py-3 text-lg font-semibold rounded dark:bg-violet-600 dark:text-gray-50">Explore Our Blogs</a>
                    <a rel="noopener noreferrer" href="#" class="px-8 py-3 text-lg font-semibold border rounded dark:border-gray-800">Sign In</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured -->
    <section class="py-16 ">
        <div class="container mx-auto text-center">
            <h2 class="text-5xl font-bold mb-20 bg-gradient-to-r from-cyan-500 to-blue-500 p-5 shadow-lg rounded-lg">
                Featured Posts</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Featured Post 1 -->
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <img src="featured-post-1.jpg" alt="Featured Post 1" class="w-full h-48 object-cover">
                    <div class="p-5">
                        <h3 class="text-xl font-semibold mb-2">Post Title 1</h3>
                        <div class="flex items-center mb-4">
                            <img src="author1.jpg" alt="Author 1" class="w-10 h-10 rounded-full mr-2">
                            <div class="text-left">
                                <p class="text-gray-700 font-medium">Author Name</p>
                                <p class="text-gray-500 text-sm">September 23, 2024 | 10:00 AM</p>
                            </div>
                        </div>
                        <p class="text-gray-700 mb-4">A brief description of the first featured post. Engaging insights
                            await!</p>
                        <a href="#" class="inline-block bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Read
                            More</a>
                    </div>
                </div>
                <!-- Featured Post 2 -->
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <img src="featured-post-1.jpg" alt="Featured Post 1" class="w-full h-48 object-cover">
                    <div class="p-5">
                        <h3 class="text-xl font-semibold mb-2">Post Title 1</h3>
                        <div class="flex items-center mb-4">
                            <img src="author1.jpg" alt="Author 1" class="w-10 h-10 rounded-full mr-2">
                            <div class="text-left">
                                <p class="text-gray-700 font-medium">Author Name</p>
                                <p class="text-gray-500 text-sm">September 23, 2024 | 10:00 AM</p>
                            </div>
                        </div>
                        <p class="text-gray-700 mb-4">A brief description of the first featured post. Engaging insights
                            await!</p>
                        <a href="#" class="inline-block bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Read
                            More</a>
                    </div>
                </div>
                <!-- Featured Post 3 -->
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <img src="featured-post-1.jpg" alt="Featured Post 1" class="w-full h-48 object-cover">
                    <div class="p-5">
                        <h3 class="text-xl font-semibold mb-2">Post Title 1</h3>
                        <div class="flex items-center mb-4">
                            <img src="author1.jpg" alt="Author 1" class="w-10 h-10 rounded-full mr-2">
                            <div class="text-left">
                                <p class="text-gray-700 font-medium">Author Name</p>
                                <p class="text-gray-500 text-sm">September 23, 2024 | 10:00 AM</p>
                            </div>
                        </div>
                        <p class="text-gray-700 mb-4">A brief description of the first featured post. Engaging insights
                            await!</p>
                        <a href="#" class="inline-block bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Read
                            More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Categories Section -->
    <section class="pt-16">
        <div class="container mx-auto text-center">
            <h2 class="text-5xl font-bold mb-12 bg-gradient-to-r from-cyan-500 to-blue-500 p-4 shadow rounded-lg text-white">
                Categories</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
                <!-- Category 1 -->
                <div class="bg-gray-100 rounded-lg shadow p-6 transition-transform duration-300 hover:-translate-y-1">
                    <h3 class="text-2xl font-bold mb-3">Technology</h3>
                    <p class="text-gray-600 mb-4">Latest trends and insights in tech, gadgets, and software.</p>
                    <a href="#" class="text-blue-500 font-medium hover:underline">Explore</a>
                </div>
    
                <!-- Category 2 -->
                <div class="bg-gray-100 rounded-lg shadow p-6 transition-transform duration-300 hover:-translate-y-1">
                    <h3 class="text-2xl font-bold  mb-3">Health</h3>
                    <p class="text-gray-600 mb-4">Tips for a healthier lifestyle, nutrition, and wellness.</p>
                    <a href="#" class="text-blue-500 font-medium hover:underline">Explore</a>
                </div>
    
                <!-- Category 3 -->
                <div class="bg-gray-100 rounded-lg shadow p-6 transition-transform duration-300 hover:-translate-y-1">
                    <h3 class="text-2xl font-bold  mb-3">Travel</h3>
                    <p class="text-gray-600 mb-4">Discover new places, travel tips, and adventure stories.</p>
                    <a href="#" class="text-blue-500 font-medium hover:underline">Explore</a>
                </div>
    
                <!-- Category 4 -->
                <div class="bg-gray-100 rounded-lg shadow p-6 transition-transform duration-300 hover:-translate-y-1">
                    <h3 class="text-2xl font-bold  mb-3">Lifestyle</h3>
                    <p class="text-gray-600 mb-4">Explore lifestyle tips, fashion, and personal stories.</p>
                    <a href="#" class="text-blue-500 font-medium hover:underline">Explore</a>
                </div>
    
                <!-- Category 5 -->
                <div class="bg-gray-100 rounded-lg shadow p-6 transition-transform duration-300 hover:-translate-y-1">
                    <h3 class="text-2xl font-bold  mb-3">Food</h3>
                    <p class="text-gray-600 mb-4">Delicious recipes, cooking tips, and culinary adventures.</p>
                    <a href="#" class="text-blue-500 font-medium hover:underline">Explore</a>
                </div>
    
                <!-- Category 6 -->
                <div class="bg-gray-100 rounded-lg shadow p-6 transition-transform duration-300 hover:-translate-y-1">
                    <h3 class="text-2xl font-bold  mb-3">Fashion</h3>
                    <p class="text-gray-600 mb-4">Latest trends, style tips, and fashion advice.</p>
                    <a href="#" class="text-blue-500 font-medium hover:underline">Explore</a>
                </div>
            </div>
        </div>
    </section>
    

    <!-- Recent Posts Section-->
    <section class="py-16">
        <div class="container mx-auto text-center">
            <h2 class="text-5xl font-bold mb-20 bg-gradient-to-r from-cyan-500 to-blue-500 p-5 shadow-lg rounded-lg text-white">
                Recent Posts</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Recent Post 1 -->
                <div class=" p-6 overflow-hidden rounded-lg shadow-lg bg-white hover:shadow-xl transition-shadow duration-300">
                    <article>
                        <h2 class="text-2xl font-bold mb-4 text-gray-900">Sed diam massa, semper a condimentum</h2>
                        <p class="text-gray-700 mb-6">Morbi porttitor mi in diam scelerisque commodo. Proin sed laoreet libero. Fusce faucibus porttitor lacus...</p>
                        <div class="flex items-center mt-6 space-x-4">
                            <img src="https://source.unsplash.com/100x100/?portrait" alt="Author Image" class="w-10 h-10 rounded-full">
                            <div>
                                <h3 class="text-sm font-medium text-gray-800">Leroy Jenkins</h3>
                                <time datetime="2021-02-18" class="text-sm text-gray-500">Feb 18th 2021</time>
                            </div>
                        </div>
                        <a href="#" class="block mt-6 text-blue-500 font-semibold hover:underline">Read More</a>
                    </article>
                </div>
    
                <!-- Recent Post 2 -->
                <div class=" p-6 overflow-hidden rounded-lg shadow-lg bg-white hover:shadow-xl transition-shadow duration-300">
                    <article>
                        <h2 class="text-2xl font-bold mb-4 text-gray-900">Sed diam massa, semper a condimentum</h2>
                        <p class="text-gray-700 mb-6">Morbi porttitor mi in diam scelerisque commodo. Proin sed laoreet libero. Fusce faucibus porttitor lacus...</p>
                        <div class="flex items-center mt-6 space-x-4">
                            <img src="https://source.unsplash.com/100x100/?portrait" alt="Author Image" class="w-10 h-10 rounded-full">
                            <div>
                                <h3 class="text-sm font-medium text-gray-800">Leroy Jenkins</h3>
                                <time datetime="2021-02-18" class="text-sm text-gray-500">Feb 18th 2021</time>
                            </div>
                        </div>
                        <a href="#" class="block mt-6 text-blue-500 font-semibold hover:underline">Read More</a>
                    </article>
                </div>
    
                <!-- Recent Post 3 -->
                <div class=" p-6 overflow-hidden rounded-lg shadow-lg bg-white hover:shadow-xl transition-shadow duration-300">
                    <article>
                        <h2 class="text-2xl font-bold mb-4 text-gray-900">Sed diam massa, semper a condimentum</h2>
                        <p class="text-gray-700 mb-6">Morbi porttitor mi in diam scelerisque commodo. Proin sed laoreet libero. Fusce faucibus porttitor lacus...</p>
                        <div class="flex items-center mt-6 space-x-4">
                            <img src="https://source.unsplash.com/100x100/?portrait" alt="Author Image" class="w-10 h-10 rounded-full">
                            <div>
                                <h3 class="text-sm font-medium text-gray-800">Leroy Jenkins</h3>
                                <time datetime="2021-02-18" class="text-sm text-gray-500">Feb 18th 2021</time>
                            </div>
                        </div>
                        <a href="#" class="block mt-6 text-blue-500 font-semibold hover:underline">Read More</a>
                    </article>
                </div>
                <div class=" p-6 overflow-hidden rounded-lg shadow-lg bg-white hover:shadow-xl transition-shadow duration-300">
                    <article>
                        <h2 class="text-2xl font-bold mb-4 text-gray-900">Sed diam massa, semper a condimentum</h2>
                        <p class="text-gray-700 mb-6">Morbi porttitor mi in diam scelerisque commodo. Proin sed laoreet libero. Fusce faucibus porttitor lacus...</p>
                        <div class="flex items-center mt-6 space-x-4">
                            <img src="https://source.unsplash.com/100x100/?portrait" alt="Author Image" class="w-10 h-10 rounded-full">
                            <div>
                                <h3 class="text-sm font-medium text-gray-800">Leroy Jenkins</h3>
                                <time datetime="2021-02-18" class="text-sm text-gray-500">Feb 18th 2021</time>
                            </div>
                        </div>
                        <a href="#" class="block mt-6 text-blue-500 font-semibold hover:underline">Read More</a>
                    </article>
                </div>
                <div class=" p-6 overflow-hidden rounded-lg shadow-lg bg-white hover:shadow-xl transition-shadow duration-300">
                    <article>
                        <h2 class="text-2xl font-bold mb-4 text-gray-900">Sed diam massa, semper a condimentum</h2>
                        <p class="text-gray-700 mb-6">Morbi porttitor mi in diam scelerisque commodo. Proin sed laoreet libero. Fusce faucibus porttitor lacus...</p>
                        <div class="flex items-center mt-6 space-x-4">
                            <img src="https://source.unsplash.com/100x100/?portrait" alt="Author Image" class="w-10 h-10 rounded-full">
                            <div>
                                <h3 class="text-sm font-medium text-gray-800">Leroy Jenkins</h3>
                                <time datetime="2021-02-18" class="text-sm text-gray-500">Feb 18th 2021</time>
                            </div>
                        </div>
                        <a href="#" class="block mt-6 text-blue-500 font-semibold hover:underline">Read More</a>
                    </article>
                </div>
                <div class=" p-6 overflow-hidden rounded-lg shadow-lg bg-white hover:shadow-xl transition-shadow duration-300">
                    <article>
                        <h2 class="text-2xl font-bold mb-4 text-gray-900">Sed diam massa, semper a condimentum</h2>
                        <p class="text-gray-700 mb-6">Morbi porttitor mi in diam scelerisque commodo. Proin sed laoreet libero. Fusce faucibus porttitor lacus...</p>
                        <div class="flex items-center mt-6 space-x-4">
                            <img src="https://source.unsplash.com/100x100/?portrait" alt="Author Image" class="w-10 h-10 rounded-full">
                            <div>
                                <h3 class="text-sm font-medium text-gray-800">Leroy Jenkins</h3>
                                <time datetime="2021-02-18" class="text-sm text-gray-500">Feb 18th 2021</time>
                            </div>
                        </div>
                        <a href="#" class="block mt-6 text-blue-500 font-semibold hover:underline">Read More</a>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <!-- newsletter section -->
    <section class="bg-gradient-to-r from-cyan-500 to-blue-500 p-5 shadow-lg rounded-lg text-white py-12 mb-10">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-semibold mb-4">Stay Updated!</h2>
            <p class="mb-6">Subscribe to our newsletter for the latest posts, insights, and updates directly to your inbox.</p>
            <form class="flex justify-center max-w-md mx-auto">
                <input type="email" placeholder="Enter your email" class="w-full p-3 rounded-l-lg text-gray-800" required>
                <button type="submit" class="bg-white text-blue-500 px-6 py-3 rounded-r-lg hover:bg-gray-200 transition">Subscribe</button>
            </form>
        </div>
    </section>
    
    
    <!-- Footer -->
    <footer class="footer bg-neutral text-neutral-content items-center pt-4">
        <aside class="grid-flow-col items-center">
          <svg
            width="36"
            height="36"
            viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg"
            fill-rule="evenodd"
            clip-rule="evenodd"
            class="fill-current">
            <path
              d="M22.672 15.226l-2.432.811.841 2.515c.33 1.019-.209 2.127-1.23 2.456-1.15.325-2.148-.321-2.463-1.226l-.84-2.518-5.013 1.677.84 2.517c.391 1.203-.434 2.542-1.831 2.542-.88 0-1.601-.564-1.86-1.314l-.842-2.516-2.431.809c-1.135.328-2.145-.317-2.463-1.229-.329-1.018.211-2.127 1.231-2.456l2.432-.809-1.621-4.823-2.432.808c-1.355.384-2.558-.59-2.558-1.839 0-.817.509-1.582 1.327-1.846l2.433-.809-.842-2.515c-.33-1.02.211-2.129 1.232-2.458 1.02-.329 2.13.209 2.461 1.229l.842 2.515 5.011-1.677-.839-2.517c-.403-1.238.484-2.553 1.843-2.553.819 0 1.585.509 1.85 1.326l.841 2.517 2.431-.81c1.02-.33 2.131.211 2.461 1.229.332 1.018-.21 2.126-1.23 2.456l-2.433.809 1.622 4.823 2.433-.809c1.242-.401 2.557.484 2.557 1.838 0 .819-.51 1.583-1.328 1.847m-8.992-6.428l-5.01 1.675 1.619 4.828 5.011-1.674-1.62-4.829z"></path>
          </svg>
          <p>Copyright © Blogsphere - All right reserved</p>
        </aside>
        <nav class="grid-flow-col gap-4 md:place-self-center md:justify-self-end">
          <a>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="24"
              height="24"
              viewBox="0 0 24 24"
              class="fill-current">
              <path
                d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"></path>
            </svg>
          </a>
          <a>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="24"
              height="24"
              viewBox="0 0 24 24"
              class="fill-current">
              <path
                d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"></path>
            </svg>
          </a>
          <a>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="24"
              height="24"
              viewBox="0 0 24 24"
              class="fill-current">
              <path
                d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"></path>
            </svg>
          </a>
        </nav>
      </footer>
    


</body>

</html>