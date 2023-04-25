<!-- including the head of the html -->
<?php 
    session_start();
    include 'components/header.php';
    include 'account/auth/dbConfig.php';
?>

</section>
  </div>
  <!-- including navigation-->
  <?php include 'components/navigation.php'; ?>
  <?php include 'components/latest.php'; ?>
  <!---copied from tailwing -->
  <section class="bg-burgundy">
    <div class="container px-6 py-10 mx-auto animate-pulse">
        <h1 class="w-48 h-2 mx-auto bg-gray-200 rounded-lg dark:bg-gray-700"></h1>

        <p class="w-64 h-2 mx-auto mt-4 bg-gray-200 rounded-lg dark:bg-gray-700"></p>
        <p class="w-64 h-2 mx-auto mt-4 bg-gray-200 rounded-lg sm:w-80 dark:bg-gray-700"></p>

        <div class="grid grid-cols-1 gap-8 mt-8 xl:mt-12 xl:gap-12 sm:grid-cols-2 xl:grid-cols-4 lg:grid-cols-3">
            <div class="w-full">
                <div class="w-full h-64 mary rounded-lg dark:bg-gray-600"></div>
                
                <h1 class="h-2 mt-4 text-white rounded-lg dark:bg-gray-700">Text about show</h1>
                <p class="h-2 mt-4  text-white rounded-lg dark:bg-gray-700">some more text</p>
            </div>

            <div class="w-full">
                <div class="w-full h-64 mask rounded-lg dark:bg-gray-600"></div>
                
                <h1 class="h-2 mt-4 text-white rounded-lg dark:bg-gray-700">Text about show</h1>
                <p class="h-2 mt-4  text-white rounded-lg dark:bg-gray-700">some more text</p>
            </div>

            <div class="w-full">
                <div class="w-full h-64 dance rounded-lg dark:bg-gray-600"></div>
                
                <h1 class="h-2 mt-4 text-white rounded-lg dark:bg-gray-700">Text about show</h1>
                <p class="h-2 mt-4  text-white rounded-lg dark:bg-gray-700">some more text</p>
            </div>
            <div class="w-full">
                <div class="w-full h-64 colormask rounded-lg dark:bg-gray-600"></div>
                
                <h1 class="h-2 mt-4 text-white rounded-lg dark:bg-gray-700">Text about show</h1>
                <p class="h-2 mt-4  text-white rounded-lg dark:bg-gray-700">some more text</p>
            </div>
            
            </div>
        </div>
    </div>
</section>
  
  <?php include 'components/footer.php'; ?>

