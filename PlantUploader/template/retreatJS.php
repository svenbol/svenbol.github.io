<?php
return "
    <script>    
    const date = new Date();


    if(date.getDate() <= 9)     var day = ('0' + date.getDate());
    else                        var day = date.getDate();

    if(date.getMonth() < 9)     var month = ('0' + date.getMonth());
    else if(date.getMonth == 9) var month = (date.getMonth()+1);
    else                        var month = date.getMonth();

                                var year = date.getFullYear();

    if(date.getHours() <= 9)    var hour = ('0' + (date.getHours()));
    else                        var hour = date.getHours();

    if(date.getMinutes() <= 9)  var minutes = ('0' + (date.getMinutes()));
    else                        var minutes = date.getMinutes();

    if(date.getSeconds() <= 9)  var seconds = ('0' + date.getSeconds()).slice(-2);
    else                        var seconds = date.getSeconds();

    //console.log(day); console.log(month); console.log(year);
    //console.log(hour);console.log(minutes); console.log(seconds);

    var dateOne,dateTwo,dateThree;

    var minTempOne,minTempTwo,minTempThree;
    var minTemp;

    var maxTempOne,maxTempTwo,maxTempThree;
    var maxTemp;

    var humidityOne, humidityTwo, humidityThree;
    var humidity;


    fetch('https://api.weatherapi.com/v1/forecast.json?key=bc9f2540260d460f86d113530211908&q=Lier&days=7&aqi=no&alerts=no')
    .then(res => res.json())
    .then((out) => {    
        console.log('LOCAL DATE: ' + day+'/'+month+'/'+year+'   -   TIME: ' + hour + ':' + minutes);
        console.log('Date: ' + date)
              
        console.log(out);
        
        //______________________________________________INIT____
        minTempOne      = out.forecast.forecastday[0].day.mintemp_c;
        minTempTwo      = out.forecast.forecastday[1].day.mintemp_c;
        minTempThree    = out.forecast.forecastday[2].day.mintemp_c;
        var minTemps    = [minTempOne,minTempTwo,minTempThree];
        minTemp         = Math.min(...minTemps);

        maxTempOne      = out.forecast.forecastday[0].day.maxtemp_c;
        maxTempTwo      = out.forecast.forecastday[1].day.maxtemp_c;
        maxTempThree    = out.forecast.forecastday[2].day.maxtemp_c;
        var maxTemps    = [maxTempOne,maxTempTwo,maxTempThree];
        maxTemp         = Math.max(...maxTemps);

        humidityOne     = out.forecast.forecastday[0].day.avghumidity;
        humidityTwo     = out.forecast.forecastday[1].day.avghumidity;
        humidityThree   = out.forecast.forecastday[2].day.avghumidity;
        var avgHumidity = [humidityOne,humidityTwo,humidityThree];
        humidity        = (( humidityOne + humidityTwo + humidityThree ) / 3).toFixed(0);

        dateOne         = out.forecast.forecastday[0].date;
        dateTwo         = out.forecast.forecastday[1].date;
        dateThree       = out.forecast.forecastday[2].date;
        
        //______________________________________________DRAW____
        console.log('_______________________________________________________');
        console.log('   COLDEST TEMP:     ' + minTemp.toFixed(1) + ' °C');
        console.log('   HOTTEST TEMP:     ' + maxTemp.toFixed(1) + ' °C');
        console.log('   Average Humidity: ' + humidity);
        console.log(' - - - - - - - - - - - - - - - - - - - - - - - - - - - ')
        console.log('       Today: ' + dateOne + ' h: ' + humidityOne + ' t: ' + minTempOne);
        console.log('    Tomorrow: ' + dateTwo + ' h: ' + humidityTwo + ' t: ' + minTempTwo);
        console.log('    AfterTom: ' + dateThree + ' h: ' + humidityThree + ' t: ' + minTempThree);
        
        console.log('_______________________________________________________');

    }).catch(backUpWeather());
    //.catch(err => console.error(err));

    function backUpWeather(){
        fetch('https://api.openweathermap.org/data/2.5/onecall?lat=51.07&lon=4.34&exclude=current,minutely,hourly,alerts&appid=820d099617ca5eee7f1f40e96ec764b7')
        .then(res => res.json())
        .then((out) => {    
            //console.clear();
            console.log(out);
        
            //______________________________________________INIT____
            minTempOne      = parseInt(out.daily[0].temp.min) - 269;
            minTempTwo      = parseInt(out.daily[1].temp.min) - 269;
            minTempThree    = parseInt(out.daily[2].temp.min) - 269;
            var minTemps    = [minTempOne,minTempTwo,minTempThree];
            minTemp         = Math.min(...minTemps);
    
            maxTempOne      = parseInt(out.daily[0].temp.max) - 269;
            maxTempTwo      = parseInt(out.daily[1].temp.max) - 269;
            maxTempThree    = parseInt(out.daily[2].temp.max) - 269;
            var maxTemps    = [maxTempOne,maxTempTwo,maxTempThree];
            maxTemp         = Math.max(...maxTemps);
    
            humidityOne     = out.daily[0].humidity;
            humidityTwo     = out.daily[1].humidity;
            humidityThree   = out.daily[2].humidity;
            var avgHumidity = [humidityOne,humidityTwo,humidityThree];
            humidity        = (( humidityOne + humidityTwo + humidityThree ) / 3).toFixed(0);
            
            
            //______________________________________________DRAW____
            console.log('_______________________________________________________');
            console.log('   COLDEST TEMP:     ' + minTemp.toFixed(1) + ' °C');
            console.log('   HOTTEST TEMP:     ' + maxTemp.toFixed(1) + ' °C');
            console.log('   Average Humidity: ' + humidity);
            console.log(' - - - - - - - - - - - - - - - - - - - - - - - - - - - ')
            console.log('       Today: ' + ' h: ' + humidityOne + ' || -C°: ' + minTempOne + '    +C°: ' + maxTempOne);
            console.log('    Tomorrow: ' + ' h: ' + humidityTwo + ' || -C°: ' + minTempTwo + '    +C°: ' + maxTempTwo);
            console.log('    AfterTom: ' + ' h: ' + humidityThree + ' || -C°: ' + minTempThree + '    +C°: ' +  maxTempThree);
            
            console.log('_______________________________________________________');
        
    
        }).catch(err => console.error(err));
    }
    
    window.onload = function(){
        const itemz = document.getElementsByClassName('itemz');
        const item = document.querySelectorAll('.minTemp');

        for(var i=0; i < itemz.length ; i++){
            if(parseInt(item[i].innerHTML) > minTemp.toFixed(2)){
                itemz[i].style.backgroundColor = 'rgba(250,25,25,0.5)';  
            }   
        }
        // HOVER (js-way , because i colored elements by js)
        const itemzz = document.querySelectorAll('.itemz');

        for(let o = 0; o < itemzz.length ; o++){
            itemzz[o].addEventListener('mouseover',function(){
                itemzz[o].style.backgroundColor = 'rgba(75,200,75,0.66)';
                
            });

            itemzz[o].addEventListener('mouseout',function(){
                if(parseInt(item[o].innerHTML) > minTemp.toFixed(2)){
                    itemzz[o].style.backgroundColor = 'rgba(250,25,25,0.5)';
                }
                else{
                    itemzz[o].style.backgroundColor = 'transparent';
                }
            });
        }
    
        document.getElementsByClassName('coldestTemp')[0].innerHTML = 'Get your red marked plants inside , temperature is: ' + minTemp + ' °C';
        document.getElementsByClassName('coldestTemp')[0].className += ' text-center';
    }

    </script>
";