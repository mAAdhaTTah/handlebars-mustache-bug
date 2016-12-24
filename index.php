<?php

require __DIR__ . '/vendor/autoload.php';

use Handlebars\Handlebars;

$data = array(
    'shouldIterate' => array(
        array(
            'childKey' => 'value1',
        ),
        array(
            'childKey' => 'value2',
        ),
    ),
    'shouldNotIterate' => array(
        'childKey1' => 'value1',
        'childKey2' => 'value2',
    )
);

$template = <<<'EOD'
<h2>shouldIterate</h2>

{{#shouldIterate}}
    childKey: {{childKey}}<br />
{{/shouldIterate}}

<h2>shouldNotIterate</h2>

{{#shouldNotIterate}}
    childKey1: {{childKey1}}<br />
    childKey2: {{childKey2}}<br />
{{/shouldNotIterate}}
EOD;

?>

<h1>Mustache Rendering</h1>

<?php
$mustache = new Mustache_Engine();
echo $mustache->render($template, $data);
?>

<h1>Handlebars Rendering</h1>

<?php
$handlebars = new Handlebars();
echo $handlebars->render($template, $data);
?>
