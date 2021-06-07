<table>
    <thead>
    <tr>
        <th>carrera</th>
        <th>gen</th>
        <th>N area1</th>
        <th>N area2</th>
        <th>N area3</th>
        <th>N area4</th>
        <th>N area5</th>
        <th>puntaje1</th>
        <th>puntaje2</th>
        <th>puntaje3</th>
        <th>puntaje4</th>
        <th>puntaje5</th>
        <th>res1</th>
        <th>res2</th>
        <th>res3</th>
        <th>res4</th>
        <th>res5</th>
        <th>res6</th>
        <th>res7</th>
        <th>res8</th>
        <th>res9</th>
    </tr>
    </thead>
    <tbody>
    @foreach($datos as $d)
        <tr>
            <td>{{ $d['carrera'] }}</td>
            <td>{{ $d['gen_i'] }}</td>
            <td>{{ $d['area1'] }}</td>
            <td>{{ $d['area2'] }}</td>
            <td>{{ $d['area3'] }}</td>
            <td>{{ $d['area4'] }}</td>
            <td>{{ $d['area5'] }}</td>
            <td>{{ $d['puntaje1'] }}</td>
            <td>{{ $d['puntaje2'] }}</td>
            <td>{{ $d['puntaje3'] }}</td>
            <td>{{ $d['puntaje4'] }}</td>
            <td>{{ $d['puntaje5'] }}</td>
            <td>{{ $d['r1'] }}</td>
            <td>{{ $d['r2'] }}</td>
            <td>{{ $d['r3'] }}</td>
            <td>{{ $d['r4'] }}</td>
            <td>{{ $d['r5'] }}</td>
            <td>{{ $d['r6'] }}</td>
            <td>{{ $d['r7'] }}</td>
            <td>{{ $d['r8'] }}</td>
            <td>{{ $d['r9'] }}</td>
        </tr>
    @endforeach
    </tbody>
</table>