<?php
include "header.php";
if($user->rank != 2){
    header("Location: index.php");
}

if(isset($_GET['edit']) && isset($_GET['name']) && $_GET['edit'] == "cat" && !empty($_GET['id'])){
    $id = $_GET['id'];
    $edit = $_GET['name'];
    $q = mysqli_query($db, "SELECT * FROM cat WHERE id = '$id'");
    if(mysqli_num_rows($q) == 1){
        $row = mysqli_fetch_object($q);
        mysqli_query($db, "UPDATE `cat` SET `name`='$edit' WHERE id = '$id'");
        echo "edited";
        header("Location: admin.php");
    }
}

if(isset($_GET['new']) && isset($_GET['name']) && $_GET['new'] == "cat"){
    $edit = $_GET['name'];
    mysqli_query($db, "insert into cat(`name`) VALUES ('$edit')");
    echo "saved";

}

if(isset($_GET['edit']) && isset($_GET['name']) && $_GET['edit'] == "items" && !empty($_GET['id'])){
    $id = $_GET['id'];
    $edit = $_GET['name'];
    $price = $_GET['price'];
    $cid = $_GET['cid'];
    $sizes = $_GET['sizes'];
    $url = $_GET['url'];
    $q = mysqli_query($db, "SELECT * FROM items WHERE id = '$id'");
    if(mysqli_num_rows($q) == 1){
        $row = mysqli_fetch_object($q);
        mysqli_query($db, "UPDATE `items` SET `cid`='$cid',`name`='$edit',`price`='$price',`sizes`='$sizes',`url`='$url' WHERE id = '$id'");
        echo "edited";
    }
}

if(isset($_GET['new']) && isset($_GET['name']) && $_GET['new'] == "item"){
    $edit = $_GET['name'];
    $price = $_GET['price'];
    $cid = $_GET['cid'];
    $sizes = $_GET['sizes'];
    $url = $_GET['url'];
    mysqli_query($db, "insert into items(`cid`, `name`, `price`, `sizes`, `url`) VALUES ('$cid','$edit','$price','$sizes','$url')");
    echo "saved";
}

if(isset($_GET['edit']) && isset($_GET['name']) && $_GET['edit'] == "user" && !empty($_GET['id'])){
    $id = $_GET['id'];
    $edit = $_GET['name'];
    $rank = $_GET['rank'];
    $pass = $_GET['pass'];
    $email = $_GET['email'];
    $q = mysqli_query($db, "SELECT * FROM users WHERE id = '$id'");
    if(mysqli_num_rows($q) == 1){
        $row = mysqli_fetch_object($q);
        mysqli_query($db, "UPDATE `users` SET `username`='$edit',`password`='$pass',`email`='$email',`rank`='$rank' WHERE id = '$id'");
        echo "edited";
    }
}

if(isset($_GET['new']) && isset($_GET['name']) && $_GET['new'] == "user"){
    $name = $_GET['name'];
    $rank = $_GET['rank'];
    $pass = $_GET['pass'];
    $email = $_GET['email'];
    mysqli_query($db, "insert into users(`username`, `password`, `email`, `rank`) VALUES ('$name','$pass','$email','$rank')");
    echo "saved";
}

