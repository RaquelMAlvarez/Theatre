<?php 
    session_start();
    include '../components/header.php';
    include '../components/navigation.php';
    include '../account/auth/dbConfig.php';
    
    $blog = $conn->prepare('SELECT 
	
    b.id,
    b.title,
    b.blog_content,
    b.created_on,
    b.img_path,
    b.show_name

   FROM blog b  
   LIMIT 4');

$blog->execute();
$blog->store_result();
$blog->bind_result($blogID, $blogTitle, $blogContent, $blogCreated, $imgPath, $showName);
echo $blogID;
?>
<!-- push -->
<!-- component -->
<section class="bg-red-300">
    <div class="container px-8 py-10 mx-auto">
        <h1 class="text-3xl font-semibold text-gray-800 capitalize lg:text-4xl dark:text-white">From the blog</h1>

        <div class="grid grid-cols-1 gap-8 mt-8 md:mt-16 md:grid-cols-2">
        <?php while ($blog->fetch()): ?>
           

            <div class="lg:flex">
                <img class="object-medio w-full h-56 rounded-lg lg:w-60" src="<?= ROOT_DIR ?>assets/images/shows/<?= $imgPath?>" alt="">

                <div class="flex flex-col lg:mx-6">
                <h2 class="text-2xl font-extrabold text-gray-900"><?= $blogTitle ?></h2>
                
                    <a href="#" class="text-xl font-semibold text-gray-800 dark:text-white ">
                    <?= $blogContent ?>
                    </a>
                    
                    <span class="text-sm text-gray-500 dark:text-gray-300"><?= $blogCreated ?></span>
                </div>
                <button onclick="window.location.href='blogDetails/<?= $blogID ?>';" class="text-ms">READ MORE>...</button>
            </div>
            <?php endwhile ?>
        </div>
    </div>
</section>
<?php
    include '../components/footer.php';
?>