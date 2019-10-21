@extends('layouts.app')

@section('title', 'Beloved')

@section('content')
    @include('common.errors')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header text-center">Inicio</div>
                        <div class="card-body">
                            <form action="beloved" method="post" enctype="multipart/form-data">
                                <div class="form-group row">
                                        <label for="name" class="col-sm-2 col-form-label">Nombre</label>
                                        <input type="text" class="form-control col-sm-6" id="name" name="name">
                                    </div>
                                    <div class="form-group row">
                                        <label for="lastname" class="col-sm-2 col-form-label">Apellido</label>
                                        <input type="text" class="form-control col-sm-6" id="lastname" name="lastname">
                                    </div>
                                    <div class="form-group row">
                                        <label for="address" class="col-sm-2 col-form-label">Dirección</label>
                                        <input type="text" class="form-control col-sm-9" id="address" name="address">
                                    </div>
                                    <div class="form-group row">
                                        <label for="contact_name" class="col-sm-2 col-form-label">Nombre Contacto</label>
                                        <input type="text" class="form-control col-sm-6" id="contact_name" name="contact_name">
                                    </div>

                                    <div class="form-group row">
                                        <label for="contact_phone" class="col-sm-2 col-form-label">Teléfono Contacto</label>
                                        <input type="text" class="form-control col-sm-6" id="contact_phone" name="contact_phone">
                                    </div>

                                    <div class="form-group row">
                                        <label for="phase" class="col-sm-2 col-form-label">Fase Alzheimer</label>
                                        <select name="phase" id="phase" class="form-control col-sm-3">
                                            <option value="leve">Leve</option>
                                            <option value="moderado">Moderado</option>
                                            <option value="grave">Grave</option>
                                        </select>
                                    </div>

                                    <div class="form-group row">
                                        <label for="description" class="col-sm-2 col-form-label">Descripción</label>
                                        <textarea class="form-control col-sm-6" id="description" name="description"></textarea>
                                    </div>

                                    <div class="form-group row">
                                        <label for="avatar" class="col-sm-2 col-form-label">Avatar</label>
                                        <input type="file" id="avatar" name="avatar">
                                    </div>
                                <div class="card-footer text-center">
                                        <input type="submit" class="btn btn-primary">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
