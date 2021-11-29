<?php
require_once 'php/init.php';

$listBrands = getBrands();
?>

<!DOCTYPE html>
<html lang="vi">

<head>
    <title>Hệ thống máy tính và phụ kiện</title>

    <meta charset="utf-8" />
    <!-- <style>
        <?php include './style.css'; ?>
    </style> -->
    <link rel="stylesheet" href="./style.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="grid-container">
        <header class="row">
            <div>
                <a href="index.html"><img class="logo" src="../Images/hcmut.png" alt="Logo" /></a>
            </div>
            <div>
                <div class="dropdown">
                    <a class="Title" href="#">Laptop</a>
                    <div class="dropdown-content">
                        <?php foreach ($listBrands as $brand) : ?>
                            <a href="#"><?php echo $brand['name']; ?></a>
                        <?php endforeach; ?>
                        <a href="#">Theo nhu cầu</a>
                    </div>
                </div>
                <div class="dropdown">
                    <a class="Title" href="#">PC</a>
                    <div class="dropdown-content">
                        <?php foreach ($listBrands as $brand) : ?>
                            <a href="#"><?php echo $brand['name']; ?></a>
                        <?php endforeach; ?>
                        <a href="#">Theo nhu cầu</a>
                    </div>
                </div>
                <div class="dropdown">
                    <a class="Title" href="#">Phụ kiện</a>
                </div>
            </div>
            <div>
                <a href="cart.html">Giỏ hàng</a>
                <a href="signin.html">Sign in</a>
            </div>
        </header>

        <main>
            <div class="row left">
                <h1 class="normal">Giảm giá sốc</h1>
            </div>
            <div class="row left">
                <div class="card">
                    <form action="product01.php">
                        <button>
                            <img class="medium" src="images/dell-inspiron-3505-chinh-hang-y1n1t2-thinkprojpg.png" alt="Dell Inspiron" />
                        </button>
                    </form>
                    <div class="card-body">
                        <form action="product01.php">
                            <button>
                                <h2><b>Dell Inspiron 3505</b></h2>
                            </button>
                        </form>
                        <div class="price">201</div>
                    </div>
                </div>
                
                <div class="card">
                    <a href="product.html">
                        <img class="medium" src="images/dell-inspiron-3505-chinh-hang-y1n1t2-thinkprojpg.png" alt="Dell Inspiron" />
                    </a>
                    <div class="card-body">
                        <a href="product.html">
                            <h2><b>Dell Inspiron 3505</b></h2>
                        </a>
                        <div class="price">201</div>
                    </div>
                </div>
                <div class="card">
                    <a href="product.html">
                        <img class="medium" src="images/dell-inspiron-3505-chinh-hang-y1n1t2-thinkprojpg.png" alt="Dell Inspiron" />
                    </a>
                    <div class="card-body">
                        <a href="product.html">
                            <h2><b>Dell Inspiron 3505</b></h2>
                        </a>
                        <div class="price">201</div>
                    </div>
                </div>
                <div class="card">
                    <a href="product.html">
                        <img class="medium" src="images/dell-inspiron-3505-chinh-hang-y1n1t2-thinkprojpg.png" alt="Dell Inspiron" />
                    </a>
                    <div class="card-body">
                        <a href="product.html">
                            <h2><b>Dell Inspiron 3505</b></h2>
                        </a>
                        <div class="price">201</div>
                    </div>
                </div>
                <div class="card">
                    <a href="product.html">
                        <img class="medium" src="images/dell-inspiron-3505-chinh-hang-y1n1t2-thinkprojpg.png" alt="Dell Inspiron" />
                    </a>
                    <div class="card-body">
                        <a href="product.html">
                            <h2><b>Dell Inspiron 3505</b></h2>
                        </a>
                        <div class="price">201</div>
                    </div>
                </div>
                <div class="card">
                    <a href="product.html">
                        <img class="medium" src="images/dell-inspiron-3505-chinh-hang-y1n1t2-thinkprojpg.png" alt="Dell Inspiron" />
                    </a>
                    <div class="card-body">
                        <a href="product.html">
                            <h2><b>Dell Inspiron 3505</b></h2>
                        </a>
                        <div class="price">201</div>
                    </div>
                </div>
            </div>

            <br><br>
            <div class="row left">
                <h1 class="normal">Máy tính xách tay</h1>
            </div>
            <div class="row left">
                <div class="brand">Thương hiệu</div>
                <?php foreach ($listBrands as $brand) : ?>
                    <a class="card brand" href="#">
                        <img style="width: 40%;" class="blogo" src=<?php echo $brand['url']; ?> alt=<?php echo $brand['name']; ?> />
                    </a>
                <?php endforeach; ?>
                <!-- <a class="card brand" href="#">
                    <img style="width: 40%" class="blogo" src="images/Dell.png" alt="Dell" />
                </a>
                <a class="card brand" href="#">
                    <img style="width: 80%" class="blogo" src="images/Lenovo.jpg" alt="Lenovo" />
                </a>
                <a class="card brand" href="#">
                    <img style="width: 30%" class="blogo" src="images/Apple.png" alt="Apple" />
                </a>
                <a class="card brand" href="#">
                    <img style="width: 45%" class="blogo" src="images/Razer.png" alt="Razer" />
                </a>
                <a class="card brand" href="#">
                    <img style="width: 60%" class="blogo" src="images/Asus.jpg" alt="Asus" />
                </a>
                <a class="card brand" href="#">
                    <img style="width: 80%" class="blogo" src="images/Acer.png" alt="Acer" />
                </a> -->
            </div>

            <br>
            <div class="row left">
                <div class="million">Khoảng giá</div>
                <a class="card price" href="#">Trên 50 triệu</a>
                <a class="card price" href="#">40 - 50 triệu</a>
                <a class="card price" href="#">30 - 40 triệu</a>
                <a class="card price" href="#">20 - 30 triệu</a>
                <a class="card price" href="#">15 - 20 triệu</a>
                <a class="card price" href="#">10 - 15 triệu</a>
                <a class="card price" href="#">Duới 10 triệu</a>
            </div>

            <br>
            <div class="row left">
                <div class="card">
                    <a href="product.html">
                        <img class="medium" src="images/dell-inspiron-3505-chinh-hang-y1n1t2-thinkprojpg.png" alt="Dell Inspiron" />
                    </a>
                    <div class="card-body">
                        <div class="dropdown">
                            <a href="product.html">
                                <h2><b>Dell Inspiron 3505</b></h2>
                            </a>
                            <div class="price">201</div>

                        </div>
                    </div>
                    <div class="detail-content">
                        <div>lorem ipppsum jjhds cfhbd djsnnjk cdjsnck</div>
                        <br>
                        <div class="add_to_cart">
                            <a style="color: #ffffff;" href="#">Thêm vào giỏ hàng</a>
                        </div>
                        <br>
                        <div class="compare">
                            <a href="#">Thêm vào so sánh</a>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <a href="product.html">
                        <img class="medium" src="images/dell-inspiron-3505-chinh-hang-y1n1t2-thinkprojpg.png" alt="Dell Inspiron" />
                    </a>
                    <div class="card-body">
                        <a href="product.html">
                            <h2><b>Dell Inspiron 3505</b></h2>
                        </a>
                        <div class="price">201</div>
                    </div>
                </div>
                <div class="card">
                    <a href="product.html">
                        <img class="medium" src="images/dell-inspiron-3505-chinh-hang-y1n1t2-thinkprojpg.png" alt="Dell Inspiron" />
                    </a>
                    <div class="card-body">
                        <a href="product.html">
                            <h2><b>Dell Inspiron 3505</b></h2>
                        </a>
                        <div class="price">201</div>
                    </div>
                </div>
                <div class="card">
                    <a href="product.html">
                        <img class="medium" src="images/dell-inspiron-3505-chinh-hang-y1n1t2-thinkprojpg.png" alt="Dell Inspiron" />
                    </a>
                    <div class="card-body">
                        <a href="product.html">
                            <h2><b>Dell Inspiron 3505</b></h2>
                        </a>
                        <div class="price">201</div>
                    </div>
                </div>
                <div class="card">
                    <a href="product.html">
                        <img class="medium" src="images/dell-inspiron-3505-chinh-hang-y1n1t2-thinkprojpg.png" alt="Dell Inspiron" />
                    </a>
                    <div class="card-body">
                        <a href="product.html">
                            <h2><b>Dell Inspiron 3505</b></h2>
                        </a>
                        <div class="price">201</div>
                    </div>
                </div>
            </div>

            <br>
            <div class="row left">
                <h1 class="normal">Máy tính - PC</h1>
            </div>
            <div class="row left">
                <div class="brand">Thương hiệu</div>
                <a class="card brand" href="#">
                    <img style="width: 40%" class="blogo" src="images/Dell.png" alt="Dell" />
                </a>
                <a class="card brand" href="#">
                    <img style="width: 80%" class="blogo" src="images/Lenovo.jpg" alt="Lenovo" />
                </a>
                <a class="card brand" href="#">
                    <img style="width: 30%" class="blogo" src="images/Apple.png" alt="Apple" />
                </a>
                <a class="card brand" href="#">
                    <img style="width: 45%" class="blogo" src="images/Razer.png" alt="Razer" />
                </a>
                <a class="card brand" href="#">
                    <img style="width: 60%" class="blogo" src="images/Asus.jpg" alt="Asus" />
                </a>
                <a class="card brand" href="#">
                    <img style="width: 80%" class="blogo" src="images/Acer.png" alt="Acer" />
                </a>
            </div>

            <br>
            <div class="row left">
                <div class="million">Khoảng giá</div>
                <a class="card price" href="#">Trên 50 triệu</a>
                <a class="card price" href="#">40 - 50 triệu</a>
                <a class="card price" href="#">30 - 40 triệu</a>
                <a class="card price" href="#">20 - 30 triệu</a>
                <a class="card price" href="#">15 - 20 triệu</a>
                <a class="card price" href="#">10 - 15 triệu</a>
                <a class="card price" href="#">Duới 10 triệu</a>
            </div>

            <br><br>
            <div class="row left">
                <div class="card">
                    <a href="product.html">
                        <img class="medium" src="images/dell-inspiron-3505-chinh-hang-y1n1t2-thinkprojpg.png" alt="Dell Inspiron" />
                    </a>
                    <div class="card-body">
                        <a href="product.html">
                            <h2><b>Dell Inspiron 3505</b></h2>
                        </a>
                        <div class="price">201</div>
                    </div>
                </div>
                <div class="card">
                    <a href="product.html">
                        <img class="medium" src="images/dell-inspiron-3505-chinh-hang-y1n1t2-thinkprojpg.png" alt="Dell Inspiron" />
                    </a>
                    <div class="card-body">
                        <a href="product.html">
                            <h2><b>Dell Inspiron 3505</b></h2>
                        </a>
                        <div class="price">201</div>
                    </div>
                </div>
                <div class="card">
                    <a href="product.html">
                        <img class="medium" src="images/dell-inspiron-3505-chinh-hang-y1n1t2-thinkprojpg.png" alt="Dell Inspiron" />
                    </a>
                    <div class="card-body">
                        <a href="product.html">
                            <h2><b>Dell Inspiron 3505</b></h2>
                        </a>
                        <div class="price">201</div>
                    </div>
                </div>
                <div class="card">
                    <a href="product.html">
                        <img class="medium" src="images/dell-inspiron-3505-chinh-hang-y1n1t2-thinkprojpg.png" alt="Dell Inspiron" />
                    </a>
                    <div class="card-body">
                        <a href="product.html">
                            <h2><b>Dell Inspiron 3505</b></h2>
                        </a>
                        <div class="price">201</div>
                    </div>
                </div>
                <div class="card">
                    <a href="product.html">
                        <img class="medium" src="images/dell-inspiron-3505-chinh-hang-y1n1t2-thinkprojpg.png" alt="Dell Inspiron" />
                    </a>
                    <div class="card-body">
                        <a href="product.html">
                            <h2><b>Dell Inspiron 3505</b></h2>
                        </a>
                        <div class="price">201</div>
                    </div>
                </div>
                <div class="card">
                    <a href="product.html">
                        <img class="medium" src="images/dell-inspiron-3505-chinh-hang-y1n1t2-thinkprojpg.png" alt="Dell Inspiron" />
                    </a>
                    <div class="card-body">
                        <a href="product.html">
                            <h2><b>Dell Inspiron 3505</b></h2>
                        </a>
                        <div class="price">201</div>
                    </div>
                </div>
            </div>
        </main>

        <footer class="row">
            <div>
                <a href="temp.html"><img class="logo" src="../Images/hcmut.png" alt="Logo" /></a>
            </div>
            <div>
                <ul>
                    <li>
                        <h2 class="normal">Chính sách</h2>
                    </li>
                    <li><a href="#">Bảo hành</a></li>
                    <li><a href="#">Vận chuyển</a></li>
                    <li><a href="#">Thanh toán</a></li>
                </ul>
            </div>
            <div>
                <ul>
                    <li>
                        <h2 class="normal">Hệ thống cửa hàng</h2>
                    </li>
                    <li>268 Lý Thường Kiệt, Phường 14, Quận 10, Thành phố Hồ Chí Minh</li>
                    <li><a href="https://www.google.com/maps/place/Tr%C6%B0%E1%BB%9Dng+%C4%90%E1%BA%A1i+h%E1%BB%8Dc+B%C3%A1ch+khoa+-+%C4%90%E1%BA%A1i+h%E1%BB%8Dc+Qu%E1%BB%91c+gia+TP.HCM/@10.7733743,106.6606193,15z/data=!4m5!3m4!1s0x0:0xef77cd47a1cc691e!8m2!3d10.7733743!4d106.6606193">
                            Chỉ đường
                        </a></li>
                </ul>
            </div>
        </footer>
    </div>

</body>

</html>