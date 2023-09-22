<?php include('../Html/html_start.php'); ?>
<div class="grid px-4 items-start bg-[#000000] h-screen overflow-y-auto">
    <div class="grid items-center space-y-3 p-10 px-10">
        <p class="text-white font-semibold text-[20px]">Tracked Document Details</p>
        <?php
        include '../connection/conn.php';
        $doc_id = $_POST['doc_id'];
        $query = "SELECT * FROM `cash_booking` WHERE cb_documentno = $doc_id";
        $select = mysqli_query($con, $query);
        $data = mysqli_fetch_assoc($select);
        if ($data == null) {
                echo "<script>window.load=alert('No document Found')</script>";
                echo "<script>window.location.href='../index.php'</script>";
        }
        ?>
        <?php foreach ($select as $row) : ?>
            <div class="grid items-center text-white space-y-2.5">
                <div class="flex">
                    <label for="">Document no = </label>
                    <p class="border-2 px-4 ml-4">
                        <?= $row['cb_documentno']; ?>
                    </p>
                </div>
                <div class="flex">
                    <label for="">From Name = </label>
                    <p class="border-2 px-4 ml-4">
                        <?= $row['cb_from_name']; ?>
                    </p>
                </div>
                <div class="flex">
                    <label for="">From Phno = </label>
                    <p class="border-2 px-4 ml-4">
                        <?= $row['cb_from_phno']; ?>
                    </p>
                </div>
                <div class="flex">
                    <label for="">To name = </label>
                    <p class="border-2 px-4 ml-4">
                        <?= $row['cb_to_name']; ?>
                    </p>
                </div>
                <div class="flex">
                    <label for="">To City = </label>
                    <p class="border-2 px-4 ml-4">
                        <?= $row['cb_to_city']; ?>
                    </p>
                </div>
                <div class="flex">
                    <label for="">Courier Type = </label>
                    <p class="border-2 px-4 ml-4">
                        <?= $row['cb_couriertype']; ?>
                    </p>
                </div>
                <div class="flex">
                    <label for="">To Address = </label>
                    <p class="border-2 px-4 ml-4">
                        <?= $row['cb_address']; ?>
                    </p>
                </div>
                <div class="flex">
                    <label for="">Total Amount = </label>
                    <p class="border-2 px-4 ml-4">
                        <?= $row['cb_totalamt']; ?> Rs
                    </p>
                </div>
                <?php
                include '../connection/conn.php';
                $show_query = "SELECT * FROM `add_branch` WHERE ab_id = " . $row['user_id'];
                $show_insert = mysqli_query($con, $show_query);
                $show_branch = mysqli_fetch_assoc($show_insert);
                ?>
                <div class="border-2 border-green-500 p-4 w-[500px]">
                    <div>
                        <label for="">Document Booked By = </label>
                        <?= $show_branch['ab_branch_name'] ?>
                    </div>
                    <label for="">Branch Details => </label>
                    <div class="flex">
                        <p class="pr-4">Manger name :</p> <?= $show_branch['ab_manager_name'] ?>
                    </div>
                    <div class="flex">
                        <label for=""></label>
                        <p class="pr-4">Manger Phno : </p> <?= $show_branch['ab_phno'] ?>
                    </div>
                    <div class="flex">
                        <label for=""></label>
                        <p class="pr-4">Branch City : </p> <?= ucfirst($show_branch['ab_branch_city']) ?>
                    </div>
                </div>
                <div>
                    <a href="../index.php">
                        <button class="text-white bg-blue-600 p-2 px-8 rounded-sm">Back</button>
                    </a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
</div>
</div>
</div>
<?php include('../Html/html_end.php'); ?>