<?php include './Html/html_start.php'; ?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
<link rel="stylesheet" href="./Assets/Css/index.css">
<!-- navbar starts starts -->
<nav class="bg-[#008374] grid fixed items-center h-[70px] w-full z-50">
  <div class="flex items-center   px-3">
    <div class="w-full">
      <div href="" class="flex items-center text-4xl font-semibold xl:px-16">
        <a href="#" class="flex">
          <p class="text-white">Courier</p>
          <p class="text-orange-500">Hub</p>
        </a>
      </div>
    </div>
    <div class="px-4 flex justify-center xl:hidden items-center text-white font-semibold">
      <span class="text-[20ppx] loginpopmob">Login</span>
    </div>
    <div class="flex items-center justify-center xl:hidden" id="hamBurger">
      <i class="fa-solid fa-bars fa-lg text-white"></i>
    </div>
    <div class="flex justify-cen  ter pt-[10px] hidden xl:block px-16">
      <div class="flex justify-center items-center space-x-6 text-[20px] font-semibold text-[#FFFFFF99] cursor-pointer">
        <span class="scrollhome">Home</span>
        <span class="scrollabout">About</span>
        <span class="scrollservices">Services</span>
        <span class="scrollteam">Team</span>
        <span class="scrollfaqs">Faqs</span>
        <span class="scrollcontact">Contact</span>
        <span class="loginpop">Login</span>
      </div>
    </div>
    <!-- login pop up -->
    <div class="fixed w-[200px] hidden rounded-sm right-0 bg-white px-4 py-2 top-[70px] loginpopup">
      <div class="grid items-center  py-2 space-y-2">
        <div class="flex  items-center justify-center border-b border-black">
          <a href="./Login/branch_login.php" class="flex items-center space-x-4">
            <i class="fa-solid fa-code-branch fa-xl"></i>
            <p class="text-[20px]">Branch Login</p>
          </a>
        </div>
        <div class="flex  items-center justify-center border-b border-black">
          <a href="./Login/admin_login.php" class="flex items-center space-x-4">
            <i class="fa-solid fa-circle-user fa-xl"></i>
            <p class="text-[20px]">Admin Login</p>
          </a>
        </div>
      </div>
    </div>
    <!-- hamburger -->
    <div class="absolute grid bg-[#008374] w-screen h-screen hamburger">
      <div class="absolute w-screen flex justify-end items-center p-3 h-[70px] text-white">
        <i class="fa-solid fa-xmark closehamburger fa-2xl"></i>
      </div>
      <div class="absolute grid text-xl space-y-6 px-6 top-[70px] font-semibold text-white sm:left-[43.5%] ">
        <span class="smallscrollhome">Home</span>
        <a href="#about">
          <span class="smallscrollAbout">About</span>
        </a>
        <a href="#services">
          <span class="smallscrollServices">Services</span>
        </a>
        <a href="#team">
          <span class="smallscrollTeam">Team</span>
        </a>
        <a href="#faq">
          <span class="smallscrollFaqs">Faqs</span>
        </a>
        <a href="#contact">
          <span class="smallscrollContact">Contact</span>
        </a>
      </div>
    </div>
  </div>
  <div class="bg-red-500">
    <a href="#">
      <div class="fixed h-[44px] w-[44px] bg-[#f85a40] flex justify-center items-center bottom-0 right-0 rounded-full mr-4 mb-4 hidden" id="scrollToTop">
        <i class="fa-solid fa-arrow-up"></i>
      </div>
    </a>
  </div>
</nav>
<!-- intro div -->
<main class="bg-[#008374] pt-36 xl:px-9">
  <div class="grid lg:grid-cols-2">
    <div class="mx-4 grid justify-center items-center order-1 lg:order-2">
      <img src="./Assets/Images/hero-img.svg" alt="hero image" />
    </div>
    <form action="./components/show_index_tracking.php" method="post">
      <div class="grid justify-center items-center pt-12 space-y-7 px-5 sm:px-10 lg:pb-12 order-2 lg:order-1">
        <p class="text-[48px] font-bold text-center text-white lg:text-start">Welcome to CourierHub,</p>
        <p class="text-center text-[20px] sm:text-[30px] md:text-[40px] text-white lg:text-start">
          Track Your Package,
        </p>
        <input type="number" name="doc_id" class="rounded-full z-10 bg-[#1a9082] border-2 h-[73.05px] text-white pl-6 text-[20px] placeholder" placeholder="Enter Document no here..">
      </div>
  </div>
  </form>

  <div class="grid items-center px-3 pt-20 space-y-6 pb-10 sm:grid  sm:gap-6 sm:space-y-0 sm:px-10 xl:py-[100px] xl:px-16">

    <div class="grid items-center space-y-6 sm:gap-8 sm:space-y-0  sm:grid sm:grid-cols-2  xl:absolute xl:px-8 xl:left-0 xl:gap-8 xl:w-full xl:grid xl:grid-cols-4 xl:pt-[180px] xl:px-[75px]">
      <!-- 1st box -->
      <div class="grid justify-center rounded-lg items-center h-[242.6px] bg-[#008d7d]">
        <div class="space-y-8 grid">
          <div class="grid justify-center items-center space-y-4 text-white">
            <i class="fa-solid fa-tv fa-2xl"></i>
          </div>
          <div class="flex justify-center items-center text-3xl font-semibold text-white">
            <p>Shipping Simplified</p>
          </div>
        </div>
      </div>

      <!-- 2nd box -->
      <div class="grid justify-center rounded-lg items-center h-[242.6px] bg-[#008d7d]">
        <div class="space-y-8 grid">
          <div class="grid justify-center items-center space-y-4 text-white">
            <i class="fa-sharp fa-regular fa-gem fa-2xl"></i>
          </div>
          <div class="flex justify-center items-center text-3xl font-semibold text-white">
            <p class="text-center">Reliable Shipping</p>
          </div>
        </div>
      </div>

      <!-- 3rd box -->
      <div class="grid justify-center rounded-lg items-center h-[242.6px] bg-[#008d7d]">
        <div class="space-y-8 grid">
          <div class="grid justify-center items-center space-y-4 text-white">
            <i class="fa-regular fa-compass fa-2xl"></i>
          </div>
          <div class="flex justify-center items-center text-3xl font-semibold text-white">
            <p>Fast, Safe, Simple</p>
          </div>
        </div>
      </div>

      <!-- 4th box -->
      <div class="grid justify-center rounded-lg items-center h-[242.6px] bg-[#008d7d]">
        <div class="space-y-8 grid">
          <div class="grid justify-center items-center space-y-4 text-white">
            <i class="fa-regular fa-chess-queen fa-2xl"></i>
          </div>
          <div class="flex justify-center items-center text-3xl font-semibold text-white">
            <p>Your Partner</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
