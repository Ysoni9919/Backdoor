<script
  src="https://code.jquery.com/jquery-3.7.0.min.js"
  integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g="
  crossorigin="anonymous"></script>
<script>
 $(function () {
    var ChatDiv = $('.msg-body');
    var height = ChatDiv[0].scrollHeight;
    ChatDiv.scrollTop(height);
});
</script>
<style type="text/css">
  /* **********************************
Reset CSS
************************************** */

.msg-body {
    height: 66vh;
    overflow: auto;
}
.set-height-chat {
    min-height: 87vh;
    overflow: hidden;
}

/* HTML5 display-role reset for older browsers */


/********************************
 Typography Style
******************************** */



h1 {
  font-size: 36px;
}

h2 {
  font-size: 30px;
}

h3 {
  font-size: 26px;
}

h4 {
  font-size: 22px;
}

h5 {
  font-size: 18px;
}

h6 {
  font-size: 16px;
}

p {
  font-size: 15px;
}

a {
  text-decoration: none;
  font-size: 15px;
}

* {
  margin-bottom: 0;
}

/* *******************************
message-area
******************************** */

.message-area {
  height: 100vh;
  overflow: hidden;
  padding: 30px 0;
  background: #f5f5f5;
}

.chat-area {
  position: relative;
  width: 100%;
  background-color: #fff;
  border-radius: 0.3rem;
  height: 90vh;
  overflow: hidden;
  min-height: calc(100% - 1rem);
}

.chatlist {
  outline: 0;
  height: 100%;
  overflow: hidden;
  width: 300px;
  float: left;
  padding: 15px;
}

.chat-area .modal-content {
  border: none;
  border-radius: 0;
  outline: 0;
  height: 100%;
}

.chat-area .modal-dialog-scrollable {
  height: 100% !important;
}

.chatbox {
  width: auto;
  overflow: hidden;
  height: 100%;
  border-left: 1px solid #ccc;
}

.chatbox .modal-dialog,
.chatlist .modal-dialog {
  max-width: 100%;
  margin: 0;
}

.msg-search {
  display: flex;
  align-items: center;
  justify-content: space-between;
}

.chat-area .form-control {
  display: block;
  width: 80%;
  padding: 0.375rem 0.75rem;
  font-size: 14px;
  font-weight: 400;
  line-height: 1.5;
  color: #222;
  background-color: #fff;
  background-clip: padding-box;
  border: 1px solid #ccc;
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
  border-radius: 0.25rem;
  transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}

.chat-area .form-control:focus {
  outline: 0;
  box-shadow: inherit;
}

a.add img {
  height: 36px;
}

.chat-area .nav-tabs {
  border-bottom: 1px solid #dee2e6;
  align-items: center;
  justify-content: space-between;
  flex-wrap: inherit;
}

.chat-area .nav-tabs .nav-item {
  width: 100%;
}

.chat-area .nav-tabs .nav-link {
  width: 100%;
  color: #180660;
  font-size: 14px;
  font-weight: 500;
  line-height: 1.5;
  text-transform: capitalize;
  margin-top: 5px;
  margin-bottom: -1px;
  background: 0 0;
  border: 1px solid transparent;
  border-top-left-radius: 0.25rem;
  border-top-right-radius: 0.25rem;
}

.chat-area .nav-tabs .nav-item.show .nav-link,
.chat-area .nav-tabs .nav-link.active {
  color: #222;
  background-color: #fff;
  border-color: transparent transparent #000;
}

.chat-area .nav-tabs .nav-link:focus,
.chat-area .nav-tabs .nav-link:hover {
  border-color: transparent transparent #000;
  isolation: isolate;
}

.chat-list h3 {
  color: #222;
  font-size: 16px;
  font-weight: 500;
  line-height: 1.5;
  text-transform: capitalize;
  margin-bottom: 0;
}

.chat-list p {
  color: #343434;
  font-size: 14px;
  font-weight: 400;
  line-height: 1.5;
  text-transform: capitalize;
  margin-bottom: 0;
}

.chat-list a.d-flex {
  margin-bottom: 15px;
  position: relative;
  text-decoration: none;
}

.chat-list .active {
  display: block;
  content: "";
  clear: both;
  position: absolute;
  bottom: 3px;
  left: 34px;
  height: 12px;
  width: 12px;
  background: #00db75;
  border-radius: 50%;
  border: 2px solid #fff;
}

