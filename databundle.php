<?php
require_once 'header.php';
use App\classes\Helper;
use App\classes\Site;

$secretApi = Site::useSecretApi();
$api = mysqli_fetch_assoc($secretApi);
?>
<div>
    <div class="container">
            <marquee behavior="scroll" direction="left" class="marquee">
            <h5 class="marquee-text"><span class="text-">IMPORTANT NOTICE :</span>

                Our data request service does not support the following:

                Merchant SIM,
                EVD SIM,
                Turbonet SIM,
                Broadband SIM,
                Blacklisted SIM,
                Please note that any data transferred to the above SIMs will be lost and cannot be reversed.
            </h5>
        </marquee>
        <div class="row">

            <!-- Image Column (hidden on small screens) -->
            <div class="col-lg-6 d-none d-lg-block">
                <img src="./assets/images/africa.png" class="img-fluid" alt="Image">
            </div>
            <!-- Form Column -->
            <div class="col-lg-6">
                <div> 
    <h4 class="announcement-header">IMPORTANT NOTICE</h4>
    <p class="important-notice">
       <!--Dear valued customers, we are happy to inform you that we are starting work tommorrow 11th October. -->
<!--Thank you-->

<!--Good day, valued customers. Unfortunately, due to technical issues with our network, we have closed for the day (3rd August) to prevent further delays. Please be assured that all pending orders will be served. Thank you for your understanding-->

<!--If you encounter any issues after placing an order, please report them to +233 0539821538 using the format below. Be aware that there may be delays of several hours for orders to be processed-->
<!--<ul>-->
<!--    <li>Order ID:XXXX</li>-->
<!--<li>Beneficiary number: +230000000</li>-->
<!--<li>Status on website: Delivered/Pending</li>-->
<!--<li>Issue: </li>-->
<!--<li>Date:</li>-->
 <a href="https://chat.whatsapp.com/Ld4txUW3TO645vCh3wTPoI" target="_blank">Click here to join our whatsap group for regular updates about our services</a>

