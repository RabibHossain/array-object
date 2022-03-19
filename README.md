# array-object
Just need to install <b>galib/array-object</b> package to run the project.

Installation
=============
    composer install
    composer require galib/array-object

Usages
======
Need to add /vendor/autoload at respective class

    require_once __DIR__ . '/vendor/autoload.php';
    use galib\ArrayService\ArrayService;

Need to add data schema to display in table (sample data)

    $array = [
        'key' => [
            'ranking', 'name', 'club'
        ],
        'data' => [
            [
                'ranking' => '1',
                'name' => 'Robert Lewandowski',
                'club' => 'Bayern Munich'
            ],
            [
                'ranking' => '2',
                'name' => 'Cristiano Ronaldo',
                'club' => 'Juventus'
            ],
            [
                'ranking' => '3',
                'name' => 'Lionel Messi',
                'club' => 'Paris Saint-Germain'
            ],
            [
                'ranking' => '4',
                'name' => 'Karim Benzema',
                'club' => 'Real Madrid'
            ],
            [
                'ranking' => '5',
                'name' => 'Neymar Jr',
                'club' => 'Paris Saint-Germain'
            ]
        ]
    ];

Display the data on table

    $obj = new ArrayService($array['key'], $array['data']);
    echo $obj->displayAsTable();

Advance
======
If anyone wants to add more column in table then please add the column name in lowercase in key item array ex- <code>'year'</code>.
Then add the value in data schema item value with key ex- <code>'year' => 2021</code>

RUN
===
Run this command 
    
    php -S localhost:8000

