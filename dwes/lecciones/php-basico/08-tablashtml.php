<?php
function listaNumeros($lista){
    print "<table border='1px'><tr>";
    foreach($lista as $num){
        print "<td>$num</td>";
    }
    print "</tr></table><br>";
}


function listaNombres($lista){
    print "<table border='1px'>";
    print "<tr>";
    print "<th>NOMBRE</th><th>APELLIDO</th><th>CORREO</th></tr>";
    foreach($lista as $obj){
        print "<tr>";
        print "<td>" .$obj["Nombre"]. "</td>";
        print "<td>" .$obj["Apellido"]. "</td>";
        print "<td>" .$obj["Correo"]. "</td>";

    }print "</tr>";
    
    

}

$lista = [2, 6, 6, 5, 1, 0, 3, 4, 5];

$matriz = [
    [
        'Nombre' => 'Mauro',
        'Apellido' => 'Chojrin',
        'Correo' => 'mauro.chojrin@leewayweb.com',
    ],
    [
        'Nombre' => 'Alberto',
        'Apellido' => 'Loffatti',
        'Correo' => 'aloffatti@hotmail.com',
    ],
    [
        'Nombre' => 'Foo',
        'Apellido' => 'Bar',
        'Correo' => 'foo_bar@example.com',
    ]
];




listaNumeros($lista);
listaNombres($matriz);

?>