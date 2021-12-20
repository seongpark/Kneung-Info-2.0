var filter = "win16|win32|win64|mac|macintel"; 
if (navigator.platform) 
    { 
        if ( filter.indexOf( navigator.platform.toLowerCase() ) < 0 ) 
            { //mobile alert

            } 
            else 
            {
                //pc alert
                alert('모바일로 접속해주세요.');
                location.href="https://kneunginfo.kro.kr";
            } 
        }
