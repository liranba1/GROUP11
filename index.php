<?php
include "header.php";
?>

    <div class="row">
        <?
        $q = mysqli_query($db, "SELECT * FROM items LIMIT 6");
        while ($row = mysqli_fetch_object($q)){
            ?>
            <div class="col-sm-12 col-md-6 col-lg-4 p-b-50">
                <div class="block2">
                    <div class="block2-img wrap-pic-w of-hidden pos-relative">
                        <img src="<?=$row->url?>" alt="IMG-PRODUCT">

                        <div class="block2-overlay trans-0-4">
                            <div class="block2-btn-addcart w-size1 trans-0-4">
                                <!-- Button -->
                                <form action="" method="post">
                                    <input type="hidden" name="id" value="<?=$row->id?>">
                                    <button type="submit" class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
                                        Add to Cart
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="block2-txt p-t-20">
                        <a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">
                            <?=$row->name?>
                        </a>

                        <span class="block2-price m-text6 p-r-5">
					$<?=$row->price?>
				</span>
                    </div>
                </div>
            </div>
        <?}?>
    </div>

<?include "footer.php";?>