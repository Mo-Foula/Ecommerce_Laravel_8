
    <div class="container">

        <div class="wrap-breadcrumb">
            <ul>
                <li class="item-link"><a href="#" class="link">home</a></li>
                <li class="item-link"><span>Contact us</span></li>
            </ul>
        </div>
        <div class="row" style="margin: 20px; padding: 20px; border: 3px solid #ff2832; width: 95%;">
            <div class=" main-content-area">
                <div class="wrap-contacts ">
                    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                        <div class="contact-box contact-form">
                            <h2 class="box-title">Leave a Message</h2>
                            <form enctype="multipart/form-data" wire:submit.prevent="submitMessage">

                                <label for="name">Name<span>*</span></label>
                                <input type="text" wire:model="name" >

                                <label for="email">Email<span>*</span></label>
                                <input type="text" wire:model="email" >

                                <label for="phone">Number Phone</label>
                                <input type="text" wire:model="number" >

                                <label for="comment">Comment</label>
                                <textarea name="comment" wire:model="message"></textarea>

                                <input type="submit" name="ok" value="Submit" >

                            </form>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                        <div class="contact-box contact-info">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3411.5178250410054!2d29.955056914941935!3d31.234085468347935!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f5c5c295b0cc47%3A0xcdd6521ecb57534f!2sRMZ%20Academy!5e0!3m2!1sen!2seg!4v1632268371231!5m2!1sen!2seg"
                                 width="500" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                            <h2 class="box-title">Contact Detail</h2>
                            <div class="wrap-icon-box">

                                <div class="icon-box-item">
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                    <div class="right-info">
                                        <b>Email</b>
                                        <p>RMZStore@gmail.com</p>
                                    </div>
                                </div>

                                <div class="icon-box-item">
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                    <div class="right-info">
                                        <b>Phone</b>
                                        <p>0123-465-789-111</p>
                                    </div>
                                </div>

                                <div class="icon-box-item">
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                    <div class="right-info">
                                        <b>Mail Office</b>
                                        <p>10 Tikla Basha - Elwezara,<br/>Alexandria</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div><!--end main products area-->

        </div><!--end row-->

    </div><!--end container-->