<!-- about us -->
<main class="bg-white pt-14 xl:pt-[200px]" id="about">
  <div class="grid justify-center items-center space-y-4 px-2 sm:px-10  xl:px-[75px]">
    <div class="flex justify-center">
      <p class="text-3xl font-semibold">About Us</p>
    </div>

    <div class="flex justify-center items-center">
      <div class="w-[50px] h-[3px] bg-[#008374]"></div>
    </div>

    <div class="text-center text-lg lg:mb-10">
      <p>
        We are a dedicated courier service committed to delivering your
        parcels with speed, security, and reliability, ensuring your
        satisfaction every time.
      </p>
    </div>

    <!-- about us heading -->
    <div class="px-1 pt-10 space-y-4 grid lg:grid-cols-2 lg:gap-8 lg:space-y-0">
      <!-- first -->
      <div class="grid ">
        <p class="text-3xl font-semibold ">
          Schedule a Delivery Today
        </p>
        <div class="">
          <img src="./Assets/Images/about_us_one.jpg" alt="about_us" class="rounded-lg" />
        </div>

        <!-- about us paragraph one -->
        <div class="flex tracking-wider">
          <p class="">
            Established in 2023, Courier Hub is a dynamic work of continuous innovation and evolution.
            It aims to craft intelligent automated shipping solutions that enable businesses to run
            their operations efficiently and profitably while helping them nurture customer loyalty
            and satisfaction.Accessibility, connectivity, ease-of-use, performance- these are keywords
            we use to build our system.
          </p>
        </div>
        <!-- about us paragraph 2 -->
        <div class="tracking-wider">
          <p>
            We are a dedicated courier service committed to national parcel deliveries.
            With a focus on speed, security, and reliability, we ensure your shipments
            arrive safely and on time.
          </p>
        </div>
      </div>
      <!-- second -->
      <div class="grid justify-center items-center space-y-6  lg:space-y-16 ">
        <div class="tracking-wider pt-4 lg:pt-0 lg:mb-2">
          <p class="italic">
            Schedule a pick up and delivery today and see why thousands of companies are already
            using our courier delivery services today.
          </p>
        </div>
        <div class="grid justify-center items-center space-y-3 -mt-4">
          <!-- first tick mark -->
          <div class="flex space-x-3">
            <div class="flex text-white font-bold items-start pt-1">
              <i class="flex justify-center items-center fa-solid fa-check fa-xs rounded-full h-[20px] w-[20px] bg-[#008374]"></i>
            </div>
            <div class="">
              <p>Most Competitive Prices! Unmatched.</p>
            </div>
          </div>
          <!-- second tick mark -->
          <div class="flex space-x-3">
            <div class="flex text-white font-bold items-start pt-1">
              <i class="flex justify-center items-center fa-solid fa-check fa-xs rounded-full h-[20px] w-[20px] bg-[#008374]"></i>
            </div>
            <div class="">
              <p>Your packages will be delivered in 4 to 6 business days.</p>
            </div>
          </div>
          <!-- third tick mark -->
          <div class="flex space-x-3">
            <div class="flex text-white font-bold items-start pt-1">
              <i class="flex justify-center items-center fa-solid fa-check fa-xs rounded-full h-[20px] w-[20px] bg-[#008374]"></i>
            </div>
            <div class="">
              <p>
                With its immense knowledge, understanding and reputation, Courier Hub has
                managed to reach worldwide destinations through excellent overseas agent networks.
              </p>
            </div>
          </div>
          <!-- simple text -->
          <div class="pt-3 flex justify-center items-center">
            <p class="">
              Courier software features include order management, real-time tracking, route
              optimization, automated scheduling, proof of delivery, billing and invoicing,
              customer communication, analytics, and integration with e-commerce platforms
              for seamless operations.
            </p>
          </div>
          <div class="pt-3 grid justify-center items-center lg:pt-12">
            <img src="./Assets/Images/about_us_two.jpg" alt="about_us" class="rounded-lg" />
            <div class="flex absolute left-0 right-0 p-4 text-white justify-center items-center lg:pl-[500px]">
              <a href="https://www.youtube.com/watch?v=GF2VdHODWQk">
                <div class="bg-[#008374] h-[75px] w-[75px] rounded-full flex justify-center items-center">
                  <i class="fa-solid fa-play fa-2xl"></i>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
      <!-- tick mark div starts -->
    </div>
  </div>
</main>

<!-- slider div -->
<main>
  <div class="swiper mySwiper z-0">
    <div class="swiper-wrapper -ml-20 ">
      <div class="swiper-slide">
        <img src="./Assets/Images/client-1.png" alt="" class="h-[55px]" />
      </div>
      <div class="swiper-slide">
        <img src="./Assets/Images/client-2.png" alt="" class="h-[44px]" />
      </div>
      <div class="swiper-slide">
        <img src="./Assets/Images/client-3.png" alt="" class="h-[45px]" />
      </div>
      <div class="swiper-slide">
        <img src="./Assets/Images/client-4.png" alt="" class="h-[70px]" />
      </div>
      <div class="swiper-slide">
        <img src="./Assets/Images/client-5.png" alt="" class="h-[45px]" />
      </div>
      <div class="swiper-slide">
        <img src="./Assets/Images/client-6.png" alt="" class="h-[40px]" />
      </div>
      <div class="swiper-slide">
        <img src="./Assets/Images/client-7.png" alt="" class="h-[25px]" />
      </div>
      <div class="swiper-slide">
        <img src="./Assets/Images/client-8.png" alt="" class="h-[45px]" />
      </div>
    </div>
  </div>
</main>

