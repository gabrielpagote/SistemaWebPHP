<?php

$bd = new SQLite3("sistemas.db");

$sql = "DROP TABLE IF EXISTS sistemas";

if ($bd->exec($sql))
    echo "\ntabela sistemas apagada\n";


$sql = "CREATE TABLE sistemas (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        titulo VARCHAR(200) NOT NULL,
        poster VARCHAR (200),
        sinopse TEXT,
        nota DECIMAL(3,1)
    )
";

if ($bd->exec($sql))
    echo "\ntabela sistemas criada\n";
else
    echo "\nerro ao criar tabela sistemas\n";

$sql = "INSERT INTO sistemas (titulo, poster, sinopse, nota) VALUES (
        'Fedora',
        'https://get.wallhere.com/photo/artwork-text-logo-Linux-open-source-circle-Fedora-Red-Hat-operating-system-brand-line-number-font-product-diagram-2785.jpg',
        'O Fedora (anteriormente Fedora Core) é uma distribuição Linux desenvolvida pelo Projeto Fedora,
         suportado pela comunidade, e de propriedade da Red Hat. O Fedora contém software distribuído sob
          uma licença livre e de código aberto e pretende estar na vanguarda de tais tecnologias.
          O Fedora tem uma reputação de se concentrar na inovação, integrando novas tecnologias desde o início
          e trabalhando em estreita colaboração com as comunidades Linux upstream.
    ',
        8.0
    )";


if ($bd->exec($sql))
    echo "\nTabela de sistemas criada\n";
else
    echo "\nErro ao criar tabela de sistemas\n";



$sql = "INSERT INTO sistemas (titulo, poster, sinopse, nota) VALUES (
            'Solus OS',
            'https://cdn.pling.com/img/f/a/1/3/e3715c71faa5cfbcdfdfd76e9ddf2ea475b4.png',
            'Solus é uma distribuição Linux construída do zero. Ele usa uma versão
             bifurcada do gerenciador de pacotes PiSi, e um ambiente de desktop personalizado
            desenvolvido internamente. A área de trabalho do Budgie, que
            pode ser configurada para emular a aparência da área de trabalho do GNOME 2, é
            totalmente integrada à pilha do GNOME. A distribuição está disponível apenas para
                 computadores de 64 bits.
        ',
            8.5
        )";


if ($bd->exec($sql))
    echo "\nTabela de sistemas criada\n";
else
    echo "\nErro ao criar tabela de sistemas\n";

$sql = "INSERT INTO sistemas (titulo, poster, sinopse, nota) VALUES (
                'Parrot OS',
                'https://pplware.sapo.pt/wp-content/uploads/2018/02/parrot_os_Intro.jpg',
                'Parrot (anteriormente Parrot Security OS) é uma distribuição baseada em Debian e orientada
                 à segurança, com uma coleção de utilitários projetados para testes de penetração, análise forense
                  de computadores, engenharia reversa, hacking, privacidade, anonimato e criptografia. O produto, 
                  desenvolvido pela Frozenbox, vem com o MATE como o ambiente de desktop padrão.',
                8.7
            )";

if ($bd->exec($sql))
    echo "\nTabela de sistemas criada\n";
else
    echo "\nErro ao criar tabela de sistemas\n";

$sql = "INSERT INTO sistemas (titulo, poster, sinopse, nota) VALUES (
            'Ubuntu',
            'https://assets.ubuntu.com/v1/8dd99b80-ubuntu-logo14.png',
            'O Ubuntu é um sistema operacional Linux completo para desktop,
             disponível gratuitamente com suporte comunitário e profissional. A comunidade
              Ubuntu baseia-se nas idéias consagradas no Manifesto do Ubuntu: que o software deve estar
               disponível gratuitamente, que as ferramentas de software devem ser usadas pelas pessoas no
                idioma local e apesar de qualquer deficiência, e que as pessoas devem ter a liberdade de
            personalizar e altere o software da maneira que achar melhor.',
            9.0
        )";

if ($bd->exec($sql))
    echo "\nTabela de sistemas criada\n";
else
    echo "\nErro ao criar tabela de sistemas\n";