//if(isset($_GET['edit']) && $_GET['edit'] == "cat" && !empty($_GET['id'])){
//    $id = $_GET['id'];
//    $edit = $_GET['name'];
//    $q = mysqli_query($db, "SELECT * FROM cat WHERE id = '$id'");
//    if(mysqli_num_rows($q) == 1){
//        $row = mysqli_fetch_object($q);
//        mysqli_query($db, "UPDATE `cat` SET `name`='$edit' WHERE id = '$id'");
//        echo "edited";
//    }
//}
?>
    <div class="container">
        <div class="row">
            <?
            $countUsers = mysqli_num_rows(mysqli_query($db, "SELECT * FROM users"));
            $countCat = mysqli_num_rows(mysqli_query($db, "SELECT * FROM cat"));
            $countItems = mysqli_num_rows(mysqli_query($db, "SELECT * FROM items"));
            ?>
            <div class="col-md-4">
                <div class="card mb-5">
                    <div class="card-body text-center">
                        מספר משתמשים <?=$countUsers?>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-5">
                    <div class="card-body text-center">
                        מספר קטגוריות <?=$countCat?>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-5">
                    <div class="card-body text-center">
                        מספר פריטים <?=$countItems?>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-5">
                    <div class="card-body">

                        <h5 class="card-title text-center">Catagory</h5>

                        <form class="mb-3" action="admin.php">
                            <div class="row">
                                <div class="col">
                                    <input type="text" value="" name="name" class="form-control" placeholder="Catagory" style="border: 1px solid black!important;">
                                </div>
                                <input name="new" value="cat" type="hidden">
                                <button type="submit" class="btn btn-primary">submit</button>
                            </div>
                        </form>

                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?
                            $q = mysqli_query($db, "SELECT * FROM cat");
                            while($row = mysqli_fetch_object($q)){
                                ?>
                            <tr>
                                <form class="mb-3" action="admin.php">
                                <th scope="row"><?=$row->id?></th>
                                <th>
                                <input type="text" value="<?=$row->name?>" name="name" class="form-control" placeholder="Catagory" style="border: 1px solid black!important;">
                                </th>
                                    <th>
                                        <input name="id" value="<?=$row->id?>" type="hidden">
                                        <input name="edit" value="cat" type="hidden">
                                        <button type="submit" class="btn btn-primary">save</button>
                                    </th>
                                </form>
                            </tr>
                            <?}?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="card mb-5">
                    <div class="card-body">

                        <h5 class="card-title text-center">Items</h5>

                        <form class="mb-3" action="admin.php">
                            <div class="row">
                                <div class="col">
                                    <select name="cid">
                                        <?$q = mysqli_query($db, "SELECT * FROM cat");
                                        while($row2 = mysqli_fetch_object($q)){?>
                                            <option value="<?=$row2->id?>"><?=$row2->name?></option>
                                        <?}?>
                                    </select>
                                </div>
                                <div class="col">
                                    <input type="text" value="" name="name" class="form-control" placeholder="Name" style="border: 1px solid black!important;">
                                </div>
                                <div class="col">
                                    <input type="text" value="" name="price" class="form-control" placeholder="Price" style="border: 1px solid black!important;">
                                </div>
                                <div class="col">
                                    <input type="text" value="" name="sizes" class="form-control" placeholder="Sizes" style="border: 1px solid black!important;">
                                </div>
                                <div class="col">
                                    <input type="text" value="" name="url" class="form-control" placeholder="Url" style="border: 1px solid black!important;">
                                </div>
                                <input name="new" value="item" type="hidden">
                                <button type="submit" class="btn btn-primary">submit</button>
                            </div>
                        </form>

                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">C Name</th>
                                <th scope="col">Name</th>
                                <th scope="col">Price</th>
                                <th scope="col">Sizes</th>
                                <th scope="col">Url</th>
                                <th scope="col">action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?
                            $q = mysqli_query($db, "SELECT * FROM items ");
                            while($row = mysqli_fetch_object($q)){
                                ?>
                                <tr>
                                    <form class="mb-3" action="admin.php">
                                        <th scope="row"><?=$row->id?></th>
                                        <th>
                                            <select name="cid">
                                            <?$q2 = mysqli_query($db, "SELECT * FROM cat");
                                            while($row2 = mysqli_fetch_object($q2)){?>
                                            <option value="<?=$row2->id?>" <?if($row2->id == $row->cid){?>selected<?}?>><?=$row2->name?></option>
                                            <?}?>
                                            </select>
                                        </th>
                                        <th>
                                            <input type="text" value="<?=$row->name?>" name="name" class="form-control" placeholder="Name" style="border: 1px solid black!important;">
                                        </th>
                                        <th>
                                            <input type="text" value="<?=$row->price?>" name="price" class="form-control" placeholder="Price" style="border: 1px solid black!important;">
                                        </th>
                                        <th>
                                            <input type="text" value="<?=$row->sizes?>" name="sizes" class="form-control" placeholder="sizes" style="border: 1px solid black!important;">
                                        </th>
                                        <th>
                                            <input type="text" value="<?=$row->url?>" name="url" class="form-control" placeholder="Url" style="border: 1px solid black!important;">
                                        </th>
                                        <th>
                                            <input name="id" value="<?=$row->id?>" type="hidden">
                                            <input name="edit" value="items" type="hidden">
                                            <button type="submit" class="btn btn-primary">save</button>
                                        </th>
                                    </form>
                                </tr>
                            <?}?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="card mb-5">
                    <div class="card-body">

                        <h5 class="card-title text-center">User</h5>

                        <form class="mb-3" action="admin.php">
                            <div class="row">
                                <div class="col">
                                    <input type="text" value="" name="name" class="form-control" placeholder="Name" style="border: 1px solid black!important;">
                                </div>
                                <div class="col">
                                    <input type="text" value="" name="rank" class="form-control" placeholder="Rank" style="border: 1px solid black!important;">
                                </div>
                                <div class="col">
                                    <input type="text" value="" name="pass" class="form-control" placeholder="Pass" style="border: 1px solid black!important;">
                                </div>
                                <div class="col">
                                    <input type="text" value="" name="email" class="form-control" placeholder="Email" style="border: 1px solid black!important;">
                                </div>
                                <input name="new" value="user" type="hidden">
                                <button type="submit" class="btn btn-primary">submit</button>
                            </div>
                        </form>

                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Rank</th>
                                <th scope="col">Pass</th>
                                <th scope="col">Email</th>
                                <th scope="col">action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?
                            $q = mysqli_query($db, "SELECT * FROM users ");
                            while($row = mysqli_fetch_object($q)){
                                ?>
                                <tr>
                                    <form class="mb-3" action="admin.php">
                                        <th scope="row"><?=$row->id?></th>
                                        <th>
                                            <input type="text" value="<?=$row->username?>" name="name" class="form-control" placeholder="First name" style="border: 1px solid black!important;">
                                        </th>
                                        <th>
                                            <input type="text" value="<?=$row->rank?>" name="rank" class="form-control" placeholder="First name" style="border: 1px solid black!important;">
                                        </th>
                                        <th>
                                            <input type="text" value="<?=$row->password?>" name="pass" class="form-control" placeholder="First name" style="border: 1px solid black!important;">
                                        </th>
                                        <th>
                                            <input type="text" value="<?=$row->email?>" name="email" class="form-control" placeholder="First name" style="border: 1px solid black!important;">
                                        </th>
                                        <th>
                                            <input name="id" value="<?=$row->id?>" type="hidden">
                                            <input name="edit" value="user" type="hidden">
                                            <button type="submit" class="btn btn-primary">save</button>
                                        </th>
                                    </form>
                                </tr>
                            <?}?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>

<?include "footer.php";?>