<!--We are currently out of Stock, you may click on the link  <a href="https://docs.google.com/forms/d/e/1FAIpQLScQWip8yx1kd1-qtvL2EqgZj_zW5tg0i-sNHDPBA_2YcgWXKg/viewform?us=sf_link">Refund Form</a> to request for refund if you have pending orders. Kindly ensure to enter the correct details. -->

 
</div>
 <h5 class="important-notice"> Pay to<span
                        class="fs-2 fw-bold notice mx-1  p-1 rounded-sm text-white mx-1"> 
                        0201860015 (Micahel Cudjoe)  Andoh Francis (0539821538) </span> immediately after filling out the form. Use the Order ID you were provided when
                                                <!--0201860015 (Micahel Cudjoe)  Andoh Francis (0558119187) </span> immediately after filling out the form. Use the Order ID you were provided when-->

                    you submitted the order as reference in your momo transaction</h5>
                 

                <form class="" action="" method="POST" name="form">
                    <div class="mb-2">
                        <label for="momo_name" class="form-label">MOMO Name</label>
                        <input type="text" data-toggle="tooltip"
                            title="Input the name on the momo number used for payment" maxlength="30"
                            placeholder="Clement Asiedu" id="momo_name" name="momo_name"
                            class="form-control custom-input" pattern="[a-zA-Z\s]+" title="Please enter only alphabets"
                            required >
                    </div>

                    <!-- Hidden input field for reference -->
                    <input type="hidden" id="reference" name="reference">
                    <div>

                    </div>
                    <!-- Hidden input field for megabytes -->
                    <input type="hidden" id="megabytes" name="megabytes">
                    <!--Received-->
                     <input type="hidden" id="received" value="Received" name="received">

                    <div class="mb-2">
                        <label for="momo_number" class="form-label">Beneficiary Number:</label>
                        <input type="text" maxlength="10" placeholder="eg.0254 000 000" id="momo_number"
                            name="momo_number" class="form-control custom-input"
                            pattern="^(054|055|059|053|024|025|026)\d{7}$"
                            title="We do not serve data to this network provider, contact network operator" required >
                    </div>

                    <div class="row">
                        <div class="col-sm-6 col-md-4">
                            <div class="mb-2">
                                <label for="package" class="form-label ">Choose Package:</label>
                                <select id="package" name="package" class="form-select form-control custom-input" placeholder=".....GB"
                                    required>
                                    <option value="">Select Package</option>
                                    <!-- Dynamically generate options using JavaScript -->
                                </select>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4 ">
                            <div class="mb-0">
                                <label for="package_mb" class="form-label">Package in MB:</label>
                                <input type="text" id="package_mb" name="package_mb" class="form-control custom-input"
                                    readonly>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <div class="mb-0">
                                <label for="amount_paid" class="form-label">Amount to be Paid (GHC):</label>
                                <input type="text" id="amount_paid" name="amount_paid" class="form-control custom-input"
                                    readonly>

                            </div>
                        </div>
                    </div>

                    <button type="submit" class="custom-button mt-4 rounded-3 " >Submit</button>
                </form>
            </div>
        </div>
        <hr>
        <!-- New Section with Bootstrap Cards -->
        <section class="our-packages-section">
            <div class="container ">
                <div class="row ">
                    <div class="col-md-12 m-auto">
                        <h2 class="section-header">Our <b class="text-dark">Packages</b></h2>
                        <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="2">
                            <!-- Carousel indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                <li data-target="#myCarousel" data-slide-to="1"></li>
                                <li data-target="#myCarousel" data-slide-to="2"></li>
                                <li data-target="#myCarousel" data-slide-to="3"></li>
                                <li data-target="#myCarousel" data-slide-to="4"></li>

                            </ol>
                            <!-- Wrapper for carousel items -->
                            <div class="carousel-inner">
                                <div class="carousel-item ">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <div class="thumb-wrapper">

                                                <div class="thumb-content">
                                                    <div class="gigcard">
                                                        <div class="package-size"><span class="size">1</span><span
                                                                class="subscript">gig</span></div>
                                                        <div class="amount">GHC 5.5</div>
                                                    </div>
                                                    <div>
                                                        <a href="#" class="btn btn-primary">Buy Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="thumb-wrapper">
                                                <div class="thumb-content">
                                                    <div class="gigcard">
                                                        <div class="package-size"><span class="size">2</span><span
                                                                class="subscript">gig</span></div>
                                                        <div class="amount">GHC 10.5</div>
                                                    </div>
                                                    <div>
                                                        <a href="#" class="btn btn-primary">Buy Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="thumb-wrapper">
                                                <div class="thumb-content">
                                                    <div class="gigcard">
                                                        <div class="package-size"><span class="size">3</span><span
                                                                class="subscript">gig</span></div>
                                                        <div class="amount">GHC 16</div>
                                                    </div>
                                                    <div>
                                                        <a href="#" class="btn btn-primary">Buy Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="thumb-wrapper">

                                                <div class="thumb-content">
                                                    <div class="gigcard">
                                                        <div class="package-size"><span class="size">4</span><span
                                                                class="subscript">gig</span></div>
                                                        <div class="amount">GHC 20</div>
                                                    </div>
                                                    <div>
                                                        <a href="#" class="btn btn-primary">Buy Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item active">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <div class="thumb-wrapper">

                                                <div class="thumb-content">
                                                    <div class="gigcard">
                                                        <div class="package-size"><span class="size">5</span><span
                                                                class="subscript">gig</span></div>
                                                        <div class="amount">GHC 24</div>
                                                    </div>
                                                    <div>
                                                        <a href="#" class="btn btn-primary">Buy Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="thumb-wrapper">
                                                <div class="thumb-content">
                                                    <div class="gigcard">
                                                        <div class="package-size"><span class="size">6</span><span
                                                                class="subscript">gig</span></div>
                                                        <div class="amount">GHC 28</div>
                                                    </div>
                                                    <div>
                                                        <a href="#" class="btn btn-primary">Buy Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="thumb-wrapper">
                                                <div class="thumb-content">
                                                    <div class="gigcard">
                                                        <div class="package-size"><span class="size">7</span><span
                                                                class="subscript">gig</span></div>
                                                        <div class="amount">GHC 33</div>
                                                    </div>
                                                    <div>
                                                        <a href="#" class="btn btn-primary">Buy Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="thumb-wrapper">

                                                <div class="thumb-content">
                                                    <div class="gigcard">
                                                        <div class="package-size"><span class="size">8</span><span
                                                                class="subscript">gig</span></div>
                                                        <div class="amount">GHC 37</div>
                                                    </div>
                                                    <div>
                                                        <a href="#" class="btn btn-primary">Buy Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <div class="thumb-wrapper">
                                                <div class="thumb-content">
                                                    <div class="gigcard">
                                                        <div class="package-size"><span class="size">9</span><span
                                                                class="subscript">gig</span></div>
                                                        <div class="amount">GHC 41</div>
                                                    </div>
                                                    <div>
                                                        <a href="#" class="btn btn-primary">Buy Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="thumb-wrapper">

                                                <div class="thumb-content">
                                                    <div class="gigcard">
                                                        <div class="package-size"><span class="size">10</span><span
                                                                class="subscript">gig</span></div>
                                                        <div class="amount">GHC 44</div>
                                                    </div>
                                                    <div>
                                                        <a href="#" class="btn btn-primary">Buy Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="thumb-wrapper">

                                                <div class="thumb-content">
                                                    <div class="gigcard">
                                                        <div class="package-size"><span class="size">12</span><span
                                                                class="subscript">gig</span></div>
                                                        <div class="amount">GHC 54</div>
                                                    </div>
                                                    <div>
                                                        <a href="#" class="btn btn-primary">Buy Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="thumb-wrapper">

                                                <div class="thumb-content">
                                                    <div class="gigcard">
                                                        <div class="package-size"><span class="size">13</span><span
                                                                class="subscript">gig</span></div>
                                                        <div class="amount">GHC 56</div>
                                                    </div>
                                                    <div>
                                                        <a href="#" class="btn btn-primary">Buy Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <div class="thumb-wrapper">
                                                <div class="thumb-content">
                                                    <div class="gigcard">
                                                        <div class="package-size"><span class="size">15</span><span
                                                                class="subscript">gig</span></div>
                                                        <div class="amount">GHC 64</div>
                                                    </div>
                                                    <div>
                                                        <a href="#" class="btn btn-primary">Buy Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="thumb-wrapper">

                                                <div class="thumb-content">
                                                    <div class="gigcard">
                                                        <div class="package-size"><span class="size">16</span><span
                                                                class="subscript">gig</span></div>
                                                        <div class="amount">GHC 68</div>
                                                    </div>
                                                    <div>
                                                        <a href="#" class="btn btn-primary">Buy Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="thumb-wrapper">

                                                <div class="thumb-content">
                                                    <div class="gigcard">
                                                        <div class="package-size"><span class="size">18</span><span
                                                                class="subscript">gig</span></div>
                                                        <div class="amount">GHC 76</div>
                                                    </div>
                                                    <div>
                                                        <a href="#" class="btn btn-primary">Buy Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="thumb-wrapper">

                                                <div class="thumb-content">
                                                    <div class="gigcard">
                                                        <div class="package-size"><span class="size">20</span><span
                                                                class="subscript">gig</span></div>
                                                        <div class="amount">GHC 84</div>
                                                    </div>
                                                    <div>
                                                        <a href="#" class="btn btn-primary">Buy Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <div class="thumb-wrapper">
                                                <div class="thumb-content">
                                                    <div class="gigcard">
                                                        <div class="package-size"><span class="size">25</span><span
                                                                class="subscript">gig</span></div>
                                                        <div class="amount">GHC 108</div>
                                                    </div>
                                                    <div>
                                                        <a href="#" class="btn btn-primary">Buy Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="thumb-wrapper">

                                                <div class="thumb-content">
                                                    <div class="gigcard">
                                                        <div class="package-size"><span class="size">30</span><span
                                                                class="subscript">gig</span></div>
                                                        <div class="amount">GHC 127</div>
                                                    </div>
                                                    <div>
                                                        <a href="#" class="btn btn-primary">Buy Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="thumb-wrapper">

                                                <div class="thumb-content">
                                                    <div class="gigcard">
                                                        <div class="package-size"><span class="size">50</span><span
                                                                class="subscript">gig</span></div>
                                                        <div class="amount">GHC 205</div>
                                                    </div>
                                                    <div>
                                                        <a href="#" class="btn btn-primary">Buy Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="thumb-wrapper">
                                                <div class="thumb-content">
                                                    <div class="gigcard">
                                                        <div class="package-size"><span class="size">100</span><span
                                                                class="subscript">gig</span></div>
                                                        <div class="amount">GHC 405</div>
                                                    </div>
                                                    <div>
                                                        <a href="#" class="btn btn-primary">Buy Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Carousel controls -->
                            <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
                                <i class="fa fa-angle-left"></i>
                            </a>
                            <a class="carousel-control-next" href="#myCarousel" data-slide="next">
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </div>
                    </div>
                </div>





        </section>


    </div>


    <?php
    require_once 'footer.php';
    ?>

    <!-- form submission -->
