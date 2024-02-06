<?php $page_title = "Tummy Trimmer Checkout";

include "header.php" ?>


<!--start to page content-->
<div class="page-content p-0">
    <div class="card rounded-0 border-0">
        <div class="card-body">
            <div class="card rounded-3">
                <div class="card-body">
                    <h5 class="fw-bold mb-3 text-dark">Order Summary</h5>
                    <div class="hstack align-items-center justify-content-between">
                        <p class="mb-0">Agile Tummy Trimmer (Quantity 1):</p>
                        <p class="mb-0">₹399</p>
                    </div>
                </div>
            </div>

            <br />


            <script>

            function submit(){
                fullName = document.getElementById('floatingFullName').value;
                mobileNo = document.getElementById('floatingMobileNo').value;
                streetAddress = document.getElementById('floatingStreetAddress').value;
                pinCode = document.getElementById('floatingZipCode').value;
                city = document.getElementById('floatingCity').value;
                state = document.getElementById('floatingState').value;
                if(fullName.length<2){
                    alert("Please Enter Full Name");
                }
                if(mobileNo.length<9){
                    alert("Please Enter Correct Contact Number");
                }

            }

            window.addEventListener('load', onWindowLoad);
            </script>

            <div class="col-12">
                <div class="form-floating">
                  <input
                    type="text"
                    class="form-control rounded-3"
                    id="floatingFullName"
                    placeholder="First Name"
                  />
                  <label for="floatingFirstName">Full Name</label>
                  <div class="invalid-feedback">
                    Please provide a valid city.
                  </div>
                </div>
              </div>
              <br />
              <div class="col-12">
                <div class="form-floating">
                  <input
                    type="text"
                    class="form-control rounded-3"
                    id="floatingMobileNo"
                  />
                  <label for="floatingMobileNo">Mobile No</label>
                </div>
              </div>
              <br />
              <div class="col-12">
                <div class="form-floating">
                  <input
                    type="text"
                    class="form-control rounded-3"
                    id="floatingStreetAddress"
                  />
                  <label for="floatingStreetAddress">Street Address</label>
                </div>
              </div>
              <br />
              <div class="col-12">
                <div class="form-floating">
                  <input
                    type="text"
                    class="form-control rounded-3"
                    id="floatingZipCode"
                  />
                  <label for="floatingZipCode">Pin Code</label>
                </div>
              </div>
              <br />
              <div class="col-12">
                <div class="form-floating">
                  <input
                    type="text"
                    class="form-control rounded-3"
                    id="floatingCity"
                  />
                  <label for="floatingCity">City</label>
                </div>
              </div>
              <br />
              <div class="col-12">
                <div class="form-floating">
                  <input
                    type="text"
                    class="form-control rounded-3"
                    id="floatingState"
                  />
                  <label for="floatingCountry">State</label>
                </div>
              </div>

            <br />
            <div class="buttons d-flex flex-row gap-3 w-100">
                <a onclick="submit(); return false;" href="#"
                    class="btn btn-dark btn-ecomm flex-grow-1 rounded-3"><i class="bi bi-basket2 me-2"></i>Pay
                    Online</a>
            </div>
        </div>
    </div>
</div>
<!--end to page content-->




<?php include "footer.php" ?>