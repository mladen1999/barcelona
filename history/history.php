<?php
include('../config/app.php');
include("../includes/header.php");
include("../includes/navbar.php");
?>
<script src="../assets/js/jQuery.js"></script>
<div class="py-3">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
              <?php include('../message.php'); ?>
              <div class="text-center">
                <h2 class="text-uppercase font-weight-bold">Istorija FC Barcelone</h2>
              </div>
              <div>
                <table class="table w-100">
                  <thead>
                    <tr>
                      <th scope="col"><a id="q" onclick="change2()" href="javascript:;" class="showBtn h4 text-decoration-none text-dark">Predsednici</a></th>
                      <th scope="col"><a id="w"onclick="change3()" href="javascript:;" class="showBtn h4 text-decoration-none text-dark">Legende</a></th>
                      <th scope="col"><a id="e" onclick="change4()" href="javascript:;" class="showBtn h4 text-decoration-none text-dark">Treneri</a></th>
                    </tr>
                  </thead>
                </table>
                  
                <div id="presidents" class="hideme align-self-center"></div>
                <div id="legends" class="hideme container"></div>
                <div id="coaches" class="hideme container"></div>



              </div>
            </div>
          </div>
      </div>
</div>
<?php
include("../includes/footer.php");
?>