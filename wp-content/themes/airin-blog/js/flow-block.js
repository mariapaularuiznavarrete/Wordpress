/* ------------------------------------------------------------------------------
* Author: DMCWebZone
* Author URL: https://web-zone.org
* Copyright © Airin Blog by DMCWebZone. All Rights Reserved.
* @package Airin Blog
* Description: Calm blocks (Fluently movement of blocks)
* ------------------------------------------------------------------------------ */

'use strict';

function onFlow(flow) {

	flow.forEach(change => {
	  if (change.isIntersecting) {
		change.target.classList.add('airinblog-css-show-block');
	  }
	});
}

let opt = {threshold: [0.1]};
let obs = new IntersectionObserver(onFlow, opt);
let el = document.querySelectorAll(' \
	.airinblog-css-owl-width-slider, \
	.airinblog-css-cat-grid, \
	.airinblog-css-home-narrow-grid-column, \
	.airinblog-css-home-vertical-grid-post-first, \
	.airinblog-css-home-vertical-grid-post-small, \
	[class^="airinblog-css-home-three-grid-main-"], \
	[class^="airinblog-css-home-five-grid-main-"], \
	[class^="airinblog-css-home-slide-big-main-"], \
	[class^="airinblog-css-home-slide-mid-partial-main-"], \
	[class^="airinblog-css-home-slide-mid-two-main-"], \
	[class^="airinblog-css-home-slide-mid-three-main-"]'
);
for (let e of el) {
	obs.observe(e);
}
