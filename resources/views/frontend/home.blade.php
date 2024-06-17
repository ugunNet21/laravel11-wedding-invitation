<!DOCTYPE html>

<html class="no-js"> <!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>The Wedding of Halim Permana</title>
    {{-- hapus ini jika sudah production --}}
    {{-- <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests"> --}}
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="The Wedding of Halim Permana" />
    <meta name="keywords" content="wedding, wedding invitation, invitation, the wedding" />
    <meta name="author" content="Halim Permana" />

    <!-- Facebook and Twitter integration -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="The Wedding of Halim Permana" />
    <meta property="og:image" content="{{ asset('frontend/images/readme/half circle-200.png') }}" />
    {{-- <meta property="og:url" content="https://ngodingsolusi.github.io/the-wedding-of-rehan-maulidan/" /> --}}
    <meta property="og:site_name" content="The Wedding of Halim Permana" />
    <meta property="og:description" content="The Wedding of Halim Permana. Open source wedding invitation" />

    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@gugunii" />
    <meta name="twitter:creator" content="@gugunii" />
    <meta name="twitter:title" content="The Wedding of Halim Permana" />
    <meta name="twitter:description" content="Open Source Wedding Invitation. The Wedding of Halim Permana" />
    <meta name="twitter:image" content="{{ asset('frontend/images/readme/half circle-200.png') }}" />
    {{-- <meta name="twitter:url" content="https://ngodingsolusi.github.io/the-wedding-of-rehan-maulidan/" /> --}}

    <link rel="icon" href="{{ asset('frontend/images/readme/half circle-200.png') }}">


    <link href='https://fonts.googleapis.com/css?family=Didact+Gothic' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Sacramento" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Estonia" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Yanone+Kaffeesatz" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Satisfy" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Courgette" rel="stylesheet">

    <!-- Animate.css -->
    <link rel="stylesheet" href="{{ asset('frontend/css/animate.css') }}">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="{{ asset('frontend/css/icomoon.css') }}">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.css') }}">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{ asset('frontend/css/magnific-popup.css') }}">
    <!-- Owl Carousel  -->
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.theme.default.min.css') }}">

    <link type="text/css" rel="stylesheet"
        href="{{ asset('frontend/lib/lightgallery.js/dist/css/lightgallery-bundle.min.css') }}" />
    <link type="text/css" rel="stylesheet"
        href="{{ asset('frontend/lib/lightgallery.js/dist/css/lg-thumbnail.css') }}" />
    <link type="text/css" rel="stylesheet"
        href="{{ asset('frontend/lib/lightgallery.js/dist/css/lg-autoplay.css') }}" />
    <link type="text/css" rel="stylesheet"
        href="{{ asset('frontend/lib/lightgallery.js/dist/css/lg-fullscreen.css') }}" />
    <link type="text/css" rel="stylesheet"
        href="{{ asset('frontend/lib/lightgallery.js/dist/css/lg-transitions.css') }}" />

    <!-- Theme style  -->
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">

    <!-- Modernizr JS -->
    <script src="{{ asset('frontend/js/modernizr-2.6.2.min.js') }}"></script>

</head>

<body>

    <div class="fh5co-loader"></div>

    <!--<div class="container">-->
    <div id="page">
        <!--Floating button-->
        <div id="floating-button" class="float">
            <div class="control-center open">
                <div class="audio-play">
                    <div data-video="QZng89VxKWg" data-autoplay="0" data-loop="1" id="youtube-audio1"></div>
                </div>
                <ul class="right-sidebar">
                    <!--gallery-->
                    <li onclick="scrollToElement('fh5co-gallery')"
                        style="background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAABmJLR0QA/wD/AP+gvaeTAAADe0lEQVRoge2YTWgVVxiG35Mr1n+qopYkik1dFKRiJGgWLmqrLsSFPy3Y1G6soFkJdulWcFHBgAFRQcGFLgRr1W6kLvz/SdpNQQqtfyXG+oMuaheamMfFzMXPw0zuzOTcG5H7bu7MOe/3fe878805M1eqo4463m8ADUAHcBroBwYJg8E43ylgA9BQDfEtwO+BBFfCb8DHeTW64cRLuiZpxkguQk48ktTunLuTNSDRQHw7eyW1BhKWB72SljjnhrKQ0/pug0ZHvCS1Sfo6KznNQEcYLYWRuX6agUWBhBRFW/kAmDscMc3AzKBy8mOWOb4YLyiJSDNQCqtH9yQtlzRJ0gpJ/1Tg2/rNko7k2ieqsMZ/6eVfUSkgQcv6JK3hd79kXPfOrxXI8V3SYK0MtFc4z4KFmZlVaKG7cdtMAlYC9wq00ECS1rSdmKTxWsI553wt5TGLIi10QNISRUttu6SDBTVWDyl39RXQmcLvBIZG0GJZWih7VyTkGwQ2VYj5Fhh4Fw0MAB3e/EagD9iYwcQzYAswG5gOrANu1crAC7wNBNhM1E7Ev997818BL+P52yR8pACTgfPVNvACWOONbzXiyxgCtnm8VcDNJPGGMwE4Wy0D/wMrvbEfSH9Qh4DtHr/BHI8HThB9Njaa8XHAL9Uw8Ll3viPtSnnYkZBrInDOcP4C5pj5sbG5cAY8ATszigfoAcab2CnAxQTeXeATwxsDHAtuIKf4G8A0E/shcHUY/gNgvuGXgENBDAAO6Moh/gIw2cRPjQ1VwkNggVd3bwgDB3KIPwtMMLGzgD9yxD8GWk28A/aM1MCDjMVPA+NMXBPwZw7xZTwFFifoKBnOYB4DZzIUPQV8YGLmEK0wRfEcWObpaDLzfXkMfFOh2FFgjOHPI8M7fkYTX5i89tPT/6ob1kAJ6E0pchgoGe6nwP0A4sv41eTuNuM/ZjYQBzcDd7zk+3h7h/0M+Deg+H6gOc79EfCfmVuay0CcpIU3L11dgDNzi4AnAcVfAZri3A44buZ6bO28JpzvHmgnek0eCQaAv4GfgNXEdzaut8vjLktW946BqG2Oe+J3j7auVBAtFo1Eq0030SpkcRKzYIQoOJvoRawW2I9ZqkOaaAEuVVF4Dzl6vtCTTfTArVX0d1+rpEZJRa7WK0kPJd2XdF7Sz5IuO+dG/X+pOuqoo0Z4DePtUHAz1eX1AAAAAElFTkSuQmCC)">
                    </li>
                    <!--chat-->
                    <li onclick="scrollToElement('fh5co-testimonial')"
                        style="background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAABmJLR0QA/wD/AP+gvaeTAAABKklEQVRIidWVq04DQRhGv900QUFFCVWgUYQ6PAgeAUVwSDwplocoCamsqKlE4ICQECDlAfAYoAoDHEQ7SdnO7lw6CE6yYi45384/kxnpv5NVDQJ1SXuSdiVtSGpOhl4kDSVdSOplWTYKSgVqwAnwjps3oA3UfOVN4NpDXOQKWHHJ68BDhNxwDyxVBZzPITeclclbwHeCgC9g03jzqYwDOU6VJ7mkfVvAdgK5YccWsGqZ2JC0HNA2rNkCsEwslszVNizM9ABPCTbYMLSt4LLkb2K4sQV0ZS9TDD1rL9BJUJ670ljGV8XjHPJPYKtybUADuI0MOPUqIOPr+hgYBcgHQO62/w5aBA6BPvAMvE6+In1g9uzHUpB38X1sAgM+gKOk4qmANrD+J/JQfgANB//YYXlyuAAAAABJRU5ErkJggg==)">
                    </li>
                </ul>
                <!--calendar-->
                <div onclick="scrollToElement('fh5co-event')" class="option-btn open"></div>
                <ul class="left-sidebar">
                    <!--countdown-->
                    <li onclick="scrollToElement('fh5co-header')"
                        style="background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAABmJLR0QA/wD/AP+gvaeTAAABG0lEQVRIidXVTS4EQRjG8SZ2IrEnETEcQmYsjLkCiUu4g1P42FpxhmGG2IvEcAcfG9Z+FtOS1qaramZ6wZPUpqve5//2k36rs+wvCLd+6yaldjaR8TmKm95iDcIhzrA4bmEHp3jCR74ecYKdwrm7PLoBllOMN9AfkX1ZPaxjBff5s4OY+RbeEsy/9YoWFrCP+VjnVeabaAYgjZRoLqvaLJypUi9m3gnlkACAdtGzPAd70VeMazcEaNYA2AoBlmoA/JiBudJmcPzRzLJsJgKo9jCc1mk1KHqWI7qOdJeifghwXgPgIriL7hTxXEXxWMXzBOZpV0UOaeUFqXox/MLShYbAvVRQF2tjmZdAbRwb/kje8/WAI2xPbPxv9AUiVMwGoTr9YAAAAABJRU5ErkJggg==)">
                    </li>
                    <!--couple-->
                    <li onclick="scrollToElement('fh5co-couple')"
                        style="background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAABmJLR0QA/wD/AP+gvaeTAAAB7UlEQVRIie2VPUiVURjH/+eqSSJN4tDWRRAH5xD8QDCwgqAWhwwSaarBwUGaHFwcBAchGqNNdDaKoKAkBEvUURAVRInw82Jx0Z/De64+Xu5773nv0CD3P533eZ//+T3nW6qoomstwAEPgXfAKnAA7AE/gWGgJsbXAIwCi8ARkAF+AS+AqlLQJmCB4voMDAL1xvfUFxin98WgLX5kIdoHbnvfK+AswJMBvgGPLbQGWAmEAgx7XzuQTeDLaSgHfpLA9Bu45X0/yoAC/AXSKUn9AfvuTNIXSb3OuUOgQ9LdAJ8kfZDUJenYf9dKGqiW1JyXuCbpq6RlSRuStiStO+f2TM6DQOiSpOfOuV1gStKIj3eKyx2ZJdqxrlRvwHzMNP4DlomOYx/m+AEdJm9H5mM8cBQCNvKA00AbcKOIp9GuswW3JgBnjO9toKfWVmrBdQnAVkkKvlBKUsbHY6ephNbKMaUkffftj0C6jD5uhiRhrtlcoAXY9jPwJrATq+5AT+eVNfbBZqLjdAq0JwTPBOQ7YM54Nu3PMR/8A9wrYH4UAwZ4VgSaBmYtFOi1CSlgxiTMA5PAhG9jcrfywFngJQGXT1x1VcBrosc8X/sm734BOERPX9AdXrBCoh3YI+mOogdiXdIn59xJWSOqqKL/qXMXI9MKbss7gAAAAABJRU5ErkJggg==)">
                    </li>
                </ul>
            </div>
        </div>

        <div id="overlay">
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div
                            class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box fadeInUp animated-fast">
                            <img src="{{ asset('frontend/images/photo-wed.png') }}" alt=""
                                class="couple-main">
                            {{-- <img src="{{ asset('frontend/images/half%20circle%20flower-500.png') }}" alt=""
                                class="couple-main"> --}}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
                            <h1>Fulanah & Halim Permana</h1>
                            <p style="margin-bottom: 0">Kepada Bapak/Ibu/Saudara/i</p>
                            <p>Kami Mengundang Anda Untuk Hadir Di Acara Pernikahan Kami.</p>

                            <button class="btn btn-primary" id="open-invitation">Buka Undangan</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="fh5co-header">
            <div class="container">
                <img class="flower-1" style="position: absolute; right: 0; top: 0"
                    src="{{ asset('frontend/images/background/flowers/top-right-1.svg') }}">
                <img class="flower-1" style="position: absolute; left: -25px; top:0"
                    src="{{ asset('frontend/images/background/flowers/top-left-1.svg') }}">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
                        <h2>The Wedding Of</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
                        <img src="{{ asset('frontend/images/photo-wed.png') }}" alt=""
                            class="couple-main">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
                        <h1>Fulanah</h1>
                        <br>
                        <span>&</span>
                        <h1>Halim Permana</h1>
                        <p style="color: #bf9b73">Kami berharap Anda menjadi bagian dari hari istimewa kami!</p>
                        <div class="simply-countdown simply-countdown-wedding"></div>
                        <br>
                        <p>
                            <a href="https://calendar.google.com/event?action=TEMPLATE&tmeid=NW0zY2Ewam91bnUzbW5ub2YwdjVxaTliNmUgcDY4MjI3cmY0dTJ0cWI1b3JrZjEwbTN1NDRAZw&tmsrc=p68227rf4u2tqb5orkf10m3u44%40group.calendar.google.com"
                                target="_blank" class="btn btn-primary btn-sm">Save the date</a><br>
                            <i style="font-size: 15px">*Klik tombol ini untuk menyimpan tanggal pada google
                                kalender</i>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div id="fh5co-couple"
            style="background: url('{{ asset('frontend/images/background/repeat-background/so-white.png') }}'); background-repeat:repeat ">
            <div class="container">
                <img class="flower-2-right" style="position: absolute;"
                    src="{{ asset('frontend/images/background/flowers/right-1.svg') }}">
                <img class="flower-2-left" style="position: absolute;"
                    src="{{ asset('frontend/images/background/flowers/left-1.svg') }}">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
                        <img src="{{ asset('frontend/images/bismillah.svg') }}" alt=""
                            style="margin-bottom: 20px">
                        <h2>Assalamu'alaikum Wr. Wb.</h2>
                        <p style="color: #bf9b73">Tanpa mengurangi rasa hormat. Kami mengundang Bapak/Ibu/Saudara/i
                            serta Kerabat sekalian untuk menghadiri acara pernikahan kami:</p>
                    </div>
                </div>
                <div class="couple-wrap animate-box">
                    <div class="couple-half">
                        <div class="groom">
                            <img src="{{ asset('frontend/images/girls.png') }}" alt="groom"
                                class="img-responsive">
                        </div>
                        <div class="desc-groom">
                            <h3>Fulanah</h3>
                            <p><span style="color: #bf9b73">Putri Keempat dari</span><br>
                                <span class="parents-font">Bapak Atep</span>
                                <br>
                                <span class="parents-font">Ibu Fulanah</span>
                            </p>
                            <div id="social-media-rehan">
                                <ul class="fh5co-social-icons">
                                    <li><a target="_blank" href="#"><i
                                                class="icon-github-with-circle"></i></a></li>
                                    <li><a target="_blank" href="#"><i
                                                class="icon-linkedin-with-circle"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <p class="heart text-center"><i class="icon-heart2"></i></p>
                    <div class="couple-half">
                        <div class="bride">
                            <img src="{{ asset('frontend/images/molid-square.png') }}" alt="groom"
                                class="img-responsive">
                        </div>
                        <div class="desc-bride">
                            <h3>Halim Permana</h3>
                            <p><span style="color: #bf9b73">Putra Kedua dari</span><br>
                                <span class="parents-font">Bapak Ukri</span>
                                <br>
                                <span class="parents-font">Ibu Entin</span>
                            </p>
                            <div id="social-media-molid">
                                <ul class="fh5co-social-icons">
                                    <li><a target="_blank" href="https://github.com/ugunNet21"><i
                                                class="icon-github-with-circle"></i></a></li>
                                    <li><a target="_blank" href="https://www.linkedin.com/in/gugun-gunawan-0482981a3/"><i
                                                class="icon-linkedin-with-circle"></i></a></li>
                                    <li><a target="_blank" href="https://www.instagram.com/gugunii/"><i
                                                class="icon-instagram-with-circle"></i></a></li>
                                    <li><a target="_blank" href="https://www.facebook.com/goegoen.ii"><i
                                                class="icon-facebook-with-circle"></i></a></li>
                                    <li><a target="_blank" href="#"><i
                                                class="icon-twitter-with-circle"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--	style="background-image:url('images/background/blue-brush-2.jpg');"-->
        <div id="fh5co-event" class="fh5co-bg" style="border-top: 1px solid #f2f2f2">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
                        <h2>Save The Date <a href="calendar.ics" class="btn btn-info"><i
                                    class="icon-download2"></i></a></h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="col-md-6 col-sm-6 text-center">
                            <div class="event-wrap animate-box">
                                <h3 style="font-family: 'Oswald', Arial, serif;">Akad Nikah</h3>
                                <div class="event-col">
                                    <i class="icon-clock"></i>
                                    <span>09:00</span>
                                    <span>Selesai</span>
                                </div>
                                <div class="event-col">
                                    <i class="icon-calendar"></i>
                                    <span>Jumat</span>
                                    <span class="tanggal">20 Mei 2022</span>
                                </div>
                                <p style="font-family: 'Courgette', Arial, serif">Alamat : Masjid Al-Hidayah</p>

                                <a href="https://goo.gl/maps/kSZez6MQC8SDNevM7" target="_blank"
                                    class="btn btn-primary">Penunjuk Lokasi <i class="icon-map2"></i></a>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 text-center">
                            <div class="event-wrap animate-box">
                                <h3 style="font-family: 'Oswald', Arial, serif;">Walimatul 'Ursy</h3>
                                <div class="event-col">
                                    <i class="icon-clock"></i>
                                    <span>11:00</span>
                                    <span>Selesai</span>
                                </div>
                                <div class="event-col">
                                    <i class="icon-calendar"></i>
                                    <span>Sabtu</span>
                                    <span class="tanggal">21 September 2024</span>
                                </div>
                                <p style="font-family: 'Courgette', Arial, serif">Alamat : Kp. Caringin Tilu</p>

                                <a href="https://goo.gl/maps/c8UZnR3s92rDSDEp8" target="_blank"
                                    class="btn btn-primary">Penunjuk Lokasi <i class="icon-map2"></i></a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div id="fh5co-gallery"
            style="background: url('{{ asset('frontend/images/background/repeat-background/so-white.png') }}'); background-repeat:repeat ">
            <img class="flower-3-top" src="{{ asset('frontend/images/background/flowers/top-2.svg') }}">
            <img class="flower-4-bottom" src="{{ asset('frontend/images/background/flowers/bottom-2.svg') }}">

            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
                        <h2>Galeri Foto</h2>
                        <h3 style="color: #bf9b73">Khitbah Day - 07 Mei 2024</h3>
                    </div>
                </div>
                <div class="row row-bottom-padded-md animate-box">
                    <div class="col-md-12">
                        <div id="inline-gallery-container" class="inline-gallery-container"
                            style="position: relative; height: 500px"></div>
                    </div>
                </div>
            </div>
        </div>

        <div id="fh5co-ayat">
            <!--<img height="400" width="100%" style="top: 0" src="images/background/wave-up.svg">-->
            <img height="400" width="100%" style="position: absolute; bottom: -175px"
                src="{{ asset('frontend/images/background/wave-down.svg') }}">
            <div class="container">
                <div class="ayat-content animate-box">
                    Dan di antara tanda-tanda kekuasaan-Nya lah Dia menciptakan untukmu istri-istri dari jenismu
                    sendiri, supaya kamu cenderung dan merasa tenteram kepadanya, dan dijadikan-Nya diantaramu rasa
                    kasih dan sayang. Sesungguhnya pada yang demikian itu benar-benar terdapat tanda-tanda bagi kaum
                    yang berfikir.
                    <br>
                    <b>- Q.S Ar Rum : 21 -</b>
                </div>
            </div>
        </div>
        <div id="fh5co-health-protocol">
            <div class="container">
                <div class="row animate-box">
                    <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                        <h2>Protokol Kesehatan & Anjuran</h2>
                        <p style="color: #bf9b73">Guna menjaga ketertiban, diharapkan bagi tamu undangan
                            untuk mematuhi Anjuran di bawah ini :</p>
                    </div>
                    <div class="col-md-8 col-md-offset-2 text-center">
                        <div class="row">
                            {{-- <div class="col-md-4 col-xs-6">
                                <div class="item-protocol">
                                    <div class="icon">
                                        <img style="padding: 10px" height="90px" width="90px"
                                            src="{{ asset('frontend/images/health-protocol/distance.png') }}"
                                            alt="Jaga jarak" />
                                    </div>
                                    <div class="description">
                                        <h3>Jaga Jarak</h3>
                                        <p>Jaga jarak minimal 2m dengan orang lain</p>
                                    </div>
                                </div>
                            </div> --}}
                            {{-- <div class="col-md-4 col-xs-6">
                                <div class="item-protocol">
                                    <div class="icon">
                                        <img style="padding: 15px" height="90px" width="90px"
                                            src="{{ asset('frontend/images/health-protocol/gel.png') }}"
                                            alt="Hand Sanitizer" />
                                    </div>
                                    <div class="description">
                                        <h3>Gunakan Handsanitizer</h3>
                                        <p>Gunakan handsanitizer secara berkala</p>
                                    </div>
                                </div>
                            </div> --}}
                            {{-- <div class="col-md-4 col-xs-6">
                                <div class="item-protocol">
                                    <div class="icon">
                                        <img style="padding: 10px" height="90px" width="90px"
                                            src="{{ asset('frontend/images/health-protocol/washing-hands.png') }}"
                                            alt="Cuci Tangan" />
                                    </div>
                                    <div class="description">
                                        <h3>Cuci Tangan</h3>
                                        <p>Cuci tangan yang bersih</p>
                                    </div>
                                </div>
                            </div> --}}
                            {{-- <div class="col-md-4 col-xs-6">
                                <div class="item-protocol">
                                    <div class="icon">
                                        <img style="padding: 10px" height="90px" width="90px"
                                            src="{{ asset('frontend/images/health-protocol/quarantine.png') }}"
                                            alt="Hindari Kerumunan" />
                                    </div>
                                    <div class="description">
                                        <h3>Hindari Kerumunan</h3>
                                        <p>Hindari kerumunan untuk mencegah penyebaran covid</p>
                                    </div>
                                </div>
                            </div> --}}
                            {{-- <div class="col-md-4 col-xs-6">
                                <div class="item-protocol">
                                    <div class="icon">
                                        <img style="padding: 15px" height="90px" width="90px"
                                            src="{{ asset('frontend/images/health-protocol/mask.png') }}"
                                            alt="Pakai Masker" />
                                    </div>
                                    <div class="description">
                                        <h3>Gunakan Masker</h3>
                                        <p>Pakai masker sebelum memasuki gedung acara</p>
                                    </div>
                                </div>
                            </div> --}}
                            {{-- <div class="col-md-4 col-xs-6">
                                <div class="item-protocol">
                                    <div class="icon">
                                        <img style="padding: 10px" height="90px" width="90px"
                                            src="{{ asset('frontend/images/health-protocol/shaking-hands.png') }}"
                                            alt="Tidak Bersalaman" />
                                    </div>
                                    <div class="description">
                                        <h3>Tidak Bersalaman</h3>
                                        <p>Diusahakan untuk tidak bersalaman</p>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                        {{-- <p style="color: #bf9b73">dan mengikuti anjuran di bawah ini :</p> --}}
                        <div class="row">
                            <div class="col-md-4 col-xs-6">
                                <div class="item-protocol">
                                    <div class="icon">
                                        <img style="padding: 10px" height="90px" width="90px"
                                            src="{{ asset('frontend/images/health-protocol/washing-hands.png') }}"
                                            alt="Cuci Tangan" />
                                    </div>
                                    <div class="description">
                                        <h3>Cuci Tangan</h3>
                                        <p>Cuci tangan yang bersih</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-6">
                                <div class="item-protocol">
                                    <div class="icon">
                                        <img style="padding: 10px" height="90px" width="90px"
                                            src="{{ asset('frontend/images/health-protocol/eating.png') }}"
                                            alt="Adab makan minum" />
                                    </div>
                                    <div class="description">
                                        <h3>Makan Minum</h3>
                                        <p>Mohon memperhatikan adab makan dan minum (duduk, membaca bismillah, tidak
                                            mencela makanan dan tidak mubazir)</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-6">
                                <div class="item-protocol">
                                    <div class="icon">
                                        <img style="padding: 15px" height="100px" width="100px"
                                            src="{{ asset('frontend/images/health-protocol/no-shaking-hands.png') }}"
                                            alt="Tidak Bercampur Baur" />
                                    </div>
                                    <div class="description">
                                        <h3>Tidak Bercampur Baur</h3>
                                        <p>Mohon untuk tidak bercampur baur dan tidak bersalaman antara tamu laki-laki
                                            dan perempuan termasuk saat berfoto (kecuali dengan mahram)</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-6">
                                <div class="item-protocol">
                                    <div class="icon">
                                        <img style="padding: 10px" height="90px" width="90px"
                                            src="{{ asset('frontend/images/health-protocol/rug.png') }}"
                                            alt="Sholat" />
                                    </div>
                                    <div class="description">
                                        <h3>Sholat</h3>
                                        <p>Memperhatikan waktu shalat wajib dan tidak meninggalkannya</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div id="fh5co-testimonial"
            style="background: url('{{ asset('frontend/images/background/repeat-background/so-white.png') }}'); background-repeat:repeat; border-top: 1px solid #f2f2f2">
            <img height="400" class="flower-bukutamu-right" style="right: 0;top: 0;position: absolute;"
                src="{{ asset('frontend/images/background/flowers/top-right-3.svg') }}">
            <img height="400" class="flower-bukutamu-left" style="position: absolute; left: 0; bottom: 0"
                src="{{ asset('frontend/images/background/flowers/bottom-left-3.svg') }}">
            <div class="container">
                <div class="row animate-box">
                    <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                        <h2>Buku Tamu & Ucapan</h2>
                        <span style="color: #bf9b73">Doa Restu Anda merupakan karunia yang sangat berarti bagi
                            kami.</span>
                    </div>
                </div>

                <div class="row animate-box">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="list-group"></div>
                    </div>
                </div>

                <div id="button-send" class="text-center animate-box">
                    {{-- https://github.com/maulidandev/nikah-rehan-maulidan/issues/new/choose --}}
                    <a href="#" target="_blank"
                        class="btn btn-primary btn-sm">Kirim Ucapan</a><br>
                    <i style="font-size: 15px">Note : Hanya bisa diisi jika mempunyai akun github. Jika belum ada
                        silahkan daftar terlebih dahulu</i>
                </div>
            </div>
        </div>

        <footer id="fh5co-footer" role="contentinfo"
            style="background: url('{{ asset('frontend/images/background/repeat-background/witewall_3.png') }}'); background-repeat:repeat ">
            <div class="container">
                <img class="flower-1" style="position: absolute; right: 0; bottom: 0"
                    src="{{ asset('frontend/images/background/flowers/bottom-right-1.svg') }}">
                <img class="flower-1" style="position: absolute; left: 0; bottom:0"
                    src="{{ asset('frontend/images/background/flowers/bottom-left-1.svg') }}">
                <div class="row copyright animate-box">
                    <div class="col-md-12 text-center">
                        <p>
                            Merupakan suatu kehormatan dan kebahagiaan bagi kami, apabila Bapak/Ibu/Saudara/i berkenan
                            hadir dan memberikan doa restu.
                            <br>Atas kehadiran dan doa restunya, kami mengucapkan terima kasih.
                        <h3 style="color: #bf9b73">Wassalamu'alaikum Wr. Wb.</h3>
                        Jazakumullahu Khairan
                        </p>
                        <img src="{{ asset('frontend/images/readme/half%20circle-200.png') }}" width="100"
                            height="100">
                        <br>
                        <h1 style="font-family: 'Satisfy', Arial, serif">Halim Permana & Fulanah</h1>
                        <p>
                            © Copyright 2022 GIATECHINDO All Rights Reserved </br>
                            <small>Instagram : gugunii | Whatsapp : (+62) 823 2016 3626 | giatechindo.com
                                |careergunawan@gmail.com</small>
                        <ul class="fh5co-social-icons">
                            <li><a target="_blank" href="https://wa.me/62320163626/"><i class="icon-phone"></i></a>
                            </li>
                            <li><a target="_blank" href="#"><i class="icon-globe"></i></a>
                            </li>
                            <li><a target="_blank" href="https://www.instagram.com/gugunii/"><i
                                        class="icon-instagram"></i></a></li>
                            <li><a target="_blank" href="https://github.com/ugunNet21"><i
                                        class="icon-github"></i></a></li>
                            <li><a target="_blank" href="https://www.linkedin.com/in/gugun-gunawan-0482981a3/"><i
                                        class="icon-linkedin"></i></a></li>
                        </ul>
                        </p>
                    </div>
                </div>

            </div>
        </footer>
    </div>
    <!--</div>-->

    <!-- jQuery -->
    <script src="{{ asset('frontend/js/jquery.min.js') }}"></script>
    <!-- jQuery Easing -->
    <script src="{{ asset('frontend/js/jquery.easing.1.3.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
    <!-- Waypoints -->
    <script src="{{ asset('frontend/js/jquery.waypoints.min.js') }}"></script>
    <!-- Carousel -->
    <script src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>
    <!-- countTo -->
    <script src="{{ asset('frontend/js/jquery.countTo.js') }}"></script>
    <!-- Stellar -->
    <script src="{{ asset('frontend/js/jquery.stellar.min.js') }}"></script>
    <!-- Magnific Popup -->
    <script src="{{ asset('frontend/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('frontend/js/magnific-popup-options.js') }}"></script>
    <!-- SimplyCountdown -->
    <script src="{{ asset('frontend/js/simplyCountdown.js') }}"></script>
    <!-- Main -->
    <script src="{{ asset('frontend/js/main.js') }}"></script>
    <!-- LightGallery -->
    <script src="{{ asset('frontend/lib/lightgallery.js/dist/lightgallery.min.js') }}"></script>
    <script src="{{ asset('frontend/lib/lightgallery.js/dist/plugins/thumbnail/lg-thumbnail.min.js') }}"></script>
    <script src="{{ asset('frontend/lib/lightgallery.js/dist/plugins/autoplay/lg-autoplay.min.js') }}"></script>
    <script src="{{ asset('frontend/lib/lightgallery.js/dist/plugins/fullscreen/lg-fullscreen.min.js') }}"></script>
    <!-- Showdown -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/showdown/2.0.3/showdown.min.js"></script>


    <script>
        day = 20;
        month = 5 - 1;
        year = 2024;
        hour = 18;
        minute = 0;
        var d = new Date(year, month, day, hour, minute, 0, 0);

        // default example
        simplyCountdown('.simply-countdown-wedding', {
            year: d.getFullYear(),
            month: d.getMonth() + 1,
            day: d.getDate(),
            hour: d.getHours(),
            minutes: 0, // Default is 0 [0-59] integer
            seconds: 0, // Default is 0 [0-59] integer
            countUp: true
            // enableUtc: true
        });

        //jQuery example
        // $('#simply-countdown-losange').simplyCountdown({
        // 	year: d.getFullYear(),
        // 	month: d.getMonth() + 1,
        // 	day: d.getDate(),
        // 	enableUtc: false
        // });

        $('#open-invitation').click(function() {
            $('#overlay').addClass('hide-overlay');
            playAudio1();
            /*yang bagian floating button ada animasinya tapi karena ketutup dulu sama overlay jadinya gak nampak*/
            /*pengen pas di klik buka undangan baru jalan animasinya*/
            /*var c = document.getElementsByClassName('right-sidebar');
            for (var i = 0; i < c.length; i++) {
            	c[i].classList.add('animate');
            }*/
        });

        $.get("https://api.github.com/repos/ngodingsolusi/the-wedding-of-rehan-maulidan/issues?state=all&per_page",
            function(data) {
                for (let i = 0; i < data.length; i++) {
                    const item = `
				<a class="list-group-item">
					<div class="name"><span class="strong" style="font-size: 24px">${data[i].user.login}</span> <span class="label label-success">${data[i].labels.length > 0 ? data[i].labels[0].name : 'Tanpa Keterangan'}</span></div>
					<hr style="margin-top: 0;">
					<div class="comment">${new showdown.Converter().makeHtml(data[i].body)}</div>
				</a>
			`;

                    $("#fh5co-testimonial .list-group").append(item);
                }
            });

        function scrollToElement(el) {
            $("html, body").animate({
                scrollTop: $(`#${el}`).offset().top
            }, 1000);
        }
    </script>

    <script>
        // 2. This code loads the IFrame Player API code asynchronously.
        var tag = document.createElement('script');

        tag.src = "https://www.youtube.com/iframe_api";
        var firstScriptTag = document.getElementsByTagName('script')[0];
        firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

        // 3. This function creates an <iframe> (and YouTube player)
        //    after the API code downloads.
        var player1;

        function onYouTubeIframeAPIReady() {

            var ctrlq1 = document.getElementById("youtube-audio1");
            ctrlq1.innerHTML = '<img id="youtube-icon1" src=""/><div id="youtube-player1"></div>';
            ctrlq1.style.cssText = 'width:20px;margin:0 auto;cursor:pointer;cursor:hand;display:none';
            ctrlq1.onclick = toggleAudio1;

            player1 = new YT.Player('youtube-player1', {
                height: '0',
                width: '0',
                videoId: 'Ej-jjW10mnE',
                playerVars: {
                    autoplay: ctrlq1.dataset.autoplay,
                    loop: ctrlq1.dataset.loop,
                },
                events: {
                    'onReady': onPlayerReady1,
                    'onStateChange': onPlayerStateChange1
                }
            });
        }

        function togglePlayButton1(play) {
            document.getElementById("youtube-icon1").src = play ?
                "https://ngodingsolusi.github.io/the-wedding-of-rehan-maulidan/images/audio/pause.png" :
                "https://ngodingsolusi.github.io/the-wedding-of-rehan-maulidan/images/audio/play.png";
        }

        function toggleAudio1() {
            if (player1.getPlayerState() == 1 || player1.getPlayerState() == 3) {
                player1.pauseVideo();
                togglePlayButton1(false);
            } else {
                player1.playVideo();
                togglePlayButton1(true);
            }
        }

        function playAudio1() {
            if (!(player1.getPlayerState() == 1 || player1.getPlayerState() == 3)) {
                player1.playVideo();
                togglePlayButton1(true);
            }
        }

        function onPlayerReady1(event) {
            player1.setPlaybackQuality("small");
            document.getElementById("youtube-audio1").style.display = "block";
            togglePlayButton1(player1.getPlayerState() !== 5);
        }

        function onPlayerStateChange1(event) {
            if (event.data === 0) {
                togglePlayButton1(false);
            }
        }
    </script>

    <script>
        function akadLocation() {
            // If it's an iPhone..
            if ((navigator.platform.indexOf("iPhone") != -1) ||
                (navigator.platform.indexOf("iPod") != -1) ||
                (navigator.platform.indexOf("iPad") != -1))
                window.open("maps://www.google.com/maps?daddr=masjid+keuchik+leumik");
            else
                window.open("https://www.google.com/maps?daddr=masjid+keuchik+leumik");
        }

        function walimahLocation() {
            // If it's an iPhone..
            if ((navigator.platform.indexOf("iPhone") != -1) ||
                (navigator.platform.indexOf("iPod") != -1) ||
                (navigator.platform.indexOf("iPad") != -1))
                window.open("maps://www.google.com/maps?daddr=Amel+Convention+Hall");
            else
                window.open("https://www.google.com/maps?daddr=Amel+Convention+Hall");
        }
    </script>

    <script type="text/javascript">
        const lgContainer = document.getElementById('inline-gallery-container');
        const inlineGallery = lightGallery(lgContainer, {
            container: lgContainer,
            dynamic: true,
            thumbnail: true,
            // Turn off hash plugin in case if you are using it
            // as we don't want to change the url on slide change
            hash: false,
            // Do not allow users to close the gallery
            closable: false,
            // Add maximize icon to enlarge the gallery
            showMaximizeIcon: true,
            download: false,
            // Append caption inside the slide item
            // to apply some animation for the captions (Optional)
            appendSubHtmlTo: '.lg-item',
            // Delay slide transition to complete captions animations
            // before navigating to different slides (Optional)
            // You can find caption animation demo on the captions demo page
            slideDelay: 400,
            dynamicEl: [{
                src: '{{ asset('frontend/images/gallery/gallery-1.jpg') }}',
                thumb: '{{ asset('frontend/images/gallery/gallery-1.jpg') }}',
                /*subHtml: `<div class="lightGallery-captions">
        	<h4>Caption 1</h4>
        	<p>Description of the slide 1</p>
        </div>`,*/
            }, {
                src: '{{ asset('frontend/images/gallery/gallery-2.jpg') }}',
                thumb: '{{ asset('frontend/images/gallery/gallery-2.jpg') }}',
                /*subHtml: `<div class="lightGallery-captions">
        	<h4>Caption 1</h4>
        	<p>Description of the slide 1</p>
        </div>`,*/
            }, {
                src: '{{ asset('frontend/images/gallery/gallery-3.jpg') }}',
                thumb: '{{ asset('frontend/images/gallery/gallery-3.jpg') }}',
                /*subHtml: `<div class="lightGallery-captions">
        	<h4>Caption 1</h4>
        	<p>Description of the slide 1</p>
        </div>`,*/
            }, {
                src: '{{ asset('frontend/images/gallery/gallery-4.jpg') }}',
                thumb: '{{ asset('frontend/images/gallery/gallery-4.jpg') }}',
                /*subHtml: `<div class="lightGallery-captions">
        	<h4>Caption 1</h4>
        	<p>Description of the slide 1</p>
        </div>`,*/
            }, {
                src: '{{ asset('frontend/images/gallery/gallery-5.jpg') }}',
                thumb: '{{ asset('frontend/images/gallery/gallery-5.jpg') }}',
                /*subHtml: `<div class="lightGallery-captions">
        	<h4>Caption 1</h4>
        	<p>Description of the slide 1</p>
        </div>`,*/
            }, {
                src: '{{ asset('frontend/images/gallery/gallery-6.jpg') }}',
                thumb: '{{ asset('frontend/images/gallery/gallery-6.jpg') }}',
                /*subHtml: `<div class="lightGallery-captions">
        	<h4>Caption 1</h4>
        	<p>Description of the slide 1</p>
        </div>`,*/
            }, {
                src: '{{ asset('frontend/images/gallery/gallery-7.jpg') }}',
                thumb: '{{ asset('frontend/images/gallery/gallery-7.jpg') }}',
                /*subHtml: `<div class="lightGallery-captions">
        	<h4>Caption 1</h4>
        	<p>Description of the slide 1</p>
        </div>`,*/
            }, {
                src: '{{ asset('frontend/images/gallery/gallery-8.jpg') }}',
                thumb: '{{ asset('frontend/images/gallery/gallery-8.jpg') }}',
                /*subHtml: `<div class="lightGallery-captions">
        	<h4>Caption 1</h4>
        	<p>Description of the slide 1</p>
        </div>`,*/
            }, {
                src: '{{ asset('frontend/images/gallery/gallery-9.jpg') }}',
                thumb: '{{ asset('frontend/images/gallery/gallery-9.jpg') }}',
                /*subHtml: `<div class="lightGallery-captions">
        	<h4>Caption 1</h4>
        	<p>Description of the slide 1</p>
        </div>`,*/
            }, ],
        });

        // Since we are using dynamic mode, we need to programmatically open lightGallery
        inlineGallery.openGallery();
    </script>


</body>

</html>
