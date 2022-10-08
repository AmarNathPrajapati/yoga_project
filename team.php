<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/team.css">
    <?php include('./components/header_links.php'); ?>
    <title>Our Team</title>
    <style>
        .small_box {
            width: 220px;
            height: 270px;
            background: radial-gradient(114.42% 114.42% at -2.96% -9.7%, rgba(255, 255, 255, 0.5) 0%, rgba(255, 255, 255, 0.5) 100%);
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
            border-radius: 40px;
            transition: all 0.5s ease-in-out;
        }

        .small_box:hover {
            transform: scale(1.05);
            box-shadow: 2px 2px 5px rgb(94, 79, 79);
        }

        .modal-content {
            height: 80vh;
            overflow-y: scroll;
        }

        .counter-container {
            display: flex;
            flex-direction: column;
            justify-content: center;
            text-align: center;
            margin: 30px 50px;
        }

        .counter {
            font-size: 50px;
            margin-top: 10px;
            color: #0B57E3;

        }

        @media (max-width: 580px) {
            body {
                flex-direction: column;
            }
        }

        @media (min-width:250px) and (max-width:1200px) {
            .team-img {
                /* box-shadow: 1rem 1rem  rgb(149, 130, 167); */
                border-radius: 24px 40px 24px 80px;
                object-fit: cover;
                width: 100%;
                height: 100% !important;
            }

            .team-img2 {
                /* box-shadow: 1rem 1rem  rgb(196, 142, 247); */
                border-radius: 24px 80px 24px 40px;
                object-fit: cover;
                width: 100%;
                height: 100% !important;
            }
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <?php include('./components/navbar.php'); ?>

    <div class="container-fluid p-0" style="overflow-x: hidden;">
        <img src="./images/team/team1.png" class="img-fluid" style="width: 100%; max-height:50vh !important; object-fit: cover;" alt="img">
        <div class=" text-center">
            <div class="heading1 m-5">We draw on our global network to assemble a team of experts</div>
            <div class="m-4">We also bring a strong interest in coaching and capability building, with an emphasis on emotional intelligence and effective stakeholder relationships.</div>
        </div>

        <div class="container-fluid inbox-container my-5 mx-2">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-12 ">
                    <div class="mail_box d-flex flex-column justify-content-center align-items-center gap-3 p-5">
                        <!-- <span><img src="./images/team/vec_mail.png " class="img" style="width: 80px; height: 80px;" alt=""></span> -->
                        <div class="counter-container">
                            <div class="counter" data-target="155"></div>
                        </div>
                        <p class="text-center fw-bold fs-4">Accounting Experts</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-12">
                    <div class="mail_box d-flex flex-column justify-content-center align-items-center gap-3 p-5">
                        <!-- <span><img src="./images/team/vec_dollar.png " class="img" style="width: 80px; height: 80px;" alt=""></span> -->
                        <div class="counter-container">
                            <div class="counter" data-target="40"></div>
                        </div>
                        <p class="text-center fw-bold fs-4">Payroll Experts</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-12">
                    <div class="mail_box d-flex flex-column justify-content-center align-items-center gap-3 p-5">
                        <!-- <span><img src="./images/team/vec_tick.png " class="img" style="width: 80px; height: 80px;" alt=""></span> -->
                        <div class="counter-container">
                            <div class="counter" data-target="10"></div>
                        </div>
                        <p class="text-center fw-bold fs-4">Compliance Experts</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-12">
                    <div class="mail_box d-flex flex-column justify-content-center align-items-center gap-3 p-5">
                        <!-- <span><img src="./images/team/vec_star.png " class="img" style="width: 80px; height: 80px;" alt=""></span> -->
                        <div class="counter-container">
                            <div class="counter" data-target="20"></div>
                        </div>
                        <p class="text-center fw-bold fs-4">Tech Experts</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid team-container p-5 text-center">
            <div class="heading2 m-4">Our Leadership</div>
            <div>It’s the diversity that resonates through our organisation’s success story. Take a look at the people who make Oremus the company it is today!.</div>
            
            <div>This blend makes it a powerful team</div>
            <div class="row m-3 p-3 d-flex align-items-center justify-content-center">
                <div class="col-lg-3 col-md-4 col-sm-6 col-12 d-flex flex-column align-items-center">
                    <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#modelId">
                        <div class="img_div"><img style="border-radius: 24px 30px 24px 80px;" src="./images/team/team4.jpg" alt="" class="img team-img"></div>
                    </button>
                    <span class="team-heading p-3 mt-3">PADMANABHAN BALA</span>
                    <span class="mb-5" style="font-size:1rem">Co-founder & Director</span>
                    <!-- <button onmouseover="this.style.color = 'white'" onmouseout="this.style.color = 'black'" class="btn text-center team-button">Read More</button> -->
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 col-12 d-flex flex-column align-items-center">
                    <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#modelId1">
                        <div class="img_div"><img style="border-radius: 24px 30px 24px 80px;" src="./images/team/teamImg2.jpg" alt="" class="img team-img"></div>
                    </button>
                    <span class="team-heading p-3 mt-3">RAJ RAYAPROLU</span>
                    <span class="mb-5" style="font-size:1rem">Co-founder & Director</span>
                    <!-- <button onmouseover="this.style.color = 'white'" onmouseout="this.style.color = 'black'" class="btn text-center team-button">Read More</button> -->
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12 d-flex flex-column align-items-center">
                    <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#modelId2">
                        <div class="img_div"><img src="./images/team/teamImg3.jpg" alt="" class="img team-img mt-lg-3"></div>
                    </button>
                    <span class="team-heading p-3 mt-3">LISA GARSIDE</span>
                    <span class="mb-5" style="font-size:1rem">Chief Business Officer, Oremus UK</span>
                    <!-- <button onmouseover="this.style.color = 'white'" onmouseout="this.style.color = 'black'" class="btn text-center team-button">Read More</button> -->
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12 d-flex flex-column align-items-center">
                    <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#modelId3">
                        <div class="img_div"><img src="./images/team/teamImg4.jpg" alt="" class="img team-img mt-lg-3"></div>
                    </button>
                    <span class="team-heading p-3 mt-3">RONALD K. ST. CLAIR</span>
                    <span class="mb-5" style="font-size:1rem">Leader, USA and Business Development</span>
                    <!-- <button onmouseover="this.style.color = 'white'" onmouseout="this.style.color = 'black'" class="btn text-center team-button">Read More</button> -->
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12 d-flex flex-column align-items-center">
                    <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#modelId4">
                        <div class="img_div"><img src="./images/team/teamImg5.jpg" alt="" class="img team-img mt-lg-2"></div>
                    </button>
                    <span class="team-heading p-3 mt-3">MARK LEIGHTON</span>
                    <span class="mb-5" style="font-size:1rem"> Chief Operating Officer, Oremus UK</span>
                    <!-- <button onmouseover="this.style.color = 'white'" onmouseout="this.style.color = 'black'" class="btn text-center team-button">Read More</button> -->
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12 d-flex flex-column align-items-center">
                    <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#modelId5">
                        <div class="img_div"><img src="./images/team/teamImg6.png" alt="" class="img team-img"></div>
                    </button>
                    <span class="team-heading p-3 mt-3">LALIT ANANTH CHAWLA</span>
                    <span class="mb-5" style="font-size:1rem">CEO, Oremus India</span>
                    <!-- <button onmouseover="this.style.color = 'white'" onmouseout="this.style.color = 'black'" class="btn text-center team-button">Read More</button> -->
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12 d-flex flex-column align-items-center">
                    <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#modelId6">
                        <div class="img_div"><img src="./images/team/teamImg7.jpg" alt="" class="img team-img"></div>
                    </button>
                    <span class="team-heading p-3 mt-3">SURESH KUMAR GUPTA</span>
                    <span class="mb-5" style="font-size:1rem">Co-founder & Director</span>
                    <!-- <button onmouseover="this.style.color = 'white'" onmouseout="this.style.color = 'black'" class="btn text-center team-button">Read More</button> -->
                </div>
            </div>
        </div>

        <div class="container-fluid p-sm-5">
            <div class="row">
                <div class="my-5  small_team_heading text-center">Our Domain Experts</div>
            </div>
            <div class="small_team_row row mx-2 my-4">
                <div class="col-lg-3 col-md-4 col-sm-6 offset-1 offset-sm-0 col-12 p-1 p-sm-4">
                    <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#modelId01">
                        <div class="small_box p-1 p-sm-4 d-flex flex-column justify-content-center align-items-center">
                            <img style="transform:scale(0.75);" src="./images/team/Ellipse 15.png" alt="">
                            <div class="small_header text-center">B. Tapadipta (TD)Leader</div>
                            <div>Lead, Accounting</div>
                        </div>
                    </button>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 offset-1 offset-sm-0 col-12 p-1 p-sm-4">
                    <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#modelId02">
                        <div class="small_box p-1 p-sm-4 d-flex flex-column justify-content-center align-items-center">
                            <img style="transform:scale(0.75);" src="./images/team/Ellipse 16.png" alt="">
                            <div class="small_header">N. Suresh Babu
                            </div>
                            <div>Lead,
                                Payroll</div>
                        </div>
                    </button>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 offset-1 offset-sm-0 col-12 p-1 p-sm-4">
                    <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#modelId03">
                        <div class="small_box p-1 p-sm-4 d-flex flex-column justify-content-center align-items-center">
                            <img style="transform:scale(0.75);" src="./images/team/Ellipse 17.png" alt="">
                            <div class="small_header">A. Srinivasan
                            </div>
                            <div>AVP,
                                Advisory</div>
                        </div>
                    </button>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 offset-1 offset-sm-0 col-12 p-1 p-sm-4">
                    <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#modelId04">
                        <div class="small_box p-1 p-sm-4 d-flex flex-column justify-content-center align-items-center">
                            <img style="transform:scale(0.75);" src="./images/team/Ellipse 18.png" alt="">
                            <div class="small_header">B. Srinivas</div>
                            <div>Lead,
                                Compliance</div>
                        </div>
                    </button>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 offset-1 offset-sm-0 col-12 p-1 p-sm-4">
                    <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#modelId05">
                        <div class="small_box p-1 p-sm-4 d-flex flex-column justify-content-center align-items-center">
                            <img style="transform:scale(0.75);" src="./images/team/Ellipse 19.png" alt="">
                            <div class="small_header">K. Prashanth</div>
                            <div>Lead,
                                Quality</div>
                        </div>
                    </button>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 offset-1 offset-sm-0 col-12 p-1 p-sm-4">
                    <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#modelId06">
                        <div class="small_box p-1 p-sm-4 d-flex flex-column justify-content-center align-items-center">
                            <img style="transform:scale(0.75);" src="./images/team/Ellipse 20.png" alt="">
                            <div class="small_header">A. Nikhilesh</div>
                            <div>Lead,
                                Quality</div>
                        </div>
                    </button>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 offset-1 offset-sm-0 col-12 p-1 p-sm-4">
                    <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#modelId07">
                        <div class="small_box p-1 p-sm-4 d-flex flex-column justify-content-center align-items-center">
                            <img style="transform:scale(0.75);" src="./images/team/Ellipse 21.png" alt="">
                            <div class="small_header text-center">Swapnil Mishra</div>
                            <div class="text-center">Lead,
                                Business Development</div>
                        </div>
                    </button>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 offset-1 offset-sm-0 col-12 p-1 p-sm-4">
                    <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#modelId08">
                        <div class="small_box p-1 p-sm-4 d-flex flex-column justify-content-center align-items-center">
                            <img style="transform:scale(0.75);" src="./images/team/Ellipse 22.png" alt="">
                            <div class="small_header text-center">Wanda Medina</div>
                            <div class="text-center">Customer Relationship Manager
                            </div>
                        </div>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- popup section -->
    <!-- 1 -->
    <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="container">
                    <button type="button" class="btn-close float-end mt-3" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="row">
                        <div class="col-md-12 col-lg-6">
                            <img class="my-5 d-block mx-auto" src="./images/team/BalaSir.png" alt="" />
                        </div>
                        <div class="col-md-12 col-lg-6 text-dark">
                            <h2 class="mt-5 mb-0">PADMANABHAN BALA</h2>
                            <p class="m-0 p-0"> <b> Co-founder & Director </b> </p> <br>
                            <!-- <h5 class="m-0 p-0">Categories: The Top Management</h5> -->
                            <p class="mt-3" align="justify">Bala, Fellow, Institute of Company Secretaries of India, handled accounting functions for over six years before founding Oremus. A veritable storehouse on all matters corporate and legal, Bala combines his knowledge of project finance and accounts and a cautionary approach to deliver quality service that has become Oremus’ hallmark.<br>
                                Known for deft handling of teams, Bala’s cautituos yet practical attitude keeps the company rooted even as it takes wings. His keen eye for detail and painstaking approach ensures that Oremus does not ever have a dissatisfied customer. A gadget freak, he is always tampering with them or buying new ones.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- 2 -->
    <div class="modal fade" id="modelId1" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div style="height:70vh;" class="modal-content">
                <div class="container">
                    <button type="button" class="btn-close float-end mt-3" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="row">
                        <div class="col-md-12 col-lg-6">
                            <img class="my-3 d-block mx-auto" src="./images/team/Image (1).png" alt="" />
                        </div>
                        <div class="col-md-12 col-lg-6 text-dark">
                            <h2 class="mt-5 mb-0">Raj Rayaprolu</h2>
                            <b class="m-0 p-0">Co-founder & Director</b><br>
                            <!-- <h5 class="m-0 p-0">Categories: The Top Management</h5> -->
                            <p class="mt-3" align="justify">Raj, a Management Graduate and Chartered Financial Analyst, started his career over a decade ago with a consulting firm. He moved on to set up the India office of a private port management company (an Indo – Dutch JV) managing its operations. <br>
                                Within three years of his work life, Raj along with two partners started Oremus. Raj is the client face within the company largely responsible for its impressive customer base and keeping Oremus ahead of competition. A very keen golfer who is struggling with his handicap.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- 3 -->
    <div class="modal fade" id="modelId2" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="container">
                    <button type="button" class="btn-close float-end mt-3" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="row">
                        <div class="col-md-12 col-lg-6">
                            <img class="my-5 d-block mx-auto" src="./images/team/Image (2).png" alt="" />
                        </div>
                        <div class="col-md-12 col-lg-6 text-dark">
                            <h2 class="mt-5 mb-0">LISA GARSIDE</h2>
                            <b class="m-0 p-0">Chief Business Officer,
                                Oremus UK</b></br>
                            <!-- <h5 class="m-0 p-0">Categories: The Top Management</h5> -->
                            <p class="mt-3" align="justify">Lisa has worked within the accounting sector for over thirty years, employed for seventeen years, in private practice, as a Senior Accountant for a Chartered Accountancy firm with her own portfolio of clients. She was then appointed as a Financial Controller for a large industrial manufacturing company based in the North West, reporting directly to Board level. She was approached by Oremus UK, who were interested in consulting with her, given her experience within the accounting industry, coupled with the fact that she owned several licensed outlets including a popular wine bar and large Wirral-based gastropub. Her insights into the licensed sector, coupled with her expertise in all facets of financial and taxation requirements for small and medium sized enterprises led to her appointment as Chief Business Officer for the Oremus group of companies in 2020. Lisa lives on the Wirral peninsula with her husband and two sons. One of four sisters, much of her leisure time is spent enjoying moments with her family. She is a seasoned traveller with a particular fondness for Rome. Her other love is for music, particularly music festivals, and she is a veteran of at least six Glastonburys!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- 4 -->
    <div class="modal fade" id="modelId3" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="container">
                    <button type="button" class="btn-close float-end mt-3" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="row">
                        <div class="col-md-12 col-lg-6">
                            <img class="my-5 d-block mx-auto" src="./images/team/Image (3).png" alt="" />
                        </div>
                        <div class="col-md-12 col-lg-6 text-dark">
                            <h2 class="mt-5 mb-0">RONALD K. ST. CLAIR</h2>
                            <b class="m-0 p-0">Leader,
                                USA and Business Development</b> <br>
                            <!-- <h5 class="m-0 p-0">Categories: The Top Management</h5> -->
                            <p class="mt-3" align="justify">With decades of experience identifying, investing, nurturing and growing Companies, Ron joined Oremus in 2011. He received an Executive MBA from the University of Wisconsin-Milwaukee, a BS in Marketing (Magna Cum Laude) from Upper Iowa University, and an AS in Quality Technology (with honors) from Rock Valley College. <br>

                                His previous leadership positions include: Director and COO of a privately-owned retail interior design and fixture/furniture company; Vice President, Operations of a privately-owned multi-plant specialty, stainless-steel sand-casting foundry; Resident Manager of a division of a privately-owned multi-plant manufacturer of Class II and Class III specialty paper and disposable paper medical products company; Director of Operations of a privately-owned manufacturer of brand-name durable consumer products; Business Unit Manager of a division of a public manufacturer of Class I, II and III durable and disposable medical products; and Director of Business Development of a division of a public industrial products company. <br>

                                Mr. St. Clair is responsible for growing the business in North America.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- 5 -->
    <div class="modal fade" id="modelId4" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="container">
                    <button type="button" class="btn-close float-end mt-3" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="row">
                        <div class="col-md-12 col-lg-6">
                            <img class="my-5 d-block mx-auto" src="./images/team/Image (4).png" alt="" />
                        </div>
                        <div class="col-md-12 col-lg-6 text-dark">
                            <h2 class="mt-5 mb-0">MARK LEIGHTON</h2>
                            <b class="m-0 p-0">Chief Operating Officer,
                                Oremus UK</b> <br>
                            <!-- <h5 class="m-0 p-0">Categories: The Top Management</h5> -->
                            <p class="mt-3" align="justify">Mark is an Economics graduate from Northumbria University, he qualified as a member of the Association of Chartered Certified Accountants (ACCA) in 2007. In addition, he achieved a First-Class honours degree in Applied Accounting from Oxford Brookes University. Mark has worked within the licensed sector throughout his career, initially employed by Scottish & Newcastle straight from university in 2001, where his first role was inclusion on the steering group for the S&N Pub Enterprise Franchise Agreement development. Mark has a wealth of knowledge, working with all levels within the licensed sector, from single tenanted outlets to consultation with Board members from a number of the national pub companies. His opinion on matters is regularly sought by many within the industry, particularly with reference to marketing and promotional strategies and concepts for improving under-performing sites and portfolios, always striving to deliver growth for licensed outlets. As a founding member, Mark was instrumental in establishing eLTA as one of the main providers of accounting advice and expertise to the licensed trade since 2007. When eLTA was purchased by Oremus in 2016 Mark was Business Development Manager. Following a sustained period of company growth, Mark was appointed as Chief Business Officer for Oremus in 2020. Mark lives with his wife and two daughters in the North East. In addition to his family, his consuming passion is his love of Newcastle United Football Club, having been a season ticket holder since 1985. When not at St. James Park, he can be found on the golf course, valiantly trying to improve his handicap.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- 6 -->
    <div class="modal fade" id="modelId5" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div style="height:70vh;" class="modal-content">
                <div class="container">
                    <button type="button" class="btn-close float-end mt-3" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="row">
                        <div class="col-md-12 col-lg-6">
                            <img class="my-3 d-block mx-auto" src="./images/team/Image (5).png" alt="" />
                        </div>
                        <div class="col-md-12 col-lg-6 text-dark">
                            <h2 class="mt-5 mb-0">LALIT ANANTH CHAWLA</h2>
                            <b class="m-0 p-0">CEO,Oremus India</b> <br>
                            <!-- <h5 class="m-0 p-0">Categories: The Top Management</h5> -->
                            <p class="mt-3" align="justify">Lalit is a Chartered accountant with 16+ years of Exp. He spent a decade with a Big four audit firm and has extensive experience in Assurance and Advisory where the clientele included large public entities and multinational corporations across sectors, both in India and abroad. <br>
                                His Corporate experience includes working with a large corporate house in financial reporting, assurance and strategy, further his experience also includes working with start-ups providing strategic business and financial advice and inputs.
                                Lalit is a process focus and result oriented individual at work. He likes to spend his free time with his family and travelling.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- 7 -->
    <div class="modal fade" id="modelId6" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div style="height:70vh;" class="modal-content">
                <div class="container">
                    <button type="button" class="btn-close float-end mt-3" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="row">
                        <div class="col-md-12 col-lg-6">
                            <img class="my-3 d-block mx-auto" src="./images/team/Image (6).png" alt="" />
                        </div>
                        <div class="col-md-12 col-lg-6 text-dark">
                            <h2 class="mt-5 mb-0">SURESH KUMAR GUPTA</h2>
                            <b class="m-0 p-0">Position:Co-founder & Director</b> <br>
                            <!-- <h5 class="m-0 p-0">Categories: The Top Management</h5> -->
                            <p class="mt-3" align="justify">Suresh made sense of intimidating numbers for a decade before founding Oremus. A Chartered Accountant and Member, Association of Chartered Accountants of India, Suresh brings the indispensable expertise of handling data-driven transitions and year-end closures. Suresh is a realist and leads the accounting and finance processes. <br>
                                Suresh started his career with a manufacturing startup that he nurtured into becoming a leading enterprise by bringing order to the chaos typical of a new venture. A taxation wizard, Suresh also brings wisdom to a rapidly growing Oremus.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- 01 -->
    <div class="modal fade" id="modelId01" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div style="height:70vh;" class="modal-content">
                <div class="container">
                    <button type="button" class="btn-close float-end mt-3" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="row">
                        <div class="col-md-12 col-lg-6">
                            <img class="d-block mx-auto" style="margin-top:150px ;" src="./images/team/Ellipse 15.png" alt="" />
                        </div>
                        <div class="col-md-12 col-lg-6 text-dark">
                            <h2 class="mt-5 mb-0">B. Tapadipta (TD)</h2>
                            <p class="m-0 p-0 fw-bold"> Leader</p>
                            <p class="mt-2" align="justify">Tapadipta Bhattacharya [a.k.a] TD leads the Accounting Operations vertical and has been associated with Oremus for 3.5 years now. He believes that his USP lies in his ability to solve problems and is passionate about creating great teams and emerging leaders. TD is striving to leverage his critical understanding of operational landscape in making a difference to our growth story. His passion for Travel and Music keep him going</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- 02 -->
    <div class="modal fade" id="modelId02" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div style="height:70vh;" class="modal-content">
                <div class="container">
                    <button type="button" class="btn-close float-end mt-3" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="row">
                        <div class="col-md-12 col-lg-6">
                            <img style="margin-top: 150px;" class="d-block mx-auto" src="./images/team/Ellipse 16.png" alt="" />
                        </div>
                        <div class="col-md-12 col-lg-6 text-dark">
                            <h2 class="mt-5 mb-0 ">N. Suresh Babu</h2>
                            <p class="m-0 p-0 fw-bold ">Leader</p>
                            <p class="mt-2" align="justify">Suresh leads the Payroll Team, with his 20+ years of expertise in Payroll Management and Administration, Suresh takes care of more than 30,000 payroll records with the help of his 15 member strong team of clients across 38 countries. With repeated successes in guiding Payroll projects from Start to Finish, Suresh enjoys introducing new techniques to promote operational efficiency and managing payroll support operations. Suresh is a fitness buff and can be seen on the shuttle badminton court or the Gym if not tinkering around with PUBG on his latest One plus hand held.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- 03 -->
    <div class="modal fade" id="modelId03" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div style="height:75vh;" class="modal-content">
                <div class="container">
                    <button type="button" class="btn-close float-end mt-3" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="row">
                        <div class="col-md-12 col-lg-6">
                            <img style="margin-top:150px ;" class="d-block mx-auto" src="./images/team/Ellipse 17.png" alt="" />
                        </div>
                        <div class="col-md-12 col-lg-6 text-dark">
                            <h2 class="mt-5 mb-0 ">V. Ramanananda</h2>
                            <p class="m-0 p-0 fw-bold ">Leader</p>
                            <p class="mt-2" align="justify">Ramanananda is a qualified chartered Accountant with 13 years of experience. Prior to Oremus, he has been with PwC, Deloitte, BDO and has ventured into several businesses giving him edge of entrepreneur mindset. He has extensive experience in Assurance and Advisory where the clientele included large public entities and multinational corporations across sectors including Start-up advisory, both in India and abroad. His portfolio includes to his credit couple of IPOs (Initial Public Offers) and fund-raising engagements. Raman developed a passion towards Taxation turned himself a tax expert and now leading the tax compliances at Oremus taking care of Direct and Indirect Taxes. Raman is a result-oriented individual at work. He likes to spend his free time with his family, travelling, gardening and DIY projects.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- 04 -->
    <div class="modal fade" id="modelId04" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div style="height:60vh;" class="modal-content">
                <div class="container">
                    <button type="button" class="btn-close float-end mt-3" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="row">
                        <div class="col-md-12 col-lg-6">
                            <img style="margin-top:150px ;" class="d-block mx-auto" src="./images/team/Ellipse 18.png" alt="" />
                        </div>
                        <div class="col-md-12 col-lg-6 text-dark">
                            <h2 class="mt-5 mb-0 ">B. Srinivas</h2>
                            <p class="m-0 p-0 fw-bold ">Leader</p>
                            <p class="mt-2" align="justify">Srinivas is qualified chartered Accountant with 9 years experience. He has been associated with Oremus with his next level passion for things i.e. Tax, Srinivas keeps us abreast of any changes in the ever dynamic Indian taxation landscape. Fond of watching and playing cricket – he spends most of his leisure time with family and self-study</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- 05 -->
    <div class="modal fade" id="modelId05" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div style="height:70vh;" class="modal-content">
                <div class="container">
                    <button type="button" class="btn-close float-end mt-3" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="row">
                        <div class="col-md-12 col-lg-6">
                            <img style="margin-top:150px ;" class="d-block mx-auto" src="./images/team/Ellipse 19.png" alt="" />
                        </div>
                        <div class="col-md-12 col-lg-6 text-dark">
                            <h2 class="mt-5 mb-0 ">K. Prashanth</h2>
                            <p class="m-0 p-0 fw-bold ">Leader</p>
                            <p class="mt-2" align="justify">K Prashanth holds an MBA with specialization in Finance and has extensive work experience spanning almost twenty years in Accounting & Finance. Prashanth has been with Oremus for the last 11+years. As an operations professional, he enjoys ensuring things run smoothly with a keen eye on process optimization – setting up operational strategies which ensure seamless delivery. Prashant is a big fan of Indian Cricket team and sports in general and follows Indian politics very closely</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- 06 -->
    <div class="modal fade" id="modelId06" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div style="height:70vh;" class="modal-content">
                <div class="container">
                    <button type="button" class="btn-close float-end mt-3" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="row">
                        <div class="col-md-12 col-lg-6">
                            <img style="margin-top:150px ;" class="d-block mx-auto" src="./images/team/Ellipse 20.png" alt="" />
                        </div>
                        <div class="col-md-12 col-lg-6 text-dark">
                            <h2 class="mt-5 mb-0 ">A. Nikhilesh</h2>
                            <p class="m-0 p-0 fw-bold ">Leader</p>
                            <p class="mt-2" align="justify">Nikhilesh handles Corporate Secretarial matters, Secretarial Audits, Company Law matters and FEMA dealing with various regulatory authorities. He works with the team and the clients with equal empathy to sustain and encourage cooperative relationships. He is an Associate member of the Institute of Company Secretaries of India, and a Bachelor of commerce and no longer a bachelor in real life. Nikhilesh is fond of traditional sweets and savories and those close to him are often blessed with occasional treats from time to time.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- 07 -->
    <div class="modal fade" id="modelId07" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div style="height:60vh;" class="modal-content">
                <div class="container">
                    <button type="button" class="btn-close float-end mt-3" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="row">
                        <div class="col-md-12 col-lg-6">
                            <img style="margin-top:150px ;" class="d-block mx-auto" src="./images/team/Ellipse 21.png" alt="" />
                        </div>
                        <div class="col-md-12 col-lg-6 text-dark">
                            <h2 class="mt-5 mb-0">Swapnil Mishra</h2>
                            <p class="m-0 p-0 fw-bold">Leader</p>
                            <p class="mt-2" align="justify">Swapnil Mishra is a Business Development manager with five years of experience in sales and marketing. He comes with extensive experience in client interactions and understanding key market trends. He is a problem solver who believes in simple ways to achieve company's goals and building business and relationship with clients.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- 08 -->
    <div class="modal fade" id="modelId08" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div style="height:60vh;" class="modal-content">
                <div class="container">
                    <button type="button" class="btn-close float-end mt-3" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="row">
                        <div class="col-md-12 col-lg-6">
                            <img style="margin-top:150px ;" class="d-block mx-auto" src="./images/team/Ellipse 22.png" alt="" />
                        </div>
                        <div class="col-md-12 col-lg-6 text-dark">
                            <h2 class="mt-5 mb-0 ">Wanda Medina</h2>
                            <p class="m-0 p-0 fw-bold ">Customer Relationship Manager</p>
                            <p class="mt-2" align="justify">Wanda Medina was instrumental in helping secure new clients from US and manage relations . Wanda She provides the India team with the US specific accounting experience to help them fulfil their US engagements. Wanda is a bridge providing a link between US and India time zones for client support.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- footer -->
    <?php include('./components/footer.php'); ?>


    <!-- scripts -->
    <?php include('./components/scripts.php'); ?>

    <script>
        $('#home').removeClass("active");
        $('#company').addClass('active');
    </script>
    <script>
        const counters = document.querySelectorAll(".counter");

        counters.forEach((counter) => {
            counter.innerText = "0";
            const updateCounter = () => {
                const target = +counter.getAttribute("data-target");
                const count = +counter.innerText;
                const increment = target / 200;
                if (count < target) {
                    counter.innerText = `${Math.ceil(count + increment)}`;
                    setTimeout(updateCounter, 10);
                } else counter.innerText = target;
            };
            updateCounter();
        });
    </script>
</body>