
  <div class="container-fluid">
    <div class="row flex-row">
      <div class="col p-0">
      <?php 
      
      $this->load->view('frontfile/includes/Navbar/navbar-style-3');
      
      ?>
        <div class="col MarginSection m-0 searchbackground">
          <div class="d-flex">
            <div class="col-md-3">
              <img src="<?php echo base_url().'assets/frontfile/images/' ?>search.png">
            </div>
            <div class="col-md-9">
              <div class="d-flex justify-content-around">
                <div class="col">
                  <div class="overlay-content-2">
                    <form action="/action_page.php">
                      <input class="search_dropdown" type="text" placeholder="" name="search">
                    </form>
                  </div>
                </div>
                <div class="col">
                  <div class="overlay-content-2 mx-3">
                    <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                      <option selected>Files</option>
                      <option value="1"><i class="fa fa-gamepad mx-3" style="font-size:24px"></i>
                        Games</option>
                      <option value="2">Cards</option>
                      <option value="3">Movies</option>
                      <option value="3">Education</option>
                    </select>
                  </div>
                </div>
                <div class="col">
                  <div class="overlay-content-2">
                    <button type="btn" class="btn search_button">SEARCH</button>
                  </div>
                </div>
              </div>

            </div>
          </div>
          <div class="d-flex">
            <div class="col-md-8">
              <button type="button" class="btn advance-search">SWITCH TO NORMAL SEARCH</button>
            </div>
          </div>
          <div class="d-flex">
            <div class="col">
              <img class="googlebot" src="<?php echo base_url().'assets/frontfile/images/' ?>googlebot.png">
            </div>
          </div>
        </div>
      </div>
    </div>


    <!-- The Modal -->

    <!-- The Modal -->
    <div class="modal " id="myModal">
      <div class="modal-dialog modal-dialog-centered black-text ">
        <div class="modal-content border-5">

          <!-- Modal Header -->
          <!-- <div class="modal-header"> -->
          <!-- <h4 class="modal-title">Modal Heading</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button> -->
          <!-- </div> -->

          <!-- Modal body -->
          <div class="modal-body">
            <p class="center model-font">Create a channel</p>
            <p class="center model-font-23">Your channel is where you and your friends hangout. Make yours & start
              talking & sharing</p>

            <div class="main">

              <div class="input-group mt-3">
                <label class="" for="">
                  <img class="model-img" src="<?php echo base_url().'assets/frontfile/images/' ?>model/create-my-own.png">
                </label>


                <select class="form-select ModelSelect" aria-label="Filter select">
                  <option selected><i class="bi bi-funnel"></i> Create My Own</option>
                  <option value="1">All</option>
                  <option value="2">Active</option>
                  <option value="3">Inactive</option>
                </select>
              </div>

              <div class="input-group mt-5">
                <label class="" for="">
                  <img class="model-img" src="<?php echo base_url().'assets/frontfile/images/' ?>model/gamming.png">
                </label>

                <select class="form-select ModelSelect" aria-label="Filter select">
                  <option selected><i class="bi bi-funnel"></i> Create My Own</option>
                  <option value="1">All</option>
                  <option value="2">Active</option>
                  <option value="3">Inactive</option>
                </select>
              </div>

              <div class="input-group mt-3">
                <label class="" for="">
                  <img class="model-img" src="<?php echo base_url().'assets/frontfile/images/' ?>model/study-group.png">
                </label>

                <select class="form-select ModelSelect" aria-label="Filter select">
                  <option selected><i class="bi bi-funnel"></i> Create My Own</option>
                  <option value="1">All</option>
                  <option value="2">Active</option>
                  <option value="3">Inactive</option>
                </select>
              </div>

              <div class="input-group mt-3">
                <label class="" for="">
                  <img class="model-img" src="<?php echo base_url().'assets/frontfile/images/' ?>model/school-hub.png">
                </label>

                <select class="form-select ModelSelect" aria-label="Filter select">
                  <option selected><i class="bi bi-funnel"></i> Create My Own</option>
                  <option value="1">All</option>
                  <option value="2">Active</option>
                  <option value="3">Inactive</option>
                </select>
              </div>
            </div>
          </div>


          <div class="footer-model-backgound p-2">
            <p class="center bw">Already have an invite?</p>
            <a type="button" class="btn btn-primary my-2 model-btn-color">JOIN A CHANNEL</a>
          </div>

          <!-- Modal footer -->
          <!-- <div class="modal-footer"> -->
          <!-- <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button> -->
          <!-- </div> -->

        </div>
      </div>
    </div>
    <!--End The Modal -->


  </div>
  </div>


  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
</body>

</html>