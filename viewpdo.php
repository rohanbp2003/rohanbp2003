
<?php include '../config.php';
 $admin= new Admin();
 ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>PDO</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
      <?php include 'sidebar.php'; ?>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
        <?php include 'header.php'; ?>
            <!-- Navbar End -->


<div class="container-fluid pt-4 px-4">
                <div class="row g-4">
<div class="col-12">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">PDO INFO</h6>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                          <th>SI/NO</th>
                          <th>name</th>
                          <th>email</th>
                          <th>contect number</th>
                          <th>address</th>
                        
                       
                        <th>image</th>
                          <th>date</th>
                          <th >Update</th>
                          <th>Delete</th>
                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                      
                      $i = 1;
                      
                      $stmt = $admin->ret("SELECT * FROM `pdo` ");
                      while($row= $stmt->fetch(PDO::FETCH_ASSOC)){
                      ?>
                                        <tr>
                                            <th scope="row"><?php echo $i++ ; ?></th>
                                            <td><?php echo $row['p_name'] ; ?></td>
                                            <td><?php echo $row['p_email'] ; ?></td>
                                            <td><?php echo $row['p_phone'] ; ?></td>
                                            <td><?php echo $row['p_address'] ; ?></td>
                                            <td><img src="controller/<?php echo $row['p_image'] ; ?>" width="100px" hieght="100px" ></td>
                                            <td><?php echo $row['p_date'] ; ?></td>
                                            <td>                                 <a class="dropdown-item" href="updatepdo.php?id=<?php echo $row['p_id'] ; ?>"> <button type="button" class="btn btn-outline-success btn-rounded" data-mdb-ripple-color="dark">Update</button></a></td>
                                            <td> <a class="dropdown-item" href="controller/deletepdo.php?id=<?php echo $row['p_id'] ; ?>"><button type="button" class="btn btn-outline-danger btn-rounded" data-mdb-ripple-color="dark">Delete</button></a></td>
                                         
                                        </tr>
                                     <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    </div>
                    </div>

  <!-- Footer Start -->
  <?php include 'footer.php'; ?>
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>
    <script>
        function del(id) {
        if (confirm("Are you sure want to delete?")) {
            window.location.href = `controller/deletepdo.php?id=${id}`;
        }
    }
    </script>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>
</html>