<!-- stats main division -->
<main>
  <div class="grid items-center justify-center mt-56 px-3 sm:px-10 lg:grid-cols-2">
    <div class="grid items-center justify-center ">
      <div class="flex">
        <img src="./Assets/Images/stats-img.svg" alt="stats image" />
      </div>
    </div>

    <div>
      <!-- 1st state-->
      <div class="grid justify-center items-start text-center sm:justify-start">
        <div class="flex text-[14px] gap-6 items-center justify-center border-b-2 py-4">
          <div class="text-[40px] font-bold tracking-tight text-[#008374]">
            <p>232</p>
          </div>
          <div class="">
            <span class="font-semibold">Happy clients</span>
            <span>are the heartbeat of our success.</span>
          </div>
        </div>
        <!-- 2nd  state-->
        <div class="flex text-[14px] gap-6 items-center justify-center border-b-2 py-4">
          <div class="text-[40px] font-bold tracking-tight text-[#008374]">
            <p>521</p>
          </div>
          <div>
            <span class="font-semibold">Projects Done</span>
            <span>Success written,challenges Done.</span>
          </div>
        </div>
        <!-- 3rd state -->
        <div class="flex text-[14px] gap-6 items-center justify-center border-b-2 py-4">
          <div class="text-[40px] font-bold tracking-tight text-[#008374]">
            <p>453</p>
          </div>
          <div>
            <span class="font-semibold">Hours of Support</span>
            <span>Support: 24/7, always here .</span>
          </div>
        </div>

      </div>
    </div>
  </div>
</main>

<!-- services div -->
<main class="bg-[#f6f6f6]" id="services">
  <div class="grid items-center justify-center px-3 space-y-4 pt-12 sm:px-10  xl:px-[75px]">
    <div class="flex justify-center">
      <p class="text-3xl font-semibold">Our Services</p>
    </div>

    <div class="flex justify-center items-center">
      <div class="w-[50px] h-[3px] bg-[#008374]"></div>
    </div>

    <div class="text-center text-lg">
      <p>
        Fastest parcel delivery with secure handling, real-time tracking, and
        custom solutions to meet your urgent shipping needs.
      </p>
    </div>
    <!-- our services square divs -->
    <div class="grid space-y-6 sm:grid-cols-2 sm:space-y-0 gap-8 lg:grid-cols-3">
      <!-- 1st box -->
      <div class="grid justify-start rounded-lg px-10 space-y-6 pt-14 w-full squarehover cursor-pointer bg-white py-8">
        <div class="">
          <i class="fa-solid fa-bolt-lightning fa-2x relative z-10 firstbefore"></i>
        </div>
        <div class="text-2xl font-semibold">
          <p class="">Delivery Timeframes</p>
          <div class="pt-0.5">
            <div class="border-b-4 pb-2 squareborder"></div>
          </div>
        </div>
        <div class="text-[14.5px]">
          <p>
            Delivery time frames vary but may include same-day, next-day, or express delivery, depending on service levels.
          </p>
        </div>
        <div class="flex justify-start items-center text-lg text-[#008374]">
          <a href="" class="flex flex items-center">
            <p>Read more</p>
            <i class="fa-solid fa-arrow-right pt-0.5 px-2"></i>
          </a>
        </div>
      </div>
      <!-- 2nd box -->
      <div class="grid justify-start rounded-lg px-10 space-y-6 pt-14 w-full squarehover cursor-pointer bg-white py-8">
        <div class="">
          <i class="fa-solid fa-tower-broadcast fa-2x relative z-10 firstbefore"></i>
        </div>
        <div class="text-2xl font-semibold">
          <p class="">Wide Range</p>
          <div class="pt-0.5">
            <div class="border-b-4 pb-2 squareborder"></div>
          </div>
        </div>
        <div class="text-[14.5px]">
          <p>
            Courier services span local, national, with express options, customized solutions, and special handling services.
          </p>
        </div>
        <div class="flex justify-start items-center text-lg text-[#008374]">
          <a href="" class="flex flex items-center">
            <p>Read more</p>
            <i class="fa-solid fa-arrow-right pt-0.5 px-2"></i>
          </a>
        </div>
      </div>
      <!-- 3rd box -->
      <div class="grid justify-start rounded-lg px-10 space-y-6 pt-14 w-full squarehover cursor-pointer bg-white py-8">
        <div class="">
          <i class="fa-solid fa-tv fa-2x relative z-10 firstbefore"></i>
        </div>
        <div class="text-2xl font-semibold">
          <p class="">Shipping Simplyfied</p>
          <div class="pt-0.5">
            <div class="border-b-4 pb-2 squareborder"></div>
          </div>
        </div>
        <div class="text-[14.5px]">
          <p>
            Shipping services streamline sending goods worldwide with options like standard, express and specialized handling for efficiency.
          </p>
        </div>
        <div class="flex justify-start items-center text-lg text-[#008374]">
          <a href="" class="flex flex items-center">
            <p>Read more</p>
            <i class="fa-solid fa-arrow-right pt-0.5 px-2"></i>
          </a>
        </div>
      </div>
      <!-- 4th box -->
      <div class="grid justify-start rounded-lg px-10 space-y-6 pt-14 w-full squarehover cursor-pointer bg-white py-8">
        <div class="">
          <i class="fa-solid fa-vector-square fa-2x relative z-10 firstbefore"></i>
        </div>
        <div class="text-2xl font-semibold">
          <p class="">Safety</p>
          <div class="pt-0.5">
            <div class="border-b-4 pb-2 squareborder"></div>
          </div>
        </div>
        <div class="text-[14.5px]">
          <p>
            Our Priority: Safety First - Delivering Secure Courier Management Services for Your Peace of Mind
          </p>
        </div>
        <div class="flex justify-start items-center text-lg text-[#008374]">
          <a href="" class="flex flex items-center">
            <p>Read more</p>
            <i class="fa-solid fa-arrow-right pt-0.5 px-2"></i>
          </a>
        </div>
      </div>
      <!-- 5th box -->
      <div class="grid justify-start rounded-lg px-10 space-y-6 pt-14 w-full squarehover cursor-pointer bg-white py-8">
        <div class="">
          <i class="fa-solid fa-calendar-days fa-2x relative z-10 firstbefore"></i>
        </div>
        <div class="text-2xl font-semibold">
          <p class="">Delivery On Time</p>
          <div class="pt-0.5">
            <div class="border-b-4 pb-2 squareborder"></div>
          </div>
        </div>
        <div class="text-[14.5px]">
          <p>
            Reliable document delivery, meeting your deadlines and exceeding expectations, ensuring secure and on-time handling of your documents.
          </p>
        </div>
        <div class="flex justify-start items-center text-lg text-[#008374]">
          <a href="" class="flex flex items-center">
            <p>Read more</p>
            <i class="fa-solid fa-arrow-right pt-0.5 px-2"></i>
          </a>
        </div>
      </div>
      <!-- 6th box -->
      <div class="grid justify-start rounded-lg px-10 space-y-6 pt-14 w-full squarehover cursor-pointer bg-white py-8">
        <div class="">
          <i class="fa-regular fa-message fa-2x relative z-10 firstbefore"></i>
        </div>
        <div class="text-2xl font-semibold">
          <p class="">Fast Feedback</p>
          <div class="pt-0.5">
            <div class="border-b-4 pb-2 squareborder"></div>
          </div>
        </div>
        <div class="text-[14.5px]">
          <p>
            We're all about quick feedback to improve our services and meet your needs effectively. Share your thoughts today
          </p>
        </div>
        <div class="flex justify-start items-center text-lg text-[#008374]">
          <a href="" class="flex flex items-center">
            <p>Read more</p>
            <i class="fa-solid fa-arrow-right pt-0.5 px-2"></i>
          </a>
        </div>
      </div>
    </div>
  </div>
