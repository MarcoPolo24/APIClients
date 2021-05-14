<?php

namespace App\Http\Controllers;

use Facade\Ignition\Support\FakeComposer;
use Illuminate\Http\Request;
use App\Models\Client;

class ControllerView extends Controller
{
    public function home()
    {
        if (isset($_GET['date'])) {
            $filtro = $_GET['date'];
            $clientD = Client::where("date", ">", $filtro)->get();
            $client = json_encode($clientD);
        }

        if (isset($_GET['domain'])) {
            $filtro = $_GET['domain'];
            $clientD = Client::where("email", "like", "%" . $filtro . "%")->get();
            $client = json_encode($clientD);
        }

        if (!$filtro) {
            $client = Client::all()->toJson();
        }

        echo $client;

        //echo($clients);
    }
}
