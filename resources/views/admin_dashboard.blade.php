@extends('layouts.app')
<nav class="flex bg-blue-400  p-3 h-5.5">
       <p>WELCOME ADMIN</p>
        <a href="" class="text-white hover:text- nav-link ml-4">Users</a>
        <a href="" class="text-white nav-link ml-4">Jobs</a>
        <a href="" class="text-white nav-link ml-4">Activities</a>
        <a href="" class="text-white nav-link ml-4">Stats</a>
</nav>
<div class="flex">
    <div class="pt-4 bg-black" style="height:100vh;width:15%">
        <div class="text-center font-bold text-blue-200">DASHBOARD</div>
        <div class="border border-light mt-4"></div>
        <div class="p-3">
             <a href="#" class="text-white font-semibold p-4">Account</a><br>
             <a href="#" class="text-white font-semibold p-4">Logs</a><br>
             <a href="#" class="text-white font-semibold p-4">Manage users</a><br>
             <a href="#" class="text-white font-semibold p-4">Manage Jobs</a><br>
             <a href="#" class="text-white font-semibold p-4">Payments</a><br>
        </div>
    </div>
    <div class="container border border-green-600 p-4 ml-2 ">
        <div class=" p-3 w-full flex ">
                 <div class="h-5.5 w-full p-4  bg-rose-400">
                     <p class="text-center">Users</p>
                     <p class="text-center">80</p>
                 </div>
                 <div class="h-5.5 w-full p-4  bg-green-200">
                     <p class="text-center">Jobs</p>
                     <p class="text-center">23</p>
                 </div>
                 <div class=" h-5.5 w-full p-4  bg-gray-400">
                     <p class="text-center">Freelancers</p>
                     <p class="text-center">34</p>
                 </div>
                 <div class=" h-5.5 w-full p-4  bg-yellow-400">
                     <p class="text-center">Employers</p>
                     <p class="text-center">34</p>
                 </div>
        </div>
        <div class="container flex p-2">
             <div class="border bg-white p-3 w-full">
                 <p class="p-3 bg-green-100 w-full">Recent Jobs</p>
                 <table class="table striped p-3 mt-3 ">
                     <th class="space-x-16">#</th>
                     <th class="space-x-16">Job Title</th>
                     <th class="space-x-16">Description</th>
                     <th class="space-x-16">Deadline</th>
                     <tr class="p-3 space-x-16">
                     <td>2</td>
                     <td class="space-x-16">bbnkjsdjkkk</td>
                     <td class="space-x-16">11 June 2022</td>
                     </tr>
                 </table>
             </div>
             <div class="bg-white p-3 w-full border ml-2">
                 <p class="p-3 bg-green-100 w-full">Recent Logs</p>
                 <table class="table striped p-3 mt-3 ">
                     <th class="space-x-16">#</th>
                     <th class="space-x-16">User</th>
                     <th class="space-x-16">Activity</th>
                     <tr class="p-3 space-x-16">
                     <td>2</td>
                     <td class="space-x-16">bbnkjsdjkkk</td>
                     <td class="space-x-16">11 June 2022</td>
                     </tr>
                 </table>
             </div>
        </div>
         
    </div>
  
</div>
  

</div>