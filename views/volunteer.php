<article class="post-10 page type-page status-publish ast-article-single" id="post-10" itemtype="https://schema.org/CreativeWork" itemscope="itemscope">
    <header class="entry-header ast-header-without-markup">
    </header>
    <div class="entry-content clear" itemprop="text">
        <div data-elementor-type="wp-page" data-elementor-id="10" class="elementor elementor-10" data-elementor-settings="[]">
            <div class="elementor-inner">
                <div class="elementor-section-wrap">
                    <section class="elementor-section elementor-top-section elementor-element elementor-element-7281a65 elementor-section-height-min-height elementor-section-content-bottom elementor-section-items-bottom elementor-section-boxed elementor-section-height-default" data-id="7281a65" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="elementor-background-overlay"></div>
                        <div class="elementor-container elementor-column-gap-no">
                            <div class="elementor-row">
                                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-6a439a7" data-id="6a439a7" data-element_type="column">
                                    <div class="elementor-column-wrap elementor-element-populated">
                                        <div class="elementor-widget-wrap">
                                            <div class="elementor-element elementor-element-f01bfdd elementor-widget elementor-widget-heading" data-id="f01bfdd" data-element_type="widget" data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h6 class="elementor-heading-title elementor-size-default">Get involved</h6> </div>
                                            </div>
                                            <div class="elementor-element elementor-element-8dd1b42 elementor-widget elementor-widget-heading" data-id="8dd1b42" data-element_type="widget" data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h1 class="elementor-heading-title elementor-size-default">Volunteer</h1> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="elementor-section elementor-top-section elementor-element elementor-element-bb13f82 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="bb13f82" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="elementor-container elementor-column-gap-no">
                            <div class="elementor-row">
                                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-f44bb1f" data-id="f44bb1f" data-element_type="column">
                                    <div class="elementor-column-wrap elementor-element-populated">
                                        <div class="elementor-widget-wrap">
                                            <div class="elementor-element elementor-element-e78b361 elementor-widget elementor-widget-heading" data-id="e78b361" data-element_type="widget" data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h5 class="elementor-heading-title elementor-size-default">Our mission drives us to seek out low income communities and schools to reach with knowledge on leadership, life skills and health. We are looking for young vibrant and creative young leaders ready to switch up the narrative and create an impact.</h5> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="elementor-section elementor-top-section elementor-element elementor-element-e453d31 elementor-reverse-mobile elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="e453d31" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="elementor-container elementor-column-gap-no">
                            <div class="elementor-row">
                                <div class="elementor-column elementor-col-66 elementor-top-column elementor-element elementor-element-50a1497" data-id="50a1497" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                    <div class="elementor-column-wrap elementor-element-populated">
                                        <div class="elementor-widget-wrap">
                                            <div class="elementor-element elementor-element-6b6393b elementor-widget elementor-widget-shortcode" data-id="6b6393b" data-element_type="widget" data-widget_type="shortcode.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-shortcode">
                                                        <div class="wpforms-container " id="wpforms-5">
                                                            <form id="wpforms-form-5" class="wpforms-validate wpforms-form" data-formid="5" method="post" enctype="multipart/form-data" action="">
                                                                <?php
                                                                if(isset($_POST['volunteer'])) {
                                                                    contact::volunteer($_POST['fname'], $_POST['lname'], $_POST['email'], $_POST['state'], $_POST['message']);
                                                                }
                                                                ?>
                                                                <div class="wpforms-field-container">
                                                                    <div id="wpforms-5-field_0-container" class="wpforms-field wpforms-field-name" data-field-id="0">
                                                                        <label class="wpforms-field-label" for="wpforms-5-field_0">Name <span class="wpforms-required-label">*</span></label>
                                                                        <div class="wpforms-field-row wpforms-field-large">
                                                                            <div class="wpforms-field-row-block wpforms-first wpforms-one-half">
                                                                                <input type="text" id="wpforms-5-field_0" class="wpforms-field-name-first wpforms-field-required" name="fname" required>
                                                                                <label for="wpforms-5-field_0" class="wpforms-field-sublabel after ">First</label>
                                                                            </div>
                                                                            <div class="wpforms-field-row-block wpforms-one-half">
                                                                                <input type="text" id="wpforms-5-field_0-last" class="wpforms-field-name-last wpforms-field-required" name="lname" required>
                                                                                <label for="wpforms-5-field_0-last" class="wpforms-field-sublabel after ">Last</label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div id="wpforms-5-field_1-container" class="wpforms-field wpforms-field-email" data-field-id="1">
                                                                        <label class="wpforms-field-label" for="wpforms-5-field_1">Email <span class="wpforms-required-label">*</span>
                                                                        </label>
                                                                        <input type="email" id="wpforms-5-field_1" class="wpforms-field-large wpforms-field-required" name="email" required>
                                                                    </div>
                                                                    <div id="wpforms-5-field_1-container" class="wpforms-field wpforms-field-email" data-field-id="1">
                                                                        <label class="wpforms-field-label" for="wpforms-5-field_1">State
                                                                            <span class="wpforms-required-label">*</span>
                                                                        </label>
                                                                        <select class="wpforms-field-large wpforms-field-required" name="state" required>
                                                                            <option disabled selected>--Select State--</option>
                                                                            <option value="Abia">Abia</option>
                                                                            <option value="Adamawa">Adamawa</option>
                                                                            <option value="Akwa Ibom">Akwa Ibom</option>
                                                                            <option value="Anambra">Anambra</option>
                                                                            <option value="Bauchi">Bauchi</option>
                                                                            <option value="Bayelsa">Bayelsa</option>
                                                                            <option value="Benue">Benue</option>
                                                                            <option value="Borno">Borno</option>
                                                                            <option value="Cross Rive">Cross River</option>
                                                                            <option value="Delta">Delta</option>
                                                                            <option value="Ebonyi">Ebonyi</option>
                                                                            <option value="Edo">Edo</option>
                                                                            <option value="Ekiti">Ekiti</option>
                                                                            <option value="Enugu">Enugu</option>
                                                                            <option value="FCT">Federal Capital Territory</option>
                                                                            <option value="Gombe">Gombe</option>
                                                                            <option value="Imo">Imo</option>
                                                                            <option value="Jigawa">Jigawa</option>
                                                                            <option value="Kaduna">Kaduna</option>
                                                                            <option value="Kano">Kano</option>
                                                                            <option value="Katsina">Katsina</option>
                                                                            <option value="Kebbi">Kebbi</option>
                                                                            <option value="Kogi">Kogi</option>
                                                                            <option value="Kwara">Kwara</option>
                                                                            <option value="Lagos">Lagos</option>
                                                                            <option value="Nasarawa">Nasarawa</option>
                                                                            <option value="Niger">Niger</option>
                                                                            <option value="Ogun">Ogun</option>
                                                                            <option value="Ondo">Ondo</option>
                                                                            <option value="Osun">Osun</option>
                                                                            <option value="Oyo">Oyo</option>
                                                                            <option value="Plateau">Plateau</option>
                                                                            <option value="Rivers">Rivers</option>
                                                                            <option value="Sokoto">Sokoto</option>
                                                                            <option value="Taraba">Taraba</option>
                                                                            <option value="Yobe">Yobe</option>
                                                                            <option value="Zamfara">Zamfara</option>
                                                                        </select>
                                                                    </div>
                                                                    <div id="wpforms-5-field_2-container" class="wpforms-field wpforms-field-textarea" data-field-id="2">
                                                                        <label class="wpforms-field-label" for="wpforms-5-field_2">Message <span class="wpforms-required-label">*</span>
                                                                        </label>
                                                                        <textarea id="wpforms-5-field_2" class="wpforms-field-medium wpforms-field-required" name="message" required></textarea>
                                                                    </div>
                                                                </div>
                                                                <div class="wpforms-submit-container">
                                                                    <button type="submit" name="volunteer" class="wpforms-submit " id="wpforms-submit-5" value="wpforms-submit" aria-live="assertive" data-alt-text="Sending..." data-submit-text="Send">Send</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-83cae9c" data-id="83cae9c" data-element_type="column">
                                    <div class="elementor-column-wrap elementor-element-populated">
                                        <div class="elementor-widget-wrap">
                                            <div class="elementor-element elementor-element-37a15a2 elementor-widget-divider--view-line elementor-widget elementor-widget-divider" data-id="37a15a2" data-element_type="widget" data-widget_type="divider.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-divider">
<span class="elementor-divider-separator">
</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-caa76f3 elementor-widget elementor-widget-heading" data-id="caa76f3" data-element_type="widget" data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h2 class="elementor-heading-title elementor-size-default">Message Us</h2> </div>
                                            </div>
                                            <div class="elementor-element elementor-element-c736162 elementor-widget elementor-widget-text-editor" data-id="c736162" data-element_type="widget" data-widget_type="text-editor.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-text-editor elementor-clearfix"><p>Get started by filling this form and we’ll get back to you.</p></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</article>