<script>
    const scriptURL = '<?= $api['url'] ?>';
    const form = document.forms['form'];

    // Beep sound URL or Data URI
    const beepSoundUrl = 'path/to/beep-sound.mp3'; // Replace with the actual URL or Data URI

    function generateReference() {
        const characters = '0123456789ABCDEFGHIJKLMNPQRSTUVWXYZ';
        let reference = '';
        for (let i = 0; i < 4; i++) {
            reference += characters.charAt(Math.floor(Math.random() * characters.length));
        }
        return reference;
    }

    function copyToClipboard(text) {
        const tempInput = document.createElement('textarea');
        tempInput.style.position = 'absolute';
        tempInput.style.left = '-9999px';
        tempInput.value = text;
        document.body.appendChild(tempInput);
        tempInput.select();
        try {
            document.execCommand('copy');
            console.log('Copied to clipboard:', text);
        } catch (err) {
            console.error('Failed to copy to clipboard:', err);
        }
        document.body.removeChild(tempInput);
    }

    form.addEventListener('submit', e => {
        e.preventDefault();
        console.log("Form submit event triggered");

        const submitButton = form.querySelector('button[type="submit"]');
        submitButton.disabled = true;
        submitButton.innerHTML = '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Submitting...';

        // Generate random four-digit reference and set it in the hidden input field
        const reference = generateReference();
        document.getElementById('reference').value = reference;

        const formData = new FormData(form);
        console.log("Form data prepared for submission");

        fetch(scriptURL, {
            method: 'POST',
            body: formData
        })
        .then(response => {
            console.log("Response received:", response);
            submitButton.disabled = false;
            submitButton.innerHTML = 'Submit';

            if (response.ok) {
                console.log("Response OK");
                // Copy reference to clipboard manually
                copyToClipboard(reference);

                // Play the beep sound
                playBeep();

                // Display an alert
                alert("Thank you! Your order has been successfully submitted. Your Order ID is: " + reference + ". Complete the payment within 5 minutes.");

                form.reset();
                document.getElementById('package_mb').value = '';
            } else {
                throw new Error('Network response was not ok');
            }
        })
        .catch(error => {
            submitButton.disabled = false;
            submitButton.innerHTML = 'Submit';
            console.error('Error!', error.message, error);
            alert("An error occurred while submitting the form. Please try again later.");
        });
    });

    function playBeep() {
        const beep = new Audio(beepSoundUrl);
        beep.play();
    }
