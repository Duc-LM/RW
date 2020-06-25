  <?php require_once 'views/include/header.php'; ?>

  <div class="container-fluid menu">
      <div class="row">
          <div class="col-xl-12">
              <div class="container-menu m-5">
                  <h1 class="header">Menu</h1>
                  <hr class="hr-menu">
                  <div class="text-menu">
                      <div class="row">
                          <div class="col-10">Name</div>
                          <div class="col-2">Price (US$)</div>
                      </div>
                  </div>
                  <hr class="hr-menu">
                  <div class="text-menu">
                      <div class="row">
                          <?php if (($appetizerList === 0)) { ?>
                              <div class="col-10"> There are no items in this category </div>
                          <?php } else foreach ((array) $appetizerList as $appetizer) { ?>
                              <div class="col-10"><?php echo $appetizer['name'] ?></div>
                              <div class="col-2"><?php echo $appetizer['price'] ?></div>
                          <?php }; ?>
                      </div>
                  </div>
                  <hr class="hr-menu">
                  <div class="text-menu">
                      <div class="row">
                          <?php if (($mainDishList === 0)) { ?>
                              <div class="col-10"> There are no items in this category </div>
                          <?php } else  foreach ((array) $mainDishList as $mainDish) { ?>
                              <div class="col-10"><?php echo $mainDish['name'] ?></div>
                              <div class="col-2"><?php echo $mainDish['price'] ?></div>
                          <?php }; ?>
                      </div>
                  </div>
                  <hr class="hr-menu">
                  <div class="text-menu">
                      <div class="row">
                          <?php if (($dessertList === 0)) { ?>
                              <div class="col-10"> There are no items in this category </div>
                          <?php  } else foreach ((array) $dessertList as $dessert) { ?>
                              <div class="col-10"><?php echo $dessert['name'] ?></div>
                              <div class="col-2"><?php echo $dessert['price'] ?></div>
                          <?php }; ?>
                      </div>
                  </div>
                  <hr class="hr-menu">
                  <div class="text-menu">
                      <div class="row">
                          <?php if (($drinksList === 0)) { ?>
                              <div class="col-10"> There are no items in this category </div>
                          <?php  } else  foreach ((array) $drinksList as $drinks) { ?>
                              <div class="col-10"><?php echo $drinks['name'] ?></div>
                              <div class="col-2"><?php echo $drinks['price'] ?></div>
                          <?php } ?>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <?php require_once 'views/include/footer.php'; ?>