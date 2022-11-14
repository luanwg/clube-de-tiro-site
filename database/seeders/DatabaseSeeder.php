<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        \App\Models\User::factory()->create([
            'name' => 'Admin',
            'user' => 'admin',
            'email' => 'admin@admin.com',
            'password' => '$2y$10$EuPbTgIhVu8mlT4CJblGmuKtL1SjAYRyZf4I5Vg/oe7c4Hn6oHEEm'
        ]);

        \App\Models\Noticia::factory()->create([
            'sobre' => '<p>Em Extrema MG o Clube Extremense de Tiro iniciou suas atividades do tiro esportivo em 2014 com foco no esporte e na quebra dos paradigmas sobre armas de fogo, além disso, nosso intuito era o aperfeiçoamento nesta prática esportiva através de cursos e instruções que pudessem nos levar aos níveis mais elevados na pratica do tiro. Nascemos através de uma necessidade do mercado, carente de um espaço profissional e com atendimento diferenciado, que pudesse fomentar tanto o esporte, bem como uma atividade de lazer.</p><p>Nosso “desejo de menino” e nossa dedicação de encontrar um local adequado para a prática esportiva foi atendida, e através de uma simples brincadeira e por meio de um encontro casual a ideia foi apresentada ao Sr. LUIZ CARLOS DE TOLEDO que assim como nós também tinha os mesmos desejos e anseios. Nasceu ali então o que podemos chamar de “casamento perfeito”.</p><p>Como o universo sempre conspira a favor de quem acredita, o <strong>Sr. Luiz Carlos</strong> juntamente com o seu Pai JOSÉ RABELO nos ofereceu um terreno apropriado dentro da sua propriedade para início das obras; simples assim!!</p><p>Após a autorização dos órgãos competentes e com as documentações em mãos colocamos literalmente a “mão na massa”.. Depois de levantar a primeira parede de tijolo não paramos mais.</p><p>Hoje nossas humildes instalações dispõem de 4 banheiros, área de segurança, local coberto para os atiradores e familiares, amplo estacionamento, além de 10 pistas para tiro prático, Uma pista com 25 metros para prova de Precisão, e obviamente sem esquecer os amantes do Tiro ao prato, também disponibilizamos uma pista planejada para esta modalidade.</p><p>Hoje somos especializados na realização de tramites legais para solicitação de aquisição e renovação de registro e emissão de CR de atirador, caçador e colecionador, junto ao Exército Brasileiro. Além disso, contamos com uma equipe de profissionais com vasto conhecimento e experiência na prática de tiro e na aplicação de cursos e de técnicas de manuseio de armamentos.</p><p>Nossa <i><strong>MISSÃO</strong></i>: Com segurança oferecer serviços de extrema qualidade e confiabilidade, objetivando sempre a prática do tiro esportivo.</p><p>Nossa <i><strong>VISÃO</strong></i>: Com segurança ser referência e inspiração na prática de tiro esportivo.</p><p>Nossos <i><strong>VALORES</strong></i>: Segurança, Transparência e Disciplina.</p>'
        ]);


    }
}
