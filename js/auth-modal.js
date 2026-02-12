document.addEventListener('DOMContentLoaded', function () {

  var openBtn = document.getElementById('openAuth');
  var modal = document.getElementById('authModal');
  var closeBtn = document.getElementById('closeAuth');

  if (!openBtn || !modal || !closeBtn) {
    console.log('Ошибка: элемент не найден');
    return;
  }

  openBtn.onclick = function () {
    modal.classList.add('active');
  };

  closeBtn.onclick = function () {
    modal.classList.remove('active');
  };

  modal.onclick = function (e) {
    if (e.target === modal) {
      modal.classList.remove('active');
    }
  };

  

});

