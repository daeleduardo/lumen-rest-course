# Rest Course
Rest API criada no framework lumen versão 8 para aprendizado, para criar a aplicação, foi seguido os passos deste [video](https://www.youtube.com/watch?v=1YT3DnbirKg) que ensina a criar uma aplicação usando o lumen 6.

## Subir a aplicação

Poder ser executada de diversas formas, porém, a mais simples seria tendo o PHP instalado na máquina, ir via terminal na raiz do projeto e executar o seguinte comando:

`php -S 0.0.0.0:8080 -t public public/index.php`

Feito isso o servidor irá estar rodando na máquina na porta 8080.

## Testes
Pode ser testada chamando os seguintes endpoints:


| Metodo        | Endpoint           |
|:-------------:|:-------------:|
| GET      | /courses/ |
| GET      | /courses/{id}      |
| POST/PATCH | /courses/{id}      |
| DELETE | /courses/{id}      |

Um exemplo de payload para ser usando em inserção/edição seria esse:

`{"name":"Sample Course","description":"Dolorum saepe excepturi nihil quis.","body":"Maiores aliquam voluptatem quaerat unde commodi. Et enim tenetur in nesciunt dicta facere. Impedit vel sint similique nam voluptatem iusto ratione. Labore laboriosam quam sequi hic cumque nostrum.","price":"1.23"}`