<x-layout>
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center">Registrati su Presto.it</h1>
            <form action="{{ route('register') }}" method="POST">
                @csrf
                <div class="mb-3 form-field">
                    <label for="name" class="form-label">Nome Completo</label>
                    <input name="name" type="text" class="form-control" id="name" aria-describedby="name" />
                </div>

                <div class="mb-3 form-field">
                    <label for="exampleInputEmail1" class="form-label">Indirizzo e-mail</label>
                    <input name="email" type="email" class="form-control" id="emailHelp"
                        aria-describedby="emailHelp" />
                </div>

                <div class="mb-3 form-field">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input name="password" type="password" class="form-control" id="exampleInputPassword1" />
                </div>

                <div class="mb-3 form-field">
                    <label for="password_confirmation" class="form-label">Conferma Password</label>
                    <input name="password_confirmation" type="password" class="form-control"
                        id="password_confirmation" />
                </div>

                <button type="submit" class="btn btn-primary">Registrati</button>

            </form>
        </div>
    </div>
</div>
</x-layout>