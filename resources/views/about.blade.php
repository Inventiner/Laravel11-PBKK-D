<x-layout>
    <x-slot:title>{{ $title }}</x-slot>
    <section class="py-5 max-w-l md:py-4 mx-auto">
        <div class="container mx-auto px-4">
            <div class="text-center">
                <div class="flex justify-center mb-4">
                    <img class="rounded-full h-48 w-48" src="https://media.licdn.com/dms/image/v2/D5603AQEkOsfQZyL0FQ/profile-displayphoto-shrink_800_800/profile-displayphoto-shrink_800_800/0/1707133161401?e=1731542400&v=beta&t=lwMvMNfqh3w8CvSswKjSANzx2V5inmz7rZXZc7fIO7Y" alt="Profile Picture">
                </div>

                <h6 class="font-medium text-gray-600 text-lg md:text-4xl uppercase mb-4">Billy Jonathan</h6>

                <h1 class="font-normal text-gray-900 text-4xl md:text-6xl leading-none mb-4">Student at Institut Teknologi Sepuluh Nopember</h1>

                <p class="font-normal text-gray-600 text-md md:text-xl mb-8">I have a passion for software development. I enjoy creating programs that make stuff easier for people.</p>

                <a href="https://www.linkedin.com/in/billy-jonathan-39a7b5267/" class="px-7 py-3 md:px-9 md:py-4 font-medium md:font-semibold bg-gray-700 text-gray-50 text-sm rounded-md hover:bg-gray-200 hover:text-gray-700 transition ease-linear duration-500">Learn More</a>
            </div>
        </div>

    </section>

    {{-- <section class="py-10 md:py-16">

        <div class="container max-w-screen-xl mx-auto px-4">

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="bg-gray-50 px-8 py-10 rounded-md">
                    <div class="w-20 py-6 flex justify-center bg-gray-100 rounded-md mb-4">
                        <i data-feather="activity"></i>
                    </div>

                    <h4 class="font-medium text-gray-700 text-lg mb-4">High experience</h4>

                    <p class="font-normal text-gray-500 text-md">Lorem ipsum dolor sit amet, consectetur <br> adipiscing elit, sed do eiusmod tempor <br> incididunt ut labore et dolore magna aliqua.</p>
                </div>
                
                <div class="bg-gray-50 px-8 py-10 rounded-md">
                    <div class="w-20 py-6 flex justify-center bg-gray-100 rounded-md mb-4">
                        <i data-feather="codesandbox"></i>
                    </div>

                    <h4 class="font-medium text-gray-700 text-lg mb-4">Useful sandboxes</h4>

                    <p class="font-normal text-gray-500 text-md">Lorem ipsum dolor sit amet, consectetur <br> adipiscing elit, sed do eiusmod tempor <br> incididunt ut labore et dolore magna aliqua.</p>
                </div>
                
                <div class="bg-gray-50 px-8 py-10 rounded-md">
                    <div class="w-20 py-6 flex justify-center bg-gray-100 rounded-md mb-4">
                        <i data-feather="coffee"></i>
                    </div>

                    <h4 class="font-medium text-gray-700 text-lg mb-4">Success side projects</h4>

                    <p class="font-normal text-gray-500 text-md">Lorem ipsum dolor sit amet, consectetur <br> adipiscing elit, sed do eiusmod tempor <br> incididunt ut labore et dolore magna aliqua.</p>
                </div>
            </div>

        </div>

    </section> --}}

    {{-- <section class="py-10 md:py-16">

        <div class="container max-w-screen-xl mx-auto px-4">

            <div class="flex flex-col lg:flex-row justify-between">
                <div class="mb-10 lg:mb-0">
                    <h1 class="font-medium text-gray-700 text-3xl md:text-4xl mb-5">Portfolio</h1>

                    <p class="font-normal text-gray-500 text-xs md:text-base">I have brought here my biggest and favorite works <br> as a professional.</p>
                </div>

                <div class="space-y-24">
                    <div class="flex space-x-6">
                        <h1 class="font-normal text-gray-700 text-3xl md:text-4xl">01</h1>

                        <span class="w-28 h-0.5 bg-gray-300 mt-5"></span>

                        <div>
                            <h1 class="font-normal text-gray-700 text-3xl md:text-4xl mb-5">Demo API Generator</h1>

                            <p class="font-normal text-gray-500 text-sm md:text-base">A dummy data free and documented API generator to facilitate <br> the process of testing the front-end portion of projects.</p>
                        </div>
                    </div>
                    
                    <div class="flex space-x-6">
                        <h1 class="font-normal text-gray-700 text-3xl md:text-4xl">02</h1>

                        <span class="w-28 h-0.5 bg-gray-300 mt-5"></span>

                        <div>
                            <h1 class="font-normal text-gray-700 text-3xl md:text-4xl mb-5">Demo API Generator</h1>

                            <p class="font-normal text-gray-500 text-sm md:text-base">A dummy data free and documented API generator to facilitate <br> the process of testing the front-end portion of projects.</p>
                        </div>
                    </div>
                    
                    <div class="flex space-x-6">
                        <h1 class="font-normal text-gray-700 text-3xl md:text-4xl">03</h1>

                        <span class="w-28 h-0.5 bg-gray-300 mt-5"></span>

                        <div>
                            <h1 class="font-normal text-gray-700 text-3xl md:text-4xl mb-5">Demo API Generator</h1>

                            <p class="font-normal text-gray-500 text-sm md:text-base">A dummy data free and documented API generator to facilitate <br> the process of testing the front-end portion of projects.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section> --}}

    <section class="py-10 md:py-16">

        <div class="container max-w-screen-xl mx-auto px-2">

            <h1 class="font-medium text-gray-700 text-3xl md:text-4xl mb-5">Education</h1>
            <p class="font-normal text-gray-500 text-xs md:text-base mb-5">Below is a summary of the places I studied</p>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                <div class="bg-gray-50 px-8 py-10 rounded-md">
                    <h4 class="font-medium text-gray-700 text-lg mb-2">2022 – Now</h4>

                    <p class="font-medium text-gray-600 text-base">Institut Teknologi Sepuluh Nopember</p>
                    <p class="font-normal text-gray-500 text-md mb-4">Fakultas Teknologi Elektro dan Informatika Cerdas <br> S1 Teknik Informatika.</p>

                    <div class="relative">
                        <a href="https://www.its.ac.id/">
                            <h6 class="font-semibold text-gray-500 text-md relative z-10">See the place here</h6>
                            <span class="w-32 h-1 bg-blue-200 absolute bottom-1 left-0 z-0"></span>
                        </a>
                    </div>
                </div>

                <div class="bg-gray-50 px-8 py-10 rounded-md">
                    <h4 class="font-semibold  text-gray-700 text-lg mb-2">2016 – 2022</h4>

                    <p class="font-medium text-gray-600 text-base">PKBM SMI</p>
                    <p class="font-normal text-gray-500 text-md mb-4">SMP - SMA</p>

                    <div class="relative">
                        <a href="https://shinemercyinterculture.sch.id/">
                            <h6 class="font-semibold text-gray-500 text-md relative z-10">See the place here</h6>
                            <span class="w-32 h-1 bg-blue-200 absolute bottom-1 left-0 z-0"></span>
                        </a>
                    </div>
                </div>

                <div class="bg-gray-50 px-8 py-10 rounded-md">
                    <h4 class="font-medium text-gray-700 text-lg mb-2">2010 – 2016</h4>

                    <p class="font-medium text-gray-600 text-base">PKBM AELI</p>
                    <p class="font-normal text-gray-500 text-md mb-4">SD</p>

                    <div class="relative">
                        <a href="https://dapo.kemdikbud.go.id/sekolah/F9291F06B4F1B41AB884">
                            <h6 class="font-semibold text-gray-500 text-md relative z-10">See the place here</h6>
                            <span class="w-32 h-1 bg-blue-200 absolute bottom-1 left-0 z-0"></span>
                        </a>
                    </div>
                </div>
            </div>

        </div>

    </section>

    {{-- <section class="py-10 md:py-16">

        <div class="container max-w-screen-xl mx-auto px-4">

            <div class="text-center">
                <h1 class="font-normal text-gray-300 text-3xl md:text-6xl lg:text-7xl mb-20 md:mb-32 lg:mb-48">Please do not measure your skills in <br> percentages!</h1>

                <p class="font-medium text-gray-700 text-xs md:text-base">In my many years of experience, I use @laravel for backend projects and @vuejs for <br> front-end projects. I’m an avid programmer, so I create designs based on the <br> weekend @figmadesign.</p>
            </div>

        </div>

    </section> --}}

    {{-- <section class="py-10 md:py-16">

        <div class="container max-w-screen-xl mx-auto px-4">

            <h1 class="font-medium text-gray-700 text-3xl md:text-4xl mb-5">Experience</h1>

            <p class="font-normal text-gray-500 text-xs md:text-base mb-20">Below is a summary of the places I studied</p>

            <div class="flex flex-col lg:flex-row justify-between">
                <div class="space-y-8 md:space-y-16 mb-16 md:mb-0">
                    <h6 class="font-medium text-gray-400 text-base uppercase">Company</h6>

                    <p class="font-semibold text-gray-600 text-base">Massa Fames <span class="font-normal text-gray-300">/ New York</span></p>

                    <p class="font-semibold text-gray-600 text-base">Massa Fames <span class="font-normal text-gray-300">/ New York</span></p>

                    <p class="font-semibold text-gray-600 text-base">Massa Fames <span class="font-normal text-gray-300">/ New York</span></p>

                    <p class="font-semibold text-gray-600 text-base">Massa Fames <span class="font-normal text-gray-300">/ New York</span></p>

                    <p class="font-semibold text-gray-600 text-base">Massa Fames <span class="font-normal text-gray-300">/ New York</span></p>
                </div>

                <div class="space-y-8 md:space-y-16 mb-16 md:mb-0">
                    <h6 class="font-medium text-gray-400 text-base uppercase">Position</h6>

                    <p class="font-normal text-gray-400 text-base">Junior Front-End Developer</p>

                    <p class="font-normal text-gray-400 text-base">Junior Front-End Developer</p>

                    <p class="font-normal text-gray-400 text-base">Junior Front-End Developer</p>

                    <p class="font-normal text-gray-400 text-base">Junior Front-End Developer</p>

                    <p class="font-normal text-gray-400 text-base">Junior Front-End Developer</p>
                </div>

                <div class="space-y-8 md:space-y-16">
                    <h6 class="font-medium text-gray-400 text-base uppercase">Year</h6>

                    <p class="font-normal text-gray-400 text-base">2016</p>

                    <p class="font-normal text-gray-400 text-base">2016</p>

                    <p class="font-normal text-gray-400 text-base">2016</p>

                    <p class="font-normal text-gray-400 text-base">2016</p>

                    <p class="font-normal text-gray-400 text-base">2016</p>
                </div>
            </div>
            
        </div>

    </section> --}}

    {{-- <section class="py-10 md:py-16">

        <div class="container max-w-screen-xl mx-auto px-4">

            <h1 class="font-medium text-gray-700 text-3xl md:text-4xl mb-5">Brands</h1>

            <p class="font-normal text-gray-500 text-xs md:text-base mb-10 md:mb-20">Below is a summary of the places I studied</p>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
                <img src="assets/image/brand-1.png" alt="Image">

                <img src="assets/image/brand-2.png" alt="Image">

                <img src="assets/image/brand-3.png" alt="Image">

                <img src="assets/image/brand-4.png" alt="Image">

                <img src="assets/image/brand-5.png" alt="Image">

                <img src="assets/image/brand-6.png" alt="Image">
            </div>

        </div>

    </section> --}}

    {{-- <section class="py-10 md:py-16">

        <div class="container max-w-screen-xl mx-auto px-4">

            <h1 class="font-medium text-gray-700 text-3xl md:text-4xl mb-5">Testimonial</h1>

            <p class="font-normal text-gray-500 text-xs md:text-base mb-10 md:mb-20">Below is a summary of the places I studied</p>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="bg-gray-50 px-8 py-10 rounded-md">

                    <p class="font-normal text-gray-500 text-md mb-4">Lorem ipsum dolor sit amet, consectetur <br> adipiscing elit, sed do eiusmod tempor <br> incididunt ut labore et dolore magna aliqua.</p>

                    <h6 class="font-semibold text-gray-500 text-md">Stephan Clark <span class="font-medium text-gray-300 text-sm">- CEO at EarlyBird</span></h6>
                </div>

                <div class="bg-gray-50 px-8 py-10 rounded-md">

                    <p class="font-normal text-gray-500 text-md mb-4">Lorem ipsum dolor sit amet, consectetur <br> adipiscing elit, sed do eiusmod tempor <br> incididunt ut labore et dolore magna aliqua.</p>

                    <h6 class="font-semibold text-gray-500 text-md">Stephan Clark <span class="font-medium text-gray-300 text-sm">- CEO at EarlyBird</span></h6>
                </div>

                <div class="bg-gray-50 px-8 py-10 rounded-md">

                    <p class="font-normal text-gray-500 text-md mb-4">Lorem ipsum dolor sit amet, consectetur <br> adipiscing elit, sed do eiusmod tempor <br> incididunt ut labore et dolore magna aliqua.</p>

                    <h6 class="font-semibold text-gray-500 text-md">Stephan Clark <span class="font-medium text-gray-300 text-sm">- CEO at EarlyBird</span></h6>
                </div>

                <div class="bg-gray-50 px-8 py-10 rounded-md">

                    <p class="font-normal text-gray-500 text-md mb-4">Lorem ipsum dolor sit amet, consectetur <br> adipiscing elit, sed do eiusmod tempor <br> incididunt ut labore et dolore magna aliqua.</p>

                    <h6 class="font-semibold text-gray-500 text-md">Stephan Clark <span class="font-medium text-gray-300 text-sm">- CEO at EarlyBird</span></h6>
                </div>

                <div class="bg-gray-50 px-8 py-10 rounded-md">

                    <p class="font-normal text-gray-500 text-md mb-4">Lorem ipsum dolor sit amet, consectetur <br> adipiscing elit, sed do eiusmod tempor <br> incididunt ut labore et dolore magna aliqua.</p>

                    <h6 class="font-semibold text-gray-500 text-md">Stephan Clark <span class="font-medium text-gray-300 text-sm">- CEO at EarlyBird</span></h6>
                </div>

                <div class="bg-gray-50 px-8 py-10 rounded-md">

                    <p class="font-normal text-gray-500 text-md mb-4">Lorem ipsum dolor sit amet, consectetur <br> adipiscing elit, sed do eiusmod tempor <br> incididunt ut labore et dolore magna aliqua.</p>

                    <h6 class="font-semibold text-gray-500 text-md">Stephan Clark <span class="font-medium text-gray-300 text-sm">- CEO at EarlyBird</span></h6>
                </div>
            </div>

        </div>

    </section> --}} 

    {{-- <footer class="py-10 md:py-16 mb-20 md:mb-40 lg::mb-52"> --}}
</x-layout>