<nav class="navbar navbar-expand-lg navBackground position">
                    <div class="container-fluid">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <form class="d-flex flex-sm-column">
                                <input class="form-control me-2 navbar-brand" type ="search"
                                    placeholder="Find or start a conversation" aria-label="Search">
                            </form>

                            <div class="d-flex navMargin">
                                <i class="fa fa-group nav-icon-color"></i>
                                Friends
                            </div>

                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link navFontColor" href="<?php echo base_url().'home/advancesearch' ?>">Online</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link navFontColor" href="<?php echo base_url().'home/advancesearch2' ?>">All</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link navFontColor" href="<?php echo base_url().'home/chatting' ?>">Pending</a>
                                </li>
                                <li class="nav-item navFontColor">
                                    <a class="nav-link navFontColor" href="<?php echo base_url().'home/table' ?>">Blocked</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link profile-green" href="<?php echo base_url().'home/table2' ?>">AddFriend</a>
                                </li>
                            </ul>

                            <ul class="navbar-nav MarginL">
                                <li>
                                    <i class="nav-link fa fa-envelope" style="font-size:20px;color:#ffff"></i>
                                </li>
                                <li>
                                    <i class="nav-link fa fa-folder" style="font-size:20px;color:#ffff"></i>
                                </li>
                                <li>
                                    <i class="nav-link fa fa-question-circle" style="font-size:20px;color:#ffff"></i>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>