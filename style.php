*{
    
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins',sans-serif;

}
body{

    display: flex;
    align-items: center;
    justify-content: center;
    height: 100vh;
    background:url(Adsız\ tasarım.png);
   ;
    
    

}
.container{
    background:transparent;
    width: 100%;
    max-width: 700px;
    padding: 25px 30px;
    border-radius: 5px;


}
.container .title{
    position: relative;
    font-size: 25px;
    font-weight: 500;
    color:#ccc
    
    
}
.container .title::before{
    position: absolute;
    content: '';
    left:0;
    bottom: 0;
    height: 3px;
    width: 30px;
    

}
.container form .user-details{
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    color:#ccc
}
form .user-details .input-box{
    margin: 20px 0 12px 0;
    width: calc(100% / 2 - 20px);
}
.user-details .input-box .details{
    font-weight: 500;
    margin-bottom: 5px;
}
.user-details .input-box input{
    height: 45px;
    width: 100%;
    outline: none;
    border-radius: 5px;
    border: 1 px solid #ccc;
    padding-left: 15px;
    font-size: 16px;
    border-bottom-width: 2px;
    transition: all 0.3s ease;
}
.user-details .input-box input:focus,
.user-details .input-box input:valid{
    border-color: #5d317a;
}
form .button{
    height: 45px;
    margin: 45px 0;

}
form .button input{
    height: 100%;
    width: 100%;
    outline: none;
    color: #fff;
    border: none;
    font-size: 18px;
    font-weight: 500;
    border-radius: 5px;
    letter-spacing: 1px;

    background: linear-gradient(90deg,#5d317a 19%, #15062a 60%);
}
form .button input:hover{
    background: linear-gradient(-90deg,#5d317a 19%, #15062a 60%);
}
@media (max-widht:584px){
    .container{
        max-width: 100%;
    }
    form .user-details .input-box{
        margin-bottom: 15px;
        width: 100%;
    }
    .container form .user-details{
        max-height: 300px;
        overflow-y: scroll;
    }
    .user-details::-webkit-scrollbar{
        widht: 0;
    }
}