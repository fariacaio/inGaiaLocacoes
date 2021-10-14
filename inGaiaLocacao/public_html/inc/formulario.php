<form class="formulario">
  <div class="form-group">
    <label for="name">Nome<span>*</span></label>
    <input type="name" class="form-control" id="name" aria-describedby="name" placeholder="Seu nome completo">
  </div>
  <div class="form-group">
    <label for="email">E-mail<span>*</span></label>
    <input type="email" class="form-control" id="email" aria-describedby="email" placeholder="Digite seu e-mail">
  </div>

  <div class="form-group">
    <label for="empresa">Empresa<span>*</span></label>
    <input type="empresa" class="form-control" id="empresa" aria-describedby="empresa" placeholder="Seu nome completo">
  </div>

  <div class="form-group">
    <label for="creci">Sua imobiliária possui CRECI?</label>
    <select class="form-control" id="creci">
      <option>Selecione</option>  
      <option>Sim</option>
      <option>Não</option>

    </select>
  </div>

  <div class="form-group">
    <label for="website">Website<span>*</span></label>
    <input type="website" class="form-control" id="website" aria-describedby="website" placeholder="https://">
  </div>

  <div class="form-group">
    <label for="celular">Celular<span>*</span></label>
    <input type="celular" class="form-control" id="celular" aria-describedby="celular" placeholder="( )">
  </div>
  <div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
  <label class="form-check-label" for="defaultCheck1">
    Eu concordo em receber comunicações
  </label>
  </div>
  <div class="form-group">
    <label for="recaptcha">1+3<span>*</span></label>
    <input type="recaptcha" class="form-control" id="recaptcha" aria-describedby="recaptcha" placeholder="Seu nome completo">
  </div>
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>