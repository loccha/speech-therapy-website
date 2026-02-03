$(".nav__toggle").on("click", function(){
  $(".nav__menu").toggleClass("is-open");
});

$("#agreement-checkbox").change(function () {
  $(".form").toggleClass("is-enabled", this.checked);
});


