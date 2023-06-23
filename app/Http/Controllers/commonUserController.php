<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Ticket;
use App\Models\Adjunto;

class commonUserController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('welcome');
    }
  
    public function createTicket()
    {
        return view('user.createTicket');
    }

    public function saveTicket(Request $request)
    {
        $ticket = new Ticket();
        $user = Auth::user();

        $ticket->titulo = $request->titulo;
        $ticket->descripcion = $request->descripcion;
        $ticket->estado = $request->estado;

        $ticket->id_usuario = $user->id;
        
        $ticket->save();

        if ($request->hasFile('adjunto')) {
            $adjunto = new Adjunto();
            $ticketCreado = Ticket::latest()->first();
            $adjunto->adjunto = $request->adjunto;
            $adjunto->id_ticket = $ticketCreado->id;
            $adjunto->save();
        }

        return redirect()->route('misTickets');
    }

    public function ListarTickets()
    {
       
            $user = Auth::user();
            $tickets = Ticket::where('id_usuario', $user->id)->get();
    

            return view('user.misTickets')->with('tickets', $tickets);
          
        
    }
}
