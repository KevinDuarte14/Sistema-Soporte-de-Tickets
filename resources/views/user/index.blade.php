
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Lista de Tickets</h1>
    
        <a href="{{ route('createTicket') }}" class="btn btn-dark">Crear Ticket</a>
            

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Titulo</th>
                    <th>Descripción</th>
                    <th>Archivo adjunto</th>
                    <th>Estado</th>
                </tr>
            </thead>

           
                
                   
            </tbody>
        </table>
    </div>
@endsection

