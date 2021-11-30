function changeImage(image) {
    document.getElementById("img-large").src = "Images/<?php echo $product['pro_id']; ?>/item0" + image + ".jpg";
}