.msg-head h3 {
  color: #222;
  font-size: 18px;
  font-weight: 600;
  line-height: 1.5;
  margin-bottom: 0;
}

.msg-head p {
  color: #343434;
  font-size: 14px;
  font-weight: 400;
  line-height: 1.5;
  text-transform: capitalize;
  margin-bottom: 0;
}

.msg-head {
  padding: 15px;
  border-bottom: 1px solid #ccc;
}

.moreoption {
  display: flex;
  align-items: center;
  justify-content: end;
}

.moreoption .navbar {
  padding: 0;
}

.moreoption li .nav-link {
  color: #222;
  font-size: 16px;
}

.moreoption .dropdown-toggle::after {
  display: none;
}

.moreoption .dropdown-menu[data-bs-popper] {
  top: 100%;
  left: auto;
  right: 0;
  margin-top: 0.125rem;
}

.msg-body ul {
  overflow: hidden;
}

.msg-body ul li {
  list-style: none;
  margin: 15px 0;
}

.msg-body ul li.sender {
  display: block;
  width: 100%;
  position: relative;
}

.msg-body ul li.sender:before {
  display: block;
  clear: both;
  content: "";
  position: absolute;
  top: -6px;
  left: -7px;
  width: 0;
  height: 0;
  border-style: solid;
  border-width: 0 12px 15px 12px;
  border-color: transparent transparent #f5f5f5 transparent;
  -webkit-transform: rotate(-37deg);
  -ms-transform: rotate(-37deg);
  transform: rotate(-37deg);
}

.msg-body ul li.sender p {
  color: #000;
  font-size: 11px;
  line-height: 1.5;
  font-weight: 400;
  padding: 15px;
  background: #f5f5f5;
  display: inline-block;
  border-bottom-left-radius: 10px;
  border-top-right-radius: 10px;
  border-bottom-right-radius: 10px;
  margin-bottom: 0;
}

.msg-body ul li.sender p b {
  display: block;
  color: #180660;
  font-size: 14px;
  line-height: 1.5;
  font-weight: 500;
}

.msg-body ul li.repaly {
  display: block;
  width: 100%;
  text-align: right;
  position: relative;
}

.msg-body ul li.repaly:before {
  display: block;
  clear: both;
  content: "";
  position: absolute;
  bottom: 15px;
  right: -7px;
  width: 0;
  height: 0;
  border-style: solid;
  border-width: 0 12px 15px 12px;
  border-color: transparent transparent #4b7bec transparent;
  -webkit-transform: rotate(37deg);
  -ms-transform: rotate(37deg);
  transform: rotate(37deg);
}
::-webkit-scrollbar {
  width: 5px;
}

/* Track */
::-webkit-scrollbar-track {
  background: #f1f1f1; 
}
 
/* Handle */
::-webkit-scrollbar-thumb {
  background: #888; 
}

.msg-body ul li.repaly p {
  color: #fff;
  font-size: 11px;
  line-height: 1.5;
  font-weight: 400;
  padding: 15px;
  background: #4b7bec;
  display: inline-block;
  border-top-left-radius: 10px;
  border-top-right-radius: 10px;
  border-bottom-left-radius: 10px;
  margin-bottom: 0;
}

.msg-body ul li.repaly p b {
  display: block;
  color: #061061;
  font-size: 14px;
  line-height: 1.5;
  font-weight: 500;
}

.msg-body ul li.repaly:after {
  display: block;
  content: "";
  clear: both;
}

.time {
  display: block;
  color: #000;
  font-size: 12px;
  line-height: 1.5;
  font-weight: 400;
}

li.repaly .time {
  margin-right: 20px;
}

.divider {
  position: relative;
  z-index: 1;
  text-align: center;
}

.msg-body h6 {
  text-align: center;
  font-weight: normal;
  font-size: 14px;
  line-height: 1.5;
  color: #222;
  background: #fff;
  display: inline-block;
  padding: 0 5px;
  margin-bottom: 0;
}

.divider:after {
  display: block;
  content: "";
  clear: both;
  position: absolute;
  top: 12px;
  left: 0;
  border-top: 1px solid #ebebeb;
  width: 100%;
  height: 100%;
  z-index: -1;
}

