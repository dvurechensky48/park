<!-- <a href="#myModal" data-toggle="modal">Открыть модальное окно</a>   -->

<div id="myModal" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
    <section class="blue color-white">
    	
    <form action="send.php" method="post">
      <!-- Заголовок модального окна -->
      <div class="modal-header">
        <h2 class="modal-title all-center">Обратная связь</h2>
      </div>
      <!-- Основное содержимое модального окна -->
      <div class="modal-body">
        
        
        <div><input name="name" class="col-lg-offset-1 col-lg-10 col-md-offset-1 col-md-10 col-sm-offset-1 col-sm-10 col-xs-offset-1 col-xs-10" placeholder="Ваше имя*" required=""></div>
        <div class="clearfix"></div>
        <div class="margin-top-2"></div>
        <div><input name="phone" class="col-lg-offset-1 col-lg-10 col-md-offset-1 col-md-10 col-sm-offset-1 col-sm-10 col-xs-offset-1 col-xs-10" placeholder="Номер телефона"></div>
        <div class="clearfix"></div>
        <div class="margin-top-2"></div>
        <div><input name="email" class="col-lg-offset-1 col-lg-10 col-md-offset-1 col-md-10 col-sm-offset-1 col-sm-10 col-xs-offset-1 col-xs-10" placeholder="Адрес электронной почты*" required=""></div>
        <div class="clearfix"></div>
        <div class="margin-top-2"></div>
        <div><textarea name="mess" class="col-lg-offset-1 col-lg-10 col-md-offset-1 col-md-10 col-sm-offset-1 col-sm-10 col-xs-offset-1 col-xs-10" placeholder="Сообщение"></textarea></div>
        
        <div class="clearfix"></div>
        
    
      </div>
      <!-- Футер модального окна -->
      <div class="modal-footer">
        <button type="button" class="btn-default" data-dismiss="modal">Закрыть</button>
        <button type="button" class="btn-primary">Отправить</button>
      </div>
      </form>
    </div>

    </section>
  </div>
</div> 
