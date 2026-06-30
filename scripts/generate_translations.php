<?php
/**
 * Generates missing RST translation files for fr, zh, pt, es.
 * Run: php scripts/generate_translations.php
 */

$rootDir = dirname(__DIR__);
$date    = date('r');

$configs = [
    'fr' => [
        'dir'       => "$rootDir/fr/tips",
        'secFile'   => "$rootDir/fr/tipSection.rst",
        'baseUrl'   => 'https://php-tips.readthedocs.io/fr/latest',
        'locale'    => 'fr',
        'inLang'    => 'fr-FR',
        'seeAlso'   => 'See Also',
        'features'  => 'PHP Features',
        'errors'    => 'PHP Error Messages',
        'tryMe'     => '[Try me]',
        'authorPfx' => 'By ',
        'frAnchor'  => true,
        'anchorPfx' => '',
        'descSep'   => ': ',
        'descEnd'   => '.',
        'wideChars' => false,
        'tocTitle'  => 'Trucs et astuces PHP',
        'tocHline'  => '--------------------',
        'tocCap'    => 'Contenu :',
    ],
    'zh' => [
        'dir'       => "$rootDir/zh/tips",
        'secFile'   => "$rootDir/zh/tipSection.rst",
        'baseUrl'   => 'https://php-tips.readthedocs.io/zh/latest',
        'locale'    => 'zh_CN',
        'inLang'    => 'zh-CN',
        'seeAlso'   => '参见',
        'features'  => 'PHP 特性',
        'errors'    => 'PHP 错误消息',
        'tryMe'     => '[在线试用]',
        'authorPfx' => '作者：',
        'frAnchor'  => false,
        'anchorPfx' => 'zh-',
        'descSep'   => '：',
        'descEnd'   => '。',
        'wideChars' => true,
        'tocTitle'  => 'PHP 技巧与窍门',
        'tocHline'  => '--------------',
        'tocCap'    => '目录：',
    ],
    'pt' => [
        'dir'       => "$rootDir/pt/tips",
        'secFile'   => "$rootDir/pt/tipSection.rst",
        'baseUrl'   => 'https://php-tips.readthedocs.io/pt/latest',
        'locale'    => 'pt_BR',
        'inLang'    => 'pt-BR',
        'seeAlso'   => 'Veja também',
        'features'  => 'Características do PHP',
        'errors'    => 'Mensagens de Erro do PHP',
        'tryMe'     => '[Experimente]',
        'authorPfx' => 'Por ',
        'frAnchor'  => false,
        'anchorPfx' => 'pt-',
        'descSep'   => ': ',
        'descEnd'   => '.',
        'wideChars' => false,
        'tocTitle'  => 'Dicas PHP',
        'tocHline'  => '---------',
        'tocCap'    => 'Conteúdo:',
    ],
    'es' => [
        'dir'       => "$rootDir/es/tips",
        'secFile'   => "$rootDir/es/tipSection.rst",
        'baseUrl'   => 'https://php-tips.readthedocs.io/es/latest',
        'locale'    => 'es',
        'inLang'    => 'es',
        'seeAlso'   => 'Ver también',
        'features'  => 'Características de PHP',
        'errors'    => 'Mensajes de Error de PHP',
        'tryMe'     => '[Pruébalo]',
        'authorPfx' => 'Por ',
        'frAnchor'  => false,
        'anchorPfx' => 'es-',
        'descSep'   => ': ',
        'descEnd'   => '.',
        'wideChars' => false,
        'tocTitle'  => 'Consejos PHP',
        'tocHline'  => '------------',
        'tocCap'    => 'Contenido:',
    ],
];

