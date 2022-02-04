
<!--Learn Sections-->
<section id="learn" class="p-5">
    <div class="container">
        <div class="row align-items-center justify-content-between py-5">
            <div class="col-md">
                <img src="/img/progr.svg" class="img-fluid w-75 d-none d-sm-block" alt="">
            </div>
            <div class="col-md p-5">
              <h3 class="pb-3">Welcome Master!</h3>
              <p>Staff page: <a href="<?php echo base_url() . '/index.php/staff'; ?>" class="text-decoration-none">Staff Page</a></p>
              <p>Member page: <a href="<?php echo base_url() . '/index.php/member'; ?>" class="text-decoration-none">Member Page</a></p>
              <p>Members: <a href="<?php echo base_url() . '/index.php/members'; ?>" class="text-decoration-none">Members</a></p>
              <!--<p>Special function: <?php //echo anchor('staff/verify_payment', 'Verify Payments'); ?></p>-->
              <!--<p>Download user types: <?php echo anchor('master/download_user_types', 'Download User Types'); ?>-->
              <!--<p>Download users: <?php echo anchor('master/download_users', 'Download Users'); ?>-->
              <p>Members: <a href="<?php echo base_url() . '/index.php/edit-users'; ?>" class="text-decoration-none">Edit Users</a></p>
              <!--<p>Fill id_mem_types: <?php echo anchor('master/mem_types', 'Fill Mem Types'); ?>-->
              <!--<p>Set Callsign <a href="#" data-toggle="modal" data-target="#setTbl">Convert Prefix and Suffix to Callsign</a></p>-->
              <p>Regex: <a href="<?php echo base_url() . '/index.php/regex'; ?>" class="text-decoration-none"> Regex</a></p>
            </div>
        </div>
    </div>
</section>
