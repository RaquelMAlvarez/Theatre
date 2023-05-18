<?php 
  session_start(); 
  include '../../../components/header.php';
  include '../../../components/navigation.php';
  include '../../auth/dbConfig.php';
  if (!isset($_SESSION['loggedin'])){
    header('Location: ../login/');
    exit;
    
    }
    $userId = $_SESSION['id'];

    $user = $conn->prepare('SELECT 
	username,
    email
 

   FROM users where id = '.$userId.' ');

$user->execute();
$user->store_result();
$user->bind_result($username, $email);
$user->fetch();
?>
<!-- component -->
<!-- component -->
<section class="text-gray-600 body-font bg-gray-50  flex justify-center items-center background color bg-red-300">
    <h1>Hi <?= $username ?>, welcome to your account page. You are currently logged in with the email address <?= $email ?>.
</section>
<p class="text-xl font-medium text-slate-700 mt-3">My Account</p>
                <p class="mt-2 text-sm text-slate-500"></p>
            </div>

            <div onclick="window.location.href='comments'" 
                class="p-10 flex flex-col items-center text-center group md:lg:xl:border-r md:lg:xl:border-b hover:bg-slate-50 cursor-pointer">
                <span class="p-5 rounded-full bg-orange-500 text-white shadow-lg shadow-orange-200"><svg
                        xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="1.5">
                        <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                        <polyline points="14 2 14 8 20 8"></polyline>
                        <line x1="16" y1="13" x2="8" y2="13"></line>
                        <line x1="16" y1="17" x2="8" y2="17"></line>
                        <polyline points="10 9 9 9 8 9"></polyline>
                    </svg></span>
                    <h2>Check Coments</h2>
                

  <?php include '../../../components/footer.php'; ?>

