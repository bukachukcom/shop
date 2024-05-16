<?php
$priceFrom = intval($_GET['priceFrom'] ?? 0);
$priceTo = intval($_GET['priceTo'] ?? 0);
$nameInput = strip_tags($_GET['name'] ?? '');
$categoryInput = intval($_GET['categoryId'] ?? 0);
?>
<div class="box search">
    <h2>Search by <span></span></h2>
    <div class="box-content">
        <form action="/find.php" method="get">
            <label>Название</label>
            <input type="text" class="field" name="name" value="<?=htmlspecialchars($nameInput)?>"/>
            <label>Category</label>
            <select class="field" name="categoryId">
                <option value="">-- Select Category --</option>
                <?php foreach ($categories as $category): ?>
                    <option value="<?=$category['id']?>" <?php if ($category['id'] == $categoryInput): ?>selected<?php endif ?>><?=$category['name']?></option>
                <?php endforeach ?>
            </select>
            <div class="inline-field">
                <label>Price</label>
                <input type="text" class="field small-field" name="priceFrom" value="<?=$priceFrom?>"/>
                <label>to:</label>
                <input type="text" class="field small-field" name="priceTo" value="<?=$priceTo?>"/>
            </div>
            <input type="submit" class="search-submit" value="Search" />
        </form>
    </div>
</div>