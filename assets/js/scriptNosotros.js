$(".step").click( function() {
	$(this).addClass("active").prevAll().addClass("active");
	$(this).nextAll().removeClass("active");
});

$(".step01").click( function() {
	$("#line-progress").css("width", "3%");
	$(".discovery").addClass("active").siblings().removeClass("active");
});

$(".step02").click( function() {
	$("#line-progress").css("width", "25%");
	$(".strategy").addClass("active").siblings().removeClass("active");
});

$(".step03").click( function() {
	$("#line-progress").css("width", "50%");
	$(".creative").addClass("active").siblings().removeClass("active");
});

$(".step04").click( function() {
	$("#line-progress").css("width", "75%");
	$(".production").addClass("active").siblings().removeClass("active");
});

$(".step05").click( function() {
	$("#line-progress").css("width", "100%");
	$(".analysis").addClass("active").siblings().removeClass("active");
});

/*scroll para el header */
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
	anchor.addEventListener('click', function(e) {
	  e.preventDefault();
	  const targetId = this.getAttribute('href').substring(1);
	  const targetElement = document.getElementById(targetId);
	  const offset = 200; // Ajusta el valor al alto de tu encabezado fijo
  
	  if (targetElement) {
		const targetPosition = targetElement.offsetTop - offset;
		window.scrollTo({
		  top: targetPosition,
		  behavior: 'smooth'
		});
	  }
	});
  });
  