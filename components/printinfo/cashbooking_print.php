<?php include('../../Html/html_start.php'); ?>
<div class="grid justify-center items-center totalpage" >
    <p class="text-[28px] font-semibold text-center p-4" >Courier Hub Cash Reciept</p>
    <div class="flex items-center justify-center space-x-12 border-2  border-black px-16 py-6" id="printable-content">
        <div class="grid items-center space-y-1">
            <?php 
            include '../../connection/conn.php';
            $query = "SELECT * FROM `cash_booking` WHERE cb_id = (SELECT MAX(cb_id) FROM `cash_booking`)";
            $select = mysqli_query($con,$query);
            $row = mysqli_fetch_assoc($select);            
            ?>
            <div class="flex items-center text-[20px] space-x-4">
                <p class="w-[100px]">From  :-</p>
                <p class="border-2 border-black p-2 px-4 "><?= $row['cb_from_name']?></p>
            </div>
            <div class="flex items-center text-[20px] space-x-4">
                <p class="w-[100px]">Ph No  :-</p>
                <p class="border-2 border-black p-2 px-4 "><?= $row['cb_from_phno']?></p>
            </div>
            <div class="flex items-center text-[20px] space-x-4">
                <p class="w-[100px]">Date  :-</p>
                <p class="border-2 border-black p-2 px-4 ">
                    <input type="text" class="innsershowdate">
                </p>
            </div>
        </div>
        <div class="grid space-y-1">
            <div class="flex items-center text-[20px] space-x-4">
                <p class="w-[100px]">Tracking No  :-</p>
                <p class="border-2 border-black p-2 px-4 "><?= $row['cb_documentno']?></p>
            </div>
            <div class="flex items-center text-[20px] space-x-4">
                <p class="w-[100px]">To  :-</p>
                <p class="border-2 border-black p-2 px-4 "><?= $row['cb_to_name']?></p>
            </div>
            <div class="flex items-center text-[20px] space-x-4">
                <p class="w-[100px]">City  :-</p>
                <p class="border-2 border-black p-2 px-4 "><?= $row['cb_to_city']?></p>
            </div>
            <div class="flex items-center text-[20px] space-x-4">
                <p class="w-[100px]">Type:-</p>
                <p class="border-2 border-black p-2 px-4 "><?= $row['cb_couriertype']?></p>
            </div>
            <div class="flex items-center text-[20px] space-x-4">
                <p class="w-[100px]">Weight :-</p>
                <p class="border-2 border-black p-2 px-4 "><?= $row['cb_weight']?></p>
            </div>
            <div class="flex items-center text-[20px] space-x-4">
                <p class="w-[100px]">Amount :-</p>
                <p class="border-2 border-black p-2 px-4 "><?= $row['cb_totalamt']?>/-</p>
            </div>
        </div>
    </div>
    <div class="flex items-center justify-center space-x-6 py-6 nodisplay">
            <button class="bg-blue-600 text-[18px]  h-[40px] w-[100px] font-semibold text-white rounded-sm printbtn">Print</button>
        <a href="../cashbooking.php">
            <button class="bg-gray-600 text-[18px]  h-[40px] w-[100px] font-semibold text-white rounded-sm">Exit</button>
        </a>
    </div>
</div>
<?php include('../../Html/html_end.php'); ?>
<script>
    let printBtn = document.querySelector(".printbtn");
    let noDisplay = document.querySelector(".nodisplay");
    printBtn.addEventListener("click",()=>{
        window.print();
    });
</script>
<script>
    let date = new Date();
    let day = date.getDate();
    let month = date.getMonth() + 1;
    let year = date.getFullYear();

    let completeDate = `${day}/${month}/${year}`;
    let innerShowDate = document.querySelector('.innsershowdate').value = completeDate;
    console.log(completeDate);
</script>