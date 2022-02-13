<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>evaluation_ydays</title>
    <link rel="stylesheet" href="../assets/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;500&family=Roboto:wght@100&display=swap" rel="stylesheet">

    <!-- <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;500&family=Roboto:wght@100;500&display=swap"
        rel="stylesheet"> -->
</head>

<body>
    <?php include('../includes/navbar.php');
    if (isset($_SESSION['ID_User'])) {
        echo 'ok';
    }
    ?>
    <main>
        <div class="hero">
            <div class="hero__image">
                <img src="../assets/images/hero.png" alt="" class="hero__img">
            </div>
            <div class="hero__text">
                <p>GET YOUR OWN NFTs AND BECOME A CRYPTO MILLIONNAIRE</p>
                <div class="hero__subtext">
                    <p>With n°1 customised NFT designer in the world</p>
                </div>
                <div class="hero_btn">
                    <button class="btn"><a href="#">BUILD YOUR COLLECTION</a> </button>
                    <div class="dropMenu">
                        <button class="btn">
                            >>
                        </button>
                    </div>
                </div>

            </div>

        </div>
        <div class="started_container">
            <!-- <h1 class="started_title"> LET'S GET STARTED</h1> -->
            <h1 class="started_title">WHAT'S A NFT?</h1>
            <p class="started_text">
                Non-fungible tokens or NFTs are cryptographic assets on a blockchain with unique identification codes
                and metadata that distinguish them from each other. Unlike cryptocurrencies, they cannot be traded or
                exchanged at equivalency. This differs from fungible tokens like cryptocurrencies, which are identical
                to each other and, therefore, can be used as a medium for commercial transactions.
            </p>
            <h1 class="started_title">WHY WOULD YOU GET A NFT COLLECTION?</h1>
            <div class="started_collection">
                <div class="started_collection_img">
                    <img src="../assets/images/bored-ape.jpg" alt="ape_nft">
                </div>
                <div class="started_collection_text">
                    <p class="started_text">NFT market is developing very fast, now and there are tones of new arts
                        created
                        every day. To get noticed and earn on NFT you must have unique and custom art done by
                        professionalist. You surely have heard about those NFTs that made people rich. You can be one of
                        them,
                        it's not too late.</p>
                </div>
            </div>
        </div>
        <div class="realisation_container">
            <div class="realisation_title">
                <h1>COLLECTION</h1>
            </div>
            <div class="realisation_display">
                <div class="realisation_img">




                    <div class="contener_slide">
                        <ul class="img_content">
                            <li><img class="real_img fade" src="../assets/images/bored-ape.jpg" alt=""></li>
                            <li> <img class="real_img fade" src="../assets/images/bored-ape_copy.jpg" alt=""></li>
                            <li><img class="real_img fade" src="../assets/images/hero.PNG" alt=""></li>
                        </ul>

                        <!-- <img class="real_img" src="../assets/images/bored-ape_copy.jpg" alt="">
                        <img class="real_img" src="../assets/images/bored-ape copy_2.jpg" alt=""> -->

                    </div>
                    <a class="prev" onclick="plusSlides(-1)"> <i id="icon_left" class="fas fa-chevron-circle-left"></i></a>
                    <a class="next" onclick="plusSlides(1)"><i id="icon_right" class="fas fa-chevron-circle-right"></i></a>
                </div>
            </div>
        </div>
        <div class="why_container">
            <div class="why_title">
                <h1>WHY GYNFT?</h1>
                <h2>GYNFT propose 3 offers starting at 1950$</h2>
                <div class="why_text">
                    <div class="grid_prop">
                        <div class="prop_card">
                            <div class="prop_basic">
                                <h3>BASIC</h3>
                            </div>

                            <ul class="fa-ul">
                                <li><span class="fa-li"><i class="fas fa-check"></i></span>1 Base character</li>
                                <li><span class="fa-li"><i class="fas fa-check"></i></span>Generate 1000 NFT
                                    collection
                                </li>
                                <li><span class="fa-li"><i class="fas fa-check"></i></span>Unlimited revisions until you
                                    get satisfied.</li>
                                <!-- <li>Metadata, json files, rarities in %% provided by you.</li> -->
                            </ul>
                            <div class="price_container">
                                <div class="price">
                                    <p>___________________</p>

                                    <h1 class="prop_price">$1950</h1>
                                </div>
                            </div>
                        </div>
                        <div class="prop_card">
                            <div class="prop_standard">
                                <h3>STANDARD</h3>
                            </div>

                            <ul class="fa-ul">
                                <li><span class="fa-li"><i class="fas fa-check"></i></span>Really Good Quality character
                                </li>
                                <li><span class="fa-li"><i class="fas fa-check"></i></span>30 Accessories</li>
                                <li><span class="fa-li"><i class="fas fa-check"></i></span>15 color backgrounds</li>
                                <li><span class="fa-li"><i class="fas fa-check"></i></span>Generate 1000 NFT collection
                                </li>
                                <li><span class="fa-li"><i class="fas fa-check"></i></span>Metadata file</li>
                                <li><span class="fa-li"><i class="fas fa-check"></i></span>Free Unlimited revisions
                                </li>
                                <li><span class="fa-li"><i class="fas fa-check"></i></span>Free all source files</li>
                            </ul>
                            <div class="price_container">
                                <div class="price">
                                    <p>___________________</p>
                                    <h1 class="prop_price">$3200</h1>
                                </div>
                            </div>
                        </div>
                        <div class="prop_card">
                            <div class="prop_premium">
                                <h3>PREMIUM</h3>
                            </div>

                            <ul class="fa-ul">
                                <li><span class="fa-li"><i class="fas fa-check"></i></span>Very high quality Base
                                    character</li>
                                <li><span class="fa-li"><i class="fas fa-check"></i></span>50 Accessories</li>
                                <li><span class="fa-li"><i class="fas fa-check"></i></span>Generate 10,000 NFT
                                    collection</li>
                                <li><span class="fa-li"><i class="fas fa-check"></i></span>20 background colors</li>
                                <li><span class="fa-li"><i class="fas fa-check"></i></span>Metadata file</li>
                                <li><span class="fa-li"><i class="fas fa-check"></i></span>Free all source files</li>
                            </ul>
                            <div class="price_container">
                                <div class="price">
                                    <p>___________________</p>
                                    <h1 class="prop_price">$7500</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <ul>
                        <li>Unlimited revisions until you get satisfied.</li>
                        <li>Professional designers with more than 10 years of experience
                            in
                            the business.</li>
                        <li>Custom hand drawn base design and attributes; generation of 100 NFTs (out of 20 traits)
                            1000
                            NFTS (out of 32 different traits) or 10 000+ NFTS (out of 100 different traits) for your
                            OpenSea, Solana or any other platforms.</li>
                        <li>Experience, as
                            we
                            worked with many NFT creators. We can assure you
                            satisfaction and all you can expect is high quality custom art done with care.</li>
                        <li>Metadata, json files, rarities in %% provided by you.</li>
                        <li>Output I provide is ready to upload on all the NFT marketplaces.</li>
                    </ul>
                    <p class="started_text"> We design Custom hand drawn base design and attributes. We know it’s
                        very
                        important that your clients need to love those to make them sell well. This offer can be
                        tailored
                        for your needs in terms of deadline, price and art style. That’s why I encourage you to
                        speak
                        freely
                        about your expectations. I hope we could do amazing Art collection together!</p> -->
                </div>
            </div>
        </div>
        <div class="contact">
            <h1>CONTACT</h1>
            <div class="contact_container">
                <div class="contact_text">
                    <p>If you got any questions or requests before ordering:</p>
                </div>
                <div class="contact_name">
                    <span>NAME:</span>
                    <input type="text">
                </div>
                <div class="contact_email">
                    <span>EMAIL ADDRESS:</span>

                    <input type="email">
                </div>
                <div class="contact_msg">
                    <span>MESSAGE:</span>

                    <textarea type="text" placeholder="Please describe your problem/ question as accurately as possible. Keep in mind that our general support is not responsible for order problems."></textarea>
                </div>
                <button class="contact_submit" type="submit">SUBMIT</button>
            </div>


        </div>
        </div>
    </main>

    <footer>
        <div>
            <p>
                LEGAL MENTIONS
            </p>
        </div>
        <div>
            <p>&copy; GYNFT</p>
        </div>
        <div>
            <p>
                CONTACT
            </p>
        </div>

    </footer>
</body>

</html>
<script>
    var slideIndex = 1;
    showSlides(slideIndex);

    // Next/previous controls
    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    // Thumbnail image controls
    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("real_img");
        var dots = document.getElementsByClassName("dot");
        if (n > slides.length) {
            slideIndex = 1
        }
        if (n < 1) {
            slideIndex = slides.length
        }
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
    }
</script>