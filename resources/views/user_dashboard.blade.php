@extends('layouts.app')
<nav class="flex bg-gray-300  p-3 h-5.5">
       <p class="text-green-400">WELCOME {{}}</p>
       <a href="#" class="ml-2 text-white font-semibold nav-link">History</a>
</nav>
</nav>
<div class="flex">
    <div class="pt-4 bg-black" style="height:100vh;width:15%">
        <div class="text-center font-bold text-blue-200">DASHBOARD</div>
        <div class="border border-light mt-4"></div>
        <div class="p-3">
             <a href="#" class="text-white font-semibold p-4">Profile</a><br>
             <a href="#" class="text-white font-semibold p-4">Jobs</a><br>
             <a href="#" class="text-white font-semibold p-4">Bids</a><br>
             <a href="#" class="text-white font-semibold p-4">Payments</a><br>
             <a href="#" class="text-white font-semibold p-4">Logout</a><br>
        </div>
    </div>
    <div class="container border border-green-600 p-4 ml-2 flex ">
        <div class="bg-white p-3 w-full border ml-2">
            <p class="p-3 bg-green-800 w-full text-center text-white">Active Jobs</p>
           
        </div>
        <div class="bg-white p-3 w-full border ml-2">
            <p class="p-3 bg-yellow-100 w-full text-center text-green-400">My Tasks</p>
           
        </div>
    </div>
</div>