<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" type="image/png" href="images/favicon.png">
    <link href="styles/main.css" rel="stylesheet" type="text/css">
    <meta http-equiv="Content-Type" content="text/html">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Register</title>
    <meta name="description" content="Welcome to my future Shop!">
    <meta name="theme-color" content="#ffcee3">
    <link rel="shortcut icon" src="images/search.jpg" type="image/jpg">
</head>
<!-- -------------------------------------- {TOP} -------------------------------------- -->
<body>
<div class="top-container">
    <div style="position: relative;">
        <h3><dfn>Outer beauty pleases the eye. Inner beauty captivates the heart.</dfn></h3>
    </div>
</div>
<!-- -------------------------------------- {NAVI} -------------------------------------- -->
<div class="header" id="stickMan">
    <div class="topnav">
        <img src="images/gif.gif" class="logo-gif">
        <a href="index.html">Home</a>
        <a href="cart.html">Cart</a>
    </div>
</div>

<!-- -------------------------------------- {REGIS} -------------------------------------- -->
<main class="main-content" role="main">
    <div class="wrapper">
        <div class="homepage-collection">
            <div class="grid__item large--one-third push--large--one-third text-center">
                <div class="text-center h1"><b>{{ __('Create Account') }}</b></div>
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="regform-element warn h2 text-center red__text" id="showWarn" style="opacity: 0; transition: 1s;"><warning id="warn">
                        </warning></div>
                    <div class="regform-element">
                        <input type="text" maxlength="20" id="name" placeholder="Name" required oninvalid="this.setCustomValidity('Enter User Name Here')"
                               oninput="this.setCustomValidity('');"  >
                    </div>

                    <div class="regform-element">
                        <input id="email" maxlength="35" name="email" placeholder="Email" required type="email" oninvalid="this.setCustomValidity('Please Enter valid email')">

                    </div>

                    <div class="regform-element-pass">
                        <input type="password" maxlength="30" id="password" placeholder="Password" oninput="checkPass()" required>
                        </input>
                        <button type="button" class="pass-btn" onmousedown="showPassword(1)" onmouseup="showPassword(0)"><img src="images/eyesee.png" id="changeable" style="width: 50%; height: 50%; margin-top: 5px"></button>
                    </div>
                    <div class="regform-element-pass">
                        <input type="password" maxlength="30" id="password-repeat" placeholder="Password Again">
                        input</>
                        <button type="button" type="submit" value="submit" class="pass-btn" id="showPass" onmousedown="showPasswordRepeat(1)" onmouseup="showPasswordRepeat(0)">
                            <img src="images/eyesee.png" id="changeable-repeat" style="width: 50%; height: 50%; margin-top: 5px"></button>
                    </div>
                    <div>
                        <button id="finish" class="btn btn--full" onclick = "confirm()">Register</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
    </div>
</main>
<div style="padding-top: 63px">
    <footer class="site-footer-wrapper">
        <div class="wrapper site-footer">
            <div class="grid-uniform">
                <div class="grid__item large--one-third footer__block">
                    <p class="uppercase footer__title">Main Menu</p>
                    <hr> <!-- it is underline -->
                    <ul class="footer-links">
                        <li><a>Home</a></li>
                        <li><a>Shop All</a></li>
                    </ul>
                </div>

                <div class="grid__item large--one-third footer__block">
                    <p class="uppercase footer__title">More Info</p>
                    <hr> <!-- it is underline -->
                    <ul class="footer-links">
                        <li><a href="https://t.me/yuujiso">Contact</a></li>
                    </ul>
                </div>

                <div class="grid__item large--one-third footer__block">
                    <p class="uppercase footer__title">Newsletter</p>
                    <hr> <!-- it is underline -->
                    <div>
                        <p>Join to get special offers, new info, and once-in-a-lifetime deals.</p>
                    </div>

                    <form>
                        <div class="input-group newsletter-form">
                            <input type="email" placeholder="your-email@example.com" class="input-group-field" aria-label="your-email@example.com">
                            <span class="input-group-btn">
                                    <input type="submit" value="joy" class="btn uppercase">
                                </span>
                        </div>

                    </form>
                </div>
            </div>

            <div class="footer-secondary-wrapper">
                <ul class="footer-secondary inline-list">
                    <li>MY FUTURE SHOP</li>
                    <li>Powered By <a href="https://t.me/yuujiso">TALGAT</a></li>
                </ul>

            </div>
        </div>
    </footer>
</div>

<!-- ------------------------------------- {END} ------------------------------------- -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="rep/main.js"></script>


</body>

</html>
