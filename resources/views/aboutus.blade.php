@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">
                    <h1 class="" style="font-family: 'Gloria Hallelujah', cursive; padding-bottom: 10px; text-align: center;">@lang('various.aboutus')</h1>
                </div>
                <div class="card-body">
                    <img src="/images/aboutus.png" alt="Norway" style="width:100%">
                    <p style="text-align: right; margin-top: -10px; font-size: x-small;">
                        <a href='https://www.freepik.com/vectors/people'>People vector created by pch.vector - www.freepik.com</a>
                    </p>
                    <p style="text-align: justify; margin-top: 10px; padding: 5px;">
                        Pozitivna psihologija je naučna disciplina nastala u drugoj polovini 20. veka kao izraz potrebe psihologa da se fokus sa proučavanja patoloških mentalnih stanja i faktora rizika mentalnog zdravlja preorijentiše na proučavanje mogućnosti unapređenja mentalnog zdravlja i faktore koji utiču na podsticanje psihološkog blagostanja.
                        Tokom godina istraživanja, iz brojnih teorijskih modela psihološkog blagostanja izrasli su različiti programi / seminari / treninzi / radionice usmereni na unapređivanje psihološkog blagostanja.
                    </p>
                    <h2>Kontakt</h2>
                    <p style="text-align: justify; margin-top: 10px; padding: 5px;">
                        email: institutpopsi@gmail.com <br>
                        telefon: +38163590091 <br>
                        adresa: Milosa Bajica 5, Novi Sad <br>
                    </p>
                    <br>
                    <img src="/images/map.png">
                    <div style="height:50px;"></div>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection
