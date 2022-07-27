<nav>
    <div class="container top-menu">
        <div class="row ">
            <div class="col">
                <ul class="d-flex justify-content-end">
                    <li><a href="#"><em class="fa fa-search"></em></a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="#">Login <em class="fa fa-lock"></em></a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container main-menu">
        <div class="row">
            <div class="col-6 col-md-4">
                <a title="Inithive" href=""><img class="lozad img-fluid" data-src="images/logo.png"></a>
            </div>
            <div class="col-6 col-md-8">
                <?php 
                $links = [
                    'Multi-Cloud' => '#',
                    'App Platform' => '#',
                    'Cloud & Edge Infrastructure' => '#',
                    'Anywhere Workspace' => '#',
                    'Security & Networking' => '#',
                    'Partners' => '#',
                ];
                ?>
                <ul class="d-flex">
                    <?php foreach ($links as $string => $url): ?>
                    <li><a href="<?=$url?>"><?=$string?></a></li>
                    <?php endforeach; ?>
                    <li><a href="#" class="btn btn-primary">Get a Quote</a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>
