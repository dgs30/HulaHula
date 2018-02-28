$('body').scrollspy({ target: '.navbar' })

$('[data-spy="scroll"]').each(function () {
  var $spy = $(this).scrollspy('refresh')
})

$('#myModal').on('shown.bs.modal', function () {
  $('#myInput').focus()
})

$('.carousel').carousel()