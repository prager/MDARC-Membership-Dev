<!--Learn Sections-->
<section id="learn" class="p-5">
    <div class="container">
      <div class="row pt-5">
        <div class="col offset-lg-3">
          <h3 class="fw-bold"><span class="text-warning">MDARC Member: </span><?php echo $primary['fname'] . ' ' . $primary['lname']; ?></h3>
        </div>
      </div>
      <div class="row pt-2 pb-5 mb-5">
        <div class="col-lg-3 offset-lg-1 bg-light pt-3 mb-3">
          <table class="table table-borderless table-hover border">
            <tr class="border-bottom">
              <td><a href="<?php echo base_url() . '/index.php/pers-data'; ?>" class="text-decoration-none text-body nav-link"> <i class="bi bi-person"></i> Edit Your Data </a></td>
            </tr>
            <tr class="border-bottom">
              <td><a href="<?php echo base_url() . '/index.php/show-update'; ?>" class="text-decoration-none text-body nav-link"> <i class="bi bi-gear"></i> Settings</a></td>
            </tr>
            <tr class="border-bottom">
              <td><a href="https://events.r20.constantcontact.com/register/eventReg?oeidk=a07eixcb3jrd9626c70&oseq=&c=&ch=" target="_blank" class="text-decoration-none text-body nav-link"><i class="bi bi-clipboard-check"></i> Renew Membership</a></td>
            </tr>

          </table>

            <?php if($fam_arr['fam_flag']) {?>
            <table class="table table-borderless border pt-5">
                  <tr><td><i class="bi bi-people"></i> Family Members:</td></tr>
                  <?php
                      foreach($fam_arr['fam_mems'] as $mem) {
                        echo '<tr><td>' . $mem['mem_type'] . ' - ' . $mem['fname'] . ' ' . $mem['lname'] . '</td></tr>';
                    } ?>
            </table>
            <?php  } ?>
            <table class="table table-borderless table-hover border">
              <tr class="border-bottom">
                <td><a href="<?php echo base_url() . '/index.php/logout'; ?>" class="text-decoration-none text-body nav-link"><i class="bi bi-box-arrow-up-right"></i> Logout</a></td>
              </tr>
            </table>
        </div>
        <div class="col-lg-6 bg-light p-3 mb-3">
            <?php if($msg != NULL) {?>
            <?php echo $msg; ?>
          <?php }?>
            <p class="lead">Callsign: <?php echo $primary['callsign'] . ' / ' . 'Member ID: ' . $primary['id_members']; ?></p>
            <p class="lead">Membership Type: <?php echo $primary['mem_type']; ?></p>
            <?php if($primary['cur_year'] < date('Y', time())) {?>
              <p class="lead text-danger fw-bold">Current Year: <?php echo $primary['cur_year']; ?> --> Not Current!</p>
            <?php }
            else { ?>
              <p class="lead">Current Year: <?php echo $primary['cur_year']; ?></p>
            <?php }?>
            <?php if($primary['cur_year'] < date('Y', time())) {?>
              <p class="lead text-danger fw-bold">Last Payment: <?php echo $primary['pay_date']; ?> --> Payment Overdue!</p>
              <p>Click on <a href="https://events.r20.constantcontact.com/register/eventReg?oeidk=a07eixcb3jrd9626c70&oseq=&c=&ch=" target="_blank" class="text-decoration-none">Membership Renewal</a> link to renew your membership.</p>
            <?php }
            else { ?>
              <p class="lead">Last Payment: <?php echo $primary['pay_date']; ?></p>
            <?php }?>
            <p class="lead">ARRL Member:
              <?php if(strtoupper($primary['arrl']) == 'TRUE') {?>
                <label class="lead">YES &nbsp; </label>
                <input class="form-check-input" type="checkbox" name="arrl" checked disabled>
              <?php }
                    else { ?>
                <label class="lead">NO &nbsp; </label>
                <input class="form-check-input" type="checkbox" name="arrl" disabled>
              <?php } ?>
            </p>
            <p class="lead">Directory Listing:
              <?php if(strtoupper($primary['dir_ok']) == 'TRUE') {?>
                <label class="lead">YES &nbsp; </label>
                <input class="form-check-input" type="checkbox" name="arrl" checked disabled>
              <?php }
                    else { ?>
                <label class="lead">NO &nbsp; </label>
                <input class="form-check-input" type="checkbox" name="arrl" disabled>
              <?php } ?>
            </p>
            <p class="lead">Email: <?php echo $primary['email']; ?></p>
            <p class="lead">Cell Phone: <?php echo $primary['w_phone'] . ' / Other Phone: ' . $primary['h_phone']; ?></p>
            <p class="lead">Address:<br> <?php echo $primary['address'] . ', ' . $primary['city'] . ', ' . $primary['state'] . ' ' . $primary['zip']; ?></p>
        </div>
      </div>
  </div>
</section>
