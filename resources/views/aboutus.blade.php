@extends('layouts.master1')
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
                        <br>
                        Laravel is bae.
                    </p>
                    <br>
                    <div class="container" style="text-align: center;">
                        <button type="button" class="btn btn-tw" data-toggle="tooltip" data-placement="bottom" title="Redouane Bedjguelal (@EyowynYasuri)" style="background-color: teal;"><i class="fa fa-twitter"></i></button>
                        <button type="button" class="btn btn-tw" data-toggle="tooltip" data-placement="bottom" title="Nicolas Kim (@Skialpin_)" style="background-color: teal;"><i class="fa fa-twitter"></i></button>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12" style="background-color: transparent; margin-top: 140%;"></div>
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