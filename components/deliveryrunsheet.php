<?php
include '../connection/conn.php';
$query = "SELECT * FROM `delivery_sheet` WHERE ds_id = (SELECT MAX(ds_id) FROM `delivery_sheet`)";
$select = mysqli_query($con, $query);
$row = mysqli_fetch_assoc($select);
?>
<?php include('../Html/html_start.php'); ?>
<div class="grid px-4 items-start bg-[#000000] h-screen overflow-y-auto">
  <div class="grid items-center ">
    <form action="../controller/insert_deliveryrunsheet.php" method="post">
      <div class="grid items-start  my-6 px-4 py-6 bg-[#191C24] xl:my-4">
        <p class="text-white font-semibold text-[20px]">Delivery Run Sheet</p>
        <div class="grid items-center space-y-3 xl:grid-cols-5 xl:space-x-4 xl:space-y-0 xl:py-4">
          <div class="grid items-center text-white space-y-2.5">
            <label for="">Document No :-</label>
            <input type="text"  required name="document_no" placeholder="Document No" class="h-[38px] bg-[#2A3038] px-3">
          </div>
          <div class="grid items-center text-white space-y-2.5">
            <label for="">Recievers Name :-</label>
            <input type="text" required name="recievers_no" placeholder="Recievers Name" class="h-[38px] bg-[#2A3038] px-3">
          </div>
          <?php
          include '../connection/conn.php';
          $query = "SELECT DISTINCT `ab_branch_city` FROM `add_branch`";
          $insert = mysqli_query($con, $query);
          ?>
          <div class="grid items-center text-white space-y-2.5">
            <select name="to_city" class="h-[38px] text-white bg-[#2A3038] px-3 mt-8">
              <?php foreach ($insert as $data) : ?>
                <option value="<?= $data['ab_branch_city'] ?>"><?= $data['ab_branch_city'] ?></option>
              <?php endforeach ?>
            </select>
          </div>
          <div class="flex items-center text-white space-x-2.5 font-semibold ">
            <div class="xl:mt-8">
              <a href="">
                <button class="bg-[#0090e7] h-[30px] w-[75px] text-[15px] rounded-sm">Add</button>
              </a>
            </div>
          </form>
            <div class="xl:mt-8 text-center flex items-center justify-center">
              <a href="../components/deliverysheet.php">
                <p class="bg-[#0D0D0D] h-[30px]  w-[75px] text-[15px] rounded-sm text-center pt-0.5">Cancel  </p>
              </a>
            </div>
  </div>
</div>
</div>
<div class="flex items-center justify-center space-x-6 ">
  <div class="flex items-center text-white ">
  </div>
  <div class="flex items-center justify-center text-white">
    <p>City :</p>
    <p><?= $row['ds_city']; ?></p>
  </div>
</div>
<div class="flex items-center justify-between text-white px-4">
  <div>
    <span>Office To Delivery </span>
  </div>
  <div>
    <span></span>
  </div>
</div>
<div class="flex flex-col px-4 text-white">
  <div class="-m-1.5 overflow-x-auto">
    <div class="p-1.5 min-w-full inline-block align-middle">
      <div class="overflow-hidden">
        <table class="min-w-full divide-y divide-black-200 dark:divide-black-700">
          <thead>
            <tr>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-black-500 uppercase">Document No</th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-black-500 uppercase">Recievers Name</th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-black-500 uppercase">City</th>
            </tr>
          </thead>
          <?php
              
              $query_drs = "SELECT * FROM `delivery_run_sheet`";
              $insert_drs = mysqli_query($con, $query_drs);
          ?>
          <?php foreach($insert_drs as $drs) :?>
            <tbody class="divide-y divide-black-200 dark:divide-black-700">
              <tr>
                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-black-800 dark:text-black-200"><?= $drs['drs_documentno']?></td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-black-800 dark:text-black-200"><?= $drs['drs_recievers_name']?></td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-black-800 dark:text-black-200"><?= $drs['drs_recieving_city']?></td>
              </tr>
            </tbody>
            <?php endforeach?>
        </table>
      </div>
    </div>
  </div>
</div>
</div>
</div>
<?php include('../Html/html_end.php'); ?>