<article class="post-16 page type-page status-publish ast-article-single" id="post-16" itemtype="https://schema.org/CreativeWork" itemscope="itemscope">
    <header class="entry-header ast-header-without-markup">
    </header>
    <div class="entry-content clear" itemprop="text">
        <div data-elementor-type="wp-page" data-elementor-id="16" class="elementor elementor-16" data-elementor-settings="[]">
            <div class="elementor-inner">
                <div class="elementor-section-wrap">
                    <section class="elementor-section elementor-top-section elementor-element elementor-element-37d2a4f elementor-section-height-min-height elementor-section-content-bottom elementor-section-items-bottom elementor-section-boxed elementor-section-height-default" data-id="37d2a4f" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="elementor-background-overlay"></div>
                        <div class="elementor-container elementor-column-gap-no">
                            <div class="elementor-row">
                                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-559220c" data-id="559220c" data-element_type="column">
                                    <div class="elementor-column-wrap elementor-element-populated">
                                        <div class="elementor-widget-wrap">
                                            <div class="elementor-element elementor-element-d1cb7b6 elementor-widget elementor-widget-heading" data-id="d1cb7b6" data-element_type="widget" data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h6 class="elementor-heading-title elementor-size-default">Dive into our</h6> </div>
                                            </div>
                                            <div class="elementor-element elementor-element-78206bf elementor-widget elementor-widget-heading" data-id="78206bf" data-element_type="widget" data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h1 class="elementor-heading-title elementor-size-default">Blogs</h1> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="elementor-section elementor-top-section elementor-element elementor-element-a14396e elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="a14396e" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="elementor-container elementor-column-gap-no">
                            <div class="elementor-row">
                                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-f203a60" data-id="f203a60" data-element_type="column">
                                    <div class="elementor-column-wrap elementor-element-populated">
                                        <div class="elementor-widget-wrap">
                                            <div class="elementor-element elementor-element-8085c36 elementor-widget elementor-widget-heading" data-id="8085c36" data-element_type="widget" data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h5 class="elementor-heading-title elementor-size-default">The Life Pith Blog is an informative hub of Life Pith Nigeria to provide publications and articles on leadership development, faith, lifestyle and sustainable development goals.
                                                        All articles are properly researched and promise to aid personal and societal development. To publish with us,  contact us.</h5> </div>
                                            </div>
                                            <section class="elementor-section elementor-inner-section elementor-element elementor-element-74d1231 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="74d1231" data-element_type="section">
                                                <div class="elementor-element elementor-element-f47f12b elementor-widget mb--bottom elementor-widget-heading" data-id="f47f12b" data-element_type="widget" data-widget_type="text-editor.default">
                                                    <div class="elementor-widget-container">
                                                        <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
                                                            <?php
                                                            $categories = categories::all();

                                                            foreach($categories as $category) {
                                                                $category_name = $category['category'];
                                                                ?>
                                                                <li class="nav-item" role="presentation">
                                                                    <button class="nav-link <?php if($category_name === 'Leadership') { echo 'active'; } ?>" id="pills-<?= $category_name; ?>-tab" data-bs-toggle="pill" data-bs-target="#pills-<?= $category_name; ?>" type="button" role="tab" aria-controls="pills-<?= $category_name; ?>" aria-selected="true"><?= $category_name; ?></button>
                                                                </li>
                                                            <?php
                                                            }
                                                            ?>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="elementor-container elementor-column-gap-no tab-content" id="pills-tabContent">
                                                   <div class="tab-pane fade show active elementor-row" role="tabpanel" aria-labelledby="pills-Leadership-tab" id="pills-Leadership">
                                                       <?php
                                                       $blogs = blog::category(1);

                                                       foreach($blogs as $blog) {
                                                           $blog_id = $blog['id'];
                                                           $title = $blog['title'];
                                                           $date = $blog['day'] . ' ' . $blog['month'] . ', ' . $blog['year'];
                                                           $thumbnail = config::baseUploadUrl() . $blog['thumbnail'];
                                                           ?>
                                                           <div class="elementor-column elementor-inner-column elementor-col-33 elementor-element elementor-element-6f8dbf1">
                                                               <div class="elementor-column-wrap elementor-element-populated">
                                                                   <div class="elementor-widget-wrap">
                                                                       <div class="elementor-element elementor-element-9b646f0 elementor-widget elementor-widget-heading" data-id="9b646f0" data-element_type="widget" data-widget_type="heading.default">
                                                                           <div class="elementor-widget-container">
                                                                               <h6 class="elementor-heading-title elementor-size-default"><?= $date; ?></h6> </div>
                                                                       </div>
                                                                       <div class="elementor-element elementor-element-919b06c elementor-widget-divider--view-line elementor-widget elementor-widget-divider" data-id="919b06c" data-element_type="widget" data-widget_type="divider.default">
                                                                           <div class="elementor-widget-container">
                                                                               <div class="elementor-divider">
<span class="elementor-divider-separator">
</span>
                                                                               </div>
                                                                           </div>
                                                                       </div>
                                                                       <div class="elementor-element elementor-element-18ccba2 elementor-widget elementor-widget-heading" data-id="18ccba2" data-element_type="widget" data-widget_type="heading.default">
                                                                           <div class="elementor-widget-container">
                                                                               <div>
                                                                                   <img src="<?= $thumbnail ?>" alt="">
                                                                               </div>
                                                                               <h4 class="elementor-heading-title elementor-size-default"><a href="single_blog/<?= $blog_id; ?>"><?= $title; ?></a></h4> </div>
                                                                       </div>
                                                                       <div class="elementor-element elementor-element-79cfc23 elementor-align-justify elementor-widget elementor-widget-button" data-id="79cfc23" data-element_type="widget" data-widget_type="button.default">
                                                                           <div class="elementor-widget-container">
                                                                               <div class="elementor-button-wrapper">
                                                                                   <a href="index.html#" class="elementor-button-link elementor-button elementor-size-sm" role="button">
                                                                                    <span class="elementor-button-content-wrapper">
                                                                                        <span class="elementor-button-text">Read more</span>
                                                                                    </span>
                                                                                   </a>
                                                                               </div>
                                                                           </div>
                                                                       </div>
                                                                   </div>
                                                               </div>
                                                           </div>
                                                       <?php
                                                       }
                                                       ?>
                                                   </div>

                                                    <div class="tab-pane fade elementor-row" role="tabpanel" aria-labelledby="pills-Faith-tab" id="pills-Faith">
                                                        <?php
                                                        $blogs = blog::category(2);

                                                        foreach($blogs as $blog) {
                                                            $title = $blog['title'];
                                                            $date = $blog['day'] . ' ' . $blog['month'] . ', ' . $blog['year'];
                                                            $thumbnail = config::baseUploadUrl() . $blog['thumbnail'];
                                                            ?>
                                                            <div class="elementor-column elementor-inner-column elementor-col-33 elementor-element elementor-element-6f8dbf1">
                                                                <div class="elementor-column-wrap elementor-element-populated">
                                                                    <div class="elementor-widget-wrap">
                                                                        <div class="elementor-element elementor-element-9b646f0 elementor-widget elementor-widget-heading" data-id="9b646f0" data-element_type="widget" data-widget_type="heading.default">
                                                                            <div class="elementor-widget-container">
                                                                                <h6 class="elementor-heading-title elementor-size-default"><?= $date; ?></h6> </div>
                                                                        </div>
                                                                        <div class="elementor-element elementor-element-919b06c elementor-widget-divider--view-line elementor-widget elementor-widget-divider" data-id="919b06c" data-element_type="widget" data-widget_type="divider.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div class="elementor-divider">
<span class="elementor-divider-separator">
</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="elementor-element elementor-element-18ccba2 elementor-widget elementor-widget-heading" data-id="18ccba2" data-element_type="widget" data-widget_type="heading.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div>
                                                                                    <img src="<?= $thumbnail ?>" alt="">
                                                                                </div>
                                                                                <h4 class="elementor-heading-title elementor-size-default"><a href="index.html#"><?= $title; ?></a></h4> </div>
                                                                        </div>
                                                                        <div class="elementor-element elementor-element-79cfc23 elementor-align-justify elementor-widget elementor-widget-button" data-id="79cfc23" data-element_type="widget" data-widget_type="button.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div class="elementor-button-wrapper">
                                                                                    <a href="index.html#" class="elementor-button-link elementor-button elementor-size-sm" role="button">
                                                                                    <span class="elementor-button-content-wrapper">
                                                                                        <span class="elementor-button-text">Read more</span>
                                                                                    </span>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <?php
                                                        }
                                                        ?>
                                                    </div>

                                                    <div class="tab-pane fade elementor-row" role="tabpanel" aria-labelledby="pills-Lifestyle-tab" id="pills-Lifestyle">
                                                        <?php
                                                        $blogs = blog::category(3);

                                                        foreach($blogs as $blog) {
                                                            $title = $blog['title'];
                                                            $date = $blog['day'] . ' ' . $blog['month'] . ', ' . $blog['year'];
                                                            $thumbnail = config::baseUploadUrl() . $blog['thumbnail'];
                                                            ?>
                                                            <div class="elementor-column elementor-inner-column elementor-col-33 elementor-element elementor-element-6f8dbf1">
                                                                <div class="elementor-column-wrap elementor-element-populated">
                                                                    <div class="elementor-widget-wrap">
                                                                        <div class="elementor-element elementor-element-9b646f0 elementor-widget elementor-widget-heading" data-id="9b646f0" data-element_type="widget" data-widget_type="heading.default">
                                                                            <div class="elementor-widget-container">
                                                                                <h6 class="elementor-heading-title elementor-size-default"><?= $date; ?></h6> </div>
                                                                        </div>
                                                                        <div class="elementor-element elementor-element-919b06c elementor-widget-divider--view-line elementor-widget elementor-widget-divider" data-id="919b06c" data-element_type="widget" data-widget_type="divider.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div class="elementor-divider">
<span class="elementor-divider-separator">
</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="elementor-element elementor-element-18ccba2 elementor-widget elementor-widget-heading" data-id="18ccba2" data-element_type="widget" data-widget_type="heading.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div>
                                                                                    <img src="<?= $thumbnail ?>" alt="">
                                                                                </div>
                                                                                <h4 class="elementor-heading-title elementor-size-default"><a href="index.html#"><?= $title; ?></a></h4> </div>
                                                                        </div>
                                                                        <div class="elementor-element elementor-element-79cfc23 elementor-align-justify elementor-widget elementor-widget-button" data-id="79cfc23" data-element_type="widget" data-widget_type="button.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div class="elementor-button-wrapper">
                                                                                    <a href="index.html#" class="elementor-button-link elementor-button elementor-size-sm" role="button">
                                                                                    <span class="elementor-button-content-wrapper">
                                                                                        <span class="elementor-button-text">Read more</span>
                                                                                    </span>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <?php
                                                        }
                                                        ?>
                                                    </div>

                                                    <div class="tab-pane fade elementor-row" role="tabpanel" aria-labelledby="pills-Health-tab" id="pills-Health">
                                                        <?php
                                                        $blogs = blog::category(4);

                                                        foreach($blogs as $blog) {
                                                            $title = $blog['title'];
                                                            $date = $blog['day'] . ' ' . $blog['month'] . ', ' . $blog['year'];
                                                            $thumbnail = config::baseUploadUrl() . $blog['thumbnail'];
                                                            ?>
                                                            <div class="elementor-column elementor-inner-column elementor-col-33 elementor-element elementor-element-6f8dbf1">
                                                                <div class="elementor-column-wrap elementor-element-populated">
                                                                    <div class="elementor-widget-wrap">
                                                                        <div class="elementor-element elementor-element-9b646f0 elementor-widget elementor-widget-heading" data-id="9b646f0" data-element_type="widget" data-widget_type="heading.default">
                                                                            <div class="elementor-widget-container">
                                                                                <h6 class="elementor-heading-title elementor-size-default"><?= $date; ?></h6> </div>
                                                                        </div>
                                                                        <div class="elementor-element elementor-element-919b06c elementor-widget-divider--view-line elementor-widget elementor-widget-divider" data-id="919b06c" data-element_type="widget" data-widget_type="divider.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div class="elementor-divider">
<span class="elementor-divider-separator">
</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="elementor-element elementor-element-18ccba2 elementor-widget elementor-widget-heading" data-id="18ccba2" data-element_type="widget" data-widget_type="heading.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div>
                                                                                    <img src="<?= $thumbnail ?>" alt="">
                                                                                </div>
                                                                                <h4 class="elementor-heading-title elementor-size-default"><a href="index.html#"><?= $title; ?></a></h4> </div>
                                                                        </div>
                                                                        <div class="elementor-element elementor-element-79cfc23 elementor-align-justify elementor-widget elementor-widget-button" data-id="79cfc23" data-element_type="widget" data-widget_type="button.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div class="elementor-button-wrapper">
                                                                                    <a href="index.html#" class="elementor-button-link elementor-button elementor-size-sm" role="button">
                                                                                    <span class="elementor-button-content-wrapper">
                                                                                        <span class="elementor-button-text">Read more</span>
                                                                                    </span>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <?php
                                                        }
                                                        ?>
                                                    </div>
                                                </div>
                                            </section>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="elementor-section elementor-top-section elementor-element elementor-element-d93a5e7 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="d93a5e7" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="elementor-background-overlay"></div>
                        <div class="elementor-container elementor-column-gap-no">
                            <div class="elementor-row">
                                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-50d78970" data-id="50d78970" data-element_type="column">
                                    <div class="elementor-column-wrap elementor-element-populated">
                                        <div class="elementor-widget-wrap">
                                            <div class="elementor-element elementor-element-1e867065 elementor-widget elementor-widget-heading" data-id="1e867065" data-element_type="widget" data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h6 class="elementor-heading-title elementor-size-default">Want to make a difference?</h6> </div>
                                            </div>
                                            <div class="elementor-element elementor-element-19bb4fe5 elementor-widget elementor-widget-heading" data-id="19bb4fe5" data-element_type="widget" data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h2 class="elementor-heading-title elementor-size-default">Help us raise money for our humanitarian causes</h2> </div>
                                            </div>
                                            <div class="elementor-element elementor-element-5f9baeff elementor-align-center elementor-widget elementor-widget-button" data-id="5f9baeff" data-element_type="widget" data-widget_type="button.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-button-wrapper">
                                                        <a href="index.html#" class="elementor-button-link elementor-button elementor-size-sm" role="button">
<span class="elementor-button-content-wrapper">
<span class="elementor-button-text">Donate</span>
</span>
                                                        </a>
                                                    </div>
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
