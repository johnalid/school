

<?php

include 'header.php';


?>



<?php
include 'db.php';

$fetch="SELECT * FROM staff WHERE id='1' ";
$fetch2 = mysqli_query($config, $fetch) or die(mysqli_error($config));
$pull = mysqli_fetch_array($fetch2);

// echo $pull['firstName'];

?>



<section class="dashboard container-fluid">


<div class="dashboard-welcome text-center text-primary p-5">

<h1>
welcome  
<?php

echo $pull['firstname'];

?>
to your dashboard
</h1>


</div>




<div class="row ">

<div class="col-lg-4 col-md-4 col-sm-12 ">
<div class="container jumbotron">

<div class="firstname">
<div class="container">


<div class="">
<h3>First Name</h3>
<?php
echo $pull['firstname'];
?>
</div>

<div class="mt-3 ">
<h3>
Last Name
</h3>
<?php
echo $pull['lastname'];
?>
</div>

<div class="mt-3">
<h3>
Address
</h3>
<?php
echo $pull['address'];
?>
</div>


<div class="mt-3">
<h3>
Class
</h3>
<?php
echo $pull['class'];
?>
</div>



<div  class="mt-3">
<h3>
Phone Number
</h3>
<?php
echo $pull['number'];
?>
</div>


</div>
</div>
</div>
</div>

<div class="col-lg-8 col-md-8 col-sm-12 container jumbotron">

<div class="result container ">

<h3>RESULT</h3>

                
<div  class="mt-3">
<h3>
mathematics
</h3>
<?php
echo $pull['maths'];
?>
</div>



<div  class="mt-3">
<h3>
English
</h3>
<?php
echo $pull['english'];
?>
</div>



<div  class="mt-3">
<h3>
crk
</h3>
<?php
echo $pull['crk'];
?>
</div>



<div  class="mt-3">
<h3>
social studies
</h3>
<?php
echo $pull['social studies'];
?>
</div>



<div  class="mt-3">
<h3>
History
</h3>
<?php
echo $pull['history'];
?>
</div>
</div>



</div>

</section>

















