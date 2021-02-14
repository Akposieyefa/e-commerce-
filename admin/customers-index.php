<?php include_once('inc/header.php');?>
<?php
    $filepath = realpath(dirname(__FILE__));
    include_once($filepath.'/../classes/Customer.php');
?>
<?php 
    $pd = new Customer();
    $fm = new Format();
    if (isset($_GET['del'])) {
        $cust_id = preg_replace('/[^-a-zA-Z0-9_]/', '', $_GET['del']);
        $delDetail = $pd->delCustomersById($cust_id);
    }
 ?>
    <?php include_once('inc/nav.php');?>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid">
                <h1 class="mt-4">Customers List</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active"><i class="fa fa-users"></i> Customers List</li>
                </ol>
                
                <div class="card mb-4">
                    <div class="card-header"><i class="fas fa-table mr-1"></i>Customers List</div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Country</th>
                                        <th>City</th>
                                        <th>Address</th>
                                        <th>Zip</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                    <?php
                                        $getCust =  $pd->getAllCustomers();;
                                        $i = 0;
                                        if(is_array($getCust) || is_object($getCust)) {
                                            foreach($getCust as $key => $value) {
                                                $id       = htmlentities($value["id"]);
                                                $name     = htmlentities($value["name"]);
                                                $email    = htmlentities($value["email"]);
                                                $phone    = htmlentities($value["phone"]);
                                                $country  = htmlentities($value["country"]);
                                                $city     = htmlentities($value["city"]);
                                                $address  = htmlentities($value["address"]);
                                                $zip  = htmlentities($value["zip"]);
                                                $i ++;
                                    ?>
                                <tbody>
                                    <tr>
                                        <td><?php echo $i;?> </td>
                                        <td><?php echo $name;?></td>
                                        <td><?php echo $email;?></td>
                                        <td><?php echo $phone;?></td>
                                        <td><?php echo $country;?></td>
                                        <td><?php echo $city;?></td>
                                        <td><?php echo $fm->textShorten($address, 20);?></td>
                                        <td><?php echo $zip;?></td>
                                        <td>
                                            <span>
                                              <a class="btn btn-primary btn-sm" href="customers-show.php?id=<?php echo  $id;?>"> <i class="fa fa-eye"></i></a>
                                            </span>
                                            <span>
                                              <a onclick="return confirm('Are you sure you want to delete this...?')" href="?del=<?php echo $id; ?>" class="btn btn-danger btn-sm"> <i  class="fa fa-trash"></i></a>
                                            </span>
                                        </td>
                                    </tr>
                                </tbody>
                                <?php 
                                        }
                                    }
                                ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </main>
      <?php include_once('inc/footer.php');?>