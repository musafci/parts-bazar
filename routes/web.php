<?php

Route::prefix('backoffice')->group(function () {

    Route::get('/', function () {
        return view('backoffice.dashboard');
    });

    Route::get('/typography', function () {
        return view('backoffice.typography');
    });

    Route::get('/changelogs', function(){
        return view('backoffice.changelogs');
    });

    Route::get('/helper-classes', function() {
        return view('backoffice.helper-classes');
    });

    //WIDGETS
    Route::get('/basic', function() {
        return view('backoffice.widgets.cards.basic');
    });

    Route::get('/colored', function() {
        return view('backoffice.widgets.cards.colored');
    });

    Route::get('/no-header', function() {
        return view('backoffice.widgets.cards.no-header');
    });

    Route::get('/infobox-1', function() {
        return view('backoffice.widgets.infobox.infobox-1');
    });

    Route::get('/infobox-2', function() {
        return view('backoffice.widgets.infobox.infobox-2');
    });

    Route::get('/infobox-3', function() {
        return view('backoffice.widgets.infobox.infobox-3');
    });

    Route::get('/infobox-4', function() {
        return view('backoffice.widgets.infobox.infobox-4');
    });

    Route::get('/infobox-5', function() {
        return view('backoffice.widgets.infobox.infobox-5');
    });

    //UI
    Route::get('/alerts', function() {
        return view('backoffice.ui.alerts');
    });

    Route::get('/animations', function() {
        return view('backoffice.ui.animations');
    });

    Route::get('/badges', function() {
        return view('backoffice.ui.badges');
    });

    Route::get('/breadcrumbs', function() {
        return view('backoffice.ui.breadcrumbs');
    });

    Route::get('/buttons', function() {
        return view('backoffice.ui.buttons');
    });

    Route::get('/collapse', function() {
        return view('backoffice.ui.collapse');
    });
    
    Route::get('/colors', function() {
        return view('backoffice.ui.colors');
    });

    Route::get('/dialogs', function() {
        return view('backoffice.ui.dialogs');
    });

    Route::get('/icons', function() {
        return view('backoffice.ui.icons');
    });

    Route::get('/labels', function() {
        return view('backoffice.ui.labels');
    });

    Route::get('/list-group', function() {
        return view('backoffice.ui.list-group');
    });

    Route::get('/media-object', function() {
        return view('backoffice.ui.media-object');
    });

    Route::get('/modals', function() {
        return view('backoffice.ui.modals');
    });

    Route::get('/notifications', function() {
        return view('backoffice.ui.notifications');
    });

    Route::get('/pagination', function() {
        return view('backoffice.ui.pagination');
    });

    Route::get('/preloaders', function() {
        return view('backoffice.ui.preloaders');
    });

    Route::get('/progressbars', function() {
        return view('backoffice.ui.progressbars');
    });

    Route::get('/range-sliders', function() {
        return view('backoffice.ui.range-sliders');
    });

    Route::get('/sortable-nestable', function() {
        return view('backoffice.ui.sortable-nestable');
    });

    Route::get('/tabs', function() {
        return view('backoffice.ui.tabs');
    });

    Route::get('/thumbnails', function() {
        return view('backoffice.ui.thumbnails');
    });

    Route::get('/tooltips-popovers', function() {
        return view('backoffice.ui.tooltips-popovers');
    });

    Route::get('/waves', function() {
        return view('backoffice.ui.waves');
    });


    //Forms

    Route::get('/basic-form-elements', function() {
        return view('backoffice.forms.basic-form-elements');
    });

    Route::get('/advanced-form-elements', function() {
        return view('backoffice.forms.advanced-form-elements');
    });

    Route::get('/form-examples', function() {
        return view('backoffice.forms.form-examples');
    });

    Route::get('/form-validation', function() {
        return view('backoffice.forms.form-validation');
    });

    Route::get('/form-wizard', function() {
        return view('backoffice.forms.form-wizard');
    });

    Route::get('/editors', function() {
        return view('backoffice.forms.editors');
    });

    //Tables

    Route::get('/normal-tables', function() {
        return view('backoffice.tables.normal-tables');
    });

    Route::get('/jquery-datatable', function() {
        return view('backoffice.tables.jquery-datatable');
    });

    Route::get('/editable-table', function() {
        return view('backoffice.tables.editable-table');
    });


    //Medias

    Route::get('/image-gallery', function() {
        return view('backoffice.medias.image-gallery');
    });

    Route::get('/carousel', function() {
        return view('backoffice.medias.carousel');
    });

    //Charts
    Route::get('/morris', function() {
        return view('backoffice.charts.morris');
    });

    Route::get('/flot', function() {
        return view('backoffice.charts.flot');
    });


    Route::get('/chartjs', function() {
        return view('backoffice.charts.chartjs');
    });

    Route::get('/sparkline', function() {
        return view('backoffice.charts.sparkline');
    });

    Route::get('/jquery-knob', function() {
        return view('backoffice.charts.jquery-knob');
    });

    //Example Pages

    Route::get('/profile', function() {
        return view('backoffice.examples.profile');
    });

    Route::get('/sign-in', function() {
        return view('backoffice.examples.sign-in');
    });

    Route::get('/sign-up', function() {
        return view('backoffice.examples.sign-up');
    });

    Route::get('/forgot-password', function() {
        return view('backoffice.examples.forgot-password');
    });

    Route::get('/blank', function() {
        return view('backoffice.examples.blank');
    });


    Route::get('/404', function() {
        return view('backoffice.examples.404');
    });

    Route::get('/500', function() {
        return view('backoffice.examples.500');
    });

    //map

    Route::get('/google', function() {
        return view('backoffice.maps.google');
    });

    Route::get('/yandex', function() {
        return view('backoffice.maps.yandex');
    });

    Route::get('/jvectormap', function() {
        return view('backoffice.maps.jvectormap');
    });

});

























