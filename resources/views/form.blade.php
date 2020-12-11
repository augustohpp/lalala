<form action="#" method="post" class="form-horizontal" id="formProduto">
    @csrf
    <div class="card">
        <div class="card-header">
            <h4 class="col-12 modal-title text-center">Novo Cadastro</h5>
        </div>
        <h6 class="col-12 modal-title text-center">Campos com * são obrigatorios</h6>
        <div class="container col-11">
            <input type="hidden" id="id" class="form-control">

            {{--- Formulario Nome ---}}

            <div class="form-row">
                <div class="form-group col-6">
                    <label for="nome" class="control-label">Nome: *</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome completo"
                            value="{{isset($cras->nome) ? $cras->nome : old('nome') }}">
                    </div>
                </div>

                <div class="form-group col-6">
                    <label for="cpf" class="control-label">CPF: *</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="cpf" name="cpf" placeholder="CPF"
                            value="{{isset($cras->cpf) ? $cras->cpf : old('cpf') }}">
                    </div>
                </div>
            </div>

            {{--- Formulario Telefone Cras ---}}
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="tel" class="control-label">Telefone: *</label>
                    <div class="input-group ">
                        <input type="text" class="form-control phone_with_ddd" name="tel" id="tel"
                            value="{{isset($cras->telefone) ? $cras->telefone : old('tel') }}"
                            placeholder="(00)0000-0000" />
                    </div>
                </div>

                {{--- Formulario Data de Nascimento Cras ---}}

                <div class="form-group col-md-6">
                    <label for="dataNascimento" class="control-label">Data de Nascimento:</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="dataNascimento" id="dataNascimento"
                            value="{{isset($cras->dataNascimento) ? $cras->dataNascimento : old('dataNascimento') }}"
                            placeholder="dd/mm/aaaa" />
                    </div>
                </div>
            </div>
            {{--- Formulario E-mail Cras ---}}

            <div class="form-row">
                <div class="form-group col-6">
                    <label for="email" class="control-label">E-mail: *</label>
                    <div class="input-group">
                        <input type="email" class="form-control" name="email" id="email"
                            value="{{isset($cras->email) ? $cras->email : old('email') }}"
                            placeholder="exemplo@exemplo.com" />
                    </div>
                </div>

                <div class="form-group col-6">
                    <label for="instagram" class="control-label">Instagram: *</label>
                    <div class="input-group">
                        <input type="instagram" class="form-control" name="instagram" id="instagram"
                            value="{{isset($cras->instagram) ? $cras->instagram : old('instagram') }}"
                            placeholder="@fulanodetal" />
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Salvar</button>
            <a class="btn btn-secondary" href="#">Cancelar</a>
        </div>
    </div>
</form>