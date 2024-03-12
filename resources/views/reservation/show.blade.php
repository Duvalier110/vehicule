<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SEPTO SERVICE Sarl</title>
    <style>
       table{
        text-align: left;
       }
       .bordure{
        border: 5px solid;
        width: 70%;
        height: 13cm;
       }
    </style>
</head>
<body>

<center>
    <div class="card">
        <!-- <div class="card-header">
                                <h4 class="card-title"> détails de la Réservation</h4>
                            </div> -->
        <div class="card-body">
            <div class="basic-form">
                <div class="bordure">
                    <caption><h1>Facture Réservation</h1></caption>
                <table class="table card-body">
                    <thead>
                        <th>id du véhicule</th>
                        <th>{{$reservation->vehicle_mark}}</th>
                    </thead>
                    <thead>
                        <th>Nom :</th>
                        <th>{{$reservation->first_name}}</th>
                    </thead>
                    <thead>
                        <th>Prenom :</th>
                        <th>{{$reservation->last_name}}</th>
                    </thead>
                    <thead>
                        <th>email :</th>
                        <th>{{$reservation->email}}</th>
                    </thead>
                    <thead>
                        <th>Numero de téléphone :</th>
                        <th>{{$reservation->phone_number}}</th>
                    </thead>
                    <thead>
                        <th>statut :</th>
                        <th>{{$reservation->status}}</th>
                    </thead>
                    <thead>
                        <th>prix par heur :</th>
                        <th>{{$reservation->price_per_hour}}</th>
                    </thead>
                    <thead>
                        <th>Lieu de prise en charge :</th>
                        <th>{{$reservation->place_of_care}}</th>
                    </thead>
                    <thead>
                        <th>lieu de depot :</th>
                        <th>{{$reservation->place_of_deposit}}</th>
                    </thead>
                    <thead>
                        <th>Date de début :</th>
                        <th>{{$reservation->start_date}}</th>
                    </thead>
                    <thead>
                        <th>Date de fin :</th>
                        <th>{{$reservation->end_date}}</th>
                    </thead>
                    <thead>
                        <th>Nombre d'heure total :</th>
                        <th>{{$reservation->heur}}Heur</th>
                    </thead>
                    <thead>
                        <th>Prix total :</th>
                        <th>{{$reservation->prix}}FCFA</th>
                    </thead>
                </table>
                <thead>
                    <div>
                        <pre>Signature agence                                    signature client </pre>
                    </div>
                </thead>
                </div>
            </div>
        </div>
    </div>
    </div>

    </div>

    </div>
    </div>

    <script>
        document.addEventListener(window.print());
    </script>
    <!-- fonction javascript qui permet d'imprimer automatiquement la facture -->

    </body>
</center>

</html>
</body>
</html>