<?php include('../Html/html_start.php'); ?>
<link rel="stylesheet" href="../Assets/Css/branch_dashboard.css">
<!-- dashboard design starts -->
<!-- navbar starts -->
<nav class="flex items-center fixed w-full">
    <div class="h-[70px] w-full bg-[#191c24] flex items-center px-6">
        <div class="flex justify-start items-center w-full">
            <span class="text-[28px] text-white font-semibold">CH</span>
        </div>
        <div class="flex justify-end w-full items-center space-x-6">
            <a href="../components/show_circular.php">
                <span><i class="fa-solid fa-envelope text-white h-[16px] w-[18px] envelopnoti"></i></span>
            </a>
            <!-- <span><i class="fa-solid fa-bell text-white h-[16px] w-[18px] bellnoti"></i></span> -->
            <span class="h-[35px] w-[35px] rounded-full" id="profile">
                <img src="../Assets/Images/employee.svg" alt="profilepage" class="rounded-full cursor-pointer" />
            </span>
            <span class="flex font-semibold text-white hidden lg:block cursor-pointer" id="profilestring">
                <?= $_SESSION['branch_user']['ab_manager_name'] ?>
                <span><i class="fa-solid fa-chevron-down"></i></span>
            </span>
            <span class="hamburger lg:hidden">
                <i class="fa-solid fa-bars h-[20px] w-[20px] text-[#6C7293]"></i>
            </span>
        </div>
    </div>
</nav>
<!-- navbar ends -->
<!-- logout popup -->
<div class=" grid items-center  fixed w-full right-0 ">
    <div class="absolute grid items-center px-4 top-[35px] duration-700 bg-[#191c24] shadow-2xl drop-shadow-2xl right-0 w-[91.3%] lg:w-[160px] hidden" id="logoutpopup">
        <div class="grid items-center py-4 border-b-[0.1px] border-slate-600">
            <span class="text-white font-bold text-[15px]">Profile</span>
        </div>
        <div class="flex items-center py-4 border-b-[0.1px] border-slate-600">
            <a href="../index.php" class="flex">
                <div class="rounded-full h-[40px] w-[40px] bg-[#0D0D0D] grid items-center justify-center">
                    <i class="fa-solid fa-arrow-right-from-bracket h-[18px] text-[#fc424a]"></i>
                </div>
                <div class="grid items-center px-4">
                    <span class="text-white font-semibold text-[14px]">Log out</span>
                </div>
            </a>
        </div>
    </div>