.send-box {
  
  border-top: 1px solid #ccc;
}

.send-box form {
  display: flex;
  align-items: center;
  justify-content: space-between;
  margin-bottom: 15px;
}

.send-box .form-control {
  display: block;
  width: 85%;
  padding: 0.375rem 0.75rem;
  font-size: 14px;
  font-weight: 400;
  line-height: 1.5;
  color: #222;
  background-color: #fff;
  background-clip: padding-box;
  border: 1px solid #ccc;
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
  border-radius: 0.25rem;
  transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}

.send-box button {
  border: none;
  background: #3867d6;
  padding: 0.375rem 5px;
  color: #fff;
  border-radius: 0.25rem;
  font-size: 14px;
  font-weight: 400;
  width: 24%;
  margin-left: 1%;
}

.send-box button i {
  margin-right: 5px;
}

.send-btns .button-wrapper {
  position: relative;
  width: 128px;
  height: auto;
  text-align: left;
  margin: 0 auto;
  display: block;
  background: #f6f7fa;
  border-radius: 3px;
  padding: 6px 15px;
  float: left;
  margin-right: 5px;
  margin-bottom: 5px;
  overflow: hidden;
}

.send-btns .button-wrapper span.label {
  position: relative;
  z-index: 1;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  width: 100%;
  cursor: pointer;
  color: #343945;
  font-weight: 400;
  text-transform: capitalize;
  font-size: 13px;
}

#upload {
  display: inline-block;
  position: absolute;
  z-index: 1;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  opacity: 0;
  cursor: pointer;
}

.send-btns .attach .form-control {
  display: inline-block;
  width: 120px;
  height: auto;
  padding: 5px 8px;
  font-size: 13px;
  font-weight: 400;
  line-height: 1.5;
  color: #343945;
  background-color: #f6f7fa;
  background-clip: padding-box;
  border: 1px solid #f6f7fa;
  border-radius: 3px;
  margin-bottom: 5px;
}

.send-btns .button-wrapper span.label img {
  margin-right: 5px;
}

.button-wrapper {
  position: relative;
  width: 100px;
  height: 100px;
  text-align: center;
  margin: 0 auto;
}

button:focus {
  outline: 0;
}

.add-apoint {
  display: inline-block;
  margin-left: 5px;
}

.add-apoint a {
  text-decoration: none;
  background: #f6f7fa;
  border-radius: 8px;
  padding: 8px 8px;
  font-size: 13px;
  font-weight: 400;
  line-height: 1.2;
  color: #343945;
}

.add-apoint a svg {
  margin-right: 5px;
}

.chat-icon {
  display: none;
}

.closess i {
  display: none;
}


@media (max-width: 767px) {
  .chat-icon {
    display: block;
    margin-right: 5px;
  }
  .chatlist {
    width: 100%;
  }
  .chatbox {
    width: 100%;
    position: absolute;
    left: 1000px;
    right: 0;
    background: #fff;
    transition: all 0.5s ease;
    border-left: none;
  }
  .showbox {
    left: 0 !important;
    transition: all 0.5s ease;
  }
  .msg-head h3 {
    font-size: 14px;
  }
  .msg-head p {
    font-size: 12px;
  }
  .msg-head .flex-shrink-0 img {
    height: 30px;
  }
  .send-box button {
    width: 28%;
  }
  .send-box .form-control {
    width: 70%;
  }
  .chat-list h3 {
    font-size: 14px;
  }
  .chat-list p {
    font-size: 12px;
  }
  .msg-body ul li.sender p {
    font-size: 13px;
    padding: 8px;
    border-bottom-left-radius: 6px;
    border-top-right-radius: 6px;
    border-bottom-right-radius: 6px;
  }
  .msg-body ul li.repaly p {
    font-size: 13px;
    padding: 8px;
    border-top-left-radius: 6px;
    border-top-right-radius: 6px;
    border-bottom-left-radius: 6px;
  }
}


</style>


<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

