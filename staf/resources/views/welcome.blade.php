
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="icon" href="images/favicon.ico" />
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
            integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        />
        @vite('resources/css/app.css')
        <title>Speech Therapy Activity Finder | Find & Post Speech Therapy Activities</title>
    </head>
    <body class="mb-48">
        <nav class="flex justify-between items-center mb-4">
            <a href="/welcome">
                <img class="w-24" src="{{asset('/images/STAFlogoTopSq.png')}}" alt="" />
            </a>
            <ul class="flex space-x-6 mr-6 text-lg">

                <li>
                    <span class="font-bold uppercase">
                    </span>

                    <a href="/register" class="hover:text-blue-800 text-purple-400"> <i class="fa-solid fa-user-plus"></i> Register</a>
                </li>
                <li>
                    <a href="/login" class="hover:text-blue-800 text-purple-400"><i class="fa-solid fa-arrow-right-to-bracket"></i> Login</a>
                </li>
            </ul>
        </nav>
        <!-- Hero -->

        <section class="relative h-72 bg-purple-300 flex flex-col justify-center align-center text-center space-y-4 mb-4">
           
            <div
                style="background-image: url('images/laravel-logo.png')"
            ></div>

            <div class="z-10">
                <h1 class="text-6xl font-bold uppercase text-white">
                    Speech Therapy <span class="text-blue-800"> Activity Finder</span>
                  </h1>
                  <p class="text-2xl text-gray-200 font-bold my-4">
                    Find or post speech therapy activities                  </p>
            
                <div>
                    <a href="/register"
        class="inline-block border-2 border-white text-white py-2 px-4 rounded-xl uppercase mt-2 hover:text-blue-800 hover:border-blue-800">Sign Up to post an activity</a>
                </div>
            </div>
        </section>

        <main>
            <!-- Search -->
            <form action="/">
                <div class="relative border-2 border-gray-100 m-4 rounded-lg">
                  <div class="absolute top-4 left-3">
                    <i class="fa fa-search text-gray-400 z-20 hover:text-gray-500"></i>
                  </div>
                  <input type="text" name="search" class="h-14 w-full pl-10 pr-20 rounded-lg z-0 focus:shadow focus:outline-none"
                    placeholder="Search STAF..." />
                  <div class="absolute top-2 right-2">
                    <button type="submit" class="h-10 w-20 text-white rounded-lg bg-purple-500 hover:bg-blue-800">
                      Search
                    </button>
                  </div>
                </div>
              </form>
            <div
                class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4"
            >
                <!-- Item 1 -->
                <div class="bg-gray-50 border border-gray-200 rounded p-6">
                    <div class="flex">
                        <img
                            class="hidden w-48 mr-6 md:block"
                            src="{{asset('images/preschoolphono.png')}}"
                            alt=""
                        />
                        <div>
                            <h3 class="text-2xl text-blue-900">
                                <a href="/show">Phonological Awareness Assessment + Intervention Bundle</a>
                            </h3>
                            <div class="text-xl text-blue-900 font-bold mb-4">The Happy Teacher</div>
                            <div class="text-lg mt-4 text-blue-900">
                                <i class="fa-solid fa-location-dot"></i> Boston,
                                MA
                            </div>
                            <ul class="flex">
                                <li class="flex items-center justify-center bg-blue-900 text-white rounded-xl py-1 px-3 mr-2 text-xs">
                                    <a href="#">Early Intervention</a>
                                </li>
                                <li class="flex items-center justify-center bg-blue-900 text-white rounded-xl py-1 px-3 mr-2 text-xs">
                                    <a href="#">Preschool</a>
                                </li>
                                <li class="flex items-center justify-center bg-blue-900 text-white rounded-xl py-1 px-3 mr-2 text-xs">
                                    <a href="#">Reading</a>
                                </li>
                                <li class="flex items-center justify-center bg-blue-900 text-white rounded-xl py-1 px-3 mr-2 text-xs">
                                    <a href="#">Phonics</a>
                                </li>
                            </ul>
                            
                        </div>
                    </div>
                </div>
                <!-- Item 2 -->
                <div class="bg-gray-50 border border-gray-200 rounded p-6">
                    <div class="flex">
                        <img
                            class="hidden w-48 mr-6 md:block"
                            src="{{asset('images/articgame.png')}}"
                            alt=""
                        />
                        <div>
                            <h3 class="text-2xl text-blue-900">
                                <a href="show.html">Seek & Find Articulation Mat</a>
                            </h3>
                            <div class="text-xl text-blue-900 font-bold mb-4">
                                Pinwheel Speech Resources
                            </div>
                            <div class="text-lg text-blue-900 mt-4">
                                <i class="fa-solid fa-location-dot"></i>
                                Dallas, TX
                            </div>
                            <ul class="flex">
                                <li class="flex items-center justify-center bg-blue-900 text-white rounded-xl py-1 px-3 mr-2 text-xs">
                                    <a href="#">Early Intervention</a>
                                </li>
                                <li class="flex items-center justify-center bg-blue-900 text-white rounded-xl py-1 px-3 mr-2 text-xs">
                                    <a href="#">Preschool</a>
                                </li>
                                <li class="flex items-center justify-center bg-blue-900 text-white rounded-xl py-1 px-3 mr-2 text-xs">
                                    <a href="#">Reading</a>
                                </li>
                                <li class="flex items-center justify-center bg-blue-900 text-white rounded-xl py-1 px-3 mr-2 text-xs">
                                    <a href="#">Phonics</a>
                                </li>
                            </ul>
                            
                        </div>
                    </div>
                </div>

                <!-- Item 3 -->
                <div class="bg-gray-50 border border-gray-200 rounded p-6">
                    <div class="flex">
                        <img
                            class="hidden w-48 mr-6 md:block"
                            src="images/wayne.png"
                            alt=""
                        />
                        <div>
                            <h3 class="text-2xl text-blue-900">
                                <a href="show.html">Laravel Developer</a>
                            </h3>
                            <div class="text-xl text-blue-900 font-bold mb-4">
                                Wayne Enterprises
                            </div>
                            <ul class="flex">
                                <li class="flex items-center justify-center bg-blue-900 text-white rounded-xl py-1 px-3 mr-2 text-xs">
                                    <a href="#">Early Intervention</a>
                                </li>
                                <li class="flex items-center justify-center bg-blue-900 text-white rounded-xl py-1 px-3 mr-2 text-xs">
                                    <a href="#">Preschool</a>
                                </li>
                                <li class="flex items-center justify-center bg-blue-900 text-white rounded-xl py-1 px-3 mr-2 text-xs">
                                    <a href="#">Reading</a>
                                </li>
                                <li class="flex items-center justify-center bg-blue-900 text-white rounded-xl py-1 px-3 mr-2 text-xs">
                                    <a href="#">Phonics</a>
                                </li>
                            </ul>
                            <div class="text-lg text-blue-900 mt-4">
                                <i class="fa-solid fa-location-dot"></i> Newark,
                                NJ
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Item 4 -->
                <div class="bg-gray-50 border border-gray-200 rounded p-6">
                    <div class="flex">
                        <img
                            class="hidden w-48 mr-6 md:block"
                            src="images/skynet.png"
                            alt=""
                        />
                        <div>
                            <h3 class="text-2xl text-blue-900">
                                <a href="show.html">Backend Laravel Dev</a>
                            </h3>
                            <div class="text-xl text-blue-900 font-bold mb-4">
                                Skynet Systems
                            </div>
                            <ul class="flex">
                                <li class="flex items-center justify-center bg-blue-900 text-white rounded-xl py-1 px-3 mr-2 text-xs">
                                    <a href="#">Early Intervention</a>
                                </li>
                                <li class="flex items-center justify-center bg-blue-900 text-white rounded-xl py-1 px-3 mr-2 text-xs">
                                    <a href="#">Preschool</a>
                                </li>
                                <li class="flex items-center justify-center bg-blue-900 text-white rounded-xl py-1 px-3 mr-2 text-xs">
                                    <a href="#">Reading</a>
                                </li>
                                <li class="flex items-center justify-center bg-blue-900 text-white rounded-xl py-1 px-3 mr-2 text-xs">
                                    <a href="#">Phonics</a>
                                </li>
                            </ul>
                            <div class="text-lg text-blue-900 mt-4">
                                <i class="fa-solid fa-location-dot"></i>
                                Daytona, FL
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Item 5 -->
                <div class="bg-gray-50 border border-gray-200 rounded p-6">
                    <div class="flex">
                        <img
                            class="hidden w-48 mr-6 md:block"
                            src="images/wonka.png"
                            alt=""
                        />
                        <div>
                            <h3 class="text-2xl text-blue-900">
                                <a href="show.html">Junior Developer</a>
                            </h3>
                            <div class="text-xl text-blue-900 font-bold mb-4">
                                Wonka Industries
                            </div>
                            <ul class="flex">
                                <li class="flex items-center justify-center bg-blue-900 text-white rounded-xl py-1 px-3 mr-2 text-xs">
                                    <a href="#">Early Intervention</a>
                                </li>
                                <li class="flex items-center justify-center bg-blue-900 text-white rounded-xl py-1 px-3 mr-2 text-xs">
                                    <a href="#">Preschool</a>
                                </li>
                                <li class="flex items-center justify-center bg-blue-900 text-white rounded-xl py-1 px-3 mr-2 text-xs">
                                    <a href="#">Reading</a>
                                </li>
                                <li class="flex items-center justify-center bg-blue-900 text-white rounded-xl py-1 px-3 mr-2 text-xs">
                                    <a href="#">Phonics</a>
                                </li>
                            </ul>
                            
                        </div>
                    </div>
                </div>
            </div>
        </main>












        <main>
            <!-- Search -->
            <form action="/">
                <div class="relative border-2 border-gray-100 m-4 rounded-lg">
                  <div class="absolute top-4 left-3">
                    <i class="fa fa-search text-gray-400 z-20 hover:text-gray-500"></i>
                  </div>
                  <input type="text" name="search" class="h-14 w-full pl-10 pr-20 rounded-lg z-0 focus:shadow focus:outline-none"
                    placeholder="Search STAF..." />
                  <div class="absolute top-2 right-2">
                    <button type="submit" class="h-10 w-20 text-white rounded-lg bg-purple-500 hover:bg-blue-900">
                      Search
                    </button>
                  </div>
                </div>
              </form>

            <div>
                <div
                class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4"
            >
                <!-- Item 1 -->
                <div class="bg-gray-50 border border-gray-200 rounded p-6">
                    <div class="flex">
                        <img
                            class="hidden w-48 mr-6 md:block"
                            src="{{asset('images/preschoolphono.png')}}"
                            alt=""
                        />
                        <div>
                            <h3 class="text-2xl">
                                <a href="/show">Phonological Awareness Assessment + Intervention Bundle</a>
                            </h3>
                            <div class="text-xl font-bold mb-4">The Happy Teacher</div>
                            <div class="text-lg mt-4">
                                <i class="fa-solid fa-location-dot"></i> Boston,
                                MA
                            </div>
                            <ul class="flex">
                                <li
                                    class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs"
                                >
                                    <a href="#">Laravel</a>
                                </li>
                                <li
                                    class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs"
                                >
                                    <a href="#">API</a>
                                </li>
                                <li
                                    class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs"
                                >
                                    <a href="#">Backend</a>
                                </li>
                                <li
                                    class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs"
                                >
                                    <a href="#">Vue</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>



                <div
                class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4"
            >
            <div class="bg-gray-50 border border-gray-200 rounded p-6">
                <div class="flex">
                    <img class="hidden w-48 mr-6 md:block"
                      src=" {{asset('images/preschoolphono.png')}}" alt="" />
                    <div>
                      <h3 class="text-2xl">
                        <a href="/show">Phonological Awareness Assessment + Intervention Bundle</a>
                      </h3>
                      <div class="text-xl font-bold mb-4">The Happy Teacher</div>
                      
                      <div class="text-lg mt-4">
                        Boston, MA
                      </div>
                      <ul class="flex">
                        
                        <li class="flex items-center justify-center bg-blue-800 text-white rounded-xl py-1 px-3 mr-2 text-xs">
                            <a href="#">Early Intervention</a>
                        </li>
                        <li class="flex items-center justify-center bg-blue-800 text-white rounded-xl py-1 px-3 mr-2 text-xs">
                            <a href="#">Preschool</a>
                        </li>
                        <li class="flex items-center justify-center bg-blue-800 text-white rounded-xl py-1 px-3 mr-2 text-xs">
                            <a href="#">Reading</a>
                        </li>
                        <li class="flex items-center justify-center bg-blue-800 text-white rounded-xl py-1 px-3 mr-2 text-xs">
                            <a href="#">Phonics</a>
                        </li>
                      </ul>
                    </div>
                </div>
            </div>



                <!-- Item 2 -->
                <div class="bg-gray-50 border border-gray-200 rounded p-6">
                    <div class="flex">
                        <img
                            class="hidden w-48 mr-6 md:block"
                            src="images/stark.png"
                            alt=""
                        />
                        <div>
                            <h3 class="text-2xl">
                                <a href="show.html">Full-Stack Engineer</a>
                            </h3>
                            <div class="text-xl font-bold mb-4">
                                Stark Industries
                            </div>
                            <div class="text-lg mt-4">
                                <i class="fa-solid fa-location-dot"></i> San
                                Francisco, CA
                            </div>
                            <ul class="flex">
                                <li
                                    class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs"
                                >
                                    <a href="#">Laravel</a>
                                </li>
                                <li
                                    class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs"
                                >
                                    <a href="#">API</a>
                                </li>
                                <li
                                    class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs"
                                >
                                    <a href="#">Backend</a>
                                </li>
                                <li
                                    class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs"
                                >
                                    <a href="#">Vue</a>
                                </li>
                            </ul>
                            
                        </div>
                    </div>
                </div>

                <!-- Item 3 -->
                <div class="bg-gray-50 border border-gray-200 rounded p-6">
                    <div class="flex">
                        <img
                            class="hidden w-48 mr-6 md:block"
                            src="images/wayne.png"
                            alt=""
                        />
                        <div>
                            <h3 class="text-2xl">
                                <a href="show.html">Laravel Developer</a>
                            </h3>
                            <div class="text-xl font-bold mb-4">
                                Wayne Enterprises
                            </div>
                            <div class="text-lg mt-4">
                                <i class="fa-solid fa-location-dot"></i>
                                Lawrence, MA
                            </div>
                            <ul class="flex">
                                <li
                                    class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs"
                                >
                                    <a href="#">Laravel</a>
                                </li>
                                <li
                                    class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs"
                                >
                                    <a href="#">API</a>
                                </li>
                                <li
                                    class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs"
                                >
                                    <a href="#">Backend</a>
                                </li>
                                <li
                                    class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs"
                                >
                                    <a href="#">Vue</a>
                                </li>
                            </ul>
                            <div class="text-lg mt-4">
                                <i class="fa-solid fa-location-dot"></i> Newark,
                                NJ
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Item 4 -->
                <div class="bg-gray-50 border border-gray-200 rounded p-6">
                    <div class="flex">
                        <img
                            class="hidden w-48 mr-6 md:block"
                            src="images/skynet.png"
                            alt=""
                        />
                        <div>
                            <h3 class="text-2xl">
                                <a href="show.html">Backend Laravel Dev</a>
                            </h3>
                            <div class="text-xl font-bold mb-4">
                                Skynet Systems
                            </div>
                            <ul class="flex">
                                <li
                                    class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs"
                                >
                                    Laravel
                                </li>
                                <li
                                    class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs"
                                >
                                    API
                                </li>
                                <li
                                    class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs"
                                >
                                    Backend
                                </li>
                                <li
                                    class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs"
                                >
                                    Vue
                                </li>
                            </ul>
                            <div class="text-lg mt-4">
                                <i class="fa-solid fa-location-dot"></i>
                                Daytona, FL
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Item 5 -->
                <div class="bg-gray-50 border border-gray-200 rounded p-6">
                    <div class="flex">
                        <img
                            class="hidden w-48 mr-6 md:block"
                            src="images/wonka.png"
                            alt=""
                        />
                        <div>
                            <h3 class="text-2xl">
                                <a href="show.html">Junior Developer</a>
                            </h3>
                            <div class="text-xl font-bold mb-4">
                                Wonka Industries
                            </div>
                            <ul class="flex">
                                <li
                                    class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs"
                                >
                                    <a href="#">Laravel</a>
                                </li>
                                <li
                                    class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs"
                                >
                                    <a href="#">API</a>
                                </li>
                                <li
                                    class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs"
                                >
                                    <a href="#">Backend</a>
                                </li>
                                <li
                                    class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs"
                                >
                                    <a href="#">Vue</a>
                                </li>
                            </ul>
                            <div class="text-lg mt-4">
                                <i class="fa-solid fa-location-dot"></i> San
                                Francisco, CA
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
                <!-- Item 1 -->
                <div
                class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4"
            >
            <div class="bg-gray-50 border border-gray-200 rounded p-6">
                <div class="flex">
                    <img class="hidden w-48 mr-6 md:block"
                      src=" {{asset('images/preschoolphono.png')}}" alt="" />
                    <div>
                      <h3 class="text-2xl">
                        <a href="/show">Phonological Awareness Assessment + Intervention Bundle</a>
                      </h3>
                      <div class="text-xl font-bold mb-4">The Happy Teacher</div>
                      
                      <div class="text-lg mt-4">
                        Boston, MA
                      </div>
                      <ul class="flex">
                        
                        <li class="flex items-center justify-center bg-blue-800 text-white rounded-xl py-1 px-3 mr-2 text-xs">
                            <a href="#">Early Intervention</a>
                        </li>
                        <li class="flex items-center justify-center bg-blue-800 text-white rounded-xl py-1 px-3 mr-2 text-xs">
                            <a href="#">Preschool</a>
                        </li>
                        <li class="flex items-center justify-center bg-blue-800 text-white rounded-xl py-1 px-3 mr-2 text-xs">
                            <a href="#">Reading</a>
                        </li>
                        <li class="flex items-center justify-center bg-blue-800 text-white rounded-xl py-1 px-3 mr-2 text-xs">
                            <a href="#">Phonics</a>
                        </li>
                      </ul>
                    </div>
                </div>
            </div>
                <!-- Item 2 -->

                    <img class="hidden w-48 mr-6 md:block"
                      src=" {{asset('images/articgame.png')}}" alt="" />
                    <div>
                      <h3 class="text-2xl">
                        <a href="/show">Seek & Find Articulation Mat</a>
                      </h3>
                      <div class="text-xl font-bold mb-4">Pinwheel Speech Resources</div>
                      <div class="text-lg mt-4">
                        Dallas, TX
                      </div>

                      <ul class="flex">
                        
                        <li class="flex items-center justify-center bg-blue-800 text-white rounded-xl py-1 px-3 mr-2 text-xs">
                            <a href="#">Articulation</a>
                        </li>
                        <li class="flex items-center justify-center bg-blue-800 text-white rounded-xl py-1 px-3 mr-2 text-xs">
                            <a href="#">Preschool</a>
                        </li>
                        <li class="flex items-center justify-center bg-blue-800 text-white rounded-xl py-1 px-3 mr-2 text-xs">
                            <a href="#">Speech</a>
                        </li>
                        <li class="flex items-center justify-center bg-blue-800 text-white rounded-xl py-1 px-3 mr-2 text-xs">
                            <a href="#">Games</a>
                        </li>
                      </ul>
                    </div>
                                <!-- Item 3 -->

                    <img class="hidden w-48 mr-6 md:block"
                      src=" {{asset('images/eatingdrinking.png')}}" alt="" />
                    <div>
                      <h3 class="text-2xl">
                        <a href="/show">Informal Assessment: Eating & Drinking</a>
                      </h3>
                      <div class="text-xl font-bold mb-4">The Happy Teacher</div>
                      
                      <div class="text-lg mt-4">
                        Boston, MA
                      </div>
                      <ul class="flex">
                        
                        <li class="flex items-center justify-center bg-blue-800 text-white rounded-xl py-1 px-3 mr-2 text-xs">
                            <a href="#">Articulation</a>
                        </li>
                        <li class="flex items-center justify-center bg-blue-800 text-white rounded-xl py-1 px-3 mr-2 text-xs">
                            <a href="#">Preschool</a>
                        </li>
                        <li class="flex items-center justify-center bg-blue-800 text-white rounded-xl py-1 px-3 mr-2 text-xs">
                            <a href="#">Speech</a>
                        </li>
                        <li class="flex items-center justify-center bg-blue-800 text-white rounded-xl py-1 px-3 mr-2 text-xs">
                            <a href="#">Games</a>
                        </li>
                      </ul>
                    </div>

                    

                  </div>
               

                <!-- Item 3 -->
                <div>
                    <div>
                        <img src="images/eatingdrinking.png"
                            alt=""
                        />
                        <div>
                            <h3>
                                <a href="/show">Informal Assessment: Eating & Drinking</a>
                            </h3>
                            <div>
                                Curriculum Castle
                            </div>
                            <ul>
                                <li>
                                    <a href="#">Dysphagia</a>
                                </li>
                                <li>
                                    <a href="#">Eating/Drinking</a>
                                </li>
                                <li>
                                    <a href="#">Early Intervention</a>
                                </li>
                            </ul>
                            <div> Phoenix, AZ
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Item 4 -->
                <div>
                    <div>
                        <img
                            src="images/stuttering.png"
                            alt=""
                        />
                        <div>
                            <h3>
                                <a href="/show">Stuttering Activity</a>
                            </h3>
                            <div>
                                Stuttering Therapy Resources
                            </div>
                            <ul>
                                <li>
                                    Stuttering
                                </li>
                                <li>
                                    Elementary
                                </li>
                                <li>
                                    Fluency
                                </li>
                                <li>
                                    Worksheets
                                </li>
                            </ul>
                            <div>
                               Daytona, FL
                            </div>
                        </div>
                 
                </div>
            </div>
        </main>

        <footer
            class="fixed bottom-0 left-0 w-full flex items-center justify-start font-bold bg-purple-400 text-white h-24 mt-24 opacity-90 md:justify-center"
        >
            <p class="ml-2">Copyright &copy; 2023, All Rights reserved</p>

            <a href="create" class="absolute top-1/3 right-10 bg-blue-800 text-white py-2 px-5">Post Activity</a>
        </footer>
    </body>
</html>