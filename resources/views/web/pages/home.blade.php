@extends('web.layouts.base')

@section('title')
    Home - DreamHouse
@endsection

@section('main')
    <!-- ##### Header Area Start ##### -->
    @include('web.blocks.header')
    <!-- ##### Header Area End ##### -->

    <!-- ##### Hero Area Start ##### -->
    @include('web.blocks.home.slideshow')
    <!-- ##### Hero Area End ##### -->

    <!-- ##### Advance Search Area Start ##### -->
    <?php //@include('web.blocks.search') ?>
    <!-- ##### Advance Search Area End ##### -->

    <!-- ##### Featured Properties Area Start ##### -->
    @include('web.blocks.home.noibat')
    <!-- ##### Featured Properties Area End ##### -->

    <!-- ##### Call To Action Area Start ##### -->
    @include('web.blocks.timbds')
    <!-- ##### Call To Action Area End ##### -->

    <!-- ##### Testimonials Area Start ##### -->
    @include('web.blocks.home.feedback')
    <!-- ##### Testimonials Area End ##### -->

    <!-- ##### Editor Area Start ##### -->
    @include('web.blocks.home.editor-area')
    <!-- ##### Editor Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    @include('web.blocks.footer')
    <!-- ##### Footer Area End ##### -->
@endsection