<div class="container-fluid">
        <div class="row">
            <?php 
            $this->load->view('frontfile/includes/Sidebar/sidebar-style-1');
            
 ?>
            <div class="col">
                <?php 
                
                $this->load->view('frontfile/includes/Navbar/navbar');
                 ?>
                <div class="row sidebar-sec-back-2 set-width-height ">
                    <div class="col-md-3 fixed">
                        <div class="header d-flex bgdark p-3 fw mt-5">
                            <i class="fa fa-group navMargin" style="color: #FDFDFD;"></i>
                            Friends
                        </div>

                        <p class="profile-text-color profile-margin-top-bottom">DIRECT MESSAGES<a href="#"><i
                                    class="fa fa-plus" style="color:#ffff; margin-left: 20px;"></i></a>
                        </p>

                        <div class="col-md-12 scroll-tab" style="height: 100vh;">
                            <div class="row">
                                <ul class="list-group list-group-light list-group-width">
                                <?php
                            foreach ($friends_list as $key => $value) {
                                # code...
                           
                            ?>
                            
                            <a href="<?php echo base_url().'home/chatting'; ?>"> <li class="list-group-item d-flex p-0 grayLight justify-content-between align-items-center">
                                    <div class="d-flex align-items-center">
                                        <img src="<?php echo base_url().$value['avatar']; ?>" alt="" style="width: 40px; height: 40px" class="rounded-circle mx-2 my-2" />
                                        <div class="ms-3">
                                            <p class="fw-bold mb-1 "><?php echo $value['name']; ?></p>
                                        </div>
                                    </div>

                                </li></a>
                                <?php
                            }
                            ?>
                                  
                                    
                                   
                                
                                  
                                </ul>
                            </div>
                        </div>

                       
                    <div class="row child footer d-flex footer-margin-top footerColor">
                        <img src="<?php echo base_url().$orignal_user[0]->avatar; ?>" alt="" style="width: 45px; height: 45px" class="rounded-circle mx-3">
                        <div class="ms-3">
                            <p class="fw-bold mb-1"><?php echo $orignal_user[0]->name; ?></p>
                            <p class="text-muted mb-0">#<?php echo $orignal_user[0]->username; ?></p>
                        </div>

                        <div class="icon margin-left-right">
                            <i class="fa fa-microphone mx-1" style="font-size:20px"></i>
                            <a href="<?php echo base_url() . 'home/community'; ?>"><i class="fa fa-headphones mx-1" style="font-size:20px"></i></a>
                            <a href="<?php echo base_url() . 'home/setting'; ?>"><i class="fa fa-gear" style="font-size:20px"></i></a>
                        </div>
                    </div>

                    </div>
                    <div class="col-md-9 chat_image">
                        <div class="row">
                            <!-- <div class="col-md-9"> -->
                                <div class="col-md-8 set-height border border-dark margin-top parent">
                                    <p class="fw mt-4"> ADD FRIENDS</p>
                                    <p class="profile-text-color">You can add friends with their Backdoor Tag. It’s CaSe SeNsItIvE!
                                    </p>
                                    <div class="input-group">
                                        <input type="search" class="form-control rounded" placeholder=" Enter a username #X0X0"
                                            aria-label="Search" aria-describedby="search-addon" />
                                        <button type="button" class="btn btn-primary">Send Friend Request</button>
                                    </div>
                                    <div class="img" >
                                        <!-- <img class="logo-center" alt="No Image" src="<?php echo base_url().'assets/frontfile/images/' ?>Jon_arbuckle 1.pn" class="w-100"> -->
                                        <!-- <p class="white-text center">Yohan is waiting for friends. You don’t have to, though!</p> -->


                                        <div class="msg-body" id="msg-body120">
                    <ul >
                      <li class="sender">
                        <p> Hey, Are you there? </p>
                        <span class="time">10:06 am</span>
                      </li>
                      <li class="sender">
                        <p> Hey, Are you there? </p>
                        <span class="time">10:16 am</span>
                      </li>
                      <li class="repaly">
                        <p>yes!</p>
                        <span class="time">10:20 am</span>
                      </li>
                      <li class="sender">
                        <p> Hey, Are you there? </p>
                        <span class="time">10:26 am</span>
                      </li>
                      <li class="sender">
                      <div class="d-flex flex-row justify-content-start mb-4">
                        
                          <div class="ms-3" style="border-radius: 15px;">
                            <div class="bg-image">
                              <img src="<?php echo base_url(); ?>assets/images/screenshot1.png"
                                style="border-radius: 15px;" alt="video">
                              <a href="#!">
                                <div class="mask"></div>
                              </a>
                            </div>
                          </div>
                      </div>
                      </li>
                      <li class="sender">
                        <p> Hey, Are you there? </p>
                        <span class="time">10:32 am</span>
                      </li>
                      <li class="repaly">
                        <p>How are you?</p>
                        <span class="time">10:35 am</span>
                      </li>
                      <li>
                        <div class="divider">
                          <h6>Today</h6>
                        </div>
                      </li>
                   
                    
                      <li class="d-flex flex-row justify-content-start">
                      



                      <div id="FileUpload">
  <div class="wrapper">
    
    <div class="uploaded uploaded--one" style="width: max-content;">
      <i class="far fa-file-pdf" aria-hidden="true"></i>
      <div class="file">
        <div class="file__name">
          <span style="
    line-height: 40px;
    margin-bottom: 2px;
