
 <?php include('inc/header.php'); ?>



				<!-- Content wrapper start -->
				<div class="content-wrapper">

					<!-- Row starts -->
					<div class="row gutters">
						<div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
							<!-- Row start -->
							<div class="row gutters">
								<div class="col-xl-6 col-lg-4 col-md-4 col-sm-4 col-12">
									<div class="info-tiles">
										<div class="info-icon">
											<i class="icon-account_circle"></i>
										</div>
										<div class="stats-detail">
                      <?php
                     $query = mysqli_query($conn, "SELECT * FROM family");
                     if ($query)  {
                       $row = mysqli_num_rows($query);
                          if ($row){
                              echo '

                     	<h3> '.$row.' عائلات</h3>
 
                      ';
                       }
                     }
                     ?>
											<p>اجمالى العائلات</p>
										</div>
									</div>
								</div>
								<div class="col-xl-6 col-lg-4 col-md-4 col-sm-4 col-12">
									<div class="info-tiles">
										<div class="info-icon">
											<i class="icon-watch_later"></i>
										</div>
										<div class="stats-detail">
											<h3>450</h3>
											<p>ساعات العمل</p>
										</div>
									</div>
								</div>
								<div class="col-xl-6 col-lg-4 col-md-4 col-sm-4 col-12">
									<div class="info-tiles">
										<div class="info-icon">
											<i class="icon-visibility"></i>
										</div>
										<div class="stats-detail">
											<h3>7500</h3>
											<p>المشاهدة</p>
										</div>
									</div>
								</div>
								<div class="col-xl-6 col-lg-4 col-md-4 col-sm-4 col-12">
									<div class="info-tiles">
										<div class="info-icon">
											<i class="icon-shopping_basket"></i>
										</div>
										<div class="stats-detail">
											<h3>$300k</h3>
											<p>اجمالى المبلغ</p>
										</div>
									</div>
								</div>
								<div class="col-xl-6 col-lg-4 col-md-4 col-sm-4 col-12">
									<div class="info-tiles">
										<div class="info-icon secondary">
											<i class="icon-check_circle"></i>
										</div>
										<div class="stats-detail">
											<h3>250</h3>
											<p>المدفوعات</p>
										</div>
									</div>
								</div>
								<div class="col-xl-6 col-lg-4 col-md-4 col-sm-4 col-12">
									<div class="info-tiles">
										<div class="info-icon secondary">
											<i class="icon-archive"></i>
										</div>
										<div class="stats-detail">
											<h3>2500</h3>
											<p>المتاح</p>
										</div>
									</div>
								</div>
							</div>
							<!-- Row ends -->
						</div>

					</div>
					<!-- Row end -->

					<!-- Row starts -->
					<div class="row gutters">
						<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
							<div class="card h-420">
								<div class="card-header">
									<div class="card-title">المناطق المشاركة</div>
								</div>
								<div class="card-body">
									<div class="row justify-content-center">
										<div class="col-xl-10">
											<div id="world-map-markers2" class="chart-height-md1"></div>
										</div>
									</div>
									<div class="row gutters justify-content-center">
										<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-6">
											<div class="info-stats">
												<span class="info-label"></span>
												<p class="info-title">عدد المناطق</p>
												<h3 class="info-total">90</h3>
											</div>
										</div>
										<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-6">
											<div class="info-stats">
												<span class="info-label"></span>
												<p class="info-title">عدد المناطق الفعلية</p>
												<h3 class="info-total">8000</h3>
											</div>
										</div>
										<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-6">
											<div class="info-stats">
												<span class="info-label secondary"></span>
												<p class="info-title">عدد المناطق المسجلة</p>
												<h3 class="info-total">75</h3>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
							<div class="card h-420">
								<div class="card-header">
									<div class="card-title">تقارير</div>
								</div>
								<div class="card-body">
									<div class="chartist threshold-scheme">
										<div class="thresholdChart"></div>
									</div>
									<!-- Row starts -->
									<div class="row gutters">
										<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-6">
											<div class="overall-earnings">
												<div class="earnings-icon">
													<i class="icon-local_airport"></i>
												</div>
												<div class="earnings-stats">
													<p>اجمالى حجزات ترحيل الجثمان</p>
													<h3>75,000</h3>
												</div>
											</div>
										</div>
										<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-6">
											<div class="overall-earnings">
												<div class="earnings-icon dark">
													<i class="icon-star"></i>
												</div>
												<div class="earnings-stats">
													<p>المشاركات الداخلية</p>
													<h3>95,000</h3>
												</div>
											</div>
										</div>
										<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
											<div class="overall-earnings">
												<div class="earnings-icon secondary">
													<i class="icon-local_taxi"></i>
												</div>
												<div class="earnings-stats">
													<p>المصاريف الداخلية للحوادث</p>
													<h3>32,000</h3>
												</div>
											</div>
										</div>
									</div>
									<!-- Row ends -->
								</div>
							</div>
						</div>
					</div>
					<!-- Row ends -->

					<!-- Row start -->
					<div class="row gutters">

						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
							<div class="card h-320">
								<div class="card-header">
									<div class="card-title">اعضاء الصندوق</div>
								</div>
								<div class="card-body">
									<div class="customScroll5">
										<div class="top-agents-container">
											<div class="top-agent">
												<img src="img\user.png" class="avatar" alt="Agent">
												<div class="agent-details">
													<h6> محمود رجب</h6>
													<div class="agent-score">
														<div class="progress">
															<div class="progress-bar bg-primary" role="progressbar" style="width: 87%" aria-valuenow="87" aria-valuemin="0" aria-valuemax="100"></div>
														</div>
														<div class="points">
															<div class="left">مدير الصندوق #1</div>
															<div class="right">9,800 Ratings</div>
														</div>
													</div>
												</div>
											</div>
											<div class="top-agent">
												<img src="img\user22.png" class="avatar" alt="Agent">
												<div class="agent-details">
													<h6>مفرح</h6>
													<div class="agent-score">
														<div class="progress">
															<div class="progress-bar bg-primary" role="progressbar" style="width: 76%" aria-valuenow="76" aria-valuemin="0" aria-valuemax="100"></div>
														</div>
														<div class="points">
															<div class="left">خطيب</div>
															<div class="right">7,500 Ratings</div>
														</div>
													</div>
												</div>
											</div>
											<div class="top-agent">
												<img src="img\user6.png" class="avatar" alt="Agent">
												<div class="agent-details">
													<h6>محمد</h6>
													<div class="agent-score">
														<div class="progress">
															<div class="progress-bar bg-secondary" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
														</div>
														<div class="points">
															<div class="left">Rank #3</div>
															<div class="right">4,200 Ratings</div>
														</div>
													</div>
												</div>
											</div>
											<div class="top-agent">
												<img src="img\user20.png" class="avatar" alt="Agent">
												<div class="agent-details">
													<h6>اسلام</h6>
													<div class="agent-score">
														<div class="progress">
															<div class="progress-bar bg-secondary" role="progressbar" style="width: 58%" aria-valuenow="58" aria-valuemin="0" aria-valuemax="100"></div>
														</div>
														<div class="points">
															<div class="left">Rank #4</div>
															<div class="right">3,800 Ratings</div>
														</div>
													</div>
												</div>
											</div>
											<div class="top-agent">
												<img src="img\user13.png" class="avatar" alt="Agent">
												<div class="agent-details">
													<h6>عبدالله</h6>
													<div class="agent-score">
														<div class="progress">
															<div class="progress-bar bg-primary" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
														</div>
														<div class="points">
															<div class="left">Rank #5</div>
															<div class="right">1,200 Ratings</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					<!-- Row ends -->
				</div>
				<!-- Content wrapper end -->
			</div>
			<!-- *************
				************ Main container end *************
			************* -->

<?php include('inc/footer.php'); ?>
