<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Producto;

class ProductosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $productos = [
            [
                'nombre' => 'Datejust 31 Diamond',
                'descripcion' =>
                    'Caja de oro Everose de 18 quilates de 31 mm, corona atornillada con sistema de doble impermeabilidad Twinlock, bisel engastado con 46 diamantes, cristal de zafiro resistente a rayones con lente cíclope sobre la fecha, esfera Roman IV con diamantes berenjena, números romanos con 11 diamantes engastados en VI, Rolex movimiento automático calibre 2236 con manecillas centrales de horas, minutos y segundos, fecha instantánea con ajuste rápido y parada de segundos para un ajuste preciso de la hora, aproximadamente 55 horas de reserva de marcha, brazalete Oyster de oro Everose de 18 quilates con eslabones planos de tres piezas, cierre de corona plegable oculto hebilla. Resistente al agua hasta 100 metros.',
                'marca' => 'Rolex',
                'foto' => '',
                'precio' => 62765,
            ],
            [
                'nombre' => 'Royal Oak 18k',
                'descripcion' =>
                    'Este modelo, que presenta 3 categorías de complicaciones de reloj: medición de tiempo breve, mecanismo de sonería e indicaciones astronómicas, está equipado con el movimiento interno Calibre 2885, fabricado de principio a fin por un único maestro relojero en el prestigioso taller de Audemars Piguet.',
                'marca' => 'Audemars Piguet',
                'foto' => '',
                'precio' => 66750,
            ],
            [
                'nombre' => 'Heritage',
                'descripcion' =>
                    'CARL F. BUCHERER Heritage Tourbillon DoublePeripheral Reloj de pulsera de edición limitada de 42,5 mm, oro rojo de 18 quilates, automático, redondo, 3 atm: índices plateados, piel de aligátor con cierre desplegable (Edición limitada de 88 piezas).',
                'marca' => 'Carl F Bucherer',
                'foto' => '',
                'precio' => 73950,
            ],
            [
                'nombre' => 'Happy Sport',
                'descripcion' =>
                    'Happy Sport se ha convertido en un referente de la relojería y en un verdadero icono gracias a su audaz diseño. El reloj Happy Sport y sus legendarios diamantes móviles se reinventan en una versión de joyería que realza la belleza del diamante a través de un engaste de garra. En esta tarea técnica, los diamantes parecen todavía más ligeros y brillantes. y por supuesto, este modelo está equipado con un movimiento automático fabricado por Chopard, lo que garantiza la excelencia mecánica de este símbolo de la relojería. Los pequeños diamantes hacen grandes cosas.',
                'marca' => 'Chopard',
                'foto' => '',
                'precio' => 76720,
            ],
            [
                'nombre' => 'Royal',
                'descripcion' =>
                    'En una nueva colaboración con el diseñador de moda internacional Matthew Williams, este Royal Oak Automático íntegramente en oro amarillo rinde homenaje a la artesanía y la emoción.',
                'marca' => 'Audemars Piguet',
                'foto' => '',
                'precio' => 77500,
            ],
            [
                'nombre' => 'Code',
                'descripcion' =>
                    'Por primera vez, la caja y la esfera de oro rosa de 18 quilates del Code 11.59 de Audemars Piguet Automatic brillan con diamantes talla brillante. El reloj se ve aún más realzado por la presencia de una refinada correa de piel de aligátor color beige perla.',
                'marca' => 'Audemars Piguet',
                'foto' => '',
                'precio' => 88750,
            ],
            [
                'nombre' => 'Metiers',
                'descripcion' =>
                    'La esfera meticulosamente hecha a mano presenta intrincados motivos de esmalte y guilloché, mostrando una sinfonía visual de colores y texturas. Su caja finamente pulida, fabricada con los mejores materiales, rezuma lujo y refinamiento. Con un movimiento de precisión en su núcleo, este reloj no solo indica la hora sino que también cuenta una historia de sofisticación y estilo. El Vacheron Constantin Métiers no es sólo un reloj; Es una obra de arte para aquellos que aprecian las cosas buenas de la vida.',
                'marca' => 'Vacheron Constantin',
                'foto' => '',
                'precio' => 75200,
            ],
            [
                'nombre' => 'Complications Calatrava',
                'descripcion' =>
                    'Con su diseño clásico y sobrio, este reloj es una obra maestra de la artesanía relojera. Su caja meticulosamente acabada a mano y sus intrincadas complicaciones reflejan la dedicación de Patek Philippe a la tradición y la innovación. Símbolo del gusto refinado, el Complications Calatrava es más que un simple reloj; es una declaración de sofisticación y estilo.',
                'marca' => 'Patek Philippe',
                'foto' => '',
                'precio' => 75700,
            ],
            [
                'nombre' => 'D-Date 36',
                'descripcion' =>
                    'Caja de 31 mm en oro Everose de 18 quilates, corona atornillada con sistema doble de impermeabilidad Twinlock, bisel engastado con 46 diamantes, cristal de zafiro resistente a rayones con lente cíclope sobre la fecha, esfera de nácar, marcadores de hora con diamantes, movimiento automático calibre Rolex 2236 con manecillas centrales de horas, minutos y segundos, fecha instantánea con ajuste rápido y parada de segundos para un ajuste preciso de la hora, aproximadamente 55 horas de reserva de marcha, brazalete Oyster de oro Everose de 18 quilates con eslabones planos de tres piezas y hebilla Crownclasp plegable oculta. Resistente al agua hasta 100 metros.',
                'marca' => 'Rolex',
                'foto' => '',
                'precio' => 79995,
            ]
        ];

        foreach ($productos as $producto) {
            Producto::create($producto);
        }
    }
}
