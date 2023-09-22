<!-- login form starts -->
<?php include('../Html/html_start.php'); ?>
<link rel="stylesheet" href="../Assets/Css/login.css">
<main class="gradient h-screen w-screen grid justify-center items-center p-4 py-4">
    <div class="flex bg-white rounded-lg space-y-3 bg-red-300  px-4">
        <div class="grid justify-center items-center hidden md:block md:flex md:items-center md:px-10">
            <img src="../Assets/Images/login-left-img.webp" alt="">
        </div>
        <form action="../controller/check_admin_login.php" method="post">
            <div class="grid justify-center items-center py-10 md:px-10">
                <div class="text-center text-[24px] font-bold pt-16 my-7 text-[#333333]">
                    <p>Admin Login</p>
                </div>
                <div class="w-full space-y-3">
                    <!-- username -->
                    <label for="email" class="absolute mt-[26px] ml-8 ">
                        <i class="fa-solid fa-envelope  text-[#666666] iconStyle"></i>
                    </label>
                    <input type="email" name="admin_email" required placeholder="Email" class="w-full  pl-16 h-[50px] bg-[#E6E6E6] rounded-3xl outline-none a focusUser ">
                    <!-- password -->
                    <label for="password" class="absolute pt-[13px] ml-8">
                        <i class="fa-solid fa-lock text-[#666666] passIconStyle"></i>
                    </label>
                    <input type="password" name="admin_password" required placeholder="Password" class="w-full pl-16 h-[50px] bg-[#E6E6E6] rounded-3xl outline-none focusPass ">
                    <label for="passsword">
                        <i class="fa-regular fa-eye absolute mt-[30px] -ml-[30px] eyeBtn opacity-0 cursor-pointer"></i>
                    </label>

                </div>

                <div class="grid font-bold text-white pt-4">
                    <a href="../Dashboard/admin_dashboard.php">
                        <button class="h-[50px] bg-[#57b846] w-full rounded-3xl outline-none loginBtn hover:bg-black">
                            LOGIN
                        </button>
                    </a>
                </div>
                <div class="flex justify-center text-[14px] items-center py-1 pt-28 text-[#666666]">
                    <a href="../index.php">
                        <i class="fa-solid fa-arrow-left rounded-3xl border-2 p-2  px-2.5 hover:text-[#57b846] hover:border-[#57b846]"></i>
                    </a>
                </div>
            </div>
    </div>
    </form>

</main>
<?php include('../Html/html_end.php'); ?>

<script src="../Assets/Js/loginPage.js"></script>