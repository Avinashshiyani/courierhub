<?php include('../Html/html_start.php'); ?>
<div class="grid px-4 items-start bg-[#000000] h-screen overflow-y-auto">
    <div class="grid items-center ">
        <div class="grid items-start my-6 px-4 py-6 bg-[#191C24] xl:my-4">
            <p class="text-white font-semibold text-[20px]">Total Document Incoming
            </p>
            <div class="grid items-center space-y-3 xl:grid-cols-5 xl:space-x-4 xl:space-y-0 xl:py-4">
                <div class="flex items-center text-white space-x-2.5 font-semibold ">
                    <div class="xl:mt-8">
                        <a href="../Dashboard/admin_dashboard.php">
                            <p class="bg-[#0D0D0D] h-[30px]  w-[75px] text-[15px] rounded-sm text-center pt-0.5">Back
                            </p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex flex-col px-8 text-white">
            <div class="-m-1.5 overflow-x-auto">

                <div class="p-1.5 min-w-full inline-block align-middle">
                    <div class="overflow-hidden">
                        <table class="min-w-full divide-y divide-black-200 ">
                            <thead>
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-black-500 uppercase">
                                        Id</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-black-500 uppercase">Doc No
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-black-500 uppercase">Action
                                    </th>
                                </tr>
                            </thead>
                            <?php
                            include '../connection/conn.php';
                            $query = "SELECT * FROM `document_inner_incoming`";
                            $select = mysqli_query($con, $query);
                            ?>
                            <tbody class="divide-y divide-black-200 ">
                                <?php foreach ($select as $row) : ?>
                                    <tr class="">
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium  ">
                                            <?= $row['dii_id'] ?>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium  ">
                                            <?= $row['dii_documentno'] ?>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap  text-sm font-medium">
                                            <a href="../components/show_admin_doc_inc.php?delete=<?= $row['dii_id'] ?>" class="text-red-500 " href="#">Delete</a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
if($_REQUEST){

    $req = $_REQUEST;
    $del_query = "DELETE FROM `document_inner_incoming` WHERE dii_id=" .$req['delete'];
    $delete = mysqli_query($con,$del_query);
    
    if($delete){
        echo "<script>window.load=alert('Data Deleted')</script>";
        echo "<script>window.location.href='../components/show_admin_doc_inc.php'</script>";
    }
}
?>
<?php include('../Html/html_end.php'); ?>