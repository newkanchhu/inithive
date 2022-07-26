<nav class="main-menu">
    <div class="container-fluid">
        <div class="row">
            <div class="col-6 col-md-4">
                Logo
            </div>
            <div class="col-6 col-md-8">
                <?php 
                $links = [
                    'Home' => '#',
                    'About' => '#',
                    'Company' => '#',
                    'Contact Us' => '#',
                ];
                ?>
                <ul class="d-flex">
                    <?php foreach ($links as $string => $url): ?>
                    <li><a href="<?=$url?>"><?=$string?></a></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
</nav>
