<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-8">

                {{-- nosotros --}}

                <div class="relative bg-white overflow-hidden">
                    <div class="max-w-7xl mx-auto">

                      {{-- Menu de navegacion --}}

                      <div x-data="{open:false}">
                          <div  class="relative pt-6 px-4 sm:px-6 lg:px-8">
                              <nav  class="relative flex items-center justify-between sm:h-10 lg:justify-start" aria-label="Global">
                                  <div class="flex items-center flex-grow flex-shrink-0 lg:flex-grow-0">
                                      <div class="flex items-center justify-between w-full md:w-auto">
                                          <a href="#">
                                              <span class="sr-only">Workflow</span>
                                              <img src="{{asset('img/other/logoroy.png')}}" width="120">
                                          </a>
                                          <div class="-mr-2 flex items-center md:hidden">
                                              <button x-on:click="open = true" type="button" class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500" aria-expanded="false">
                                                  <span class="sr-only">Open main menu</span>
                                                  <!-- Heroicon name: outline/menu -->
                                                  <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                                                  </svg>
                                              </button>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="hidden md:block md:ml-10 md:pr-4 md:space-x-8">

                                      @foreach ($links as $link)
                                          <a href="{{$link['url']}}" class="text-sm text-gray-500 hover:text-gray-900">{{$link['name']}}</a>
                                      @endforeach

                                      @auth
                                          <a href="{{ url('/admin') }}" class="text-sm font-bold text-blue-800 hover:text-indigo-500">Plataforma</a>
                                      @else
                                          <a href="{{ route('login') }}" class="text-sm font-bold text-blue-800 hover:text-indigo-500">Inciar sesión</a>
                                      @endauth
                                  </div>
                              </nav>
                          </div>

                          {{-- Navegacion mobil --}}
                          <div x-show="open" x-on:click.away="open = false" class=" absolute top-0 inset-x-0 p-2 transition transform origin-top-right md:hidden">
                              <div  class="rounded-lg shadow-md bg-white ring-1 ring-black ring-opacity-5 overflow-hidden">
                                  <div class="px-5 pt-4 flex items-center justify-between">
                                      <div>
                                          <img class="h-12" src="{{asset('img/other/logo.png')}}">
                                      </div>
                                      <div class="-mr-2">
                                          <button x-on:click="open = false"  type="button" class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                                              <span  class="sr-only">Close main menu</span>
                                              <!-- Heroicon name: outline/x -->
                                              <svg  class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                                  <path  stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                              </svg>
                                          </button>
                                      </div>
                                  </div>
                                  <div class="px-2 pt-2 pb-3 space-y-1">
                                      @foreach ($links as $link)
                                          <a href="{{$link['url']}}" class="block px-3 py-2 rounded-md text-base font-medium text-blue-800 hover:text-white hover:bg-blue-800">{{$link['name']}}</a>
                                      @endforeach
                                  </div>

                                  @auth
                                      <a href="{{ url('/admin') }}" class="block w-full px-5 py-3 text-center font-medium text-white bg-blue-800 hover:bg-blue-700">Plataforma</a>
                                  @else
                                      <a href="{{ route('login') }}" class="block w-full px-5 py-3 text-center font-medium text-white bg-blue-800 hover:bg-blue-700">Iniciar sesión</a>
                                  @endauth

                              </div>
                          </div>
                      </div>

                      {{-- Banner --}}

                      <div class="mt-8 rounded-lg">
                        <div class="sliderAx h-auto">
                          <div id="slider-1" class="container mx-auto">
                            <div class="bg-cover bg-center  h-auto text-white py-24 px-10 object-fill" style="background-image: url({{asset('img/bg/fabricacioncalzado.jpg')}})">
                              <div class="md:w-1/2">
                                <p class="font-bold text-sm uppercase">Internacional de calzado S.A.</p>
                                <p class="text-3xl font-bold">Es una empresa guatemalteca</p>
                                <p class="text-2xl mb-10 leading-none">lider en el mercado de calzado de material 100% cuero.</p>
                                {{-- <a href="#" class="bg-blue-800 py-4 px-8 text-white font-bold uppercase text-xs rounded hover:bg-blue-700 hover:text-gray-200">Contact us</a> --}}
                              </div>
                            </div> <!-- container -->
                            <br>
                          </div>

                          <div id="slider-2" class="container mx-auto">
                            <div class="bg-cover bg-top  h-auto text-white py-24 px-10 object-fill" style="background-image: url({{asset('img/bg/pegadocalzado.jpg')}})">

                              <p class="font-bold text-sm uppercase">Internacional de calzado S.A.</p>
                              <p class="text-3xl font-bold">Es una empresa guatemalteca</p>
                              <p class="text-2xl mb-10 leading-none">lider en el mercado de calzado de material 100% cuero.</p>
                              {{-- <a href="#" class="bg-blue-800 py-4 px-8 text-white font-bold uppercase text-xs rounded hover:bg-gray-200 hover:text-gray-800">Contact us</a> --}}

                            </div> <!-- container -->
                            <br>
                          </div>
                        </div>
                        <div class="flex justify-between w-12 mx-auto pb-2">
                          <button id="sButton1" onclick="sliderButton1()" class="bg-blue-800 rounded-full w-4 pb-2 " ></button>
                          <button id="sButton2" onclick="sliderButton2() " class="bg-blue-800 rounded-full w-4 p-2"></button>
                        </div>
                      </div>

                      <div class="py-12 rounded-lg" >
                        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                          <div class="lg:text-center bg-cover rounded-lg bg-gray-50 py-2 shadow-lg">
                            <h2 class="text-base  font-black tracking-wide uppercase">Nuestra filosofía</h2>
                            <p class=" mt-2 text-3xl leading-8 font-extrabold tracking-tight  sm:text-4xl">
                              Internacional de calzado S.A.

                            </p>
                            <p class="mt-4 max-w-2xl text-xl text-gray-500 lg:mx-auto">
                              Es una empresa guatemalteca, lider en el mercado de calzado de material 100% cuero.
                            </p>
                          </div>

                          <div class="mt-10">
                            <dl class="space-y-10 md:space-y-0 md:grid md:grid-cols-2 md:gap-x-8 md:gap-y-10">
                              <div class="flex">
                                <div class="flex-shrink-0">
                                  <div class="flex items-center justify-center h-12 w-12 rounded-md bg-blue-800 text-white">
                                    <!-- Heroicon name: outline/globe-alt -->
                                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                                    </svg>
                                  </div>
                                </div>
                                <div class="ml-4">
                                  <dt class="text-lg leading-6 font-medium text-gray-900">
                                    Nosotros
                                  </dt>
                                  <dd class="mt-2 text-base text-gray-500 text-justify">
                                    Hace más de 35 años se buscaba en Guatemala contar con calzado sinónimo de calidad, por lo que nace Calzado Roy con productos y diseños originales, de alta rotación, durables, modernos y adaptables a las exigencias del mercado guatemalteco.
                                  </dd>
                                </div>
                              </div>

                              <div class="flex">
                                <div class="flex-shrink-0">
                                  <div class="flex items-center justify-center h-12 w-12 rounded-md bg-blue-800 text-white">
                                    <!-- Heroicon name: outline/scale -->
                                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3" />
                                    </svg>
                                  </div>
                                </div>
                                <div class="ml-4">
                                  <dt class="text-lg leading-6 font-medium text-gray-900">
                                    Misión
                                  </dt>
                                  <dd class="mt-2 text-base text-gray-500 text-justify">
                                    Calzar a un tercio de la población centroamericana y del Caribe, brindando el mejor servicio al cliente de la industria y proporcionando el producto con la mejor relación calidad - precio.
                                  </dd>
                                </div>
                              </div>

                              <div class="flex">
                                <div class="flex-shrink-0">
                                  <div class="flex items-center justify-center h-12 w-12 rounded-md bg-blue-800 text-white">
                                    <!-- Heroicon name: outline/lightning-bolt -->
                                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                                    </svg>
                                  </div>
                                </div>
                                <div class="ml-4">
                                  <dt class="text-lg leading-6 font-medium text-gray-900">
                                    Visión
                                  </dt>
                                  <dd class="mt-2 text-base text-gray-500 text-justify">
                                    Ser la empresa comercializadora de calzado número uno de la región, con presencia en el mercado centroamericano y del Caribe.
                                  </dd>
                                </div>
                              </div>

                              <div class="flex">
                                <div class="flex-shrink-0">
                                  <div class="flex items-center justify-center h-12 w-12 rounded-md bg-blue-800 text-white">
                                    <!-- Heroicon name: outline/annotation -->
                                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
                                    </svg>
                                  </div>
                                </div>
                                <div class="ml-4">
                                  <dt class="text-lg leading-6 font-medium text-gray-900">
                                    Valores
                                  </dt>
                                  <dd class="mt-2 text-base text-gray-500">
                                    Lealtad, Servicio al cliente, Integridad, Excelencia, Lealtad y Compromiso.
                                  </dd>
                                </div>
                              </div>
                            </dl>
                          </div>
                        </div>
                      </div>

                    </div>
                </div>

                {{-- trabaja con nosotros --}}

                <div class="hidden sm:block" aria-hidden="true">
                  <div class="py-5">
                    <div class="border-t border-gray-200"></div>
                  </div>
                </div>


                <div id="trabajaconnosotros" class="relative bg-white overflow-hidden">
                    <div class="max-w-7xl mx-auto">
                        <div class="relative z-10 pb-8 bg-white sm:pb-16 md:pb-20 lg:max-w-2xl lg:w-full lg:pb-28 xl:pb-32">
                            <svg class="hidden lg:block absolute right-0 inset-y-0 h-full w-48 text-white transform translate-x-1/2" fill="currentColor" viewBox="0 0 100 100" preserveAspectRatio="none" aria-hidden="true">
                                <polygon points="50,0 100,0 50,100 0,100" />
                            </svg>

                            <div>
                              <div  class="relative pt-6 px-4 sm:px-6 lg:px-8">
                              </div>
                            </div>

                            <main class="mt-10 mx-auto max-w-7xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28">
                                <div class="sm:text-center lg:text-left">
                                    <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl">
                                        <span class="block xl:inline">Se parte de nuestro equipo </span>
                                        <span class="block text-blue-800 xl:inline">de trabajo</span>
                                    </h1>
                                    <p class="mt-3 text-base text-gray-500 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
                                      Nos gusta la gente que trabaja duro y en equipo, aquella que convierte lo imposible en posible y aquella que le encanta ser ella misma.
                                      Si te sientes identificado con nuestra ideologia te invitamos a que seas parte de la experiencia ROY.
                                    </p>
                                    <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
                                        <div class="rounded-md shadow">
                                            <a href="#" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-blue-800 hover:bg-blue-700 md:py-4 md:text-lg md:px-10">
                                              Llenar solicitud
                                            </a>
                                        </div>
                                        {{-- <div class="mt-3 sm:mt-0 sm:ml-3">
                                            <a href="#" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-blue-800 bg-indigo-100 hover:bg-blue-200 md:py-4 md:text-lg md:px-10">
                                            Live demo
                                            </a>
                                        </div> --}}
                                    </div>
                                </div>
                            </main>
                        </div>
                    </div>
                    <div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
                        <img class="h-56 w-full object-cover sm:h-72 md:h-96 lg:w-full lg:h-full" src="{{asset('img/other/work.jpg')}}" alt="">
                    </div>
                </div>

                {{-- Afiliate --}}

                <div class="hidden sm:block" aria-hidden="true">
                  <div class="py-5">
                    <div class="border-t border-gray-200"></div>
                  </div>
                </div>


                <div class="bg-gray-50 shadow-lg">
                  <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8 lg:flex lg:items-center lg:justify-between">
                    <h2 class="text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                      <span class="block">¿ Buscas un ingreso extra ?</span>
                      <span class="block text-blue-800">Hasta un 30% de ganancia.</span>
                    </h2>
                    <div class="mt-8 flex lg:mt-0 lg:flex-shrink-0">
                      <div class="inline-flex rounded-md shadow">
                        <a href="#" class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-blue-800 hover:bg-blue-700">
                          Afiliarme
                        </a>
                      </div>
                    </div>
                  </div>
                </div>


                {{-- contactanos--}}

                <div class="hidden sm:block" aria-hidden="true">
                  <div class="py-5">
                    <div class="border-t border-gray-200"></div>
                  </div>
                </div>

                <h1 id="contacto" class=" my-8 text-center text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl">
                    <span class="block xl:inline">Deseas contactarnos, </span>
                    <span class="block text-blue-800 xl:inline">escribenos aquí</span>
                </h1>

                <div class="mt-10 sm:mt-0">
                  <div class="md:grid md:grid-cols-3 md:gap-6">
                    <div class="md:col-span-1">
                      <div class="px-4 sm:px-0">
                        <h3 class="text-lg font-medium leading-6 text-gray-900">Nuestras redes</h3>
                        <p class="mt-1 text-sm text-gray-600">
                          Puedes visitar cualquiera de nuestras redes socials.
                        </p>

                        <div class="mt-6 pb-16 lg:pb-0 w-4/5 lg:w-full mx-auto flex flex-wrap items-center justify-between">
                          <a class="link" href="#" data-tippy-content="@facebook_handle"><svg class="h-6 fill-current text-gray-600 hover:text-blue-800" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Facebook</title><path d="M22.676 0H1.324C.593 0 0 .593 0 1.324v21.352C0 23.408.593 24 1.324 24h11.494v-9.294H9.689v-3.621h3.129V8.41c0-3.099 1.894-4.785 4.659-4.785 1.325 0 2.464.097 2.796.141v3.24h-1.921c-1.5 0-1.792.721-1.792 1.771v2.311h3.584l-.465 3.63H16.56V24h6.115c.733 0 1.325-.592 1.325-1.324V1.324C24 .593 23.408 0 22.676 0"/></svg></a>
                          <a class="link" href="#" data-tippy-content="@twitter_handle"><svg class="h-6 fill-current text-gray-600 hover:text-blue-400" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Twitter</title><path d="M23.954 4.569c-.885.389-1.83.654-2.825.775 1.014-.611 1.794-1.574 2.163-2.723-.951.555-2.005.959-3.127 1.184-.896-.959-2.173-1.559-3.591-1.559-2.717 0-4.92 2.203-4.92 4.917 0 .39.045.765.127 1.124C7.691 8.094 4.066 6.13 1.64 3.161c-.427.722-.666 1.561-.666 2.475 0 1.71.87 3.213 2.188 4.096-.807-.026-1.566-.248-2.228-.616v.061c0 2.385 1.693 4.374 3.946 4.827-.413.111-.849.171-1.296.171-.314 0-.615-.03-.916-.086.631 1.953 2.445 3.377 4.604 3.417-1.68 1.319-3.809 2.105-6.102 2.105-.39 0-.779-.023-1.17-.067 2.189 1.394 4.768 2.209 7.557 2.209 9.054 0 13.999-7.496 13.999-13.986 0-.209 0-.42-.015-.63.961-.689 1.8-1.56 2.46-2.548l-.047-.02z"/></svg></a>
                          <a class="link" href="#" data-tippy-content="@instagram_handle"><svg class="h-6 fill-current text-gray-600 hover:text-indigo-500" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Instagram</title><path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z"/></svg></a>
                          <a class="link" href="#" data-tippy-content="@youtube_handle"><svg class="h-6 fill-current text-gray-600 hover:text-red-600" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>YouTube</title><path d="M23.495 6.205a3.007 3.007 0 0 0-2.088-2.088c-1.87-.501-9.396-.501-9.396-.501s-7.507-.01-9.396.501A3.007 3.007 0 0 0 .527 6.205a31.247 31.247 0 0 0-.522 5.805 31.247 31.247 0 0 0 .522 5.783 3.007 3.007 0 0 0 2.088 2.088c1.868.502 9.396.502 9.396.502s7.506 0 9.396-.502a3.007 3.007 0 0 0 2.088-2.088 31.247 31.247 0 0 0 .5-5.783 31.247 31.247 0 0 0-.5-5.805zM9.609 15.601V8.408l6.264 3.602z"/></svg></a>
                        </div>

                      </div>
                    </div>
                    <div class="mt-5 md:mt-0 md:col-span-2 shadow-lg">
                      <form action="#" method="POST">
                        <div class="shadow overflow-hidden sm:rounded-md">
                          <div class="px-4 py-5 bg-white sm:p-6">
                            <div class="grid grid-cols-6 gap-6">
                              <div class="col-span-6 sm:col-span-3">
                                <label for="name" class="block text-sm font-medium text-gray-700">Nombre</label>
                                <input type="text" name="name" id="name" autocomplete="given-name" class="mt-1 focus:ring-blue-800 focus:border-blue-800 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                              </div>

                              <div class="col-span-6 sm:col-span-3">
                                <label for="lastname" class="block text-sm font-medium text-gray-700">Apellido</label>
                                <input type="text" name="lastname" id="lastname" autocomplete="family-name" class="mt-1 focus:ring-blue-800 focus:border-blue-800 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                              </div>

                              <div class="col-span-6 sm:col-span-4">
                                <label for="email" class="block text-sm font-medium text-gray-700">Correo electronico</label>
                                <input type="text" name="email" id="email" autocomplete="email" class="mt-1 focus:ring-blue-800 focus:border-blue-800 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                              </div>
                              <div class="col-span-6 sm:col-span-2">
                                <label for="telefono" class="block text-sm font-medium text-gray-700">Telefono</label>
                                <input type="text" name="telefono" id="telefono" autocomplete="family-name" class="mt-1 focus:ring-blue-800 focus:border-blue-800 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                              </div>

                              <div class="col-span-6">
                                <label for="street_address" class="block text-sm font-medium text-gray-700">Mensaje</label>
                                <textarea name="mensaje" id="mensaje" cols="30" rows="10" placeholder="Ingrese aquí su mensaje ..... " class="mt-1 focus:ring-blue-800 focus:border-blue-800 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"></textarea>
                              </div>

                            </div>
                          </div>
                          <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                            <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-800 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                              Enviar
                            </button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>

                <div class="hidden sm:block" aria-hidden="true">
                  <div class="py-5">
                    <div class="border-t border-gray-200"></div>
                  </div>
                </div>

                <div class="text-center">
                  <h1 class="text-gray-500"><strong>Copyright Cybernelsk8 &copy; 2017-{{ date('Y') }} Roy</strong> All rights reserved.</h1>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
