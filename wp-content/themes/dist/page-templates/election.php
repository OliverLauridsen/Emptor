<?php 
/* Template Name: Election */ 
wp_head();
get_header();

?>

<div id="all_content">
    <section id="section_2">
        <div id="section_2_scroll" class="headline_center_div">
            <div class="headlines_wrapper"><h1 id="section_2_headline"><span style="color:#76C6E8">OUR</span> PRODUCTS
                </h1>
                <div id="headline_blue_underline_1" class="headline_blue_underline"></div>
            </div>
        </div>
        <div id="section_2_bodytext"><p> We are specialized in supplying and delivering products within the following
                electoral sectors.</p></div>
        <div id="product_box_wrapper">
            <a class="a_style" href="ballot_boxes">
                <div id="section_2_image_1" class="product_image"></div>
                <div class="section_2_product_box">
                    <div class="product_box_text_wrapper"><i class="fa fa-archive" aria-hidden="true"></i>
                        <h1> BALLOT BOX</h1>
                        <p> Transparent and foldable ballot box</p></div>
                </div>
            </a><a class="a_style" href="voting-kit">
                <div id="section_2_image_2" class="product_image"></div>
                <div class="section_2_product_box">
                    <div class="product_box_text_wrapper"><i class="fa fa-suitcase" aria-hidden="true"></i>
                        <h1> VOTING KIT</h1>
                        <p> Polling and registration kit</p></div>
                </div>
            </a><a class="a_style" href="voting-booth">
                <div id="section_2_image_3" class="product_image"></div>
                <div class="section_2_product_box">
                    <div class="product_box_text_wrapper"><img src="<?php echo get_template_directory_uri(); ?>/img/logistics.jpg" alt="Voting booth icon">
                        <h1>VOTING BOOTH</h1>
                        <p> Cardboard and plastic voting booth</p></div>
                </div>
            </a><a class="a_style" href="voters-ink">
                <div id="section_2_image_4" class="product_image"></div>
                <div class="section_2_product_box">
                    <div class="product_box_text_wrapper"><i class="fa fa-tint" aria-hidden="true"></i>
                        <h1>VOTERS INK</h1>
                        <p> Indelible ink with silver nitrate & UV ink</p></div>
                </div>
            </a><a class="a_style" href="security-seals">
                <div id="section_2_image_5" class="product_image"></div>
                <div class="section_2_product_box">
                    <div class="product_box_text_wrapper"><i class="fa fa-shield" aria-hidden="true"></i>
                        <h1>SECURITY SEAL</h1>
                        <p> Seals in various material, colours, sizes and shapes</p></div>
                </div>
            </a><a class="a_style" href="miscellaneous">
                <div id="section_2_image_6" class="product_image"></div>
                <div class="section_2_product_box">
                    <div class="product_box_text_wrapper"><i class="fa fa-plus-square" aria-hidden="true"></i>
                        <h1>MISCELLANEOUS</h1>
                        <p> Campaign and promotional materials</p></div>
                </div>
            </a></div>
        <div id="tablet_product_box_wrapper">
            <div class="tablet_individual_product_box_wrapper" id="individual_product_box_wrapper_1">
                <?php 
                if ( have_posts() ) {
                    while ( have_posts() ) {
                        the_post();
                ?>
                    <div class="section_2_product_wrapper">
                        <a class="a_style" href="ballot_boxes">
                            <div id="section_2_image_1_tablet" class="product_image_tablet"> </div>
                            <div id="ballot_box" class="section_2_product_box">
                                <i class="fa fa-archive"aria-hidden="true"></i>
                                <div class="product_box_text_wrapper"><h1> BALLOT BOX</h1>
                                    <p> Transparent and foldable ballot box</p>
                                    <div class="button">Read more</div>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php
                    } // end while
                } // end if
                ?>

                <div class="section_2_product_wrapper"><a class="a_style" href="voting-kit">
                        <div id="section_2_image_2_tablet" class="product_image_tablet"></div>
                        <div class="section_2_product_box"><i class="fa fa-suitcase" aria-hidden="true"></i>
                            <div class="product_box_text_wrapper"><h1> VOTING KIT</h1>
                                <p> Polling and registration kit</p>
                                <div class="button">Read more</div>
                            </div>
                        </div>
                    </a></div>
                <div class="section_2_product_wrapper"><a class="a_style" href="voting-booth">
                        <div id="section_2_image_3_tablet" class="product_image_tablet"></div>
                        <div class="section_2_product_box"><img src="<?php echo get_template_directory_uri(); ?>/img/voting_screen_ikon.png"
                                                                alt="Voting booth icon">
                            <div class="product_box_text_wrapper"><h1>VOTING BOOTH</h1>
                                <p> Cardboard and plastic voting booth</p>
                                <div class="button"> Read more</div>
                            </div>
                        </div>
                    </a></div>
            </div>
            <div class="tablet_individual_product_box_wrapper">
                <div class="section_2_product_wrapper"><a class="a_style" href="voters-ink">
                        <div id="section_2_image_4_tablet" class="product_image_tablet"></div>
                        <div class="section_2_product_box"><i class="fa fa-tint" aria-hidden="true"></i>
                            <div class="product_box_text_wrapper"><h1> VOTERS INK</h1>
                                <p> Indelible ink with silver nitrate & UV ink</p>
                                <div class="button">Read more</div>
                            </div>
                        </div>
                    </a></div>
                <div class="section_2_product_wrapper"><a class="a_style" href="security-seals">
                        <div id="section_2_image_5_tablet" class="product_image_tablet"></div>
                        <div class="section_2_product_box"><i class="fa fa-shield" aria-hidden="true"></i>
                            <div class="product_box_text_wrapper"><h1>SECURITY SEAL</h1>
                                <p> Seals in various material, colours, sizes and shapes</p>
                                <div class="button"> Read more</div>
                            </div>
                        </div>
                    </a></div>
                <div class="section_2_product_wrapper"><a class="a_style" href="miscellaneous">
                        <div id="section_2_image_6_tablet" class="product_image_tablet"></div>
                        <div class="section_2_product_box"><i class="fa fa-plus-square" aria-hidden="true"></i>
                            <div class="product_box_text_wrapper"><h1>MISCELLANEOUS</h1>
                                <p> Campaign and promotional materials</p>
                                <div class="button"> Read more</div>
                            </div>
                        </div>
                    </a></div>
            </div>
        </div>
    </section>
    <section id="section_3">
        <div id="section_3_scroll" class="headline_center_div">
            <div class="headlines_wrapper"><h1><span style="color:#76C6E8">WHO</span> WE ARE</h1>
                <div id="headline_blue_underline_2" class="headline_blue_underline"></div>
            </div>
        </div>
        <div id="tablet_section_3">
            <div id="tablet_section_3_text_wrapper"><p> Emptor International is specialized in the <span
                            style="color:#76C6E8">production</span> and <span style="color:#76C6E8">delivery</span> of
                    election materials and related logistical services for elections worldwide. Choosing Emptor
                    international as your <span style="color:#76C6E8">partner</span> on election related supplies will
                    bring you experience and delivery security.<br><br> We have our own warehouse for kit packaging of
                    training and polling kits. We produce our own indelible ink, ballot boxes and voting booths tested
                    according to international ISO standards. Emptor International is a <span style="color:#76C6E8">recognized supplier</span>
                    to major aid and development organizations for Electoral Equipment.<br><br> Emptor International has
                    successfully carried out complex deliveries of indelible ink for parliamentary elections in Libya to
                    polling station kits for the presidential election in Afghanistan.</p></div>
            <div class="section_3_quote_box">
                <div class="quote_box_text_wrapper">
                    <div class="blockquote"><p> Our <span style="color:#76C6E8">vision</span> is to make the supply of
                            Election Materials to our customers as <span style="color:#76C6E8">easy</span> as possible!
                        <div class="blockquote2"></div>
                        </p></div>
                </div>
            </div>
            <div class="blue_box"></div>
        </div>
        <div class="mobile_section_3">
            <div class="section_3_text_wrapper"><p> Emptor International is specialized in the <span
                            style="color:#76C6E8">production</span> and <span style="color:#76C6E8">delivery</span> of
                    election materials and related logistical services for elections worldwide. Choosing Emptor
                    international as your <span style="color:#76C6E8">partner</span> on election related supplies will
                    bring you experience and delivery security.<br><br> We have our own warehouse for kit packaging of
                    training and polling kits. We produce our own indelible ink, ballot boxes and voting booths tested
                    according to international ISO standards. Emptor International is a <span style="color:#76C6E8">recognized supplier</span>
                    to major aid and development organizations for Electoral Equipment.<br><br> Emptor International has
                    successfully carried out complex deliveries of indelible ink for parliamentary elections in Libya to
                    polling station kits for the presidential election in Afghanistan.</p></div>
            <div class="section_3_quote_box">
                <div class="quote_box_text_wrapper">
                    <div class="blockquote"><p><span>Our <span style="color:#76C6E8">vision</span> is to make the supply of Election Materials to our customers as <span
                                        style="color:#76C6E8">easy</span> as possible</span>
                        <div class="blockquote2"></div>
                        </p></div>
                </div>
            </div>
        </div>
    </section>
    <section id="section_31">
        <div id="section_31_scroll" class="headline_center_div">
            <div class="headlines_wrapper"><h1><span style="color:#76C6E8">The</span> LOGISTICS</h1>
                <div id="headline_blue_underline_7" class="headline_blue_underline"></div>
            </div>
        </div>
        <div class="section_31_content">
            <div class="section_31_text_wrapper"><p> The logistical set up regarding supply and delivery of Election
                    Materials is vital. Emptor International is much aware of the importance of delivery on time and
                    thus our partners are carefully chosen to meet this important task. To ensure a successful supply of
                    Election Materials it is important to plan and coordinate every single detail with manufacturers,
                    transport agents and the consignee – thus creating the right synergy.<br><br> Emptor International
                    have a solid logistical network Worldwide with project orientated freight forwarders. Same
                    forwarders are all working and approved with UN, UNICEF and other international organizations - and
                    are all used to handle time sensitive transports in remote areas. Your project is determined by its
                    specific time frame and conditions with regards to transportation. Emptor International is prepared
                    to provide a customized solution to meet such conditions.<br><br> We are pleased to offer the
                    following transport solutions:<br><br> <strong>By air:<br></strong> full charter / part charter /
                    commercial air freight<br><br> <strong>By sea:<br></strong> full charter / part charter / commercial
                    sea freight<br><br> <strong>Alternatives services:<br></strong> sea/air solution, road transport,
                    courier service<br><br></p></div>
            <img src="<?php echo get_template_directory_uri(); ?>/img/logistics.jpg" alt="Emptor International logistics image" class="logistics_image"></div>
        <div class="section_31_tablet_wrapper">
            <div class="section_31_content_tablet">
                <div class="section_31_text_wrapper">
                    <div class="section_31_text_wrapper_two_upper">
                        <div class="section_3_1_text_left"><p> The logistical set up regarding supply and delivery of
                                Election Materials is vital. Emptor International is much aware of the importance of
                                delivery on time and thus our partners are carefully chosen to meet this important
                                task.To ensure a successful supply of Election Materials it is important to plan and
                                coordinate every single detail with manufacturers, transport agents and the consignee –
                                thus creating the right synergy.<br><br> Emptor International have a solid logistical
                                network Worldwide with project orientated freight forwarders. Same forwarders are all
                                working and approved with UN, UNICEF and other international organizations - and are all
                                used to handle time sensitive transports in remote areas.</p></div>
                        <div class="section_3_1_text_right"><p> Your project is determined by its specific time frame
                                and conditions with regards to transportation. Emptor International is prepared to
                                provide a customized solution to meet such conditions.<br><br> We are pleased to offer
                                the following transport solutions:<br><br></p>
                            <p><strong>By air:</strong> full charter / part charter / commercial air freight<br><br>
                                <strong>By sea:</strong> full charter / part charter / commercial sea freight<br><br>
                                <strong>Alternatives services:</strong> sea/air solution, road transport, courier
                                service</p></div>
                    </div>
                    <p></p></div>
                <img src="<?php echo get_template_directory_uri(); ?>/img/logistics.jpg" alt="Emptor International logistics image" class="logistics_image"></div>
        </div>
    </section>
    <section id="section_4">
        <div id="section_4_scroll" class="headline_center_div">
            <div class="headlines_wrapper"><h1><span style="color:#76C6E8">MEET</span> THE TEAM</h1>
                <div id="headline_blue_underline_3" class="headline_blue_underline"></div>
            </div>
        </div>
        <div id="section_4_intro_text"><p> Key members of the supporting team</p></div>
        <div id="section_4_image_wrapper">
            <div class="section_4_individual_wrapper" id="image_1">
                <div class="black">
                    <div id="Jesper" class="section_4_images"></div>
                </div>
                <h2> JESPER HARE HOLM</h2>
                <p class="job_title"> Purchase manager</p>
                <div id="image_blue_underline_1" class="image_blue_underline"></div>
            </div>
            <div class="section_4_individual_wrapper" id="hidden_1">
                <div id="Jesper_1" class="section_4_images"></div>
                <h2> JESPER HARE HOLM</h2>
                <p class="job_title"> Purchase manager</p>
                <div class="image_blue_underline"></div>
                <div class="section_4_hidden_text"><a href="tel:+86 139 1818 7640"><p> +86 139 1818 7640</p></a><a
                            href="mailto:jh@emptor-int.com" target="_top"><p> jh@emptor-int.com</p></a>
                    <div class="section_4_close"><i class="fa fa-times" aria-hidden="true"></i></div>
                </div>
            </div>
            <div class="section_4_individual_wrapper" id="image_2">
                <div class="black">
                    <div id="Morten" class="section_4_images"></div>
                </div>
                <h2> Morten Dixen Zwisler</h2>
                <p class="job_title"> Sales manager</p>
                <div id="image_blue_underline_2" class="image_blue_underline"></div>
            </div>
            <div class="section_4_individual_wrapper" id="hidden_2">
                <div id="Morten_1" class="section_4_images"></div>
                <h2> Morten Dixen Zwisler</h2>
                <p class="job_title"> Sales manager</p>
                <div class="image_blue_underline"></div>
                <div class="section_4_hidden_text"><a href="tel:+86 139 1838 6722"><p> +86 139 1838 6722</p></a><a
                            href="mailto:mz@emptor-int.com" target="_top"><p> mz@emptor-int.com</p></a>
                    <div class="section_4_close"><i class="fa fa-times" aria-hidden="true"></i></div>
                </div>
            </div>
            <div class="section_4_individual_wrapper" id="image_3">
                <div class="black">
                    <div id="Tracy" class="section_4_images"></div>
                </div>
                <h2> TRACY WU</h2>
                <p class="job_title"> Department Manager</p>
                <div id="image_blue_underline_3" class="image_blue_underline"></div>
            </div>
            <div class="section_4_individual_wrapper" id="hidden_3">
                <div id="Tracy_1" class="section_4_images"></div>
                <h2> TRACY WU</h2>
                <p class="job_title"> Department Manager</p>
                <div class="image_blue_underline"></div>
                <div class="section_4_hidden_text"><a href="tel:+86 139 1818 7640"><p> +86 139 1818 7640</p></a><a
                            href="mailto:tw@emptor-int.com" target="_top"><p> tw@emptor-int.com</p></a>
                    <div class="section_4_close"><i class="fa fa-times" aria-hidden="true"></i></div>
                </div>
            </div>
        </div>
    </section>
    <section id="section_5">
        <div id="section_5_scroll" class="headline_center_div">
            <div class="headlines_wrapper"><h1 id="section_5_headertext"><span style="color:#76C6E8">GET</span> IN TOUCH
                </h1>
                <div id="headline_blue_underline_4" class="headline_blue_underline"></div>
            </div>
        </div>
        <div class="kontakt-formular">
            <form name="kontakt-formular" action="<?php echo get_template_directory_uri(); ?>/page-templates/contactForm.php" method="post" id="form">
                <input type="text" name="company" class="feedback-input" placeholder="Company name"/>
                <input type="text" name="name" class="feedback-input" placeholder="Name"/>
                <input type="text" name="mail" class="feedback-input" placeholder="Email"/>
                <input type="text" name="phone" class="feedback-input" placeholder="Phone"/>
                <input type="text" name="subject" class="feedback-input" placeholder="Subject"/>

                <p> How can we help?</p>
                <textarea name="message" id="square_input" class="feedback-input" placeholder="Write your message here..">

                </textarea> 
                <input type="submit" name="submit" value="Send" class="send"/>
            </form>
        </div>
        <a class="contact_info_text">Get our <span style="color:#76C6E8">contact information</span> here!</a></section>
    <?php get_footer();?>
</body>