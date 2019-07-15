<?php 
/**
 * Template Name: Contact
 */

get_header();
?>

<!--google map start-->
<div class="contact-map">
    <div id="map-canvas" style="width: 100%; height: 400px">
        <iframe style="width: 100%; height: 400px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d247.8933742440588!2d106.8404856!3d-6.2249137999999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x2765242f52ac16f1!2sUX+INDONESIA+(PT.+UXINDO+Digital+Indonesia)!5e0!3m2!1sen!2sau!4v1525315914438" allowfullscreen="allowfullscreen" width="100%" frameborder="0"></iframe>
    </div>
</div>
<!--google map end-->
<!--container start-->
<div class="container">


    <div class="row">
        <div class="col-lg-5 col-sm-5 address">
            <h4>PT. UXINDO DIGITAL INDONESIA</h4>
            <p>
                Kota Kasablanka Tower A Level 38 <br/>
                Jl. Casablanca Raya Kav. 88,Jakarta 12960 <br/>
                INDONESIA. 
            </p>
            <hr>
            <h4>Customer Experience Insight Pty Ltd</h4>
            <p>
                108 St Georges Terrace, Level 25 <br/>
                Perth, Western Australia, 6000<br/>
                AUSTRALIA.
            </p>
            <hr>
            <h4>PT. UXINDO DIGITAL INDONESIA</h4>
            <p>
                Wisma Staco Level 6 <br/>
                Jl. Casablanca Raya Kav. 18 Jakarta 12960, <br/>
                INDONESIA.
            </p>
            <hr>
            <p>
                Call Center <br/>
                <span class="muted">Companies: +62 (0)8111 31 5544</span><br/>
                <span class="muted">Individuals: +62 (0)8111 09 5432 </span><br/>
                <span class="muted">General: +62 (0)21 2963 6762 </span><br/><br/>
                WhatsApp <br/>
                <span class="muted">+62 (0)8111 31 5544</span><br/>
            </p>
        </div>
        <div class="col-lg-7 col-sm-7 address">
            <h4>Send a Message</h4>
            <div class="contact-form">
                <form role="form">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" placeholder="" id="name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" placeholder="" id="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="text" id="phone" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="phone">Message</label>
                        <textarea placeholder="" rows="5" class="form-control"></textarea>
                    </div>
                    <button class="btn btn-danger" type="submit">Submit</button>
                </form>

            </div>
        </div>
    </div>

</div>
<!--container end-->

<?php get_footer(); ?>