<?php

    include_once("templates/header.php");

    if(isset($_GET["id"])) {

        $postId = $_GET["id"];
        $currentPost;

        foreach($posts as $post) {

            if($post["id"] == $postId) {
                $currentPost = $post;
            }

        }

    }

?>

    <main id="post-container">
        <div class="content-container">
            <h1 id="main-title"><?php echo $currentPost["title"]?></h1>
            <p id="post-description"><?php echo $currentPost["description"]?></p>
            <div class="img-container">
                <img src="<?php echo $BASE_URL?>/img/<?php echo $currentPost['img']?>" alt="<?php echo $currentPost['title']?>">
            </div>
            <p class="post-content">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Error nostrum tempore natus quisquam aspernatur doloremque, minima esse qui repellat ipsa debitis, odio at nemo optio nesciunt rerum, ipsam deserunt. Veniam.
                Vero voluptas dolorem laboriosam aspernatur rem cumque eveniet atque voluptates accusantium placeat possimus expedita, quasi libero non ratione praesentium deleniti asperiores! Dolores dolore adipisci voluptates! Minima eius blanditiis ad sit.
                Laudantium reprehenderit aspernatur doloremque quaerat excepturi inventore aliquam nostrum harum voluptatibus repudiandae quam fugiat dolore voluptatum nihil aut vitae nemo, labore rem odit culpa explicabo nisi. Expedita eos reprehenderit alias!
                Qui repellat nam, optio minus delectus commodi itaque repudiandae. Ipsum vel facere eius repellendus voluptas quam voluptates! Aliquam suscipit architecto ad natus repellat dicta quae fugit explicabo rerum, asperiores laborum?
                Nostrum recusandae quae voluptate accusantium qui distinctio aliquam facere vero velit provident beatae expedita doloremque illo, quos aliquid suscipit maxime deserunt debitis sequi eaque explicabo rem obcaecati nobis! Vero, quae?
            </p>
            <p class="post-content">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Error nostrum tempore natus quisquam aspernatur doloremque, minima esse qui repellat ipsa debitis, odio at nemo optio nesciunt rerum, ipsam deserunt. Veniam.
                Vero voluptas dolorem laboriosam aspernatur rem cumque eveniet atque voluptates accusantium placeat possimus expedita, quasi libero non ratione praesentium deleniti asperiores! Dolores dolore adipisci voluptates! Minima eius blanditiis ad sit.
                Laudantium reprehenderit aspernatur doloremque quaerat excepturi inventore aliquam nostrum harum voluptatibus repudiandae quam fugiat dolore voluptatum nihil aut vitae nemo, labore rem odit culpa explicabo nisi. Expedita eos reprehenderit alias!
                Qui repellat nam, optio minus delectus commodi itaque repudiandae. Ipsum vel facere eius repellendus voluptas quam voluptates! Aliquam suscipit architecto ad natus repellat dicta quae fugit explicabo rerum, asperiores laborum?
                Nostrum recusandae quae voluptate accusantium qui distinctio aliquam facere vero velit provident beatae expedita doloremque illo, quos aliquid suscipit maxime deserunt debitis sequi eaque explicabo rem obcaecati nobis! Vero, quae?
            </p>
        </div>
        <aside id="nav-container">
            <h3 id="tags-title">Tags</h3>
            <ul id="tag-list">
                <?php foreach($currentPost["tags"] as $tag):?>
                    <li><a href="#"><?php echo $tag?></a></li>
                <?php endforeach;?>
            </ul>
            <h3 id="categories-title">Categorias</h3>
            <ul id="categories-list">
                <?php foreach($categories as $category):?>
                    <li><a href="#"><?php echo $category?></a></li>
                <?php endforeach;?>
            </ul>
        </aside>
    </main>

<?php

    include_once("templates/footer.php");

?>
