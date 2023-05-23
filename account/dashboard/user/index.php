<?php 
  session_start(); 
  include '../../../components/header.php';
  include '../../../components/navigation.php';
  if (!isset($_SESSION['loggedin'])){
    header('Location: ../login/');
    exit;
    
    }
    $userId = $_SESSION['id'];
?>

<!-- component -->
<!-- component -->
<section class="text-gray-600 body-font bg-gray-50  flex justify-center items-center background color bg-red-300"> 
  <div class="container px-8 py-24 mx-auto">
    <div class="flex flex-wrap -m-4 text-center">
      <div class="p-4 sm:w-1/2 lg:w-1/3 w-full hover:scale-105 duration-500">
        <div class=" flex items-center  justify-between p-4  rounded-lg bg-white shadow-indigo-50 shadow-md">
          <div>
            <h2 class="text-gray-900 text-lg font-bold mb-10">Views Account</h2>
            <p class="text-sm font-semibold text-gray-400"></p>
            <a href="account" class="text-sm mt-6 px-4 py-2 bg-yellow-400 text-white rounded-lg  tracking-wider hover:bg-yellow-300 outline-none">Account</a>
          </div>
          <div
            class="bg-gradient-to-tr from-yellow-500 to-yellow-400 w-32 h-32 rounded-full shadow-2xl shadow-yellow-400 border-white  border-dashed border-2  flex justify-center items-center ">
            <div>
              <h1 class="text-white text-2xl">Account</h1>
            </div>
          </div>
        </div>

      </div>
      <div class="p-4 sm:w-1/2 lg:w-1/3 w-full hover:scale-105 duration-500">
        <div class=" flex items-center  justify-between p-4  rounded-lg bg-white shadow-indigo-50 shadow-md">
          <div>
            <h2 class="text-gray-900 text-lg font-bold mb-10">Views Reviews</h2>
            <p class="text-sm font-semibold text-gray-400"></p>
            <a href="comments" class="text-sm mt-6 px-4 py-2 bg-orange-400  text-white rounded-lg  tracking-wider hover:bg-orange-500 outline-none">Reviews</a>
          </div>
          <div
            class="bg-gradient-to-tr from-orange-500 to-orange-400 w-32 h-32  rounded-full shadow-2xl shadow-orange-400 border-white  border-dashed border-2  flex justify-center items-center ">
            <div>
              <h1 class="text-white text-2xl">Reviews</h1>
            </div>
          </div>
        </div>

      </div>
      <div class="p-4 sm:w-1/2 lg:w-1/3 w-full hover:scale-105 duration-500">
        <div class=" flex items-center  justify-between p-4  rounded-lg bg-white shadow-indigo-50 shadow-md">
          <div>
            <h2 class="text-gray-900 text-lg font-bold mb-10">Views Blogs</h2>
            <p class="text-sm font-semibold text-gray-400"></p>

            <p class="text-sm font-semibold text-gray-400"></p>
            <a href="../blogs"  class="text-sm mt-6 px-4 py-2 bg-red-400  text-white rounded-lg  tracking-wider hover:bg-red-500 outline-none">Blogs</a>
          </div>
          <div
            class="bg-gradient-to-tr from-red-500 to-red-400 w-32 h-32  rounded-full shadow-2xl shadow-red-400 border-white  border-dashed border-2  flex justify-center items-center ">
            <div>
              <h1 class="text-white text-2xl">Blogs</h1>
            </div>
          </div>
        </div>

      </div>

     
  </div> 
    </div>
</section>

  <?php include '../../../components/footer.php'; ?>

