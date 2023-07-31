 $(document).ready(function() {
  $('#logout').click(function() {
    $.ajax({
      type: "POST",
      url: "assets/php/logout.php",
      data: {
        logout: 1
      },
      cache: false,
      success: function(response) {
      console.log(response);
      }
    });
  });
});
