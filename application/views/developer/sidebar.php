<div class="span3">
    <div class="accordion" id="sidebar">
        <div class="accordion-group">
            <div class="accordion-heading">
                <a class="accordion-toggle sidebar-menu" data-toggle="collapse" data-parent="#sidebar" href="#dashboard">
                    <i class="icon-home"></i> Dashboard
                </a>
            </div>
            <div id="dashboard" class="accordion-body collapse <?php if ($this->uri->segment(2)=='' OR $this->uri->segment(2)=='home') echo 'in'; ?>">
                <div class="accordion-inner">
                    <ul class="nav nav-list">
                        <li <?php if ($this->uri->segment(2)=='home' OR $this->uri->segment(3)=='') echo 'class="active"'; ?>><a href="<?php echo base_url('developer/home'); ?>">Home</a></li>
                    </ul>
                </div>
            </div>
        </div>
        
          <div class="accordion-group">
            <div class="accordion-heading">
                <a class="accordion-toggle sidebar-menu" data-toggle="collapse" data-parent="#sidebar" href="#theme">
                    <i class="icon-heart"></i> Themes
                </a>
            </div>
            <div id="theme" class="accordion-body collapse <?php if ($this->uri->segment(2)=='theme') echo 'in'; ?>">
                <div class="accordion-inner">
                    <ul class="nav nav-list">
                        <li <?php if ($this->uri->segment(2)=='theme' AND $this->uri->segment(3)=='request') echo 'class="active"'; ?>><a href="<?php echo base_url('developer/theme/request'); ?>">View Requests</a></li>
                        <li <?php if ($this->uri->segment(2)=='theme' AND $this->uri->segment(3)=='view') echo 'class="active"'; ?>><a href="<?php echo base_url('developer/theme'); ?>">View Themes</a></li>
                        <li <?php if ($this->uri->segment(2)=='theme' AND $this->uri->segment(3)=='add') echo 'class="active"'; ?>><a href="<?php echo base_url('developer/theme/add'); ?>">Add Themes</a></li>
                        <!-- <li <?php if ($this->uri->segment(2)=='theme' AND $this->uri->segment(3)=='edit') echo 'class="active"'; ?>><a href="<?php echo base_url('developer/theme/edit'); ?>">Update Themes</a></li> -->
                    </ul>
                </div>
            </div>
        </div>

        <div class="accordion-group">
            <div class="accordion-heading">
                <a class="accordion-toggle sidebar-menu" data-toggle="collapse" data-parent="#sidebar" href="#customer">
                    <i class="icon-user"></i> Customer
                </a>
            </div>
            <div id="customer" class="accordion-body collapse <?php if ($this->uri->segment(2)=='customer') echo 'in'; ?>">
                <div class="accordion-inner">
                    <ul class="nav nav-list">
                        <li <?php if ($this->uri->segment(2)=='customer' AND $this->uri->segment(3)=='view') echo 'class="active"'; ?>><a href="<?php echo base_url('developer/customer/view'); ?>">View Customers</a></li>
                        <!-- <li <?php if ($this->uri->segment(2)=='customer' AND $this->uri->segment(3)=='add') echo 'class="active"'; ?>><a href="<?php echo base_url('developer/package/add'); ?>">Add User</a></li> -->
                        
                    </ul>
                </div>
            </div>
        </div>

       <div class="accordion-group">
            <div class="accordion-heading">
                <a class="accordion-toggle sidebar-menu" data-toggle="collapse" data-parent="#sidebar" href="#myprofile">
                    <i class="icon-user"></i> Profile
                </a>
            </div>
            <div id="myprofile" class="accordion-body collapse <?php if ($this->uri->segment(2)=='profile') echo 'in'; ?>">
                <div class="accordion-inner">
                    <ul class="nav nav-list">
                        <li <?php if ($this->uri->segment(2)=='profile' AND $this->uri->segment(3)=='') echo 'class="active"'; ?>><a href="<?php echo base_url('developer/profile'); ?>">My Profile</a></li>
                        
                    </ul>
                </div>
            </div>
        </div>
        
    </div>
</div>