<?php

get_header('single');
the_post();
?>

    <!--post start-->
    <div class="container">
        <div class="row">
            <div class="<?php blog_sidebar_check(); ?>">

                <div class="row">
                    <div class="col-md-12">
                        <article class="post">
                            <!--<div class="post-img">-->
                                <!--<a href="#"><img class="img-fluid" src="assets/img/b1.jpg" alt=""/></a>-->
                            <!--</div>-->
                            <?php get_template_part('templates/single-post/title','meta'); ?>
                            <div class="post-blog">
                                <?php
                                the_content();
                                ?>

                                <!-- tags and share start-->
                                <div class="meta-row">
                                    <div class="meta-tags">
                                        <?php
                                        the_tags('<span>Tags:</span>','');
                                        ?>
                                    </div>
                                    <div class="meta-share">
                                        <div class="social-links">
                                            <a href="#"><i class="fa fa-facebook"></i></a>
                                            <a href="#"><i class="fa fa-twitter"></i></a>
                                            <a href="#"><i class="fa fa-google-plus"></i></a>

                                        </div>
                                        <div class="share-btn"><i class="fa fa-share-alt pr-2"></i> Share</div>
                                    </div>
                                </div>
                                <!-- tags and share end-->

                                <!--custom pagination-->
                                <div class="row">
                                    <div class="col-12">
                                        <div class="custom-pagination custom-pagination-post">
                                            <div class="older full-">
                                                <?php
                                                previous_post_link('%link','<span class="next-post-pagination">
                                                    %title
                                                </span><i class="float-right fa fa-angle-right"></i>');
                                                ?>
                                            </div>
                                            <div class="newer">

                                                <?php
                                                previous_post_link('%link','<i class="fa fa-angle-left"></i><span class="prev-post-pagination">
                                                    %title
                                                </span>');
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--custom pagination-->

                                <!--author info start-->
                                <div class="post-author-info">
                                    <div class="author-thumb">
                                        <img class="img-fluid" src="assets/img/author.jpg" alt=""/>
                                    </div>
                                    <div class="author-details mt-3">
                                        <h5><a href="#">Maria Garcia</a></h5>
                                        <p>Sit amet cursus nisl aliquam. Aliquam et elit eu nunc rhoncus viverra quis at felis. Sed do. Lorem ipsum dolor sit amet, consectetur Nulla fringilla purus Lorem ipsum dosectetur adipisicing elit at leo dignissim congue.</p>
                                        <div class="s-links">
                                            <a href="#"><i class="fa fa-facebook"></i></a>
                                            <a href="#"><i class="fa fa-twitter"></i></a>
                                            <a href="#"><i class="fa fa-google-plus"></i></a>
                                            <a href="#"><i class="fa fa-pinterest"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <!--author info end-->

                            </div>
                        </article>

                        <!--related post start-->
                        <div class="row related-post">
                            <div class="col-12 text-center">
                                <h2 class="post-single-title">You may also like</h2>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <article class="post">
                                    <div class="post-img">
                                        <a href="#"><img class="img-fluid" src="assets/img/b2.jpg" alt=""></a>
                                    </div>
                                    <div class="post-header">
                                        <h3><a href="#">Alicia Keys is on the Picturesque Trip of a Lifetime in Egypt</a></h3>
                                        <div class="post-meta">
                                            <ul class="cat">
                                                <li><a href="#">fashion</a></li>
                                            </ul>
                                            <div class="separation"></div>
                                            <div class="post-date"><a href="#">28th June 2018</a></div>
                                        </div>
                                    </div>

                                </article>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <article class="post">
                                    <div class="post-img">
                                        <a href="#"><img class="img-fluid" src="assets/img/b3.jpg" alt=""></a>
                                    </div>
                                    <div class="post-header">
                                        <h3><a href="#">Alicia Keys is on the Picturesque Trip of a Lifetime in Egypt</a></h3>
                                        <div class="post-meta">
                                            <ul class="cat">
                                                <li><a href="#">Travel</a></li>
                                            </ul>
                                            <div class="separation"></div>
                                            <div class="post-date"><a href="#">28th June 2018</a></div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <article class="post">
                                    <div class="post-img">
                                        <a href="#"><img class="img-fluid" src="assets/img/b4.jpg" alt=""></a>
                                    </div>
                                    <div class="post-header">
                                        <h3><a href="#">Alicia Keys is on the Picturesque Trip of a Lifetime in Egypt</a></h3>
                                        <div class="post-meta">
                                            <ul class="cat">
                                                <li><a href="#">lifestyle</a></li>
                                            </ul>
                                            <div class="separation"></div>
                                            <div class="post-date"><a href="#">28th June 2018</a></div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        </div>
                        <!--related post start-->

                        <!--comments area start-->
                        <div class="comments">
                            <h2 class="comments-title"> Comments</h2>
                            <ul>
                                <li class="comment ">
                                    <article class="comment-body">
                                        <footer class="comment-meta">
                                            <div class="comment-author">
                                                <img alt="" src="assets/img/a0.jpg" class="">
                                                <b class="fn">
                                                    <a href="#" rel="external nofollow" class="url">
                                                        Chris Ames
                                                    </a>
                                                </b>
                                                <span class="says">says:</span>
                                            </div>
                                            <!-- .comment-author -->

                                            <div class="comment-metadata">
                                                <a href="#">
                                                    <time datetime="2018-09-02T12:17:07+00:00">
                                                        September 2, 2018 at 12:17 pm
                                                    </time>
                                                </a>
                                            </div><!-- .comment-metadata -->

                                        </footer><!-- .comment-meta -->

                                        <div class="comment-content">
                                            <p>Hi, this is a comment.<br>
                                                To get started with moderating, editing, and deleting comments, please visit
                                                the Comments screen in the dashboard.<br>
                                                Commenter avatars come from <a href="#">Gravatar</a>.</p>
                                        </div><!-- .comment-content -->

                                        <div class="reply">
                                            <a rel="nofollow" class="comment-reply-link" href="#" >Reply</a>
                                        </div>
                                    </article><!-- .comment-body -->
                                    <ul class="children">
                                        <li class="comment ">
                                            <article class="comment-body">
                                                <footer class="comment-meta">
                                                    <div class="comment-author ">
                                                        <img alt="" src="assets/img/a1.jpg" class="" >
                                                        <b class="fn">
                                                            <a href="#" rel="external nofollow" class="url">Jones Brown</a>
                                                        </b>
                                                        <span class="says">says:</span>
                                                    </div><!-- .comment-author -->

                                                    <div class="comment-metadata">
                                                        <a href="#">
                                                            <time datetime="2018-10-16T13:13:25+00:00">
                                                                October 16, 2018 at 1:13 pm
                                                            </time>
                                                        </a>
                                                    </div><!-- .comment-metadata -->

                                                </footer><!-- .comment-meta -->

                                                <div class="comment-content">
                                                    <p>Hi, this is a comment.<br>
                                                        To get started with moderating, editing, and deleting comments,
                                                        please visit the Comments screen in the dashboard.<br>
                                                        Commenter avatars</p>
                                                </div><!-- .comment-content -->

                                                <div class="reply">
                                                    <a rel="nofollow" class="comment-reply-link" href="#">Reply</a>
                                                </div>
                                            </article><!-- .comment-body -->
                                        </li><!-- #comment-## -->
                                    </ul><!-- .children -->
                                </li><!-- #comment-## -->
                            </ul>
                        </div>
                        <!--comments area end-->

                        <!--comment form start-->
                        <div class="comment-respond">
                            <h3 class="comment-reply-title">
                                Leave a Comment
                            </h3>

                            <form role="form" class="comment-form">
                                <div class="row">
                                    <div class=" col-md-4">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Name*" required="">
                                        </div>
                                    </div>
                                    <div class=" col-md-4">
                                        <div class="form-group ">
                                            <input type="email" class="form-control" placeholder="Email*" required="">
                                        </div>
                                    </div>
                                    <div class=" col-md-4">
                                        <div class="form-group ">
                                            <input type="text" class="form-control" placeholder="Website" required="">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="controls">
                                        <textarea id="message" rows="5" placeholder="Comments*" class="form-control" required=""></textarea>
                                    </div>
                                </div>
                                <p>Your email address will not be published. Required fields are marked *</p>
                                <div class="text-center mt-md-5">
                                    <button type="submit" class="btn btn-black">Send</button>
                                </div>
                            </form>
                        </div>
                        <!--comment form end-->
                    </div>
                </div>
            </div>

            <!-- Sidebar area start -->
            <?php
            get_sidebar();
            ?>
            <!-- Sidebar area end -->
        </div>
    </div>
    <!--post end-->

    <?php
get_footer();

?>