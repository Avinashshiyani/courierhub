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
            <span><i class="fa-solid fa-envelope text-white h-[16px] w-[18px] envelopnoti"></i></span>
            <!-- <span><i class="fa-solid fa-bell text-white h-[16px] w-[18px] bellnoti"></i></span> -->
            <span class="h-[35px] w-[35px] rounded-full" id="profile">
                <img src="../Assets/Images/admin.png" alt="profilepage" class="rounded-full cursor-pointer" />
            </span>
            <span class="flex font-semibold text-white hidden lg:block cursor-pointer" id="profilestring">
                Admin
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
            <a href="../index.php">
                <div class="rounded-full h-[40px] w-[40px] bg-[#0D0D0D] grid items-center justify-center">
                    <i class="fa-solid fa-arrow-right-from-bracket h-[18px] text-[#fc424a]"></i>
                </div>
                <div class="grid items-center px-4">
                    <span class="text-white font-semibold text-[14px]">Log out</span>
            </a>
        </div>
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
                        <img src="../Assets/Images/admin.png" alt="" class="h-[35px] w-[35px] rounded-full ">
                    </div>
                    <div class="grid justify-center items-center py-4">
                        <span class="text-[16px] font-semibold text-white">Admin</span>
                        <span class="text-[12px] text-[#6C7293]">Diamond Member</span>
                    </div>
                    <div>
                        <span><i class="fa-solid fa-ellipsis-vertical text-[#6C7293]"></i></span>
                    </div>
                </div>
                <div class="grid items-start py-1">
                    <!-- 1st -->
                    <a href="" class="flex">
                        <div class="flex items-center w-full space-x-2 bg-[#0F1015] py-2 rounded-r-full px-4">
                            <div class="flex justify-center p-[20px] items-center h-[31px] w-[31px] bg-[rgba(108,114,147,0.2)] rounded-full">
                                <i class="fa-solid fa-gauge-high fa-sm text-[#8f5fe8] text-center"></i>
                            </div>
                            <div class="flex items-center">
                                <span class="text-white font-semibold text-[15px]">Dashboard</span>
                            </div>
                        </div>
                    </a>
                    <!-- 2nd -->
                    <a href="../components/admin_addbranch.php" class="flex">
                        <div class="flex items-center w-full space-x-2 py-2 rounded-r-full px-4">
                            <div class="flex justify-center p-[20px]  items-center  h-[31px] w-[31px] bg-[rgba(108,114,147,0.2)] rounded-full">
                                <i class="fa-solid fa-code-branch fa-sm text-[#ffab00]  "></i>
                            </div>
                            <div class="flex items-center">
                                <span class="text-white text-[15px] text-[#6C7293]">Add Branch</span>
                            </div>
                        </div>
                    </a>
                    <!-- 3rd -->
                    <a href="../components/admin_branchoperations.php" class="flex">
                        <div class="flex items-center w-full space-x-2  py-2 rounded-r-full px-4">
                            <div class="flex justify-center p-[20px] items-center h-[31px] w-[31px] bg-[rgba(108,114,147,0.2)] rounded-full">
                                <i class="fa-solid fa-filter fa-sm text-[#fc424a] text-center"></i>
                            </div>
                            <div class="flex items-center">
                                <span class="text-white  text-[15px]">Branch Operations</span>
                            </div>
                        </div>
                    </a>
                    <!-- 4th -->
                    <a href="../components/admin_trackdocument.php" class="flex">
                        <div class="flex items-center w-full space-x-2  py-2 rounded-r-full px-4">
                            <div class="flex justify-center p-[20px] items-center h-[31px] w-[31px] bg-[rgba(108,114,147,0.2)] rounded-full">
                                <i class="fa-solid fa-magnifying-glass fa-sm text-[#0090e7] text-center"></i>
                            </div>
                            <div class="flex items-center">
                                <span class="text-white  text-[15px]">Track Document</span>
                            </div>
                        </div>
                    </a>
                    <a href="../components/admin_addcircular.php" class="flex">
                        <div class="flex items-center w-full space-x-2  py-2 rounded-r-full px-4">
                            <div class="flex justify-center p-[20px] items-center h-[31px] w-[31px] bg-[rgba(108,114,147,0.2)] rounded-full">
                                <i class="fa-solid fa-book fa-sm text-[#ffab00] text-center"></i>
                            </div>
                            <div class="flex items-center">
                                <span class="text-white  text-[15px]">Add Circular</span>
                            </div>
                        </div>
                    </a>
                    <!-- 8th -->
                    <a href="../components/admin_employee.php" class="flex">
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

    <div class="w-4/5 w-full grid items-center">
        <div class="bg-[#000000] pt-[72px]  grid items-center ">
            <!-- mq control box starts -->
            <div class="grid items-center w-full px-7 space-y-6 py-6 sm:grid-cols-2 sm:space-y-0 sm:gap-6 xl:grid-cols-4">
                <!-- 1st box starts -->
                <?php
                include '../connection/conn.php';
                $query = "SELECT COUNT(*) as t_cash_booking FROM `cash_booking`";
                $select = mysqli_query($con, $query);
                $total = 0;
                foreach ($select as $row) {
                    $cb_totalamt = $row['t_cash_booking'];
                    $total = $cb_totalamt;
                }
                ?>
                <a href="../components/show_admin_cash.php">
                    <div class="flex items-center h-[120px]  bg-[#191c24] px-6 rounded-lg">
                        <div class="flex text-white w-full">
                            <div class="grid  w-full ">
                                <div class="flex items-center ">
                                    <div>
                                        <span class="text-[24px] font-bold"><?= $total ?></span>
                                    </div>
                                    <div class="flex items-center px-2">
                                        <span class="text-[#00D25B] text-[14px] font-semibold">+3.5%</span>
                                    </div>
                                </div>
                                <div>
                                    <span class="text-[#6C7293] text-[15px]">Total Cash Booking</span>
                                </div>
                            </div>
                            <div class="flex items-center">
                                <div class=" flex items-center justify-center">
                                    <span class="h-[37px] w-[40px] bg-[rgba(0,210,91,0.11)] flex justify-center items-center ">
                                        <i class="fa-solid fa-arrow-trend-up h-[30px] w-[20px] pt-[7px] text-[#00D25B]"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                <!-- 1st box ends -->
                <?php
                $acc_query = "SELECT COUNT(*) as row_count FROM `account_booking`";
                $acc_select = mysqli_query($con, $acc_query);
                $acc_total = 0;
                foreach ($acc_select as $acc_row) {
                    $acc_totalamt = $acc_row['row_count'];
                    $acc_total = $acc_totalamt;
                }
                ?>
                <!-- 2nd box starts -->
                <a href="../components/show_admin_acc.php">

                    <div class="flex items-center h-[120px]  bg-[#191c24] px-6 rounded-md ">
                        <div class="flex text-white w-full">
                            <div class="grid  w-full ">
                                <div class="flex items-center">
                                    <div>
                                        <span class="text-[24px] font-bold"><?= $acc_total ?></span>
                                    </div>
                                    <div class="flex items-center px-2">
                                        <span class="text-[#00D25B] text-[14px] font-semibold">+11%</span>
                                    </div>
                                </div>
                                <div>
                                    <span class="text-[#6C7293] text-[15px]">Total Account Booking</span>
                                </div>
                            </div>
                            <div class="flex items-center">
                                <div class=" flex items-center justify-center">
                                    <span class="h-[37px] w-[40px] bg-[rgba(0,210,91,0.11)] flex justify-center items-center ">
                                        <i class="fa-solid fa-arrow-trend-up h-[30px] w-[20px] pt-[7px] text-[#00D25B]"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                <!-- 2nd box ends -->
                <?php
                $di_query = "SELECT COUNT(*) as di_total FROM `document_inner_incoming`";
                $di_select = mysqli_query($con, $di_query);
                $di_total = 0;
                foreach ($di_select as $di_row) {
                    $di_totalamt = $di_row['di_total'];
                    $di_total = $di_totalamt;
                }
                ?>
                <a href="../components/show_admin_doc_inc.php">
                    <!-- 3rd box starts -->
                    <div class="flex items-center h-[120px]  bg-[#191c24] px-6 rounded-md">
                        <div class="flex text-white w-full">
                            <div class="grid  w-full ">
                                <div class="flex items-center">
                                    <div>
                                        <span class="text-[24px] font-bold"><?= $di_total ?></span>
                                    </div>
                                    <div class="flex items-center px-2">
                                        <span class="text-[#FC424A] text-[14px] font-semibold">-2.4%</span>
                                    </div>
                                </div>
                                <div>
                                    <span class="text-[#6C7293] text-[15px]">Document Incoming</span>
                                </div>
                            </div>
                            <div class="flex items-center">
                            <div class=" flex items-center justify-center">
                                <span class="h-[37px] w-[40px] bg-[rgba(252,66,74,0.11)] flex justify-center items-center ">
                                    <i class="fa-solid fa-arrow-trend-down h-[30px] w-[20px] pt-[7px] text-[#FC424A]"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </a>

                <!-- 3rd box ends -->
                <?php
                $do_query = "SELECT COUNT(*) as total_rows FROM `document_outer_outgoing`";
                $do_select = mysqli_query($con, $do_query);
                $do_total = 0;
                foreach ($do_select as $do_row) {
                    $do_totalamt = $do_row['total_rows'];
                    $do_total = $do_totalamt;
                }
                ?>
                <a href="../components/show_admin_doc_out.php">
                    <!-- 4th box starts -->
                    <div class="flex items-center h-[120px]  bg-[#191c24] px-6 rounded-md">
                        <div class="flex text-white w-full">
                            <div class="grid  w-full ">
                                <div class="flex items-center">
                                    <div>
                                        <span class="text-[24px] font-bold"><?= $do_total ?></span>
                                    </div>
                                    <div class="flex items-center px-2">
                                        <span class="text-[#00D25B] text-[14px] font-semibold">+3.5%</span>
                                    </div>
                                </div>
                                <div>
                                    <span class="text-[#6C7293] text-[15px]">Document Outgoing</span>
                                </div>
                            </div>
                            <div class="flex items-center">
                                <div class=" flex items-center justify-center">
                                    <span class="h-[37px] w-[40px] bg-[rgba(0,210,91,0.11)] flex justify-center items-center ">
                                        <i class="fa-solid fa-arrow-trend-up h-[30px] w-[20px] pt-[7px] text-[#00D25B]"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                    <!-- 4th box ends -->
            </div>

            <!-- mq control box ends -->

            <!-- big mq control starts -->
            <div class="grid  items-center px-7 space-y-6 sm:grid-cols-2 sm:space-y-0 sm:gap-6 xl:grid-cols-4">
                <?php
                include '../connection/conn.php';
                $tcb_query = "SELECT * FROM `cash_booking`";
                $tcb_select = mysqli_query($con, $tcb_query);
                $tcb_total = 0;
                foreach ($tcb_select as $tcb_row) {
                    $tcb_totalamt = $tcb_row['cb_totalamt'];
                    $tcb_total += $tcb_totalamt;
                }
                ?>
                <!-- 1st box starts -->
                <div class="flex  items-center h-[183px] bg-[#191c24] px-6 text-white w-full space-x-1">
                    <div class="grid items-center ">
                        <div class="flex items-center -pt-[10px]">
                            <span class="text-[18px]  font-semibold">
                                Total
                            </span>
                        </div>
                        <div class="flex items-center space-x-1">
                            <span class="text-[34px] font-bold">&#x20B9;<?= $tcb_total ?></span>
                            <span class="text-[#00D25B] text-[14px] font-semibold">+3.5%</span>
                        </div>
                        <div class="flex items-center ">
                            <span class="text-[#6C7293] text-[17px]">Cash Booking</span>
                        </div>
                    </div>
                    <div class="flex justify-end w-full items-center">
                        <i class="fa-brands fa-unity fa-2xl text-[#0090e7]"></i>
                    </div>
                </div>
                <!-- 1st box ends -->
                <?php
                include '../connection/conn.php';
                $ab_query = "SELECT * FROM `account_booking`";
                $ab_select = mysqli_query($con, $ab_query);
                $ab_total = 0;
                foreach ($ab_select as $ab_row) {
                    $ab_totalamt = $ab_row['ab_totalamt'];
                    $ab_total += $ab_totalamt;
                }
                ?>
                <!-- 2nd box starts -->
                <div class="flex  items-center h-[183px] bg-[#191c24] px-6 text-white w-full space-x-1">
                    <div class="grid items-center">
                        <div class="flex items-center -pt-[10px]">
                            <span class="text-[18px]  font-semibold">
                                Total
                            </span>
                        </div>
                        <div class="flex items-center space-x-1">
                            <span class="text-[34px] font-bold">&#x20B9;<?= $ab_total ?></span>
                            <span class="text-[#00D25B] text-[14px] font-semibold">+8.3%</span>
                        </div>
                        <div class="flex items-center ">
                            <span class="text-[#6C7293] text-[17px]">Acc Booking</span>
                        </div>
                    </div>
                    <div class="flex justify-end w-full items-center">
                        <i class="fa-solid fa-briefcase fa-2xl text-[#fc424a]"></i>
                    </div>
                </div>
                <!-- 2nd box ends -->
                <?php
                include '../connection/conn.php';
                $e_query = "SELECT `ae_salary`  FROM `admin_employee`";
                $e_select = mysqli_query($con, $e_query);
                $e_total = 0;
                foreach ($e_select as $e_row) {
                    $e_totalamt = $e_row['ae_salary'];
                    $e_total += $e_totalamt;
                }
                ?>
                <!-- 3rd box starts -->
                <div class="flex  items-center h-[183px] bg-[#191c24] px-6 text-white w-full space-x-1">
                    <div class="grid items-center">
                        <div class="flex items-center -pt-[10px]">
                            <span class="text-[18px]  font-semibold">
                                Salary
                            </span>
                        </div>
                        <div class="flex items-center space-x-1">
                            <span class="text-[34px] font-bold">&#x20B9;<?= $e_total ?></span>
                            <span class="text-[#FC424A] text-[14px] font-semibold">-2.1%</span>
                        </div>
                        <div class="flex items-center ">
                            <span class="text-[#6C7293] text-[17px]">Employee Salary</span>
                        </div>
                    </div>
                    <div class="flex justify-end w-full items-center">
                        <i class="fa-solid fa-tv fa-2xl text-[#00d25b]"></i>
                    </div>
                </div>
                <!-- 3rd box ends -->

                <!-- 4th box starts -->
                <div class="flex  items-center h-[183px] bg-[#191c24] px-6 text-white w-full space-x-1">
                    <div class="grid items-center">
                        <div class="flex items-center -pt-[10px]">
                            <span class="text-[18px]  font-semibold">
                                Over all
                            </span>
                        </div>
                        <div class="flex items-center space-x-1">
                            <span class="text-[34px] font-bold">&#x20B9;<?= $tcb_total + $ab_total + $e_total ?></span>
                            <span class="text-[#00D25B] text-[14px] font-semibold">+3.5%</span>
                        </div>
                        <div class="flex items-center ">
                            <span class="text-[#6C7293] text-[17px]">All Over Turnover</span>
                        </div>
                    </div>
                    <div class="flex justify-end w-full items-center">
                        <i class="fa-brands fa-unity fa-2xl text-[#0090e7]"></i>
                    </div>
                </div>
                <!-- 4th box ends -->
            </div>
            <!-- big mq control ends -->
        </div>
        <!-- main design ends -->
        <!-- messages and to do list starts -->
        <?php 
                $i_query = "SELECT * FROM `index_contact` ORDER BY `ic_id` DESC LIMIT 4";
                $i_select = mysqli_query($con,$i_query);
                $i_row = mysqli_fetch_all($i_select,MYSQLI_ASSOC);
                // print_r($i_row);
        ?>
        <main class="bg-[#000000]">
            <div class="grid items-center py-6 px-7 space-y-6 md:grid-cols-2 md:gap-6 md:items-start md:space-y-0">
                <!-- messages div -->
                <div class="grid items-center py-6 px-6  bg-[#191c24]">
                    <div class="flex text-white  rounded-md ">
                        <span>Messages</span>
                    </div>
                    <!-- messages box -->
                    <?php foreach($i_row as $ip_row): ?>
                    <div class="flex items-center py-6 text-white border-slate-600 border-b-[0.1px] space-x-4">
                        <div class="w-1/6 flex  items-start">
                            <img src="../Assets/Images/customer_dashboard.jpg" alt="face6" class="h-[40px] w-[40px] rounded-full">
                        </div>
                        <div class="w-5/6 grid items-center">
                            <div class="flex items-center justify-between py-1">
                                <span class="font-bold text-[16px]"><?= $ip_row['ic_name'] ?></span>
                                <span class="text-[#6C7293]  text-[14px]">Today</span>
                            </div>
                            <span class="text-[14px] text-[#6C7293]"><?= $ip_row['ic_message']?></span>
                        </div>
                    </div>
                    <?php endforeach ?>
                </div>
            </div>
        </main>
    </div>