$translations = [
    'fr' => [
        'larger_than_int' => [
            'title'   => 'Plus grand qu\'un entier',
            'content' => '``printf()`` affiche un entier sous forme de chaîne de caractères. Le format ``%u`` traite l\'entier comme un entier non signé, alors que PHP ne gère que les entiers signés. Ici, -1 correspond en réalité à 0xffffffffffffff, et la chaîne résultante est deux fois plus grande que le plus grand entier PHP, ``PHP_INT_MAX``.' . "\n"
                       . 'Comme la valeur est retournée sous forme de chaîne, elle semble plus grande, mais PHP la convertit en flottant dès qu\'il doit la traiter.',
            'seeAlso' => ['Toot original' => 'https://phpc.social/@ramsey/116789708212135539'],
            '3v4l'    => ['Plus grand que PHP_INT_MAX' => 'https://3v4l.org/GZtNq#v8.5.7'],
        ],
        'other_type_for_property' => [
            'title'   => 'Autres types pour une propriété',
            'content' => 'Il est possible de faire accepter à une propriété typée plus que son type de définition.' . "\n"
                       . 'Grâce aux propriétés à hooks, le type de la valeur entrante peut être différent du type final : en effet, le hook de la propriété doit convertir cette valeur vers le type réel.' . "\n"
                       . 'Une contrainte est que le type supporté doit être plus large que le type sous-jacent de la propriété. Cela s\'obtient facilement en utilisant un type union composé du type de la propriété et de tous les autres types nécessaires.' . "\n"
                       . 'En revanche, le hook ``get`` ne peut retourner que son type exact : pas de covariance, pas de contravariance.',
            'seeAlso' => ['Le type accessible en écriture d\'une propriété peut désormais différer de son type accessible en lecture' => 'https://x.com/alexdaubois/status/2069322570831163788'],
            '3v4l'    => ['Assigner une valeur à une propriété' => 'https://3v4l.org/vuKfQ#v8.5.7'],
        ],
        'extra_class' => [
            'title'   => '``::class`` supplémentaire',
            'content' => 'Il est possible d\'utiliser ``::class`` lors de l\'accès aux éléments statiques via l\'opérateur ``::`` : ``::class`` renvoie le nom complet de la classe, qui est ensuite utilisé pour accéder à l\'élément statique. Au final, cela n\'apporte rien à la syntaxe et peut être omis.' . "\n"
                       . 'Veillez à distinguer le nom initial dans la syntaxe, qui est un identifiant : PHP ne le confond pas avec une constante du même nom. En revanche, après un opérateur ``::`` , ``::class`` ne peut pas être utilisé sur une chaîne de caractères et doit l\'être sur un autre objet.',
            'seeAlso' => ['Certaines structures de code sont... très créatives !' => 'https://x.com/rectorphp/status/2071247626238853603'],
            '3v4l'    => ['A::class' => 'https://3v4l.org/QdZ5J#v8.5.7'],
        ],
        'unreachable_method' => [
            'title'   => 'La méthode inatteignable',
            'content' => 'Comment appeler la méthode A::foo() ? A::foo() est publique, mais elle appartient aussi à une classe abstraite. Il est impossible de l\'appeler directement, car aucun objet de ce type ne peut être créé.' . "\n"
                       . 'C\'est également le cas pour B, il faut donc appeler C. Or, entre A et C, il y a B::foo(), qui intercepte l\'appel à A::foo() : elle a la priorité. Donc C::goo() peut atteindre B::foo(), mais pas A::foo().' . "\n"
                       . 'La solution est de ne pas utiliser ``parent`` mais d\'utiliser directement le nom de la classe et l\'opérateur statique. Même si la méthode cible n\'est pas statique, elle peut être appelée ainsi depuis une classe enfant, et la variable ``$this`` sera fournie.' . "\n"
                       . 'Cette astuce fonctionne avec les méthodes publiques et protégées, mais pas avec les méthodes privées : c\'est la visibilité qui entre en jeu.',
            'seeAlso' => [],
            '3v4l'    => ['La méthode inatteignable' => 'https://3v4l.org/pXCpG#v8.5.7'],
        ],
        'min-max' => [
            'title'   => '``min()`` et ``max()`` pour délimiter un intervalle',
            'content' => 'Astuce PHP : limiter un nombre à un intervalle en une seule ligne.' . "\n"
                       . 'Besoin d\'une valeur entre 0 et 1 ?' . "\n"
                       . 'Imbriquez simplement ``min()`` et ``max()`` : ``max(0, min($value, 1))``.' . "\n"
                       . 'Cela ramène toutes les valeurs inférieures à 0 vers 0, et toutes celles supérieures à 1 vers 1.' . "\n"
                       . 'Bien sûr, une instruction if-else peut sembler plus lisible, si vous préférez :)' . "\n"
                       . 'Addendum : le futur PHP 8.6 disposera d\'une fonction ``clamp()`` à cet effet.' . "\n"
                       . 'Addendum 2 : min et max peuvent être échangés, ainsi que leurs littéraux, avec le même résultat.' . "\n"
                       . 'Addendum 3 : cela fonctionne aussi avec les chaînes de caractères.',
            'seeAlso' => [],
            '3v4l'    => [
                'min-max inversés'         => 'https://3v4l.org/FM5ZC#v8.5.7',
                'min-max'                  => 'https://3v4l.org/shWEL#v8.5.7',
                'min-max avec des chaînes' => 'https://3v4l.org/HHLkD#v8.5.7',
            ],
        ],
    ],
    'zh' => [
        'extra_class' => [
            'title'   => '多余的 ``::class``',
            'content' => '在使用 ``::`` 运算符访问静态元素时，可以使用 ``::class``：``::class`` 返回类的完整名称，然后用于查找该静态元素。最终，这对语法没有任何贡献，可以省略。' . "\n"
                       . '请注意区分语法中的初始名称——这是一个标识符：PHP 不会将其与同名常量混淆。另一方面，在 ``::`` 运算符之后，``::class`` 不能用于字符串，而必须用于另一个对象。',
            'seeAlso' => ['某些代码结构真是……非常有创意！' => 'https://x.com/rectorphp/status/2071247626238853603'],
            '3v4l'    => ['A::class' => 'https://3v4l.org/QdZ5J#v8.5.7'],
        ],
        'unreachable_method' => [
            'title'   => '无法访问的方法',
            'content' => '如何调用 A::foo() 方法？A::foo() 是公开的，但它属于一个抽象类。由于无法创建此类对象，因此不能直接调用它。' . "\n"
                       . '在 B 的情况也是如此，所以必须通过 C 来调用。然而，在 A 和 C 之间，存在 B::foo()，它拦截了对 A::foo() 的调用：B::foo() 具有优先权。因此，C::goo() 可以访问 B::foo()，但无法访问 A::foo()。' . "\n"
                       . '解决方案是不使用 ``parent``，而是直接使用类名和静态运算符。即使目标方法不是静态的，也可以从子类内部以静态方式调用它，并且 ``$this`` 变量将被提供。' . "\n"
                       . '此技巧适用于公开和受保护的方法，但不适用于私有方法：这是访问修饰符的规则。',
            'seeAlso' => [],
            '3v4l'    => ['无法访问的方法' => 'https://3v4l.org/pXCpG#v8.5.7'],
        ],
        'min-max' => [
            'title'   => '用 ``min()`` 和 ``max()`` 限制数值范围',
            'content' => 'PHP 技巧：一行代码将数字限制在某区间内。' . "\n"
                       . '需要一个 0 到 1 之间的值？' . "\n"
                       . '只需嵌套 ``min()`` 和 ``max()``：``max(0, min($value, 1))``。' . "\n"
                       . '这会将所有低于 0 的值提升到 0，将所有高于 1 的值降低到 1。' . "\n"
                       . '当然，如果您更喜欢可读性，if-else 语句看起来可能更清晰 :)' . "\n"
                       . '补充：未来的 PHP 8.6 将提供 ``clamp()`` 函数用于此目的。' . "\n"
                       . '补充 2：min 和 max 可以互换，其字面量也随之互换，效果相同。' . "\n"
                       . '补充 3：这同样适用于字符串。',
            'seeAlso' => [],
            '3v4l'    => [
                'min-max 互换'       => 'https://3v4l.org/FM5ZC#v8.5.7',
                'min-max'            => 'https://3v4l.org/shWEL#v8.5.7',
                'min-max 用于字符串' => 'https://3v4l.org/HHLkD#v8.5.7',
            ],
        ],
        'URL_as_comments' => [
            'title'   => 'URL 作为注释',
            'content' => '下面的代码中包含一个原始 URL。PHP 将该代码解析为一个 goto 标签，后跟以 // 开头的行内注释。因此，该注释是有效的，但不能重复使用，因为这会创建一个重复的 goto 标签，PHP 将抛出错误。',
            'seeAlso' => [
                'goto（PHP 手册）'          => 'https://www.php.net/manual/zh/control-structures.goto.php',
                'URL 是合法的 PHP 代码？！' => 'https://liamhammett.com/a-url-is-valid-php-code',
            ],
            '3v4l'    => ['URL 作为注释' => 'https://3v4l.org/3ifYo'],
        ],
    ],
    'pt' => [
        'extra_class' => [
            'title'   => '``::class`` Extra',
            'content' => 'É possível usar ``::class`` ao acessar elementos estáticos com o operador ``::`` : o ``::class`` retorna o nome completo da classe, que é então usado para buscar o elemento estático. No final, isso não acrescenta nada à sintaxe e pode ser omitido.' . "\n"
                       . 'Certifique-se de diferenciar o nome inicial na sintaxe, que é um identificador: o PHP não o confunde com uma constante de mesmo nome. Por outro lado, após um operador ``::`` , o ``::class`` não pode ser usado em uma string e deve ser usado em outro objeto.',
            'seeAlso' => ['Algumas estruturas de código são... muito criativas!' => 'https://x.com/rectorphp/status/2071247626238853603'],
            '3v4l'    => ['A::class' => 'https://3v4l.org/QdZ5J#v8.5.7'],
        ],
        'unreachable_method' => [
            'title'   => 'O Método Inalcançável',
            'content' => 'Como é possível chamar o método A::foo()? A::foo() é público, mas também pertence a uma classe abstrata. Não é possível chamá-lo diretamente, pois nenhum objeto desse tipo pode ser criado.' . "\n"
                       . 'O mesmo vale para B, então é preciso chamar C. Agora, entre A e C, há B::foo(), que intercepta a chamada a A::foo(): ela tem prioridade. Portanto, C::goo() pode alcançar B::foo(), mas não A::foo().' . "\n"
                       . 'A solução é não usar ``parent``, mas sim usar diretamente o nome da classe e o operador estático. Mesmo que o método alvo não seja estático, ele pode ser chamado dessa forma a partir de uma classe filha, e a variável ``$this`` será fornecida.' . "\n"
                       . 'Este truque funciona com métodos públicos e protegidos, mas não com os privados: é a visibilidade que fala.',
            'seeAlso' => [],
            '3v4l'    => ['O método inalcançável' => 'https://3v4l.org/pXCpG#v8.5.7'],
        ],
        'min-max' => [
            'title'   => '``min()`` e ``max()`` para Delimitar Intervalos',
            'content' => 'Truque PHP: limitar um número a um intervalo em uma linha.' . "\n"
                       . 'Precisa de um valor entre 0 e 1?' . "\n"
                       . 'Basta aninhar ``min()`` e ``max()``: ``max(0, min($value, 1))``.' . "\n"
                       . 'Isso fixa todos os valores abaixo de 0 em 0 e todos os acima de 1 em 1.' . "\n"
                       . 'Claro, uma instrução if-else pode parecer mais legível, se preferir :)' . "\n"
                       . 'Adendo: o futuro PHP 8.6 terá a função ``clamp()`` para esse propósito.' . "\n"
                       . 'Adendo 2: min e max podem ser trocados, juntamente com seus literais, com o mesmo efeito.' . "\n"
                       . 'Adendo 3: também funciona com strings.',
            'seeAlso' => [],
            '3v4l'    => [
                'min-max invertidos'  => 'https://3v4l.org/FM5ZC#v8.5.7',
                'min-max'             => 'https://3v4l.org/shWEL#v8.5.7',
                'min-max com strings' => 'https://3v4l.org/HHLkD#v8.5.7',
            ],
        ],
        'URL_as_comments' => [
            'title'   => 'URL como Comentários',
            'content' => 'O código abaixo inclui uma URL bruta no código. O PHP interpreta esse código como um rótulo goto, seguido de um comentário em linha começando com //. Assim, o comentário é válido, mas não pode ser repetido, pois isso criaria um rótulo goto duplicado e o PHP geraria um erro.',
            'seeAlso' => [
                'goto (manual PHP)'             => 'https://www.php.net/manual/pt_BR/control-structures.goto.php',
                'Uma URL é código PHP válido?!' => 'https://liamhammett.com/a-url-is-valid-php-code',
            ],
            '3v4l'    => ['URL como comentários' => 'https://3v4l.org/3ifYo'],
        ],
        'array-callaback-index' => [
            'title'   => 'Índice de Callback em Array',
            'content' => 'Um callback de array deve ser construído com dois elementos, e seus índices devem ser ``0``, para a classe ou objeto, e ``1`` para o nome do método. O PHP verifica o número de elementos no array e o índice efetivamente utilizado.' . "\n"
                       . 'Por outro lado, é possível construir o array na ordem errada mas com o índice correto e obter o resultado esperado. Que charme!',
            'seeAlso' => ['Callbacks / Callables (manual PHP)' => 'https://www.php.net/manual/pt_BR/language.types.callable.php'],
            '3v4l'    => ['Qual array é chamável? ' => 'https://3v4l.org/49TcN'],
        ],
    ],
    'es' => [
        'extra_class' => [
            'title'   => '``::class`` Extra',
            'content' => 'Es posible usar ``::class`` al acceder a elementos estáticos con el operador ``::`` : el ``::class`` devuelve el nombre completo de la clase, que luego se usa para buscar el elemento estático. Al final, esto no añade nada a la sintaxis y puede omitirse.' . "\n"
                       . 'Asegúrese de diferenciar el nombre inicial en la sintaxis, que es un identificador: PHP no lo confunde con una constante del mismo nombre. Por otro lado, después de un operador ``::`` , ``::class`` no puede usarse en una cadena de caracteres y debe usarse en otro objeto.',
            'seeAlso' => ['¡Algunas estructuras de código son... muy creativas!' => 'https://x.com/rectorphp/status/2071247626238853603'],
            '3v4l'    => ['A::class' => 'https://3v4l.org/QdZ5J#v8.5.7'],
        ],
        'unreachable_method' => [
            'title'   => 'El Método Inalcanzable',
            'content' => '¿Cómo se puede llamar al método A::foo()? A::foo() es público, pero también pertenece a una clase abstracta. No es posible llamarlo directamente, ya que no se puede crear ningún objeto de ese tipo.' . "\n"
                       . 'Lo mismo ocurre con B, por lo que hay que llamar a C. Ahora bien, entre A y C está B::foo(), que intercepta la llamada a A::foo(): tiene prioridad. Así, C::goo() puede alcanzar B::foo() pero no A::foo().' . "\n"
                       . 'La solución es no usar ``parent`` sino usar directamente el nombre de la clase y el operador estático. Aunque el método objetivo no es estático, puede llamarse así desde una clase hija, y la variable ``$this`` será proporcionada.' . "\n"
                       . 'Este truco funciona con métodos públicos y protegidos, pero no con los privados: es la visibilidad la que manda.',
            'seeAlso' => [],
            '3v4l'    => ['El método inalcanzable' => 'https://3v4l.org/pXCpG#v8.5.7'],
        ],
        'min-max' => [
            'title'   => '``min()`` y ``max()`` para Intervalos',
            'content' => 'Truco PHP: limitar un número a un rango en una línea.' . "\n"
                       . '¿Necesita un valor entre 0 y 1?' . "\n"
                       . 'Simplemente anide ``min()`` y ``max()``: ``max(0, min($value, 1))``.' . "\n"
                       . 'Esto fija todos los valores por debajo de 0 en 0 y todos los que superan 1 en 1.' . "\n"
                       . 'Por supuesto, una instrucción if-else puede parecer más legible, si lo prefiere :)' . "\n"
                       . 'Adenda: el futuro PHP 8.6 tendrá la función ``clamp()`` para ese propósito.' . "\n"
                       . 'Adenda 2: min y max pueden intercambiarse, junto con sus literales, con el mismo efecto.' . "\n"
                       . 'Adenda 3: también funciona con strings.',
            'seeAlso' => [],
            '3v4l'    => [
                'min-max invertidos'  => 'https://3v4l.org/FM5ZC#v8.5.7',
                'min-max'             => 'https://3v4l.org/shWEL#v8.5.7',
                'min-max con strings' => 'https://3v4l.org/HHLkD#v8.5.7',
            ],
        ],
    ],
];

