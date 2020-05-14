document.addEventListener("DOMContentLoaded", function() {

		const menu = new  Mmenu( "#mmenu",{
			"extensions": [
				"pagedim-black",
				"theme-dark"
			],
			"counters": true,
			"iconPanels": true,
			"navbars": [
				{
					"position": "top",
					"content": [
						"prev",
						"title"
					]
				},
				{
					"position": "bottom",
					"content": [
						'<a href="# " class="social_link" target="_blank"><span class="fa fa-paper-plane" aria-hidden="true"></span></a>',
						'<a href="# " class="social_link" target="_blank"><span class="fa fa-vk" aria-hidden="true"></span></a>',
						'<a href="#"  class="social_link" target="_blank"><span class="fa fa-twitter" aria-hidden="true"></span></a>',
						'<a href="# " class="social_link" target="_blank"><span class="fa fa-facebook" aria-hidden="true"></span></a>'
					]
				}
			]
		} );

		// Get the API
		const api = menu.API;

		var hamburger =  document.querySelector('.hamburger');

		api.bind( "open:start", function(  ) { //is-active
			hamburger.classList.add('is-active');
		});
		api.bind( "close:start", function(  ) {
			hamburger.classList.remove('is-active');
		});


		jQuery('.slick-carousel').slick({
			arrows: false,
			dots: true,
			infinite: true,
			speed: 300,
			slidesToShow: 1,
			adaptiveHeight: false,
			vertical: true,
			verticalSwiping: true,
			cssEase: 'linear',
			autoplay: true,
			autoplaySpeed: 10000,
			responsive: [
				{
					breakpoint: 1024,
					settings: {
						vertical: false,
						verticalSwiping: false,
					}
				}
			]
		});

		jQuery('.reviews_slider').slick({
			arrows: false,
			dots: true,
			infinite: true,
			speed: 300,
			slidesToShow: 1,
			adaptiveHeight: false,
			cssEase: 'linear',
			autoplay: true,
			autoplaySpeed: 3000
		});

		var TabsNavigator = function (element) {
			buttons = document.querySelectorAll(element.buttons);
			itemsBlock = document.querySelectorAll(element.itemsBlock);
			activeButton = element.activeButton;
			displayBlockItem = element.displayBlockItem;

			if(itemsBlock.length <= 0 ) return;

			itemsBlock[0].classList.add(displayBlockItem);

			for (let i=0; i <buttons.length;  i++){
				buttons[i].onclick = function(){
					remuveClass(buttons,  activeButton);
					remuveClass(itemsBlock, displayBlockItem);
					this.classList.add(activeButton);
					itemsBlock[i].classList.add(displayBlockItem);
				}
			}
			function remuveClass(el, className) {
				for (let x = 0; x < el.length;  x++){
					el[x].classList.remove(className);
				}
			}
		};

		new TabsNavigator({
			buttons: '.tab_btn',
			itemsBlock: '.tab_window',
			activeButton: 'tab_active',
			displayBlockItem: 'display-block'
		});


		// Start fixed header menu
		window.onscroll = function (e) {
			var scrolClient = window.scrollY,
				blockMenu = document.querySelector('.header'),
				classFixedMenu = "headhesive--stick";
			if (scrolClient > 200){
				blockMenu.classList.add(classFixedMenu);
			} else {
				blockMenu.classList.remove(classFixedMenu);
			}
		};



	});