</div>

<!-- hamburger opop up -->
<div class="fixed top-[70px] grid items-start justify-end xl:hidden  right-0 left-[10500px] duration-500  hamburgerorg">
    <div class="grid items-start h-[520px] bg-[#191c24]  justify-center pr-6 ">
        <div class="flex items-center justify-center space-x-4 px-4 ">
            <div class="flex items-center imagenoti">
                <img src="../Assets/Images/admin.png" alt="" class="h-[35px] w-[35px] rounded-full ">
            </div>
            <div class="grid justify-start pr-10">
                <span class="text-[16px] font-semibold text-white">Admin</span>
                <span class="text-[12px] text-[#6C7293]">Diamond Member</span>
            </div>
            <div>
                <span><i class="fa-solid fa-ellipsis-vertical text-[#6C7293]"></i></span>
            </div>
        </div>
        <div class="grid items-start -mt-6">
            <!-- 1st -->
            <a href="" class="flex">
                <div class="flex items-center w-full space-x-2 bg-[#0F1015] py-2 rounded-r-full px-4">
                    <div class="flex justify-center p-[20px] items-center h-[31px] w-[31px] bg-[rgba(108,114,147,0.2)] rounded-full">
                        <i class="fa-solid fa-gauge-high fa-sm text-[#8f5fe8] text-center"></i>
                    </div>
                    <div class="flex items-center">
                        <span class="text-white font-semibold text-[15px]">Dashboard</span>
                    </div>
                </div>
            </a>
            <!-- 2nd -->
            <a href="../components/admin_addbranch.php" class="flex">
                <div class="flex items-center w-full space-x-2 py-2 rounded-r-full px-4">
                    <div class="flex justify-center p-[20px]  items-center  h-[31px] w-[31px] bg-[rgba(108,114,147,0.2)] rounded-full">
                        <i class="fa-solid fa-code-branch fa-sm text-[#ffab00]  "></i>
                    </div>
                    <div class="flex items-center">
                        <span class="text-white text-[15px] text-[#6C7293]">Add Branch</span>
                    </div>
                </div>
            </a>
            <!-- 3rd -->
            <a href="../components/admin_branchoperations.php" class="flex">
                <div class="flex items-center w-full space-x-2  py-2 rounded-r-full px-4">
                    <div class="flex justify-center p-[20px] items-center h-[31px] w-[31px] bg-[rgba(108,114,147,0.2)] rounded-full">
                        <i class="fa-solid fa-filter fa-sm text-[#fc424a] text-center"></i>
                    </div>
                    <div class="flex items-center">
                        <span class="text-white  text-[15px]">Branch Operations</span>
                    </div>
                </div>
            </a>
            <!-- 4th -->
            <a href="../components/admin_trackdocument.php" class="flex">
                <div class="flex items-center w-full space-x-2  py-2 rounded-r-full px-4">
                    <div class="flex justify-center p-[20px] items-center h-[31px] w-[31px] bg-[rgba(108,114,147,0.2)] rounded-full">
                        <i class="fa-solid fa-magnifying-glass fa-sm text-[#0090e7] text-center"></i>
                    </div>
                    <div class="flex items-center">
                        <span class="text-white  text-[15px]">Track Document</span>
                    </div>
                </div>
            </a>
            <a href="../components/admin_addcircular.php" class="flex">
                <div class="flex items-center w-full space-x-2  py-2 rounded-r-full px-4">
                    <div class="flex justify-center p-[20px] items-center h-[31px] w-[31px] bg-[rgba(108,114,147,0.2)] rounded-full">
                        <i class="fa-solid fa-book fa-sm text-[#ffab00] text-center"></i>
                    </div>
                    <div class="flex items-center">
                        <span class="text-white  text-[15px]">Add Circular</span>
                    </div>
                </div>
            </a>
            <!-- 8th -->
            <a href="../components/admin_employee.php" class="flex">
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
<!-- hamburger opop up -->
<!-- messages and to do list over -->
<!-- dashboard design ends -->


<?php include('../Html/html_end.php'); ?>
<script src="../Assets/Js/branchDashboard.js"></script>
<!-- <div class="absolute flex justify-center items-center w-screen h-screen ">
    <h1>Welcome to dashboard</h1>   

    <div class="p-5">
        <p>Total cashbooking</p>

        <p>Total Account booking</p>

        <p>Date - dd/mm/yyyy</p>

        <p>City - Jamnagar</p>
    </div>
</div>
<div class="grid justify-start p-2 items-center space-y-16 border-2 bg-grey-100 absolute ">
    <a href="../components/cashbooking.php">
        <p>Cashbooking</p>
    </a>
    <a href="../components/deliverysheet.php">
        <p>Delivery sheet</p>
    </a>
    <a href="../components/trackdocument.php">
        <p>Track Document</p>
    </a>
    <a href="../components/accountbooking.php">
        <p>Acccount Booking</p>
    </a>
    <a href="../components/docincoming.php">
        <p>Doc Incoming</p>
    </a>
    <a href="../components/docoutgoing.php">
        <p>Doc Outgoing</p>
    </a>
    <a href="../components/employee.php">
        <p>Employee</p>
    </a>
    <a href="../index.php">
        <p>Log Out</p>
    </a>
  
</div> -->