$sources = [];
foreach (['larger_than_int', 'other_type_for_property', 'extra_class', 'min-max', 'URL_as_comments', 'array-callaback-index', 'unreachable_method'] as $base) {
    $sources[$base] = json_decode(file_get_contents("$rootDir/docs/$base.json"), true);
}

// ── Helpers ───────────────────────────────────────────────────────────────────

function make_anchor(string $title): string
{
    $ascii = iconv('UTF-8', 'ASCII//TRANSLIT//IGNORE', $title);
    if ($ascii !== false && $ascii !== '') {
        $title = $ascii;
    }
    $title = strtr(strtolower(ltrim($title, '_')), ' ', '-');
    $title = str_replace('`', '', $title);
    $title = preg_replace('/[^a-z0-9\-_]/', '', $title);
    return $title;
}

function display_width(string $s): int
{
    // CJK characters count as 2 columns, all others as 1
    preg_match_all(
        '/[\x{1100}-\x{115F}\x{2E80}-\x{A4CF}\x{AC00}-\x{D7AF}\x{F900}-\x{FAFF}\x{FE10}-\x{FE6F}\x{FF00}-\x{FF60}\x{FFE0}-\x{FFE6}]/u',
        $s, $m
    );
    return mb_strlen($s) + count($m[0]);
}

