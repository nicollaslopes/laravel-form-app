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
            <form method="POST" action="{{ route('form.create') }}">
                @csrf
                <div class="mt-4">
                    <h3>Formulário</h3>
                    <p>Por favor, preencha os campos abaixo para enviar seu currículo:</p>
                </div>
                <div class="form-group">
                    <label for="name">name</label>
                    <input type="text" name="name" class="form-control" id="name" required>
                </div>
                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com" required>
                </div>
                <div class="form-group">
                    <label for="phone">Telefone</label>
                    <input type="text" name="phone" class="form-control" id="phone" placeholder="(00) 00000-0000" required>
                </div>
                <div class="form-group">
                    <label for="desired_job">Cargo desejado</label>
                    <textarea class="form-control" name="desired_job" id="desired_job" rows="2" required></textarea>
                </div>
                <div class="form-group">
                    <label for="schooling">Escolaridade</label>
                    <select class="form-control" name="schooling" id="schooling" required>
                        <option value="">Selecione uma opção</option>
                        <option value="fundamental">Ensino Fundamental completo</option>
                        <option value="medio">Ensino Médio completo</option>
                        <option value="superior">Ensino Superior completo</option>
                        <option value="pos">Pós-graduação completo</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="observations">Observações</label>
                    <textarea class="form-control" name="observations" id="observations" rows="3" required></textarea>
                </div>
                <div class="form-group">
                    <label for="file">Selecione o arquivo ( <i> Extensões permitidas: .doc, .docx ou .pdf </i> )</label>
                    <input type="file" name="file" class="form-control" id="file" required>
                </div>
                <div class="col-lg-12" style="text-align: right;">
                    <button type="submit" class="btn btn-primary ml-auto">Enviar</button>
                </div>
            </form>
        </div>
    </body>
</html>
