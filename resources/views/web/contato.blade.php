@extends('web.layouts.app')

@section('content')

@component('web.layouts._components.top', ['title' => 'Fale Conosco', 'text' => 'TEm alguma dúvida ou quer nos visitar? Entre em contato agora mesmo!', 'bg' => url ('assets/img/top/top.jpg')])
@endcomponent
@section('title', 'Fale Conosco')

<!-- Contato -->
<div class="content-lg container">

    <div class="row" style="padding-left: 10px">
        <div class="col-md-6">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8257.179255214593!2d-46.32856921795925!3d-22.796708399187544!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cead2b295a80f9%3A0xc3e85f57b452eb56!2sClube%20Extremense%20de%20Tiro%20-%20CET!5e0!3m2!1spt-BR!2sbr!4v1667850712833!5m2!1spt-BR!2sbr"
                width="95%"
                height="450"
                style="border:0;"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
        <div class="col-md-6">
            <h2>Clube Extremense de Tiro - CET</h2>
            <p>Estr. dos Tenentes - Extrema, MG, 37640-000</p>
            <p>Telefone: <strong>(35) 98401-0890</strong></p>
            <p>Segunda a Sexta-feira: <strong>09:30–17:30</strong></p>
            <p>Sábado: <strong>09:00–13:00</strong></p>
            <p>Domingo: <strong>09:30–12:00</strong></p>
            <br>
            <br>
            <p>Venha nos fazer uma visita, nos mande uma mensagem no WhatsApp ou no formulário abaixo!</p>
        </div>
    </div>
    <!--// end row -->
</div>
<!-- End Contato -->

@endsection