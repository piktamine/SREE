<table>
    <thead>
    <tr>
        <th>Carrera</th>
        <th>Generación</th>
        <th>Nivel area 1</th>
        <th>Nivel area 2</th>
        <th>Nivel area 3</th>
        <th>Nivel area 4</th>
        <th>Nivel area 5</th>
        <th>Puntaje area 1</th>
        <th>Puntaje area 2</th>
        <th>Puntaje area 3</th>
        <th>Puntaje area 4</th>
        <th>Puntaje area 5</th>
        <th>Respuesta 1</th>
        <th>Respuesta 2</th>
        <th>Respuesta 3</th>
        <th>Respuesta 4</th>
        <th>Respuesta 5</th>
        <th>Respuesta 6</th>
        <th>Respuesta 7</th>
        <th>Respuesta 8</th>
        <th>Respuesta 9</th>
        <th>Observaciones</th>
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
            <td>{{ $d['ops'] }}</td>
        </tr>
    @endforeach
    </tbody>
</table>