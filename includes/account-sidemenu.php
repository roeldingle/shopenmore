<div class="col-md-3">
                    <!-- *** CUSTOMER MENU ***
 _________________________________________________________ -->
                    <div class="panel panel-default sidebar-menu">

                        <div class="panel-heading">
                            <h3 class="panel-title">My Account</h3>
                        </div>

                        <div class="panel-body">

                            <ul class="nav nav-pills nav-stacked">
                                <li class="profile">
                                    <a href="profile.php"><i class="fa fa-user"></i> <?php echo ucwords($_SESSION['userdata']['fname']); ?>'s Profile</a>
                                </li>
                                <li class="myitem">
                                    <a href="myitems.php"><i class="fa fa-shopping-cart"></i> My items</a>
                                </li>
                                <li class="message">
                                    <a href="messages.php" class="message-count-container"><i class="fa fa-comments"></i> Message 
                                    <?php if($count_unread_message > 0){ ?>
                                    <span class="badge pull-right"><?php echo $count_unread_message; ?></span>
                                    <?php } ?>
                                    </a>
                                </li>
                                <li>
                                    <a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a>
                                </li>
                            </ul>
                        </div>

                    </div>
                    <!-- /.col-md-3 -->

                    <!-- *** CUSTOMER MENU END *** -->
                </div>