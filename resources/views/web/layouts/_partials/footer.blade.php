@php
    $imagem = ["01.jpg", "02.jpg", "03.jpg"];
    $imagem = $imagem[rand(0,2)];
@endphp

<!--========== FOOTER ==========-->
<footer class="footer" style="background: url({{ url ('assets/img/footer') }}/{{ $imagem }}) no-repeat;">
    <!-- Links -->
    <div class="footer-seperator">
        <div class="content-lg container">
            <div class="row">
                <div class="col-sm-7 sm-margin-b-30">
                    <!-- List -->
                    <ul class="list-unstyled footer-list">
                        <li class="footer-list-item"><a class="footer-list-link" href="https://www.facebook.com/clubeextremensedetiro" target="_blank">Facebook</a></li>
                        <li class="footer-list-item"><a class="footer-list-link" href="https://www.instagram.com/clubeextremensedetiro" target="_blank">Instagram</a></li>
                        <li class="footer-list-item"><a class="footer-list-link" href="#">YouTube</a></li>
                    </ul>
                    <!-- End List -->
                </div>
                <div class="col-sm-5 sm-margin-b-30">
                    <h2 class="color-white">Nos mande uma mensagem</h2>
                    <input type="text" class="form-control footer-input margin-b-20" placeholder="Nome" required>
                    <input type="email" class="form-control footer-input margin-b-20" placeholder="Email" required>
                    <input type="text" class="form-control footer-input margin-b-20" placeholder="Telefone" required>
                    <textarea class="form-control footer-input margin-b-30" rows="6" placeholder="Mensagem" required></textarea>
                    <button type="submit" class="btn-theme btn-theme-sm btn-base-bg text-uppercase">Enviar</button>
                </div>
            </div>
            <!--// end row -->
        </div>
    </div>
    <!-- End Links -->

    <!-- Copyright -->
    <div class="content container">
        <div class="row">
            <div class="col-xs-6">
                <img class="footer-logo" src="{{ url ('assets/img/logo.png') }}" alt="Luan Souza">
            </div>
            <div class="col-xs-6 text-right">
                <p class="margin-b-0">Desenvolvido por: <a class="color-base fweight-700" href="https://www.alphawise.com.br">AlphaWise</a></p>
            </div>
        </div>
        <!--// end row -->
    </div>
    <!-- End Copyright -->
</footer>
<!--========== END FOOTER ==========-->
