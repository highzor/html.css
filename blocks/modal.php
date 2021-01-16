<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Заказать звонок</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="ajax-contact-form" enctype="multipart/form-data" method="post">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Ваше имя<span style="color: red">*</span>:</label>
            <input type="text" name="nameFF" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="example-tel-input" class="col-form-label">Телефон:</label>
            <input class="form-control" name="telFF" type="tel" placeholder="+7(555)555-55-55" id="example-tel-input">
          </div>
          <div class="form-group">
            <label for="example-email-input" class="col-form-label">Email:</label>
            <input class="form-control" name="contactFF" type="email" placeholder="myEmail@example.com" id="example-email-input">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Сообщение:</label>
            <textarea class="form-control" name="projectFF" placeholder="Ваше сообщение" id="message-text"></textarea>
          </div>
          <div class="form-group">
            <input class="form" name="fileFF" type="file" id="example-tel-input">
          </div>

        </div>
        <div class="modal-footer">
          <div class="align-self-start mr-auto">
            <a href="http://www.google.com" target="_blank">
              <button id="dwnldForms" type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Скачайте, заполните и отправьте нам опросный лист.">
                Опросные листы
              </button>
            </a>
          </div>
          <button id="closeForms" type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
          <button id="submit" type="submit" class="btn btn-primary">Отправить</button>
        </div>
      </form>
    </div>
  </div>
</div>
<script>
  if (screen.width <= 666) {
    document.getElementById("dwnldForms").classList.add('btn-sm');
    document.getElementById("closeForms").classList.add('btn-sm');
    document.getElementById("submit").classList.add('btn-sm');
  }
</script>
<script src="js/sendMess.js"></script>
