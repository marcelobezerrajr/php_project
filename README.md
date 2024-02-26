# php_project

Este projeto consiste em um site dinâmico em PHP que utiliza uma matriz associativa para armazenar o conteúdo das diferentes páginas do site, como "Home", "Sobre", "Contato", "FAQ" e "Loja". Cada página possui seu próprio conteúdo.

A estrutura do site inclui um cabeçalho (header) com links para cada página, e uma seção principal que exibe o conteúdo da página atual, determinada pela query string 'page' na URL.

O código PHP faz uso de um loop foreach para gerar os links no cabeçalho, e determina dinamicamente qual página exibir com base na query string 'page' recebida pela URL. Se a página não existir na matriz associativa, a página inicial ("Home") é exibida por padrão.

O HTML e o CSS fornecem a estrutura e o estilo básicos para o site, com um cabeçalho destacado em azul, links de navegação e uma seção de conteúdo com um título (h2) e parágrafo (p).