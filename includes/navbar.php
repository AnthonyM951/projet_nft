<header class="navbar">
    <div class="navbar__container">
        <div class="navbar__logo">
            <a href="index.php"><img src="../assets/images/logo.PNG" alt="logo_site"></a>
        </div>
        <?php $curPageName = substr($_SERVER["SCRIPT_NAME"], strrpos($_SERVER["SCRIPT_NAME"], "/") + 1);
        // echo $curPageName;

        if ($curPageName == "index.php") { ?>

            <div class="navbar__content">
                <nav>
                    <ul>
                        <li><a href="#first_part">GET STARTED</a></li>
                        <li><a href="#second_part">REALISATION</a></li>
                        <li><a href="#third_part">WHY GYNFT?</a></li>
                        <li>FAQ</li>
                        <li>CONTACT</li>

                    </ul>
                </nav>
            </div>
        <?php } ?>
        <?php if (isset($_SESSION['ID_User'])) { ?>
            <div class="navbar_connect">

                <!-- <button class="connect">LOGIN</button> -->
                <!-- <a href="login.php"> <input id="connect" value="LOGIN"></a> -->
                <button class="btn"><a href="contact.php?id=4">CONTACT US</a> </button>
                <button class="btn"><a href="logout.php">LOGOUT</a> </button>
                <!-- <button class="btn"><a href="signup.php">REGISTER</a> </button> -->
                <!-- <a href="signUp.php"> <input id="connect" value="REGISTER"></a> -->
                <!-- <button class="connect">REGISTER</button> -->
            </div>
        <?php  } else { ?>

            <div class="navbar_connect">

                <!-- <button class="connect">LOGIN</button> -->
                <!-- <a href="login.php"> <input id="connect" value="LOGIN"></a> -->
                <button class="btn"><a href="login.php">LOGIN</a> </button>
                <button class="btn"><a href="signup.php">REGISTER</a> </button>
                <!-- <a href="signUp.php"> <input id="connect" value="REGISTER"></a> -->
                <!-- <button class="connect">REGISTER</button> -->
            </div>
        <?php } ?>

        <!-- <div class="navbar__icons">
                <div class="navbar__favorite">
                    <svg width="24px" height="24px" fill="#111" viewBox="0 0 24 24">
                        <path
                            d="M21.11 4a6.6 6.6 0 0 0-4.79-1.92A6.27 6.27 0 0 0 12 3.84 6.57 6.57 0 0 0 2.89 4c-2.8 2.68-2.45 7.3.88 10.76l6.84 6.63A2 2 0 0 0 12 22a2 2 0 0 0 1.37-.54l.2-.19.61-.57c.6-.57 1.42-1.37 2.49-2.41l2.44-2.39 1.09-1.07c3.38-3.55 3.8-8.1.91-10.83zm-2.35 9.4l-.25.24-.8.79-2.44 2.39c-1 1-1.84 1.79-2.44 2.36L12 20l-6.83-6.68c-2.56-2.66-2.86-6-.88-7.92a4.52 4.52 0 0 1 6.4 0l.09.08a2.12 2.12 0 0 1 .32.3l.9.94.9-.94.28-.27.11-.09a4.52 4.52 0 0 1 6.43 0c1.97 1.9 1.67 5.25-.96 7.98z">
                        </path>
                    </svg>
                </div>
                <div class="navbar__cart">
                    <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                        viewBox="0 0 512.000000 512.000000" preserveAspectRatio="xMidYMid meet">

                        <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" fill="#000000"
                            stroke="none">
                            <path d="M157 4915 l-46 -93 492 -237 c271 -130 493 -238 495 -239 1 -2 112
-529 247 -1172 134 -643 247 -1179 250 -1191 l5 -23 1444 0 1443 0 51 -40 c88
-71 153 -186 151 -270 -1 -78 -62 -167 -147 -217 l-47 -28 -1482 -3 -1483 -2
0 -105 0 -105 1468 0 c1610 0 1517 -3 1648 60 150 73 264 245 264 399 0 126
-74 273 -199 396 -33 33 -61 67 -61 74 0 13 342 1689 357 1749 l5 22 -1801 0
c-991 0 -1801 3 -1801 8 0 22 -122 578 -128 583 -7 7 -937 463 -1028 504 l-50
23 -47 -93z m4598 -1257 c-9 -41 -305 -1476 -305 -1482 0 -3 -602 -5 -1337 -4
l-1337 3 -158 740 c-87 407 -158 746 -158 753 0 9 337 12 1650 12 l1650 0 -5
-22z" />
                            <path d="M2040 889 c-114 -22 -222 -108 -274 -219 -28 -59 -31 -74 -31 -165 0
-91 3 -106 31 -165 166 -350 678 -276 745 108 36 201 -110 402 -321 442 -60
11 -87 11 -150 -1z m188 -231 c117 -78 104 -257 -23 -318 -126 -61 -266 26
-266 164 0 79 32 131 106 171 45 24 133 16 183 -17z" />
                            <path d="M4172 889 c-160 -31 -289 -166 -312 -327 -17 -123 23 -246 108 -331
192 -192 513 -142 639 99 26 51 28 64 28 165 0 102 -2 115 -31 175 -54 114
-160 197 -283 220 -61 11 -88 11 -149 -1z m187 -232 c55 -36 85 -103 76 -165
-15 -101 -76 -162 -170 -170 -141 -12 -243 124 -187 250 37 85 95 121 185 114
40 -3 70 -12 96 -29z" />
                        </g>
                    </svg>
                </div>
            </div> -->
    </div>
</header>