</main>


<!-- Testimonials starts -->
<main class="bg-[#f6f6f6] pt-10">
  <div class="grid justify-center items-center bg-white px-3 sm:px-10">
    <!-- testimonial theory -->
    <div class="px-3 space-y-4 py-12 grid justify-center items-center">
      <div class="flex justify-center">
        <p class="text-3xl font-semibold">Testimonials</p>
      </div>

      <div class="flex justify-center items-center">
        <div class="w-[50px] h-[3px] bg-[#008374]"></div>
      </div>

      <div class="text-center text-lg">
        <p>
          Efficient, secure, and always on schedule.
        </p>
      </div>
    </div>
    <!-- testimonial theory -->

    <!-- testimonial slider -->
    <div class="flex justify-center px-3 ">
      <div class="swiper mySwiper2 swiperheight px-3">
        <div class="swiper-wrapper">
          <div class="swiper-slide ">
            <!-- inner SLide -->
            <div class="grid justify-center items-center px-6 pb-8 sm:px-12  xl:px-[75px]">
              <div class="shadow-2xl px-4 py-8 rounded-lg sm:px-8">
                <div class="flex space-x-4 justify-center sm:justify-start">
                  <div class="">
                    <img src="./Assets/Images/testimonials-1.jpg" alt="" class="h-[90px] w-[90px] rounded-full" />
                  </div>
                  <div class="grid justify-center items-center sm:-space-y-3">
                    <div class="grid text-start sm:grid-cols-2 sm:space-x-0.5">
                      <span class="font-bold text-[18px]">Rajesh</span>
                      <span class="font-bold text-[18px]">Kumar</span>
                    </div>
                    <span class="text-sm text-start">Customer</span>
                    <!-- stars starts -->
                    <div class="flex justify-center py-3 pr-2 items-center sm:justify-start">
                      <i class="fa-solid fa-star fa-sm text-yellow-500"></i>
                      <i class="fa-solid fa-star fa-sm text-yellow-500"></i>
                      <i class="fa-solid fa-star fa-sm text-yellow-500"></i>
                      <i class="fa-solid fa-star fa-sm text-yellow-500"></i>
                      <i class="fa-solid fa-star fa-sm text-yellow-500"></i>
                    </div>
                  </div>
                </div>
                <div class="pt-8 flex justify-center items-center">
                  <div>
                    <span>
                      <i class="fa-solid fa-quote-left fa-xl text-[#008374]"></i>
                    </span>
                    <span class="px-3 text-[16px]">
                      I've been using their arevery good in Timely, secure, and always courteous – I wouldn't trust anyone else with my shipments. Keep it up courier Hub
                    </span>
                    <span>
                      <i class="fa-solid fa-quote-right fa-xl text-[#008374]"></i>
                    </span>
                  </div>
                </div>
              </div>
            </div>
            <!-- inner SLide -->
          </div>
          <div class="swiper-slide">
            <!-- inner slide 2-->
            <div class="grid justify-center items-center  px-6 sm:px-12 ">
              <div class="shadow-2xl px-4 py-8 rounded-lg sm:px-8">
                <div class="flex space-x-4 justify-center sm:justify-start">
                  <div class="">
                    <img src="./Assets/Images/testimonials-2.jpg" alt="" class="h-[90px] w-[90px] rounded-full" />
                  </div>
                  <div class="grid justify-center items-center">
                    <div class="grid text-start sm:grid-cols-2 sm:-space-x-1">
                      <span class="font-bold text-[18px]">Priya</span>
                      <span class="font-bold text-[18px]">Patel</span>
                      <span class="text-sm text-start">Customer</span>
                    </div>
                    <!-- stars starts -->
                    <div class="flex justify-start py-3 pr-2 items-center">
                      <i class="fa-solid fa-star fa-sm text-yellow-500"></i>
                      <i class="fa-solid fa-star fa-sm text-yellow-500"></i>
                      <i class="fa-solid fa-star fa-sm text-yellow-500"></i>
                      <i class="fa-solid fa-star fa-sm text-yellow-500"></i>
                      <i class="fa-solid fa-star fa-sm text-yellow-500"></i>
                    </div>
                  </div>
                </div>
                <div class="pt-8 flex justify-center items-center">
                  <div>
                    <span>
                      <i class="fa-solid fa-quote-left fa-xl text-[#008374]"></i>
                    </span>
                    <span class="px-3 text-[16px]">
                      This courier service is a lifesaver! They saved my business during a crucial time with their swift deliveries. Highly recommended for their reliability and Fast Servives and Safety Purposes.
                    </span>
                    <span>
                      <i class="fa-solid fa-quote-right fa-xl text-[#008374]"></i>
                    </span>
                  </div>
                </div>
              </div>
            </div>
            <!-- inner slide 2-->
          </div>
          <div class="swiper-slide">
            <!-- inner slide 3-->
            <div class="grid justify-center items-center px-6 sm:px-12">
              <div class="shadow-2xl px-4 py-8 rounded-lg sm:px-8">
                <div class="flex space-x-4 justify-center sm:justify-start">
                  <div class="">
                    <img src="./Assets/Images/testimonials-3.jpg" alt="" class="h-[90px] w-[90px] rounded-full" />
                  </div>
                  <div class="grid justify-center items-center">
                    <div class="grid text-start sm:grid-cols-2 sm:-space-x-2">
                      <span class="font-bold text-[18px]">Anjani</span>
                      <span class="font-bold text-[18px]">Sharma</span>
                      <span class="text-sm text-start">Store Owner</span>
                    </div>
                    <!-- stars starts -->
                    <div class="flex justify-start py-3 pr-2 items-center">
                      <i class="fa-solid fa-star fa-sm text-yellow-500"></i>
                      <i class="fa-solid fa-star fa-sm text-yellow-500"></i>
                      <i class="fa-solid fa-star fa-sm text-yellow-500"></i>
                      <i class="fa-solid fa-star fa-sm text-yellow-500"></i>
                      <i class="fa-solid fa-star fa-sm text-yellow-500"></i>
                    </div>
                  </div>
                </div>
                <div class="pt-8 flex justify-center items-center">
                  <div>
                    <span>
                      <i class="fa-solid fa-quote-left fa-xl text-[#008374]"></i>
                    </span>
                    <span class="px-3 text-[16px]">
                      I'm a frequent sender, and this courier company has never let me down. Their attention to detail and customer service is remarkable Soo I only Chose Courier Hub for their Services.
                    </span>
                    <span>
                      <i class="fa-solid fa-quote-right fa-xl text-[#008374]"></i>
                    </span>
                  </div>
                </div>
              </div>
            </div>
            <!-- inner slide 3-->
          </div>
          <div class="swiper-slide">
            <!-- inner slide 4  -->
            <div class="grid justify-center items-center px-6 sm:px-12">
              <div class="shadow-2xl px-4 py-8 rounded-lg sm:px-8">
                <div class="flex space-x-4 justify-center sm:justify-start">
                  <div class="">
                    <img src="./Assets/Images/testimonials-4.jpg" alt="" class="h-[90px] w-[90px] rounded-full" />
                  </div>
                  <div class="grid justify-center items-center">
                    <div class="grid text-start sm:grid-cols-2 sm:-space-x-1.5">
                      <span class="font-bold text-[18px]">Arjun</span>
                      <span class="font-bold text-[18px]">Singh</span>
                      <span class="text-sm">Freelancer</span>
                    </div>
                    <!-- stars starts -->
                    <div class="flex justify-start py-3 pr-2 items-center">
                      <i class="fa-solid fa-star fa-sm text-yellow-500"></i>
                      <i class="fa-solid fa-star fa-sm text-yellow-500"></i>
                      <i class="fa-solid fa-star fa-sm text-yellow-500"></i>
                      <i class="fa-solid fa-star fa-sm text-yellow-500"></i>
                      <i class="fa-solid fa-star fa-sm text-yellow-500"></i>
                    </div>
                  </div>
                </div>
                <div class="pt-8 flex justify-center items-center">
                  <div>
                    <span>
                      <i class="fa-solid fa-quote-left fa-xl text-[#008374]"></i>
                    </span>
                    <span class="px-3 text-[16px]">
                      I've had packages sent to me through this courier service, and I'm always impressed. They make sure everything arrives in perfect condition, no matter the size.
                    </span>
                    <span>
                      <i class="fa-solid fa-quote-right fa-xl text-[#008374]"></i>
                    </span>
                  </div>
                </div>
              </div>
            </div>
            <!-- inner slide 4  -->
          </div>
          <div class="swiper-slide">
            <!-- inner slide 5 -->
            <div class="grid justify-center items-center px-6 sm:px-12">
              <div class="shadow-2xl px-4 py-8 rounded-lg sm:px-8">
                <div class="flex space-x-4 justify-center sm:justify-start">
                  <div class="">
                    <img src="./Assets/Images/testimonials-5.jpg" alt="" class="h-[90px] w-[90px] rounded-full" />
                  </div>
                  <div class="grid justify-center items-center">
                    <div class="grid text-start sm:grid-cols-2 ">
                      <span class="font-bold text-[18px]">Vivek</span>
                      <span class="font-bold text-[18px] "></span>
                      <span class="text-sm">Enterpreanour</span>
                    </div>
                    <!-- stars starts -->
                    <div class="flex justify-start py-3  items-center">
                      <i class="fa-solid fa-star fa-sm text-yellow-500"></i>
                      <i class="fa-solid fa-star fa-sm text-yellow-500"></i>
                      <i class="fa-solid fa-star fa-sm text-yellow-500"></i>
                      <i class="fa-solid fa-star fa-sm text-yellow-500"></i>
                      <i class="fa-solid fa-star fa-sm text-yellow-500"></i>
                    </div>
                  </div>
                </div>
                <div class="pt-8 flex justify-center items-center">
                  <div>
                    <span>
                      <i class="fa-solid fa-quote-left fa-xl text-[#008374]"></i>
                    </span>
                    <span class="px-3 text-[16px]">
                      I've been using Courier Hub for my business for over a year now, and I couldn't be more satisfied. This system has transformed the way we handle our logistics and deliveries
                    </span>
                    <span>
                      <i class="fa-solid fa-quote-right fa-xl text-[#008374]"></i>
                    </span>
                  </div>
                </div>
              </div>
            </div>
            <!-- inner slide 5 -->
          </div>
        </div>
      </div>
    </div>
    <!-- <div class="swiper-pagination"></div> -->
    <!-- testimonial slider -->
  </div>
