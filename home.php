<section class="header" id="home">
        <div class="container">
            <div class="intro-text">
                <h1>Welcome To <span>NxDen</span></h1>
                <?php //echo $quote; // variable from functions.php -> call_home($quote) ?>
                <?php quotes($conn); ?>
                <!--<a href="#feature" class="page-scroll waves-effect btn btn-primary">Read More</a>-->
            </div>
        </div>
</section>