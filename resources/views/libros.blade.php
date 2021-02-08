@extends('/layout/inicio')

<h1>Libros</h1>

@section('container')


    <h3>Libros</h3>

    <div class="container text-justify mb-5">


        <div class="row">
            <div class="col">
                <img src="/images/libro1.jpg" class="img-fluid" alt="image">
            </div>
            <div class="col">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit corrupti eos, non consequatur
                    molestiae
                    ipsum laudantium deleniti amet. Hic deleniti ipsa tenetur incidunt esse facere!</p>

                <!-- MODAL0********************************************************************************************************************************* -->
                <button class="btn btn-success text-dark font-weight-bold" type="submit" data-toggle="modal"
                    data-target="#myModal">
                    Ver
                </button>
                <!-- The Modal -->
                <div class="modal fade" id="myModal">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">Llibre1</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col">
                                        <img src="/images/libro1.jpg" class="img-fluid" alt="image">
                                    </div>
                                    <div class="col">
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At debitis eum eveniet
                                            natus
                                            praesentium optio hic odit porro, dolorum laborum, accusamus ex voluptate
                                            ratione a.
                                            Voluptate veritatis laboriosam similique inventore fugiat facilis rem, dolore
                                            architecto obcaecati saepe qui veniam. Beatae perspiciatis fuga, atque illum
                                            quas
                                            officia quod soluta dolorum earum nesciunt veniam maiores dolores repellat nulla
                                            laudantium quibusdam, iure accusamus quam error magnam commodi nihil numquam
                                            mollitia? Quo eos tempore dolor labore. Vitae soluta eius nemo. Commodi
                                            praesentium,
                                            labore perferendis vero numquam amet inventore quos corrupti asperiores laborum.
                                            Adipisci assumenda incidunt, perferendis culpa saepe voluptates nostrum quasi
                                            quis
                                            sapiente doloribus?</p>

                                    </div>
                                </div>
                            </div>

                            <!-- Modal footer -->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                            </div>

                        </div>
                    </div>
                </div>
                {{-- ----------------------------------------------------------------------------------------------------------------------- --}}
                <!-- MODAL2********************************************************************************************************************************* -->
                <button class="btn btn-success text-dark font-weight-bold" type="submit" data-toggle="modal"
                    data-target="#myModal2">
                    Comprar
                </button>
                <!-- The Modal -->
                <div class="modal fade" id="myModal2">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">Llibre1</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>

                            <!-- Modal body -->
                            <form class="" action="{{ route('comprado') }}" method="post">
                                @csrf
                                <div class="modal-body">
                                    <!-- <form action="/action_page.php" class="was-validated"> -->

                                    <label for="">Nom:</label>
                                    <div class="row">
                                        <div class="col-7">
                                            <div class="form-group">
                                                <i class="fa fa-user-o"></i>
                                                <input id="nom" type="text" class="form-control custom-input" name="nom"
                                                    value="" placeholder="Escriu el teu nom" required autofocus
                                                    style="border-radius: 30px;">
                                            </div>
                                        </div>
                                    </div>
                                    <label for="">Email:</label>
                                    <div class="row">

                                        <div class="col-7">
                                            <div class="form-group">

                                                <i class="fa fa-at"></i>
                                                <input id="email" type="email" class="form-control custom-input"
                                                    name="email" value="" placeholder="Escriu el teu Email" required
                                                    autofocus style="border-radius: 30px;">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">

                                        <div class="col-7">
                                            <div class="form-group">
                                                {{-- libro elegido --}}
                                                <input id="llibre" type="input" class="form-control custom-input"
                                                    name="llibre" value="Llibre1" hidden autofocus
                                                    style="border-radius: 30px;">
                                            </div>
                                        </div>

                                    </div>




                                </div>

                                <!-- Modal footer -->
                                <div class="modal-footer">
                                    <button type="submit" id="compralibro" class="btn btn-success">Comprar</button>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <img src="/images/libro2.jpg" class="img-fluid" alt="image">
            </div>
            <div class="col">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit corrupti eos, non consequatur
                    molestiae
                    ipsum laudantium deleniti amet. Hic deleniti ipsa tenetur incidunt esse facere!</p>
                <!-- MODAL3********************************************************************************************************************************* -->
                <button class="btn btn-success text-dark font-weight-bold" type="submit" data-toggle="modal"
                    data-target="#myModal3">
                    Ver
                </button>
                <!-- The Modal -->
                <div class="modal fade" id="myModal3">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">Llibre2</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col">
                                        <img src="/images/libro2.jpg" class="img-fluid" alt="image">
                                    </div>
                                    <div class="col">
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At debitis eum eveniet
                                            natus
                                            praesentium optio hic odit porro, dolorum laborum, accusamus ex voluptate
                                            ratione a.
                                            Voluptate veritatis laboriosam similique inventore fugiat facilis rem, dolore
                                            architecto obcaecati saepe qui veniam. Beatae perspiciatis fuga, atque illum
                                            quas
                                            officia quod soluta dolorum earum nesciunt veniam maiores dolores repellat nulla
                                            laudantium quibusdam, iure accusamus quam error magnam commodi nihil numquam
                                            mollitia? Quo eos tempore dolor labore. Vitae soluta eius nemo. Commodi
                                            praesentium,
                                            labore perferendis vero numquam amet inventore quos corrupti asperiores laborum.
                                            Adipisci assumenda incidunt, perferendis culpa saepe voluptates nostrum quasi
                                            quis
                                            sapiente doloribus?</p>

                                    </div>
                                </div>
                            </div>

                            <!-- Modal footer -->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                            </div>

                        </div>
                    </div>
                </div>
                {{-- ----------------------------------------------------------------------------------------------------------------------- --}}
                <!-- MODAL4********************************************************************************************************************************* -->
                <button class="btn btn-success text-dark font-weight-bold" type="submit" data-toggle="modal"
                    data-target="#myModal4">
                    Comprar
                </button>
                <!-- The Modal -->
                <div class="modal fade" id="myModal4">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">Llibre2</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <form class="" action="{{ route('comprado') }}" method="post">
                                @csrf
                                <!-- Modal body -->
                                <div class="modal-body">
                                    <!-- <form action="/action_page.php" class="was-validated"> -->

                                    <label for="">Nom:</label>
                                    <div class="row">
                                        <div class="col-7">
                                            <div class="form-group">
                                                <i class="fa fa-user-o"></i>
                                                <input id="nom" type="text" class="form-control custom-input" name="nom"
                                                    value="" placeholder="Escriu el teu nom" required autofocus
                                                    style="border-radius: 30px;">
                                            </div>
                                        </div>
                                    </div>
                                    <label for="">Email:</label>
                                    <div class="row">

                                        <div class="col-7">
                                            <div class="form-group">

                                                <i class="fa fa-at"></i>
                                                <input id="email" type="email" class="form-control custom-input"
                                                    name="email" value="" placeholder="Escriu el teu Email" required
                                                    autofocus style="border-radius: 30px;">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">

                                        <div class="col-7">
                                            <div class="form-group">
                                                {{-- libro elegido --}}
                                                <input id="llibre" type="input" class="form-control custom-input"
                                                    name="llibre" value="Llibre2" hidden autofocus
                                                    style="border-radius: 30px;">
                                            </div>
                                        </div>

                                    </div>




                                </div>

                                <!-- Modal footer -->
                                <div class="modal-footer">
                                    <button type="submit" id="compralibro" class="btn btn-success">Comprar</button>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <img src="/images/libro3.jfif" class="img-fluid" alt="image">
            </div>
            <div class="col">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit corrupti eos, non consequatur
                    molestiae
                    ipsum laudantium deleniti amet. Hic deleniti ipsa tenetur incidunt esse facere!</p>
                <!-- MODAL5********************************************************************************************************************************* -->
                <button class="btn btn-success text-dark font-weight-bold" type="submit" data-toggle="modal"
                    data-target="#myModal5">
                    Ver
                </button>
                <!-- The Modal -->
                <div class="modal fade" id="myModal5">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">Llibre3</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col">
                                        <img src="/images/libro3.jfif" class="img-fluid" alt="image">
                                    </div>
                                    <div class="col">
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At debitis eum eveniet
                                            natus
                                            praesentium optio hic odit porro, dolorum laborum, accusamus ex voluptate
                                            ratione a.
                                            Voluptate veritatis laboriosam similique inventore fugiat facilis rem, dolore
                                            architecto obcaecati saepe qui veniam. Beatae perspiciatis fuga, atque illum
                                            quas
                                            officia quod soluta dolorum earum nesciunt veniam maiores dolores repellat nulla
                                            laudantium quibusdam, iure accusamus quam error magnam commodi nihil numquam
                                            mollitia? Quo eos tempore dolor labore. Vitae soluta eius nemo. Commodi
                                            praesentium,
                                            labore perferendis vero numquam amet inventore quos corrupti asperiores laborum.
                                            Adipisci assumenda incidunt, perferendis culpa saepe voluptates nostrum quasi
                                            quis
                                            sapiente doloribus?</p>

                                    </div>
                                </div>
                            </div>

                            <!-- Modal footer -->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                            </div>

                        </div>
                    </div>
                </div>
                {{-- ----------------------------------------------------------------------------------------------------------------------- --}}
                <!-- MODAL6********************************************************************************************************************************* -->
                <button class="btn btn-success text-dark font-weight-bold" type="submit" data-toggle="modal"
                    data-target="#myModal6">
                    Comprar
                </button>
                <!-- The Modal -->
                <div class="modal fade" id="myModal6">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">Llibre3</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <form class="" action="{{ route('comprado') }}" method="post">
                                @csrf
                                <!-- Modal body -->
                                <div class="modal-body">
                                    <!-- <form action="/action_page.php" class="was-validated"> -->

                                    <label for="">Nom:</label>
                                    <div class="row">
                                        <div class="col-7">
                                            <div class="form-group">
                                                <i class="fa fa-user-o"></i>
                                                <input id="nom" type="text" class="form-control custom-input" name="nom"
                                                    value="" placeholder="Escriu el teu nom" required autofocus
                                                    style="border-radius: 30px;">
                                            </div>
                                        </div>
                                    </div>
                                    <label for="">Email:</label>
                                    <div class="row">

                                        <div class="col-7">
                                            <div class="form-group">

                                                <i class="fa fa-at"></i>
                                                <input id="email" type="email" class="form-control custom-input"
                                                    name="email" value="" placeholder="Escriu el teu Email" required
                                                    autofocus style="border-radius: 30px;">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">

                                        <div class="col-7">
                                            <div class="form-group">
                                                {{-- libro elegido --}}
                                                <input id="llibre" type="input" class="form-control custom-input"
                                                    name="llibre" value="Llibre3" hidden autofocus
                                                    style="border-radius: 30px;">
                                            </div>
                                        </div>

                                    </div>


                                </div>

                                <!-- Modal footer -->
                                <div class="modal-footer">
                                    <button type="submit" id="compralibro" class="btn btn-success">Comprar</button>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <img src="/images/libro4.jpg" class="img-fluid" alt="image">
            </div>
            <div class="col">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit corrupti eos, non consequatur
                    molestiae
                    ipsum laudantium deleniti amet. Hic deleniti ipsa tenetur incidunt esse facere!</p>
                <!-- MODAL7********************************************************************************************************************************* -->
                <button class="btn btn-success text-dark font-weight-bold" type="submit" data-toggle="modal"
                    data-target="#myModal7">
                    Ver
                </button>
                <!-- The Modal -->
                <div class="modal fade" id="myModal7">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">Llibre4</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col">
                                        <img src="/images/libro4.jpg" class="img-fluid" alt="image">
                                    </div>
                                    <div class="col">
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At debitis eum eveniet
                                            natus
                                            praesentium optio hic odit porro, dolorum laborum, accusamus ex voluptate
                                            ratione a.
                                            Voluptate veritatis laboriosam similique inventore fugiat facilis rem, dolore
                                            architecto obcaecati saepe qui veniam. Beatae perspiciatis fuga, atque illum
                                            quas
                                            officia quod soluta dolorum earum nesciunt veniam maiores dolores repellat nulla
                                            laudantium quibusdam, iure accusamus quam error magnam commodi nihil numquam
                                            mollitia? Quo eos tempore dolor labore. Vitae soluta eius nemo. Commodi
                                            praesentium,
                                            labore perferendis vero numquam amet inventore quos corrupti asperiores laborum.
                                            Adipisci assumenda incidunt, perferendis culpa saepe voluptates nostrum quasi
                                            quis
                                            sapiente doloribus?</p>

                                    </div>
                                </div>
                            </div>

                            <!-- Modal footer -->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                            </div>

                        </div>
                    </div>
                </div>
                {{-- ----------------------------------------------------------------------------------------------------------------------- --}}
                <!-- MODAL8********************************************************************************************************************************* -->
                <button class="btn btn-success text-dark font-weight-bold" type="submit" data-toggle="modal"
                    data-target="#myModal8">
                    Comprar
                </button>
                <!-- The Modal -->
                <div class="modal fade" id="myModal8">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">Llibre4</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <form class="" action="{{ route('comprado') }}" method="post">
                                @csrf
                                <!-- Modal body -->
                                <div class="modal-body">
                                    <!-- <form action="/action_page.php" class="was-validated"> -->

                                    <label for="">Nom:</label>
                                    <div class="row">
                                        <div class="col-7">
                                            <div class="form-group">
                                                <i class="fa fa-user-o"></i>
                                                <input id="nom" type="text" class="form-control custom-input" name="nom"
                                                    value="" placeholder="Escriu el teu nom" required autofocus
                                                    style="border-radius: 30px;">
                                            </div>
                                        </div>
                                    </div>
                                    <label for="">Email:</label>
                                    <div class="row">

                                        <div class="col-7">
                                            <div class="form-group">

                                                <i class="fa fa-at"></i>
                                                <input id="email" type="email" class="form-control custom-input"
                                                    name="email" value="" placeholder="Escriu el teu Email" required
                                                    autofocus style="border-radius: 30px;">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">

                                        <div class="col-7">
                                            <div class="form-group">
                                                {{-- libro elegido --}}
                                                <input id="llibre" type="input" class="form-control custom-input"
                                                    name="llibre" value="Llibre4" hidden autofocus
                                                    style="border-radius: 30px;">
                                            </div>
                                        </div>

                                    </div>


                                </div>

                                <!-- Modal footer -->
                                <div class="modal-footer">
                                    <button type="submit" id="compralibro" class="btn btn-success">Comprar</button>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <img src="/images/libro5.jpg" class="img-fluid" alt="image">
            </div>
            <div class="col">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit corrupti eos, non consequatur
                    molestiae
                    ipsum laudantium deleniti amet. Hic deleniti ipsa tenetur incidunt esse facere!</p>
                <!-- MODAL9********************************************************************************************************************************* -->
                <button class="btn btn-success text-dark font-weight-bold" type="submit" data-toggle="modal"
                    data-target="#myModal9">
                    Ver
                </button>
                <!-- The Modal -->
                <div class="modal fade" id="myModal9">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">Llibre5</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col">
                                        <img src="/images/libro5.jpg" class="img-fluid" alt="image">
                                    </div>
                                    <div class="col">
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At debitis eum eveniet
                                            natus
                                            praesentium optio hic odit porro, dolorum laborum, accusamus ex voluptate
                                            ratione a.
                                            Voluptate veritatis laboriosam similique inventore fugiat facilis rem, dolore
                                            architecto obcaecati saepe qui veniam. Beatae perspiciatis fuga, atque illum
                                            quas
                                            officia quod soluta dolorum earum nesciunt veniam maiores dolores repellat nulla
                                            laudantium quibusdam, iure accusamus quam error magnam commodi nihil numquam
                                            mollitia? Quo eos tempore dolor labore. Vitae soluta eius nemo. Commodi
                                            praesentium,
                                            labore perferendis vero numquam amet inventore quos corrupti asperiores laborum.
                                            Adipisci assumenda incidunt, perferendis culpa saepe voluptates nostrum quasi
                                            quis
                                            sapiente doloribus?</p>

                                    </div>
                                </div>
                            </div>

                            <!-- Modal footer -->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                            </div>

                        </div>
                    </div>
                </div>
                {{-- ----------------------------------------------------------------------------------------------------------------------- --}}
                <!-- MODAL10********************************************************************************************************************************* -->
                <button class="btn btn-success text-dark font-weight-bold" type="submit" data-toggle="modal"
                    data-target="#myModal10">
                    Comprar
                </button>
                <!-- The Modal -->
                <div class="modal fade" id="myModal10">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">Llibre5</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <form class="" action="{{ route('comprado') }}" method="post">
                                @csrf
                                <!-- Modal body -->
                                <div class="modal-body">
                                    <!-- <form action="/action_page.php" class="was-validated"> -->

                                    <label for="">Nom:</label>
                                    <div class="row">
                                        <div class="col-7">
                                            <div class="form-group">
                                                <i class="fa fa-user-o"></i>
                                                <input id="nom" type="text" class="form-control custom-input" name="nom"
                                                    value="" placeholder="Escriu el teu nom" required autofocus
                                                    style="border-radius: 30px;">
                                            </div>
                                        </div>
                                    </div>
                                    <label for="">Email:</label>
                                    <div class="row">

                                        <div class="col-7">
                                            <div class="form-group">

                                                <i class="fa fa-at"></i>
                                                <input id="email" type="email" class="form-control custom-input"
                                                    name="email" value="" placeholder="Escriu el teu Email" required
                                                    autofocus style="border-radius: 30px;">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">

                                        <div class="col-7">
                                            <div class="form-group">
                                                {{-- libro elegido --}}
                                                <input id="llibre" type="input" class="form-control custom-input"
                                                    name="llibre" value="Llibre5" hidden autofocus
                                                    style="border-radius: 30px;">
                                            </div>
                                        </div>

                                    </div>


                                </div>

                                <!-- Modal footer -->
                                <div class="modal-footer">
                                    <button type="submit" id="compralibro" class="btn btn-success">Comprar</button>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <img src="/images/libro6.jpg" class="img-fluid" alt="image">
            </div>
            <div class="col">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit corrupti eos, non consequatur
                    molestiae
                    ipsum laudantium deleniti amet. Hic deleniti ipsa tenetur incidunt esse facere!</p>
                <!-- MODAL11********************************************************************************************************************************* -->
                <button class="btn btn-success text-dark font-weight-bold" type="submit" data-toggle="modal"
                    data-target="#myModal11">
                    Ver
                </button>
                <!-- The Modal -->
                <div class="modal fade" id="myModal11">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">Llibre6</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col">
                                        <img src="/images/libro6.jpg" class="img-fluid" alt="image">
                                    </div>
                                    <div class="col">
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At debitis eum eveniet
                                            natus
                                            praesentium optio hic odit porro, dolorum laborum, accusamus ex voluptate
                                            ratione a.
                                            Voluptate veritatis laboriosam similique inventore fugiat facilis rem, dolore
                                            architecto obcaecati saepe qui veniam. Beatae perspiciatis fuga, atque illum
                                            quas
                                            officia quod soluta dolorum earum nesciunt veniam maiores dolores repellat nulla
                                            laudantium quibusdam, iure accusamus quam error magnam commodi nihil numquam
                                            mollitia? Quo eos tempore dolor labore. Vitae soluta eius nemo. Commodi
                                            praesentium,
                                            labore perferendis vero numquam amet inventore quos corrupti asperiores laborum.
                                            Adipisci assumenda incidunt, perferendis culpa saepe voluptates nostrum quasi
                                            quis
                                            sapiente doloribus?</p>

                                    </div>
                                </div>
                            </div>

                            <!-- Modal footer -->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                            </div>

                        </div>
                    </div>
                </div>
                {{-- ----------------------------------------------------------------------------------------------------------------------- --}}
                <!-- MODAL12********************************************************************************************************************************* -->
                <button class="btn btn-success text-dark font-weight-bold" type="submit" data-toggle="modal"
                    data-target="#myModal12">
                    Comprar
                </button>
                <!-- The Modal -->
                <div class="modal fade" id="myModal12">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">Llibre6</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <form class="" action="{{ route('comprado') }}" method="post">
                                @csrf
                                <!-- Modal body -->
                                <div class="modal-body">
                                    <!-- <form action="/action_page.php" class="was-validated"> -->

                                    <label for="">Nom:</label>
                                    <div class="row">
                                        <div class="col-7">
                                            <div class="form-group">
                                                <i class="fa fa-user-o"></i>
                                                <input id="nom" type="text" class="form-control custom-input" name="nom"
                                                    value="" placeholder="Escriu el teu nom" required autofocus
                                                    style="border-radius: 30px;">
                                            </div>
                                        </div>
                                    </div>
                                    <label for="">Email:</label>
                                    <div class="row">

                                        <div class="col-7">
                                            <div class="form-group">

                                                <i class="fa fa-at"></i>
                                                <input id="email" type="email" class="form-control custom-input"
                                                    name="email" value="" placeholder="Escriu el teu Email" required
                                                    autofocus style="border-radius: 30px;">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">

                                        <div class="col-7">
                                            <div class="form-group">
                                                {{-- libro elegido --}}
                                                <input id="llibre" type="input" class="form-control custom-input"
                                                    name="llibre" value="Llibre6" hidden autofocus
                                                    style="border-radius: 30px;">
                                            </div>
                                        </div>

                                    </div>


                                </div>

                                <!-- Modal footer -->
                                <div class="modal-footer">
                                    <button type="submit" id="compralibro" class="btn btn-success">Comprar</button>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


@endsection
