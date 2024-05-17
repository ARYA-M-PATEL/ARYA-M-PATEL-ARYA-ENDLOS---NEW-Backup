<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<section class="breadcrumb pos-rel bg_img" data-background="<?= base_url('assets/images/bg/breadcrumb_bg.jpg'); ?>" style="background-image: url(&quot;<?= base_url('assets/images/bg/breadcrumb_bg.jpg'); ?>&quot;);">
	<div class="container">
		<div class="breadcrumb__content">
			<h2 class="breadcrumb__title"><?= $breadcumb; ?></h2>
			<ul class="breadcrumb__list clearfix">
				<li class="breadcrumb-item">
					<?= anchor('', 'Home'); ?>
				</li>
				<li class="breadcrumb-item"><?= $breadcumb; ?></li>
			</ul>
		</div>
	</div>
	<div class="breadcrumb__circle">
		<span class="big" data-parallax="{&quot;y&quot; : 100, &quot;scale&quot; : 0.1}" style="transform:translate3d(0px, 21.979px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg) scaleX(0.832) scaleY(0.832) scaleZ(0.832); -webkit-transform:translate3d(0px, 21.979px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg) scaleX(0.832) scaleY(0.832) scaleZ(0.832); "></span>
		<span class="small" data-parallax="{&quot;y&quot; : 100, &quot;scale&quot; : 0.1}" style="transform:translate3d(0px, 21.979px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg) scaleX(0.832) scaleY(0.832) scaleZ(0.832); -webkit-transform:translate3d(0px, 21.979px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg) scaleX(0.832) scaleY(0.832) scaleZ(0.832); "></span>
	</div>
	<div class="breadcrumb__shape">
		<div class="shape shape--1">
			<div class="shape-inner" data-parallax="{&quot;x&quot;:-50,&quot;y&quot;:80}" style="transform:translate3d(-10.96px, 17.583px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg) scaleX(1) scaleY(1) scaleZ(1); -webkit-transform:translate3d(-10.96px, 17.583px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg) scaleX(1) scaleY(1) scaleZ(1); ">
				<?= img('assets/images/shape/br_shape1.png'); ?>
			</div>
		</div>
		<div class="shape shape--2">
			<div class="shape-inner" data-parallax="{&quot;x&quot;:50,&quot;y&quot;:-90}" style="transform:translate3d(10.99px, -19.751px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg) scaleX(1) scaleY(1) scaleZ(1); -webkit-transform:translate3d(10.99px, -19.751px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg) scaleX(1) scaleY(1) scaleZ(1); ">
				<?= img('assets/images/shape/br_shape2.png'); ?>
			</div>
		</div>
	</div>
</section>