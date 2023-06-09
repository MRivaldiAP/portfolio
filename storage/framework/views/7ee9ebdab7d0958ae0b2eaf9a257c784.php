<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">

    <title>Latihan</title>

    <!-- Favicons -->
    <link href="<?php echo e(asset('assets/img/favicon.png')); ?>" rel="icon">
    <link href="<?php echo e(asset('assets/img/apple-touch-icon.png')); ?>" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?php echo e(asset('assets/vendor/aos/aos.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('assets/vendor/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('assets/vendor/boxicons/css/boxicons.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('assets/vendor/glightbox/css/glightbox.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('assets/vendor/remixicon/remixicon.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('assets/vendor/swiper/swiper-bundle.min.css')); ?>" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?php echo e(asset('assets/css/style.css')); ?>" rel="stylesheet">
</head>

<body>
    <!-- Header -->
    <header>
        <!-- Navbar -->
        <nav class="navbar navbar-expand navbar-light fixed-top ">
            <a href="#" class="navbar-brand"><h1 class="text-primary">Latihan</h1></a>
            <ul>
                <li class="nav-item active">
                    <a href="#" class="nav-link text-light">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="text-light dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                        Gallery
                      </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <a href="#" class="dropdown-item text-primary">Gamis</a>
                        <a href="#" class="dropdown-item text-primary">Burkat</a>
                        <a href="#" class="dropdown-item text-primary">Jilbab</a>
                    </div>
                </li>
            </ul>
        </nav>
        <!-- Navbar End -->

        <!-- Background Image -->
        <div class="text-center bg-image" style="background-image: url('assets/img/image/mountain.webp'); background-size:100%">
            <div class="mask" style="background-color: rgba(0, 0, 0, 0.6); height:700px">
                <div class="d-flex justify-content-center align-items-center h-100">
                    <div class="text-white" data-aos="fade-up">
                        <h1 class="mb-3">Latihan</h1>
                        <h4 class="mb-3">Item Latihan</h4>
                        <button type="button" class="btn btn-outline-light btn-lg">LEARN MORE</button>
                    </div>
                </div>

            </div>
        </div>
        <!-- Background Image End -->
    </header>
    <!-- Header End -->
    <!-- Main -->
    <main>
        <section id="gallery" class="gallery">
            <div class="container-fluid">
                <div class="row">
                    <div class="d-flex flex-column col-lg-7 alignment-items-stretch justify-content-center">
                        <div class="p-5">
                            <h2 data-aos="fade-right">Have a Look at Our Collections!</h2>
                            <p data-aos="fade-right">Brought to you from the most fresh and fashionable local brand all around Indonesia</p>
                            <img src="assets/img/image/hammer.jpg" alt="geological hammer" data-aos="fade-up" style="height:500px">
                        </div>
                    </div>
                    <div class="d-flex flex-column justify-content-center alignment-items-stretch col-lg-5 itemgallery">
                        <button class="btn btn-outline-light btn-lg">HAMMER</button>
                        <button class="btn btn-outline-light btn-lg">GEOLOGICAL COMPASS</button>
                        <button class="btn btn-outline-light btn-lg">FIELD BOOK</button>
                        <button class="btn btn-outline-light btn-lg">CARRIER</button>
                        <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
                        width="400.000000pt" height="300.000000pt" viewBox="0 0 300.000000 10.000000"
                        preserveAspectRatio="xMidYMid meet">
                        <g transform="translate(0.000000,127.000000) scale(0.100000,-0.100000)"
                        fill="#ffffff" stroke="none">
                        <path d="M1895 1256 c-11 -7 -89 -95 -174 -194 l-154 -180 -31 22 c-49 35
-153 79 -170 73 -8 -3 -35 -32 -58 -63 -24 -31 -52 -67 -63 -80 l-20 -23 -56
33 -56 34 -39 -65 c-57 -94 -110 -174 -136 -206 l-23 -28 -36 53 c-38 57 -229
225 -267 234 -29 8 -49 -10 -122 -111 -67 -93 -155 -180 -292 -288 -54 -43
-98 -82 -98 -87 0 -6 -22 -50 -50 -98 -27 -48 -50 -92 -50 -97 0 -5 26 15 57
45 32 31 78 66 103 79 28 14 54 38 67 60 32 55 92 120 135 148 22 13 41 23 43
21 2 -2 -2 -30 -8 -63 l-11 -60 -6 38 c-4 20 -10 41 -14 45 -11 10 -94 -86
-117 -136 -17 -36 -30 -48 -85 -74 -63 -30 -104 -67 -104 -94 0 -8 7 -14 15
-14 23 0 196 110 190 120 -7 11 38 102 59 119 22 18 46 6 46 -22 0 -27 -38
-146 -53 -164 -11 -15 -26 -16 -46 -4 -12 8 -13 12 -1 25 25 31 5 24 -58 -19
-88 -59 -96 -69 -52 -61 115 19 120 19 120 2 0 -17 9 -20 35 -10 34 13 57 85
111 353 3 13 8 21 11 17 8 -8 -36 -263 -52 -301 -19 -46 -28 -95 -17 -95 5 0
22 16 36 35 15 19 30 35 35 35 4 0 4 -28 0 -62 -4 -35 -6 -65 -4 -66 12 -13
24 17 30 75 7 69 37 149 76 204 12 17 19 33 16 35 -6 6 -34 -20 -60 -56 -17
-24 -17 -22 -10 85 4 61 7 132 5 158 -1 28 5 61 13 78 42 79 37 111 -6 42 -32
-52 -106 -130 -156 -165 -24 -16 -43 -27 -43 -24 0 2 31 34 70 71 38 37 99
110 136 161 36 52 70 97 75 100 15 9 44 -73 74 -201 15 -66 31 -124 36 -129
13 -14 11 18 -5 94 -8 36 -12 67 -10 69 18 19 211 -579 202 -627 -2 -11 -27
18 -72 83 -76 110 -179 233 -183 219 -1 -5 -7 -27 -12 -50 -6 -22 -31 -72 -56
-110 -24 -38 -45 -74 -45 -80 0 -8 28 -13 76 -16 68 -3 79 -6 98 -29 29 -36
53 -47 117 -54 30 -3 64 -8 77 -11 21 -4 22 -1 22 50 0 52 -50 250 -85 331 -8
21 -15 39 -15 40 0 1 12 0 27 -3 23 -4 25 -2 19 14 -19 48 -39 135 -33 141 4
3 8 4 10 2 33 -43 127 -199 171 -283 31 -60 64 -118 72 -130 29 -41 13 0 -41
105 -32 62 -49 106 -41 103 8 -3 49 -50 91 -105 42 -55 79 -98 82 -95 3 3 -43
81 -102 173 -59 92 -113 177 -121 189 -11 19 -8 26 40 73 l52 51 79 -58 c44
-32 94 -72 110 -89 90 -92 115 -123 139 -175 22 -46 52 -79 61 -66 1 2 17 26
35 53 19 28 37 52 41 55 5 3 5 11 0 18 -5 8 -19 0 -46 -28 -22 -22 -45 -40
-51 -40 -7 0 -21 24 -32 53 -13 35 -28 56 -46 65 -44 22 -167 219 -145 232 8
5 5 14 -10 29 -12 12 -22 35 -22 54 -1 17 -3 42 -4 55 -3 29 12 28 58 -4 48
-32 42 -42 -7 -13 -20 12 -39 19 -42 17 -9 -10 89 -109 127 -129 39 -19 70
-63 62 -86 -3 -8 5 -13 21 -13 26 0 26 1 12 28 -8 15 -37 58 -65 97 -28 38
-51 73 -51 78 0 13 99 135 115 141 17 6 20 1 29 -40 8 -37 30 -62 91 -104 53
-37 57 -62 25 -155 -18 -53 -19 -60 -5 -82 19 -28 40 -32 25 -4 -12 23 -14 71
-2 70 11 0 66 -85 113 -174 80 -153 146 -241 166 -222 7 7 -60 145 -95 197
-17 24 -29 46 -27 48 2 2 28 -15 59 -37 30 -23 59 -41 63 -41 9 0 53 62 53 74
0 4 29 54 63 109 35 56 106 172 157 257 130 217 152 251 157 246 3 -3 -15 -40
-39 -83 -59 -106 -180 -374 -172 -382 13 -13 71 70 98 141 36 92 93 209 111
227 25 26 29 -31 7 -101 -29 -92 -33 -114 -36 -203 -1 -44 -6 -90 -10 -102 -6
-15 -4 -23 3 -23 6 0 11 7 11 15 0 25 14 17 29 -16 13 -31 55 -58 68 -45 4 4
2 16 -5 26 -17 27 -15 80 4 137 20 61 27 68 51 52 64 -39 72 64 13 161 -19 30
-41 78 -51 105 -10 28 -18 41 -19 30 -1 -20 -30 -68 -30 -50 0 16 32 95 39 95
3 0 15 -30 25 -66 16 -57 24 -68 52 -82 35 -16 42 -30 23 -49 -16 -16 8 -28
26 -13 23 19 18 33 -26 81 l-41 44 6 63 c4 41 3 62 -4 62 -9 0 -40 58 -40 75
0 10 27 5 46 -10 16 -13 16 -14 2 -9 -23 8 -23 2 2 -38 14 -23 20 -51 20 -89
0 -64 10 -81 113 -180 52 -50 67 -71 68 -94 0 -17 4 -39 9 -50 6 -14 9 -1 9
44 1 44 -5 74 -18 100 -47 89 -113 233 -108 237 8 8 66 -68 84 -111 10 -24 34
-54 62 -75 125 -96 145 -113 129 -107 -12 4 -18 1 -18 -9 0 -8 -11 -20 -25
-26 -14 -6 -25 -15 -25 -19 0 -13 48 -58 91 -85 22 -13 49 -39 59 -57 l20 -32
0 46 c0 25 -5 60 -11 78 -6 18 -10 34 -7 36 2 2 38 -24 81 -57 43 -33 80 -58
82 -56 11 10 -495 488 -562 532 -109 71 -116 72 -146 28 -13 -20 -45 -62 -71
-92 -27 -30 -58 -77 -70 -105 -13 -27 -43 -75 -67 -105 -24 -30 -58 -86 -76
-123 -18 -37 -46 -88 -63 -112 -68 -98 -91 -101 -140 -13 -21 40 -66 93 -124
149 l-90 87 27 33 c65 83 86 104 87 87 0 -10 8 -22 19 -27 12 -7 22 -30 30
-71 19 -98 26 -84 56 107 4 24 11 45 16 49 5 3 9 1 9 -3 0 -5 6 -18 14 -29 13
-17 14 -13 9 39 -5 48 -3 57 11 57 13 0 16 -10 16 -47 0 -60 -17 -163 -34
-214 -8 -21 -10 -39 -6 -39 12 0 70 179 70 214 0 21 11 40 43 68 63 60 73 63
87 29 15 -38 80 -101 80 -78 0 9 -13 31 -28 49 -16 18 -40 54 -55 79 -27 48
-89 109 -110 109 -7 0 -21 -6 -32 -14z m109 -94 c-21 -5 -61 16 -69 36 -3 8
-2 24 1 36 6 19 10 17 45 -24 31 -36 36 -46 23 -48z m-154 17 c-15 -28 -7 -34
22 -15 21 13 25 13 47 -5 14 -12 21 -25 17 -35 -9 -23 -41 -13 -40 14 1 28 -3
28 -59 -8 -26 -16 -47 -27 -47 -24 0 8 60 94 66 94 3 0 0 -9 -6 -21z m-83
-128 c-19 -21 -37 -44 -39 -52 -3 -8 -9 -11 -13 -7 -8 7 64 98 78 98 5 0 -6
-17 -26 -39z m721 -112 c-2 -6 -13 -1 -26 11 -15 15 -22 32 -22 58 l1 37 25
-48 c14 -27 24 -53 22 -58z m-197 -54 c-12 -36 -19 -71 -15 -76 7 -13 44 18
44 38 0 7 5 13 10 13 18 0 10 -18 -30 -69 -40 -51 -49 -68 -29 -55 7 4 9 0 6
-12 -3 -11 -12 -39 -18 -64 -12 -40 -14 -42 -17 -18 -2 15 1 35 6 45 6 9 8 40
5 69 -4 38 0 70 17 120 26 78 30 87 37 80 3 -3 -4 -35 -16 -71z m-784 15 c26
-11 44 -22 42 -24 -8 -8 -124 26 -139 41 -13 14 -12 15 18 9 19 -3 54 -15 79
-26z m-51 -45 c9 -14 27 -28 40 -31 19 -5 44 -34 28 -34 -13 0 -92 61 -97 75
-10 24 11 17 29 -10z m131 -61 c32 -36 32 -37 16 -68 -9 -17 -19 -42 -24 -56
-6 -19 -7 -13 -8 26 -1 28 -8 70 -16 93 -8 22 -11 41 -7 41 3 0 21 -16 39 -36z
m783 -11 c0 -7 -7 -13 -15 -13 -10 0 -15 10 -15 33 1 30 1 31 15 13 8 -11 15
-26 15 -33z m-1250 11 c0 -8 -4 -14 -9 -14 -5 0 -14 -13 -21 -30 -7 -16 -16
-30 -20 -30 -5 0 1 22 13 49 19 47 37 59 37 25z m-405 -108 c14 -47 13 -80 -1
-40 -4 10 -18 43 -31 73 -28 65 -29 74 -3 41 11 -14 27 -47 35 -74z m2083 61
c2 -10 -3 -17 -12 -17 -18 0 -29 16 -21 31 9 14 29 6 33 -14z m-1153 -33 c-21
-41 -19 -73 11 -133 15 -28 24 -55 21 -58 -3 -3 -21 24 -39 61 l-32 66 19 55
c10 31 22 52 27 47 5 -5 2 -22 -7 -38z m1135 -31 l45 -47 -52 43 c-29 24 -53
45 -53 47 0 13 21 -2 60 -43z m-1657 3 c12 -36 2 -44 -31 -24 -33 20 -40 45
-15 51 28 7 36 3 46 -27z m-317 -28 c27 -30 33 -43 23 -46 -8 -3 -23 -13 -35
-24 -28 -25 -40 -10 -46 60 -6 65 6 67 58 10z m903 -9 c7 28 7 28 76 -73 43
-63 46 -70 35 -97 -15 -34 -19 -35 -70 -9 -22 11 -48 20 -60 20 -24 0 -25 4
-4 35 9 13 13 29 9 35 -4 6 -8 25 -11 43 -2 18 -6 46 -9 62 -5 30 -5 29 12 -5
16 -34 16 -34 22 -11z m-1509 -255 c-29 -27 -57 -50 -63 -52 -7 -2 14 22 47
53 32 31 60 54 63 52 2 -3 -19 -27 -47 -53z m500 -179 c33 -41 100 -142 100
-150 0 -18 -55 1 -90 30 -22 19 -58 37 -78 41 -20 4 -40 9 -45 11 -4 3 7 31
25 63 36 65 40 66 88 5z"/>
<path d="M2461 832 c-1 -7 -6 -10 -12 -6 -7 4 -9 0 -6 -12 20 -66 19 -71 -18
-113 -34 -38 -37 -45 -32 -86 6 -55 -4 -64 -32 -29 -12 15 -24 24 -28 21 -3
-4 4 -15 17 -25 l22 -18 -16 -78 c-16 -76 -15 -80 4 -111 24 -39 25 -55 5 -55
-20 0 -19 -19 0 -26 17 -7 45 12 45 31 0 7 -11 29 -25 49 l-26 38 41 73 c25
45 37 76 30 80 -13 8 -13 35 0 35 16 0 60 -53 86 -102 16 -32 24 -64 24 -98 0
-32 4 -49 10 -45 6 3 10 31 10 61 0 47 -6 66 -40 122 -54 92 -59 122 -25 154
25 23 26 28 15 66 -6 23 -17 45 -24 49 -7 4 -16 15 -19 23 -4 10 -6 11 -6 2z"/>
<path d="M2182 738 c-5 -7 -17 -28 -26 -46 -16 -30 -19 -32 -30 -17 -11 15
-16 8 -45 -54 -39 -85 -38 -105 7 -109 18 -2 36 -10 39 -18 11 -28 23 -13 23
29 0 23 8 67 19 97 19 57 35 130 28 130 -3 0 -9 -6 -15 -12z"/>
<path d="M2531 683 c-1 -80 5 -103 25 -103 9 0 14 11 14 30 0 27 3 30 29 30
37 0 39 -3 47 -75 5 -43 4 -56 -4 -51 -17 10 -15 -16 2 -40 12 -15 17 -16 27
-7 15 15 -2 158 -24 199 -12 23 -15 24 -26 10 -26 -31 -58 -10 -79 49 -9 26
-11 21 -11 -42z"/>
<path d="M600 700 c0 -22 5 -40 10 -40 6 0 10 18 10 40 0 22 -4 40 -10 40 -5
0 -10 -18 -10 -40z"/>
</g>
</svg>

                    </div>
                </div>
            </div>
        </section>
        
    </main>
    <!-- Main End -->
      <!-- Vendor JS Files -->
  <script src="<?php echo e(asset('assets/vendor/aos/aos.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/vendor/glightbox/js/glightbox.min.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/vendor/swiper/swiper-bundle.min.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/vendor/waypoints/noframework.waypoints.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/vendor/php-email-form/validate.js')); ?>"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo e(asset('assets/js/main.js')); ?>"></script>
</body>

</html>
<?php /**PATH D:\Project Website\latihan\resources\views/welcome.blade.php ENDPATH**/ ?>