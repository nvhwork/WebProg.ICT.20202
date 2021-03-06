<!-- 
    Author: Tran Thai Duong
    Created: 3/24/2021
    Used template from Nguyen Manh Phuc
 -->

 <?php
$img = "https://scontent.xx.fbcdn.net/v/t1.15752-9/164329518_5201271573279009_7858615704838029633_n.jpg?_nc_cat=109&ccb=1-3&_nc_sid=58c789&_nc_ohc=ty8l_uvcPREAX-eRbTG&_nc_ht=scontent.xx&oh=25e10197884c39d8589ae96e5dfa0267&oe=607F781C"
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Profile - Exercise 1, 4 - Dz</title>
    <link rel="stylesheet" href="profile.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
</head>

<body>

    <table align="center" cellspacing="0">
        <tr style="border-bottom: 1px solid black;" class="head">
            <td class="header p-10" width="60%">
                <h2>Tran Thai Duong</h2>
                <span>A boy is searching for his endgame</span>
                <ul class="list">
                    <li><span><i class="far fa-calendar-alt"></i>Date of birth :</span><span>13, October, 1999</span>
                    </li>
                    <li><span><i class="far fa-envelope"></i>Email :</span><span><a class="mylink" href="mailto:shiroyasha699969@gmail.com">shiroyasha699969@gmail.com</a></span></li>
                    <li><span><i class="fas fa-phone-alt"></i>Phone :</span><span>0917891116</span></li>
                    <li><span><i class="fab fa-github"></i>Github :</span><span><a class="mylink" href="https://github.com/ImDuong">github.com/ImDuong</a></span></li>
                </ul>

            </td>

            <td style="text-align: center; padding: 15px 0">
                <img style="border-radius: 50%; height: 250px;" class="img" src=<?= $img ?> />
            </td>

        </tr>

        <tr>
            <td class="p-17">
                <h3>Education</h3>
                <h4>Global ICT Program</h4>
                <p>Hanoi University of Science and Technology</p>
                <i>Sept, 2017 - Present</i>
            </td>
            <td class="p-17">
                <h3>Skills</h3>
                <ul class="skills">
                    <li><a>Git</a></li>
                    <li><a>Windows Kernel Driver</a></li>
                    <li><a>Java</a></li>
                    <li><a>Python</a></li>
                    <li><a>PHP</a></li>
                    <li><a>C, C++, C#</a></li>
                    <li><a>Golang</a></li>
                    <li><a>.NET CORE</a></li>
                    <li><a>HTML, CSS, JAVASCRIPT, BOOTSTRAP</a></li>
                    <li><a>SQLServer, MYSQL</a></li>
                </ul>
            </td>
        </tr>

        <tr>
            <td class="">
                <h3>Personal projects</h3>

                <div class="project">
                    <h4>CyStack Endpoint Security v1</h4>
                    <i>03/2020 - 01/2021</i>
                    <ul>
                        <li>Ho??n thi???n ph??a agent v?? driver b??n windows</li>
                        <li>Vi???t kernel driver ????? t????ng t??c v???i agent tr??n user mode</li>
                        <li>Ho??n thi???n active response v???i giao di???n web</li>
                        <li>T??m hi???u v?? ??p d???ng ch??? k?? ??i???n t??? cho s???n ph???m</li>
                    </ul>
                </div>
                <div class="project">
                    <h4>CyStack Scanner</h4>
                    <i>10/2020 - 12/2020</i>
                    <ul>
                        <li>D???n ?????u team x??y d???ng s???n ph???m b??n Windows v?? Linux</li>
                    </ul>
                </div>
                <div class="project">
                    <h4>CyStack Endpoint Security v2 (Vulnscan)</h4>
                    <i>01/2021 - present</i>
                    <ul>
                        <li>D???n ?????u team x??y d???ng s???n ph???m b??n Windows v?? Linux</li>
                        <li>X??y d???ng core v?? c???u tr??c c??c plugin</li>
                    </ul>
                </div>
                <div class="project">
                    <h4>ITSS Software Development Project - EcoBike Rental</h4>
                    <i>09/2020 - 01/2021</i>
                    <ul>
                        <li>???ng d???ng JavaFX desktop</li>
                        <li>Ph??? tr??ch ph???n t????ng t??c v???i tr???m xe</li>
                    </ul>
                </div>
                <div class="project">
                    <h4>Database Project - OneMovie</h4>
                    <i>02/2020 - 07/2020</i>
                    <ul>
                        <li>Ph??? tr??ch ph???n back-end, c?? s??? d??? li???u v?? front-end</li>
                    </ul>
                </div>
                <div class="project">
                    <h4>OOP Project - Battleship</h4>
                    <i>02/2020 - 07/2020</i>
                    <ul>
                        <li>Ph??? tr??ch thi???t k??? c???u tr??c, giao di???n, l???p tr??nh t????ng t??c cho game</li>
                    </ul>
                </div>
                <div class="project">
                    <h4>AI Project - Tic Tac Toe Game</h4>
                    <i>10/2019 - 01/2020</i>
                    <ul>
                        <li>Ph??? tr??ch ph???n thu???t to??n minimax cho bot</li>
                    </ul>
                </div>
            </td>
            <td>
                <div class="mb-35">
                    <h3>Achievement</h3>
                    <p>H???c b???ng tham gia ch????ng tr??nh trao ?????i sinh vi??n
                        TFI SCALE 2018 - 2019 t???i Singapore v?? Vi???t
                        Nam (09/2018 - 03/2019)</p>
                </div>
                <div class="mb-35">
                    <h3>Orientation</h3>
                    <ul class="ori">
                        <li>
                            T??m hi???u c??c ki???n th???c, c??ng ngh??? m???i chuy??n s??u ????? th??c ?????y s??? ph??t tri???n c???a nh??n lo???i
                        </li>
                        <li>
                            H???c ???????c c??ch l??m vi???c nh??m hi???u qu??? trong m??i
                            tr?????ng doanh nghi???p chuy??n nghi???p
                        </li>
                        <li>
                            M???c ti??u ??p d???ng tr?? tu??? nh??n t???o v??o ph??t tri???n c??ng ngh??? v?? t??ch h???p v???i an to??n th??ng tin
                        </li>
                        <li>
                            ?????nh h?????ng k??? s?? khoa h???c d??? li???u
                        </li>
                    </ul>
                </div>
                <div class="mb-35">
                    <h3>Certificates</h3>
                    <ul class="ori">
                        <li>TOEIC 750 (08/2017 - 08/2019)</li>
                        <li>Ch???ng ch??? "PHP course" c???a SOICT v?? TRIBAL MEDIA HOUSE</li>
                        <li>Ch???ng nh???n "JAVA WEB 4.0" c???a NIIT INDIA</li>
                        <li>Ch???ng ch??? "MIXED REALITY PRODUCT DEVELOPMENT" c???a UNIVERSITY OF TURKU</li>
                        <li>Ch???ng ch??? tham gia "TEMASEK FOUNDATION INTERNATIONAL SCALE SCHOLAR 2018" (2019)</li>
                    </ul>
                </div>
            </td>
        </tr>

        <tr>
            <td class="last-row">
                <h3>Work experience</h3>
                <div class="project">
                    <h4>Intern</h4>
                    <p style="margin: 0;">CyStack</p>
                    <i>05/2019 - present</i>
                    <ul>
                        <li>N???m ???????c ki???n th???c t???ng qu??t v??? gi???i ph??p an to??n th??ng tin ph??a endpoint</li>
                        <li>H???c ???????c c??c lo???i t???n c??ng ph??? bi???n v?? kinh nghi???m tham gia CTF</li>
                        <li>D???n ?????u team l??m s???n ph???m Endpoint v?? Scanner</li>
                    </ul>
                </div>
                <div class="project">
                    <h4>Intern</h4>
                    <p style="margin: 0;">MISA</p>
                    <i>05/2020 - 08/2020</i>
                    <ul>
                        <li>N???m ???????c ki???n th???c c?? b???n v??? REACTJS, .NET CORE v?? c??ng nh??m ho??n thi???n s???n ph???m MONEYKEEPER v1</li>
                        <li>L??m quen v???i ph??n t??ch nghi???p v??? v?? l???p k??? ho???ch</li>
                    </ul>
                </div>
            </td>
            <td class="last-row">
                <div>
                    <h3>Languages</h3>
                    <ul class="lang">
                        <li>
                            <h4>English</h4><small>Working
                                Proficiency</small>
                        </li>
                        <li>
                            <h4>Japanese</h4><small>Elementary Proficiency</small>
                        </li>
                    </ul>
                </div>
                <div>
                    <h3>Interests</h3>
                    <ul class="skills interest">
                        <li><a>Solving puzzle</a></li>
                        <li><a>Chess</a></li>
                        <li><a>Music</a></li>
                        <li><a>Reading books and improve self frontier of knowledge</a></li>
                        <li><a>Finding how society works</a></li>
                    </ul>
                </div>

            </td>
        </tr>

    </table>

</body>

</html>