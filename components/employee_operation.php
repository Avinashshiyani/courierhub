<?php include('../Html/html_start.php');?>
<div class="grid px-4 items-start bg-[#000000] h-screen ">
  <div class="grid items-center  py-8">
  <div class="flex items-center justify-between text-white px-12">
      <div>
        <span>Employee Operation</span>
      </div>
      <div>
        <span></span>
      </div>
  </div>
  <div class="flex flex-col px-4  text-white 
  ">
   <div class="-m-1.5 overflow-x-auto ">
     <div class="p-1 min-w-full inline-block align-middle">
       <div class="overflow-x-auto px-8">
         <table class="min-w-full divide-y divide-black-200 dark:divide-black-700">
           <thead>
             <tr>
               <th scope="col" class="px-3 py-3 text-left text-xs font-medium text-black-500 uppercase">Emp Name</th>
               <th scope="col" class="px-3 py-3 text-left text-xs font-medium text-black-500 uppercase">Salary</th>
               <th scope="col" class="px-3 py-3 text-right text-xs font-medium text-black-500 uppercase">Action</th>
             </tr>
           </thead>
           <tbody class="divide-y divide-black-200 dark:divide-black-700 ">
             <tr>
               <td class="px-3 py-4 whitespace-nowrap text-sm font-medium text-black-800 dark:text-black-200">Prit Jogia</td>
               <td class="px-3 py-4 whitespace-nowrap text-sm font-medium text-black-800 dark:text-black-200">15,000</td>
               <td class="px-3 py-4 whitespace-nowrap text-right text-sm font-medium">
                 <a class="text-red-500 " href="#">Delete</a>
               </td>
             </tr>
           </tbody>
         </table>
       </div>
     </div>
   </div>
 </div>
  </div>
</div>
<?php include('../Html/html_end.php');?>