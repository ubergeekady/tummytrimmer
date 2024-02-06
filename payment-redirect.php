<?php $page_title = "Checkout Success";

include "header.php" ?>

<!--start to page content-->
<div class="page-content">

    <?php
    $code = $_POST['code'];
    $amount = $_POST['amount'] / 100;
    if ($code = "PAYMENT_SUCCESS") {
        ?>

    <script>
    colors = '';

    function onWindowLoad() {
        cart_json = JSON.parse(localStorage.getItem("cart_json"));
        quantity = cart_json.quantity;
        for (i = 1; i <= quantity; i++) {
            colors = colors + cart_json.colors['color' + i];
        }
    };

    window.addEventListener('load', onWindowLoad);
    </script>

    <div class="card rounded-3 border-0 bg-transparent">
        <div class="card-body">
            <div class="text-center error-img">
                <img src="assets/images/social-icons/check-mark.webp" width="80" alt="">
                <h5 class="text-dark mt-4 fw-bold">Payment Recieved</h5><br />
            </div>
        </div>
    </div>

    <?php
    } else {
        ?>
    <div class="card rounded-3 border-0 bg-transparent">
        <div class="card-body">
            <div class="text-center error-img">
                <img src="assets/images/social-icons/error.webp" width="80" alt="">
                <h5 class="text-dark mt-4 fw-bold">Error!</h5>
                <p class="mb-0">A problem occurred during payment</p>
            </div>
        </div>
    </div>
    <?php
    }
    ?>


</div>
<!--end to page content-->

<?php include "footer.php" ?>