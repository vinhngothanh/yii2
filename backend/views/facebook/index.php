<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Product
			<small></small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
			<li class="active">Product</li>
		</ol>
	</section>

	<!-- Main content -->
	<section class="content">
		<!-- Small boxes (Stat box) -->
		<div class="row">
			<div class="col-xs-12">
				<div class="box">
					<!-- Chat box -->
					<div class="box box-success">
						<div class="box-header">
							<i class="fa fa-comments-o"></i>

							<h3 class="box-title">Chat</h3>

							<div class="box-tools pull-right" data-toggle="tooltip" title="Status">
								<div class="btn-group" data-toggle="btn-toggle">
									<button type="button" class="btn btn-default btn-sm active"><i class="fa fa-square text-green"></i>
									</button>
									<button type="button" class="btn btn-default btn-sm"><i class="fa fa-square text-red"></i></button>
								</div>
							</div>
						</div>
						<div class="box-body chat" id="chat-box">


							<?php

							// https://graph.facebook.com/userid_here/picture
							function getAvatar($id){
								$token = 'EAAAAUaZA8jlABAJ2bKMCJvQ6Lks4yKrcEFdm8ouIOVnkymoWp6lEmMXWpYsTcaLGhjoLsG3W3psjrIZBSHVcappsLZBix0q16UnotZCGmKFPqp8K7dveLtZCXK6gxOBgMo4xj0avCALeir3lkHAPl8w0CZCJF1tdKW3rAOMnsZAtQZDZD';
								return json_decode(file_get_contents('https://graph.facebook.com/'.$id.'/picture?type=large&width=60&height=60&redirect=false'),true)['data']['url'];
							}

							function getDt($id){
								$token = 'EAAAAUaZA8jlABAJ2bKMCJvQ6Lks4yKrcEFdm8ouIOVnkymoWp6lEmMXWpYsTcaLGhjoLsG3W3psjrIZBSHVcappsLZBix0q16UnotZCGmKFPqp8K7dveLtZCXK6gxOBgMo4xj0avCALeir3lkHAPl8w0CZCJF1tdKW3rAOMnsZAtQZDZD';
								return json_decode(file_get_contents('https://graph.facebook.com/'.$id.'/comments?fields=message,from,comment_count,parent,attachment&limit=1500&access_token='.$token),true);
							}

							$arr = getDt('1094916933927327_1708435035908844');
							$i = 0;
							while($i<count($arr['data'])){
								if(!array_key_exists('parent',$arr['data'][$i])){
									?>
									<!-- chat item -->
									<div class="item">
										<img src="<?=getAvatar($arr['data'][$i]['from']['id'])?>" alt="user image" class="online">
										<p class="message">
											<a href="#" class="name">
												<small class="text-muted pull-right"><i class="fa fa-clock-o"></i> 2:15</small>
												<?=$arr['data'][$i]['from']['name']?>
											</a>
											<?=$arr['data'][$i]['message'] ?>
										</p>
										<?php
										echo '<div class="attachment">';
										$parentId = $arr['data'][$i]['id'];
										foreach(array_filter($arr['data'], function($v) use ($parentId){return isset($v['parent']['id']) && $v['parent']['id'] ==  $parentId;}, ARRAY_FILTER_USE_BOTH) as $key){
											?>
											<!-- <div class="attachment"> -->
											<div class="item">
												<img src="<?=getAvatar($key['from']['id'])?>" alt="user image" class="offline">
												<p class="message">
													<a href="#" class="name">
														<small class="text-muted pull-right"><i class="fa fa-clock-o"></i> 5:15</small>
														<?=$key['from']['name'] ?>
													</a>
													<?=$key['message'] ?>
												</p>
											</div>
											<!-- </div> -->
											<?php 
										}
										echo '  </div></div>
										<!-- /.attachment -->';
									}
									$i++;
									?>
									<!-- /.item -->
									<?php } ?>


								</div>
								<!-- /.chat -->
								<div class="box-footer">
									<div class="input-group">
										<input class="form-control" placeholder="Type message...">

										<div class="input-group-btn">
											<button type="button" class="btn btn-success"><i class="fa fa-plus"></i></button>
										</div>
									</div>
								</div>
							</div>
							<!-- /.box (chat box) -->

						</div>

						<!-- /.box -->
					</div>
				</div>
				<!-- /.row -->
				</section>
		<!-- /.content -->
	</div>

