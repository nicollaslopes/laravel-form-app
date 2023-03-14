<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <title>Form App</title>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    </head>
    <body class="antialiased">
        <div class="container d-flex justify-content-center">
            <form>
                @csrf
                <div class="mt-4">
                    <h3>Formulário</h3>
                    <p>Por favor, preencha os campos abaixo para enviar seu currículo:</p>
                </div>
                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input type="text" name="nome" class="form-control" id="nome" required>
                </div>
                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com" >
                </div>
                <div class="form-group">
                    <label for="telefone">Telefone</label>
                    <input type="text" name="telefone" class="form-control" id="telefone" placeholder="(00) 00000-0000" >
                </div>
                <div class="form-group">
                    <label for="cargo">Cargo desejado</label>
                    <textarea class="form-control" name="cargo_desejado" id="cargo" rows="2" ></textarea>
                </div>
                <div class="form-group">
                    <label for="escolaridade">Escolaridade</label>
                    <select class="form-control" name="escolaridade" id="escolaridade" >
                        <option value="">Selecione uma opção</option>
                        <option value="fundamental">Ensino Fundamental completo</option>
                        <option value="medio">Ensino Médio completo</option>
                        <option value="superior">Ensino Superior completo</option>
                        <option value="pos">Pós-graduação completo</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="observacoes">Observações</label>
                    <textarea class="form-control" name="observacoes" id="observacoes" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label for="arquivo">Selecione o arquivo ( <i> Extensões permitidas: .doc, .docx ou .pdf </i> )</label>
                    <input type="file" name="arquivo" class="form-control" id="arquivo" >
                </div>
                <div class="col-lg-12" style="text-align: right;">
                    <button type="submit" class="btn btn-primary ml-auto">Enviar</button>
                </div>
            </form>
        </div>
    </body>
</html>
