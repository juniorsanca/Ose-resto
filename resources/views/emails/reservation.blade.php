<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<p>Reservation confirmé 🤝 </p>


<p>
    Cher(e) client(e) nous vous confirmant votre réservation le {{ $date }} à {{ $heure}} {{$emails}}
    en cas d’empêchement majeur veuillez
    <a href="http://ose-resto.herokuapp.com/reservation/annulation/{{$api_token}}">ANNULER LA RÉSERVATION</a>
    <!--<a href="http://127.0.0.1:8000//reservation/annulation/{{}}">ANNULER LA RÉSERVATION</a> $api_token--ajouter entre les mustaches-->
    dans les plus brefs délais!
    merci, à bientôt 😄.
</p>

</body>
</html>
