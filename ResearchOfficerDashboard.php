<!DOCTYPE html>
<head>
    <title>CResearch Officer Dashboard</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #fff;
            font-family: Arial, sans-serif;
        }

        #logo {
            position: absolute;
            top: 10px;
            left: 10px;
            width: 250px;
            height: auto;
        }

        #clocks {
            position: absolute;
            top: 125px;
            left: 600px;
            text-align: center;
            font-size: 20px;
        }
        #London {
            position: absolute;
            top: 5px;
            left: 860px;
        }
        #Tokyo {
            position: absolute;
            top: 5px;
            left: 1060px;
        }
        #KualaLumpur {
            position: absolute;
            top: 5px;
            left: 1260px;
        }
        
        
        .clock {
            display: inline-block;
            margin: 0 20px;
        }
    </style>
</head>
<body>
    <img id="logo" src="images/miros logo.png" alt="Company Logo">
    
    <div id="clocks">
        <div class="clock" id="new-york-clock"></div>
        <div class="clock" id="london-clock"></div>
        <div class="clock" id="tokyo-clock"></div>
        <div class="clock" id="kuala-lumpur-clock"></div>
        <div class="clock" id="dubai-clock"></div>
    </div>

    <iframe id="London" src="https://free.timeanddate.com/clock/i9aho7r3/n1316/szw110/szh110/hocddd/hbw0/hfc000/cf100/hgr0/hwc000/fav0/fiv0/mqcfff/mql15/mqw8/mqd100/mhcfff/mhl15/mhw4/mhd100/mmv0/hhcff9/hmcff9" frameborder="0" width="110" height="110"></iframe>
    <iframe id="Tokyo" src="https://free.timeanddate.com/clock/i9aho7r3/n248/szw110/szh110/hocddd/hbw0/hfc000/cf100/hgr0/hwc000/fav0/fiv0/mqcfff/mql15/mqw8/mqd100/mhcfff/mhl15/mhw4/mhd100/mmv0/hhcff9/hmcff9" frameborder="0" width="110" height="110"></iframe>
    <iframe id="KualaLumpur" src="https://free.timeanddate.com/clock/i9aho7r3/n4826/szw110/szh110/hocddd/hbw0/hfc000/cf100/hgr0/hwc000/fav0/fiv0/mqcfff/mql15/mqw8/mqd100/mhcfff/mhl15/mhw4/mhd100/mmv0/hhcff9/hmcff9" frameborder="0" width="110" height="110"></iframe>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment-timezone/0.5.36/moment-timezone-with-data.min.js"></script>
    <script>
        function updateClocks() {
            const newYorkTime = moment().tz("America/New_York").format('HH:mm:ss');
            document.getElementById('new-york-clock').innerText = `New York: ${newYorkTime}`;

            const londonTime = moment().tz("Europe/London").format('HH:mm:ss');
            document.getElementById('london-clock').innerText = `London: ${londonTime}`;

            const tokyoTime = moment().tz("Asia/Tokyo").format('HH:mm:ss');
            document.getElementById('tokyo-clock').innerText = `Tokyo: ${tokyoTime}`;

            const kualaLumpurTime = moment().tz("Asia/Kuala_Lumpur").format('HH:mm:ss');
            document.getElementById('kuala-lumpur-clock').innerText = `Kuala Lumpur: ${kualaLumpurTime}`;

            const dubaiTime = moment().tz("Asia/Dubai").format('HH:mm:ss');
            document.getElementById('dubai-clock').innerText = `Dubai: ${dubaiTime}`;
        }

        setInterval(updateClocks, 1000);
        updateClocks();
    </script>
</body>
</html>

