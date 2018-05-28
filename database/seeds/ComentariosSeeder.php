<?php

use App\Comentario;
use Illuminate\Database\Seeder;

class ComentariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Comentario::create([
            'fk_usuario' => 1,
            'descripcion' => 'el libro de Alicia es más que recomendable, casi imprescindible y llama para ser disfrutado en distintos momentos y situaciones, con distintas edades, porque cada vez la lectura es distinta... pero siempre maravillosa.',
            'validado' => 1,
            'fk_libro' => 2
        ]);
        Comentario::create(['fk_usuario' => 2, 'descripcion' => 'A mí, personalmente, no me ha gustado mucho el libro de Alicia en el País de las Maravillas, pues aunque está bien redactado y a veces llega a ser entretenido no me ha resultado atrayente. En parte creo que ha sido por los juegos de palabras, pues al traducirlos pierden la mayoría de su gracia y se convierten en confusiones que a mi parecer resultan pesadas e ilógicas.\r\n\r\nA mí, personalmente, no me ha gustado mucho el libro de Alicia en el País de las Maravillas, pues aunque está bien redactado y a veces llega a ser entretenido no me ha resultado atrayente. En parte creo que ha sido por los juegos de palabras, pues al traducirlos pierden la mayoría de su gracia y se convierten en confusiones que a mi parecer resultan pesadas e ilógicas.\r\n\r\nA mí, personalmente, no me ha gustado mucho el libro de Alicia en el País de las Maravillas, pues aunque está bien redactado y a veces llega a ser entretenido no me ha resultado atrayente. En parte creo que ha sido por los juegos de palabras, pues al traducirlos pierden la mayoría de su gracia y se convierten en confusiones que a mi parecer resultan pesadas e ilógicas.\r\n\r\nvA mí, personalmente, no me ha gustado mucho el libro de Alicia en el País de las Maravillas, pues aunque está bien redactado y a veces llega a ser entretenido no me ha resultado atrayente. En parte creo que ha sido por los juegos de palabras, pues al traducirlos pierden la mayoría de su gracia y se convierten en confusiones que a mi parecer resultan pesadas e ilógicas.\r\n\r\nA mi, personalmente, no me ha gustado mucho el libro, pues aunque está bien redactado y a veces llega a ser entretenido, no me ha resultado atrayente.', 'validado' => 1, 'fk_libro' => 2]);
        Comentario::create(['fk_usuario' => 3, 'descripcion' => 'He leído dos veces este libro y lo recomiendo sin ninguna duda. Charles Dickens, al igual que George Elliot analiza y describe la historia a través de los ojos de un niño. Es un libro entretenido y no tiene nada que ver con muchos de los bestsellers a los que estamos acostumbrados hoy en día, muy comerciales, y a los que te enganchas desde la primera hoja a la última pero que no aportan mucho más que un breve entretenimiento.', 'validado' => 1, 'fk_libro' => 3]);
        Comentario::create(['fk_usuario' => 4, 'descripcion' => 'Me leí Ana Karenina hace ni sé y cada año lo releo siempre en invierno, no sé por qué. Ha sido el libro que inspiró el primer relato del que no me avergüenzo y es al que recurro cada vez que estoy triste, aunque sólo sea para tocar sus tapas', 'validado' => 1, 'fk_libro' => 1]);
        Comentario::create(['fk_usuario' => 2, 'descripcion' => 'Hace un par de días que he terminado este libro del gran Liev o León Tolstói. He tenido una sensación parecida a la que solo me han dado unas pocas novelas, como la Odisea, el Quijote, Madame Bovary o Cien años de soledad. En otras palabras, es uno de los libros que definitivamente me llevaría a una isla desierta. ', 'validado' => 1, 'fk_libro' => 1]);
        Comentario::create(['fk_usuario' => 3, 'descripcion' => 'Es el libro que más me ha gustado hasta ahora, es un libro que te envuelve en la historia y recomiendo que se lo lea todo el mundo. ', 'validado' => 1, 'fk_libro' => 4]);

    }
}
