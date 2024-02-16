<x-layouts.content>
    <section>
        <img src="imgs/shape-06.svg" alt="">
        <img src="imgs/shape-03.svg" alt="">
        <img src="imgs/shape-16.svg" alt="">
        <div class="sing-div">
            <span class="dark"></span>
            <span class="souls"></span>
            <div class="account">
                <h2>Create an Account</h2>
                <p>Lorem ipsum dolor sit amet, consectetur</p>
                <h3>Sign up with Social Media</h3>
                <ul>
                    <li><i class="fa-brands fa-facebook-f" style="--clr: #1876f2;"></i></li>
                    <li><i class="fa-brands fa-youtube" style="--clr: #ff0000;"></i></li>
                    <li><i class="fa-brands fa-twitter" style="--clr: #1da0f2;"></i></li>
                    <li><i class="fa-brands fa-whatsapp" style="--clr: #25d366;"></i></li>
                </ul>
                <span class="with">Or, sign in with your email</span>
            </div>
            <form action="https://formbold.com/s/unique_form_id">
                <div class="field fullname-field">
                    <div class="input-field">
                        <label for="fullname">Full name</label>
                        <input type="text" name="fullname" id="fullname" placeholder="Devid Wonder" class="text">
                    </div>
                    <span class="error email-error">
                        <i class="fas fa-exclamation-circle"></i>
                        <p class="error-text">Please enter a valid name</p>
                    </span>
                </div>
                <div class="field email-field">
                    <div class="input-field">
                        <label for="username">Email</label>
                        <input type="text" name="username" id="username" placeholder="example@gmail.com" class="email">
                    </div>
                    <span class="error email-error">
                        <i class="fas fa-exclamation-circle"></i>
                        <p class="error-text">Please enter a valid email</p>
                    </span>
                </div>
                <div class="field create-password">
                    <div class="input-field">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" placeholder="Create Password" class="password">
                        <i class="fa-solid fa-eye-slash show-hide"></i>
                    </div>
                    <span class="error password-error">
                        <i class="fas fa-exclamation-circle"></i>
                        <p class="error-text">Please enter atleast 8 charatcer with, symbol, small and capital letter.</p>
                    </span>
                </div>
                <div class="input-field button">
                    <input type="submit" value="Sign In">
                </div>
                <p class="account">Don't have an account?<a href="sign-in.html"> Sign In </a></p>
            </form>
        </div>
    </section>
 </x-layouts.content>
