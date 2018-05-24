<?php

use App\Libro;
use Illuminate\Database\Seeder;

class LibrosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Libro::create(['isbn' => '670894788', 'voto' => '3', 'num_voto' => '25', 'n_pags' => '1759', 'precio' => '22.00',
            'titulo' => 'Anna Karenina', 'editorial' => 'Juventud',
            'atributos_extra' => '{"color": "rojo", "premios": ["planeta2012", "Nacional2011"], "material": "papel", "dimensiones_cm": {"alto": 10, "ancho": 5, "fondo": 1}}',
            'resumen' => 'Ana Karénina (ruso: Áнна Карéнина, Anna Karénina) es una novela del escritor ruso León Tolstói publicada por primera vez en 1877. Había empezado a aparecer como folletín en la revista Russki Véstnik (El mensajero ruso), entre enero de 1875 y abril de 1877,1​ pero su publicación no llegó a concluirse a causa del desacuerdo de Tolstói con su editor, Mijaíl Katkov, sobre el final de la novela. Por lo tanto, la primera edición completa del texto apareció en forma de libro en 1877.

La novela está considerada una de las obras cumbres del realismo. Para Tolstói, Anna Karénina fue su primera verdadera novela. La apariencia física del personaje que da nombre a la obra parece estar inspirada en Maria Hartung (1832-1919), la primogénita del poeta ruso Aleksandr Pushkin.1​ Poco después de conocerla en una cena, Tolstói comenzó a leer la prosa de Pushkin y tuvo un efímero sueño con «un aristocrático codo desnudo», que probó ser el primer acercamiento al personaje de Anna.

Aunque muchos críticos calificaron la obra en el momento de su publicación como un «romance de alta sociedad», Fiódor Dostoyevski declaró que era una «obra de arte». Vladímir Nabókov secundó esta opinión, admirando sobre todo la «magia del estilo de Tolstói» y la figura del tren, que se introduce ya en los primeros capítulos (los niños jugando con un tren de juguete), desarrollada en capítulos siguientes (la pesadilla de Anna) hasta llegar al majestuoso final.']);
        Libro::create(['isbn' => '393048470', 'voto' => '4', 'num_voto' => '136', 'n_pags' => '130', 'precio' => '7.00',
            'titulo' => 'Alice\'s Adventures in Wonderland', 'editorial' => 'Dover Publications', 'atributos_extra' => 'null',
            'resumen'=>'Las aventuras de Alicia en el país de las maravillas, comúnmente abreviado como Alicia en el país de las maravillas, es una novela de fantasía escrita por el matemático, lógico, fotógrafo y escritor británico Charles Lutwidge Dodgson, bajo el seudónimo de Lewis Carroll, publicada en 1865. La historia cuenta cómo una niña llamada Alicia cae por un agujero, encontrándose en un mundo peculiar, poblado por humanos y criaturas antropomórficas. El libro juega con la lógica, dando a la novela gran popularidad tanto en niños como en adultos. Está considerada una de las mejores novelas del género del Sinsentido. Su narrativa y estructura, junto con sus personajes, han sido una gran influencia tanto en la cultura popular como en la literatura, sobre todo en el género fantástico.

En esta obra aparecen algunos de los personajes más famosos de Lewis Carroll, como el Conejo Blanco, la Liebre de Marzo, el Sombrerero, la Oruga azul, el Gato de Cheshire o la Reina de Corazones;1​ quienes han cobrado importancia suficiente como para ser reconocidos fuera del mundo de Alicia.

Solo se conservan 23 copias de la primera edición de 1865, de las cuales 17 pertenecen a distintas bibliotecas, y las restantes forman parte de las colecciones privadas de algunos lectores. El libro tiene una segunda parte, menos conocida, llamada A través del espejo y lo que Alicia encontró allí (Through the looking-glass, and what Alice found there, de 1871). Varias adaptaciones cinematográficas combinan elementos de ambos libros.

La obra ha sido traducida a numerosos idiomas, incluido el esperanto. En 1998, un ejemplar de la primera edición del libro se vendió en subasta por la suma de 1,5 millones de dólares, y se convirtió así en el libro para niños más caro hasta ese momento.2​']);
        Libro::create(['isbn' => '141439742', 'voto' => '3', 'num_voto' => '92', 'n_pags' => '789', 'precio' => '17.00',
            'titulo' => 'Oliver Twist', 'editorial' => 'Anaya', 'atributos_extra' => 'null',
            'resumen' => 'Oliver Twist; or The Parish Boy\'s Progress (Oliverio Twist en algunas raras ediciones en español1​) es la segunda novela del autor inglés Charles Dickens. Se publicó originalmente como novela por entregas de aparición mensual (aproximadamente2​) en la revista Bentley\'s Miscellany, dirigida por el propio Dickens, entre febrero de 1837 y abril de 1839.

En un principio, el autor tenía la intención de que formase parte de una obra más extensa, The Mudfog Papers.[cita requerida] Dickens lo publicó en tres volúmenes en noviembre de 1838, antes de que terminara la versión en entregas publicada en la revista2​ y el propio Dickens lo revisó para sucesivas reediciones en 1846, 1850, 1858 y 1867.2​

Con una clara influencia de las novelas picarescas de Henry Fielding —sobre todo por su Tom Jones (1749)— y de Tobias Smollett —por Humphry Clinker (1771)—, y la novela gótica, se encuadrada más bien en el género de la novela de Newgate.3​ Es la primera novela en lengua inglesa que tiene a un niño como protagonista.4​ Asimismo, destaca por su tratamiento del mundo de los criminales y sus sórdidas vidas, prácticamente carente de Romanticismo.5​ Oliver Twist es una de las primeras novelas sociales de la historia de la literatura, pues llama la atención a sus lectores sobre varios males sociales de la época, tales como el trabajo infantil o la utilización de niños para cometer delitos. Dickens se burla de la hipocresía de su época tratando estos temas tan serios con sarcasmo y humor negro. La novela pudo haber sido inspirada por la historia de Robert Blincoe, un huérfano cuyo relato sobre la dureza de su vida como trabajador infantil en un molino de algodón tuvo una gran difusión en los años 1830.']);
        Libro::create(['isbn' => '743487583', 'voto' => '5', 'num_voto' => '63', 'n_pags' => '345', 'precio' => '9.00',
            'titulo' => 'Frankenstein', 'editorial' => 'Anaya', 'atributos_extra' => 'null',
            'resumen' => 'Nada más recibir la vida de su creador, Victor Frankenstein, es abandonado por éste a su suerte, repugnado por su aspecto físico. Durante varios días, el Monstruo, asustado, entristecido e ignorante de su identidad, vaga por los bosques, sobreviviendo como puede a base de bayas silvestres y agua del río. Conforme el tiempo va empeorando y la comida se vuelve en el bosque cada vez más escasa, busca refugio en un pueblo cercano, donde todos sus intentos por contactar con seres humanos acaban de manera violenta y desastrosa, al ser rechazado por todos. Finalmente encuentra cobijo en un cobertizo abandonado en una remota granja, habitada por una familia, los De Lacey, originaria de Francia. En el transcurso de los meses siguientes, y a fuerza de observar sin ser visto a los moradores de la casa, con los que llega a encariñarse, el Monstruo aprende a hablar, a leer, a escribir y empieza a comprender mejor el mundo que le rodea. Se vuelve culto, elocuente y refinado. Pero también se vuelve consciente de su propia deformidad física y de la anormalidad de su nacimiento, que lo apartan de las personas. Gracias a unos papeles que encuentra en un bolsillo de unas ropas que se llevó del laboratorio de Frankenstein, y que son el diario de éste, acaba por conocer la historia de su creador y los pormenores relativos a su nacimiento, lo que le lleva a experimentar un creciente rechazo hacia sí mismo.

Sin embargo, no renuncia a la posibilidad de hacerse amigo de la familia, y un día que los hijos están ausentes, intenta acercarse al padre, que, al estar ciego, no puede verle y no es consciente por tanto de su deformidad. Sin embargo, cuando el resto de la familia regresa, es de nuevo objeto de rechazo y de horror, y expulsado de la casa.

De nuevo solo y separado de la compañía de todo ser inteligente, vaga otra vez por los bosques, con la esperanza de encontrar a Victor Frankenstein y apelar a su simpatía y obligaciones como creador suyo. Encuentra en su camino a una niña campesina que está a punto de morir ahogada. Le salva la vida, pero cuando el padre de la niña le descubre, le dispara con una escopeta y está a punto de matarlo.']);
        Libro::create(['isbn' => '408189985', 'voto' => '3', 'num_voto' => '25', 'n_pags' => '624', 'precio' => '21.38',
            'titulo' => 'Las hijas del capitán', 'editorial' => 'Planeta', 'atributos_extra' => 'null',
            'resumen' => 'Nueva York, 1936. La pequeña casa de comidas El Capitán arranca su andadura en la calle Catorce, uno de los enclaves de la colonia española que por entonces reside en la ciudad. La muerte accidental de su dueño, el tarambana Emilio Arenas, obliga a sus indomables hijas veinteañeras a tomar las riendas del negocio mientras en los tribunales se resuelve el cobro de una prometedora indemnización. Abatidas y acosadas por la urgente necesidad de sobrevivir, las temperamentales Victoria, Mona y Luz Arenas se abrirán paso entre rascacielos, compatriotas, adversidades y amores, decididas a convertir un sueño en realidad.

Con una lectura tan ágil y envolvente como conmovedora, Las hijas del Capitán despliega la historia de tres jóvenes españolas que se vieron obligadas a cruzar un océano, se asentaron en una urbe deslumbrante y lucharon con arrojo para encontrar su camino. Un tributo a las mujeres que resisten cuando los vientos soplan en contra y un homenaje a todos aquellos valientes que vivieron ―y viven― la aventura, a menudo épica y casi siempre incierta, de la emigración.']);
        Libro::create(['isbn' => '467052442', 'voto' => '4', 'num_voto' => '136', 'n_pags' => '256', 'precio' => '12.25',
            'titulo' => 'Las almas de Brandon', 'editorial' => 'Espasa', 'atributos_extra' => 'null',
            'resumen' => 'Las almas de Brandon es un recopilatorio de historias cortas, cuentos y poemas de todo tipo que tratan sobre el amor, la soledad, el olvido, el dolor, la alegría, la felicidad, la vida y la muerte.

Un exquisito pero agridulce viaje a través de los sentidos que te sobrecogerá de emociones y te hará reflexionar.']);
        Libro::create(['isbn' => '403518858', 'voto' => '3', 'num_voto' => '92', 'n_pags' => '176', 'precio' => '14.15',
            'titulo' => 'Piel de letra', 'editorial' => 'Aguilar', 'atributos_extra' => 'null',
            'resumen' => 'Cada piel es un mundo por descubrir.

«Mis nociones sobre tu piel eran nulas y me moría de ganas de aprender a tocarte y acariciarte pero no sabía ni cómo empezar. Cuestión de pieles dicen. Cuestiones de cada piel será. Porque cada piel es un mundo nuevo por descubrir».
Laura Escanes

Laura Escanes debuta en el mundo editorial con un libro muy personal que explora los grandes temas que tocan al corazón. Piel de letra es un compendio de textos de diversa índole, prosa poética que dibuja -acompañada de las ilustraciones de Helena Saigi Millán- un mapa de pieles que son deseo, abandono, nostalgia, lucha, fuerza, desengaño, caos, aventura, descubrimiento...

Un libro que habla de lo que se esconde debajo de la piel, de aquello que nos conecta y nos une sin importar nuestro origen, la edad que tengamos y o el destino al que nos dirigimos. Una obra sorprendente, madura, llena de imágenes poéticas y momentos, un canto a la libertad artística, una bofetada a los que critican, un auxilio para los que aman.']);

        Libro::create(['isbn' => '491291602', 'voto' => '5', 'num_voto' => '63', 'n_pags' => '536', 'precio' => '16.06', 'titulo' => 'Seremos recuerdo', 'editorial' => 'Suma', 'atributos_extra' => 'null',
            'resumen' => 'Macarena ha conseguido poner su vida y su trabajo en orden.
Macarena cree que Candela es la ayudante que necesita.
Macarena empieza de nuevo.
Leo sigue presente... como amigo.
Y mientras Macarena vuela...
Jimena se obsesiona con el pasado de Samuel,
Adriana no puede seguir luchando contra ella misma.
Porque las canciones que fuimos se convierten en pasado.
Porque los recuerdos que seremos son el futuro.

Elísabet Benavent, @BetaCoqueta, con más de 1.000.000 de ejemplares vendidos de su obra, pone el broche de oro a Canciones y recuerdos, una bilogía que reivindica el amor sin prejuicios externos, sin complejos internos. Seremos recuerdos habla de lo que sucede cuando nos damos cuenta de que lo que fuimos no afecta a lo que seremos. Una historia llena de risas, llantos, letras y melodías...

Una obra escrita para las personas valientes que se atrevan a aceptarse como son.

Los lectores opinan...
«Una historia que tiene MAGIA con mayúsculas y no solo por su trama, sino por los sentimientos que desprenden cada uno de los protagonistas».

«De nuevo Elísabet lo vuelve a hacer. Personajes reales con reacciones naturales. Te traslada a ese café, a esa ventana, a ese invierno con bufanda compartida y olor a café».

«Lo ha vuelto a hacer. La historia te atrapa desde un principio y la haces tuya porque Elísabet no sabe escribir de otro modo que desde el sentimiento puro».

«Historia de amor maravillosa, Elísabet lo ha vuelto a conseguir».']);

        Libro::create(['isbn' => '849759379', 'voto' => '5', 'num_voto' => '87', 'n_pags' => '1504', 'precio' => '12.30',
            'titulo' => 'It', 'editorial' => 'DEBOLSILLO', 'atributos_extra' => 'null',
            'resumen' => '¿Quién o qué mutila y mata a los niños de un pequeño pueblo norteamericano?
¿Por qué llega cíclicamente el horror a Derry en forma de un payaso siniestro que va sembrando la destrucción a su paso?

Esto es lo que se proponen averiguar los protagonistas de esta novela. Tras veintisiete años de tranquilidad y lejanía, una antigua promesa infantil les hace volver al lugar en el que vivieron su infancia y juventud como una terrible pesadilla. Regresan a Derry para enfrentarse con su pasado y enterrar definitivamente la amenaza que los amargó durante su niñez.

Saben que pueden morir, pero son conscientes de que no conocerán la paz hasta que aquella cosa sea destruida para siempre.

It es una de las novelas más ambiciosas de Stephen King, con la que ha logrado perfeccionar de un modo muy personal las claves del género de terror.']);
        Libro::create(['isbn' => '849062766', 'voto' => '5', 'num_voto' => '48', 'n_pags' => '496', 'precio' => '9.45',
            'titulo' => 'Mr. Mercedes', 'editorial' => 'DEBOLSILLO', 'atributos_extra' => 'null',
            'resumen' => 'Mr. Mercedes, primera novela de la «Trilogía Bill Hodges», es la historia de una guerra entre el Bien y el Mal. Un retrato inolvidable de la mente de un asesino obsesionado y demente.

Justo antes del amanecer, en una decadente ciudad americana, cientos de parados esperan la apertura de la oficina de empleo para reclamar uno de los mil puestos de trabajo que se han anunciado. Han hecho cola durante toda la noche.

De pronto, invisible hasta que lo tienen prácticamente encima, un Mercedes surge de la fría niebla de la madrugada. Su conductor atropella y aplasta a todos los que encuentra a su alcance. Acto seguido, el coche da marcha atrás y vuelve a arremeter contra ellos. El asesino huye dejando atrás ocho muertos y quince heridos.

Meses después, Bill Hodges, un policía jubilado que sigue obsesionado con este caso sin resolver, recibe una carta anónima de alguien que se declara culpable de la masacre.

Brady Hartsfield vive con su madre alcohólica en la casa donde nació. Disfrutó tanto de aquella sensación de muerte debajo de los neumáticos del Mercedes que ahora quiere recuperarla.']);
        Libro::create(['isbn' => '849793102', 'voto' => '5', 'num_voto' => '21', 'n_pags' => '528', 'precio' => '9.45',
            'titulo' => 'El misterio de Salem\'s', 'editorial' => 'DEBOLSILLO', 'atributos_extra' => 'null',
            'resumen' => 'Salem\'s Lot es un pueblo tranquilo donde nunca pasa nada. O quizás esto son solo apariencias, pues lo cierto es que sí se están sucediendo diversos hechos misteriosos, incluso escalofriantes...

Veinte años atrás, por una apuesta infantil, Ben Mears entró en la casa de los Marsten. Y lo que vio entonces aún recorre sus pesadillas. Ahora, como escritor consagrado, vuelve a Salem\'s Lot para exorcizar sus fantasmas.

Salem\'s Lot es un pueblo tranquilo y adormilado donde nunca pasa nada..., excepto la antigua tragedia de la casa de los Marsten. Y el pero muerto colgado de la verja del cementerio. Y el misterioso hombre que se instaló en la casa de los Marsten. Y los niños que desaparecen, los animales que mueren desangrados... Y la espantosa presencia de Ellos, quienesquiera que sean Ellos.']);
        Libro::create(['isbn' => '842043199', 'voto' => '5', 'num_voto' => '17', 'n_pags' => '320', 'precio' => '17.95',
            'titulo' => 'La llamada de la tribu', 'editorial' => 'ALFAGUARA', 'atributos_extra' => 'null',
            'resumen' => 'La autobiografía intelectual del Premio Nobel de Literatura Mario Vargas Llosa.

«La doctrina liberal ha representado desde sus orígenes las formas más avanzadas de la cultura democrática y lo que más nos ha ido defendiendo de la inextinguible "llamada de la tribu". Este libro quisiera contribuir con un granito de arena a esa indispensable tarea.»

La diferencia entre La llamada de la tribu y otros libros como El pez en el agua es que aquí el protagonismo no lo tienen las vivencias del autor, sino las lecturas que moldearon su forma de pensar y de ver el mundo en los últimos cincuenta años. En Nobel peruano ha hecho una cartografía de los pensadores liberales que le ayudaron a desarrollar un nuevo cuerpo de ideas después del gran trauma ideológico que supuso, por un lado, el desencanto con la Revolución Cubana y, por otro, el distanciamiento de las ideas de Jean-Paul Sartre, el autor que más lo había inspirado en su juventud.

Adam Smith, José Ortega y Gasset, Friedrich Hayek, Karl Popper, Raymond Aron, Isaiah Berlin, Jean-François Revel, le fueron al autor de enorme ayuda durante aquellos años de desazón, mostrándole otra tradición de pensamiento que privilegiaba al individuo frente a la tribu, la nación, la clase o el partido, y que defendía la libertad de expresión como valor fundamental para el ejercicio de la democracia.']);
        Libro::create(['isbn' => '849062592', 'voto' => '5', 'num_voto' => '13', 'n_pags' => '413', 'precio' => '9.45',
            'titulo' => 'Travesuras de la niña mala', 'editorial' => 'Debolsillo', 'atributos_extra' => 'null',
            'resumen' => 'Creando una admirable tensión entre lo cómico y lo trágico, el Premio Nobel de Literatura y Príncipe de Asturias de las Letras, Mario Vargas Llosa, libera en esta novela una historia en la que el amor se nos muestra indefinible, dueño de mil caras, como la niña mala.

¿Cuál es el verdadero rostro del amor?

Ricardo ve cumplido, a una edad muy temprana, el sueño que en su Lima natal alimentó desde que tenía uso de razón: vivir en París. Pero el rencuentro con un amor de adolescencia lo cambiará todo. La joven, inconformista, aventurera, pragmática e inquieta, lo arrastrará fuera del pequeño mundo de sus ambiciones.

Testigos de épocas convulsas y florecientes en ciudades como Londres, París, Tokio o Madrid, que aquí son mucho más que escenarios, ambos personajes verán sus vidas entrelazarse sin llegar a coincidir del todo. Sin embargo, esta danza de encuentros y desencuentros hará crecer la intensidad del relato página a página hasta propiciar una verdadera fusión del lector con el universo emocional de los protagonistas.

Mario Vargas Llosa juega en Travesuras de la niña mala (2006) con la realidad y la ficción para ilustrar la complejidad del amor: pasión y distancia, azar y destino, dolor y disfrute... ¿Cuál es el verdadero rostro del amor?

La crítica ha dicho...
«Una novela de amor de hoy, de erotismo, con encuentros, separaciones, sufrimientos, engaños, entrega, y también mucha verdad, y en la que Vargas Llosa, a modo de entomólogo, analiza minuciosamente la condición humana, como su gran admirado Flaubert en La educación sentimental, obra que se cita en la novela, entre otras muchas referencias literarias a las que alude el autor. Y es que la idea de novela para Vargas Llosa es "la experiencia totalizadora de la condición humana".»
El País

«La niña mala recuerda a los amorosos de Sabines: buscan la felicidad sin nunca encontrarla, pues encontrarla equivaldría a perderla sin remedio. Muy recomendable esta novela, en apariencia modesta, pero que en realidad rasca con saña exquisita en nuestros más íntimos deseos y frustraciones domésticas.»
Javier Munguía, Revista de Letras']);

    }
}