</main>
<!-- Testimonials ends -->

<!-- our team section starts -->
<main class="bg-[#f6f6f6] mt-[450px]" id="team">
  <div class="grid justify-center bg-[#f6f6f6] rounded-lg items-center ">
    <div class="px-3 space-y-4 py-12 grid justify-center items-center sm:px-10 ">
      <div class="flex justify-center">
        <p class="text-3xl font-semibold">Our Team</p>
      </div>

      <div class="flex justify-center items-center">
        <div class="w-[50px] h-[3px] bg-[#008374]"></div>
      </div>

      <div class="text-center text-lg">
        <p>
          Alone, We Can Do So Little; Together, We Can Do So Much..
        </p>
      </div>
    </div>
    <!-- team images div box starts -->
    <div class="grid justify-center items-center ">
      <div class="px-3 grid justify-center items-center rounded-lg sm:px-10 sm:grid-cols-2 sm:gap-8 sm:space-y-0 xl:grid-cols-4 xl:px-[75px]">
        <div class="bg-white px-3 rounded-lg px-3 py-3">
          <div class="flex justify-center items-center">
            <img src="./Assets/Images/avinash.jpg" alt="" class="rounded-lg" />
          </div>
          <div class="grid py-3 justify-center text-center items-center">
            <span class="text-[20px] font-bold">Avinash Shiyani</span>
            <span class="text-[14px] italic">Web Development</span>
          </div>
          <!-- social media icons -->
          <div class="flex justify-around items-center space-x-6">
            <div class="h-[40px] w-[40px] flex justify-center items-center rounded-full border-[1px] border-[#a2a2a2] outerhover">
              <i class="fa-brands fa-twitter fa-lg text-[#a2a2a2] innerhover"></i>
            </div>
            <div class="h-[40px] w-[40px] flex justify-center items-center rounded-full border-[1px] border-[#a2a2a2] outerhover">
              <i class="fa-brands fa-facebook fa-lg text-[#a2a2a2] innerhover"></i>
            </div>
            <div class="h-[40px] w-[40px] flex justify-center items-center rounded-full border-[1px] border-[#a2a2a2] outerhover">
              <i class="fa-brands fa-instagram fa-lg text-[#a2a2a2] innerhover"></i>
            </div>
            <div class="h-[40px] w-[40px] flex justify-center items-center rounded-full border-[1px] border-[#a2a2a2] outerhover">
              <i class="fa-brands fa-linkedin fa-lg text-[#a2a2a2] innerhover"></i>
            </div>
          </div>
        </div>
        <!-- 2nd worker  -->
        <div class="bg-white px-3 rounded-lg px-3 py-3 mt-8">
          <div class="flex justify-center items-center">
            <img src="./Assets/Images/jay.jpg" alt="" class="rounded-lg" />
          </div>
          <div class="grid py-3 justify-center text-center items-center">
            <span class="text-[20px] font-bold">Jay Mange</span>
            <span class="text-[14px] italic">Marketing</span>
          </div>
          <!-- social media icons -->
          <div class="flex justify-around items-center space-x-6">
            <div class="h-[40px] w-[40px] flex justify-center items-center rounded-full border-[1px] border-[#a2a2a2] outerhover">
              <i class="fa-brands fa-twitter fa-lg text-[#a2a2a2] innerhover"></i>
            </div>
            <div class="h-[40px] w-[40px] flex justify-center items-center rounded-full border-[1px] border-[#a2a2a2] outerhover">
              <i class="fa-brands fa-facebook fa-lg text-[#a2a2a2] innerhover"></i>
            </div>
            <div class="h-[40px] w-[40px] flex justify-center items-center rounded-full border-[1px] border-[#a2a2a2] outerhover">
              <i class="fa-brands fa-instagram fa-lg text-[#a2a2a2] innerhover"></i>
            </div>
            <div class="h-[40px] w-[40px] flex justify-center items-center rounded-full border-[1px] border-[#a2a2a2] outerhover">
              <i class="fa-brands fa-linkedin fa-lg text-[#a2a2a2] innerhover"></i>
            </div>
          </div>
        </div>
        <!-- 2nd worker  -->

        <!-- 3rd worker -->
        <div class="bg-white px-3 rounded-lg px-3 py-3 mt-8">
          <div class="flex justify-center items-center">
            <img src="./Assets/Images/jogia.jpg" alt="" class="rounded-lg" />
          </div>
          <div class="grid py-3 justify-center text-center items-center">
            <span class="text-[20px] font-bold">Preet Jogia</span>
            <span class="text-[14px] italic">Content</span>
          </div>
          <!-- social media icons -->
          <div class="flex justify-around items-center space-x-6">
            <div class="h-[40px] w-[40px] flex justify-center items-center rounded-full border-[1px] border-[#a2a2a2] outerhover">
              <i class="fa-brands fa-twitter fa-lg text-[#a2a2a2] innerhover"></i>
            </div>
            <div class="h-[40px] w-[40px] flex justify-center items-center rounded-full border-[1px] border-[#a2a2a2] outerhover">
              <i class="fa-brands fa-facebook fa-lg text-[#a2a2a2] innerhover"></i>
            </div>
            <div class="h-[40px] w-[40px] flex justify-center items-center rounded-full border-[1px] border-[#a2a2a2] outerhover">
              <i class="fa-brands fa-instagram fa-lg text-[#a2a2a2] innerhover"></i>
            </div>
            <div class="h-[40px] w-[40px] flex justify-center items-center rounded-full border-[1px] border-[#a2a2a2] outerhover">
              <i class="fa-brands fa-linkedin fa-lg text-[#a2a2a2] innerhover"></i>
            </div>
          </div>
        </div>
        <!-- 3rd worker -->

        <!-- 4rd worker -->
        <div class="bg-white px-3 rounded-lg px-3 py-3 mt-8">
          <div class="flex justify-center items-center">
            <img src="./Assets/Images/bhavia.jpg" alt="" class="rounded-lg" />
          </div>
          <div class="grid py-3 justify-center text-center items-center">
            <span class="text-[20px] font-bold">Bhavya Shah</span>
            <span class="text-[14px] italic">Accountant</span>
          </div>
          <!-- social media icons -->
          <div class="flex justify-around items-center space-x-6">
            <div class="h-[40px] w-[40px] flex justify-center items-center rounded-full border-[1px] border-[#a2a2a2] outerhover">
              <i class="fa-brands fa-twitter fa-lg text-[#a2a2a2] innerhover"></i>
            </div>
            <div class="h-[40px] w-[40px] flex justify-center items-center rounded-full border-[1px] border-[#a2a2a2] outerhover">
              <i class="fa-brands fa-facebook fa-lg text-[#a2a2a2] innerhover"></i>
            </div>
            <div class="h-[40px] w-[40px] flex justify-center items-center rounded-full border-[1px] border-[#a2a2a2] outerhover">
              <i class="fa-brands fa-instagram fa-lg text-[#a2a2a2] innerhover"></i>
            </div>
            <div class="h-[40px] w-[40px] flex justify-center items-center rounded-full border-[1px] border-[#a2a2a2] outerhover">
              <i class="fa-brands fa-linkedin fa-lg text-[#a2a2a2] innerhover"></i>
            </div>
          </div>
        </div>
        <!-- 4rd worker -->
      </div>
    </div>
  </div>
