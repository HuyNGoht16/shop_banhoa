<?php

@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if (!isset($user_id)) {
    header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- custom admin css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <?php @include 'header.php'; ?>

    <section class="heading">
        <h3>Chi tiết về chúng tôi</h3>
        <p> <a href="home.php">Trang chủ</a> / Chi tiết </p>
    </section>

    <section class="about">

        <div class="flex">

            <div class="image">
                <img src="images/about-img-1.png" alt="">
            </div>

            <div class="content">
                <h3>Tại Sao Chọn Chúng tôi?</h3>
                <p>Chúng tôi tự hào là một trong những cửa hàng hoa uy tín, hiện đại nhất hiện nay. Với phong cách làm việc chuyên nghiệp cùng đội ngũ nhân viên nhiều năm trong nghề, đảm bảo mang tới cho quý khách hàng một trải nghiệm thật tuyệt vời khi sử dụng dịch vụ mua hoa tại đây.</p>
                <a href="shop.php" class="btn">shop now</a>
            </div>

        </div>

        <div class="flex">

            <div class="content">
                <h3>Chúng tôi cung cấp những gì?</h3>
                <p>Ngoài các dịch vụ về hoa tươi như: hoa sinh nhật, hoa chúc mừng, hoa chia buồn và shop hoa chúng tôi hiểu được thêm nhu cầu của bạn, chúng tôi có liên kết với các hãng có uy tín để cung cấp thêm các dịch vụ như: bánh sinh nhật, Chocolate, Gấu bông, kẹo ngọt, trái cây...</p>
                <a href="contact.php" class="btn">contact us</a>
            </div>

            <div class="image">
                <img src="images/about-img-2.jpg" alt="">
            </div>

        </div>

        <div class="flex">

            <div class="image">
                <img src="images/about-img-3.jpg" alt="">
            </div>

            <div class="content">
                <h3>Tại sao chúng tôi lại uy tín được như thế?</h3>
                <p>Với nhiều năm kinh nghiệm phục vụ trong ngành điện hoa, shop hoa tươi Hoayeuthuong.com hiểu mức độ quan trọng trong công việc của mình là truyền tải đúng và đủ thông điệp của người tặng đến người nhận. Vì thế chúng tôi cam kết 100% sự hài lòng của khách hàng với dịch vụ điện hoa của chúng tôi. Với bất cứ điều gì không hài lòng bạn đều được hoàn lại 100% phí dịch vụ đã chuyển cho chúng tôi.</p>
                <a href="#reviews" class="btn">clients reviews</a>
            </div>

        </div>

    </section>

    <section class="reviews" id="reviews">

        <h1 class="title">Các nhà sáng lập</h1>

        <div class="box-container">

            <div class="box">
                <img src="images/IMG_1241.JPG" alt="">
                <p>Tìm kiếm ý tưởng từ các nguồn khác nhau, như từ những người khác, từ trải nghiệm của bản thân, từ các tài nguyên trực tuyến, v.v.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>Lê Đức Tuấn</h3>
                <h3>22/07/2002</h3>
            </div>

            <div class="box">
                <img src="images/IMG_7789.JPG" alt="">
                <p>Thực hành và luyện tập, thử nghiệm những ý tưởng mới để nâng cao khả năng sáng tạo.tạo ra những ý tưởng mới mẻ và độc đáo, cũng như khả năng áp dụng những ý tưởng đó vào thực tiễn để giải quyết các vấn đề </p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>Lê Huy Ngọ</h3>
                <h3>16/04/2002</h3>
            </div>

            <div class="box">
                <img src="images/IMG_1238.JPG" alt="">
                <p>Tập trung vào các khía cạnh khác nhau của vấn đề, thay vì chỉ tập trung vào những giải pháp truyền thống.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>Phan Hùng Thi</h3>
                <h3>27/09/2002</h3>
            </div>

            


    </section>











    <?php @include 'footer.php'; ?>

    <script src="js/script.js"></script>

</body>

</html>