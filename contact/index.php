<?php 
    session_start();
    include '../components/header.php';
    include '../components/navigation.php';
    include '../account/auth/dbConfig.php';
?>
<!-- push -->

<div class="min-w-screen min-h-screen bg-gray-900 flex items-center justify-center px-5 py-5">
    <div class="bg-gray-100 text-gray-500 rounded-3xl shadow-xl w-full overflow-hidden" style="max-width:1000px">
        <div class="md:flex w-full">
            <div class="md:block w-1/2 bg-red-500 py-10 px-10">
                <img src="<?= ROOT_DIR ?>assets/images/maskwoman.jpg">
            </div>
            <div class="w-full md:w-1/2 py-10 px-5 md:px-10">
                <div class="text-center mb-10">
                    <h1 class="font-bold text-3xl text-gray-900">Contact Us</h1>
                    <p>Enter your information to Contact</p>
                </div>
                <form action="../account/auth/contact.php" method="post">
               
                <div>
                    <div class="flex -mx-3">
                        <div class="w-full px-3 mb-5">
                            <label for="" class="text-xs font-semibold px-1">Full Name</label>
                            <div class="flex">
                                <div class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center"><i class="mdi mdi-account-outline text-gray-400 text-lg"></i></div>
                                <input type="text" 
                                class="w-full -ml-10 pl-10 pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500" 
                                placeholder=" "
                                name="fullname">
                            </div>
                        </div>
            
                    </div>
                    <div class="flex -mx-3">
                        <div class="w-full px-3 mb-5">
                            <label for="" class="text-xs font-semibold px-1">Email</label>
                            <div class="flex">
                                <div class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center"><i class="mdi mdi-email-outline text-gray-400 text-lg"></i></div>
                                <input type="email" 
                                class="w-full -ml-10 pl-10 pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500" 
                                placeholder="johnsmith@example.com" 
                                name="email">
                            </div>
                        </div>
                    </div>
                    <div class="flex -mx-3">
                        <div class="w-full px-3 mb-12">
                            <label for="" class="text-xs font-semibold px-1">Phone</label>
                            <div class="flex">
                                <div class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center"><i class="mdi mdi-lock-outline text-gray-400 text-lg"></i></div>
                                <input type="phone" name="phone" class="w-full -ml-10 pl-10 pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500" placeholder="">
                            </div>
                        </div>
                    </div>
                    <div class="flex -mx-3">
                        <div class="w-full px-3 mb-5">
                            <button class="block w-full max-w-xs mx-auto bg-red-500 hover:bg-yellow-400 focus:bg-indigo-700 text-white rounded-lg px-3 py-3 font-semibold" type="submit">Submit</button>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>    
    














<?php
    include '../components/footer.php';
?>