</main>
<!-- our team section ends -->

<!-- frequently asked questions -->
<main class="bg-[#f6f6f6] pt-10" id="faq">
  <div class="grid justify-center items-center bg-white py-[60px] px-3 sm:px-10 lg:grid-cols-2 lg:items-start xl:px-[75px]">
    <div class="grid justify-start items-center ">
      <div class="flex justify-center items-center text-[34px] sm:justify-start">
        <span>Frequently Asked <span class="font-bold">Questions</span></span>
      </div>
      <div class="flex justify-center items-center">
        <span>
          Here are some frequently asked questions (FAQs) from customers and their corresponding answers.
        </span>
      </div>
    </div>
    <div class="grid  items-center py-8 space-y-4 bg-white sm:px-10 lg:py-0">
      <div class="flex justify-start items-start bg-white shadow-2xl py-4 sm:px-0 ">
        <div class="text-[20px] font-bold text-[#008d7d] flex w-1/4 pt-2 flex justify-center items-center">
          1.
        </div>
        <div class="w-full w-2/4 grid">
          <details class="duration-300 ">
            <summary id="summery" class="font-semibold ">
              How can I track my shipment without a tracking number?
            </summary>
            <div class="py-4 flex justify-start">
              <p>
                Tracking a shipment typically requires a unique tracking number provided at the time of order. If you don't have this number, please reach out to our customer support team, and they will assist you in locating your shipment.
              </p>
            </div>
          </details>
        </div>
        <!-- arrow -->
        <div class="w-1/4 flex justify-center items-center pt-5">
          <i class="fa-solid fa-angle-down fa-lg" id="parentDown"></i>
        </div>
        <!-- arrow -->
      </div>

      <!-- 2 nd -->
      <div class="flex justify-center items-start bg-white shadow-2xl px-3 py-4">
        <div class="text-[20px] font-bold text-[#008d7d] flex w-1/4 flex justify-center items-center">
          2.
        </div>
        <div class="w-full w-2/4 grid">
          <details class="duration-300">
            <summary id="summeryTwo" class="font-semibold">
              Can I change the delivery address or date after placing an order?
            </summary>
            <div class="py-4 flex justify-start">
              <p>
                Yes, you may be able to change the delivery address or date, but it depends on the stage of the delivery process. Please contact our customer support team as soon as possible to make any necessary adjustments.
              </p>
            </div>
          </details>
        </div>
        <!-- arrow -->
        <div class="w-1/4 flex justify-center items-center pt-4">
          <i class="fa-solid fa-angle-down fa-lg" id="parentDownTwo"></i>
        </div>
        <!-- arrow -->
      </div>
      <!-- 2 nd -->

      <!-- 3rd -->
      <div class="flex justify-center items-start bg-white shadow-2xl px-3 py-4">
        <div class="text-[20px] font-bold text-[#008d7d] flex w-1/4 flex justify-center items-center">
          3.
        </div>
        <div class="w-full w-2/4 grid">
          <details class="duration-300">
            <summary id="summeryThree" class="font-semibold">
              Can I request a specific delivery time window for my package?
            </summary>
            <div class="py-4 flex justify-start">
              <p>
                While we cannot guarantee specific time windows, you can often choose a preferred delivery speed (e.g., next-day delivery) to receive your package sooner. You can also leave delivery instructions for the courier to follow whenever possible.
              </p>
            </div>
          </details>
        </div>
        <!-- arrow -->
        <div class="w-1/4 flex justify-center items-center pt-4">
          <i class="fa-solid fa-angle-down fa-lg" id="parentDownThree"></i>
        </div>
        <!-- arrow -->
      </div>
      <!-- 3rd -->

      <!-- 4th  -->
      <div class="flex justify-center items-start bg-white shadow-2xl px-3 py-4">
        <div class="text-[20px] font-bold text-[#008d7d] flex w-1/4 flex justify-center items-center">
          4.
        </div>
        <div class="w-full w-2/4 grid">
          <details class="duration-300">
            <summary id="summeryFour" class="font-semibold">
              How can I claim insurance for a lost or damaged package?
            </summary>
            <div class="py-4 flex justify-start">
              <p>
                To claim insurance for a lost or damaged package, please contact our customer support team. They will guide you through the claims process, which typically involves providing documentation and details about the shipment.
              </p>
            </div>
          </details>
        </div>
        <!-- arrow -->
        <div class="w-1/4 flex justify-center items-center pt-4">
          <i class="fa-solid fa-angle-down fa-lg" id="parentDownFour"></i>
        </div>
        <!-- arrow -->
      </div>
      <!-- 4th  -->

      <!-- 5th -->
      <div class="flex justify-center items-start bg-white shadow-2xl px-3 py-4">
        <div class="text-[20px] font-bold text-[#008d7d] flex w-1/4 flex justify-center items-center">
          5.
        </div>
        <div class="w-full w-2/4 grid">
          <details class="duration-300">
            <summary id="summeryFive" class="font-semibold">
              What happens if the courier misses the delivery attempt?
            </summary>
            <div class="py-4 flex justify-start">
              <p>
                If the courier misses the delivery attempt, they will usually leave a delivery notice or make another attempt on the following business day. You can also contact our customer support team to reschedule the delivery or arrange for pickup at a nearby location
              </p>
            </div>
          </details>
        </div>
        <!-- arrow -->
        <div class="w-1/4 flex justify-center items-center pt-4">
          <i class="fa-solid fa-angle-down fa-lg" id="parentDownFive"></i>
        </div>
        <!-- arrow -->
      </div>
      <!-- 5th -->
    </div>
  </div>
