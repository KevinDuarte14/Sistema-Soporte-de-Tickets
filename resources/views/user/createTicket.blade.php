@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Crear Ticket</div>

                <div class="card-body">
                    <form action="{{ route('saveTicket') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label for="titulo">Título:</label>
                            <input type="text" class="form-control" id="titulo" name="titulo" required>
                        </div>

                        <div class="form-group">
                            <label for="descripcion">Descripción:</label>
                            <textarea class="form-control" id="descripcion" name="descripcion" rows="4" required></textarea>
                        </div>

                        <div class="form-group">
                            <label for="adjunto">Archivo adjunto:</label>
                            <input type="file" class="form-control-file" id="adjunto" name="adjunto">
                        </div>

                        <div class="form-group">
                            <label for="estado">Estado:</label>
                            <select class="form-control" id="estado" name="estado" required>
                                <option value="abierto">Abierto</option>
                                <option value="cerrado">Cerrado</option>
                            </select>
                        </div>

                        <div class="mt-4">
                            <button type="submit" class="btn btn-primary">Crear Ticket</button>
                        </div>
                    </form
@endsection