">lorem_ipsum.pdf</span>
          <i class="fa fa-arrow-circle-down" style="    left: 0px;
    margin-left: 5%;
    padding-right:20px;
    font-size: xx-large;
    margin-top: 3px;" aria-hidden="true"></i>
        </div>
        <div class="progress" style="  display: -ms-flexbox;
    display: flex;
    height: max-content;
    overflow: hidden;
    width:max-content;
    font-size: 15px;
    background-color: #e9ecef;
    border-radius: 0.25rem;
    color: blue;">
          <span style="color:black">Size:12Mb</span>
        </div>
      </div>
    </div>
    
    
  </div>
</div>















                      </li>
                      <li class="d-flex flex-row justify-content-center">
                        


                      <div id="FileUpload">
  <div class="wrapper">
    
    <div class="uploaded uploaded--one" style="width: max-content;">
      <i class="far fa-file-pdf" aria-hidden="true"></i>
      <div class="file">
        <div class="file__name">
          <span style="
    line-height: 40px;
    margin-bottom: 2px;
">lorem_ipsum.pdf</span>
          <i class="fa fa-arrow-circle-down" style="    left: 0px;
    margin-left: 5%;
    padding-right:20px;
    font-size: xx-large;
    margin-top: 3px;" aria-hidden="true"></i>
        </div>
        <div class="progress" style="  display: -ms-flexbox;
    display: flex;
    height: max-content;
    overflow: hidden;
    width:max-content;
    font-size: 15px;
    background-color: #e9ecef;
    border-radius: 0.25rem;
    color: blue;">
          <span style="color:black">Size:12Mb</span>
        </div>
      </div>
    </div>
    
    
  </div>