</div>
<!-- logout popup -->
<div class="lg:flex lg:items-start bg-[#191c24]">
    <div class="hidden lg:block lg:w-1/5 lg:grid lg:justify-center">
        <div class="grid items-center">
            <div class="grid items-center h-full bg-[#191c24]  justify-center pr-6 ">
                <div class="flex items-center  justify-center space-x-4   pt-[80px]">
                    <div class="flex items-center imagenoti">
                        <img src="../Assets/Images/employee.svg" alt="" class="h-[35px] w-[35px] rounded-full ">
                    </div>
                    <div class="grid justify-center items-center py-4">
                        <span class="text-[16px] font-semibold text-white">
                            <?= $_SESSION['branch_user']['ab_manager_name'] ?>
                        </span>
                        <span class="text-[12px] text-[#6C7293]">Gold Member</span>
                    </div>
                    <div>
                        <span><i class="fa-solid fa-ellipsis-vertical text-[#6C7293]"></i></span>
                    </div>
                </div>
                <div class="grid items-start py-1">
                    <!-- 1st -->
                    <a href="../Dashboard/branch_dashboard.php" class="flex">
                        <div class="flex items-center w-full space-x-2  py-2 rounded-r-full px-4">
                            <div class="flex justify-center p-[20px] items-center h-[31px] w-[31px] bg-[rgba(108,114,147,0.2)] rounded-full">
                                <i class="fa-solid fa-gauge-high fa-sm text-[#8f5fe8] text-center"></i>
                            </div>
                            <div class="flex items-center">
                                <span class="text-white font-semibold text-[15px]">Dashboard</span>
                            </div>
                        </div>
                    </a>
                    <!-- 2nd -->
                    <a href="../components/cashbooking.php" class="flex">
                        <div class="flex items-center w-full space-x-2  py-2 rounded-r-full px-4">
                            <div class="flex justify-center p-[20px]  items-center  h-[31px] w-[31px] bg-[rgba(108,114,147,0.2)] rounded-full">
                                <i class="fa-regular fa-money-bill-1 fa-sm text-[#ffab00]  "></i>
                            </div>
                            <div class="flex items-center">
                                <span class="text-white text-[15px] text-[#6C7293]">Cash Booking</span>
                            </div>
                        </div>
                    </a>
                    <!-- 3rd -->
                    <a href="../components/deliverysheet.php" class="flex">
                        <div class="flex items-center w-full space-x-2  py-2 rounded-r-full px-4">
                            <div class="flex justify-center p-[20px] items-center h-[31px] w-[31px] bg-[rgba(108,114,147,0.2)] rounded-full">
                                <i class="fa-solid fa-truck fa-sm text-[#fc424a] text-center"></i>
                            </div>
                            <div class="flex items-center">
                                <span class="text-white  text-[15px]">Delivery Sheet</span>
                            </div>
                        </div>
                    </a>
                    <!-- 4th -->
                    <a href="../components/trackdocument.php" class="flex">
                        <div class="flex items-center w-full space-x-2  py-2 rounded-r-full px-4">
                            <div class="flex justify-center p-[20px] items-center h-[31px] w-[31px] bg-[rgba(108,114,147,0.2)] rounded-full">
                                <i class="fa-solid fa-magnifying-glass fa-sm text-[#0090e7] text-center"></i>
                            </div>
                            <div class="flex items-center">
                                <span class="text-white  text-[15px]">Track Document</span>
                            </div>
                        </div>
                    </a>
                    <!-- 5th -->
                    <a href="../components/accountbooking.php" class="flex">
                        <div class="flex items-center w-full space-x-2 bg-[#0F1015] py-2 rounded-r-full px-4">
                            <div class="flex justify-center p-[20px] items-center h-[31px] w-[31px] bg-[rgba(108,114,147,0.2)] rounded-full">
                                <i class="fa-solid fa-chart-simple fa-sm text-[#00d25b] text-center"></i>
                            </div>
                            <div class="flex items-center">
                                <span class="text-white  text-[15px]">Account Booking</span>
                            </div>
                        </div>
                    </a>
                    <!-- 6th -->
                    <a href="../components/docincoming.php" class="flex">
                        <div class="flex items-center w-full space-x-2  py-2 rounded-r-full px-4">
                            <div class="flex justify-center p-[20px] items-center h-[31px] w-[31px] bg-[rgba(108,114,147,0.2)] rounded-full">
                                <i class="fa-solid fa-file-import fa-sm text-[#8f5fe8] text-center"></i>
                            </div>
                            <div class="flex items-center">
                                <span class="text-white  text-[15px]">Doc Incoming</span>
                            </div>
                        </div>
                    </a>
                    <!--  7th -->
                    <a href="../components/docoutgoing.php" class="flex">
                        <div class="flex items-center w-full space-x-2  py-2 rounded-r-full px-4">
                            <div class="flex justify-center p-[20px] items-center h-[31px] w-[31px] bg-[rgba(108,114,147,0.2)] rounded-full">
                                <i class=""></i>
                                <i class="fa-solid fa-file-export fa-sm text-[#ffab00] text-center"></i>
                            </div>
                            <div class="flex items-center">
                                <span class="text-white  text-[15px]">Doc Outgoing</span>
                            </div>
                        </div>
                    </a>
                    <!-- 8th -->
                    <a href="../components/employee.php" class="flex">
                        <div class="flex items-center w-full space-x-2  py-2 rounded-r-full px-4">
                            <div class="flex justify-center p-[20px] items-center h-[31px] w-[31px] bg-[rgba(108,114,147,0.2)] rounded-full">
                                <i class="fa-solid fa-user-tie fa-sm text-[#00ffff] text-center"></i>
                            </div>
                            <div class="flex items-center">
                                <span class="text-white  text-[15px]">Employee</span>
                            </div>
                        </div>
                    </a>
                    <!-- 9th -->
                    <a href="../index.php" class="flex">
                        <div class="flex items-center w-full space-x-2  py-2 rounded-r-full px-4">
                            <div class="flex justify-center p-[20px] items-center h-[31px] w-[31px] bg-[rgba(108,114,147,0.2)] rounded-full">
                                <i class="fa-solid fa-arrow-right-from-bracket fa-sm text-[#fc424a] text-center"></i>
                            </div>
                            <div class="flex items-center">
                                <span class="text-white  text-[15px]">Logout</span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="w-4/5 w-full grid items-center  pt-[75px]">
        <!-- cash booking stars  -->
        <div class="bg-[#000000] grid items-center px-6 py-3 ">
            <p class="text-white font-semibold">Account Booking</p>
            <form action="../controller/insert_accountbooking.php" method="post">
                <input type="hidden" name="user_id" value="<?php echo $_SESSION['branch_user']['ab_id'] ?>">
                <div class="grid items-center xl:grid-cols-2 xl:py-3 xl:gap-6 xl:items-start">
                    <div class="grid items-center my-6 px-4 py-6 bg-[#191C24] xl:my-0">
                        <div class="grid items-center space-y-3">
                            <p class="text-white font-semibold text-[20px]">From :-</p>
                            <div class="grid items-center text-white space-y-2.5">
                                <label for="">Account Name =</label>
                                <input type="text" name="from_name" required placeholder="From Name" class="h-[38px] bg-[#2A3038] px-3">
                            </div>
                            <div class="grid items-center text-white space-y-2.5">
                                <label for="">Mobile No =</label>
                                <input type="text" name="from_phno" required placeholder="From Phno" class="h-[38px] bg-[#2A3038] px-3">
                            </div>
                        </div>
                    </div>
                    <div class="grid items-center  px-6 py-4 bg-[#191C24]">
                        <div class="grid items-center space-y-3">
                            <p class="text-white font-semibold text-[20px]">To :-</p>
                            <div class="grid items-center text-white space-y-2.5">
                                <label for="">Document No =</label>
                                <input type="text" name="document_no" required placeholder="Document No" class="h-[38px] bg-[#2A3038] px-3">
                            </div>
                            <div class="grid items-center text-white space-y-2.5">
                                <label for="">Name =</label>
                                <input type="text" name="to_name" required placeholder="To Name" class="h-[38px] bg-[#2A3038] px-3">
                            </div>
                            <?php
                            include '../connection/conn.php';
                            $query = "SELECT DISTINCT `ab_branch_city` FROM `add_branch`";
                            $insert = mysqli_query($con, $query);
                            ?>
                            <div class="grid items-center text-white space-y-2.5">
                                <label for="">City =</label>
                                <select name="to_city" class="h-[38px] bg-[#2A3038] px-3">
                                    <?php foreach ($insert as $data) : ?>
                                        <option value="<?= $data['ab_branch_city'] ?>"><?= $data['ab_branch_city'] ?></option>
                                    <?php endforeach ?>
                                </select>
                                <!-- <input type="text" required placeholder="<?= $data['ab_branch_city'] ?>" class="h-[38px] bg-[#2A3038] px-3"> -->
                            </div>
                            <div class="grid items-center text-white space-y-2.5">
                                <label for="">Courier Type =</label>
                                <select name="to_courier_type" class="h-[38px] bg-[#2A3038] px-3">
                                    <option value="Document">Document</option>
                                    <option value="Parcel">Parcel</option>
                                </select>
                            </div>
                            <div class="grid items-center text-white space-y-2.5">
                                <label for="">Weight =</label>
                                <input type="text" name="to_weight" required placeholder="Weight" class="h-[38px] bg-[#2A3038] px-3">
                            </div>
                            <div class="grid items-center text-white space-y-2.5">
                                <label for="">Address =</label>
                                <input type="text" name="to_address" required placeholder="To Address" class="h-[38px] bg-[#2A3038] px-3">
                            </div>
                            <div class="grid items-center text-white space-y-2.5">
                                <label for="">Total Amount =</label>
                                <input type="text" name="to_total_amt" required placeholder="From Name" class="h-[38px] bg-[#2A3038] px-3">
                            </div>
                            <div class="flex items-center text-white space-x-2.5 font-semibold">
                                <div class="">
                                    <a href="../components/printinfo/accountbooking_print.php">
                                        <button class="bg-[#0090e7] h-[30px] w-[75px] text-[15px] rounded-sm">Submit</button>
                                    </a>
                                </div>
                                <div class="">
                                    <a href="">
                                        <button type="submit" class="bg-[#0D0D0D] h-[30px]  w-[75px] text-[15px] rounded-sm">Cancel</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- hamburger opop up -->
