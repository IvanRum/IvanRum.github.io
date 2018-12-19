var contact = document.querySelector(".contact-button") ? document.querySelector(".contact-button") : ''
var mapbutton = document.querySelector (".contacts-map") ? document.querySelector (".contacts-map") : ''
var buy = document.querySelectorAll (".catalog-item-buy") ? document.querySelectorAll (".catalog-item-buy") : ''

if (contact) {
  var contactpopup = document.querySelector (".modal-write-us")
  var notifyclose = document.querySelector (".notify-close")
  var inputname = contactpopup.querySelector (".modal-input-name")
  var inputemail = contactpopup.querySelector (".modal-input-email")
  var inputmessage = contactpopup.querySelector (".modal-input-message")
  var form = contactpopup.querySelector ("form")

  contact.addEventListener("click", function (evt) {
    evt.preventDefault()
    contactpopup.classList.add("modal-show")
    inputname.focus()
  })

  notifyclose.addEventListener("click", function (evt) {
    evt.preventDefault()
    contactpopup.classList.remove("modal-show")
    contactpopup.classList.remove("modal-error")
  })

  form.addEventListener("submit", function (evt) {
    if (!inputname.value || !inputemail.value || !inputmessage.value) {
      evt.preventDefault()
      contactpopup.classList.remove("modal-error")
      contactpopup.offsetWidth = contactpopup.offsetWidth
      contactpopup.classList.add("modal-error")
    }
  })
}

if (mapbutton) {
  var map = document.querySelector (".map-popup")
  var mapclose = map.querySelector (".map-close")

  mapbutton.addEventListener("click", function (evt) {
    evt.preventDefault()
    map.classList.add("modal-show")
  })

  mapclose.addEventListener("click", function (evt) {
    evt.preventDefault()
    map.classList.remove("modal-show")
  })
}

if (buy) {
  var marked = document.querySelectorAll (".catalog-item-marked")
  var notifypopup = document.querySelector (".modal-notify")
  var notifycatalogclose = document.querySelector (".notify-catalog-close")

  for (var i = 0; i < buy.length; i++)
    buy[i].addEventListener("click", function (evt) {
      evt.preventDefault()
      notifypopup.classList.add("modal-show")
    })

  notifycatalogclose.addEventListener("click", function (evt) {
    evt.preventDefault()
    notifypopup.classList.remove("modal-show")
  })
}

window.addEventListener("keydown", function (evt) {
  if (evt.keyCode === 27) {
    var modal = document.querySelector(".modal-show") ? document.querySelector(".modal-show") : ''
    if (modal) {
      evt.preventDefault()
      modal.classList.remove("modal-show")
    }
  }
})


