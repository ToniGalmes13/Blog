@extends('/layout/inicio')

<h1>Comentario</h1>

@section('container')


    <h3>Comentario</h3>

    <div class="container">
        <!-- <h2>Form Validation</h2> -->

        <div class="row">
            <div class="col-2"></div>
            <div class="col-8 p-3">

                <!-- <form action="/action_page.php" class="was-validated"> -->
                <form class="" action="{{ route('comentari') }}" method="POST">
                    
                  @csrf

                    <label for="">Nom:</label>
                    <div class="row">
                        <div class="col-7">
                            <div class="form-group">
                                <i class="fa fa-user-o"></i>
                                <input id="nom" type="text" class="form-control custom-input" name="nom" value=""
                                    placeholder="Escriu el teu nom" required autofocus style="border-radius: 30px;">
                            </div>
                        </div>
                    </div>
                    <label for="">Email:</label>
                    <div class="row">

                        <div class="col-7">
                            <div class="form-group">

                                <i class="fa fa-at"></i>
                                <input id="email" type="email" class="form-control custom-input" name="email" value=""
                                    placeholder="Escriu el teu Email" required autofocus style="border-radius: 30px;">
                            </div>
                        </div>
                    </div>
                    <label for="pwd">Comentari:</label>
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">

                                <i class="fa fa-comment"></i>
                                <textarea type="text" class="form-control textarea" id="coment"
                                    placeholder="Escriu el teu comentari..." name="coment" required></textarea>

                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Please fill out this field.</div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success">Envia</button>
                </form>

            </div>

            <div class="col-2"></div>
        </div>
    </div>


@endsection
