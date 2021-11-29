<?php
require_once 'php/init.php';

$listNews = getNews();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>News about BKU</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../css/style-news.css">
	
    </head>
    <body>
        <!-- Start Header -->
        <header class="logo">
	    <a href="index.php">
            <img src="Images/hcmut.png" alt="Logo" style="width: 100px; height: 100px; display: block; margin-left: auto; margin-right: auto;">
	    </a>
        </header>
        <!-- End Header -->

        <!-- Start Latest News -->
        <section class="news">
            <h1>Tin tức mới nhất</h1>
	    <div class="latest-news">
                <?php foreach ($listNews as $new) : ?>
                    <div class="card">
                        <p><strong>
                            <?php echo $new['title']; ?></strong>  
                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
                            <a href="news01.html">Xem thêm</a>
                        </p>
                        <form action="new.php" method="POST">
                            <input type="text" value="<?php echo $new['new_id']; ?>" name="proId" hidden>
                            <button name="btnEdit" type="submit" class="btn btn-primary btn-sm mr-2">Edit</button>
                        </form>
                    </div>
                <?php endforeach; ?>
	    </div>
	</section>

        <!-- Start Footer -->
        <footer class="row1">
            <div>
                <img class="logo" src="Images/hcmut.png" alt="Logo">
            </div>
            <div>
                <ul class="no-bullets">
                    <li><h2 class="normal">Chính sách</h2></li>
                    <li><a href="#">Bảo hành</a></li>
                    <li><a href="#">Vận chuyển</a></li>
                    <li><a href="#">Thanh toán</a></li>
                </ul>
            </div>
            <div>
                <ul class="no-bullets">
                    <li><h2 class="normal">Hệ thống cửa hàng</h2></li>
                    <li>268 Lý Thường Kiệt, Phường 14, Quận 10, Thành phố Hồ Chí Minh</li>
                    <li><a href="https://www.google.com/maps/place/Tr%C6%B0%E1%BB%9Dng+%C4%90%E1%BA%A1i+h%E1%BB%8Dc+B%C3%A1ch+khoa+-+%C4%90%E1%BA%A1i+h%E1%BB%8Dc+Qu%E1%BB%91c+gia+TP.HCM/@10.7733743,106.6606193,15z/data=!4m5!3m4!1s0x0:0xef77cd47a1cc691e!8m2!3d10.7733743!4d106.6606193">
                        Chỉ đường
                    </a></li>
                </ul>
            </div>
        </footer>
        <!-- End Footer -->
    </body>
</html>