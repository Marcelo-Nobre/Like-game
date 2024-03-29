<x-layouts.content>
    <header class="relative flex items-center justify-center h-auto mb-0 overflow-hidden z-20">
        <div class="relative z-20 p-3 px-0 mx-0 w-full text-center py-24 lg:py-56 bg-gradient-to-t to-transparent from-black">
            <h1 class="mb-4 text-4xl font-bold tracking-tight leading-none text-white md:text-5xl lg:text-6xl">Administração de Concomínios</h1>
            <p class="mb-8 text-lg font-normal text-white lg:text-xl sm:px-16 lg:px-48">Conheça mais nossos serviços</p>
            <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0">
                <a href="#" class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-full bg-yellow-500 hover:bg-yellow-600 ring-0">
                    Iniciar aqui
                    <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                    </svg>
                </a>
            </div>
        </div>
        <video autoplay loop muted class="absolute z-10 w-auto min-w-full min-h-full max-w-none">
          <source src="{{ asset('imgs/video-home.mp4') }}" type="video/mp4" />
          Seu navegador não comporta a tag video
        </video>
    </header>

    {{-- BEGIN hero 2 --}}
    {{-- <div class="landing">
        <div class="container">
            <div class="user">
                <h1>We specialize in UI/UX, Web Development, Digital Marketing.</h1>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque fringilla magna mauris.
                    Nulla fermentum viverra sem eu rhoncus consequat varius nisi quis, posuere magna.
                </p>
                <div class="button">
                    <a href="#">Get Started Now</a>
                    <span class="get">
                        <div class="screen"> Call us (0123) 456 - 789 </div>
                        <span class="block">For any question or concern</span>
                    </span>
                </div>
            </div>
            <div class="shape">
                <img class="shape-2"  src="{{ asset('imgs/shape-02.svg') }}" alt="">
                <img class="shape-3"  src="{{ asset('imgs/shape-03.svg') }}" alt="">
                <div class="blue">
                    <img src="{{ asset('imgs/pngimg.com_assassins_creed_PNG82.png') }}" alt="">
                </div>
            </div>
        </div>
    </div> --}}
    {{-- END hero 2 --}}

    <div class="features">
        <div class="container">
            <div class="wolf">
                <i class="fas fa-user-secret user"></i>
                <div class="text">
                    <h4>24/7 Support</h4>
                    <p>Lorem ipsum dolor sit amet conse adipiscing elit.</p>
            </div>
            </div>
            <div class="wolf">
                <i class="fas fa-globe-africa globe"></i>
                <div class="text">
                    <h4>Take Ownership</h4>
                    <p>Lorem ipsum dolor sit amet conse adipiscing elit.</p>
            </div>
            </div>
            <div class="wolf">
                <i class="fa-solid fa-users users"></i>
                <div class="text">
                    <h4>Team Work</h4>
                    <p>Lorem ipsum dolor sit amet conse adipiscing elit.</p>
            </div>
            </div>

        </div>
    </div>

    <div class="w-full bg-gray-900 py-6">
        <div class="w-4/5 mx-auto">
            <h1 class="mb-4 text-4xl font-bold tracking-tight leading-none text-white text-center md:text-5xl lg:text-6xl">
                Central do Cliente HFlex
            </h1>
        </div>

        <div class="max-w-6xl px-3 mx-auto flex flex-col md:flex-row justfy-center gap-5">
            @foreach ([
                [
                    'url' => '#central-do-cliente',
                    'icon' => 'fas-file-pdf',
                    'title' => 'E-mail',
                    'label' => '2° Via Boleto',
                    'subLabel' => 'Central do cliente',
                    'show' => true,
                ],
                [
                    'url' => 'mailto:crc@hflex.net.br',
                    'icon' => 'far-envelope',
                    'title' => 'E-mail',
                    'label' => 'crc@hflex.net.br',
                    'subLabel' => 'crc@hflex.net.br',
                    'show' => true,
                ],
                [
                    'url' => 'https://api.whatsapp.com/send/?phone=551138930000&text&type=phone_number&app_absent=0',
                    'icon' => 'fab-whatsapp',
                    'title' => 'WhatsApp',
                    'label' => '(11) 3893-0000',
                    'subLabel' => '(11) 3893-0000',
                    'show' => true,
                ],
                [
                    'url' => '#unidades',
                    'icon' => 'far-map',
                    'label' => 'Unidades',
                    'subLabel' => 'Unidades',
                    'show' => true,
                ],

        ] as $link)
            @php
                $link = fluent($link);
            @endphp

            @if (!$link?->show)
                @continue
            @endif
            <a
                href="#"
                class="w-full md:w-2/5 sm:w-auto bg-amber-600 hover:bg-amber-500 focus:ring-4 focus:outline-none focus:ring-amber-300 text-white rounded-lg inline-flex items-center justify-center px-4 py-2.5 dark:bg-amber-600 dark:hover:bg-amber-700 dark:focus:ring-amber-700"
            >
                @if ($link?->icon)
                    @svg($link?->icon, 'me-3 w-7 h-7')
                @endif

                <div class="text-left rtl:text-right">
                    <div class="-mt-1 font-sans text-sm font-semibold">
                        {{ $link?->label ?? $link?->title ?? '' }}
                    </div>

                    @if ($link?->subLabel)
                    <div class="mb-1 text-xs">{{ $link?->subLabel }}</div>
                    @endif
                </div>
            </a>
            @endforeach
        </div>
    </div>

    <div class="w-full bg-gray-100 py-6">
        <div class="w-4/5 mx-auto">
            <h1 class="mb-4 text-4xl font-bold tracking-tight leading-none text-gray-900 text-center md:text-5xl lg:text-6xl">
                Nossos Serviços
            </h1>

            <p class="mb-3 font-normal text-gray-700 text-2xl">
                Temos mais de 20 anos de experiência no mercado de gestão de imóveis, com atendimento personalizado e serviços flexíveis. Como podemos ajudar você?
            </p>
        </div>

        <div class="w-4/5 mx-auto grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-3 py-6">
            @foreach (range(1, 4) as $item)
                <div class="w-full md:max-w-56 mx-auto p-2 bg-white border border-gray-200 rounded-lg shadow">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 text-center">Item {{ $item }}</h5>
                    </a>

                    <div class="flex items-center justify-center">
                        <hr class="border-b border-gray-700 w-5 mx-auto">
                    </div>

                    <p class="mb-3 font-normal text-gray-700">
                        Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.
                    </p>

                    <div class="flex items-center justify-center">
                        <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-amber-600 rounded-lg hover:bg-amber-700 focus:ring-4 focus:outline-none focus:ring-amber-300 dark:focus:ring-amber-800">
                            Saber mais
                            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                            </svg>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <div class="w-full bg-gray-900 py-6">
        <div class="w-4/5 mx-auto">
            <h1 class="mb-4 text-4xl font-bold tracking-tight leading-none text-white text-center md:text-5xl lg:text-6xl">
                Beneficios HFlex
            </h1>
        </div>

        <div class="w-4/5 mx-auto grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-3 py-6">
            @foreach (range(1, 4) as $item)
                <div class="w-full md:max-w-56 mx-auto p-2 bg-white border border-gray-200 rounded-lg shadow">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 text-center">Item {{ $item }}</h5>
                    </a>

                    <div class="flex items-center justify-center">
                        <hr class="border-b border-gray-700 w-5 mx-auto">
                    </div>

                    <p class="mb-3 font-normal text-gray-700">
                        Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.
                    </p>

                    <div class="flex items-center justify-center">
                        <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-amber-600 rounded-lg hover:bg-amber-700 focus:ring-4 focus:outline-none focus:ring-amber-300 dark:focus:ring-amber-800">
                            Saber mais
                            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                            </svg>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <div class="contact">
        <div class="container">
            <div class="img-all">
                <div class="img-1">
                    <img class="shape-5" src="{{ asset('imgs/shape-05.svg') }}" alt="">
                    <img src="{{ asset('imgs/about-01.png') }}" alt="">
                    <img src="{{ asset('imgs/about-02.png') }}" alt="">
                </div>
                <div class="img-2">
                    <img class="shape-6" src="{{ asset('imgs/shape-06.svg') }}" alt="">
                    <img src="{{ asset('imgs/about-03.png') }}" alt="">
                    <img class="shape-7" src="{{ asset('imgs/shape-07.svg') }}" alt="">
                </div>
            </div>
            <div class="animate">
                <h4>Porque escolher a HFlex</h4>
                <h2>We Make Our customers happy by giving Best services.</h2>
                <p>
                It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
                The point of using Lorem Ipsum.
                </p>
                <div class="work">
                    <button
                        class="inline-flex items-center px-3 py-2 font-medium text-center text-white bg-amber-600 rounded-lg hover:bg-amber-700 focus:ring-4 focus:outline-none focus:ring-amber-300 dark:focus:ring-amber-800 gap-x-3 text-2xl pb-3"
                        onclick="openVideo(this)"
                        data-youtube-url="https://www.youtube.com/embed/QOhV1JvQKRg?si=PdeSLleqEXoO69xf"
                    >
                        Ver apresentação
                        @svg('fab-youtube', 'me-3 w-7 h-7')
                    </button>
                    <div class="video">
                        <iframe
                            data-id="demo-video"
                            class="iframe"
                            width="1280"
                            height="720"
                            title="Enviando e-mails com o Laravel"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen
                        ></iframe>
                        <button onclick="closeVideo()" class="closeVideo">
                            <i class="fa-solid fa-close" style="cursor: pointer;"></i>
                        </button>
                    </div>
                    <span class="span">Veja como trabalhamos</span>
                </div>
            </div>
        </div>
    </div>
    <div class="creative">
        <div class="text">
            <img src="{{ asset('imgs/shape-09.svg') }}" alt="">
            <img src="{{ asset('imgs/shape-10.svg') }}" alt="">
            <img src="{{ asset('imgs/shape-11.svg') }}" alt="">
            <h3>Meet With Our Creative Dedicated Team</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing
              elit. In convallis tortor eros. Donec vitae tortor
              lacus. Phasellus aliquam ante in maximus.</p>
          </div>
          <div class="container">
            <div class="cards">
              <div class="card">
                <div class="image">
                  <img src="{{ asset('imgs/team-01.png') }}" alt="">
                  <div class="bef">
                    <a href=""><i class="fa-brands fa-tiktok"></i></a>
                    <a href=""><i class="fa-brands fa-youtube"></i></a>
                    <a href=""><i class="fa-brands fa-twitter"></i></a>
                    </div>
                </div>

                <h4>Olivia Andrium</h4>
                <p>Product Manager</p>
              </div>
              <div class="card">
                <div class="image">
                  <img src="{{ asset('imgs/team-02.png') }}" alt="">
                  <div class="bef">
                    <a href=""><i class="fa-brands fa-tiktok"></i></a>
                    <a href=""><i class="fa-brands fa-youtube"></i></a>
                    <a href=""><i class="fa-brands fa-twitter"></i></a>
                    </div>
                </div>

                <h4>Olivia Andrium</h4>
                <p>Product Manager</p>
              </div>
              <div class="card">
                <div class="image">
                  <img src="{{ asset('imgs/team-03.png') }}" alt="">
                  <div class="bef">
                    <a href=""><i class="fa-brands fa-tiktok"></i></a>
                    <a href=""><i class="fa-brands fa-youtube"></i></a>
                    <a href=""><i class="fa-brands fa-twitter"></i></a>
                    </div>
                </div>

                <h4>Olivia Andrium</h4>
                <p>Product Manager</p>
              </div>
            </div>
          </div>
        </div>
    <div class="Starter">
        <img src="{{ asset('imgs/shape-06.svg') }}" alt="">
        <img src="{{ asset('imgs/shape-03.svg') }}" alt="">
        <img src="{{ asset('imgs/shape-07.svg') }}" alt="">
        <img src="{{ asset('imgs/shape-12.svg') }}" alt="">
        <img src="{{ asset('imgs/shape-13.svg') }}" alt="">
        <div class="container">
            <div class="great">
                <h2>We Offer Great Affordable Premium Prices.</h2>
                <p>
                It is a long established fact that a reader will be distracted by
                the readable content of a page when looking at its layout. The point of using.
                </p>
            </div>
            <div class="bill">
                <span>Bill Monthly</span>
                <div class="checkbox-wrapper-3">
                    <input class="checkbox toggle toggle-lg" type="checkbox" id="cbx-3" onclick="check()">
                    <label for="cbx-3" class="toggle">
                        <span></span>
                    </label>
                </div>
                <span>Bill Annually</span>
            </div>
            <div class="tables">
                <div class="table">
                    <h4>Growth Plan</h4>
                    <div class="price One">
                        <div>
                            <h3>$149</h3>
                            /per year
                        </div>
                    </div>
                    <p>No credit card required</p>
                    <a class="main" href="">Try For Free</a>
                    <p>300 GB Storaget</p>
                    <p>Unlimited Photos & Videos</p>
                    <p>Exclusive Support</p>
                    <h6>4-day free trial</h6>
                </div>
                <div class="table">
                    <h4>Growth Plan</h4>
                    <div class="price Two">
                        <div>
                            <h3>$608</h3>
                            /per year
                        </div>
                    </div>
                    <p>No credit card required</p>
                    <a class="main trial" href="">Try For Free</a>
                    <p>300 GB Storaget</p>
                    <p>Unlimited Photos & Videos</p>
                    <p>Exclusive Support</p>
                    <h6>4-day free trial</h6>
                </div>
                <div class="table">
                    <h4>Growth Plan</h4>
                    <div class="price Three">
                        <div>
                            <h3>$1568</h3>
                            /per year
                        </div>
                    </div>
                    <p>No credit card required</p>
                    <a class="main" href="">Try For Free</a>
                    <p>300 GB Storaget</p>
                    <p>Unlimited Photos & Videos</p>
                    <p>Exclusive Support</p>
                    <h6>4-day free trial</h6>
                </div>
            </div>
        </div>
    </div>
    <div class="filter">
        <div class="container">
            <div class="prices">
                <h2>We Offer Great Affordable Premium Prices.</h2>
                <p>
                    It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using.
                </p>
            </div>
            <div class="wrapper">
                <nav>
                    <div class="items">
                        <span class="item how" data-name="all">All</span>
                        <span class="item" data-name="spiderMan">Spider Man</span>
                        <span class="item" data-name="anime">Anime</span>
                        <span class="item" data-name="darkSouls">Dark Souls</span>
                    </div>
                </nav>
                <!-- Filter imgages -->
                <div class="gallery" id="gallery">

                </div>
            </div>

        </div>
    </div>
    <div class="testimonials">
        <div class="container">
            <div class="page">
                <h2>Client’s Testimonials</h2>
                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using.</p>
            </div>
            <div class="swiper mySwiper">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                  <!-- Slides -->

                    <div class="testimonial swiper-slide">
                        <span class="span"></span>
                        <div class="justo">
                            <img class="img-testimonial" src="{{ asset('imgs/testimonial.png') }}" alt="">
                            <div class="lightning">
                                <img src="{{ asset('imgs/lightning.png') }}" alt="">
                                <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. In dolor diam, feugiat quis enim sed, ullamcorper semper ligula.
                                Mauris consequat justo volutpat.
                                </p>
                                <div class="smith">
                                    <div class="democompany">
                                        <span>Devid Smith</span>
                                        <span>Founter @democompany</span>
                                    </div>
                                    <img src="{{ asset('imgs/brand-light-02.svg') }}" alt="">
                                </div>
                            </div>
                        </div>

                  </div>
                    <div class="testimonial swiper-slide">
                        <span class="span"></span>
                        <div class="justo">
                            <img class="img-testimonial" src="{{ asset('imgs/testimonial.png') }}" alt="">
                            <div class="lightning">
                                <img src="{{ asset('imgs/lightning.png') }}" alt="">
                                <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. In dolor diam, feugiat quis enim sed, ullamcorper semper ligula.
                                Mauris consequat justo volutpat.
                                </p>
                                <div class="smith">
                                    <div class="democompany">
                                        <span>Devid Smith</span>
                                        <span>Founter @democompany</span>
                                    </div>
                                    <img src="{{ asset('imgs/brand-light-02.svg') }}" alt="">
                                </div>
                            </div>
                        </div>

                  </div>
                    <div class="testimonial swiper-slide">
                <span class="span"></span>
                <div class="justo">
                    <img class="img-testimonial" src="{{ asset('imgs/testimonial.png') }}" alt="">
                    <div class="lightning">
                        <img src="{{ asset('imgs/lightning.png') }}" alt="">
                        <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. In dolor diam, feugiat quis enim sed, ullamcorper semper ligula.
                        Mauris consequat justo volutpat.
                        </p>
                        <div class="smith">
                            <div class="democompany">
                                <span>Devid Smith</span>
                                <span>Founter @democompany</span>
                            </div>
                            <img src="{{ asset('imgs/brand-light-02.svg') }}" alt="">
                        </div>
                    </div>
                </div>

                  </div>

                </div>
                <!-- If we need navigation buttons -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>


                <!-- If we need pagination -->
                <div class="swiper-pagination"></div>

                <!-- If we need scrollbar -->
                <div class="swiper-scrollbar"></div>
              </div>

        </div>
    </div>
    <div class="global">
        <img src="{{ asset('imgs/shape-11.svg') }}" alt="">
        <img src="{{ asset('imgs/shape-07.svg') }}" alt="">
        <img src="{{ asset('imgs/shape-14.svg') }}" alt="">
        <img src="{{ asset('imgs/shape-15.svg') }}" alt="">
        <div class="container">
            <div class="happy">
                <h2>785</h2>
                <p>Global Brands</p>
            </div>
            <div class="happy">
                <h2>533</h2>
                <p>Happy Clients</p>
            </div>
            <div class="happy">
                <h2>865</h2>
                <p>Winning Award</p>
            </div>
            <div class="happy">
                <h2>346</h2>
                <p>Happy Clients</p>
            </div>
        </div>
    </div>
    <div class="trusted">
        <div class="container">
            <div class="looking">
                <h2>Trusted by Global Brands</h2>
                <p>
                It is a long established fact that a reader will be distracted by the readable content of
                a page when looking at its layout. The point of using.
                </p>
            </div>
            <div class="icons">
                <a href="#"><img src="{{ asset('imgs/brand-light-01.svg') }}" alt=""></a>
                <a href="#"><img src="{{ asset('imgs/brand-light-02.svg') }}" alt=""></a>
                <a href="#"><img src="{{ asset('imgs/brand-light-03.svg') }}" alt=""></a>
                <a href="#"><img src="{{ asset('imgs/brand-light-04.svg') }}" alt=""></a>
                <a href="#"><img src="{{ asset('imgs/brand-light-05.svg') }}" alt=""></a>
                <a href="#"><img src="{{ asset('imgs/brand-light-06.svg') }}" alt=""></a>
            </div>
        </div>
    </div>
    <div class="latest">
        <div class="container">
            <div class="content">
                <h2>Latest Blogs & News</h2>
                <p>
                It is a long established fact that a reader will be distracted by
                the readable content of a page when looking at its layout. The point of using.
                </p>
            </div>
            <div class="cards">
                <div class="free">
                    <div class="code">
                        <img src="{{ asset('imgs/blog-01.png') }}" alt="">
                        <div class="read">
                            <a href="#">Read More</a>
                        </div>
                    </div>
                    <div class="skill">
                        <div class="simple">
                            <div class="your">
                                <i class="fa-solid fa-user"></i>
                                <p>Musharof Chy</p>
                            </div>
                            <div class="your">
                                <i class="fa-solid fa-database"></i>
                                <p>{{ date('j M, Y') }}</p>
                            </div>
                        </div>
                        <h4>Tips to quickly improve your coding speed.</h4>
                    </div>
                </div>
                <div class="free">
                    <div class="code">
                        <img src="{{ asset('imgs/blog-01.png') }}" alt="">
                        <div class="read">
                            <a href="#">Read More</a>
                        </div>
                    </div>
                    <div class="skill">
                        <div class="simple">
                            <div class="your">
                                <i class="fa-solid fa-user"></i>
                                <p>Musharof Chy</p>
                            </div>
                            <div class="your">
                                <i class="fa-solid fa-database"></i>
                                <p>25 Dec, 2025</p>
                            </div>
                        </div>
                        <h4>Tips to quickly improve your coding speed.</h4>
                    </div>
                </div>
                <div class="free">
                    <div class="code">
                        <img src="{{ asset('imgs/blog-01.png') }}" alt="">
                        <div class="read">
                            <a href="#">Read More</a>
                        </div>
                    </div>
                    <div class="skill">
                        <div class="simple">
                            <div class="your">
                                <i class="fa-solid fa-user"></i>
                                <p>Musharof Chy</p>
                            </div>
                            <div class="your">
                                <i class="fa-solid fa-database"></i>
                                <p>25 Dec, 2025</p>
                            </div>
                        </div>
                        <h4>Tips to quickly improve your coding speed.</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="form">
        <div class="container">
            <div class="stay">
                <h2>Let’s Stay Connected</h2>
                <p>
                It is a long established fact that a reader will be distracted by the readable content
                of a page when looking at its layout. The point of using.
                </p>
            </div>
            <div class="blogs">
                <div class="number">
                    <img src="{{ asset('imgs/shape-03.svg') }}" alt="">
                    <div class="email">
                        <div class="media">
                            <h4>Email Address</h4>
                            <p>support@startup.com</p>
                        </div>
                        <div class="media">
                            <h4>Office Location</h4>
                            <p>76/A, Green valle, Califonia USA.</p>
                        </div>
                        <div class="media">
                            <h4>Phone Number</h4>
                            <p>+010 8754 3433 223</p>
                        </div>
                        <div class="media">
                            <h4>Skype Email</h4>
                            <p>example@yourmail.com</p>
                        </div>
                    </div>
                    <div class="social">
                        <h4>Social Media</h4>
                        <ul>
                            <li style="--clr: #ff0000;">
                                <a href="#">
                                    <i class="fa-brands fa-youtube"></i>
                                    <span>Youtube</span>
                                </a>
                            </li>
                            <li style="--clr: #1da1f2;">
                                <a href="#">
                                    <i class="fa-brands fa-twitter"></i>
                                    <span>Twitter</span>
                                </a>
                            </li>
                            <li style="--clr: #25d366;">
                                <a href="#">
                                    <i class="fa-brands fa-whatsapp"></i>
                                    <span>Whatsapp</span>
                                </a>
                            </li>
                        </ul>
                    </div>

                </div>
                <div class="input-all">
                    <ul>
                        <li style="--clr: #ff0000;">
                            <a href="#">
                                <i class="fa-brands fa-youtube"></i>
                                <span>Youtube</span>
                            </a>
                        </li>
                        <li style="--clr: #1da1f2;">
                            <a href="#">
                                <i class="fa-brands fa-twitter"></i>
                                <span>Twitter</span>
                            </a>
                        </li>
                        <li style="--clr: #25d366;">
                            <a href="#">
                                <i class="fa-brands fa-whatsapp"></i>
                                <span>Whatsapp</span>
                            </a>
                        </li>
                    </ul>
                    <div class="phone">
                        <div class="message">
                            <label for="fullname">Full Name</label>
                            <input type="text" name="fullname" id="fullname" placeholder="Devid Wonder" class="input-name">
                        </div>
                        <div class="message">
                            <label for="fullname">Email address</label>
                            <input type="email" name="email" id="email" placeholder="example@gmail.com" class="input-name">
                        </div>
                        <div class="message">
                            <label for="fullname">Phone number</label>
                            <input type="text" name="phone" id="phone" placeholder="+010 3342 3432" class="input-name">
                        </div>
                        <div class="message">
                            <label for="fullname">Subject</label>
                            <input type="text" for="subject" id="subject" placeholder="Type your subject" class="">
                        </div>
                    </div>
                    <div class="input-message">
                        <label for="fullname">Message</label>
                        <textarea placeholder="Message" rows="4" name="message" id="message" class=""></textarea>
                    </div>
                    <div class="button-message">
                        <button>Send Message</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="dolor">
        <img src="{{ asset('imgs/shape-16.svg') }}" alt="">
        <div class="container">
            <div class="growing">
            <h2>Join with 5000+ Startups Growing with Base.</h2>
            <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quis nibh lorem. Duis sed odio lorem. In a efficitur leo.
            Ut venenatis rhoncus.
            </p>
            </div>
            <div class="started" style="z-index: 2;">
                <a href="#">Get Started Now</a>
            </div>
        </div>
    </div>

</x-layouts.content>
