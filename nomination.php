<?php include 'header.php'; ?>
<main class="main">
    <!-- breadcrumb -->
    <div class="site-breadcrumb innerPageBannerContainer">
        <div class="container">
            <h2 class="breadcrumb-title">Nomination Registration</h2>
            <ul class="breadcrumb-menu">
                <li><a href="index.html">Home</a></li>
                <li class="active">Nomination Registration</li>
            </ul>
        </div>
    </div>
    <!-- breadcrumb end -->

    <!-- contact area -->
    <div class="contact-area py-120">
        <div class="container">
            <div class="contact-wrapper">
                <div class="row">
                    <div class="col-12">
                        <div class="contact-form">
                            <div class="contact-form-header">
                                <h2>Nomination Registration</h2>
                            </div>
                            <form method="post" action="/eventu/assets/php/contact.php" id="contact-form">
                                <div class="row">
                                    <div class="col-12">
                                        <h5 class="mb-3">Details Of Nominee</h5>
                                    </div>
                                    <div class="col-12 col-md-6 mb-20">
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="nominatedby" placeholder="Individual/Organization Nominated" required>
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-6 mb-20">
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="nominee_name" placeholder="Contact Person Name" required>
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-6 mb-20">
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="nominee_designation" placeholder="Designation" required>
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-6 mb-20">
                                        <div class="input-group">
                                            <input type="number" class="form-control" name="nominee_contact" placeholder="Contact Person No" required>
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-6 mb-20">
                                        <div class="input-group">
                                            <input type="email" class="form-control" name="nominee_email" placeholder="Email ID" required>
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-6 mb-20">
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="nominee_website" placeholder="Website">
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <div class="col-12 col-md-6">
                                        <h5 class="mb-3">REALTEK AWARDS – DUBAI 2025 Categories:</h5>

                                        <div class="d-flex gap-1 align-items-center catNomiDiv">
                                            <input type="checkbox" class="inpNomi" name="category[]" id="category_developer_of_year" value="Developer of the Year">
                                            <label class="form-check-label" for="category_developer_of_year">Developer of the Year</label>
                                        </div>

                                        <div class="d-flex gap-1 align-items-center catNomiDiv">
                                            <input type="checkbox" name="category[]" id="category_most_innovative_agency" value="Most Innovative Real Estate Agency">
                                            <label class="form-check-label" for="category_most_innovative_agency">Most Innovative Real Estate Agency</label>
                                        </div>

                                        <div class="d-flex gap-1 align-items-center catNomiDiv">
                                            <input type="checkbox" name="category[]" id="category_best_consultancy" value="Best Real Estate Consultancy">
                                            <label class="form-check-label" for="category_best_consultancy">Best Real Estate Consultancy</label>
                                        </div>

                                        <div class="d-flex gap-1 align-items-center catNomiDiv">
                                            <input type="checkbox" name="category[]" id="category_property_management" value="Property Management Company of the Year">
                                            <label class="form-check-label" for="category_property_management">Property Management Company of the Year</label>
                                        </div>

                                        <div class="d-flex gap-1 align-items-center catNomiDiv">
                                            <input type="checkbox" name="category[]" id="category_investment_firm" value="Real Estate Investment Firm of the Year">
                                            <label class="form-check-label" for="category_investment_firm">Real Estate Investment Firm of the Year</label>
                                        </div>

                                        <div class="d-flex gap-1 align-items-center catNomiDiv">
                                            <input type="checkbox" name="category[]" id="category_sustainable_development" value="Sustainable Development Award" required>
                                            <label class="form-check-label" for="category_sustainable_development">Sustainable Development Award</label>
                                        </div>

                                        <div class="d-flex gap-1 align-items-center catNomiDiv">
                                            <input type="checkbox" name="category[]" id="category_architectural_excellence" value="Architectural Excellence in Real Estate" required>
                                            <label class="form-check-label" for="category_architectural_excellence">Architectural Excellence in Real Estate</label>
                                        </div>

                                        <div class="d-flex gap-1 align-items-center catNomiDiv">
                                            <input type="checkbox" name="category[]" id="category_best_startup" value="Best Real Estate Startup" required>
                                            <label class="form-check-label" for="category_best_startup">Best Real Estate Startup</label>
                                        </div>

                                        <div class="d-flex gap-1 align-items-center catNomiDiv">
                                            <input type="checkbox" name="category[]" id="category_rising_star_org" value="Rising Star – Organization" required>
                                            <label class="form-check-label" for="category_rising_star_org">Rising Star – Organization</label>
                                        </div>

                                        <div class="d-flex gap-1 align-items-center catNomiDiv">
                                            <input type="checkbox" name="category[]" id="category_proptech_startup" value="Best PropTech Startup of the Year" required>
                                            <label class="form-check-label" for="category_proptech_startup">Best PropTech Startup of the Year</label>
                                        </div>

                                        <div class="d-flex gap-1 align-items-center catNomiDiv">
                                            <input type="checkbox" name="category[]" id="category_luxury_project" value="Luxury Project of the Year" required>
                                            <label class="form-check-label" for="category_luxury_project">Luxury Project of the Year</label>
                                        </div>

                                        <div class="d-flex gap-1 align-items-center catNomiDiv">
                                            <input type="checkbox" name="category[]" id="category_emerging_brand" value="Fastest Emerging Brand" required>
                                            <label class="form-check-label" for="category_emerging_brand">Fastest Emerging Brand</label>
                                        </div>

                                        <div class="d-flex gap-1 align-items-center catNomiDiv">
                                            <input type="checkbox" name="category[]" id="category_best_institute" value="Best Institute -Training & Development" required>
                                            <label class="form-check-label" for="category_best_institute">Best Institute - Training & Development</label>
                                        </div>

                                        <div class="d-flex gap-1 align-items-center catNomiDiv">
                                            <input type="checkbox" name="category[]" id="category_facility_management" value="Excellence in Facility Management" required>
                                            <label class="form-check-label" for="category_facility_management">Excellence in Facility Management</label>
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-6">
                                        <h5 class="mb-3">INDIVIDUAL AWARDS</h5>

                                        <div class="d-flex gap-1 align-items-center catNomiDiv">
                                            <input type="checkbox" name="category[]" id="category_best_agent" value="Best Real Estate Agent" required>
                                            <label class="form-check-label" for="category_best_agent">Best Real Estate Agent</label>
                                        </div>

                                        <div class="d-flex gap-1 align-items-center catNomiDiv">
                                            <input type="checkbox" name="category[]" id="category_influencer_of_year" value="Influencer of the Year - Real Estate" required>
                                            <label class="form-check-label" for="category_influencer_of_year">Influencer of the Year - Real Estate</label>
                                        </div>

                                        <div class="d-flex gap-1 align-items-center catNomiDiv">
                                            <input type="checkbox" name="category[]" id="category_personality_of_year" value="REALTEK Personality of the Year" required>
                                            <label class="form-check-label" for="category_personality_of_year">REALTEK Personality of the Year</label>
                                        </div>

                                        <div class="d-flex gap-1 align-items-center catNomiDiv">
                                            <input type="checkbox" name="category[]" id="category_rising_star_individual" value="Rising Star - Individual" required>
                                            <label class="form-check-label" for="category_rising_star_individual">Rising Star - Individual</label>
                                        </div>

                                        <div class="d-flex gap-1 align-items-center catNomiDiv">
                                            <input type="checkbox" name="category[]" id="category_excellence_services" value="Excellence in Professional Services" required>
                                            <label class="form-check-label" for="category_excellence_services">Excellence in Professional Services</label>
                                        </div>

                                        <div class="d-flex gap-1 align-items-center catNomiDiv">
                                            <input type="checkbox" name="category[]" id="category_woman_personality" value="Woman Personality of the Year" required>
                                            <label class="form-check-label" for="category_woman_personality">Woman Personality of the Year</label>
                                        </div>

                                        <div class="d-flex gap-1 align-items-center catNomiDiv">
                                            <input type="checkbox" name="category[]" id="category_ceo_of_year" value="CEO of the Year" required>
                                            <label class="form-check-label" for="category_ceo_of_year">CEO of the Year</label>
                                        </div>

                                        <div class="d-flex gap-1 align-items-center catNomiDiv">
                                            <input type="checkbox" name="category[]" id="category_lifetime_achievement" value="REALTEK Lifetime Achievement Award" required>
                                            <label class="form-check-label" for="category_lifetime_achievement">REALTEK Lifetime Achievement Award</label>
                                        </div>
                                    </div>
                                    <label id="category[]-error" class="error" for="category[]"></label>
                                </div>

                                <div class="row">
                                    <div class="col-12">
                                        <h5 class="mb-3">Details Of Nominee</h5>
                                    </div>

                                    <!-- Name -->
                                    <div class="col-md-6 mb-20">
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="nominatedby_name" placeholder="Name">
                                        </div>
                                    </div>

                                    <!-- Organization -->
                                    <div class="col-md-6 mb-20">
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="nominatedby_org" placeholder="Organization">
                                        </div>
                                    </div>

                                    <!-- Affiliation with the Nominee -->
                                    <div class="col-md-6 mb-20">
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="affiliation" placeholder="Affiliation with the Nominee">
                                        </div>
                                    </div>

                                    <!-- Contact Number -->
                                    <div class="col-md-6 mb-20">
                                        <div class="input-group">
                                            <input type="number" class="form-control" name="nominatedby_contact" placeholder="Contact Number">
                                        </div>
                                    </div>

                                    <!-- Email ID -->
                                    <div class="col-md-6 mb-20">
                                        <div class="input-group">
                                            <input type="email" class="form-control" name="nominatedby_email" placeholder="Email ID">
                                        </div>
                                    </div>

                                    <!-- Attachment -->
                                    <div class="col-md-6 mb-20">
                                        <div class="input-group">
                                            <input class="form-control" type="file" id="formFile" name="docs">
                                        </div>
                                    </div>

                                </div>



                                <div class="input-group textarea">
                                    <textarea name="message" cols="30" rows="5" class="form-control"
                                        placeholder="Write Your Message"></textarea>
                                </div>
                                <button type="submit" class="theme-btn">Submit <i class="far fa-paper-plane"></i></button>
                                <div class="col-md-12 mt-3">
                                    <div class="form-messege text-success"></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- end form -->
            <div class="contact-content">
                <div class="row">
                    <div class="col-md-3">
                        <div class="contact-info">
                            <div class="contact-info-icon">
                                <i class="fal fa-map-location-dot"></i>
                            </div>
                            <div class="contact-info-content">
                                <h5>Office Address</h5>
                                <p>25/B Milford, New York, USA</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="contact-info">
                            <div class="contact-info-icon">
                                <i class="fal fa-phone-volume"></i>
                            </div>
                            <div class="contact-info-content">
                                <h5>Call Us</h5>
                                <p>+2 123 4565 789</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="contact-info">
                            <div class="contact-info-icon">
                                <i class="fal fa-envelopes"></i>
                            </div>
                            <div class="contact-info-content">
                                <h5>Email Us</h5>
                                <p>info@example.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="contact-info">
                            <div class="contact-info-icon">
                                <i class="fal fa-alarm-clock"></i>
                            </div>
                            <div class="contact-info-content">
                                <h5>Open Time</h5>
                                <p>Mon - Sat (10.00AM - 05.30PM)</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end contact area -->

</main>




<?php include 'footer.php'; ?>