<div class="footer">
    <div class="container">
        <div class="lorem">
                <div class="newsletter">
                    <a href="#">
                        <div class="logo">
                            <img class="base-img" src="{{ asset('imgs/main-logo.png') }}" alt="">
                            <h1>{{ config('app.name') }}</h1>
                        </div>
                    </a>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <ul>
                        <li style="--clr: #ff0000;">
                            <a href="#">
                                <i class="fa-brands fa-youtube"></i>
                            </a>
                        </li>
                        <li style="--clr: #1da1f2;">
                            <a href="#">
                                <i class="fa-brands fa-twitter"></i>
                            </a>
                        </li>
                        <li style="--clr: #25d366;">
                            <a href="#">
                                <i class="fa-brands fa-whatsapp"></i>
                            </a>
                        </li>
                        <li style="--clr: #1876f2;">
                            <a href="#">
                                <i class="fa-brands fa-facebook-f"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="newsletter">
                    <h4>Quick Links</h4>
                    <p>Home</p>
                    <p>Product</p>
                    <p>Careers <span>Hiring</span></p>
                    <p>Pricing</p>
                </div>
                <div class="newsletter">
                    <h4>Services</h4>
                    <p>Web Development</p>
                    <p>Graphics Design</p>
                    <p>Digital Marketing</p>
                    <p>Ui/Ux Design</p>
                </div>
                <div class="newsletter">
                    <h4>Support</h4>
                    <p>Company</p>
                    <p>Press media</p>
                    <p>Our Blog</p>
                    <p>Contact Us</p>
                </div>
                <div class="newsletter">
                    <h4>Newsletter</h4>
                    <p>Subscribe to receive future updates</p>
                    <div class="address">
                        <div class="Message">
                          <input type="text" placeholder="Email address">
                          <i class="fa-regular fa-envelope"></i>
                        </div>
                    </div>
                </div>
        </div>
        <div class="reserved">
            <ul>
                <li><a href="#">English</a></li>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Support</a></li>
            </ul>
            <div class="Support">
                <p>© {{ date('Y') }} {{ config('app.name') }}. All rights reserved</p>
            </div>
        </div>
    </div>
</div>
<button class="up bg-amber-600 hover:bg-amber-500 dark:bg-amber-700 dark:hover:bg-amber-600"><i class="fa-solid fa-angle-up"></i></button>

<style>
[data-id="loading-spinner"] {
    position: fixed;
    display: flex;
    background: #353942;
    width: 100%;
    height: 100vh;
    inset: 0;
    z-index: 9000;
    align-items: center;
    justify-content: center;
}
.hide-spinner {
    display: none !important;
}
</style>
<div
    data-id="loading-spinner"
    -style="opacity: 1"
    class=""
>
    <span class="loading loading-spinner text-info loading-lg"></span>
</div>
