<?php
include('./config.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="./assets/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./base.css">
</head>

<body>
    <img src="./assets/images/246x0w.png" alt="" style="height: 150px">
    <p>ค้นหาเบอร์โทรศัพท์</p>
    <div class="container mt-5">
        <form method="POST" action="index.php?search=<?php echo md5('asdadasdasdsad') ?>">
            <div class="input-group mb-3">
                <input type="search" class="form-control" name="sname" id="sname" aria-label="Default" aria-describedby="inputGroup-sizing-default">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="submit">
                        <i class="fa fa-search" aria-hidden="true"></i>Search
                    </button>
                </div>
            </div>
        </form>
    </div>
    <div class="table-responsive">
        <table class='table table-hover'>
            <thead class='thead-dark'>
                <tr class=''>
                    <th scope='col'>ID</th>
                    <th scope='col'>PHONE</th>
                    <th scope='col'>NAME</th>
                </tr>
            </thead>
            <?php
            if (isset($_GET['search'])) {
                include_once('show.php');
            }else if(isset($_GET['Insert'])){
                include_once('Insert.php');            }
            else {
                include_once('function.php');
            }
            ?>
        </table>
    </div>
    <div class="progress mt-5">
        <div class="progress-bar bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
    </div>
    <img src="./assets/images/unnamed.png" alt="" style="height: 150px">
    <p>เพิ่มข้อมูล</p>
    <div class="container mt-5">
        <form method="POST" action="index.php?Insert=<?php echo md5('asdadasdasdsad') ?>">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Plese Input Name" name="name" id="name" aria-label="Default" aria-describedby="inputGroup-sizing-default">
            </div>
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Plese Input Phone"  name="phone" id="phone" aria-label="Default" aria-describedby="inputGroup-sizing-default">
            </div>
            <div class="input-group mb-3">
            <button class="btn btn-outline-secondary" type="submit">
                Add
            </button>
            </div>
        </form>
    </div>
</body>

</html>