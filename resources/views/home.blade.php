@extends('adminlte::page')

@section('title', 'KIA')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
@php
    $nombre = array('nombre' => 'Octavio Oyanedel Alarcón', 'grado' => 'Cabo');
@endphp
    <div class="row">
        <div class="col-md-4">
            
        </div>
        <div class="col-md-8">
            <div style="height: 450px;" id="map"></div>
        </div>
    </div>
    <livewire:counter />
    <p>Welcome to this beautiful admin panel.</p>
@stop

@section('js')
    <script>
        /* Paso de objeto php */
        var obj = JSON.parse('<?php echo json_encode($nombre) ?>');
        /* 2 - Crear funcion initMAp, esta es un callback invocado desde url CDN google maps */
        function initMap(){
            var options = {
                zoom: 15, // zoom de mapa
                center: {lat:-33.03932, lng:-71.62725}, // coordenadas valparaíso
            }
            /* 3 - Crear instancia objeto MAP */
            var map = new google.maps.Map(document.getElementById('map'), options);

            /* 4 - Añadir marcador */
            var marker = new google.maps.Marker({
                position: {lat:-33.03932, lng:-71.62725},
                icon: {
                    path: google.maps.SymbolPath.BACKWARD_OPEN_ARROW,
                    scale: 4,
                    strokeColor: "red",
                    fillColor: "black",
                },

                map,
            });

            const contentString = 
                "<p><u>INFORMACIÓN DE BAJA</u></p>"+
                "<ul>"+
                "<li> <strong>Nombre:</strong> "+obj.nombre+"</li>"+
                "<li> <strong>Grado:</strong> "+obj.grado+"</li>"+ 
                "</ul>"
            ;
            /* 5 - Añadir información al marcador */
            const infowindow = new google.maps.InfoWindow({
                content: contentString,
            });

            /* 6 - Para que se muestre info, se debe setear el evento que disparará la ventana con la info */
            marker.addListener("click", () => {
                infowindow.open(map, marker);
            });

        }
    </script>
    <!-- 1 - Insertar CDN google maps y añadir API KEY -->
    <script defer 
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB__lm_Pa4n7vIsiHKnHZcSLM5fW_tuOC0&callback=initMap">
    </script>
@stop