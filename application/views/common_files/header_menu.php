  <!-- ***** Header Area Start ***** -->
  <!-- <header class="header-area header-sticky">
    <div class="container"> -->
      <div class="row header-area header-sticky ">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="index.html" class="logo">
              <img src="assets/images/logo.png" alt="" style="max-width: 112px;">
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li class="scroll-to-section"><a href="<?php echo base_url() ?>home" class="active">Home</a></li>
              <li class="scroll-to-section"><a href="#services">Services</a></li>
              <li class="scroll-to-section"><a href="#projects">Projects</a></li>
              <li class="has-sub">
                <a href="javascript:void(0)">Pages</a>
                <ul class="sub-menu">
                  <li><a href="<?php echo base_url() ?>about">About Us</a></li>
                  <li><a href="<?php echo base_url() ?>faqs">FAQs</a></li>
                </ul>
              </li>
              <li class="scroll-to-section"><a href="#infos">Infos</a></li>
              <li class="scroll-to-section"><a href="#contact">Contact</a></li>
              <?php if($this->session->userdata('candidateLogged')){ ?>
                <li class="scroll-to-section"><a href="<?php echo base_url() ?>logout">Logout</a></li>
              <?php }else{ ?>
                <li class="scroll-to-section"><a href="<?php echo base_url() ?>login">Login</a></li>
              <?php } ?>
            </ul>
            <a class='menu-trigger'>
              <span>Menu</span>
            </a>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    <!-- </div>
  </header> -->
  <!-- ***** Header Area End ***** -->