</div>



                        <!-- <span class="time">junt now</span> -->
                      </li>
                      <li class="repaly">
                        <p>reply me</p>
                        <!-- <span class="time">junt now</span> -->
                      </li>

                    </ul>
                  </div>

                                    </div>
                                    <div class="row align-items-end chat_screen child">
                                        <div class="col-md-3 ">
                                            <i class="fa fa-plus mx-2 my-2" style="font-size:20px;"></i>
                                            <i class="fa fa-cloud-upload mx-2 my-2" style="font-size:20px;"></i>
                                            <i class='fa fa-image mx-2 my-2' style='font-size:20px;'></i>
                                        </div>
                                        <div class="col-md-9">
                                            <input class="form-control chat_massage" type="text" placeholder="Type Massage..." >
                                            <button class="submit"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
                                        </div>
                                    </div>
                                </div>
                            <!-- </div> -->
                            <div class="col-md-4 set-height margin-top">
                                    <p class="mt-3">Active Now</p>
                                    <p class="profile-font-18">It’s quite for now...</p>
                                    <p class="profile-font-10">When friends start an activity - we’ll show it here !</p>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

          <!-- The Modal -->
            <div class="modal " id="myModal" >
              <div class="modal-dialog modal-dialog-centered black-text ">
                <div class="modal-content border-5">

                  <!-- Modal Header -->
                  <!-- <div class="modal-header"> -->
                    <!-- <h4 class="modal-title">Modal Heading</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button> -->
                  <!-- </div> -->

                  <!-- Modal body -->
                  <div class="modal-body">
                    <p class="center model-font mt-4">Create a channel</p>
                    <p class="center model-font-23">Your channel is where you and your friends   hangout. Make yours & start talking & sharing</p>

                  <div class="main">

                    <div class="input-group mt-3">
                      <label class="" for="">
                          <img class="model-img" src="<?php echo base_url().'assets/frontfile/images/' ?>model/create-my-own.png">
                      </label>
                      

                      <!-- <select class="form-select ModelSelect" aria-label="Filter select">
                        <option selected><i class="bi bi-funnel"></i> Create My Own</option>
                        <option value="1">All</option>
                        <option value="2">Active</option>
                        <option value="3">Inactive</option>
                      </select> -->
                      <input class="form-select ModelSelect" placeholder="Create My Own" type="text">
                      <a href="#"><span class="greater-than-symbol">&#62;</span></a>
                    </div>

                    <div class="input-group mt-5">
                      <label class="" for="">
                          <img class="model-img" src="<?php echo base_url().'assets/frontfile/images/' ?>model/gamming.png">
                      </label>
                      
                      <!-- <select class="form-select ModelSelect" aria-label="Filter select">
                        <option selected><i class="bi bi-funnel"></i> Create My Own</option>
                        <option value="1">All</option>
                        <option value="2">Active</option>
                        <option value="3">Inactive</option>
                      </select> -->
                      <input class="form-select ModelSelect" placeholder="Create My Own" type="text">
                      <a href="#"><span class="greater-than-symbol">&#62;</span></a>
                    </div>

                    <div class="input-group mt-3">
                      <label class="" for="">
                          <img class="model-img" src="<?php echo base_url().'assets/frontfile/images/' ?>model/study-group.png">
                      </label>
                      
                      <!-- <select class="form-select ModelSelect" aria-label="Filter select">
                        <option selected><i class="bi bi-funnel"></i> Create My Own</option>
                        <option value="1">All</option>
                        <option value="2">Active</option>
                        <option value="3">Inactive</option>
                      </select> -->
                      <input class="form-select ModelSelect" placeholder="Create My Own" type="text">
                      <a href="#"><span class="greater-than-symbol">&#62;</span></a>
                    </div>

                    <div class="input-group mt-3">
                      <label class="" for="">
                          <img class="model-img" src="<?php echo base_url().'assets/frontfile/images/' ?>model/school-hub.png">
                      </label>
                      
                      <!-- <select class="form-select ModelSelect" aria-label="Filter select">
                        <option selected><i class="bi bi-funnel"></i> Create My Own</option>
                        <option value="1">All</option>
                        <option value="2">Active</option>
                        <option value="3">Inactive</option>
                      </select> -->
                      <input class="form-select ModelSelect" placeholder="Create My Own" type="text">
                      <a href="#"><span class="greater-than-symbol">&#62;</span></a>
                    </div>
                  </div>
                  </div>
                  <div class="footer-model-backgound p-2">
                    <p class="center bw">Already have an invite?</p>
                    <a type="button" class="btn btn-primary my-2 model-btn-color">JOIN A CHANNEL</a>
                  </div>
                </div>
              </div>
            </div>
          <!--End The Modal -->

          <!--Model Second-->
            <div class="modal " id="myModal-2" >
              <div class="modal-dialog modal-dialog-centered black-text ">
                <div class="modal-content border-5">

                  <!-- Modal Header -->
                  <!-- <div class="modal-header"> -->
                    <!-- <h4 class="modal-title">Modal Heading</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button> -->
                  <!-- </div> -->

                  <!-- Modal body -->
                  <div class="modal-body">
                    <p class="center model-font">Tell us more about your channel</p>
                    <p class="center model-font-23">In order to help you with your setup, is your new channel for just a few friends or a larger community?</p>

                <div class="main">
                    <div class="input-group mt-3">
                      <label class="" for="">
                          <img class="model-img" src="<?php echo base_url().'assets/frontfile/images/' ?>model/friends.png">
                      </label>
                      
                      <!-- <select class="form-select ModelSelect" aria-label="Filter select">
                        <option selected><i class="bi bi-funnel"></i> Create My Own</option>
                        <option value="1">All</option>
                        <option value="2">Active</option>
                        <option value="3">Inactive</option>
                      </select> -->
                      <input class="form-select ModelSelect" placeholder="Create My Own" type="text">
                      <a href="#"><span class="greater-than-symbol">&#62;</span></a>
                    </div>

                    <div class="input-group mt-4">
                      <label class="" for="">
                          <img class="model-img" src="<?php echo base_url().'assets/frontfile/images/' ?>model/community.png">
                      </label>
                      
                      <!-- <select class="form-select ModelSelect" aria-label="Filter select">
                        <option selected><i class="bi bi-funnel"></i> Create My Own</option>
                        <option value="1">All</option>
                        <option value="2">Active</option>
                        <option value="3">Inactive</option>
                      </select> -->
                      <input class="form-select ModelSelect" placeholder="Create My Own" type="text">
                      <a href="#"><span class="greater-than-symbol">&#62;</span></a>
                    </div>
                </div>

                  </div>
                  <p class="center bw">Not sure? you can <a class="blue" href="#">skip this question</a> for now.</p>

                  <div class="footer-model-backgound p-3">
                <p class="fw">&lt; <a class="white-black" href="home.html">Back</a></p>

                  </div>

                  <!-- Modal footer -->
                  <!-- <div class="modal-footer"> -->
                    <!-- <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button> -->
                  <!-- </div> -->

                </div>
              </div>
            </div>
          <!--Model End-->

          <!--Model Third-->
            <div class="modal " id="myModal-3" >
              <div class="modal-dialog modal-dialog-centered black-text ">
                <div class="modal-content border-5">

                  <!-- Modal Header -->
                  <!-- <div class="modal-header"> -->
                    <!-- <h4 class="modal-title">Modal Heading</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button> -->
                  <!-- </div> -->

                  <!-- Modal body -->
                  <div class="modal-body">
                    <p class="center model-font">Customise your channel</p>
                    <p class="center model-font-23 text-gray">Give your new channel a personality with a name and an icon.  You can always change it later.</p>

                    <div class="main">
                        <div class="input-group mt-2">
                              <img class="eclipse-img" src="<?php echo base_url().'assets/frontfile/images/' ?>model/Ellipse 31.png">
                        </div>
                    <div class="form-group">
                    <label class="black-text fw" for="exampleInputEmail1">Channel Name</label>
                    <input type="email" class="form-control" id="XOXO" aria-describedby="emailHelp" placeholder="ani XOXO’s channel">
                    <p class="black-text font-15">By creating a channel you agree to backdoor’s Community Guidelines.</p>
                  </div>


                    </div>
                  </div>

                  <div class="footer-model-backgound p-3">
                  <p class="float-left fw">&lt; <a class="white-black" href="home.html">Back</a></p>
                  <button type="button" class="btn btn-danger float-right" data-bs-dismiss="modal">Clear</button>

                  </div>

                  <!-- Modal footer -->
                  <!-- <div class="modal-footer"> -->
                    <!-- <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button> -->
                  <!-- </div> -->

                </div>
              </div>
            </div>

          <!--Model Third End-->
