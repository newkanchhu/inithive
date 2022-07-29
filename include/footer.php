<footer  class="footer">
    <div class="container py-5">
        <div class="row">
            <div class="col-md-4">
                <div class="footer__title">Useful Links</div>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About us</a></li>
                    <li><a href="#">Career at Inithive</a></li>
                    <li><a href="#">Message from CEO</a></li>
                    <li><a href="#">Contact us</a></li>
                </ul>
            </div>
            <div class="col-md-4">
                <div class="footer__title">Services</div>
                <ul>
                    <li><a href="#">Cloud Adoption and Migration Services</a></li>
                    <li><a href="#">Monitoring and Automation Services</a></li>
                    <li><a href="#">Tools, Software and bespoke applications</a></li>
                    <li><a href="#">Security</a></li>
                </ul>
            </div>
            <div class="col-md-4">
                <div class="footer__title">Get in Touch with us</div>
                <div class="contact-item">
                    Phone Number: <span class="d-block"><a href="tel:9810113771">9810113771</a></span>
                </div>

                <div class="contact-item mt-4">
                    Email Address: <span  class="d-block"><a href="mailto:sales@inithive.com">sales@inithive.com</a></span>
                </div>

                <div class="social mt-4">
                    <a title="Facebook" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a title="Linkedin" href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a title="Twitter" href="#"><i class="fab fa-twitter"></i></a>
                    <a title="Instagram" href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright bg-dark text-center p-4 text-white text-sm">
        copyright &copy; <?php echo date('Y'); ?> inithive. All rights reserved.
    </div>
</footer>
<script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.5.1/jquery.nicescroll.min.js"></script>
<script src="<?=url('js/app.js')?>"></script>

<!-----------for image loader-----------------> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/lozad.js/1.16.0/lozad.min.js"></script>
<script>
lozad('.lozad', {
    load: function(el) {
        el.src = el.dataset.src;
        el.onload = function() {
            el.classList.add('fadelazy')
        }
    }
}).observe();
</script>
<!------------testimonial carousel--------->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
</body>
</html>