function hwidth(string $s, bool $wide): int
{
    return $wide ? display_width($s) : mb_strlen($s);
}

function generateRST(array $src, array $t, array $cfg, string $date): string
{
    $name  = str_replace('.png', '', $src['image']);
    $wide  = $cfg['wideChars'];

    $anchor = $cfg['frAnchor']
        ? make_anchor($t['title'])
        : $cfg['anchorPfx'] . make_anchor($src['title']);

    $title      = $t['title'];
    $titleClean = str_replace('`', '', $title);
    $underline  = str_repeat('-', hwidth($title, $wide));

    // First sentence
    $first      = preg_split('/[\.\?;\n。？；！]/u', $t['content'])[0];
    $first      = trim($first);
    $firstClean = trim(str_replace(['``', '`'], '', $first));

    $ldjson = json_encode([
        '@context' => 'https://schema.org',
        '@graph'   => [
            [
                '@type'           => 'WebPage',
                '@id'             => "{$cfg['baseUrl']}/tips/$name.html",
                'url'             => "{$cfg['baseUrl']}/tips/$name.html",
                'name'            => $titleClean,
                'isPartOf'        => ['@id' => 'https://www.exakat.io/'],
                'datePublished'   => $date,
                'dateModified'    => $date,
                'description'     => $firstClean,
                'inLanguage'      => $cfg['inLang'],
                'potentialAction' => [
                    ['@type' => 'ReadAction', 'target' => ["{$cfg['baseUrl']}/tips/$name.html"]],
                ],
            ],
            [
                '@type'       => 'WebSite',
                '@id'         => 'https://www.exakat.io/',
                'url'         => 'https://www.exakat.io/',
                'name'        => 'Exakat',
                'description' => 'Smart PHP static analysis',
                'inLanguage'  => $cfg['inLang'],
            ],
        ],
    ]);

    $sep = $cfg['descSep'];
    $end = $cfg['descEnd'];

    $r  = ".. _$anchor:\n\n";
    $r .= "$title\n$underline\n\n";
    $r .= ".. meta::\n";
    $r .= "\t:description:\n";
    $r .= "\t\t$titleClean{$sep}$firstClean$end\n";
    $r .= "\t:twitter:card: summary_large_image\n";
    $r .= "\t:twitter:site: @exakat\n";
    $r .= "\t:twitter:title: $titleClean\n";
    $r .= "\t:twitter:description: $titleClean{$sep}$firstClean\n";
    $r .= "\t:twitter:creator: @exakat\n";
    $r .= "\t:twitter:image:src: {$cfg['baseUrl']}/_images/{$src['image']}\n";
    $r .= "\t:og:image: {$cfg['baseUrl']}/_images/{$src['image']}\n";
    $r .= "\t:og:title: $titleClean\n";
    $r .= "\t:og:type: article\n";
    $r .= "\t:og:description: $firstClean\n";
    $r .= "\t:og:url: {$cfg['baseUrl']}/tips/$name.html\n";
    $r .= "\t:og:locale: {$cfg['locale']}\n\n";
    $r .= ".. raw:: html\n\n";
    $r .= "\t<script type=\"application/ld+json\">$ldjson</script>\n\n";

    $author  = $src['author']  ?? '';
    $contact = $src['contact'] ?? '';
    if (!empty($author)) {
        $r .= "{$cfg['authorPfx']}`$author <$contact>`_\n\n";
    }

    $r .= ".. image:: ../../images/{$src['image']}\n\n";
    $r .= str_replace("\n", "\n\n", $t['content']) . "\n";

    $links = array_merge($t['seeAlso'] ?? [], $t['3v4l'] ?? []);
    if (!empty($links)) {
        $sec = $cfg['seeAlso'];
        $r .= "\n$sec\n" . str_repeat('_', hwidth($sec, $wide)) . "\n\n";
        foreach ($links as $lt => $lu) {
            $r .= str_contains($lu, '3v4l')
                ? "* `$lt <$lu>`_ {$cfg['tryMe']}\n"
                : "* `$lt <$lu>`_\n";
        }
        $r .= "\n";
    }

    $phpError = (array)($src['phpError'] ?? []);
    if (!empty($phpError)) {
        $sec = $cfg['errors'];
        $r .= "\n$sec\n" . str_repeat('_', hwidth($sec, $wide)) . "\n\n";
        foreach ($phpError as $et => $ei) {
            $url = 'https://php-errors.readthedocs.io/en/latest/messages/' . urlencode($ei) . '.html';
            $r .= "* `$et <$url>`_\n\n";
        }
        $r .= "\n";
    }

    $features = (array)($src['features'] ?? []);
    if (!empty($features)) {
        $sec = $cfg['features'];
        $r .= "\n$sec\n" . str_repeat('_', hwidth($sec, $wide)) . "\n\n";
        foreach ($features as $fi) {
            $url = 'https://php-dictionary.readthedocs.io/en/latest/dictionary/' . urlencode($fi) . '.ini.html';
            $r .= "* `$fi <$url>`_\n\n";
        }
        $r .= "\n";
    }

    return $r;
}

