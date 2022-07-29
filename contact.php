<?php include 'include/header.php'; ?>

<section class="contact-top-banner">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="contact-top-banner__content">
                    <div class="text-uppercase contact-top-banner__title">Contact <span>Us</span></div>
                    <p>Complete the form below to have a sales person address your business needs.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="contactpage-wrap">
    <div class="container py-5">
        <div class="row">
            <div class="col-md-8 order-2 order-md-1">
                <form class="contact__form" action="#" validate>
                    <p>Fill out the form below to get in touch.</p>

                    <div class="my-3">
                        <label for="contact_name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="contact_name" maxlength="200" value="" placeholder="John" required>
                        
                        <small class="invalid-feedback">Enter your full name</small>
                    </div>    
                    <div class="mb-3">
                        <label for="contact_email" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="contact_email" placeholder="name@example.com" required>
                        
                    </div>
                    <div class="mb-3">
                        <label for="contactphone" class="form-label">Phone Number</label>
                        <input type="text" class="form-control" id="contactphone" placeholder="9841XXXXXX" maxlength="15" required>
                        <small class="invalid-feedback">Enter your home/mobile number</small>
                    </div>
                    <div class="mb-3">
                        <label for="contact_message" class="form-label">Message</label>
                        <textarea class="form-control" id="contact_message" rows="5" maxlength="1000" required></textarea>
                        <small class="invalid-feedback">Enter your message</small>
                    </div>
                    <button class="btn btn-primary">Submit</button>
                </form>
            </div>
            <div class="col-md-4 order-1 order-md-2 mb-5 mb-md-0">
                <div class="contact__map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d56522.895501469604!2d85.30932149511717!3d27.696253643980086!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sinithive%20nepal!5e0!3m2!1sen!2snp!4v1659068617956!5m2!1sen!2snp" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'include/footer.php'; ?>
