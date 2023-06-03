<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">Registrati su Presto.it</h1>
                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    <div class="mb-3 form-field">
                        <label for="exampleInputEmail1" class="form-label">Indirizzo e-mail</label>
                        <input name="email" type="email" class="form-control" id="emailHelp"
                            aria-describedby="emailHelp" />
                    </div>

                    <div class="mb-3 form-field">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input name="password" type="password" class="form-control" id="exampleInputPassword1" />
                    </div>


                    <button type="submit" class="btn btn-primary">Log-in</button>

                </form>
            </div>
        </div>
    </div>
</x-layout>
