<?php

require_once "../../config/config.php";

include "../../includes/header.php";

include "../../includes/sidebar.php";

?>

<div class="main-content">

<?php include "../../includes/navbar.php"; ?>

<h3 class="mb-4">

Welcome Faculty

</h3>

<div class="row">

<div class="col-md-3">

<div class="dashboard-card card-red">

<h2>12</h2>

<p>Total Tasks</p>

</div>

</div>

<div class="col-md-3">

<div class="dashboard-card card-orange">

<h2>10</h2>

<p>Pending</p>

</div>

</div>

<div class="col-md-3">

<div class="dashboard-card card-green">

<h2>2</h2>

<p>Completed</p>

</div>

</div>

<div class="col-md-3">

<div class="dashboard-card card-blue">

<h2>0</h2>

<p>Overdue</p>

</div>

</div>

</div>

</div>

<?php

include "../../includes/footer.php";

?> 