</main>

<!-- contact form  -->
<main class="grid justify-center" id="contact">
  <div class="grid justify-center items-center px-3 sm:px-10">
    <div class="px-3 space-y-6 py-8 grid justify-center items-center">
      <div class="flex justify-center">
        <p class="text-3xl font-semibold text-[32px]">Contact</p>
      </div>

      <div class="flex justify-center items-center">
        <div class="w-[50px] h-[3px] bg-[#008374]"></div>
      </div>

      <div class="text-center text-lg">
        <p>
          We're Here to Serve You. Get in Touch!
        </p>
      </div>
    </div>
  </div>
  <!-- green area starts -->
  <div class="grid  items-center px-3 sm:px-10 lg:grid-cols-2 ">
    <div class="bg-[#008374] px-3 rounded-lg py-5 space-y-5 grid items-center lg:rounded-none">
      <!-- 1st -->
      <div class="flex rounded-lg space-x-4 bg-[#009282] text-white px-3 py-5 justify-start items-center">
        <div class="flex justify-center items-center">
          <i class="fa-solid fa-location-dot fa-lg bg-[#33a89b] h-[44px] w-[44px] rounded-full flex justify-center items-center"></i>
        </div>
        <div class="grid justify-center items-center">
          <span class="text-[20px] font-semibold">Location :</span>
          <span>A108 Adam Street, Jamnagar, Guj 361008</span>
        </div>
      </div>
      <!-- 2nd -->
      <div class="flex rounded-lg space-x-4 bg-[#009282] text-white px-3 py-5 justify-start items-center">
        <div class="flex justify-center items-center">
          <i class="fa-regular fa-envelope fa-lg bg-[#33a89b] h-[44px] w-[44px] rounded-full flex justify-center items-center"></i>
        </div>
        <div class="grid justify-center items-center">
          <span class="text-[20px] font-semibold">Email :</span>
          <span>avinashshiyani760@gmail.com</span>
        </div>
      </div>
      <!-- 3rd -->
      <div class="flex rounded-lg space-x-4 bg-[#009282] text-white px-3 py-5 justify-start items-center">
        <div class="flex justify-center items-center">
          <i class="fa-solid fa-mobile-screen-button fa-lg bg-[#33a89b] h-[44px] w-[44px] rounded-full flex justify-center items-center"></i>
        </div>
        <div class="grid justify-center items-center">
          <span class="text-[20px] font-semibold">Phone :</span>
          <span>+91 9054349356</span>
        </div>
      </div>
      <!-- 4th -->
      <div class="flex rounded-lg space-x-4 bg-[#009282] text-white px-3 py-5 justify-start items-center">
        <div class="flex justify-center items-center">
          <i class="fa-regular fa-clock fa-solid fa-mobile-screen-button fa-lg bg-[#33a89b] h-[44px] w-[44px] rounded-full flex justify-center items-center"></i>
        </div>
        <div class="grid justify-center items-center">
          <span class="text-[20px] font-semibold">Phone :</span>
          <span>Mom-Sat: 9:00AM-9PM</span>
        </div>
      </div>
    </div>
    <!-- inputs div -->
    <form action="./components/input_index_cf.php" method="post">
      <div class="grid items-center py-8 bg-white rounded-lg my-8 shadow-2xl lg:py-4 lg:rounded-none">
        <div class="grid  items-center space-y-6 ">
          <div class="px-6">
            <input type="text" required name="index_name" placeholder="Your Name " class="border-2 py-2 px-4 w-full" />
          </div>
          <div class="px-6">
            <input type="email" required name="index_email" placeholder="Your Email " class="border-2 py-2 px-4 w-full" />
          </div>
          <div class="px-6">
            <input type="text" required name="index_subject" placeholder="Subject" class="border-2 py-2 px-4 w-full" />
          </div>
          <div class="px-6">
            <input type="text" required name="index_message" placeholder="Message" class="border-2 px-4 w-full h-[165px]" />
          </div>
          <div class="px-6 grid justify-center items-center">
            <button class="rounded-full h-[52px] w-[196px] bg-[#008d7d] text-white">
              Send Message
            </button>
          </div>
        </div>
    </form>
  </div>
  </div>
