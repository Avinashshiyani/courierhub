<?php
include '../connection/conn.php';
$query = "SELECT * FROM `document_outgoing` WHERE do_id = (SELECT MAX(do_id) FROM `document_outgoing`)";
$insert = mysqli_query($con, $query);
$row = mysqli_fetch_assoc($insert);
?>


<?php include('../Html/html_start.php'); ?>
<div class="grid px-4 items-start bg-[#000000] h-screen overflow-y-auto">
  <div class="grid items-center ">
    <div class="grid items-start my-6 px-4 py-6 bg-[#191C24] xl:my-4">
      <p class="text-white font-semibold text-[20px]">Document Outgoing</p>
      <form action="../controller/insert_outgoing.php" method="post">
      <div class="grid items-center space-y-3 xl:grid-cols-5 xl:space-x-4 xl:space-y-0 xl:py-4">
          <div class="grid items-center text-white space-y-2.5">
            <label for="">Document No :-</label>
            <input type="number" name="doc_no" required placeholder="Document No" class="h-[38px] bg-[#2A3038] px-3">
          </div>
          <div class="flex items-center text-white space-x-2.5 font-semibold ">
            <div class="xl:mt-8">
              <a href="">
                <button class="bg-[#0090e7] h-[30px] w-[75px] text-[15px] rounded-sm">Add</button>
              </a>
            </div>
            <div class="xl:mt-8">
              <a href="../components/docoutgoing.php">
                <p class="bg-[#0D0D0D] h-[30px]  w-[75px] text-[15px] rounded-sm text-center pt-0.5">Cancel</p>
              </a>
            </div>
          </form>
          </div>
        </div>
      </div>
    <div class="grid items-center justify-center lg:grid-cols-2">
      <div class="flex items-center justify-center text-white  ">
       
      </div>
      <div class="flex items-center justify-center text-white">
        <p>Incoming Date :</p>
        <p><?= $row['do_outgoing_date']?></p>
      </div>
      <div class="flex items-center justify-center text-white">
        <p>outgoing City :</p>
        <p> <?=$row['do_outgoing_city']?></p>
      </div>
      <div class="flex items-center justify-center text-white">
        <p>outgoing To City :</p>
        <p> <?= $row['do_outgoingto_city']?></p>
      </div>
    </div>
    <div class="flex flex-col px-8 text-white">
      <div class="-m-1.5 overflow-x-auto">
        <div class="p-1.5 min-w-full inline-block align-middle">
          <div class="overflow-hidden">
            <table class="min-w-full divide-y divide-black-200 dark:divide-black-700">
              <thead>
                <tr>
                  <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-black-500 uppercase">Document No</th>
                  <th scope="col" class="px-6 py-3 text-right text-xs font-medium text-black-500 uppercase">Action</th>
                </tr>
              </thead>
                  <?php
                    $doc_select = "SELECT * FROM `document_outer_outgoing`";
                    $doc_row = mysqli_query($con,$doc_select);
                    
                  ?>
                  <?php foreach($doc_row as $doc) :?>
                    <tbody class="divide-y divide-black-200 dark:divide-black-700">
                      <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-black-800 dark:text-black-200"><?= $doc['doo_documentno']?></td>
                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                          <a class="text-red-500 " href="../components/doc_outgoing.php?delete=<?= $doc['doo_id']?>">Delete</a>
                        </td>
                      </tr>
                    </tbody>
                    <?php endforeach ?>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
if ($_REQUEST) {

  $req = $_REQUEST;
  $del_query = "DELETE FROM `document_outer_outgoing` WHERE doo_id=" . $req['delete'];
  $delete = mysqli_query($con, $del_query);

  if ($delete) {
    echo "<script>window.load=alert('Data Deleted')</script>";
    echo "<script>window.location.href='../components/doc_outgoing.php'</script>";
  }
}
?>
<?php include('../Html/html_end.php'); ?>