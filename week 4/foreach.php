<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1 class="display-2 mt-3 mb-3">Php Loops</h1>
                </div>
            </div>
            <div class="row">
                <?php
                    function getUsers(){
                        $url = "https://pixelr.io/wp-content/themes/pixelrio/humber/users.php";
                        $data = file_get_contents($url);
                        return $data;                        
                    }
                    $users = [
                        [
                            'id' => 1,
                            'name' => 'Leanne Graham',
                            'username' => 'Bret',
                            'email' => 'Sincere@april.biz',
                            'address' => [
                                'street' => 'Kulas Light',
                                'suite' => 'Apt. 556',
                                'city' => 'Gwenborough',
                                'zipcode' => '92998-3874',
                                'geo' => [
                                    'lat' => '-37.3159',
                                    'lng' => '81.1496',
                                ],
                            ],
                            'phone' => '1-770-736-8031 x56442',
                            'website' => 'hildegard.org',
                            'company' => [
                                'name' => 'Romaguera-Crona',
                                'catchPhrase' => 'Multi-layered client-server neural-net',
                                'bs' => 'harness real-time e-markets',
                            ],
                        ],
                        [
                            'id' => 2,
                            'name' => 'Ervin Howell',
                            'username' => 'Antonette',
                            'email' => 'Shanna@melissa.tv',
                            'address' => [
                                'street' => 'Victor Plains',
                                'suite' => 'Suite 879',
                                'city' => 'Wisokyburgh',
                                'zipcode' => '90566-7771',
                                'geo' => [
                                    'lat' => '-43.9509',
                                    'lng' => '-34.4618',
                                ],
                            ],
                            'phone' => '010-692-6593 x09125',
                            'website' => 'anastasia.net',
                            'company' => [
                                'name' => 'Deckow-Crist',
                                'catchPhrase' => 'Proactive didactic contingency',
                                'bs' => 'synergize scalable supply-chains',
                            ],
                        ],
                        [
                            'id' => 6,
                            'name' => 'Mrs. Dennis Schulist',
                            'username' => 'Leopoldo_Corkery',
                            'email' => 'Karley_Dach@jasper.info',
                            'address' => [
                                'street' => 'Norberto Crossing',
                                'suite' => 'Apt. 950',
                                'city' => 'South Christy',
                                'zipcode' => '23505-1337',
                                'geo' => [
                                    'lat' => '-71.4197',
                                    'lng' => '71.7478',
                                ],
                            ],
                            'phone' => '1-477-935-8478 x6430',
                            'website' => 'ola.org',
                            'company' => [
                                'name' => 'Considine-Lockman',
                                'catchPhrase' => 'Synchronised bottom-line interface',
                                'bs' => 'e-enable innovative applications',
                            ],
                        ],
                        [
                            'id' => 7,
                            'name' => 'Kurtis Weissnat',
                            'username' => 'Elwyn.Skiles',
                            'email' => 'Telly.Hoeger@billy.biz',
                            'address' => [
                                'street' => 'Rex Trail',
                                'suite' => 'Suite 280',
                                'city' => 'Howemouth',
                                'zipcode' => '58804-1099',
                                'geo' => [
                                    'lat' => '24.8918',
                                    'lng' => '21.8984',
                                ],
                            ],
                            'phone' => '210.067.6132',
                            'website' => 'elvis.io',
                            'company' => [
                                'name' => 'Johns Group',
                                'catchPhrase' => 'Configurable multimedia task-force',
                                'bs' => 'generate enterprise e-tailers',
                            ],
                        ],
                        [
                            'id' => 8,
                            'name' => 'Nicholas Runolfsdottir V',
                            'username' => 'Maxime_Nienow',
                            'email' => 'Sherwood@rosamond.me',
                            'address' => [
                                'street' => 'Ellsworth Summit',
                                'suite' => 'Suite 729',
                                'city' => 'Aliyaview',
                                'zipcode' => '45169',
                                'geo' => [
                                    'lat' => '-14.3990',
                                    'lng' => '-120.7677',
                                ],
                            ],
                            'phone' => '586.493.6943 x140',
                            'website' => 'jacynthe.com',
                            'company' => [
                                'name' => 'Abernathy Group',
                                'catchPhrase' => 'Implemented secondary concept',
                                'bs' => 'e-enable extensible e-tailers',
                            ],
                        ],
                        [
                            'id' => 9,
                            'name' => 'Glenna Reichert',
                            'username' => 'Delphine',
                            'email' => 'Chaim_McDermott@dana.io',
                            'address' => [
                                'street' => 'Dayna Park',
                                'suite' => 'Suite 449',
                                'city' => 'Bartholomebury',
                                'zipcode' => '76495-3109',
                                'geo' => [
                                    'lat' => '24.6463',
                                    'lng' => '-168.8889',
                                ],
                            ],
                            'phone' => '(775)976-6794 x41206',
                            'website' => 'conrad.com',
                            'company' => [
                                'name' => 'Yost and Sons',
                                'catchPhrase' => 'Switchable contextually-based project',
                                'bs' => 'aggregate real-time technologies',
                            ],
                        ],
                        [
                            'id' => 10,
                            'name' => 'Clementina DuBuque',
                            'username' => 'Moriah.Stanton',
                            'email' => 'Rey.Padberg@karina.biz',
                            'address' => [
                                'street' => 'Kattie Turnpike',
                                'suite' => 'Suite 198',
                                'city' => 'Lebsackbury',
                                'zipcode' => '31428-2261',
                                'geo' => [
                                    'lat' => '-38.2386',
                                    'lng' => '57.2232',
                                ],
                            ],
                            'phone' => '024-648-3804',
                            'website' => 'ambrose.net',
                            'company' => [
                                'name' => 'Hoeger LLC',
                                'catchPhrase' => 'Centralized empowering task-force',
                                'bs' => 'target end-to-end models',
                            ],
                        ]                        
                    ];
                    foreach ($users as $temp) 
                    {                   
                            echo '<div class="card m-2" style="width: 18rem;">';
                            echo '  <div class="card-body">';
                            echo '    <h5 class="card-title">'.$temp["name"].'</h5>';
                            echo '    <h6 class="card-subtitle mb-2 text-body-secondary">'.$temp["username"].'</h6>';
                            echo '    <p class="card-text"> <a href="mailto:' . $temp["email"] . '">Email</a>  <br>Address:-<br> Street:- '.$temp["address"]["street"].' <br> suite:- '.$temp["address"]["suite"].'<br> City :-'.$temp["address"]["city"].' <br> Zipcode:- '.$temp["address"]["zipcode"].'<br> Phone:- '.$temp["phone"].'</p>';
                            echo '    <a href="'.$temp["website"].'" class="btn btn-primary">Go to Website</a>';
                            echo '  </div>';
                            echo '</div>';
                    }
                    $user = getUsers();
                    echo '<pre>'.$user.'</pre>';
                ?>
            </div>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>