@extends('layouts.default')

@section('title')
    Maps
@stop

@section('page-title')
    Maps
@stop

@section('page-body')
    <div class="page-body">
        <div class="container-xl">
            <div class="row row-cards">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="ratio ratio-16x9">
                            <div>
                                <div id="map-simple" class="w-100 h-100"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="ratio ratio-16x9">
                            <div>
                                <div id="map-light" class="w-100 h-100"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="ratio ratio-16x9">
                            <div>
                                <div id="map-markers" class="w-100 h-100 rounded"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="ratio ratio-16x9">
                            <div>
                                <div id="map-card" class="w-100 h-100 rounded"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('page-styles')
    <link href="https://api.mapbox.com/mapbox-gl-js/v1.8.0/mapbox-gl.css" rel="stylesheet" />
@stop

@section('page-libs')
    <script src="https://api.mapbox.com/mapbox-gl-js/v1.8.0/mapbox-gl.js" defer></script>
@stop

@section('page-scripts')
    <script>
        // @formatter:off
        document.addEventListener("DOMContentLoaded", function() {
            mapboxgl.accessToken = '{{ env('MAPBOX_TOKEN') }}';
            var map = new mapboxgl.Map({
                container: 'map-simple',
                style: 'mapbox://styles/mapbox/streets-v11',
                zoom: 11,
                center: [-0.2416782, 51.5285582],
            });

            map.addControl(new mapboxgl.NavigationControl(), 'bottom-left')
        });
        // @formatter:on
    </script>
    <script>
        // @formatter:off
        document.addEventListener("DOMContentLoaded", function() {
            mapboxgl.accessToken = '{{ env('MAPBOX_TOKEN') }}';
            var map = new mapboxgl.Map({
                container: 'map-light',
                style: 'mapbox://styles/mapbox/light-v10',
                zoom: 8,
                center: [-0.2416782, 51.5285582],
            });

        });
        // @formatter:on
    </script>
    <script>
        // @formatter:off
        document.addEventListener("DOMContentLoaded", function() {
            mapboxgl.accessToken = '{{ env('MAPBOX_TOKEN') }}';
            var map = new mapboxgl.Map({
                container: 'map-markers',
                style: 'mapbox://styles/mapbox/navigation-day-v1',
                zoom: 11,
                center: [-0.2416782, 51.5285582],
            });
            new mapboxgl.Marker({
                color: tabler.getColor("primary")
            }).setLngLat([-0.2416782, 51.5285582]).addTo(map);
        });
        // @formatter:on
    </script>
    <script>
        // @formatter:off
        document.addEventListener("DOMContentLoaded", function() {
            mapboxgl.accessToken = '{{ env('MAPBOX_TOKEN') }}';
            var map = new mapboxgl.Map({
                container: 'map-card',
                style: 'mapbox://styles/mapbox/satellite-streets-v12',
                zoom: 11,
                center: [-0.2416782, 51.5285582],
            });
        });
        // @formatter:on
    </script>
@stop
