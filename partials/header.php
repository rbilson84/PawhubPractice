<?php


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pawhub Pet Portal</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;800&display=swap"
    rel="stylesheet">






<header class="w-full">
  <nav class="bg-gray-900 py-2.5">
    <div class="mx-auto flex max-w-screen-xl flex-wrap items-center justify-between px-4">

      <a href="/Rachel/Pawhub/index.php" class="group flex items-center gap-5">
        <img src="/Rachel/Pawhub/images/logo3.png" alt="Pawhub Logo" class="h-24 w-auto group-hover:scale-110 transition duration-300">
        <span class="self-center whitespace-nowrap text-xl font-semibold text-white">
          PawHub Booking Portal
        </span>
      </a>
      <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

      <div class="flex items-center gap-2 lg:order-2">
        <a href="/" class="rounded-lg border-2 border-white px-4 py-2 text-sm font-medium text-white hover:bg-gray-700">
          🌙
        </a>

        <a href="/guest" class="rounded-lg border-2 border-white px-4 py-2 text-sm font-medium text-white hover:bg-gray-700">
          Log In
        </a>
        <a href="/guest" class="rounded-lg border-2 border-white px-4 py-2 text-sm font-medium text-white hover:bg-gray-700">
          Register
        </a>
      </div>

      <div class="hidden w-full items-center justify-between lg:order-1 lg:flex lg:w-auto">
        <ul class="mt-4 flex flex-col font-medium lg:mt-0 lg:flex-row lg:space-x-8">
          <li><a class="block py-2 pr-4 pl-3 text-gray-400 hover:text-white lg:p-0" href="/Rachel/Pawhub/index.php">Home</a></li>
          <li><a class="block py-2 pr-4 pl-3 text-gray-400 hover:text-white lg:p-0" href="/Rachel/Pawhub/services.php">Services</a></li>
          <li><a class="block py-2 pr-4 pl-3 text-gray-400 hover:text-white lg:p-0" href="/Rachel/Pawhub/about-us.php">About Us</a></li>
          <li><a class="block py-2 pr-4 pl-3 text-gray-400 hover:text-white lg:p-0" href="/Rachel/Pawhub/contact.php">Contact</a></li>
          
        </ul>
      </div>

      <!-- once logged in 
       <div class="hidden w-full items-center justify-between lg:order-1 lg:flex lg:w-auto">
        <ul class="mt-4 flex flex-col font-medium lg:mt-0 lg:flex-row lg:space-x-8">
          <li><a class="block py-2 pr-4 pl-3 text-gray-400 hover:text-white lg:p-0" href="/">Dashboard</a></li>
          <li><a class="block py-2 pr-4 pl-3 text-gray-400 hover:text-white lg:p-0" href="/add">Book a visit</a></li>
          <li><a class="block py-2 pr-4 pl-3 text-gray-400 hover:text-white lg:p-0" href="/saved">My Pets</a></li>
          <li><a class="block py-2 pr-4 pl-3 text-gray-400 hover:text-white lg:p-0" href="/saved">My Bookings</a></li>
          <li><a class="block py-2 pr-4 pl-3 text-gray-400 hover:text-white lg:p-0" href="/about">Messages</a></li>
          <li><a class="block py-2 pr-4 pl-3 text-gray-400 hover:text-white lg:p-0" href="/about">Profile</a></li>
          <li><a class="block py-2 pr-4 pl-3 text-gray-400 hover:text-white lg:p-0" href="/about">Logout</a></li>
        </ul>
      </div> -->

          <!-- once logged in as pet sitter 
       <div class="hidden w-full items-center justify-between lg:order-1 lg:flex lg:w-auto">
        <ul class="mt-4 flex flex-col font-medium lg:mt-0 lg:flex-row lg:space-x-8">
          <li><a class="block py-2 pr-4 pl-3 text-gray-400 hover:text-white lg:p-0" href="/">Dashboard</a></li>
          <li><a class="block py-2 pr-4 pl-3 text-gray-400 hover:text-white lg:p-0" href="/add">My Schedule</a></li>
          <li><a class="block py-2 pr-4 pl-3 text-gray-400 hover:text-white lg:p-0" href="/saved">Upcoming Visits</a></li>
          <li><a class="block py-2 pr-4 pl-3 text-gray-400 hover:text-white lg:p-0" href="/about">Messages</a></li>
          <li><a class="block py-2 pr-4 pl-3 text-gray-400 hover:text-white lg:p-0" href="/about">Profile</a></li>
          <li><a class="block py-2 pr-4 pl-3 text-gray-400 hover:text-white lg:p-0" href="/about">Logout</a></li>
        </ul>
      </div> -->

          <!-- once logged in as ADMIN
       <div class="hidden w-full items-center justify-between lg:order-1 lg:flex lg:w-auto">
        <ul class="mt-4 flex flex-col font-medium lg:mt-0 lg:flex-row lg:space-x-8">
          <li><a class="block py-2 pr-4 pl-3 text-gray-400 hover:text-white lg:p-0" href="/">Dashboard</a></li>
          <li><a class="block py-2 pr-4 pl-3 text-gray-400 hover:text-white lg:p-0" href="/add">Manage Users</a></li>
          <li><a class="block py-2 pr-4 pl-3 text-gray-400 hover:text-white lg:p-0" href="/saved">Manage Pets</a></li>
          <li><a class="block py-2 pr-4 pl-3 text-gray-400 hover:text-white lg:p-0" href="/about">Manage Bookings</a></li>
          <li><a class="block py-2 pr-4 pl-3 text-gray-400 hover:text-white lg:p-0" href="/about">Services</a></li>
          <li><a class="block py-2 pr-4 pl-3 text-gray-400 hover:text-white lg:p-0" href="/about">Reports</a></li>
          <li><a class="block py-2 pr-4 pl-3 text-gray-400 hover:text-white lg:p-0" href="/about">Logout</a></li>
        </ul>
      </div> -->

    </div>
  </nav>
</header>


<div class="relative bg-gray-900">
  
  <div class="mx-auto px-4 py-4 sm:max-w-xl md:max-w-full md:px-24 lg:max-w-screen-xl lg:px-8 lg:py-8">
    <div class="relative max-w-2xl sm:mx-auto sm:max-w-xl sm:text-center md:max-w-2xl">
      <h2 class="mb-6 text-center font-sans text-3xl font-bold tracking-tight text-white sm:text-4xl sm:leading-none">Reliable Pet Care<br> When You Can't Be There</h2>
      <p class="mb-8 text-center text-base text-indigo-200 md:text-lg">Whether you're at work, on holiday, or simply away for the day, PawHub makes it easy to arrange trusted pet care and stay connected with your furry friends.</p>
      <a class="mx-auto rounded-lg border-2 border-white px-4 py-2 text-sm leading-[24px] font-medium text-white hover:bg-gray-700 focus:ring-4 focus:ring-gray-800 focus:outline-none sm:mr-2 lg:px-5 lg:py-2.5" href="/add"
        >Log In<svg class="ml-2 inline h-6 w-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12H4m12 0-4 4m4-4-4-4m3-4h2a3 3 0 0 1 3 3v10a3 3 0 0 1-3 3h-2"></path></svg
      ></a>
      <p class="mb-10 max-w-md text-xs tracking-wide text-indigo-100 sm:mx-auto sm:text-sm md:mb-8"></p>
    </div>
  </div>
</div>
</nav>