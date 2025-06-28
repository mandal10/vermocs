<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
     <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=headingfont:ital,wght@0,400..700;1,400..700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="custom.css">

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
        @endif
    </head>
    <body class="selection:bg-redViolet selection:text-white">
    <div class="max-w-[100%] ">
        <!-- header start -->

        <div class="bg-snow">
            <header class="  xl:pb-[250px] md:pb-[70px] xs:pb-[40px] ">
                <navbar
                    class="flex justify-between items-center w-[100%] md:w-[78%] mx-auto  xs:px-[20px] md:px-[0px] ">

                    <h1 class="md:text-5xl sm:text-4xl xs:text-3xl  text-redViolet  font-headingfont">Glamor</h1>
                    <!-- destop menu -->
                    <Breadcrumbs class="xl:block hidden font-headingfont">
                        <ul class="flex uppercase text-[18px] items-center justify-center">
                            <!-- Home Menu Item -->
                            <li class="py-[35px] text-black group relative ">
                                <a href="" class="py-[35px] px-[15px]  ">Home</a>
                                <ul
                                    class="hidden bg-redViolet group-hover:block absolute text-white w-[220px] px-[25px] py-[20px] top-[70px] z-40 capitalize font-subheadingfont left-[-5px]">
                                    <li class="py-[8px] hover:scale-105"><a href="style1.html">Home Style 1</a></li>
                                    <li class="py-[8px] hover:scale-105"><a href="style2.html">Home Style 2</a></li>
                                    <li class="py-[8px] hover:scale-105"><a href="style3.html">Home Style 3</a></li>
                                    <li class="py-[8px] hover:scale-105"><a href="style4.html">Home Style 4</a></li>
                                </ul>
                            </li>

                            <!-- Shop Menu Item -->
                            <li class="py-[35px] text-blacklight hover:text-black font-subheadingfont ">
                                <a href="shop.html" class="py-[35px] px-[15px] ">Shop</a>
                            </li>

                            <!-- Pages Menu Item -->
                            <li class="py-[35px] text-blacklight hover:text-black group relative font-subheadingfont ">
                                <a href="#" class="py-[40px] px-[15px] ">Pages</a>
                                <ul
                                    class="hidden bg-redViolet group-hover:block absolute text-white w-[220px] px-[25px] py-[20px] top-[70px] z-40 capitalize font-subheadingfont left-[-5px]">
                                    <li class="py-[8px] hover:scale-105"><a href="about.html">About</a></li>
                                    <li class="py-[8px] hover:scale-105"><a href="cart.html">Cart</a></li>
                                    <li class="py-[8px] hover:scale-105"><a href="wishlist.html">Wishlist</a></li>
                                    <li class="py-[8px] hover:scale-105"><a href="checkout.html">Checkout</a></li>
                                    <li class="py-[8px] hover:scale-105"><a href="product.html">Product</a></li>
                                    <li class="py-[8px] hover:scale-105"><a href="singleproduct.html">Single Product</a>
                                    </li>
                                    <li class="py-[8px] hover:scale-105"><a href="order.html">Order</a></li>
                                    <li class="py-[8px] hover:scale-105"><a href="login.html">Login</a></li>
                                    <li class="py-[8px] hover:scale-105"><a href="error.html">404 Error</a></li>
                                </ul>
                            </li>

                            <!-- Blog Menu Item -->
                            <li class="py-[35px] text-blacklight hover:text-black group relative font-subheadingfont ">
                                <a href="#" class="px-[15px] py-[40px] ">Blog</a>

                                <!-- First-level dropdown -->
                                <ul
                                    class="hidden group-hover:block bg-redViolet absolute text-white w-[220px] px-[25px] py-[20px] top-[70px] left-0 capitalize z-40">
                                    <li class="py-[8px] hover:scale-105"><a href="rightSidebar.html">Blog Right
                                            Sidebar</a></li>
                                    <li class="py-[8px] hover:scale-105"><a href="leftSidebar.html">Blog Left
                                            Sidebar</a></li>
                                    <li class="py-[8px] hover:scale-105"><a href="fullwidth.html">Blog Fullwidth</a>
                                    </li>

                                    <!-- Nested dropdown (will only appear when hovering over "Blog Details") -->
                                    <li class="relative py-[8px] hover:scale-105 group/submenu">
                                        <a href="#" class="relative flex items-center justify-between w-full  ">
                                            Blog Details
                                            <i class="fa-solid fa-chevron-right text-[15px] ml-2"></i>
                                        </a>

                                        <!-- Second-level dropdown -->
                                        <ul
                                            class="hidden group-hover/submenu:block bg-redViolet absolute text-white w-[250px] px-[25px] py-[20px] top-0 left-full capitalize z-30 font-subheadingfont">
                                            <li class="py-[8px] hover:scale-105"><a
                                                    href="blog-single-right-sidebar.html">Blog
                                                    Details Right Sidebar</a></li>
                                            <li class="py-[8px] hover:scale-105"><a
                                                    href="blog-single-left-sidebar.html">Blog Details
                                                    Left Sidebar</a></li>
                                            <li class="py-[8px] hover:scale-105"><a
                                                    href="blog-single-fullwidth.html">Blog Details
                                                    Fullwidth</a></li>
                                        </ul>
                                    </li>

                                </ul>
                            </li>

                            <!-- Contact Us Menu Item -->
                            <li class="text-blacklight hover:text-black font-subheadingfont">
                                <a href="contact.html" class="py-[35px] px-[15px]">Contact Us</a>
                            </li>
                        </ul>
                    </Breadcrumbs>
                    <icon class="flex items-center">
                        <!-- Icons -->
                        <div
                            class="md:mx-[5px] mx-[2px] grid md:h-10 md:w-10 h-7 w-7 place-content-center my-[26px] text-white bg-redViolet hover:bg-white hover:text-redViolet rounded-full border hover:border-redViolet">
                            <i class="fa-solid fa-cart-shopping"></i>
                        </div>

                        <div
                            class="md:mx-[5px] mx-[2px] grid md:h-10 md:w-10 h-7 w-7 place-content-center my-[26px] text-white bg-redViolet hover:bg-white hover:text-redViolet rounded-full border hover:border-redViolet">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </div>
                        <a href="login.html">

                            <div
                                class="md:mx-[5px] mx-[2px] grid md:h-10 md:w-10 h-7 w-7 place-content-center my-[26px] text-white bg-redViolet hover:bg-white hover:text-redViolet rounded-full border hover:border-redViolet">
                                <i class="fa-solid fa-user"></i>

                            </div>
                        </a>


                        <!-- Hamburger Icon -->
                        <div class="md:mx-[5px] mx-[2px] md:mb-[5px] mt-[5px] block xl:hidden text-blacklight cursor-pointer"
                            onclick="toggleMenu()">
                            <i class="fa-solid fa-bars md:text-[35px] text-[25px]  text-redViolet" id="hamburger"></i>
                        </div>
                    </icon>

                    <!-- mobile Menubar -->
                    <div id="menu"
                        class="xl:hidden menubar fixed left-[-100%] top-0 bg-redViolet text-white z-40 h-screen w-[100%] text-left transition-all duration-500 ease-linear px-[20px] overflow-auto ">
                        <!-- Close Icon -->
                        <div class="absolute top-[25px] right-[20px] cursor-pointer text-3xl text-white hover:text-gray-300"
                            onclick="toggleMenu()">
                            <i class="fa-solid fa-xmark text-3xl "></i>
                        </div>



                        <ul class="main-menu uppercase text-[20px] mt-[80px] font-headingfont">
                            <!-- Home -->
                            <li class="pb-[15px] group relative hover:scale-105">
                                <div onclick="toggleSubMenu(event, 'submenu-home')">
                                    <a href="index.html">Home</a>
                                    <span id="arrow-home" class="arrow-icon absolute right-0 top-[-1px]">
                                        <i class="fa-solid fa-chevron-right text-[15px]"></i>
                                    </span>
                                </div>
                                <ul id="submenu-home"
                                    class="bg-redViolet text-[16px] text-white px-[15px] pt-[10px] capitalize font-subheadingfont">
                                    <li class="py-[5px] hover:scale-105"><a href="style1.html">Home Style 1</a></li>
                                    <li class="py-[5px] hover:scale-105"><a href="style2.html">Home Style 2</a></li>
                                    <li class="py-[5px] hover:scale-105"><a href="style3.html">Home Style 3</a></li>
                                    <li class="py-[5px] hover:scale-105"><a href="style4.html">Home Style 4</a></li>
                                </ul>
                            </li>

                            <!-- Shop -->
                            <li class="pb-[10px] group relative hover:scale-105"
                                onclick="toggleSubMenu(event, 'submenu-shop')">
                                <a href="#">Shop</a>
                            </li>

                            <!-- Pages -->
                            <li class="py-[10px] group relative hover:scale-105">
                                <div onclick="toggleSubMenu(event, 'submenu-pages')">
                                    <a href="pages.html">Pages</a>
                                    <span id="arrow-pages" class="arrow-icon absolute right-0 top-[8px]">
                                        <i class="fa-solid fa-chevron-right text-[15px]"></i>
                                    </span>
                                </div>
                                <ul id="submenu-pages"
                                    class="bg-redViolet text-[16px] text-white px-[15px] pt-[10px] capitalize font-subheadingfont ">
                                    <li class="py-[5px] hover:scale-105"><a href="about.html">About</a></li>
                                    <li class="py-[5px] hover:scale-105"><a href="cart.html">Cart</a></li>
                                    <li class="py-[5px] hover:scale-105"><a href="wishlist.html">Wishlist</a></li>
                                    <li class="py-[5px] hover:scale-105"><a href="checkout.html">Checkout</a></li>
                                    <li class="py-[5px] hover:scale-105"><a href="product.html">Product</a></li>
                                    <li class="py-[5px] hover:scale-105"><a href="singleproduct.html">Single Product</a>
                                    </li>
                                    <li class="py-[5px] hover:scale-105"><a href="order.html">Order</a></li>
                                    <li class="py-[5px] hover:scale-105"><a href="login.html">Login</a></li>
                                    <li class="py-[5px] hover:scale-105"><a href="error.html">404 Error</a></li>
                                </ul>
                            </li>

                            <!-- Blog -->
                            <li class="pb-[10px] group relative hover:scale-105">
                                <div class="" onclick="toggleSubMenu(event, 'submenu-blog')">
                                    <a href="blog.html">Blog</a>
                                    <span id="arrow-blog" class="arrow-icon absolute right-0 top-[-2px]">
                                        <i class="fa-solid fa-chevron-right text-[15px]"></i>
                                    </span>
                                </div>
                                <ul id="submenu-blog"
                                    class="bg-redViolet text-[16px] text-white px-[15px] pt-[10px] capitalize font-subheadingfont">
                                    <li class="py-[5px] hover:scale-105"><a href="blog-sidebar.html">Blog Sidebar</a>
                                    </li>
                                    <li class="py-[5px] hover:scale-105"><a href="blog-fullwidth.html">Blog
                                            Fullwidth</a></li>
                                    <li class="py-[5px] hover:scale-105 relative">
                                        <div onclick="toggleSubMenue(this)"
                                            class="flex items-center justify-between cursor-pointer">
                                            <a href="#">Blog Details</a>

                                            <span class="arrow-icon ">
                                                <i
                                                    class="fa-solid fa-chevron-right text-[15px] transition-transform duration-300"></i>
                                            </span>
                                        </div>

                                        <!-- Submenu -->
                                        <ul
                                            class="submenu opacity-0 max-h-0 overflow-hidden transition-all duration-300 bg-redViolet text-white w-[250px] px-[25px]   capitalize z-30 font-subheadingfont">
                                            <li class="py-[4px] pt-[15px] hover:scale-105">
                                                <a href="blog-single-right-sidebar.html">Blog Details Right Sidebar</a>
                                            </li>
                                            <li class="py-[4px] hover:scale-105">
                                                <a href="blog-single-left-sidebar.html">Blog Details Left Sidebar</a>
                                            </li>
                                            <li class="py-[4px] hover:scale-105">
                                                <a href="blog-single-fullwidth.html">Blog Details Fullwidth</a>
                                            </li>
                                        </ul>
                                    </li>





                                </ul>
                            </li>

                            <!-- Contact Us -->
                            <li class="pb-[10px] hover:text-gray-300 hover:scale-105">
                                <a href="contact.html">Contact Us</a>
                            </li>
                        </ul>
                    </div>



                </navbar>

                <!-- navbar end  -->

                <section>
                    <div class=" w-[100%] relative ">
                        <div class="xs:w-[85%] lg:w-[55%] ">
                            <div class=" xs:pl-[13%] xs:pt-[30px] lg:pl-[30%] lg:pt-[12%]">
                                <h1
                                    class="xs:text-[30px] sm:text-[40px] xl:text-[50px] text-black font-headingfont font-bold">
                                    Sneakers
                                    For Men
                                </h1>
                                <p class="text-[20px] leading-8 text-blacklight font-subheadingfont">Lorem ipsum dolor
                                    sit amet
                                    consectetur adipisicing
                                    elit.
                                    Magni vitae
                                    ea nam nisi enim,
                                    quasi
                                    repellat quia minima eum hic accusantium optio? Error tempora quos numquam fugiat
                                    excepturi,
                                    vel
                                    debitis?</p>
                                <div class="mt-10">
                                    <a href=""
                                        class="xs:px-4 xs:py-3 lg:px-10 lg:py-4 bg-snow rounded text-blacklight hover:bg-redViolet mr-3 hover:text-white text-[16px] md:text-[20px] border border-redViolet ">40%
                                        Off</a>
                                    <a href="" class="xs:px-4 xs:py-3 lg:px-8 lg:py-4 bg-redViolet rounded text-white hover:bg-snow
                                        hover:text-redViolet text-[16px] md:text-[20px] hover:border border-redViolet">
                                        Shop Now</a>
                                </div>

                            </div>

                        </div>

                        <div class="absolute sm:right-[30px] xl:right-0  lg:w-[45%] top-10 xs:hidden lg:block">
                            <div
                                class="bg-white xs:h-[300px] xs:w-[300px] md:h-[350px] md:w-[350px] xl:h-[450px] xl:w-[450px]  rounded-full outline  outline-redViolet outline-offset-[20px] mt-[70px] absolute md:left-[90px] md:top-[-50px] ">

                            </div>
                            <img src="{{asset('assets/images/8.png')}}" alt="there is an image"
                                class="  md:w-[500px] md:h-[500px] xl:w-[600px] xl:h-[600px] md:object-cover absolute md:left-[-100px] md:top-[-70px]">
                        </div>



                    </div>

                </section>
            </header>
        </div>
        <!-- header end -->

        <!-- New Arraival start-->

        <div class="max-w-[100%] bg-white  mx-auto ">
            <div class="text-center lg:pt-[70px] md:pt-[50px] xs:pt-[30px]">
                <h1 class="text-[30px] md:text-[40px] text-black font-headingfont font-bold">New Arraival</h1>
                <p class="text-blacklight text-[16px] md:text-[18px] xs:px-[10px] md:px-0 font-subheadingfont">Here is
                    our new arraival
                    products that you may
                    like.</p>
                <div class="border border-b-[2px] border-redViolet  w-[100px] mx-auto my-4"></div>
            </div>

            <div class=" py-[50px] w-[78%] mx-auto ">
                <div class="grid lg:grid-cols-4 md:grid-cols-2 xs:grid-cols-1 xl:gap-[25px] gap-[18px]">
                    <div class="group">
                        <div
                            class=" xs:pb-[450px] sm:pb-[400px]  lg:pb-[350px]  px-[20px] bg-center bg-no-repeat bg-cover relative " style="background-image: url('{{ asset('assets/images/1.jpg') }}')">
                            <i
                                class="fa-regular fa-heart text-[30px] absolute right-6 top-7 text-blacklight cursor-pointer">
                            </i>

                            <div class="hidden group-hover:block duration-[2s]">

                                <div
                                    class="text-[18px] absolute xl:bottom-[90px] xl:left-[70px] md:bottom-[90px] md:left-[50px] lg:bottom-[90px] lg:left-[60px] xs:bottom-[30px] xs:left-[30px]  text-white">

                                    <i
                                        class="fa-solid fa-cart-shopping bg-black p-2 hover:bg-redViolet cursor-pointer"></i>


                                    <i
                                        class="fa-solid fa-magnifying-glass bg-black p-2 hover:bg-redViolet cursor-pointer"></i>


                                    <i class="fa-solid fa-user bg-black p-2 hover:bg-redViolet cursor-pointer"></i>


                                </div>



                                <a href=""
                                    class="xs:px-4 xs:py-2 lg:px-5 lg:py-3 hover:bg-redViolet rounded text-black bg-snow
                                  hover:text-white text-[20px] absolute xl:bottom-[30px] xl:left-[60px] md:bottom-[30px] md:left-[37px] lg:bottom-[30px] lg:left-[45px] xs:bottom-[30px] xs:left-[30px] ">
                                    Shop Now</a>
                            </div>
                        </div>
                        <div class="text-center  font-bold">
                            <h1 class="font-headingfont text-[20px]  text-black pt-[20px]">Long Sleeve Tops
                            </h1>
                            <div class="mt-[5px] font-subheadingfont">
                                <span class="text-blacklight text-[18px] pr-[20px]  line-through">$85.50 </span>
                                <span class="text-redViolet text-[18px] ">$70.30</span>
                            </div>
                        </div>
                    </div>

                    <div class="group">
                        <div
                            class=" xs:pb-[450px] sm:pb-[400px]  lg:pb-[350px] px-[20px] bg-center bg-no-repeat bg-cover relative" style="background-image: url('{{ asset('assets/images/2img.jpg') }}')">
                            <i
                                class="fa-regular fa-heart text-[30px] absolute right-6 top-7 text-blacklight cursor-pointer "></i>

                            <div class="hidden group-hover:block duration-[2s]">

                                <div
                                    class="text-[18px] absolute xl:bottom-[90px] xl:left-[70px] md:bottom-[90px] md:left-[50px] lg:bottom-[90px] lg:left-[60px] xs:bottom-[30px] xs:left-[30px]  text-white">

                                    <i
                                        class="fa-solid fa-cart-shopping bg-black p-2 hover:bg-redViolet cursor-pointer"></i>


                                    <i
                                        class="fa-solid fa-magnifying-glass bg-black p-2 hover:bg-redViolet cursor-pointer"></i>


                                    <i class="fa-solid fa-user bg-black p-2 hover:bg-redViolet cursor-pointer"></i>


                                </div>



                                <a href=""
                                    class="xs:px-4 xs:py-2 lg:px-5 lg:py-3 hover:bg-redViolet rounded text-black bg-snow
                                  hover:text-white text-[20px] absolute xl:bottom-[30px] xl:left-[60px] md:bottom-[30px] md:left-[37px] lg:bottom-[30px] lg:left-[45px] xs:bottom-[30px] xs:left-[30px]">
                                    Shop Now</a>
                            </div>
                        </div>
                        <div class="text-center font-subheadingfont font-bold">
                            <h1 class="font-headingfont text-[20px] font-bold text-black pt-[20px]">White Wedding Shoe
                            </h1>
                            <div class="mt-[5px]">
                                <span class="text-blacklight text-[18px] pr-[20px]  line-through">$150.20 </span>
                                <span class="text-redViolet text-[18px] ">$120.50</span>
                            </div>
                        </div>
                    </div>
                    <div class="group">
                        <div
                            class=" xs:pb-[450px] sm:pb-[400px]  lg:pb-[350px] px-[20px] bg-center bg-no-repeat bg-cover relative" style="background-image: url('{{ asset('assets/images/3img.jpg') }}')">
                            <i
                                class="fa-regular fa-heart text-[30px] absolute right-6 top-7 text-blacklight cursor-pointer"></i>

                            <div class="hidden group-hover:block duration-[2s]">

                                <div
                                    class="text-[18px] absolute xl:bottom-[90px] xl:left-[70px] md:bottom-[90px] md:left-[50px] lg:bottom-[90px] lg:left-[60px] xs:bottom-[30px] xs:left-[30px]  text-white">

                                    <i
                                        class="fa-solid fa-cart-shopping bg-black p-2 hover:bg-redViolet cursor-pointer"></i>


                                    <i
                                        class="fa-solid fa-magnifying-glass bg-black p-2 hover:bg-redViolet cursor-pointer"></i>


                                    <i class="fa-solid fa-user bg-black p-2 hover:bg-redViolet cursor-pointer"></i>


                                </div>



                                <a href=""
                                    class="xs:px-4 xs:py-2 lg:px-5 lg:py-3 hover:bg-redViolet rounded text-black bg-snow
                                  hover:text-white text-[20px] absolute xl:bottom-[30px] xl:left-[60px] md:bottom-[30px] md:left-[37px] lg:bottom-[30px] lg:left-[45px] xs:bottom-[30px] xs:left-[30px]">
                                    Shop Now</a>
                            </div>
                        </div>
                        <div class="text-center font-subheadingfont font-bold">
                            <h1 class="font-headingfont text-[20px] font-bold text-black pt-[20px]">Long Chain With
                                Lockel</h1>
                            <div class="mt-[5px]">
                                <span class="text-blacklight text-[18px] pr-[20px]  line-through">$85.50 </span>
                                <span class="text-redViolet text-[18px] ">$70.30</span>
                            </div>
                        </div>
                    </div>

                    <div class="group">
                        <div
                            class="  xs:pb-[450px] sm:pb-[400px]  lg:pb-[350px] px-[20px] bg-center bg-no-repeat bg-cover relative" style="background-image: url('{{ asset('assets/images/4img.jpg') }}')">
                            <i
                                class="fa-regular fa-heart text-[30px] absolute right-6 top-7 text-blacklight cursor-pointer"></i>

                            <div class="hidden group-hover:block duration-[2s]">

                                <div
                                    class="text-[18px] absolute xl:bottom-[90px] xl:left-[70px] md:bottom-[90px] md:left-[50px] lg:bottom-[90px] lg:left-[60px] xs:bottom-[30px] xs:left-[30px]  text-white">

                                    <i
                                        class="fa-solid fa-cart-shopping bg-black p-2 hover:bg-redViolet cursor-pointer"></i>


                                    <i
                                        class="fa-solid fa-magnifying-glass bg-black p-2 hover:bg-redViolet cursor-pointer"></i>


                                    <i class="fa-solid fa-user bg-black p-2 hover:bg-redViolet cursor-pointer"></i>


                                </div>



                                <a href=""
                                    class="xs:px-4 xs:py-2 lg:px-5 lg:py-3 hover:bg-redViolet rounded text-black bg-snow
                                  hover:text-white text-[20px] absolute xl:bottom-[30px] xl:left-[60px] md:bottom-[30px] md:left-[37px] lg:bottom-[30px] lg:left-[45px] xs:bottom-[30px] xs:left-[30px]">
                                    Shop Now</a>
                            </div>
                        </div>
                        <div class="text-center font-subheadingfont font-bold">
                            <h1 class="font-headingfont text-[20px] font-bold text-black pt-[20px]">Winter Jacket</h1>
                            <div class="mt-[5px]">
                                <span class="text-blacklight text-[18px] pr-[20px]  line-through">$100.50 </span>
                                <span class="text-redViolet text-[18px] ">$80.30</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- New Arraival end -->

        <!-- Stylish casual start -->


        <div class="max-w-[100%] bg-white  lg:mt-[70px] md:mt-[50px] xs:mt-[30px] ">
            <div class=" w-[78%] mx-auto  ">
                <div
                    class=" xs:pb-[500px] md:pb-[500px] lg:pb-[450px] px-[20px] bg-center bg-no-repeat bg-cover relative" style="background-image: url('{{ asset('assets/images/banner-bg.jpg') }}')">
                    <div
                        class=" max-w-[550px] text-center absolute lg:top-[130px] lg:left-[80px] top-[100px] left-[60px]">
                        <p class="text-[35px] lg:text-[50px] font-headingfont font-bold text-black">Stylish casual
                        </p>
                        <p class="text-[35px] lg:text-[50px] font-headingfont font-bold text-black"> sweater & sneakers
                        </p>
                        <p
                            class="sm:text-20px text-[15px] text-blacklight font-bold tracking-[5px] font-subheadingfont">
                            Beautiful,
                            Fashionable and
                            Stylish</p>
                        <div>
                            <a href="" class="text-redViolet underline mt-3 font-subheadingfont"> Shop now</a>
                        </div>

                    </div>

                </div>
            </div>

        </div>

        <!-- Stylish casual end -->

        <!-- Popular Products start-->

        <div class="max-w-[100%] bg-snow  mx-auto ">
            <div class="text-center lg:pt-[70px] md:pt-[50px] xs:pt-[30px]">
                <h1 class="text-[30px] md:text-[40px] text-black font-headingfont font-bold">Popular Products</h1>
                <p class="text-blacklight text-[16px] md:text-[18px] xs:px-[10px] md:px-0 font-subheadingfont">Here is
                    our new arraival
                    products that you may like.</p>
                <div class="border border-b-[2px] border-redViolet border-[solid] w-[100px] mx-auto my-4"></div>
            </div>

            <div class="text-center text-[20px] text-blacklight mx-auto">
                <ul class=" md:flex  justify-center gap-[20px] font-headingfont">
                    <li><a href="" class="text-redViolet">All Products</a></li>
                    <li><a href="">Men</a></li>
                    <li><a href="">Women</a></li>
                    <li><a href="">Kids</a></li>
                    <li><a href="">Sales</a></li>
                    <li><a href="">Offers</a></li>


                </ul>
            </div>

            <div class=" py-[50px] w-[78%] mx-auto ">
                <div class="grid lg:grid-cols-4 md:grid-cols-2 xs:grid-cols-1 xl:gap-[25px] gap-[18px] ">
                    <div class="group">
                     <div
                          class="xs:pb-[450px] sm:pb-[400px] lg:pb-[350px] px-[20px] bg-center bg-no-repeat bg-cover relative"
                              style="background-image: url('{{ asset('assets/images/1img.jpg') }}')">
                            <i
                                class="fa-regular fa-heart text-[30px] absolute right-6 top-7 text-blacklight  cursor-pointer"></i>

                            <div class="hidden group-hover:block duration-[2s]">

                                <div
                                    class="text-[18px] absolute xl:bottom-[90px] xl:left-[70px] md:bottom-[90px] md:left-[50px] lg:bottom-[90px] lg:left-[60px] xs:bottom-[30px] xs:left-[30px]  text-white">

                                    <i
                                        class="fa-solid fa-cart-shopping bg-black p-2 hover:bg-redViolet cursor-pointer"></i>


                                    <i
                                        class="fa-solid fa-magnifying-glass bg-black p-2 hover:bg-redViolet cursor-pointer"></i>


                                    <i class="fa-solid fa-user bg-black p-2 hover:bg-redViolet cursor-pointer"></i>


                                </div>



                                <a href=""
                                    class="xs:px-4 xs:py-2 lg:px-5 lg:py-3 hover:bg-redViolet rounded text-black bg-snow
                                  hover:text-white text-[20px] absolute xl:bottom-[30px] xl:left-[60px] md:bottom-[30px] md:left-[37px] lg:bottom-[30px] lg:left-[45px] xs:bottom-[30px] xs:left-[30px]">
                                    Shop Now</a>
                            </div>
                        </div>
                        <div class="text-center font-subheadingfont font-bold">
                            <h1 class="font-headingfont text-[20px] font-bold text-black pt-[20px]">Long Sleeve Tops
                            </h1>
                            <div class="mt-[5px]">
                                <span class="text-blacklight text-[18px] pr-[20px]  line-through">$85.50 </span>
                                <span class="text-redViolet text-[18px] ">$70.30</span>
                            </div>
                        </div>
                    </div>

                    <div class="group">
                        <div
                            class="xs:pb-[450px] sm:pb-[400px]  lg:pb-[350px] px-[20px] bg-center bg-no-repeat bg-cover relative" style="background-image: url('{{ asset('assets/images/2img.jpg') }}')">
                            <i
                                class="fa-regular fa-heart text-[30px] absolute right-6 top-7 text-blacklight cursor-pointer"></i>

                            <div class="hidden group-hover:block duration-[2s]">

                                <div
                                    class="text-[18px] absolute xl:bottom-[90px] xl:left-[70px] md:bottom-[90px] md:left-[50px] lg:bottom-[90px] lg:left-[60px] xs:bottom-[30px] xs:left-[30px]  text-white">

                                    <i
                                        class="fa-solid fa-cart-shopping bg-black p-2 hover:bg-redViolet cursor-pointer"></i>


                                    <i
                                        class="fa-solid fa-magnifying-glass bg-black p-2 hover:bg-redViolet cursor-pointer"></i>


                                    <i class="fa-solid fa-user bg-black p-2 hover:bg-redViolet cursor-pointer"></i>


                                </div>



                                <a href=""
                                    class="xs:px-4 xs:py-2 lg:px-5 lg:py-3 hover:bg-redViolet rounded text-black bg-snow
                                  hover:text-white text-[20px] absolute xl:bottom-[30px] xl:left-[60px] md:bottom-[30px] md:left-[37px] lg:bottom-[30px] lg:left-[45px] xs:bottom-[30px] xs:left-[30px]">
                                    Shop Now</a>
                            </div>
                        </div>
                        <div class="text-center font-subheadingfont font-bold">
                            <h1 class="font-headingfont text-[20px] font-bold text-black pt-[20px]">White Wedding Shoe
                            </h1>
                            <div class="mt-[5px]">
                                <span class="text-blacklight text-[18px] pr-[20px]  line-through">$150.20 </span>
                                <span class="text-redViolet text-[18px] ">$120.50</span>
                            </div>
                        </div>
                    </div>
                    <div class="group">
                        <div
                            class=" xs:pb-[450px] sm:pb-[400px]  lg:pb-[350px] px-[20px] bg-center bg-no-repeat bg-cover relative" style="background-image: url('{{ asset('assets/images/3img.jpg') }}')">
                            <i
                                class="fa-regular fa-heart text-[30px] absolute right-6 top-7 text-blacklight cursor-pointer"></i>

                            <div class="hidden group-hover:block duration-[2s]">

                                <div
                                    class="text-[18px] absolute xl:bottom-[90px] xl:left-[70px] md:bottom-[90px] md:left-[50px] lg:bottom-[90px] lg:left-[60px] xs:bottom-[30px] xs:left-[30px]  text-white">

                                    <i
                                        class="fa-solid fa-cart-shopping bg-black p-2 hover:bg-redViolet cursor-pointer"></i>


                                    <i
                                        class="fa-solid fa-magnifying-glass bg-black p-2 hover:bg-redViolet cursor-pointer"></i>


                                    <i class="fa-solid fa-user bg-black p-2 hover:bg-redViolet cursor-pointer"></i>


                                </div>



                                <a href=""
                                    class="xs:px-4 xs:py-2 lg:px-5 lg:py-3 hover:bg-redViolet rounded text-black bg-snow
                                  hover:text-white text-[20px] absolute xl:bottom-[30px] xl:left-[60px] md:bottom-[30px] md:left-[37px] lg:bottom-[30px] lg:left-[45px] xs:bottom-[30px] xs:left-[30px]">
                                    Shop Now</a>
                            </div>
                        </div>
                        <div class="text-center font-subheadingfont font-bold">
                            <h1 class="font-headingfont text-[20px] font-bold text-black pt-[20px]">Long Chain With
                                Lockel</h1>
                            <div class="mt-[5px]">
                                <span class="text-blacklight text-[18px] pr-[20px]  line-through">$85.50 </span>
                                <span class="text-redViolet text-[18px] ">$70.30</span>
                            </div>
                        </div>
                    </div>

                    <div class="group">
                        <div
                            class=" xs:pb-[450px] sm:pb-[400px]  lg:pb-[350px] px-[20px] bg-center bg-no-repeat bg-cover relative" style="background-image: url('{{ asset('assets/images/4.jpg') }}')">
                            <i
                                class="fa-regular fa-heart text-[30px] absolute right-6 top-7 text-blacklight cursor-pointer"></i>

                            <div class="hidden group-hover:block duration-[2s]">

                                <div
                                    class="text-[18px] absolute xl:bottom-[90px] xl:left-[70px] md:bottom-[90px] md:left-[50px] lg:bottom-[90px] lg:left-[60px] xs:bottom-[30px] xs:left-[30px]  text-white">

                                    <i
                                        class="fa-solid fa-cart-shopping bg-black p-2 hover:bg-redViolet cursor-pointer"></i>


                                    <i
                                        class="fa-solid fa-magnifying-glass bg-black p-2 hover:bg-redViolet cursor-pointer"></i>


                                    <i class="fa-solid fa-user bg-black p-2 hover:bg-redViolet cursor-pointer"></i>


                                </div>



                                <a href=""
                                    class="xs:px-4 xs:py-2 lg:px-5 lg:py-3 hover:bg-redViolet rounded text-black bg-snow
                                  hover:text-white text-[20px] absolute xl:bottom-[30px] xl:left-[60px] md:bottom-[30px] md:left-[37px] lg:bottom-[30px] lg:left-[45px] xs:bottom-[30px] xs:left-[30px]">
                                    Shop Now</a>
                            </div>
                        </div>
                        <div class="text-center font-subheadingfont font-bold">
                            <h1 class="font-headingfont text-[20px] font-bold text-black pt-[20px]">Winter Jacket</h1>
                            <div class="mt-[5px]">
                                <span class="text-blacklight text-[18px] pr-[20px]  line-through">$100.50 </span>
                                <span class="text-redViolet text-[18px] ">$80.30</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid lg:grid-cols-4 md:grid-cols-2 xs:grid-cols-1 xl:gap-[25px] gap-[18px] mt-[45px]">
                    <div class="group">
                        <div
                            class=" xs:pb-[450px] sm:pb-[400px]  lg:pb-[350px] px-[20px] bg-center bg-no-repeat bg-cover relative" style="background-image: url('{{ asset('assets/images/5.jpg') }}')">
                            <i
                                class="fa-regular fa-heart text-[30px] absolute right-6 top-7 text-blacklight cursor-pointer "></i>

                            <div class="hidden group-hover:block duration-[2s]">

                                <div
                                    class="text-[18px] absolute xl:bottom-[90px] xl:left-[70px] md:bottom-[90px] md:left-[50px] lg:bottom-[90px] lg:left-[60px] xs:bottom-[30px] xs:left-[30px]  text-white">

                                    <i
                                        class="fa-solid fa-cart-shopping bg-black p-2 hover:bg-redViolet cursor-pointer"></i>


                                    <i
                                        class="fa-solid fa-magnifying-glass bg-black p-2 hover:bg-redViolet cursor-pointer"></i>


                                    <i class="fa-solid fa-user bg-black p-2 hover:bg-redViolet cursor-pointer"></i>


                                </div>



                                <a href=""
                                    class="xs:px-4 xs:py-2 lg:px-5 lg:py-3 hover:bg-redViolet rounded text-black bg-snow
                                  hover:text-white text-[20px] absolute xl:bottom-[30px] xl:left-[60px] md:bottom-[30px] md:left-[37px] lg:bottom-[30px] lg:left-[45px] xs:bottom-[30px] xs:left-[30px]">
                                    Shop Now</a>
                            </div>
                        </div>
                        <div class="text-center font-subheadingfont font-bold">
                            <h1 class="font-headingfont text-[20px] font-bold text-black pt-[20px]">Long Sleeve Tops
                            </h1>
                            <div class="mt-[5px]">
                                <span class="text-blacklight text-[18px] pr-[20px]  line-through">$85.50 </span>
                                <span class="text-redViolet text-[18px] ">$70.30</span>
                            </div>
                        </div>
                    </div>

                    <div class="group">
                        <div
                            class="xs:pb-[450px] sm:pb-[400px]  lg:pb-[350px] px-[20px] bg-center bg-no-repeat bg-cover relative" style="background-image: url('{{ asset('assets/images/6.jpg') }}')">
                            <i
                                class="fa-regular fa-heart text-[30px] absolute right-6 top-7 text-blacklight cursor-pointer "></i>

                            <div class="hidden group-hover:block duration-[2s]">

                                <div
                                    class="text-[18px] absolute xl:bottom-[90px] xl:left-[70px] md:bottom-[90px] md:left-[50px] lg:bottom-[90px] lg:left-[60px] xs:bottom-[30px] xs:left-[30px]  text-white">

                                    <i
                                        class="fa-solid fa-cart-shopping bg-black p-2 hover:bg-redViolet cursor-pointer"></i>


                                    <i
                                        class="fa-solid fa-magnifying-glass bg-black p-2 hover:bg-redViolet cursor-pointer"></i>


                                    <i class="fa-solid fa-user bg-black p-2 hover:bg-redViolet cursor-pointer"></i>


                                </div>



                                <a href=""
                                    class="xs:px-4 xs:py-2 lg:px-5 lg:py-3 hover:bg-redViolet rounded text-black bg-snow
                                  hover:text-white text-[20px] absolute xl:bottom-[30px] xl:left-[60px] md:bottom-[30px] md:left-[37px] lg:bottom-[30px] lg:left-[45px] xs:bottom-[30px] xs:left-[30px]">
                                    Shop Now</a>
                            </div>
                        </div>
                        <div class="text-center font-subheadingfont font-bold">
                            <h1 class="font-headingfont text-[20px] font-bold text-black pt-[20px]">White Wedding Shoe
                            </h1>
                            <div class="mt-[5px]">
                                <span class="text-blacklight text-[18px] pr-[20px]  line-through">$150.20 </span>
                                <span class="text-redViolet text-[18px] ">$120.50</span>
                            </div>
                        </div>
                    </div>
                    <div class="group">
                        <div
                            class=" xs:pb-[450px] sm:pb-[400px]  lg:pb-[350px] px-[20px] bg-center bg-no-repeat bg-cover relative" style="background-image: url('{{ asset('assets/images/7.jpg') }}')">
                            <i
                                class="fa-regular fa-heart text-[30px] absolute right-6 top-7 text-blacklight cursor-pointer "></i>

                            <div class="hidden group-hover:block duration-[2s]">

                                <div
                                    class="text-[18px] absolute xl:bottom-[90px] xl:left-[70px] md:bottom-[90px] md:left-[50px] lg:bottom-[90px] lg:left-[60px] xs:bottom-[30px] xs:left-[30px]  text-white">

                                    <i
                                        class="fa-solid fa-cart-shopping bg-black p-2 hover:bg-redViolet cursor-pointer"></i>


                                    <i
                                        class="fa-solid fa-magnifying-glass bg-black p-2 hover:bg-redViolet cursor-pointer"></i>


                                    <i class="fa-solid fa-user bg-black p-2 hover:bg-redViolet cursor-pointer"></i>


                                </div>



                                <a href=""
                                    class="xs:px-4 xs:py-2 lg:px-5 lg:py-3 hover:bg-redViolet rounded text-black bg-snow
                                  hover:text-white text-[20px] absolute xl:bottom-[30px] xl:left-[60px] md:bottom-[30px] md:left-[37px] lg:bottom-[30px] lg:left-[45px] xs:bottom-[30px] xs:left-[30px]">
                                    Shop Now</a>
                            </div>
                        </div>
                        <div class="text-center font-subheadingfont font-bold">
                            <h1 class="font-headingfont text-[20px] font-bold text-black pt-[20px]">Long Chain With
                                Lockel</h1>
                            <div class="mt-[5px]">
                                <span class="text-blacklight text-[18px] pr-[20px]  line-through">$85.50 </span>
                                <span class="text-redViolet text-[18px] ">$70.30</span>
                            </div>
                        </div>
                    </div>

                    <div class="group">
                        <div
                            class=" xs:pb-[450px] sm:pb-[400px]  lg:pb-[350px] px-[20px] bg-center bg-no-repeat bg-cover relative" style="background-image: url('{{ asset('assets/images/8.jpg') }}')">
                            <i
                                class="fa-regular fa-heart text-[30px] absolute right-6 top-7 text-blacklight cursor-pointer"></i>

                            <div class="hidden group-hover:block duration-[2s]">

                                <div
                                    class="text-[18px] absolute xl:bottom-[90px] xl:left-[70px] md:bottom-[90px] md:left-[50px] lg:bottom-[90px] lg:left-[60px] xs:bottom-[30px] xs:left-[30px]  text-white">

                                    <i
                                        class="fa-solid fa-cart-shopping bg-black p-2 hover:bg-redViolet cursor-pointer"></i>


                                    <i
                                        class="fa-solid fa-magnifying-glass bg-black p-2 hover:bg-redViolet cursor-pointer"></i>


                                    <i class="fa-solid fa-user bg-black p-2 hover:bg-redViolet cursor-pointer"></i>


                                </div>



                                <a href=""
                                    class="xs:px-4 xs:py-2 lg:px-5 lg:py-3 hover:bg-redViolet rounded text-black bg-snow
                                  hover:text-white text-[20px] absolute xl:bottom-[30px] xl:left-[60px] md:bottom-[30px] md:left-[37px] lg:bottom-[30px] lg:left-[45px] xs:bottom-[30px] xs:left-[30px]">
                                    Shop Now</a>
                            </div>
                        </div>
                        <div class="text-center font-subheadingfont font-bold">
                            <h1 class="font-headingfont text-[20px] font-bold text-black pt-[20px]">Winter Jacket</h1>
                            <div class="mt-[5px]">
                                <span class="text-blacklight text-[18px] pr-[20px]  line-through">$100.50 </span>
                                <span class="text-redViolet text-[18px] ">$80.30</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Popular Products end-->

        <section>
            <div class="mx-w-[100%] mt-[100px] bg-snow">
                <!-- Winter Sale start -->

                <div class="grid lg:grid-cols-2 xs:grid-cols-1  w-[78%] mx-auto gap-[22px]">
                    <div
                        class=" xs:pb-[450px] sm:pb-[400px]  lg:pb-[350px]  bg-top bg-cover relative" style="background-image: url('{{ asset('assets/images/lookbook.jpg') }}')">
                        <div class="absolute right-[25px] bottom-[40px] text-white text-right">
                            <h1 class=" xs:text-[25px] md:text-[35px] font-bold  mb-[5px] font-headingfont">LOOKBOOK
                                2023</h1>
                            <p class="text-[18px] leading-[21px] mb-[14px] font-subheadingfont font-bold ">Best
                                fasionable brand
                                in
                                the world
                            </p>
                            <button
                                class="px-7 bg-white text-redViolet hover:text-white hover:bg-redViolet py-4 font-bold rounded font-headingfont text-[15px] sm:text-[22px]">View
                                Collection</button>

                        </div>

                    </div>
                    <div
                        class=" xs:pb-[450px] sm:pb-[400px]  lg:pb-[350px]  bg-top bg-cover relative" style="background-image: url('{{ asset('assets/images/winter.jpg') }}')">
                        <div class="absolute left-[25px] top-[40px]  text-white">
                            <p class="font-subheadingfont font-bold text-[20px] leading-[25px]">Winter Sale</p>
                            <h1 class="font-headingfont font-bold text-[40px] mb-[5px]  leading-[51px]">UP TO 70% OFF
                            </h1>
                            <button
                                class="px-7 text-white bg-redViolet hover:bg-white hover:text-redViolet py-3 font-bold rounded font-headingfont text-[15px] sm:text-[22px]">Shop
                                Now</button>

                        </div>
                    </div>
                </div>
                <!-- Winter Sale end -->

                <!-- Best Seller start-->

                <div class="max-w-[100%]   mx-auto ">
                    <div class="text-center lg:pt-[60px] md:pt-[50px] xs:pt-[30px]">
                        <h1 class="text-[30px] md:text-[40px] text-black font-headingfont font-bold">Best Seller</h1>
                        <p class="text-blacklight text-[16px] md:text-[18px] xs:px-[10px] md:px-0 font-subheadingfont">
                            Top sale in
                            this week
                            and this season..</p>
                        <div class="border border-b-[2px] border-redViolet border-[solid] w-[100px] mx-auto my-4"></div>
                    </div>

                    <div class=" pt-[30px] w-[78%] mx-auto ">
                        <div class="grid lg:grid-cols-4 md:grid-cols-2 xs:grid-cols-1 xl:gap-[25px] gap-[18px]">
                            <div class="group">
                                <div
                                    class=" xs:pb-[450px] sm:pb-[400px]  lg:pb-[350px] px-[20px] bg-center bg-no-repeat bg-cover relative" style="background-image: url('{{ asset('assets/images/img-1.jpg') }}')">
                                    <i
                                        class="fa-regular fa-heart text-[30px] absolute right-6 top-7 text-blacklight  cursor-pointer"></i>

                                    <div class="hidden group-hover:block duration-[2s]">

                                        <div
                                            class="text-[18px] absolute xl:bottom-[90px] xl:left-[70px] md:bottom-[90px] md:left-[50px] lg:bottom-[90px] lg:left-[60px] xs:bottom-[30px] xs:left-[30px]  text-white">

                                            <i
                                                class="fa-solid fa-cart-shopping bg-black p-2 hover:bg-redViolet cursor-pointer"></i>


                                            <i
                                                class="fa-solid fa-magnifying-glass bg-black p-2 hover:bg-redViolet cursor-pointer"></i>


                                            <i
                                                class="fa-solid fa-user bg-black p-2 hover:bg-redViolet cursor-pointer"></i>


                                        </div>



                                        <a href=""
                                            class="xs:px-4 xs:py-2 lg:px-5 lg:py-3 hover:bg-redViolet rounded text-black bg-snow
                                          hover:text-white text-[20px] absolute xl:bottom-[30px] xl:left-[60px] md:bottom-[30px] md:left-[37px] lg:bottom-[30px] lg:left-[45px] xs:bottom-[30px] xs:left-[30px]">
                                            Shop Now</a>
                                    </div>
                                </div>
                                <div class="text-center font-subheadingfont font-bold">
                                    <h1 class="font-headingfont text-[20px] font-bold text-black pt-[20px]">Long Sleeve
                                        Tops
                                    </h1>
                                    <div class="mt-[5px]">
                                        <span class="text-blacklight text-[18px] pr-[20px]  line-through">$85.50 </span>
                                        <span class="text-redViolet text-[18px] ">$70.30</span>
                                    </div>
                                </div>
                            </div>

                            <div class="group">
                                <div
                                    class=" xs:pb-[450px] sm:pb-[400px]  lg:pb-[350px] px-[20px] bg-center bg-no-repeat bg-cover relative" style="background-image: url('{{ asset('assets/images/img-2.jpg') }}')">
                                    <i
                                        class="fa-regular fa-heart text-[30px] absolute right-6 top-7 text-blacklight cursor-pointer "></i>

                                    <div class="hidden group-hover:block duration-[2s]">

                                        <div
                                            class="text-[18px] absolute xl:bottom-[90px] xl:left-[70px] md:bottom-[90px] md:left-[50px] lg:bottom-[90px] lg:left-[60px] xs:bottom-[30px] xs:left-[30px]  text-white">

                                            <i
                                                class="fa-solid fa-cart-shopping bg-black p-2 hover:bg-redViolet cursor-pointer"></i>


                                            <i
                                                class="fa-solid fa-magnifying-glass bg-black p-2 hover:bg-redViolet cursor-pointer"></i>


                                            <i
                                                class="fa-solid fa-user bg-black p-2 hover:bg-redViolet cursor-pointer"></i>


                                        </div>



                                        <a href=""
                                            class="xs:px-4 xs:py-2 lg:px-5 lg:py-3 hover:bg-redViolet rounded text-black bg-snow
                                          hover:text-white text-[20px] absolute xl:bottom-[30px] xl:left-[60px] md:bottom-[30px] md:left-[37px] lg:bottom-[30px] lg:left-[45px] xs:bottom-[30px] xs:left-[30px]">
                                            Shop Now</a>
                                    </div>
                                </div>
                                <div class="text-center font-subheadingfont font-bold">
                                    <h1 class="font-headingfont text-[20px] font-bold text-black pt-[20px]">White
                                        Wedding Shoe
                                    </h1>
                                    <div class="mt-[5px]">
                                        <span class="text-blacklight text-[18px] pr-[20px]  line-through">$150.20
                                        </span>
                                        <span class="text-redViolet text-[18px] ">$120.50</span>
                                    </div>
                                </div>
                            </div>
                            <div class="group">
                                <div
                                    class=" xs:pb-[450px] sm:pb-[400px]  lg:pb-[350px] px-[20px] bg-center bg-no-repeat bg-cover relative" style="background-image: url('{{ asset('assets/images/img-3.jpg') }}')">
                                    <i
                                        class="fa-regular fa-heart text-[30px] absolute right-6 top-7 text-blacklight cursor-pointer"></i>

                                    <div class="hidden group-hover:block duration-[2s]">

                                        <div
                                            class="text-[18px] absolute xl:bottom-[90px] xl:left-[70px] md:bottom-[90px] md:left-[50px] lg:bottom-[90px] lg:left-[60px] xs:bottom-[30px] xs:left-[30px]  text-white">

                                            <i
                                                class="fa-solid fa-cart-shopping bg-black p-2 hover:bg-redViolet cursor-pointer"></i>


                                            <i
                                                class="fa-solid fa-magnifying-glass bg-black p-2 hover:bg-redViolet cursor-pointer"></i>


                                            <i
                                                class="fa-solid fa-user bg-black p-2 hover:bg-redViolet cursor-pointer"></i>


                                        </div>



                                        <a href=""
                                            class="xs:px-4 xs:py-2 lg:px-5 lg:py-3 hover:bg-redViolet rounded text-black bg-snow
                                          hover:text-white text-[20px] absolute xl:bottom-[30px] xl:left-[60px] md:bottom-[30px] md:left-[37px] lg:bottom-[30px] lg:left-[45px] xs:bottom-[30px] xs:left-[30px]">
                                            Shop Now</a>
                                    </div>
                                </div>
                                <div class="text-center font-subheadingfont font-bold">
                                    <h1 class="font-headingfont text-[20px] font-bold text-black pt-[20px]">Long Chain
                                        With
                                        Lockel</h1>
                                    <div class="mt-[5px]">
                                        <span class="text-blacklight text-[18px] pr-[20px]  line-through">$85.50 </span>
                                        <span class="text-redViolet text-[18px] ">$70.30</span>
                                    </div>
                                </div>
                            </div>

                            <div class="group">
                                <div
                                    class=" xs:pb-[450px] sm:pb-[400px]  lg:pb-[350px] px-[20px] bg-center bg-no-repeat bg-cover relative" style="background-image: url('{{ asset('assets/images/img-4.jpg') }}')">
                                    <i
                                        class="fa-regular fa-heart text-[30px] absolute right-6 top-7 text-blacklight cursor-pointer"></i>

                                    <div class="hidden group-hover:block duration-[2s]">

                                        <div
                                            class="text-[18px] absolute xl:bottom-[90px] xl:left-[70px] md:bottom-[90px] md:left-[50px] lg:bottom-[90px] lg:left-[60px] xs:bottom-[30px] xs:left-[30px]  text-white">

                                            <i
                                                class="fa-solid fa-cart-shopping bg-black p-2 hover:bg-redViolet cursor-pointer"></i>


                                            <i
                                                class="fa-solid fa-magnifying-glass bg-black p-2 hover:bg-redViolet cursor-pointer"></i>


                                            <i
                                                class="fa-solid fa-user bg-black p-2 hover:bg-redViolet cursor-pointer"></i>


                                        </div>



                                        <a href=""
                                            class="xs:px-4 xs:py-2 lg:px-5 lg:py-3 hover:bg-redViolet rounded text-black bg-snow
                                          hover:text-white text-[20px] absolute xl:bottom-[30px] xl:left-[60px] md:bottom-[30px] md:left-[37px] lg:bottom-[30px] lg:left-[45px] xs:bottom-[30px] xs:left-[30px]">
                                            Shop Now</a>
                                    </div>
                                </div>
                                <div class="text-center font-subheadingfont font-bold">
                                    <h1 class="font-headingfont text-[20px] font-bold text-black pt-[20px]">Winter
                                        Jacket</h1>
                                    <div class="mt-[5px]">
                                        <span class="text-blacklight text-[18px] pr-[20px]  line-through">$100.50
                                        </span>
                                        <span class="text-redViolet text-[18px] ">$80.30</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Best Seller end -->
            </div>


        </section>

        <!-- Latest News start -->

        <section class="bg-white">
            <div class="max-w-[100%] mt-[50px]  mx-auto ">
                <div class="text-center lg:pt-[30px] md:pt-[50px] xs:pt-[30px]">
                    <h1 class="text-[30px] md:text-[40px] text-black font-headingfont font-bold">Latest News</h1>
                    <p class="text-blacklight text-[16px] md:text-[18px] xs:px-[10px] md:px-0 font-subheadingfont">Here
                        is our top
                        newses for your fasion guide.</p>
                    <div class="border border-b-[2px] border-redViolet  w-[100px] mx-auto my-4"></div>
                </div>

                <div class=" py-[30px] w-[78%] mx-auto ">
                    <div class="grid lg:grid-cols-3 md:grid-cols-2 xs:grid-cols-1 xl:gap-[25px] gap-[18px]">
                        <div class="group py-[10px]">
                            <div
                                class=" xs:pb-[450px] sm:pb-[400px]  lg:pb-[350px]  px-[20px] bg-center bg-no-repeat bg-cover relative" style="background-image: url('{{ asset('assets/images/img-11.jpg') }}')">
                                <div class="absolute left-6 top-7">
                                    <h1
                                        class="px-[20px] py-[9px] bg-redViolet text-white text-[18px] font-subheadingfont">
                                        Fasion
                                    </h1>
                                </div>

                            </div>
                            <div class=" font-subheadingfont font-bold pt-[18px]">
                                <div class="text-blacklight">
                                    <ul
                                        class="grid xl:grid-cols-2 grid-cols-1 list-disc marker:text-redViolet  pl-[20px] font-subheadingfont">
                                        <li>By Jastin Wastal</li>
                                        <li>15 Sep 2023</li>
                                    </ul>

                                </div>
                                <h1
                                    class="font-headingfont text-[22px] font-bold text-black hover:text-redViolet cursor-pointer">
                                    New season
                                    modern scarf
                                </h1>
                                <p class="text-blacklight py-[5px] leading-[25px] text-[16px] font-subheadingfont ">
                                    Etiam facisis
                                    urna
                                    dignissim dui quisque in mauris
                                    viverra
                                    Nulla placerat suscipit
                                    integer enim.</p>
                                <a href="" class="text-redViolet underline text-[18px] hover:text-black">read
                                    more...</a>

                            </div>
                        </div>

                        <div class="group py-[10px]">
                            <div
                                class=" xs:pb-[450px] sm:pb-[400px]  lg:pb-[350px]  px-[20px] bg-center bg-no-repeat bg-cover relative" style="background-image: url('{{ asset('assets/images/img-12.jpg') }}')">
                                <div class="absolute left-6 top-7">
                                    <h1
                                        class="px-[20px] py-[9px] bg-redViolet text-white text-[18px] font-subheadingfont">
                                        Trending</h1>
                                </div>


                            </div>
                            <div class=" font-subheadingfont font-bold pt-[18px]">
                                <div class="text-blacklight">
                                    <ul
                                        class="grid xl:grid-cols-2 grid-cols-1 list-disc marker:text-redViolet  pl-[20px] ">
                                        <li>By Jastin Wastal</li>
                                        <li>15 Sep 2023</li>
                                    </ul>

                                </div>
                                <h1
                                    class="font-headingfont text-[22px] font-bold text-black hover:text-redViolet cursor-pointer">
                                    Summer
                                    Trending 2023
                                </h1>
                                <p class="text-blacklight py-[5px] leading-[25px] text-[16px] font-subheadingfont ">
                                    Etiam facisis
                                    urna
                                    dignissim dui quisque in mauris
                                    viverra
                                    Nulla placerat suscipit
                                    integer enim.</p>
                                <a href="" class="text-redViolet underline text-[18px] hover:text-black">read
                                    more...</a>

                            </div>
                        </div>
                        <div class="group py-[10px]">
                            <div
                                class=" xs:pb-[450px] sm:pb-[400px]  lg:pb-[350px]  px-[20px] bg-center bg-no-repeat bg-cover relative" style="background-image: url('{{ asset('assets/images/img-13.jpg') }}')">
                                <div class="absolute left-6 top-7">
                                    <h1
                                        class="px-[20px] py-[9px] bg-redViolet text-white text-[18px] font-subheadingfont">
                                        Lifestyle</h1>
                                </div>


                            </div>
                            <div class=" font-subheadingfont font-bold pt-[18px]">
                                <div class="text-blacklight">
                                    <ul
                                        class="grid xl:grid-cols-2 grid-cols-1 list-disc marker:text-redViolet  pl-[20px] ">
                                        <li>By Jastin Wastal</li>
                                        <li>15 Sep 2023</li>
                                    </ul>

                                </div>
                                <h1
                                    class="font-headingfont text-[22px] font-bold text-black hover:text-redViolet cursor-pointer">
                                    Top 10
                                    Curley Hairstyle
                                </h1>
                                <p class="text-blacklight py-[5px] leading-[25px] text-[16px] font-subheadingfont ">
                                    Etiam facisis
                                    urna
                                    dignissim dui quisque in mauris
                                    viverra
                                    Nulla placerat suscipit
                                    integer enim.</p>
                                <a href="" class="text-redViolet underline text-[18px] hover:text-black">read
                                    more...</a>

                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </section>

        <!-- Latest News end -->

        <!-- footer start -->
        <footer class="mx-w-[100%] mt-[70px] bg-snow">
            <div class=" py-[50px] w-[80%] mx-auto">
                <div class="grid lg:grid-cols-[25%_15%_35%_25%] sm:grid-cols-2 xs:grid-cols-1 lg:gap-[20px] gap-[20px]">
                    <div class="">
                        <h1 class="text-[30px] font-headingfont  font-bold text-redViolet">Glamor</h1>
                        <p
                            class=" text-blacklight font-subheadingfont lg:mt-[25px] mt-[10px] md:leading-[30px] leading-[25px] mb-[0.8em]">
                            Mattis
                            inelit neque
                            quis donecyir
                            eleng amet.
                            Amet sed et
                            cursus eu euiod. Egestaerets in
                            morbiet tristique ornare vulputate vitae enim.</p>
                        <div class="flex gap-3">
                            <div class="">
                                <i
                                    class="fa-brands fa-facebook rounded-[50%] p-3  bg-white hover:text-redViolet border hover:border-redViolet cursor-pointer duration-[0.3s]"></i>
                            </div>
                            <div class="">
                                <i
                                    class="fa-brands fa-twitter rounded-[50%] p-3  bg-white hover:text-redViolet border hover:border-redViolet cursor-pointer duration-[0.3s]"></i>
                            </div>
                            <div class="">
                                <i
                                    class="fa-brands fa-skype rounded-[50%] p-3  bg-white hover:text-redViolet border hover:border-redViolet cursor-pointer duration-[0.3s]"></i>
                            </div>
                            <div class="">
                                <i
                                    class="fa-brands fa-linkedin rounded-[50%] p-3 bg-white hover:text-redViolet border hover:border-redViolet cursor-pointer duration-[0.3s]"></i>
                            </div>
                        </div>
                    </div>

                    <div class=" ">
                        <h1 class="text-[30px] font-headingfont text-black font-bold">Categories</h1>
                        <ul
                            class="list-disc text-blacklight font-subheadingfont pl-[20px] md:mt-[25px] mt-[0px] cursor-pointer marker:text-redViolet">
                            <li
                                class="mt-[5px] hover:text-redViolet duration-[0.3s] cursor-pointer :marker:text-redViolet">
                                <a href="shop.html">Women</a>
                            </li>
                            <li
                                class="mt-[5px] hover:text-redViolet duration-[0.3s] cursor-pointer marker:text-redViolet">
                                <a href="shop.html">Men</a>
                            </li>
                            <li
                                class=" mt-[5px] hover:text-redViolet duration-[0.3s] cursor-pointer marker:text-redViolet">
                                <a href="shop.html">Kids</a>
                            </li>
                            <li
                                class="mt-[5px] hover:text-redViolet duration-[0.3s] cursor-pointer marker:text-redViolet">
                                <a href="shop.html">Shoes</a>
                            </li>
                            <li
                                class=" mt-[5px] hover:text-redViolet duration-[0.3s] cursor-pointer marker:text-redViolet">
                                <a href="shop.html">Jwellery</a>
                            </li>
                            <li
                                class="mt-[5px] hover:text-redViolet duration-[0.3s] cursor-pointer marker:text-redViolet">
                                <a href="shop.html"> T-shirts</a>
                            </li>


                        </ul>
                    </div>

                    <div class="">
                        <h1 class="text-[30px] font-headingfont text-black font-bold">Blog Post</h1>
                        <div class="mt-[10px] lg:mt-[25px]">
                            <div class="grid grid-cols-[60px_auto] gap-[10px]">
                                <div>
                                    <img src="{{asset('assets/images/img-11.jpg')}}" alt="">
                                </div>
                                <div>
                                    <p class=" text-blacklight font-subheadingfont hover:text-redViolet cursor-pointer">
                                        <a href="blog-single-right-sidebar.html">It is a long established fact that a
                                            reader will be distracted.</a>
                                    </p>
                                    <span class=" font-subheadingfont text-[13px] text-customLight">12 December,
                                        2023</span>
                                </div>
                            </div>
                            <div class="grid grid-cols-[60px_auto] gap-[10px] mt-[20px]">
                                <div>
                                    <img src="{{asset('assets/images/img-13.jpg')}}" alt="">

                                </div>
                                <div>
                                    <p class=" text-blacklight font-subheadingfont hover:text-redViolet cursor-pointer">
                                        <a href="blog-single-right-sidebar.html">It is a long established fact that a
                                            reader will be distracted.</a>
                                    </p>
                                    <span class="  font-subheadingfont text-[13px] text-customLight">12 December,
                                        2023</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="">
                        <h1 class="text-[30px] font-headingfont text-black font-bold">Newsletter</h1>
                        <div class="mt-[0px] lg:mt-[25px]">
                            <p class=" text-blacklight font-subheadingfont">Subscribe to our newsletter and get 10% off
                                your first
                                purchase.</p>
                            <input type="email" name="email" id="email" placeholder="Your Email Address"
                                class="border-blacklight border-[1px] w-[100%] px-[10px] py-[15px] mt-[18px]">

                            <button href=""
                                class="w-[100%] px-[6px] py-[15px] bg-redViolet text-white text-[18px] mt-[18px]">Subscribe</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class=" py-[25px] mt-[30px] font-headingfont">
                <h1 class="text-[18px] text-blacklight text-center ">Copyright © 2023 Canun by <span
                        class="text-redViolet font-subheadingfont">codeZeera.com</span> All Rights Reserved.</h1>
            </div>
        </footer>


    </div>

    <script src="../js/script.js"></script>



</body>
</html>
