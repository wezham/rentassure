function submit(){
  var name = $('#name').val();
  var email = $('#email').val();
  $.ajax({
    method: "POST",
    url: "email_collect.php",
    data: { name: name, email: email },
    success: function (data) {
      console.log(data);
      $('#name').val("");
      $('#email').val("");
      $('#button').html("Sent");
    },
    error: function(){

    }
  });
}
