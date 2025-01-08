<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Developer Test</title>

    <link rel="preload" href="./dist/images/image-1.jpg" as="image" type="image/jpeg" />

    <!-- https://fonts.google.com/specimen/Roboto -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

    <style>
        <?php echo file_get_contents('./dist/css/critical.min.css'); ?>
    </style>

    <link rel="stylesheet" href="./dist/css/style.min.css">
</head>
<body>
    <main class="container">
        <img src="./dist/images/logo.svg" alt="Ipsum" width="169" height="40" />
    
        <h1>Developer Test</h1>
    
        <img class="hero" src="./dist/images/image-1.jpg" alt="" width="1920" height="1080" />

        <h2>Lorem ipsum dolor</h2>

        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aut voluptas est, incidunt sapiente nihil modi possimus accusamus in reiciendis! Nam quisquam tenetur, hic minus perspiciatis omnis in unde ipsum ex veniam impedit, cum obcaecati exercitationem a sapiente consectetur nihil?</p>
            
        <p>Fuga reprehenderit dicta soluta sapiente consectetur a accusamus? Sint, eveniet perferendis aspernatur quidem fuga exercitationem laboriosam modi doloremque aut eos praesentium obcaecati excepturi accusantium at culpa ex deleniti qui veniam provident recusandae ducimus esse natus dicta. Maiores voluptate quibusdam, ratione debitis sunt repellat nisi dicta a dolore illum, velit inventore rem et aspernatur quis aliquam. Voluptate cumque ipsa illum ducimus, voluptatibus laborum nihil rerum tempore consequatur nulla cupiditate mollitia, excepturi est odit aperiam illo. Consequuntur qui quo architecto dolore sequi magni animi. Asperiores doloremque iusto ea porro totam, possimus atque esse exercitationem nulla unde deleniti sapiente veritatis excepturi sequi odit officiis dicta blanditiis voluptatum? Distinctio cupiditate adipisci nemo maxime temporibus maiores at officia exercitationem quia inventore!</p>
        
        <p>Quaerat molestiae ut cum, praesentium esse totam maxime eos optio rem voluptatum eaque quas aspernatur porro amet officia facilis distinctio expedita magni maiores quos nam quisquam dolorum unde voluptatem! Iusto hic, officiis, optio, quo nemo in eaque laudantium beatae sequi laborum ab quasi incidunt fugiat?</p>

        <div class="container-child">
            <h2>Officia facilis distinctio</h2>

            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aut voluptas est, incidunt sapiente nihil modi possimus accusamus in reiciendis! Nam quisquam tenetur, hic minus perspiciatis omnis in unde ipsum ex veniam impedit, cum obcaecati exercitationem a sapiente consectetur nihil?</p>
                
            <p>Fuga reprehenderit dicta soluta sapiente consectetur a accusamus? Sint, eveniet perferendis aspernatur quidem fuga exercitationem laboriosam modi doloremque aut eos praesentium obcaecati excepturi accusantium at culpa ex deleniti qui veniam provident recusandae ducimus esse natus dicta. Maiores voluptate quibusdam, ratione debitis sunt repellat nisi dicta a dolore illum, velit inventore rem et aspernatur quis aliquam. Voluptate cumque ipsa illum ducimus, voluptatibus laborum nihil rerum tempore consequatur nulla cupiditate mollitia, excepturi est odit aperiam illo. Consequuntur qui quo architecto dolore sequi magni animi. Asperiores doloremque iusto ea porro totam, possimus atque esse exercitationem nulla unde deleniti sapiente veritatis excepturi sequi odit officiis dicta blanditiis voluptatum? Distinctio cupiditate adipisci nemo maxime temporibus maiores at officia exercitationem quia inventore!</p>
            
            <p>Quaerat molestiae ut cum, praesentium esse totam maxime eos optio rem voluptatum eaque quas aspernatur porro amet officia facilis distinctio expedita magni maiores quos nam quisquam dolorum unde voluptatem! Iusto hic, officiis, optio, quo nemo in eaque laudantium beatae sequi laborum ab quasi incidunt fugiat?</p>
        </div>

        <div class="images">
            <img
                src="./dist/images/image-2.jpg"
                alt="A single Space Invader on a brick wall"
                loading="lazy"
                width="1920"
                height="1080"
            />
            <img
                src="./dist/images/image-3.jpg"
                alt="A gaming PC setup with multiple screens"
                loading="lazy"
                width="1920"
                height="1080"
            />
        </div>
    </main>
</body>
</html>