<x-layouts.content>

    <div class="landing">
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
    </div>
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
                <h4>Why Choose Us</h4>
                <h2>We Make Our customers happy by giving Best services.</h2>
                <p>
                It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
                The point of using Lorem Ipsum.
                </p>
                <div class="work">
                    <button class="btn" onclick="openVideo()">
                        Watch
                    </button>
                    <div class="video">
                        <iframe class="iframe" width="1280" height="720" src="https://www.youtube.com/embed/_zDZYrIUgKE" title="Dark Souls III - Opening Cinematic Trailer | PS4, XB1, PC" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                        <button onclick="closeVideo()" class="closeVideo">
                            <i class="fa-solid fa-close" style="cursor: pointer;"></i>
                        </button>
                    </div>
                    <span class="span">SEE HOW WE WORK</span>
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
    <div class="service">
        <div class="container">
            <div class="phasellus">
                <h2>We Offer The Best Quality Service for You</h2>
                <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. In convallis tortor eros.
                Donec vitae tortor lacus. Phasellus aliquam ante in maximus.
                </p>
            </div>
            <div class="sections">
                <div class="startups">
                    <img src="{{ asset('imgs/icon-04.svg') }}" alt="">
                    <h4>Crafted for Startups</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In convallis tortor.</p>
                </div>
                <div class="startups">
                    <img src="{{ asset('imgs/icon-05.svg') }}" alt="">
                    <h4>High-quality Design</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In convallis tortor.</p>
                </div>
                <div class="startups">
                    <img src="{{ asset('imgs/icon-06.svg') }}" alt="">
                    <h4>All Essential Sections</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In convallis tortor.</p>
                </div>
                <div class="startups">
                    <img src="{{ asset('imgs/icon-07.svg') }}" alt="">
                    <h4>Speed Optimized</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In convallis tortor.</p>
                </div>
                <div class="startups">
                    <img src="{{ asset('imgs/icon-05.svg') }}" alt="">
                    <h4>Fully Customizable</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In convallis tortor.</p>
                </div>
                <div class="startups">
                    <img src="{{ asset('imgs/icon-06.svg') }}" alt="">
                    <h4>Regular Updates</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In convallis tortor.</p>
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
                    <input class="checkbox" type="checkbox" id="cbx-3" onclick="check()">
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
                <a href="#"><img src="{{ asset('imgs/brand-light-01.svg" al') }}"=""></a>
                <a href="#"><img src="{{ asset('imgs/brand-light-02.svg" al') }}"=""></a>
                <a href="#"><img src="{{ asset('imgs/brand-light-03.svg" al') }}"=""></a>
                <a href="#"><img src="{{ asset('imgs/brand-light-04.svg" al') }}"=""></a>
                <a href="#"><img src="{{ asset('imgs/brand-light-05.svg" al') }}"=""></a>
                <a href="#"><img src="{{ asset('imgs/brand-light-06.svg" al') }}"=""></a>
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
                        <img src="{{ asset('imgs/categories-02000.png') }}" alt="">
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
                        <img src="{{ asset('imgs/top-game-01.jpg') }}" alt="">
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
                        <img src="{{ asset('imgs/top-game-03.jpg') }}" alt="">
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
