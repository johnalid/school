

<?php

include 'header.php';


?>

 <section class="container-fluid">
        
    <div class="container">
           </form>
            </div>
         <div class="col-md-12 col-lg-12 p-5">
          <div class="panel panel-primary">
            <div class="panel-heading text-center mt-5 mb-5 text-uppercase">
              <h2>staff Registration Form</h2>
            </div>

            <div class="reg-requirement bg-warning p-5 mb-5">
              Before filling and submitting the form, please make sure you have read the <a href="terms.html" class=""> terms and conditions </a> of joining us. By clicking on submit means you have agreed upon the terms.
            </div>


            <div class="panel-body">
              <form action="connect.php" method="post">
                <div class="form-group">
                  <label for="firstName">First Name</label>
                  <input
                    type="text"
                    class="form-control"
                    id="firstName"
                    name="firstName"
                    required
                  />
                </div>
                <div class="form-group">
                  <label for="lastName">Last Name</label>
                  <input
                    type="text"
                    class="form-control"
                    id="lastName"
                    name="lastName"
                    required
                  />
                </div>

                <div class="form-group">
                  <label for="address">Address</label>
                  <input
                    type="text"
                    class="form-control"
                    id="addres"
                    name="addres"
                    required
                  />
                </div>

                <div class="form-group">
                  <label for="email">Email</label>
                  <input
                    type="email"
                    class="form-control"
                    id="email"
                    name="email"
                    required
                  />
                </div>

                <div class="form-group">
                  <label for="course">Class</label>
                  <input
                    type="text"
                    class="form-control"
                    id="clas"
                    name="clas"
                  />
                </div>

                
                <div class="form-group">
                  <label for="course">password</label>
                  <input
                    type="password"
                    class="form-control"
                    id="pas"
                    name="pas"
                  />
                </div>

                
                <div class="form-group">
                  <label for="number">Phone Number</label>
                  <input
                    type="num"
                    class="form-control"
                    id="num"
                    name="number"
                    required
                  />
                </div>
                <div class="apply-btn">
                  <input type="submit" name="submit" value="click to apply" class="p-3 mt-3 bg-success text-uppercase">
                </div>
              </form> -->
            </div>
    </section>




</body>
</html>