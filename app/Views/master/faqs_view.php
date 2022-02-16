
<!--Learn Sections-->
<section id="learn" class="p-5">
    <div class="container">
        <div class="row py-5">
            <div class="col-lg-8 text-center offset-lg-1">
              <h3>FAQs Administration</h3>
              <div class="accordion accordion-flush" id="accFAQs">
                <?php if($faqs != NULL) {
                foreach ($faqs as $key => $faq) {?>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="flushHeading<?php echo $faq['id']; ?>">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                      <?php echo $faq['theq']; ?>
                    </button>
                  </h2>
                  <div id="flushCollapse<?php echo $faq['id']; ?>" class="accordion-collapse collapse" aria-labelledby="flushHeading<?php echo $faq['id']; ?>" data-bs-parent="#accFAQs">
                    <div class="accordion-body">
                      <div class="row">
                        <div class="col-lg-6">
                          <label for="theQ<?php echo $faq['id']; ?>" class="form-label">The Question</label>
                          <input type="text" class="form-control" aria-describedby="theQHelp" name="theQ<?php echo $faq['id']; ?>" placeholder="The Question" required>
                          <div id="theQHelp" class="form-text">Edit The Question</div>
                        </div>
                        <div class="col-lg-6">
                          <label for="mem_types<?php echo $faq['id']; ?>">User Type</label>
                          <select class="form-select" name="mem_types<?php echo $faq['id']; ?>">
                          <?php foreach ($mem_types as $key => $type) {
                          if($key == $faq['id_user_type']) {?>
                              <option value="<?php echo $key; ?>" selected><?php echo $type; ?></option>
                          <?php }
                          else { ?>
                              <option value="<?php echo $key; ?>"><?php echo $type; ?></option>
                          <?php }
                            }?>
                          </select>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-6">
                          <label class="form-label" for="theA">The Answer</label>
                          <textarea class="form-control" id="theA" name="theA" type="text" placeholder="The Answer" style="height: 10rem;" required><?php echo $faq->thea; ?></textarea>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-3 offset-lg-1">
                          <div class="d-grid">
                            <button class="btn btn-primary btn-lg" type="submit">Submit</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>
                <?php }
                }?>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                      Add a FAQ
                    </button>
                  </h2>
                  <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accFAQs">
                  <form action="<?php echo base_url() . '/index.php/edit-faq/'; ?>" method="post">
                    <div class="accordion-body">
                      <div class="row">
                        <div class="col-lg-6">
                          <label for="theQ" class="form-label">New Question</label>
                          <input type="text" class="form-control" aria-describedby="theQHelp" name="theQ" placeholder="The Question" required>
                        </div>
                        <div class="col-lg-6 pt-1">
                          <label for="mem_types">User Type</label>
                          <select class="form-select" name="mem_types">
                          <?php foreach ($mem_types as $key => $type) {
                          if($key == 1) {?>
                              <option value="<?php echo $key; ?>" selected><?php echo $type; ?></option>
                          <?php }
                          else { ?>
                              <option value="<?php echo $key; ?>"><?php echo $type; ?></option>
                          <?php }
                            }?>
                          </select>
                        </div>
                      </div>
                      <div class="row pt-3">
                        <div class="col-lg-10 offset-lg-1">
                          <label class="form-label" for="theA">The Answer</label>
                          <textarea class="form-control" id="theA" name="theA" type="text" placeholder="The Answer" style="height: 10rem;" required></textarea>
                        </div>
                      </div>
                      <div class="row pt-4">
                        <div class="col-lg-3 offset-lg-4">
                          <div class="d-grid">
                            <button class="btn btn-primary btn-lg" type="submit">Submit</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </div>
</section>