</div>
    </div>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>


/* === Wrapper Styles === */

.wrapper {
  box-shadow: 0 19px 38px rgba(0,0,0,0.30), 0 15px 12px rgba(0,0,0,0.22);
    border-radius: 10px;
    background-color: white;
    width: 0px;
}

/* === Upload Box === */
.upload {
 
  height: 85px;
  border: 8px dashed #e6f5e9;
  display: flex;
  justify-content: center;
  align-items: center;
  border-radius: 5px;
}
.upload p {
  margin-top: 12px;
  line-height: 0;
  font-size: 22px;
  color: #0c3214;
  letter-spacing: 1.5px;
}
.upload__button {
  background-color: #e6f5e9;
  border-radius: 10px;
  padding: 0px 8px 0px 10px;
}
.upload__button:hover {
  cursor: pointer;
  opacity: 0.8;
}

/* === Uploaded Files === */
.uploaded {
  width: 100%;
    padding: 10px 0px;
    background-color: #e6f5e9;
    border-radius: 10px;
    display: flex;
    flex-direction: row;
    justify-content: flex-start;
    align-items: center;
}
.file {
  display: flex;
  flex-direction: column;
}
.file__name {
  display: flex;
  flex-direction: row;
  justify-content: space-between;
  align-items: baseline;
  width: max-content;
  line-height: 0;
  color: black;
  font-weight: 900;
  font-size: 18px;
  letter-spacing: 1.5px;
}
.fa-times:hover {
  cursor: pointer;
  opacity: 0.8;
}
.fa-file-pdf {
  padding: 15px;
  font-size: 40px;
  color: #0c3214;
}
</style>

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
        <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

</body>

</html>