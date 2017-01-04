@extends('layouts.templateDC')
@section('content')
<!--Mask-->
<div class="view hm-black-strong">
    <div class="full-bg-img">
        <div class="container">
            <div class="row">
                <div class="col-lg-12" style="background-color: transparent; margin-top: 20%;"></div>
            </div>
            <div class="row">
                <div class="col-lg-2">
                </div>
                <div class="col-lg-8">
                    <p class="bq-title font-baumans display-3 teal-text" style="font-family: 'Baumans', cursive;">About us</p>
                    <p class="grey-text">This website is a school project made by Redouane Bedjguelal and Nicolas Kim, two TALENTED french IT students.
                    </p>
                    <br>
                    <div class="container" style="text-align: center;">
                        <button type="button" class="btn" data-toggle="tooltip" data-placement="bottom" title="Redouane Bedjguelal (@EyowynYasuri)" style="background-color: teal;" onclick="window.open('https://twitter.com/eyowynyasuri', '_blank')"><i class="fa fa-twitter"></i></button>
                        <button type="button" class="btn" data-toggle="tooltip" data-placement="bottom" title="Nicolas Kim (@Skialpin_)" style="background-color: teal;" onclick="window.open('https://twitter.com/skialpin_', '_blank')"><i class="fa fa-twitter"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    // Tooltips Initialization
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })
</script>
<!--/.Mask-->
@stop