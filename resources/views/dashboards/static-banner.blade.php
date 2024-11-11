<style>
    *{
        padding: 0;
        margin: 0;
    }
    .banner-section{
        /* background-image: url('../images/Banner.jpg') ; */
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        height: 100vh;
        width:100vw;
        overflow-x: scroll !important;
    }
    
    ::-webkit-scrollbar {
        width: 0px;
        height: 0px;
    }
    
    .image-div::-webkit-scrollbar {
        width: 0px;
        height: 0px;
    }
    
    .image-div::-webkit-scrollbar-track{
        width: 0px;
    }
    
    body{
        /* overflow-y: hidden; */
        overflow-x: hidden;
    }
    
    .image-div{
        width: 100%;   
        overflow-y: hidden;
        overflow-x: auto !important;
        height: 100vh;
    
        .links{
            .link-item{
                width: 10px;
                height:10px;
                border-radius: 20px;
                background: #fff;
                &#laptop{
                    position: absolute;
                }
                &#cap{
                    position: absolute;
                }
                &#shoes{
                    position: absolute;
                }
                &#cap-2{
                    position: absolute;
                }
                &::before {
                    content: "";
                    position: absolute;
                    top: 50%;
                    left: 50%;
                    width: 20px;
                    height: 20px;
                    background-color: rgba(255, 230, 230, 0.642);
                    border-radius: 50%;
                    transform: translate(-50%, -50%);
                    opacity: 0;
                    animation: radar-wave 1.5s infinite;
                }
    
                .tooltip {
                    position: absolute;
                    bottom: 156%; /* Position above the button */
                    left: 50%;
                    transform: translateX(-50%);
                    background-color: #333;
                    color: #fff;
                    padding: 4px 8px;
                    border-radius: 4px;
                    white-space: nowrap;
                    font-size: 14px;
                    opacity: 0;
                    visibility: hidden;
                    transition: opacity 0.3s ease;
                    pointer-events: none; /* Prevents tooltip from blocking button clicks */
    
                    &::after {
                        content: "";
                        position: absolute;
                        top: 100%;
                        left: 50%;
                        transform: translateX(-50%);
                        border-width: 6px;
                        border-style: solid;
                        border-color: #333 transparent transparent transparent;
                    }
                }
    
                &:hover .tooltip {
                    opacity: 1;
                    visibility: visible;
                }
            }
        }
    }
    
    
    @keyframes radar-wave {
        0% {
            width: 20px;
            height: 20px;
            opacity: 0.6;
        }
        100% {
            width: 100px;
            height: 100px;
            opacity: 0;
        }
    }
    
    
    .top-header-div{
        position: absolute;
        z-index: 99;
        top: 10px;
       
    }
    
    @media(max-width: 2000px){
        .image-div{
            min-width: 2000px;
            overflow-x: scroll;
        }
        .image-wrapper{
            width: 2000px;
        } 
        #laptop{
            left: 1223px;
        }
        #cap{
            left: 903px;
        }
        #shoes{
            left: 1406px;
        }
        #cap-2{
            left: 1223px;
        }
    }
    
    @media(max-width: 1900px){
        .image-div{
            min-width: 1900px;
            overflow-x: scroll;
        }
        .image-wrapper{
            width: 1900px;
        } 
        #laptop{
            left: 1167px;
        }
        #cap{
            left: 858px;
        }
        #shoes{
            left: 1331px;
        }
        #cap-2{
            left: 1167px;
        }
    }
    
    @media(max-width: 1900px){
        .image-div{
            min-width: 1900px;
            overflow-x: scroll;
        }
        .image-wrapper{
            width: 1900px;
        } 
        #laptop{
            left: 1167px;
        }
        #cap{
            left: 858px;
        }
        #shoes{
            left: 1331px;
        }
        #cap-2{
            left: 1167px;
        }
    }
    
    @media(max-width: 1800px){
        .image-div{
            min-width: 1800px;
            overflow-x: scroll;
        }
        .image-wrapper{
            width: 1800px;
        } 
        #laptop{
            left: 1103px;
        }
        #cap{
            left: 813px;
        }
        #shoes{
            left: 1266px;
        }
    }
    
    @media(max-width: 1700px){
        .image-div{
            min-width: 1700px;
            overflow-x: scroll;
        }
        .image-wrapper{
            width: 1700px;
        } 
        #laptop{
            left: 1039px;
        }
        #cap-2{
            left: 1039px;
        }
        #cap{
            left: 766px;
        }
        #shoes{
            left: 1193px;
        }
    }
    
    @media(max-width: 1560px){
        .image-div{
            min-width: 1560px;
            overflow-x: scroll;
        }
        .image-wrapper{
            width: 1560px;
        } 
        #laptop{
            left: 955px;
        }
        #cap-2{
            left: 955px;
        }
        #cap{
            left: 703px;
        }
        #shoes{
            left: 1095px;
        }
    }
    
    
    @media(max-width: 1440px){
        .image-div{
            min-width: 1440px;
            overflow-x: scroll;
        }
        .image-wrapper{
            width: 1440px;
        } 
        #laptop{
            left: 883px;
        }
        #cap-2{
            left: 883px;
        }
        #cap{
            left: 649px;
        }
        #shoes{
            left: 1009px;
        }
    }
    
    .image-wrapper{
        max-height: 950px;
    }
    
    #laptop{
        top: 272px;
    }
    #cap-2{
        top: 375px;
    }
    #cap{
        top: 353px;
    }
    #shoes{
        top: 576px;
    }
    
    .main-content .content-inner {
        padding: 0 !important;
    }
    
    .stories.storiesWrapper.carousel .story {
    
        height: 90px;
    }
    
</style>

<section class="banner-section">
    <div class="top-header-div d-flex justify-content-between align-items-center w-100 px-4 ">
        <div class="left-content">
            <ul class="list-unstyled d-flex align-items-center justify-content-start gap-4 m-0">
                <li class="text-white">
                    Albums
                </li>
                <li class="text-white">
                    Projects
                </li>
                <li class="text-white">
                    Tour
                </li>
                <li class="text-white">
                    Shop All
                </li>
            </ul>
        </div>
        <div class="center-content">
            <span class="text-white">

                Drake Related
            </span>
        </div>
        <div class="right-content">
            <span class="text-white">
                Cart (0)
            </span>
        </div>
    </div>
    <div class="image-div position-relative" style="top: 0; left: 0;">
        <img src="{{asset('images/Banner.jpg')}}" alt="" class="image-wrapper">
        <div class="links" style="position: absolute; top: 0; left: 0; z-index: 10;">
            <a href="https://www.apple.com/mac/" target="_blank" class="link-item" id="laptop">
                <span class="tooltip">Branded Laptops</span>
            </a>
            <a href="https://speedsports.pk/collections/men-caps" target="_blank" class="link-item" id="cap">
                <span class="tooltip">Lattest Design Caps</span>
            </a>
            <a href="https://www.khazanay.pk/collections/mens-casual-shoes?page=2" target="_blank" class="link-item" id="shoes">
                <span class="tooltip">Branded Shoes</span>
            </a>
            <a href="https://speedsports.pk/collections/men-caps" target="_blank" class="link-item" id="cap-2">
                <span class="tooltip">Caps</span>
            </a>
        </div>
    </div>
</section>