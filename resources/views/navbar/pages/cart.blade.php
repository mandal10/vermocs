@extends('layout.main')
@section('title', "Cart")
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
                        <h1 class="font-headingfont text-[60px] text-white z-10 font-bold">Cart</h1>
                        <div class="text-white z-10 text-[22px] font-subheadingfont">
                            <a href="./index.html" class="hover:text-redViolet">Home</a>
                            <span class="mx-2">•</span>
                            <span>Cart</span>
                        </div>
                    </div>
                </section>



            </header>
        </div>
        <!-- header end -->

        <!-- cart section -->
        <div class=" pt-[100px] pb-[30px] bg-white">
            <div class="max-w-[100%]  px-4">
                <div class=" bg-white p-8 mx-auto w-[90%] shadow-lg rounded-lg">
                    <div class="overflow-x-auto">
                        <table class="w-full  ">
                            <thead class="">
                                <tr
                                    class=" uppercase text-sm text-left border-b border-customLight font-headingfont text-blacklight ">
                                    <th class="py-4 xs:px-[50px] px-[0px]">Image</th>
                                    <th class="py-4 xs:px-[50px] px-[0px]">Product Name</th>
                                    <th class="py-4 xs:px-[50px] px-[0px]">Quantity</th>
                                    <th class="py-4 xs:px-[50px] px-[0px]">Price</th>
                                    <th class="py-4 xs:px-[50px] px-[0px]">Total Price</th>
                                    <th class="py-4 xs:px-[50px] px-[0px]">Action</th>
                                </tr>
                            </thead>
                            <tbody class="font-subheadingfont text-blacklight text-center">
                                <tr class="border-b border-verylight">
                                    <td class="p-4"><img src="../images/img-1.jpg" class="w-30 h-30 object-cover"
                                            alt=""></td>

                                    <td class="p-4">White Wedding Shoe<br><span class="text-sm ">Brand:
                                            Makita | Size: XL</span></td>

                                    <td class="p-4">
                                        <div class="flex items-center gap-2 ">
                                            <button
                                                class="bg-verylight px-3 py-1 rounded decrement hover:cursor-pointer">-</button>
                                            <input type="text" value="1"
                                                class="w-12 text-center border py-1 rounded quantity border-customLight"
                                                readonly>
                                            <button
                                                class="bg-verylight px-3 py-1 rounded increment hover:cursor-pointer">+</button>
                                        </div>
                                    </td>

                                    <td class="p-4">$250</td>
                                    <td class="p-4">$250</td>
                                    <td class="p-4">
                                        <div class="relative group inline-block">
                                            <button
                                                class="text-red-500 hover:bg-redViolet hover:cursor-pointer duration-200 px-[14px] py-[12px] bg-customLight flex items-center gap-2">
                                                <i class="fa-solid fa-trash text-[20px] text-white"></i>
                                            </button>
                                            <span
                                                class="absolute left-1/2 -translate-x-1/2 -top-10 w-[150px] text-center bg-black text-white text-xs px-2 py-2 rounded opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                                Remove From Cart
                                            </span>
                                        </div>

                                    </td>
                                </tr>



                                <tr class="border-b border-verylight">
                                    <td class="p-4"><img src="../images/img-2.jpg" class="w-30 h-30 object-cover"
                                            alt=""></td>

                                    <td class="p-4">White Wedding Shoe<br><span class="text-sm ">Brand:
                                            Makita | Size: XL</span></td>

                                    <td class="p-4">
                                        <div class="flex items-center gap-2 ">
                                            <button
                                                class="bg-verylight px-3 py-1 rounded decrement hover:cursor-pointer">-</button>
                                            <input type="text" value="1"
                                                class="w-12 text-center border py-1 rounded quantity border-customLight"
                                                readonly>
                                            <button
                                                class="bg-verylight px-3 py-1 rounded increment hover:cursor-pointer">+</button>
                                        </div>
                                    </td>

                                    <td class="p-4">$250</td>
                                    <td class="p-4">$250</td>
                                    <td class="p-4">
                                        <div class="relative group inline-block">
                                            <button
                                                class="text-red-500 hover:bg-redViolet hover:cursor-pointer duration-200 px-[14px] py-[12px] bg-customLight flex items-center gap-2">
                                                <i class="fa-solid fa-trash text-[20px] text-white"></i>
                                            </button>
                                            <span
                                                class="absolute left-1/2 -translate-x-1/2 -top-10 w-[150px] text-center bg-black text-white text-xs px-2 py-2 rounded opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                                Remove From Cart
                                            </span>
                                        </div>

                                    </td>
                                </tr>

                                <tr class="border-b border-verylight">
                                    <td class="p-4"><img src="../images/img-3.jpg" class="w-30 h-30 object-cover"
                                            alt=""></td>

                                    <td class="p-4">White Wedding Shoe<br><span class="text-sm ">Brand:
                                            Makita | Size: XL</span></td>

                                    <td class="p-4">
                                        <div class="flex items-center gap-2 ">
                                            <button
                                                class="bg-verylight px-3 py-1 rounded decrement hover:cursor-pointer">-</button>
                                            <input type="text" value="1"
                                                class="w-12 text-center border py-1 rounded quantity border-customLight"
                                                readonly>
                                            <button
                                                class="bg-verylight px-3 py-1 rounded increment hover:cursor-pointer">+</button>
                                        </div>
                                    </td>

                                    <td class="p-4">$250</td>
                                    <td class="p-4">$250</td>
                                    <td class="p-4">
                                        <div class="relative group inline-block">
                                            <button
                                                class="text-red-500 hover:bg-redViolet hover:cursor-pointer duration-200 px-[14px] py-[12px] bg-customLight flex items-center gap-2">
                                                <i class="fa-solid fa-trash text-[20px] text-white"></i>
                                            </button>
                                            <span
                                                class="absolute left-1/2 -translate-x-1/2 -top-10 w-[150px] text-center bg-black text-white text-xs px-2 py-2 rounded opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                                Remove From Cart
                                            </span>
                                        </div>

                                    </td>
                                </tr>

                                <tr class="border-b border-verylight">
                                    <td class="p-4"><img src="../images/img-4.jpg" class="w-30 h-30 object-cover"
                                            alt=""></td>

                                    <td class="p-4">White Wedding Shoe<br><span class="text-sm ">Brand:
                                            Makita | Size: XL</span></td>

                                    <td class="p-4">
                                        <div class="flex items-center gap-2 ">
                                            <button
                                                class="bg-verylight px-3 py-1 rounded decrement hover:cursor-pointer">-</button>
                                            <input type="text" value="1"
                                                class="w-12 text-center border py-1 rounded quantity border-customLight"
                                                readonly>
                                            <button
                                                class="bg-verylight px-3 py-1 rounded increment hover:cursor-pointer">+</button>
                                        </div>
                                    </td>

                                    <td class="p-4">$250</td>
                                    <td class="p-4">$250</td>
                                    <td class="p-4">
                                        <div class="relative group inline-block">
                                            <button
                                                class="text-red-500 hover:bg-redViolet hover:cursor-pointer duration-200 px-[14px] py-[12px] bg-customLight flex items-center gap-2">
                                                <i class="fa-solid fa-trash text-[20px] text-white"></i>
                                            </button>
                                            <span
                                                class="absolute left-1/2 -translate-x-1/2 -top-10 w-[150px] text-center bg-black text-white text-xs px-2 py-2 rounded opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                                Remove From Cart
                                            </span>
                                        </div>

                                    </td>
                                </tr>

                                <tr class="border-b border-verylight">
                                    <td class="p-4"><img src="../images/img-11.jpg" class="w-30 h-30 object-cover"
                                            alt=""></td>

                                    <td class="p-4">White Wedding Shoe<br><span class="text-sm ">Brand:
                                            Makita | Size: XL</span></td>

                                    <td class="p-4">
                                        <div class="flex items-center gap-2 ">
                                            <button
                                                class="bg-verylight px-3 py-1 rounded decrement hover:cursor-pointer">-</button>
                                            <input type="text" value="1"
                                                class="w-12 text-center border py-1 rounded quantity border-customLight"
                                                readonly>
                                            <button
                                                class="bg-verylight px-3 py-1 rounded increment hover:cursor-pointer">+</button>
                                        </div>
                                    </td>

                                    <td class="p-4">$250</td>
                                    <td class="p-4">$250</td>
                                    <td class="p-4">
                                        <div class="relative group inline-block">
                                            <button
                                                class="text-red-500 hover:bg-redViolet hover:cursor-pointer duration-200 px-[14px] py-[12px] bg-customLight flex items-center gap-2">
                                                <i class="fa-solid fa-trash text-[20px] text-white"></i>
                                            </button>
                                            <span
                                                class="absolute left-1/2 -translate-x-1/2 -top-10 w-[150px] text-center bg-black text-white text-xs px-2 py-2 rounded opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                                Remove From Cart
                                            </span>
                                        </div>

                                    </td>
                                </tr>

                                <tr class="border-b border-verylight">
                                    <td class="p-4"><img src="../images/img-12.jpg" class="w-30 h-30 object-cover"
                                            alt=""></td>

                                    <td class="p-4">White Wedding Shoe<br><span class="text-sm ">Brand:
                                            Makita | Size: XL</span></td>

                                    <td class="p-4">
                                        <div class="flex items-center gap-2 ">
                                            <button
                                                class="bg-verylight px-3 py-1 rounded decrement hover:cursor-pointer">-</button>
                                            <input type="text" value="1"
                                                class="w-12 text-center border py-1 rounded quantity border-customLight"
                                                readonly>
                                            <button
                                                class="bg-verylight px-3 py-1 rounded increment hover:cursor-pointer">+</button>
                                        </div>
                                    </td>

                                    <td class="p-4">$250</td>
                                    <td class="p-4">$250</td>
                                    <td class="p-4">
                                        <div class="relative group inline-block">
                                            <button
                                                class="text-red-500 hover:bg-redViolet hover:cursor-pointer duration-200 px-[14px] py-[12px] bg-customLight flex items-center gap-2">
                                                <i class="fa-solid fa-trash text-[20px] text-white"></i>
                                            </button>
                                            <span
                                                class="absolute left-1/2 -translate-x-1/2 -top-10 w-[150px] text-center bg-black text-white text-xs px-2 py-2 rounded opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                                Remove From Cart
                                            </span>
                                        </div>

                                    </td>
                                </tr>

                                <!-- Repeat for other products -->
                            </tbody>
                        </table>
                    </div>

                    <div
                        class="flex justify-end items-center mt-8 font-headingfont border-b border-verylight pb-[30px]">
                        <a href="shop.html"
                            class="bg-redViolet text-white px-4 py-2 sm:px-8 sm:py-4 hover:bg-white hover:text-redViolet hover:border-redViolet border mr-[10px]">Continue
                            Shopping </a>
                        <button
                            class="bg-white text-redViolet border border-redViolet px-4 py-2 sm:px-8 sm:py-4  hover:bg-redViolet hover:text-white">Update
                            Cart</button>
                    </div>

                    <div class="mt-8 bg-white md:p-6 p-0 rounded-lg font-headingfont">
                        <ul class="text-gray-700">
                            <li class="flex justify-between py-4">Total Products <span>(05)</span></li>
                            <li class="flex justify-between py-4">Sub Price <span>$2250</span></li>
                            <li class="flex justify-between py-4">Vat <span>$50</span></li>
                            <li class="flex justify-between py-4">Eco Tax <span>$100</span></li>
                            <li class="flex justify-between py-4 border-b border-b-verylight">Delivery Charge
                                <span>$100</span>
                            </li>
                            <li class="flex justify-between py-4 font-bold text-lg border-b border-verylight">Total
                                Price <span>$2500</span></li>
                        </ul>
                    </div>

                    <div class="mt-6 text-right">
                        <a href="checkout.html"
                            class="bg-redViolet text-white px-4 py-2 sm:px-8 sm:py-4 rounded-lg hover:bg-white hover:text-redViolet border border-redViolet">Proceed
                            to
                            Checkout</a>
                    </div>
                </div>
            </div>
        </div>

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
                                    <img src="../images/img-11.jpg" alt="">
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
                                    <img src="../images/img-13.jpg" alt="">

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

@endsection