window.addEventListener('scroll', function() {
	  const sections = document.querySelectorAll('.hero');
	  sections.forEach(function(section) {
	    const sectionTop = section.offsetTop;
	    const sectionHeight = section.clientHeight;
	    if (window.pageYOffset >= sectionTop && window.pageYOffset < sectionTop + sectionHeight) {
	      section.style.transform = `translateY(-${window.pageYOffset + sectionTop}px)`;
	    } else {
	      section.style.transform = '';
	    }
	  });
	});
	 
		window.addEventListener("scroll", function(){
			let header = document.querySelector("header");
			header.classList.toggle("sticky", window.scrollY > 0);
		})