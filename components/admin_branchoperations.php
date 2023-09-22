<?php

include '../connection/conn.php';
$query = "SELECT * FROM `add_branch`";
$insert = mysqli_query($con, $query);
?>
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
                    <a href="../Dashboard/admin_dashboard.php" class="flex">
                        <div class="flex items-center w-full space-x-2 py-2 rounded-r-full px-4">
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
                        <div class="flex items-center w-full space-x-2 bg-[#0F1015] py-2 rounded-r-full px-4">
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
    <div class="w-4/5 w-full grid items-center  pt-[75px]">
        <!-- cash booking stars  -->
        <div class="bg-[#000000] grid  items-center px-6 py-3 ">
            <p class="text-white font-semibold">Branch Operations</p>
            <div class="grid items-start h-screen xl:grid-cols-2 xl:py-3 xl:gap-6 xl:items-start">
                <div class="grid items-start my-6 px-4 py-6 bg-[#191C24] xl:my-0">
                    <div class="grid items-center space-y-3">
                        <p class="text-white font-semibold text-[20px]">Opearation</p>
                        <div class="flex items-center justify-between">
                            <div class="text-white w-full text-center">
                                <span>Id</span>
                            </div>
                            <div class="text-white w-full text-center">
                                <span>Branch Name</span>
                            </div>
                            <div class="text-white w-full text-center">
                                <span>Branch City</span>
                            </div>
                            <div class="text-white w-full text-center">
                                <span>Operations</span>
                            </div>
                        </div>
                        <?php foreach ($insert as $data) : ?>
                            <div class="flex  items-center bg-[#2A3038]">
                                <div class="text-white w-full  text-center  ">
                                    <span><?= $data['ab_id'] ?></span>
                                </div>
                                <div class="text-white w-full text-center ">
                                    <span><?= $data['ab_branch_name'] ?></span>
                                </div>
                                <div class="text-white w-full text-center ">
                                    <span><?= $data['ab_branch_city'] ?></span>
                                </div>
                                <div class="flex items-center text-white w-full  text-center">
                                    
                                    <a href="../controller/delete_admin_branch.php?delete=<?= $data['ab_id'] ?>" class="h-[40px] text-red-500 px-2 pl-8 flex items-center">
                                        <span>Remove</span>
                                    </a>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>

            </div>
        </div>
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
            <a href="../Dashboard/admin_dashboard.php" class="flex">
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