<div class="fixed top-[70px] grid items-start justify-end xl:hidden  right-0 left-[10500px] duration-500  hamburgerorg">
    <div class="grid items-start h-[520px] bg-[#191c24]  justify-center pr-6 ">
        <div class="flex items-center justify-center space-x-4 px-4 ">
            <div class="flex items-center imagenoti">
                <img src="../Assets/Images/employee.svg" alt="" class="h-[35px] w-[35px] rounded-full ">
            </div>
            <div class="grid justify-start pr-10">
                <span class="text-[16px] font-semibold text-white">
                    <?= $_SESSION['branch_user']['ab_manager_name'] ?>
                </span>
                <span class="text-[12px] text-[#6C7293]">Gold Member</span>
            </div>
            <div>
                <span><i class="fa-solid fa-ellipsis-vertical text-[#6C7293]"></i></span>
            </div>
        </div>
        <div class="grid items-start -mt-6">
            <!-- 1st -->
            <a href="" class="flex">
                <div class="flex items-center w-full space-x-2  py-1 rounded-r-full px-4">
                    <div class="flex justify-center p-[20px] items-center h-[31px] w-[31px] bg-[rgba(108,114,147,0.2)] rounded-full">
                        <i class="fa-solid fa-gauge-high fa-sm text-[#8f5fe8] text-center"></i>
                    </div>
                    <div class="flex items-center">
                        <span class="text-white font-semibold text-[15px]">Dashboard</span>
                    </div>
                </div>
            </a>
            <!-- 2nd -->
            <a href="../components/cashbooking.php" class="flex">
                <div class="flex items-center w-full space-x-2 py-1 rounded-r-full px-4">
                    <div class="flex justify-center p-[20px]  items-center  h-[31px] w-[31px] bg-[rgba(108,114,147,0.2)] rounded-full">
                        <i class="fa-regular fa-money-bill-1 fa-sm text-[#ffab00]  "></i>
                    </div>
                    <div class="flex items-center">
                        <span class="text-white text-[15px] text-[#6C7293]">Cash Booking</span>
                    </div>
                </div>
            </a>
            <!-- 3rd -->
            <a href="../components/deliverysheet.php" class="flex">
                <div class="flex items-center w-full space-x-2  py-1 rounded-r-full px-4">
                    <div class="flex justify-center p-[20px] items-center h-[31px] w-[31px] bg-[rgba(108,114,147,0.2)] rounded-full">
                        <i class="fa-solid fa-truck fa-sm text-[#fc424a] text-center"></i>
                    </div>
                    <div class="flex items-center">
                        <span class="text-white  text-[15px]">Delivery Sheet</span>
                    </div>
                </div>
            </a>
            <!-- 4th -->
            <a href="../components/trackdocument.php" class="flex">
                <div class="flex items-center w-full space-x-2  py-1 rounded-r-full px-4">
                    <div class="flex justify-center p-[20px] items-center h-[31px] w-[31px] bg-[rgba(108,114,147,0.2)] rounded-full">
                        <i class="fa-solid fa-magnifying-glass fa-sm text-[#0090e7] text-center"></i>
                    </div>
                    <div class="flex items-center">
                        <span class="text-white  text-[15px]">Track Document</span>
                    </div>
                </div>
            </a>
            <!-- 5th -->
            <a href="../components/accountbooking.php" class="flex">
                <div class="flex items-center w-full space-x-2  py-1 rounded-r-full px-4">
                    <div class="flex justify-center p-[20px] items-center h-[31px] w-[31px] bg-[rgba(108,114,147,0.2)] rounded-full">
                        <i class="fa-solid fa-chart-simple fa-sm text-[#00d25b] text-center"></i>
                    </div>
                    <div class="flex items-center">
                        <span class="text-white  text-[15px]">Account Booking</span>
                    </div>
                </div>
            </a>
            <!-- 6th -->
            <a href="../components/docincoming.php" class="flex">
                <div class="flex items-center w-full space-x-2  py-1 rounded-r-full px-4">
                    <div class="flex justify-center p-[20px] items-center h-[31px] w-[31px] bg-[rgba(108,114,147,0.2)] rounded-full">
                        <i class="fa-solid fa-file-import fa-sm text-[#8f5fe8] text-center"></i>
                    </div>
                    <div class="flex items-center">
                        <span class="text-white  text-[15px]">Doc Incoming</span>
                    </div>
                </div>
            </a>
            <!--  7th -->
            <a href="../components/docoutgoing.php" class="flex">
                <div class="flex items-center w-full space-x-2  py-1 rounded-r-full px-4">
                    <div class="flex justify-center p-[20px] items-center h-[31px] w-[31px] bg-[rgba(108,114,147,0.2)] rounded-full">
                        <i class=""></i>
                        <i class="fa-solid fa-file-export fa-sm text-[#ffab00] text-center"></i>
                    </div>
                    <div class="flex items-center">
                        <span class="text-white  text-[15px]">Doc Outgoing</span>
                    </div>
                </div>
            </a>
            <!-- 8th -->
            <a href="../components/employee.php" class="flex">
                <div class="flex items-center w-full space-x-2  py-1 rounded-r-full px-4">
                    <div class="flex justify-center p-[20px] items-center h-[31px] w-[31px] bg-[rgba(108,114,147,0.2)] rounded-full">
                        <i class="fa-solid fa-user-tie fa-sm text-[#00ffff] text-center"></i>
                    </div>
                    <div class="flex items-center">
                        <span class="text-white  text-[15px]">Employee</span>
                    </div>
                </div>
            </a>
            <!-- 9th -->
            <a href="../index.php" class="flex">
                <div class="flex items-center w-full space-x-2  py-1 rounded-r-full px-4">
                    <div class="flex justify-center p-[20px] items-center h-[31px] w-[31px] bg-[rgba(108,114,147,0.2)] rounded-full">
                        <i class="fa-solid fa-arrow-right-from-bracket fa-sm text-[#fc424a] text-center"></i>
                    </div>
                    <div class="flex items-center">
                        <span class="text-white  text-[15px]">Logout</span>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>
<!-- hamburger opop up -->
<!-- messages and to do list over -->
<!-- dashboard design ends -->


<?php include('../Html/html_end.php'); ?>
<script src="../Assets/Js/branchDashboard.js"></script>