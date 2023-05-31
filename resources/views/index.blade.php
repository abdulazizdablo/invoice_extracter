<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>

    <form>
        <div class="mb-3">
            <label for="formFile" class="form-label">Default file input example</label>
            <input class="form-control" type="file" id="formFile">
        </div>
        <div class="mb-3">
            <label for="formFile" class="form-label">Default file input example</label>
            <input class="form-control" type="file" id="formFile">
        </div>
        <div class="mb-3">
            <label for="formFile" class="form-label">Default file input example</label>
            <input class="form-control" type="file" id="formFile">
        </div>

        <input type="submit">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Air Waybill
                        Number
                    </th>
                    <th scope="col">Shippers
                        Reference</th>
                    <th scope="col">Shipment
                        Date
                        Origin / Consignor </th>

                    <th scope="col">Destination / Consignee </th>
                    <th scope="col">Type of
                        Service </th>
                    <th scope="col">Weight
                        in Kg </th>
                    <th scope="col">

                        Number
                        of items </th>
                    <th scope="col">Standard
                        Charge
                    </th>
                    <th scope="col">Extra Charges
                        Description </th>
                    <th scope="col">Extra
                        Charges
                        Amoun </th>
                    <th scope="col">Total</th>
                </tr>
            </thead>






            @foreach ($file as $key => $array)
                @foreach ($array as $index => $item)
                    @if ($key == 'Air Waybill')
                        @if (is_numeric($item))
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>{{ $item }}</td>
                                @break
                    @endif
                @endif

                @if ($key == 'Shippers')
                    @if (is_numeric($item))
                        <td>{{ $item }}</td>
                    @break
                @endif
            @endif




            @if (str_contains($key, 'Shipment Origin'))


                @if (!is_null($item) && $item !== 'Date')
                    <td>{{ $item }}</td>

                  
                 
              
                @else 
               @continue
            @endif
        @endif
    @endforeach
@endforeach



</tbody>
</table>
<button type="button" class="btn btn-primary">Print</button>

</body>

</html>


{{-- @if ($key == 'Air Waybill')
@if (is_numeric($item))
<tr>
    <th scope="row">1</th>
    <td>{{$item}}</td>
    <td></td>
    <td>Otto</td>
    <td>@mdo</td>
</tr>
@endif
@endif

@if ($key == 'Shippers')
@if (is_numeric($item))
<tr>
    <th scope="row">1</th>
    <td></td>
    <td>{{$item}}</td>
    <td>Otto</td>
    <td>@mdo</td>
</tr>
@endif
@endif
--}} {{--  <td>the Bird</td>
          <td>@twitter</td>
          <td>@twitter</td>
          <td>@twitter</td>
          <td>@twitter</td>
          <td>@twitter</td>
          <td>@twitter</td>
          <td>@twitter</td>
          <td>@twitter</td>
          <td>@twitter</td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>Larry</td>
          <td>the Bird</td>
          <td>@twitter</td>
          <td>@twitter</td>
          <td>@twitter</td>
          <td>@twitter</td>
          <td>@twitter</td>
          <td>@twitter</td>
          <td>@twitter</td>
          <td>@twitter</td>
          <td>@twitter</td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td>Larry</td>
          <td>the Bird</td>
          <td>@twitter</td>
          <td>@twitter</td>
          <td>@twitter</td>
          <td>@twitter</td>
          <td>@twitter</td>
          <td>@twitter</td>
          <td>@twitter</td>
          <td>@twitter</td>
          <td>@twitter</td>
        </tr>
      </tbody>
     
--}}