function rebuildTipSection(array $cfg): void
{
    $files = glob($cfg['dir'] . '/*.rst');
    sort($files);
    $entries = array_map(fn($f) => '   tips/' . basename($f), $files);
    $content  = "{$cfg['tocTitle']}\n{$cfg['tocHline']}\n\n";
    $content .= ".. toctree::\n";
    $content .= "   :maxdepth: 1\n";
    $content .= "   :caption: {$cfg['tocCap']}\n\n";
    $content .= implode("\n", $entries) . "\n";
    file_put_contents($cfg['secFile'], $content);
    echo "  → rebuilt {$cfg['secFile']} (" . count($files) . " entries)\n";
}

// ── Main ──────────────────────────────────────────────────────────────────────

$written = 0;
foreach ($translations as $lang => $langTips) {
    $cfg = $configs[$lang];
    echo "[$lang]\n";
    foreach ($langTips as $base => $t) {
        $out = "{$cfg['dir']}/$base.rst";
        if (file_exists($out)) {
            echo "  SKIP $base.rst\n";
            continue;
        }
        $src = $sources[$base] ?? null;
        if (!$src) {
            echo "  ERROR: no source for $base\n";
            continue;
        }
        file_put_contents($out, generateRST($src, $t, $cfg, $date));
        echo "  OK   $base.rst\n";
        $written++;
    }
    rebuildTipSection($cfg);
}

echo "\nDone: $written file(s) written.\n";
