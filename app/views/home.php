<?php
require_once 'partials/header.php';
?>

    <div class="container">
        <div id="carousel" class="carousel slide" data-mdb-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item" data-mdb-interval="5000">
                    <img src="https://nick.vn/storage/images/lITvp1Ph8r_1623147594.jpg" class="d-block w-100"
                         alt="Camera"/>
                </div>
                <div class="carousel-item active" data-mdb-interval="5000">
                    <img src="https://nick.vn/storage/images/XoBF4ldarS_1623147567.jpg" class="d-block w-100"
                         alt="Exotic Fruits"/>
                </div>
            </div>
            <button class="carousel-control-prev" data-mdb-target="#carousel" type="button" data-mdb-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Trước</span>
            </button>
            <button class="carousel-control-next" data-mdb-target="#carousel" type="button" data-mdb-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Sau</span>
            </button>
        </div>
        <div class="mt-5">
            <h3 class="text-center text-uppercase fw-bold mb-4">Danh mục game</h3>
            <div class="row">
                <?php foreach ($categories as $category): ?>
                    <div class="col-sm-3 mb-3">
                        <div class="card">
                            <img class="card-img-top" src="https://nick.vn/storage/images/0jjbYp7OmJ_1623164374.gif"
                                 alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title text-uppercase text-center fw-bold">
                                    <a href="">Game liên quân</a>
                                </h5>
                                <p class="card-text text-center">
                                    Số tài khoản: 1,255<br>
                                    Đã bán: 125
                                </p>
                                <div class="text-center">
                                    <a href="#" class="btn btn-primary btn-block">Xem chi tiết</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

<?php
require_once 'partials/footer.php';
?>