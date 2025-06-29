@extends('layout.main')
@section('title', "About")
@section('content')
    <div class="max-w-[100%] ">
        <!-- header start -->

        <div class="bg-snow">
            <header class="  xl:pb-[0px] md:pb-[70px] xs:pb-[40px] ">
                <navbar
                    class="flex justify-between items-center w-[100%] md:w-[78%] mx-auto  xs:px-[20px] md:px-[0px] ">

                    <h1 class="md:text-5xl sm:text-4xl xs:text-3xl  text-redViolet  font-headingfont">Glamor</h1>
                    <!-- destop menu -->
                    <Breadcrumbs class="xl:block hidden font-headingfont">
                        <ul class="flex uppercase text-[18px] items-center justify-center">
                            <!-- Home Menu Item -->
                            <li class="py-[35px] text-black group relative">
                                <a href="" class="py-[35px] px-[15px]">Home</a>
                                <ul
                                    class="hidden bg-redViolet group-hover:block absolute text-white w-[220px] px-[25px] py-[20px] top-[97px] z-40 capitalize font-subheadingfont left-[-5px]">
                                    <li class="py-[8px] hover:scale-105"><a href="style1.html">Home Style 1</a></li>
                                    <li class="py-[8px] hover:scale-105"><a href="style2.html">Home Style 2</a></li>
                                    <li class="py-[8px] hover:scale-105"><a href="style3.html">Home Style 3</a></li>
                                    <li class="py-[8px] hover:scale-105"><a href="style4.html">Home Style 4</a></li>
                                </ul>
                            </li>

                            <!-- Shop Menu Item -->
                            <li class="py-[35px] text-blacklight hover:text-black font-subheadingfont">
                                <a href="shop.html" class="py-[35px] px-[15px]">Shop</a>
                            </li>

                            <!-- Pages Menu Item -->
                            <li class="py-[35px] text-blacklight hover:text-black group relative font-subheadingfont">
                                <a href="#" class="py-[35px] px-[15px]">Pages</a>
                                <ul
                                    class="hidden bg-redViolet group-hover:block absolute text-white w-[220px] px-[25px] py-[20px] top-[97px] z-40 capitalize font-subheadingfont left-[-5px]">
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
                            <li class="py-[35px] text-blacklight hover:text-black group relative font-subheadingfont">
                                <a href="#" class="px-[15px]">Blog</a>

                                <!-- First-level dropdown -->
                                <ul
                                    class="hidden group-hover:block bg-redViolet absolute text-white w-[220px] px-[25px] py-[20px] top-[97px] left-0 capitalize z-40">
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
                    <div
                        class="relative w-full h-[400px] bg-[url('../images/page-title-s2.jpg')] bg-center bg-cover bg-no-repeat text-center flex flex-col justify-center items-center">
                        <!-- Overlay -->
                        <div class="absolute inset-0 bg-blacklight/50"></div>
                        <!-- Text -->
                        <h1 class="font-headingfont text-[60px] text-white z-10 font-bold">About</h1>
                        <div class="text-white z-10 text-[22px] font-subheadingfont">
                            <a href="./index.html" class="hover:text-redViolet">Home</a>
                            <span class="mx-2">•</span>
                            <span>About</span>
                        </div>
                    </div>
                </section>



            </header>
        </div>
        <!-- header end -->
        <div class="max-w-[100%] bg-snow  lg:py-[50px] py-[10px] ">
            <section class=" py-[50px] w-[78%] mx-auto ">
                <div class="about-top-title relative">
                    <h1 class="lg:text-[60px] text-[40px] font-bold leading-[50px] font-headingfont"
                        style="-webkit-text-fill-color: transparent; -webkit-text-stroke-width: 1px; -webkit-text-stroke-color: #D9DDDE;">
                        Well-known Brands
                    </h1>

                    <div>
                        <p
                            class="font-medium text-[24px] lg:text-[28px] lg:leading-[45px] leading-[40px] pt-[5px] text-blacklight font-subheadingfont lg:text-center md:px-[100px] px-[0px]">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sit vitae viverra tellus
                            vulputate.
                            Ante integer mattis viverra fringilla quis eleifend imperdiet. Tristique praesent
                            sed in neque
                            porta imperdiet vitae, tincidunt magna. Massa adipiscing tincidunt eget eros nunc
                            ante sed sit pulvinar.
                        </p>
                    </div>
                    <div class="absolute right-0 bottom-[45px]">
                        <h1 class="text-[60px] font-bold  font-headingfont"
                            style="-webkit-text-fill-color: transparent; -webkit-text-stroke-width: 1px; -webkit-text-stroke-color: #D9DDDE;">
                            Best Collection</h1>
                    </div>


                </div>

            </section>

            <div class="flex justify-center items-center relative">
                <a class="about-btn relative" href="about.html">
                    <!-- Rotating Background Image -->
                    <div
                        class="bg-[url('../images/about-bg.png')] pb-[80px] bg-no-repeat bg-cover w-[100px] h-[100px] animate-rotate">
                    </div>
                    <!-- Text Inside -->
                    <span class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 text-center">
                        Our <br> Story
                    </span>
                </a>
            </div>


        </div>


        <!-- clothes section start-->

        <div class="max-w-[100%] bg-snow  mx-auto ">


            <div class=" py-[50px] w-[78%] mx-auto font-subheadingfont">
                <div class="grid lg:grid-cols-3 md:grid-cols-2 xs:grid-cols-1 xl:gap-[25px] gap-[18px] ">
                    <div class="group relative">
                        <div
                            class="bg-[url('../images/women.jpg')] xs:pb-[450px] sm:pb-[400px] lg:pb-[350px] px-[20px] bg-center bg-no-repeat bg-cover relative flex items-center justify-center">
                            <div class="absolute inset-0 flex items-end justify-center bottom-[40px]">
                                <a href=""
                                    class="px-[30px] py-[12px] hover:bg-redViolet  text-black bg-snow hover:text-white text-[20px]">
                                    Women
                                </a>
                            </div>
                        </div>
                    </div>


                    <div class="group relative">
                        <div
                            class="bg-[url('../images/kid.jpg')] xs:pb-[450px] sm:pb-[400px] lg:pb-[350px] px-[20px] bg-center bg-no-repeat bg-cover relative flex items-center justify-center">
                            <div class="absolute inset-0 flex items-end justify-center bottom-[40px]">
                                <a href=""
                                    class="px-[30px] py-[12px] hover:bg-redViolet  text-black bg-snow hover:text-white text-[20px]">
                                    kids
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="group relative">
                        <div
                            class="bg-[url('../images/men.jpg')] xs:pb-[450px] sm:pb-[400px] lg:pb-[350px] px-[20px] bg-center bg-no-repeat bg-cover relative flex items-center justify-center">
                            <div class="absolute inset-0 flex items-end justify-center bottom-[40px]">
                                <a href=""
                                    class="px-[30px] py-[12px] hover:bg-redViolet  text-black bg-snow hover:text-white text-[20px]">
                                    Men
                                </a>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="grid lg:grid-cols-4 md:grid-cols-2 xs:grid-cols-1 xl:gap-[25px] gap-[18px] mt-[45px]">
                    <div class="group relative">
                        <div
                            class="bg-[url('../images/footwear.jpg')] xs:pb-[450px] sm:pb-[400px] lg:pb-[200px] px-[20px] bg-center bg-no-repeat bg-cover relative flex items-center justify-center">
                            <div class="absolute inset-0 flex items-end justify-center bottom-[40px]">
                                <a href=""
                                    class="px-[30px] py-[12px] hover:bg-redViolet  text-black bg-snow hover:text-white text-[20px]">
                                    Footwear
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="group relative">
                        <div
                            class="bg-[url('../images/accessories.jpg')] xs:pb-[450px] sm:pb-[400px] lg:pb-[200px] px-[20px] bg-center bg-no-repeat bg-cover relative flex items-center justify-center">
                            <div class="absolute inset-0 flex items-end justify-center bottom-[40px]">
                                <a href=""
                                    class="px-[30px] py-[12px] hover:bg-redViolet  text-black bg-snow hover:text-white text-[20px]">
                                    Accessories
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="group relative">
                        <div
                            class="bg-[url('../images/bags.jpg')] xs:pb-[450px] sm:pb-[400px] lg:pb-[200px] px-[20px] bg-center bg-no-repeat bg-cover relative flex items-center justify-center">
                            <div class="absolute inset-0 flex items-end justify-center bottom-[40px]">
                                <a href=""
                                    class="px-[30px] py-[12px] hover:bg-redViolet  text-black bg-snow hover:text-white text-[20px]">
                                    Bags
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="group relative">
                        <div
                            class="bg-[url('../images/watch.jpg')] xs:pb-[450px] sm:pb-[400px] lg:pb-[200px] px-[20px] bg-center bg-no-repeat bg-cover relative flex items-center justify-center">
                            <div class="absolute inset-0 flex items-end justify-center bottom-[40px]">
                                <a href=""
                                    class="px-[30px] py-[12px] hover:bg-redViolet  text-black bg-snow hover:text-white text-[20px]">
                                    Watch
                                </a>
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
                        class="bg-[url('../images/lookbook.jpg')] xs:pb-[450px] sm:pb-[400px]  lg:pb-[350px]  bg-top bg-cover relative">
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
                        class="bg-[url('../images/winter.jpg')] xs:pb-[450px] sm:pb-[400px]  lg:pb-[350px]  bg-top bg-cover relative">
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
                        <div class="border border-b-[2px] border-redViolet  w-[100px] mx-auto my-4"></div>
                    </div>

                    <div class=" pt-[30px] w-[78%] mx-auto ">
                        <div class="grid lg:grid-cols-4 md:grid-cols-2 xs:grid-cols-1 xl:gap-[25px] gap-[18px]">
                            <div class="group">
                                <div
                                    class="bg-[url('../images/img-1.jpg')] xs:pb-[450px] sm:pb-[400px]  lg:pb-[350px] px-[20px] bg-center bg-no-repeat bg-cover relative">
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
                                    class="bg-[url('../images/img-2.jpg')] xs:pb-[450px] sm:pb-[400px]  lg:pb-[350px] px-[20px] bg-center bg-no-repeat bg-cover relative">
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
                                    class="bg-[url('../images/img-3.jpg')] xs:pb-[450px] sm:pb-[400px]  lg:pb-[350px] px-[20px] bg-center bg-no-repeat bg-cover relative">
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
                                    class="bg-[url('../images/img-4.jpg')] xs:pb-[450px] sm:pb-[400px]  lg:pb-[350px] px-[20px] bg-center bg-no-repeat bg-cover relative">
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



    </div>
    @endsection