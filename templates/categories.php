<div class="box categories">
    <h2>Categories <span></span></h2>
    <div class="box-content">
        <ul>
            <?php foreach ($categories as $category) { ?>
                <li><a href="/category.php?categoryId=<?php echo $category['id']?>"><?php echo $category['name']?></a></li>
            <?php } ?>
        </ul>
    </div>
</div>
