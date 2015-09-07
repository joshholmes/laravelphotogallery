@extends('layouts.master')

@section('title', 'Faces of the Elephant')

@section('gallery')
        <li class='placeholder' style='background-image:url("https://laravelphotogallery.blob.core.windows.net/photos/IMG_0488.jpg");background-size: 950px 370px'>Image Holder</li>
          <?php

  $first = (array_values($photos)[0]);
  $firstUrl = (array_keys($first)[0]);

          foreach($photos as $key => $value)
          {
            foreach($value as $k => $v) {
              echo "<li><a class='swap' href='#''><img src='".$k."' alt='".$k."'/><span><img src='".$k."' width='950' height='370' alt='".$k."'/></span></li>";
            }
          }
          ?>
@stop 