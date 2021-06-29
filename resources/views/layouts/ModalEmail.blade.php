<!-- modal escrever email  -->
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Enviar Email</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="GET" action="{{ route('sendemail') }}" class="user">
          @csrf
          <div class="form-group">
            <input name="email" type="email" class="form-control form-control-user" id="exampleInputEmail" placeholder="Email">
          </div>
          <div class="form-group">
            <input name="assunto" type="text" class="form-control form-control-user" placeholder="Assunto">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Mensagem:</label>
            <textarea class="form-control" name="mensagem" id="message-text"></textarea>
          </div>
          <div class="modal-footer">
            <button type="subimit" class="btn btn-primary">Enviar</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        </form>
      </div>
    </div>
  </div>
</div>