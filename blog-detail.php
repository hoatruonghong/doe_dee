<?php
if(is_array($job)){
    extract($job);
}
?>
<!-- Blog Section Start -->
        <section class="blog-details section-padding white-bg pt-100">
            <div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-8 mobi-mb-50">
						<div class="blog-post column-1 mb-50 mr-minus-30">
							<div class="blog-content">
								<div class="date-box clearfix mb-25">
									<div class="name-comment">
										<h2 class="text-capitalize"><?php if(isset($title)&&($title!="")) echo $title;?></h2>
										<h5 class="pull-left no-margin"><?php if(isset($time)&&($time!="")) echo $time;?></h5>
									</div>
								</div>
                                <div>
                                <?php if(isset($content)&&($content!="")) echo $content;?>
                                </div>
							</div>
							<div class="author-box bg-color-3">
								<div class="author-img pull-left">
									<img src="assets/img/blog/comment/1.png" alt="Author" />
								</div>
								<div class="text pt-5">
									<h3 class="text-capitalize no-margin">Alan Carlson</h3>
									<p>Author</p>
									<div class="social-icon text-left">
										<ul class="clearfix d-inblock">
											<li><a href="https://www.facebook.com/regaltheme/" target="_blank"><i class="zmdi zmdi-facebook"></i></a></li>
											<li><a href="https://twitter.com/regaltheme" target="_blank"><i class="zmdi zmdi-twitter"></i></a></li>
											<li><a href="http://www.instagram.com" target="_blank"><i class="zmdi zmdi-instagram"></i></a></li>
											<li><a href="https://www.pinterest.com/regaltheme/" target="_blank"><i class="zmdi zmdi-pinterest"></i></a></li>
										</ul>
									</div>
									<!-- Change your social media link -->
								</div>
								<p class="pt-30">But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain w born and I will give you a complete account of the system, and expound the actual teachings of the gplorer of the truth, the master-builder of human happiness.</p>
							</div>
						</div>
						<!-- /.Post Details -->
						<div class="comment-area mr-minus-30">
							<div class="comment-list mb-60">
								<div class="comment-title mb-40">
									<h5 class="mb-5">Comments</h5>
									<div class="horizontal-line">
										<hr class="top" />
										<hr class="bottom" />
									</div>
								</div>
								<ul>
									<li>
										<div class="author-img pull-left">
											<img src="assets/img/blog/comment/1.png" alt="Author" />
										</div>
										<div class="text pt-5">
											<h5 class="text-capitalize">Selina Gomez</h5>
											<p>But I must explain to you how all this mistaken idea of denouncing pleasure praising pain w born and I will give you a complete account of the system, </p>
											<h6>Mar 05 2017 <span>|</span> <a href="#">Reply</a></h6>
										</div>
									</li>
									<li>
										<div class="author-img pull-left">
											<img src="assets/img/blog/comment/2.png" alt="Author" />
										</div>
										<div class="text pt-5">
											<h5 class="text-capitalize">Daniel Rice</h5>
											<p>But I must explain to you how all this mistaken idea of denouncing pleasure praising pain w born and I will give you a complete account of the system, </p>
											<h6>Mar 05 2017 <span>|</span> <a href="#">Reply</a></h6>
										</div>
									</li>
									<li>
										<div class="author-img pull-left">
											<img src="assets/img/blog/comment/3.png" alt="Author" />
										</div>
										<div class="text pt-5">
											<h5 class="text-capitalize">Alan Roberts</h5>
											<p>But I must explain to you how all this mistaken idea of denouncing pleasure praising pain w born and I will give you a complete account of the system, </p>
											<h6>Mar 05 2017 <span>|</span> <a href="#">Reply</a></h6>
										</div>
									</li>
								</ul>
							</div>
							<div class="comment-box">
								<div class="comment-title mb-40">
									<h5 class="mb-5">leave a Comment</h5>
									<div class="horizontal-line">
										<hr class="top" />
										<hr class="bottom" />
									</div>
								</div>
								<form class="custom-input" action="#">
									<div class="row">
										<div class="col-xs-12 col-sm-6">
											<input type="text" name="name" placeholder="Your Name" />
										</div>
										<div class="col-xs-12 col-sm-6">
											<input type="email" name="email" placeholder="Email" />
										</div>
									</div>
									<input type="text" name="website" placeholder="Website" />
									<textarea name="message" id="comment" rows="3" placeholder="Comment"></textarea>
									<button class="btn" type="submit" name="submit">Submit</button>
								</form>
							</div>
						</div>
						<!-- /.Comments Area End -->
					</div>
					<div class="col-xs-12 col-sm-4">
						<div class="sidebar pl-50 white-bg">
							<div class="widget mb-45">
								<div class="widget-title mb-30">
									<h5 class="mb-5">Search</h5>
									<div class="horizontal-line">
										<hr class="top" />
										<hr class="bottom" />
									</div>
								</div>
								<div class="search-box">
									<form action="#">
										<input type="text" name="search" placeholder="Type here..." />
										<button type="submit"><i class="zmdi zmdi-search"></i></button>
									</form>
								</div>
							</div>
							<!-- /.Search Widget End -->
							<div class="widget mb-45">
								<div class="widget-title mb-30">
									<h5 class="mb-5">Recent posts</h5>
									<div class="horizontal-line">
										<hr class="top" />
										<hr class="bottom" />
									</div>
								</div>
								<div class="recent-post">
									<ul>
										<li>
											<div class="thumb pull-left mr-20">
												<a href="blog-details.html">
													<img src="assets/img/blog/sidebar/1.jpg" alt="Post Thumb" />
												</a>
											</div>
											<div class="text">
												<h6>26 March</h6>
												<a href="blog-details.html"><h5 class="mb-5">Photo Effect Tutorials</h5></a>
												<p>By : Asraf khan</p>
											</div>
										</li>
										<li>
											<div class="thumb pull-left mr-20">
												<a href="blog-details.html">
													<img src="assets/img/blog/sidebar/2.jpg" alt="Post Thumb" />
												</a>
											</div>
											<div class="text">
												<h6>26 March</h6>
												<a href="blog-details.html"><h5 class="mb-5">Photo Effect Tutorials</h5></a>
												<p>By : Asraf khan</p>
											</div>
										</li>
										<li>
											<div class="thumb pull-left mr-20">
												<a href="blog-details.html">
													<img src="assets/img/blog/sidebar/3.jpg" alt="Post Thumb" />
												</a>
											</div>
											<div class="text">
												<h6>26 March</h6>
												<a href="blog-details.html"><h5 class="mb-5">Photo Effect Tutorials</h5></a>
												<p>By : Asraf khan</p>
											</div>
										</li>
									</ul>
								</div>
							</div>
							<!-- /.Recent Post Widget End -->
							<div class="widget mb-45">
								<div class="widget-title mb-30">
									<h5 class="mb-5">Categories</h5>
									<div class="horizontal-line">
										<hr class="top" />
										<hr class="bottom" />
									</div>
								</div>
								<div class="category">
									<ul>
										<li><a href="javascript:void(0)">Journey <span>(10)</span></a></li>
										<li><a href="javascript:void(0)">Design <span>(12)</span></a></li>
										<li><a href="javascript:void(0)">Development <span>(08)</span></a></li>
										<li><a href="javascript:void(0)">Spotrs <span>(03)</span></a></li>
										<li><a href="javascript:void(0)">Photography <span>(05)</span></a></li>
										<li><a href="javascript:void(0)">Minimal <span>(07)</span></a></li>
									</ul>
								</div>
							</div>
							<!-- /.Categories Widget End -->
							<div class="widget mb-45">
								<div class="widget-title mb-30">
									<h5 class="mb-5">Recent posts</h5>
									<div class="horizontal-line">
										<hr class="top" />
										<hr class="bottom" />
									</div>
								</div>
								<div class="recent-post courses">
									<ul>
										<li>
											<div class="thumb pull-left mr-20">
												<a href="blog-details.html">
													<img src="assets/img/blog/sidebar/4.jpg" alt="Courses Thumb" />
												</a>
											</div>
											<div class="text">
												<a href="courses.html"><h5 class="mb-5">Learn Photoshop 2018</h5></a>
												<h6><span>Date:</span> 15.6.17</h6>
												<h4><span>$</span> 30</h4>
											</div>
										</li>
										<li>
											<div class="thumb pull-left mr-20">
												<a href="blog-details.html">
													<img src="assets/img/blog/sidebar/5.jpg" alt="Courses Thumb" />
												</a>
											</div>
											<div class="text">
												<a href="courses.html"><h5 class="mb-5">Learn Design 2017</h5></a>
												<h6><span>Date:</span> 15.6.17</h6>
												<h4><span>$</span> 50</h4>
											</div>
										</li>
										<li>
											<div class="thumb pull-left mr-20">
												<a href="blog-details.html">
													<img src="assets/img/blog/sidebar/6.jpg" alt="Courses Thumb" />
												</a>
											</div>
											<div class="text">
												<a href="courses.html"><h5 class="mb-5">If you are going to use.</h5></a>
												<h6><span>Date:</span> 15.6.17</h6>
												<h4><span>$</span> 20</h4>
											</div>
										</li>
									</ul>
								</div>
							</div>
							<!-- /.Latest Courses Widget End -->
							<div class="widget mb-45">
								<div class="widget-title mb-30">
									<h5 class="mb-5">Tags</h5>
									<div class="horizontal-line">
										<hr class="top" />
										<hr class="bottom" />
									</div>
								</div>
								<div class="tags">
									<a href="javascript:void(0)">Education</a>
									<a href="javascript:void(0)">Cultura</a>
									<a href="javascript:void(0)">HTML</a>
									<a href="javascript:void(0)">Design</a>
									<a href="javascript:void(0)">Development</a>
									<a href="javascript:void(0)">Music</a>
									<a href="javascript:void(0)">CSS</a>
									<a href="javascript:void(0)">Learning</a>
								</div>
							</div>
							<!-- /.Tags Widget End -->
							<div class="widget">
								<div class="widget-title mb-30">
									<h5 class="mb-5">Upcoming Events</h5>
									<div class="horizontal-line">
										<hr class="top" />
										<hr class="bottom" />
									</div>
								</div>
								<div class="recent-post up-event">
									<ul>
										<li>
											<div class="thumb pull-left mr-20">
												<a href="blog-details.html">
													<img src="assets/img/blog/sidebar/2.jpg" alt="Event Thumb" />
												</a>
											</div>
											<div class="text">
												<h6>26 March</h6>
												<a href="blog-details.html"><h5 class="mb-5">Photo Effect Tutorials</h5></a>
												<p><i class="zmdi zmdi-time"></i> 8.00 pm - 9.00 pm</p>
											</div>
										</li>
										<li>
											<div class="thumb pull-left mr-20">
												<a href="blog-details.html">
													<img src="assets/img/blog/sidebar/5.jpg" alt="Post Thumb" />
												</a>
											</div>
											<div class="text">
												<h6>18 March</h6>
												<a href="blog-details.html"><h5 class="mb-5">If you are going to use.</h5></a>
												<p><i class="zmdi zmdi-time"></i> 8.00 pm - 9.00 pm</p>
											</div>
										</li>
										<li>
											<div class="thumb pull-left mr-20">
												<a href="blog-details.html">
													<img src="assets/img/blog/sidebar/1.jpg" alt="Post Thumb" />
												</a>
											</div>
											<div class="text">
												<h6>15 March</h6>
												<a href="blog-details.html"><h5 class="mb-5">Where can I get some</h5></a>
												<p><i class="zmdi zmdi-time"></i> 8.00 pm - 9.00 pm</p>
											</div>
										</li>
									</ul>
								</div>
							</div>
							<!-- /.Events Widget End -->
						</div>
					</div>
					<!-- /.Sidebar End -->
				</div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </section>
        <!-- Blog Section End -->