</main>

<!-- footer -->
<main class="bg-[#008374]">
  <div class="grid justify-start items-center lg:grid-cols-2 lg:items-start">
    <div class="grid justify-start px-3 text-white py-6 space-y-3 sm:px-10 xl:px-[75px]">
      <span class="text-[30px] font-bold">CourierHub</span>
      <span>We are a dedicated courier service committed to delivering your parcels with speed, security, and reliability, ensuring your satisfaction every time.</span>
      <div class="flex justify-start items-center space-x-3 py-3 ">
        <div class="h-[40px] w-[40px] flex justify-center items-center rounded-full border-[1px] border-[#a2a2a2] footerouterhover">
          <i class="fa-brands fa-twitter fa-lg text-[#a2a2a2] footerinnerhover"></i>
        </div>
        <div class="h-[40px] w-[40px] flex justify-center items-center rounded-full border-[1px] border-[#a2a2a2] footerouterhover">
          <i class="fa-brands fa-facebook fa-lg text-[#a2a2a2] footerinnerhover"></i>
        </div>
        <div class="h-[40px] w-[40px] flex justify-center items-center rounded-full border-[1px] border-[#a2a2a2] footerouterhover">
          <i class="fa-brands fa-instagram fa-lg text-[#a2a2a2] footerinnerhover"></i>
        </div>
        <div class="h-[40px] w-[40px] flex justify-center items-center rounded-full border-[1px] border-[#a2a2a2] footerouterhover">
          <i class="fa-brands fa-linkedin fa-lg text-[#a2a2a2] footerinnerhover"></i>
        </div>
      </div>
    </div>
    <div class="grid justify-center items-center sm:justify-start sm:px-10 lg:grid-cols-2">
      <div class="grid justify-center items-center space-y-4 text-center text-white opacity-0  sm:justify-start sm:text-start lg:pt-8">
        <span class="font-bold text-[16px]">Useful Links</span>
        <span>Home</span>
        <span>About Us</span>
        <span>Services</span>
        <span>Terms of Service</span>
        <span>Privacy Policy</span>
      </div>
      <div class="grid justify-center items-center py-4 space-y-4 text-center text-white py-[50px] sm:justify-start sm:text-start lg:py-0">
        <span class="text-[16px] font-bold">Contact Us</span>
        <p class="grid">
          A108 Adam Street, Jamnagar, Guj 361008
          <span>A108 Adam Street</span>
          <span>Jamnagar , Guj 361008</span>
          <span>India</span>
        </p>
        <p class="flex">
          <span class="font-bold">Phone:</span>
          <span class="font-sm">+91 9054349356</span>
        </p>
        <p class="flex">
          <span class="font-bold">Email:</span>
          <span class="font-sm">avinashshiyani760@gmail.com</span>
        </p>
      </div>
    </div>
    <div class="grid justify-center items-center text-white text-center py-8 sm:text-center lg:justify-start lg:text-start lg:px-10 xl:px-[75px]">
      <span>
        Copyright
        <span class="font-bold">Avinash</span>
      </span>
      <span>All right reserved Made in TailwindCss</span>
    </div>
  </div>
</main>
<!-- contact ends  -->

<!-- scroll to top -->
<!-- scroll to top -->

<?php include './Html/html_end.php'; ?>
<script src="./Assets/Js/swiper.min.js"></script>
<script src="./Assets/Js/swiperIndex.js"></script>
<script src="./Assets/Js/indexPage.js"></script>
<!-- <div class="grid justify-center items-center">
        <label for="usertracking">Usertracking =</label>
        <input type="text" placeholder="Enter document number" class="border-2">
        <div class="bg-red-100">
            <a href="./Login/admin_login.php">Admin Login</a>
            <a href="./Login/branch_login.php">Branch Login</a>
        </div>
    </div> -->