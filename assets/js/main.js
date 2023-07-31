window.addEventListener('scroll', function() {
	  const sections = document.querySelectorAll('.hero');
	  sections.forEach(function(section) {
	    const sectionTop = section.offsetTop;
	    const sectionHeight = section.clientHeight;
	    if (window.pageYOffset >= sectionTop && window.pageYOffset < sectionTop + sectionHeight) {
	      section.style.transform = `translateY(-${window.pageYOffset - sectionTop}px)`;
	    } else {
	      section.style.transform = '';
	    }
	  });
	});

  
    	window.addEventListener("scroll", function(){
    		let header = document.querySelector("header");
    		header.classList.toggle("sticky", window.scrollY > 350);
    	})


		let moveElements = [];
		$(document).ready(function(){
			moveElements = $(".section__cards>li");
			let right = 0;
			let translateX = 0;

			for(let i = 0; i < moveElements.length; i++) {
				let $e = $(moveElements[i]);
				right = i*560 + 30;
				right = right.toString() + "px";
				$e.css("right", right);
			}

			let move = setInterval(moveIt, 30);

			function moveIt() {
				for(let i = 0; i < moveElements.length; i++) {
					let $e = $(moveElements[i]);
					right = $e.css("right");
					right = right.split("px");
					right = right[0] - 1;
					if(right<= -560) {
						right = (moveElements.length - 1)*560 + 40;
					}
					right = right.toString() + "px";
					$e.css("right", right);
				}
			}
		})