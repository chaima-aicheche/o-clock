<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/horloge.css">
    <script type="text/javascript" src="../public/js/horloge.js"></script>
    
    
    <title>Horloge</title>
</head>
<body>
    
        <div class="container">
            <div class="horloge">
                <div class="heure">
                    <div class="hr"></div>
                </div>
                <div class="minute">
                    <div class="min"></div>
                </div>
                <div class="seconde">
                    <div class="sec"></div>
                </div>

            </div>


            <div class="numerique">
                <p class="h-ana"></p>
                <p class="m-ana"></p>
                <p class="s-ana"></p>
            </div>
        </div>
    
 <script>
    const deg = 6;
    const hr = document.querySelector(".hr");
    const min = document.querySelector(".min");
    const sec = document.querySelector(".sec");
    let h_ana = document.querySelector(".h-ana");
    let m_ana = document.querySelector(".m-ana");
    let s_ana = document.querySelector(".s-ana");

    setInterval(()=> {

        let date =new Date()
         let h =date.getHours();
         let m =date.getMinutes();
         let s =date.getSeconds();

         hr.style.transform= `rotateZ(${(h * 30) +  (m/12)}deg)`;
         min.style.transform= `rotateZ(${m * deg}deg)`;
         sec.style.transform= `rotateZ(${s * deg}deg)`;

         h_ana.innerHTML =h;
         m_ana.innerHTML =m;
         s_ana.innerHTML =s;

    })
   </script> 
</body>
</html>