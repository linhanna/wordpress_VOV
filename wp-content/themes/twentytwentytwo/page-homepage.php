<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css
">
    <title>Document</title>
</head>
<style>
   <?php include 'styles-news.css' ?>
</style>
<body>
    <div class="wrapper">
        <div class="header">
            <div class="vov">
                        <ul class="vov__name">
                            <!-- <li><i class="fa-solid fa-house"></i></li> -->
                            <li>VOV1</li>
                            <li></li>
                            <li>VOV2</li>
                            <li></li>
                            <li>VOV3</li>
                            <li></li>
                            <li>VOV4</li>
                            <li></li>
                            <li>VOV5</li>
                            <li></li>
                            <li>VOV6</li>
                            <li></li>
                            <li>VOV GT</li>
                            <li></li>
                            <li>VTC HD</li>
                        </ul>
            </div>    
            <div class ="infor">
                <div>
                    <a href="" class="infor__logo">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/dd/Logo_VOV.svg/1200px-Logo_VOV.svg.png" alt="">
                    </a>
                </div>
                <div>
                        <p id="hvn">
                            <script>
                                var today = new Date();
                                var date = today.getDate()+'-'+(today.getMonth()+1)+'-'+today.getFullYear();
                                var time = today.getHours()+":" + today.getMinutes()+":" + today.getSeconds();
                                var dateTime = date+' '+time;

                                document.getElementById("hvn").innerHTML = dateTime;
                            </script></p>
                </div>               
                    <div class="infor__logoSocial">
                        <i class="fa-brands fa-facebook"></i>
                        <i class="fa-brands fa-square-instagram"></i>
                        <i class="fa-brands fa-tiktok"></i>
                        <i class="fa-brands fa-youtube"></i>
                    </div>
                    <div>
                        <p>xem & nghe <i class="fa-solid fa-circle-play"></i></p>
                    </div>
                    <div>
                        <p>English </p>
                    </div>
                   
                    <form action="">
                    <input type="text" >
                    </form>
                </div>
            </div>
            <div class="navbar">
                <ul class="navbar__list">
                    <li><i class="fa-solid fa-house-user"></i></li>
                    <li>Ch??nh tr???</li>
                    <li>x?? h???i </li>
                    <li>th??? gi???i</li>
                    <li>kinh t???</li>
                    <li>th??? thao</li>
                    <li>v??n h??a</li>
                    <li>gi???i tr??</li>
                    <li>ph??p lu???t</li>
                    <li>du l???ch </li>
                    <li>qu??n s???</li>
                    <li>s???c kh???e</li>
                    <li>?????i s???ng</li>
                    <li>Podcast</li>
                    <li><i class="fa-solid fa-bars"></i></li>
                </ul>
            </div>
        </div>
        <main class="main">
            <div class="card__main">
                    <a href="">
                        <img src="https://media2.vov.vn/sites/default/files/styles/front_large/public/2022-10/u.jpg" alt="">
                    </a>
                    <h2 class="title">Ch??? nhi???m ???y ban Ph??p lu???t: Ng?????i d??n ph??n n??n v??? vi???c thu h???i s??? h??? kh???u</h2>
                    <ul class="nav__list">
                        <li>B??? c??o T???t Th??nh Cang ti???p t???c h???u t??a trong v??? ??n b??n r??? ?????t c??ng</li>
                        <li>???? c?? k???t qu??? gi??m ?????nh ADN 2 b??? h??i c???t trong r???ng Gia Lai</li>
                        <li>V??? 8 t??u c?? v?? ca n?? b??? ch??y t???i b???n C???a ?????i, c?? th??? do ch???p ??i???n </li>
                        <li>B??? c??o T???t Th??nh Cang ti???p t???c h???u t??a trong v??? ??n b??n r??? ?????t c??ng</li>
                        <li>???? c?? k???t qu??? gi??m ?????nh ADN 2 b??? h??i c???t trong r???ng Gia Lai</li>
                        <li>V??? 8 t??u c?? v?? ca n?? b??? ch??y t???i b???n C???a ?????i, c?? th??? do ch???p ??i???n </li>
                        
                    </ul>
            </div>  
            <div class="small">
                <div class="card__small">
                    <a href="">
                        <img src="https://media.vov.vn/sites/default/files/styles/large/public/2022-10/Putin%20Tap%20Can%20Binh%20Nga%20Trung%20Quoc%20-Kremlin.jpg" alt="">
                    </a>
                    <p class="title">B??? c??o T???t Th??nh Cang ti???p t???c h???u t??a trong v??? ??n b??n r??? ?????t c??ng</p>                    
                </div>  

                <div class="card__small">
                    <a href="">
                        <img src="https://media.vov.vn/sites/default/files/styles/large_watermark/public/2022-10/cao_toc_11.jpg" alt="">
                    </a>
                    <p class="title">B??? c??o T???t Th??nh Cang ti???p t???c h???u t??a trong v??? ??n b??n r??? ?????t c??ng</p>                    
                </div> 
                
                <div class="card__small">
                    <a href="">
                        <img src="https://media2.vov.vn/sites/default/files/styles/front_large/public/2022-10/kristalina_georgieva.jpg" alt="">
                    </a>
                    <p class="title">B??? c??o T???t Th??nh Cang ti???p t???c h???u t??a trong v??? ??n b??n r??? ?????t c??ng</p>                    
                </div> 
            </div>                            
            <div class="card__news">
                    <div>
                        <h2 class="title">C???p nh???t m???i nh???t</h2>
                    </div>
                    <div>
                        <div class="card__news--content">
                            <div class="img">                        
                                <a href="">
                                    <img src="https://media2.vov.vn/sites/default/files/styles/front_large_watermark/public/2022-10/cl1.jpg" alt="">
                                </a>
                            </div>
                            
                            <div class="content__title">Tr???m BOT Cai L???y ch??nh th???c ???????c thu ph?? tr??? l???i</div>
                        </div>

                        <div class="card__news--content">
                        <div class="img">                        
                            <a href="">
                                <img src="https://media2.vov.vn/sites/default/files/styles/front_large_watermark/public/2022-10/cl1.jpg" alt="">
                            </a>
                        </div>
                        
                        <div class="content__title">Tr???m BOT Cai L???y ch??nh th???c ???????c thu ph?? tr??? l???i</div>
                    </div>

                    <div class="card__news--content">
                        <div class="img">                        
                            <a href="">
                                <img src="https://media2.vov.vn/sites/default/files/styles/front_large_watermark/public/2022-10/cl1.jpg" alt="">
                            </a>
                        </div>
                        
                        <div class="content__title">Tr???m BOT Cai L???y ch??nh th???c ???????c thu ph?? tr??? l???i</div>
                    </div>
                    
                    <div class="card__news--content">
                        <div class="img">                        
                            <a href="">
                                <img src="https://media2.vov.vn/sites/default/files/styles/front_large_watermark/public/2022-10/cl1.jpg" alt="">
                            </a>
                        </div>
                        
                        <div class="content__title">Tr???m BOT Cai L???y ch??nh th???c ???????c thu ph?? tr??? l???i</div>
                    </div>

                    <div class="card__news--content">
                        <div class="img">                        
                            <a href="">
                                <img src="https://media2.vov.vn/sites/default/files/styles/front_large_watermark/public/2022-10/cl1.jpg" alt="">
                            </a>
                        </div>
                        
                        <div class="content__title">Tr???m BOT Cai L???y ch??nh th???c ???????c thu ph?? tr??? l???i</div>
                    </div>

                    <div class="card__news--content">
                        <div class="img">                        
                            <a href="">
                                <img src="https://media2.vov.vn/sites/default/files/styles/front_large_watermark/public/2022-10/cl1.jpg" alt="">
                            </a>
                        </div>
                        
                        <div class="content__title">Tr???m BOT Cai L???y ch??nh th???c ???????c thu ph?? tr??? l???i</div>
                    </div>

                    <div class="card__news--content">
                        <div class="img">                        
                            <a href="">
                                <img src="https://media2.vov.vn/sites/default/files/styles/front_large_watermark/public/2022-10/cl1.jpg" alt="">
                            </a>
                        </div>
                        
                        <div class="content__title">Tr???m BOT Cai L???y ch??nh th???c ???????c thu ph?? tr??? l???i</div>
                    </div>

                    <div class="card__news--content">
                        <div class="img">                        
                            <a href="">
                                <img src="https://media2.vov.vn/sites/default/files/styles/front_large_watermark/public/2022-10/cl1.jpg" alt="">
                            </a>
                        </div>
                        
                        <div class="content__title">Tr???m BOT Cai L???y ch??nh th???c ???????c thu ph?? tr??? l???i</div>
                    </div>

                </div>                   
                </div>
                <div>
                 
                </div>        
        </main>
  
</div>
    
</body>

</html>