</script>





    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const inputField = document.getElementById('momo_number');
            inputField.addEventListener('input', function () {
                this.value = this.value.replace(/[^0-9]/g, ''); // Remove non-numeric characters
                if (this.value.length > 10) {
                    this.value = this.value.slice(0, 10); // Limit input to 10 characters
                }

                if (this.value.length > 0 && this.value[0] !== '0'){
                    this.value = '0' + this.value;
                }
            });
        });
    </script>


    <script>
    
const bundlePackages = {
    '1GB': 5.5,
    '2GB': 10.5,
    '3GB': 15,
    '4GB': 20,
    '5GB': 24,
    '6GB': 28,
    '7GB': 33,
    '8GB': 37,
    '9GB': 41,
    '10GB': 44,
    '12GB': 52,
    '13GB': 56,
    '14GB': 60,
    '15GB': 64,
    '16GB': 68,
    '18GB': 76,
    '20GB': 84,
    '25GB': 108,
    '30GB': 127,
    '50GB': 205,
    // '75GB': 295,
     '100GB': 405
};


        document.addEventListener('DOMContentLoaded', function () {
            const packageSelect = document.getElementById('package');
            const amountPaidInput = document.getElementById('amount_paid');
            const packageMbInput = document.getElementById('package_mb');

            function updateAmountPaidAndMb() {
                const selectedPackage = packageSelect.value;
                if (selectedPackage) {
                    const price = bundlePackages[selectedPackage];
                    const packageInMb = parseInt(selectedPackage) * 1024; // Convert GB to MB

                    amountPaidInput.value = price;
                    packageMbInput.value = packageInMb + ' MB';
                    document.getElementById('megabytes').value = packageInMb; // Set the hidden input field
                } else {
                    amountPaidInput.value = '';
                    packageMbInput.value = '';
                    document.getElementById('megabytes').value = ''; // Clear the hidden input field
                }
            }

            for (const [packageName, price] of Object.entries(bundlePackages)) {
                const option = document.createElement('option');
                option.value = packageName;
                option.textContent = packageName;
                packageSelect.appendChild(option);
            }

            packageSelect.addEventListener('change', updateAmountPaidAndMb);
            updateAmountPaidAndMb();
        });
    </script>
</div>