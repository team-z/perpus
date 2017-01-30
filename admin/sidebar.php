<?php
session_start();
if (empty($_SESSION['fullname'])) {
    header("location:index.php");
}else{
include "koneksi.php";
};

?>

<div id="sidebar-wrapper">
            <ul class="sidebar-nav nav-pills nav-stacked" id="menu">
                <li>
                    <img src="<?php echo $_SESSION['foto']; ?>" height="200" width="200" class="img-circle" alt="User Image" style="border: 3px solid white;" /><br>
                    <a href="detail-admin.php" style="color: white;"><?php echo $_SESSION['fullname'];?></a>
                </li>
                <li>
                    <a href="admin.php"><span class="fa-stack fa-lg pull-left"><i class="fa fa-dashboard fa-stack-1x "></i></span> Dashboard</a>
                </li>
                <li>
                    <a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-book fa-stack-1x "></i></span> Inventory</a>
                    <ul class="nav-pills nav-stacked" style="list-style-type:none;">
                        <li><a href="data-buku.php"><span class="fa-stack fa-lg pull-left"><i class="fa fa-eye fa-stack-1x "></i></span>Lihat Buku</a></li>
                        <li><a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-plus fa-stack-1x "></i></span>Lihat Alat</a></li>

                    </ul>
                </li>
                <li>
                    <a href="data-admin.php"><span class="fa-stack fa-lg pull-left"><i class="fa fa-user fa-stack-1x "></i></span>Admin Manager</a>
                </li>
                <li>
                    <a href="#"> <span class="fa-stack fa-lg pull-left"><i class="fa fa-star fa-stack-1x "></i></span>Events</a>
                </li>
                <li>
                    <a href="about.php"><span class="fa-stack fa-lg pull-left"><i class="fa fa-question fa-stack-1x "></i></span>About</a>
                </li>
                <li>
                    <a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-wrench fa-stack-1x "></i></span>Pengaturan</a>
                </li>
                <li>
                    <a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-server fa-stack-1x "></i></span>Report</a>
                </li>
                <li>
                    <a href="logout.php"><span class="fa-stack fa-lg pull-left"><i class="fa fa-power-off fa-stack-1x "></i></span>Log Out</a>
                </li>
            </ul>
        </div>