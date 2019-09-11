<!--Blog Page-->
<div class="blog-page" data-simplebar>
			<nav class="blog-nav">
            	<a href="#" data-tooltip="prev" data-position="left">
					<i class="fas fa-long-arrow-alt-left"></i>
				</a>
            	<a href="{{ URL('/#blog') }}">
					<i class="fas fa-bars"></i>
				</a>
            	<a href="#" data-tooltip="next" data-position="right">
					<i class="fas fa-long-arrow-alt-right"></i>
				</a>
            </nav>
			<div class="blog-image">
				<img src="{{ asset('frontend') }}/img/blog/blog-page-img.jpg" alt="">
			</div>
			<div class="row blog-container">
				<div class="col-md-10 offset-md-1">
						
					<!-- Heading -->
					<div class="blog-heading pt-70 pb-100">
						<h2>Road to success</h2>
						<span><i class="fas fa-home"></i><a href="#">Brand</a></span>
						<span><i class="fas fa-comment"></i><a href="#">5 comments</a></span>
						<span><i class="fas fa-calendar-alt"></i>January 06, 2019</span>
					</div>

					<!-- Content -->
					<div class="blog-content">
						<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC.</p>
						<p>This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
						<blockquote>Lorem Ipsum is simply dummy text of the Lorem has been the industry's standard dummy text ever.
							<span><img src="{{ asset('frontend') }}/img/user-photo.jpg" alt=""> Mark Johnson</span>
						</blockquote>
						<p>Because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?"Or randomised words which don't look even slightly believable. If you aregoing to use a passage of Lorem Ipsum, you need to be sure</p>
					</div>

					<!-- Comments -->
					<div class="blog-comments mt-100 mb-100">
						<div class="header-box mb-50">
							<h3>Comments</h3>
						</div>
						<ul>
							<li>
								<div class="author-img">
									<img src="{{ asset('frontend') }}/img/blog/authors/author-1.png" alt="">
								</div>
								<div class="comment-text">
									<a href="#"><i class="fas fa-reply"></i>Reply</a>
									<h4>Alex Doe</h4>
									<span>Aug 15, 2018 at 8:11 am</span>
									<p>Morbi ut faucibus nulla, at fringilla est. Morbi lacinia sagittis purus.</p>
								</div>
								<ul>
									<li>
										<div class="author-img">
											<img src="{{ asset('frontend') }}/img/blog/authors/author-2.png" alt="">
										</div>
										<div class="comment-text">
											<h4>Kriss Doe</h4>
											<span>Aug 15, 2018 at 8:11 am</span>
											<p>Morbi ut faucibus nulla, at fringilla est. Morbi lacinia sagittis purus, nec dapibus felis tempus in. Quisque eget elementum sem, cursus tristique orci.</p>
										</div>
									</li>
								</ul>
							</li>
								
							<li>
								<div class="author-img">
									<img src="{{ asset('frontend') }}/img/blog/authors/author-3.png" alt="">
								</div>
								<div class="comment-text">
									<a href="#"><i class="fas fa-reply"></i>Reply</a>
									<h4>Emma Doe</h4>
									<span>Aug 15, 2018 at 8:11 am</span>
									<p>Morbi ut faucibus nulla, at fringilla est. Morbi lacinia sagittis purus.</p>
								</div>
							</li>
						</ul>
					</div>

					<!--Blog Form-->
					<div class="header-box mb-50">
						<h3>Leave a comment</h3>
					</div>
					
					<div class="contact-form mb-100">
                        <form method="post" class="box contact-valid" id="contact-form">
							<div class="row">
                            	<div class="col-lg-6 col-sm-12">
                               		<input type="text" name="name" id="name" class="form-control" placeholder="Name *">
                            	</div>
                            	<div class="col-lg-6 col-sm-12">
                               		<input type="email" name="email" id="email" class="form-control" placeholder="Email *">
                            	</div>
                            	<div class="col-lg-12 col-sm-12">
                                	<textarea class="form-control" name="note"  id="note" placeholder="Your Message"></textarea>
                            	</div>
                             	<div class="col-lg-12 col-sm-12 text-center">
                               		<button type="submit" class="btn-st">Send Message</button>
                               		<div id="loader">
                              			<i class="fas fa-sync"></i>
                               		</div>
                            	</div>
								<div class="col-lg-12 col-sm-12">
                            		<div class="error-messages">
                                		<div id="success">
											<i class="far fa-check-circle"></i>Thank you, your message has been sent.
										</div>
                                		<div id="error">
											<i class="far fa-times-circle"></i>Error occurred while sending email. Please try again later.
										</div>
									</div>
                            	</div>
							</div>
                    	</form>
                   	</div>
				</div>
			</div>
		</div>