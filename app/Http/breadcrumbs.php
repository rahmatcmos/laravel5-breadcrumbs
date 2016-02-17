<?php

// Home
Breadcrumbs::register('home', function($breadcrumbs)
{
    $breadcrumbs->push('Home', route('home'));
});

// Home > About
Breadcrumbs::register('about', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('About', route('about'));
});


// Photos
Breadcrumbs::register('photo.index', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Photos', route('photo.index'));
});

// Photos > Upload Photo
Breadcrumbs::register('photo.create', function($breadcrumbs)
{
    $breadcrumbs->parent('photo.index');
    $breadcrumbs->push('Upload Photo', route('photo.create'));
});

// Photos > [Photo Name]
Breadcrumbs::register('photo.show', function($breadcrumbs, $photo)
{
    $breadcrumbs->parent('photo.index');
    $breadcrumbs->push($photo->title, route('photo.show', $photo->id));
});

// Photos > [Photo Name] > Edit Photo
Breadcrumbs::register('photo.edit', function($breadcrumbs, $photo)
{
    $breadcrumbs->parent('photo.show', $photo);
    $breadcrumbs->push('Edit Photo', route('photo.edit', $photo->id));
});
